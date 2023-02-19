<?php

namespace App\Filters\v1;

use  App\Filters\ApiFilter;
use Illuminate\Http\Request;

class CustomersFilter extends ApiFilter
{
    protected $safeParms = [
        'name' => ['eq', 'gt', 'lt', 'lte', 'gte', 'ne'],
        'type' => ['eq', 'gt', 'lt', 'lte', 'gte', 'ne'],
        'email' => ['eq', 'gt', 'lt', 'lte', 'gte', 'ne'],
        'address' => ['eq', 'gt', 'lt', 'lte', 'gte', 'ne'],
        'city' => ['eq', 'gt', 'lt', 'lte', 'gte', 'ne'],
        'state' => ['eq', 'gt', 'lt', 'lte', 'gte', 'ne'],
        'postalCode' => ['eq', 'gt', 'lt', 'lte', 'gte', 'ne'],
    ];

    protected $columnMap = [
        'postalCode' => 'postal_code'
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
