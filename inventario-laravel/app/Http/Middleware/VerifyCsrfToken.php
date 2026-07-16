<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

/**
 * Verifica el token CSRF para proteger contra ataques de falsificacion de solicitudes
 */

class VerifyCsrfToken extends Middleware 
{
    /**
     * nombre de los campos que no se deben impir espacios
     * 
     * @var array<int, string>
     */
    protected $except = [
        //
    ];
}