<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProduitRequest;
use App\Http\Requests\UpdateProduitRequest;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Auth\Middleware\Authenticate;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return \App\Models\Product::all();

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        #return \App\Models\Product::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProduitRequest $request)
    {
        $user = User::first();
        $shop = Shop::find('9bca2811-ce18-4352-9c3d-91cf415ed804');
//       $shop = $user->shop()->find($request->shop_id);
//       $product = Product::create($request->all());
        $product = new Product();
        $product->fill($request->all());
        $product->save();
       $shop->product->attach($product);

       return response()->json($product, 200);

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $produit)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $produit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProduitRequest $request, Product $produit)
    {
        return $produit->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $produit)
    {
        return $produit->delete();
    }
}
