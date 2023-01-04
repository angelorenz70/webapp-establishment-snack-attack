<?php

namespace App\Services\Version1;

use App\Services\ApiFilter;
use Illuminate\Http\Request;

class UserQuery extends ApiFilter{
    protected $safeParms = [
        'name' => ['eq'],
        'email' => ['eq'],
    ];

    protected $columnMap = [];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
    ];
}