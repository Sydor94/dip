<?php

namespace App\Http\Controllers;
use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        $orderCount = $orders->count();
        return view('orders', compact('orders', 'orderCount'));
    }  //
    public function create()
    {
        return view('createorder');
    }  //
    public function edit($id)
    {
        $order = Order::find($id);
        return view('editorder', compact('order'));
    }
    public function update(Request $request, Order $order)
    {
        Order::find($order->id)->update($request->all());
        return redirect()->route('orders.index');
    }
    public function destroy($id)
    {
        $order = Order::find($id);
        $order->delete();
        return redirect()->route('orders.index');
    }
    public function store(Request $request)
    {
        Order::create($request->all());
        return redirect()->route('orders.index');
    }
}
