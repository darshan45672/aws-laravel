<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    Artisan::call('migrate');

    return view('welcome');
});
