<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

#Route::get('/produits', [\App\Http\Controllers\ProduitController::class, 'index']);

Route::get('/products', function () {
    return view('products', ['name' => 'James']);
});
