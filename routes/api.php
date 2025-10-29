<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::prefix('v1')->group(function () {
    Route::prefix('/auth')->group(function () {
        require __DIR__ . '/api/auth.php';
    });

   Route::middleware('auth:sanctum')->group(function () {
        Route::get('/auth/user', function (Request $request) {
            $data = $request->user();
            $data['role'] = $data->getRoleNames();
            return response()->json([
                'user' => $request->user(), 
            ]);
        });
        Route::middleware('ensure.plan.exist')->group(function () {
            Route::apiResource('/clients', \App\Http\Controllers\Api\ClientController::class);
        });
    });
});

