<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public $table = 'payments';

    public $fillable = [
        'mail',
        'posId',
        'sessionId',
        'orderId',
        'currency',
        'chanel',
        'statement'
    ];

    protected $casts = [
        'mail' => 'string',
        'posId' => 'string',
        'sessionId' => 'string',
        'orderId' => 'string',
        'currency' => 'string',
        'chanel' => 'string',
        'statement' => 'string'
    ];

    public static array $rules = [
        'mail' => 'required',
        'posId' => 'required',
        'sessionId' => 'required'
    ];

    
}
