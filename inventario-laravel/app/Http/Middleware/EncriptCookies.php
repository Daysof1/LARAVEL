<?php

use Illuminate\Cookie\Middleware\EncryptCookies as Middleware;

class EncriptCookies extends Middleware 
{
    protected $except = [
        //
    ];
}