<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/admin')->group(function () {
    Route::get('/dashboard', fn() => view('admin.dashboard'));
    Route::get('/tenant', fn() => view('admin.tenant'));
    Route::get('/setting', fn() => view('admin.setting'));
});