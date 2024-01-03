<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public $table = 'items';

    public $fillable = [
        'name',
        'slug',
        'image',
        'short_description',
        'description',
        'lat',
        'lon'
    ];

    protected $casts = [
        'name' => 'string',
        'slug' => 'string',
        'image' => 'string',
        'short_description' => 'string',
        'description' => 'string',
        'lat' => 'string',
        'lon' => 'string'
    ];

    public static array $rules = [
        'name' => 'required',
        'slug' => 'required',
        'image' => 'required'
    ];

    
}
