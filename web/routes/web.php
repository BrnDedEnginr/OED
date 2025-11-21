<?php

use Illuminate\Support\Facades\Route;

require 'routes/auth.php';

Route::get('/', function () {
    return view('welcome');
});
