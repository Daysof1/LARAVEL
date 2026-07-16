<?php

use Illuminate\Auth\Middleware\RedirectIfAuthenticated as Middleware;
use Illuminate\Http\Request;
use Illuminate\Spport\Facades\Auth;

/**
 * Es que redirige al usuario al dashboard si ya esta autenticado
 */

class RedirectIfAuthenticated extends Middleware 
{
    public function handle(Request  $request, \Closure $next, string ...$guards): \Symfony\Component\HttpFoundation\Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()){
                return redirect('/dashboard');
            }
        }

        return $next($request);
    }
}