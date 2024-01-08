<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\PageContent;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Requests\ProductFormRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.category.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    public function showAdminCreateProductType(Request $request)
    {
        // Retrieve the product_id from the request
        $product_id = $request->input('product_id');

        return view('admin.product.create', ['product_id' => $product_id]);
    }


    public function productDetails($id)
    {
        $page_content = PageContent::all();
        $product = Product::findOrFail($id);
        $customMessage = $product->custom_message;
        $encodedMessage = urlencode($customMessage);
        $phoneNumber = $page_content->where('id', 13)->first()->content;
        $whatsAppLink = "https://wa.me/+62{$phoneNumber}?text={$encodedMessage}";


        return view('productdetail', compact('product', 'page_content', 'whatsAppLink'));
    }

    public function productdetail(Request $request)
    {
        $page_content = PageContent::all();
        $productId = $request->input('product_id');
        $product = Product::findOrFail($productId);
        $customMessage = $product->custom_message;
        $encodedMessage = urlencode($customMessage);
        $phoneNumber = $page_content->where('id', 13)->first()->content;
        $whatsAppLink = "https://wa.me/+62{$phoneNumber}?text={$encodedMessage}";
        return view('productdetail', compact('page_content', 'product', 'whatsAppLink'));
    }

    public function shop()
    {
        $products = Product::all(); // Fetch products from your database
        $page_content = PageContent::all();

        return view('shop', compact('products', 'page_content'));
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


        if ($request->hasFile('image')) {
            $uploadPath = 'uploads/products/';
            foreach ($request->file('image') as $imageFile) {
                $extension = $imageFile->getClientOriginalExtension();
                $filename = time() . '_' . uniqid() . '.' . $extension;
                $imageFile->move($uploadPath, $filename);
                $finalImagePathName = $uploadPath . $filename;

                // Associate images with the product using the productImages relationship
                $product->productImages()->create([
                    'image_path' => $finalImagePathName,
                ]);
            }
        }

        return redirect()->route('products.index')->with('message', 'Product Added Successfully');
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
    public function edit(int $product_id)
    {
        $product = Product::findorFail($product_id);
        return view('admin.category.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductFormRequest $request, int $product_id)
    {
        $validatedData = $request->validated();

        $product = Product::find($product_id);

        if ($product) {
            $product->update([
                'name' => $validatedData['name'],
                'description' => $validatedData['description'],
                'custom_message' => $validatedData['custom_message'],
            ]);


            if ($request->hasFile('image')) {
                $uploadPath = 'uploads/products/';
                foreach ($request->file('image') as $imageFile) {
                    $extension = $imageFile->getClientOriginalExtension();
                    $filename = time() . '_' . uniqid() . '.' . $extension;
                    $imageFile->move($uploadPath, $filename);
                    $finalImagePathName = $uploadPath . $filename;

                    // Associate images with the product using the productImages relationship
                    $product->productImages()->create([
                        'image_path' => $finalImagePathName,
                    ]);
                }
            }

            return redirect()->route('products.index')->with('message', 'Product Updated Successfully');

        } else {

            return redirect()->route('products.index')->with('message', 'Product not found');
        }
    }

    public function destroyImage(int $product_image_id)
    {
        $productImage = ProductImage::findorFail($product_image_id);
        if (File::exists($productImage->image_path)) {
            File::delete($productImage->image_path);
        }
        $productImage->delete();
        return redirect()->back()->with('message', 'Product Image Deleted Successfully');

    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $product_id)
    {
        $product = Product::findorFail($product_id);
        if ($product->productImages) {
            foreach ($product->productImages as $image) {
                if (File::exists($image->image_path)) {
                    File::delete($image->image_path);
                }
            }
        }

        $product->delete();
        return redirect()->route('products.index')->with('message', 'Product Deleted Successfully');
    }


}
