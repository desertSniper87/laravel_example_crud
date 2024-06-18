<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Api\v1\PhoneController;

Route::prefix('v1')-> group(function() {
    Route::apiResource('phones', PhoneController::class);
});
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
