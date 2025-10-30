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
            $data['role'] = $data->role_names;;
            return response()->json([
                'user' => $request->user(), 
            ]);
        });
        Route::apiResource('/categories', \App\Http\Controllers\Api\CategoryController::class);
        Route::apiResource('/brands', \App\Http\Controllers\Api\BrandController::class);

        Route::middleware('ensure.plan.exist')->group(function () {
            Route::apiResource('/clients', \App\Http\Controllers\Api\ClientController::class);
        });
    });
});

