<?php

namespace Statamic\Stache\Indexes;

use Illuminate\Support\Facades\DB;
use Statamic\Facades\Stache;

abstract class Index
{
    protected $store;
    protected $name;
    protected $items = [];
    /** @var \Illuminate\Database\Connection $db */
    protected $db;

    public function __construct($store, $name)
    {
        $this->store = $store;
        $this->name = $name;

        $path = config("database.connections.stache_indexes.database");

        if (!file_exists($path)) {
            touch($path);
        }

        $this->db = DB::connection("stache_indexes");
        $this->db->unprepared(<<<SQL
            ; One time
            PRAGMA auto_vacuum = incremental;
            PRAGMA journal_mode = WAL;
            PRAGMA page_size = 32768;

            ; Every time
            PRAGMA busy_timeout = 5000;
            PRAGMA cache_size = -20000;
            PRAGMA foreign_keys = ON;
            PRAGMA incremental_vacuum;
            PRAGMA mmap_size = 2147483648;
            PRAGMA temp_store = MEMORY;
            PRAGMA synchronous = NORMAL;
        SQL);
        $this->db->statement(
            "CREATE TABLE IF NOT EXISTS '?' (key VARCHAR PRIMARY KEY, value TEXT)",
            [$this->cacheKey()],
        );
    }

    public function name()
    {
        return $this->name;
    }

    public function items()
    {
        return $this->table()->pluck("value", "key");
    }

    public function values()
    {
        return $this->table()->pluck("value")->all();
    }

    public function keys()
    {
        return $this->table()->pluck("key")->all();
    }

    public function get($key)
    {
        return $this->table()->where('key', (string) $key)->value('value');
    }

    public function has($key)
    {
        return $this->table()->where('key', (string) $key)->exists();
    }

    public function put($key, $value)
    {
        $this->table()->updateOrInsert(
            ['key' => (string) $key],
            ['value' => (string) $value],
        );
    }

    public function push($value)
    {
        $this->table()->insert([
            'key' => (string) $value,
            'value' => (string) $value,
        ]);
    }

    public function load()
    {
        return $this;
    }

    public function update()
    {
        if (!Stache::shouldUpdateIndexes()) {
            return $this;
        }

        debugbar()->addMessage("Updating index: {$this->store->key()}/{$this->name}", 'stache');

        $this->db->beginTransaction();


        $count = 0;
        $chunk = [];
        foreach ($this->getItems() as $item) {
            $chunk[] = [
                'key' => $this->store->getItemKey($item),
                'value' => $this->getItemValue($item),
            ];
            $count++;

            if ($count / 100 > 0) {
                $this->table()->upsert($chunk, ['key'], ['value']);
                $chunk = [];
                $count = 0;
            }
        }

        $this->table()->upsert($chunk, ['key'], ['value']);

        $this->db->commit();

        return $this;
    }

    public function isCached()
    {
        return $this->db->getSchemaBuilder()->hasTable($this->cacheKey());
    }

    public function cache()
    {
        Stache::cacheStore()->forever($this->cacheKey(), $this->items);
    }

    public function updateItem($item)
    {
        $this->put($this->store->getItemKey($item), $this->getItemValue($item));
    }

    public function forgetItem($key)
    {
        $this->table()->where('key', $key)->delete();
    }

    abstract public function getItems();
    abstract public function getItemValue($item);

    public function cacheKey()
    {
        return str($this->store->key())
            ->replace([".", "->", "-]", "/", "::", "-"], "_")
            ->append("_", $this->name)
            ->value();
    }

    public function table()
    {
        return $this->db->table($this->cacheKey());
    }

    public function clear()
    {
        return $this->table()->delete();
    }
}
