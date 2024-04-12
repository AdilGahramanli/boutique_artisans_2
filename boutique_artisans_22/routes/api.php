<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;

##Api resource return json file
Route::apiResource("products", \App\Http\Controllers\ProduitController::class);
Route::apiResource("shops", \App\Http\Controllers\ShopController::class)->middleware('auth:sanctum');
Route::apiResource("roles", \App\Http\Controllers\RoleController::class);
Route::apiResource("users", \App\Http\Controllers\UserController::class);
#->middleware('auth')



Route::post('register',[UserAuthController::class,'register']);
Route::post('login',[UserAuthController::class,'login']);
Route::post('logout',[UserAuthController::class,'logout'])
    ->middleware('auth:sanctum');
