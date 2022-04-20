<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\Level;
use App\Http\Controllers\LevelController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('levels', LevelController::class);
