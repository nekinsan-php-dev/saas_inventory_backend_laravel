<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Admin Routes
require __DIR__.'/admin.php';
