<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('v1/books', App\Http\Controllers\Api\V1\BookController::class)/* 
    ->middleware('auth:sanctum') */;

Route::post('login', [
    App\Http\Controllers\Api\LoginController::class,
    'login'
]);
