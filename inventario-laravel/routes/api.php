<?php

use App\Http\Controllers\ApiAuthController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\SubcategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::post('/login', [ApiAuthController::class, 'Login']);

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/me', [ApiAuthController::class, 'me']);
    Route::post('/logout', [ApiAuthController::class, 'logout']);

    Route::apiResource('categorias', CategoriaController::class);
    Route::apiResource('subcategorias', SubcategoriaController::class);
    Route::apiResource('productos', ProductoController::class);
    Route::apiResource('usuarios', UserController::class);
});
