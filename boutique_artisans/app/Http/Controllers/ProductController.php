<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProduitRequest;
use App\Http\Requests\UpdateProduitRequest;

class ProductController extends Controller
{
    /**
         * @OA\Get(
         *     path="/products_all",
         *     tags={"Products"},
         *     summary="Get list of all products",
         *     description="Returns list of products",
         *     @OA\Response(
         *         response=200,
         *         description="Successful operation",
         *     )
         * )
         */
    public function index()
    {
        //
        //return \App\Models\Product::all();
        $products = Product::all();
        return view('products', ['products' => $products]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProduitRequest $request)
    {
       $product = Product::create($request->all());
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
