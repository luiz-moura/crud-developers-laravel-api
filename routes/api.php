<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NivelController;
use App\Http\Controllers\DesenvolvedorController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('niveis', NivelController::class)->parameter('niveis', 'nivel');
Route::apiResource('desenvolvedores', DesenvolvedorController::class)->parameter('desenvolvedores', 'desenvolvedor');
