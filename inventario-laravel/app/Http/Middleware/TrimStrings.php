<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\TrimString as Middleware;

/**
 * Elimina los espacios innecearios de las de texto
 */

class TrimStrings extends Middleware 
{
    /**
     * nombre de los campos que no se deben impir espacios
     * 
     * @var array<int, string>
     */
    protected $except = [
        'current_password',
        'password',
        'password_confirmation',
    ];
}