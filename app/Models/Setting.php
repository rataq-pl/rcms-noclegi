<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    public $table = 'settings';

    public $fillable = [
        'user_id',
        'posId',
        'secretId',
        'websiteName',
        'websiteDescription',
        'websiteImage'
    ];

    protected $casts = [
        'user_id' => 'integer',
        'posId' => 'string',
        'secretId' => 'string',
        'websiteName' => 'string',
        'websiteDescription' => 'string',
        'websiteImage' => 'string'
    ];

    public static array $rules = [
        'user_id' => 'required'
    ];

    
}
