<?php

use App\Http\Controllers\MaquinaVirtualController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::resource('/', MaquinaVirtualController::class);
