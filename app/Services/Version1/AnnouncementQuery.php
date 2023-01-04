<?php

namespace App\Services\Version1;

use App\Services\ApiFilter;
use Illuminate\Http\Request;

class AnnouncementQuery extends ApiFilter{
    protected $safeParms = [
        'header' => ['eq'],
        'sub_header' => ['eq'],
        'image' => ['eq'],
        'user_id' => ['eq', 'gt', 'lt']
    ];

    protected $columnMap = [
        'user_id' => 'user_id'
    ];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
    ];
}