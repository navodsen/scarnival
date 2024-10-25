<?php

use App\Http\Controllers\Seater;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('scarnival', [Seater::class, 'index']);

Route::get('sbacklay', [Seater::class, 'backLayout']);

Route::post('/update-table', [Seater::class, 'updateTable']);