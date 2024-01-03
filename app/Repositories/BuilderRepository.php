<?php

namespace App\Repositories;

use App\Models\Builder;
use App\Repositories\BaseRepository;

class BuilderRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'name',
        'content',
        'modules'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Builder::class;
    }
}
