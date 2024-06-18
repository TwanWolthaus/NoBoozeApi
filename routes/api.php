<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MedalController;
use App\Http\Controllers\AddictstoryController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;


Route::prefix('auth')->group(function () {
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
});


// ->middleware('auth:sanctum')
Route::prefix('users')->group(function () {
    Route::put('/update/{id}', [UserController::class, 'update']);
    Route::delete('/', [UserController::class, 'delete']);

    Route::get('/medals', [UserController::class, 'showMedals']);
});


Route::prefix('medals')->group(function () {
    Route::get('/all', [MedalController::class, 'index']);
    Route::get('/id/{id}', [MedalController::class, 'showById']);
    Route::get('/name/{name}', [MedalController::class, 'showByName']);
});


Route::prefix('addictstories')->group(function () {
    Route::get('/all', [AddictstoryController::class, 'index']);
    Route::get('/id/{id}', [AddictstoryController::class, 'showById']);
});