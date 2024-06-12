<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test', function () {
    return view('other');
});

Route::get('/carla', function () {
    return view('ernst');
});
