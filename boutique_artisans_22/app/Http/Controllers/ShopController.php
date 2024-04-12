<?php

namespace App\Http\Controllers;

use App\Models\shop;
use App\Http\Requests\StoreShopRequest;
use App\Http\Requests\UpdateShopRequest;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Shop::with("products")->get();
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
    public function store(StoreShopRequest $request)
    {
        $user = Auth::user();
        $userId = $user->id;

        $name = $request->name;
        $desc = $request->description;

        $shop = Shop::create([
            'name' => $name,
            'description' => $desc,
            'user_id' => $userId
        ]);

        return response()->json($shop, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(shop $shop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(shop $shop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateShopRequest $request, shop $shop)
    {
        return $shop->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(shop $shop)
    {
        return $shop->delete();
    }
}
