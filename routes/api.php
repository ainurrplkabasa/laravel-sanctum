<?php

use App\Http\Controllers\Api\auth\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/auth/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/auth/register', [AuthController::class,'register']);
Route::post('/auth/login',[AuthController::class,'login']);

Route::middleware('auth:sanctum')->group(function(){
    Route::post('/auth/logout',[AuthController::class, 'logout']);
});
