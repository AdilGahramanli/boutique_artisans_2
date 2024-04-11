<?php

use Illuminate\Support\Facades\Route;

##Api resource return json file
Route::apiResource("products", \App\Http\Controllers\ProduitController::class)->middleware('auth');
Route::apiResource("shops", \App\Http\Controllers\ShopController::class);
Route::apiResource("roles", \App\Http\Controllers\RoleController::class);
Route::apiResource("users", \App\Http\Controllers\UserController::class);

