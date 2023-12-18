<?php

namespace App\Http\Controllers;

use App\Models\ProductType;
use App\Http\Requests\StoreProductTypeRequest;
use App\Http\Requests\UpdateProductTypeRequest;
use Illuminate\Http\Request;

class ProductTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string',
            'code' => 'required|string',
            'volume' => 'required|numeric',
            'dimension' => 'required|string',
            'pack_size' => 'required|string',
            'product_id' => 'required|exists:products,id',
        ]);

        // Create a new product type
        ProductType::create([
            'name' => $request->input('name'),
            'code' => $request->input('code'),
            'volume' => $request->input('volume'),
            'dimension' => $request->input('dimension'),
            'pack_size' => $request->input('pack_size'),
            'product' => $request->input('product_id'),
        ]);

        // Redirect back with a success message
        return redirect()->route('products.edit', ['product' => $request->input('product_id')])
    ->with('message', 'Product Type Added');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductType $productType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductType $productType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductTypeRequest $request, ProductType $productType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductType $productType)
    {
        //
    }
}
