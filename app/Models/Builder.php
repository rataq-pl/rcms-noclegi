<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Builder extends Model
{
    public $table = 'builders';

    public $fillable = [
        'name',
        'content',
        'modules'
    ];

    protected $casts = [
        'name' => 'string',
        'content' => 'string',
        'modules' => 'string'
    ];

    public static array $rules = [
        'name' => 'require',
        'content' => 'required'
    ];

    
}
