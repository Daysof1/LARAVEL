<?php

use Illuminate\Foundation\Http\Middleware\PreventRequestDuringMaintenance as Middleware;

class PreventRequestDuringMaintenance extends Middleware 
{
    protected $except = [
        //
    ];
}