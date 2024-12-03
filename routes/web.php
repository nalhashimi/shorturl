<?php

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    Log::info('Showing the user profile for user: {id}');
    return view('welcome');
});
