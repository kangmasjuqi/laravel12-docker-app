<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return response()->json([
        'message' => 'Bismillah...Hello World from Laravel 12!',
        'timestamp' => now(),
        'version' => app()->version()
    ]);
});
