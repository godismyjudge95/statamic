<?php

namespace Statamic\Stache;

use Illuminate\Filesystem\Filesystem;
use Statamic\Facades\Path;
use Symfony\Component\Finder\Finder;

class Traverser
{
    protected $filesystem;
    protected $filter;

    public function __construct(Filesystem $filesystem)
    {
        $this->filesystem = $filesystem;
    }

    public function traverse($store)
    {
        if (!$dir = $store->directory()) {
            throw new \Exception("Store [{$store->key()}] does not have a directory defined.");
        }

        $dir = rtrim($dir, '/');
        if (!$this->filesystem->exists($dir)) {
            return collect();
        }

        $it = Finder::create()->in($dir)->files()->ignoreDotFiles(true);
        if ($this->filter) {
            $it = $it->filter($this->filter);
        }

        $paths = [];
        foreach ($it as $file) {
            /** @var \SplFileInfo $file */

            $path = Path::tidy($file->getPathname());
            $timestamp = $file->getMTime();

            yield $path => $timestamp;
            $paths[$path] = $timestamp;
        }

        return collect($paths);
    }

    public function filter($filter)
    {
        $this->filter = $filter;

        return $this;
    }
}
