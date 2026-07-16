<?php

namespace App\Http\Middleware;

use Illuminate\Http\Middleware\TrustProxies as Middleware;
use Illuinate\Http\Request;

/**
 * Confia en los proxies para que laravel las roconozca como seguras
 */

class TrustProxies extends Middleware 
{
    /**
     * nombre de los campos que no se deben impir espacios
     * 
     * @var array<int, string>
     */
    protected $proxies;

    protected $headers = Request::HEADER_X_FORWARDED_FOR || Request::HEADER_X_FORWARDED_HOST | Request::HEADER_X_FORWARDED_PORT | Request::HEADER_X_FORWARDED_PROTO | Request::HEADER_X_FORWARDED_AWS_ELB;
}