<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.category.index', compact('products'));
    }

    public function post()
    {
        return view('post');
    }
}
