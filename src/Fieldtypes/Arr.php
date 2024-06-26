<?php

namespace Statamic\Fieldtypes;

use Closure;
use Statamic\Facades\GraphQL;
use Statamic\Fields\Fieldtype;
use Statamic\GraphQL\Types\ArrayType;

class Arr extends Fieldtype
{
    protected $categories = ['structured'];
    protected static $handle = 'array';

    protected function configFieldItems(): array
    {
        return [
            [
                'display' => __('Appearance & Behavior'),
                'fields' => [
                    'mode' => [
                        'display' => __('UI Mode'),
                        'instructions' => __('statamic::fieldtypes.array.config.mode'),
                        'type' => 'radio',
                        'default' => 'dynamic',
                        'options' => [
                            'dynamic' => __('Dynamic'),
                            'keyed' => __('Keyed'),
                            'single' => __('Single'),
                        ],
                    ],
                    'keys' => [
                        'display' => __('Keys'),
                        'instructions' => __('statamic::fieldtypes.array.config.keys'),
                        'type' => 'array',
                        'key_header' => __('Key'),
                        'value_header' => __('Label').' ('.__('Optional').')',
                        'add_button' => __('Add Key'),
                        'unless' => [
                            'mode' => 'dynamic',
                        ],
                    ],
                ],
            ],
        ];
    }

    public function preProcess($data)
    {
        return array_replace($this->blankKeyed(), $data ?? []);
    }

    public function preProcessConfig($data)
    {
        return $data ?? [];
    }

    public function process($data)
    {
        return collect($data)
            ->when($this->isKeyed(), function ($data) {
                return $data->filter();
            })
            ->all();
    }

    protected function isKeyed()
    {
        return (bool) $this->config('keys');
    }

    protected function blankKeyed()
    {
        return collect($this->config('keys'))
            ->map(function () {
                return null;
            })
            ->all();
    }

    public function toGqlType()
    {
        return GraphQL::type(ArrayType::NAME);
    }

    public function rules(): array
    {
        if ($this->isKeyed()) {
            return [];
        }

        return [function ($handle, $value, Closure $fail) {
            $values = collect($value);

            if ($values->has('null')) {
                $fail('statamic::validation.arr_fieldtype')->translate();
            }

            if ($values->count() !== $values->reject(fn ($v) => is_null($v))->count()) {
                $fail('statamic::validation.arr_fieldtype')->translate();
            }
        }];
    }
}
