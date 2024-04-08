<?php

use Illuminate\Support\Facades\Route;

##Api resource return json file
Route::apiResource("products", \App\Http\Controllers\ProduitController::class);
Route::apiResource("shops", \App\Http\Controllers\ShopController::class);


