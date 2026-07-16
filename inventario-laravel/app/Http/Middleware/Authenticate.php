<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
/**
 * restringe el acceso a usuarios que no tiene rol
 */
class AdminMiddleware
{
    /**
     * maneja la peticion entrante y valida si el usuario tiene permiso de admin
     * @param \Closure(Illuminate\Http\Request): (\Symfony\Component\HttpFoundatio\Response)
     */
    public function handle (Request $request, Clouser $next): Response
    {
        if (Auth::check() && Auth::user()->role === 'admin') {
            return $next($request);
        }

        abort(403, 'Notienes permisos de administrador');
    }
}