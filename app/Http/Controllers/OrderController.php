<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderStatus;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::all();
        $clients = User::all();
        $products = Product::all();
        $status = OrderStatus::all();
        return view('admin.order.index', compact('orders', 'clients', 'products', 'status'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $orders = Order::all();
        $clients = User::all();
        $products = Product::all();
        $status = OrderStatus::all();
        return view('admin.order.create', compact('orders', 'clients', 'products', 'status'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'client' => 'required|exists:users,id',
            'product' => 'required|exists:products,id',
            'quantity' => 'numeric|required',
            'total_price' => 'decimal:0,2|required',
        ]);

        // array_push($validatedData, [
        //     'price' => $request->total_price/$request->quantity,
        // ]);

        // Create a new product using Eloquent
        $order = Order::create([
            'client' => $validatedData['client'],
            'product' => $validatedData['product'],
            'quantity' => $validatedData['quantity'],
            'total_price' => $validatedData['total_price'],
            'status' => 1,
        ]);

        return redirect('admin/order/')->with('message', 'Order Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }

    public function client($id){
        return User::find($id);
    }

    public function product($id){
        return Product::find($id);
    }
}
