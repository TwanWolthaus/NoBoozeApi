<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MedalController;


Route::prefix('medals')->group(function () {
    Route::get('/', [MedalController::class, 'index']);
    Route::get('/{id}', [MedalController::class, 'show']);
});