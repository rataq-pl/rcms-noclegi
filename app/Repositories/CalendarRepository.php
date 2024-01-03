<?php

namespace App\Repositories;

use App\Models\Calendar;
use App\Repositories\BaseRepository;

class CalendarRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'item_id',
        'from',
        'to',
        'user_id'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Calendar::class;
    }
}
