<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductFormRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.adminproductsdisplay');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.admincreateproduct');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'custom_message' => 'required|string',
            // ... other validation rules
        ]);

        // Create a new product using Eloquent
        $product = Product::create($validatedData);

        if($request->hasFile('image')){
            $uploadPath = 'uploads/products/';
            $i=0;
            foreach($request->file('image') as $imageFile){
                $extention =$imageFile->getClientOriginalExtension();
                $filename = time().$i++.'.'.$extention;
                $imageFile -> move($uploadPath,$filename);
                $finalImagePathName = $uploadPath.$filename;

                $product->productImages()->create([
                    'product_id' => $product->id,
                    'image_path' => $finalImagePathName,
               ]);
            }
        }

        return redirect('admin/products')->with('message', 'Product Added Succesfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
