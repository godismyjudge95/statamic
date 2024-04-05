<?php

namespace Statamic\Contracts\Taxonomies;

interface TermRepository
{
    public function all();

    public function whereTaxonomy(string $handle);

    public function whereInTaxonomy(array $handles);

    public function find($id);

    public function findByUri(string $uri);

    public function findOrFail($id);

    public function make(?string $slug = null);

    public function firstOrNew(array $attributes, array $values = []);

    public function firstOrCreate(array $attributes, array $values = []);

    public function updateOrCreate(array $attributes, array $values = []);

    public function query();

    public function save($entry);

    public function delete($entry);
}
