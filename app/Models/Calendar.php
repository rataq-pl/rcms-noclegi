<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    public $table = 'calendars';

    public $fillable = [
        'item_id',
        'from',
        'to',
        'user_id'
    ];

    protected $casts = [
        'item_id' => 'integer',
        'from' => 'string',
        'to' => 'string',
        'user_id' => 'integer'
    ];

    public static array $rules = [
        'item_id' => 'required',
        'from' => 'required',
        'to' => 'required',
        'user_id' => 'required'
    ];

    
}
