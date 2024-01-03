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
        $statuses = OrderStatus::all();
        return view('admin.order.index', compact('orders', 'clients', 'products', 'statuses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $orders = Order::all();
        $clients = User::all();
        $products = Product::all();
        $statuses = OrderStatus::all();
        return view('admin.order.create', compact('orders', 'clients', 'products', 'statuses'));
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

        // Create a new product using Eloquent
        $order = Order::create([
            'client' => $validatedData['client'],
            'product' => $validatedData['product'],
            'quantity' => $validatedData['quantity'],
            'total_price' => $validatedData['total_price'],
            'status' => 1,
        ]);

        $order->update([
            'tracking_id' => $order->client.$order->product.$order->id
        ]);

        return redirect('admin/order/')->with('message', 'Order Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        $clients = User::all();
        $products = Product::all();
        $statuses = OrderStatus::all();
        return view('admin.order.show', compact('order', 'clients', 'products', 'statuses'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        $clients = User::all();
        $products = Product::all();
        $statuses = OrderStatus::all();
        return view('admin.order.edit', compact('order', 'clients', 'products', 'statuses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $order_id)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'client' => 'required|exists:users,id',
            'product' => 'required|exists:products,id',
            'quantity' => 'numeric|required',
            'total_price' => 'decimal:0,2|required',
            'status' => 'required'
        ]);

        $order = Order::find($order_id);

        // Create a new product using Eloquent
        if($order){
            $order->update([
                'client' => $validatedData['client'],
                'product' => $validatedData['product'],
                'quantity' => $validatedData['quantity'],
                'total_price' => $validatedData['total_price'],
                'status' => $validatedData['status']
            ]);

            return redirect('admin/order/')->with('message', 'Order Edited Successfully');
        }else{
            return redirect('admin/order/')->with('message', 'Order was not Found');
        }


    }

    public function search($tracking_id){
        $orders = Order::all();

        foreach($orders as $order){
            if($tracking_id == $order->tracking_id){
                $searched_order = $order;
            }
        }

        if($searched_order){
            return redirect('track');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($order_id)
    {
        $order = Order::findorFail($order_id);
        $order->delete();
        return redirect('admin/order/')->with('message', 'Order Deleted Successfully');
    }

    public function client($id){
        return User::find($id);
    }

    public function product($id){
        return Product::find($id);
    }
}
