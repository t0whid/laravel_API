<?php

namespace App\Filters\v1;

use  App\Filters\ApiFilter;
use Illuminate\Http\Request;

class InvoicesFilter extends ApiFilter
{
    protected $safeParms = [
        'customerId' => ['eq', 'gt', 'lt', 'lte', 'gte', 'ne'],
        'billedDate' => ['eq', 'gt', 'lt', 'lte', 'gte', 'ne'],
        'paidDate' => ['eq', 'gt', 'lt', 'lte', 'gte', 'ne'],
        'amount' => ['eq', 'gt', 'lt', 'lte', 'gte', 'ne'],
        'status' => ['eq', 'gt', 'lt', 'lte', 'gte', 'ne'],
    ];

    protected $columnMap = [
        'customerId' => 'customer_id',
        'billedDate' => 'billed_date',
        'paidDate' => 'paid_date',
    ];

    protected $operatorMap = [
        'eq' => '=',
        'ne' => '!=',
        'gt' => '>',
        'gte' => '>=',
        'lt' => '<',
        'lte' => '<=',
    ];

}
