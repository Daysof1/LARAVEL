<?php

namespace App\Http\Middleware;

use Illuminate\Routing\Http\Middleware\ValidateSignature as Middleware;
use Illuinate\Http\Request;

/**
 * Valida la firma de las solicitudes url para proteger los enlaces sencibles
 */

class TrustProxies extends Middleware 
{
    /**
     * nombre de los campos que no se deben impir espacios
     * 
     * @var array<int, string>
     */
    protected $except = [
        // 'fbcclid',
        // 'utm_campaign',
        // 'utm_content',
        // 'utm_medium',
        // 'utm_source',
        // 'utm_term',
    ];
}