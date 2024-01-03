<?php

namespace App\Repositories;

use App\Models\Item;
use App\Repositories\BaseRepository;

class ItemRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'name',
        'slug',
        'image',
        'short_description',
        'description',
        'lat',
        'lon'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Item::class;
    }
}
