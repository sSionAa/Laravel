<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::get();
        return response()->json( $products);
    }
 
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $products = new Product();
        $products->sku = $request->sku;
        $products->name = $request->name;
        $products->price = $request->price;
        $products->save();
        return response()->json( $products);
    }
 
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $products = Product::find($id);
        return response()->json($products);
    }
 
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $products = Product::find($id);
        $products->name = $request->name;
        $products->sku = $request->sku;
        $products->price = $request->price;
        $products->save();
        return response()->json($products);
    }
 
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::destroy($id);
        return response()->json(['message' => 'Deleted']);
    }
}
