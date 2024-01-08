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

     function generateTrackingCode($date, $itemId, $clientId)
     {
         $month = $date->format('m');  // Extract month as two-digit string
         $day = $date->format('d');   // Extract day as two-digit string
         $code = sprintf("%02d%02d%03d%03d", $day, $month, $clientId, $itemId);  // Format the code
         return $code;
     }

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
            'quantity' => 'decimal:0,2|required',
            'price' => 'decimal:0,2|required',
        ]);

        // Create a new product using Eloquent
        $order = Order::create([
            'client' => $validatedData['client'],
            'product' => $validatedData['product'],
            'quantity' => $validatedData['quantity'],
            'price' => $validatedData['price'],
            'status' => 1,
        ]);

        $order->update([
            'tracking_id' => OrderController::generateTrackingCode($order->created_at, $order->client, $order->product),
            'total_price' => $order->quantity * $order->price
        ]);

        return redirect('admin/order/')->with('message', 'Order Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function showAdmin(Order $order)
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
            'quantity' => 'decimal:0,2|required',
            'price' => 'decimal:0,2|required',
            'status' => 'required'
        ]);

        $order = Order::find($order_id);

        // Create a new product using Eloquent
        if($order){
            $order->update([
                'client' => $validatedData['client'],
                'product' => $validatedData['product'],
                'quantity' => $validatedData['quantity'],
                'price' => $validatedData['price'],
                'status' => $validatedData['status']
            ]);

            return redirect('admin/order/')->with('message', 'Order Edited Successfully');
        }else{
            return redirect('admin/order/')->with('message', 'Order was not Found');
        }


    }

    public function checkOrders(){
        $user = auth()->user();
        $orders = Order::all()->where('client','=',$user->id);
        $products = Product::all();
        $statuses = OrderStatus::all();

        return view('ordercheck', compact('user', 'orders', 'products', 'statuses'));
    }

    public function track(Request $request){
        $orders = Order::all();

        foreach($orders as $order){
            if($request->tracking_id == $order->tracking_id){
                $searched_order = $order;
                return redirect()->route('order.showUser', ['order' => $searched_order]);
            }
        }

        return redirect('track/')->with('message', 'Order was not Found');
    }

    public function showUser(Order $order){

        $clients = User::all()->where('usertype','=','user');
        $products = Product::all();
        $statuses = OrderStatus::all();
        return view('ordershow', compact('order', 'clients', 'products', 'statuses'));
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
