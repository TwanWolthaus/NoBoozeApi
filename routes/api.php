<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MedalController;
use App\Http\Controllers\AddictstoryController;

// ->middleware('auth:sanctum')
Route::prefix('user')->group(function () {
    Route::get('/', [UserController::class, 'show']);
    Route::put('/', [UserController::class, 'update']);
    Route::delete('/', [UserController::class, 'delete']);
});


Route::prefix('medals')->group(function () {
    Route::get('/', [MedalController::class, 'index']);
    Route::get('/{id}', [MedalController::class, 'show']);
});

Route::prefix('addictstorys')->group(function () {
    Route::get('/', [AddictstoryController::class, 'index']);
    Route::get('/{id}', [AddictstoryController::class, 'show']);
});