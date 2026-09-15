<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\Order;
use App\Models\User;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('user')->get();

        return view('orders.index', compact('orders'));
    }

    public function show($id)
    {
        $order = Order::with(['user', 'orderItems'])->findOrFail($id);

        return view('orders.show', compact('order'));
    }

    public function create()
    {
        return view('orders.create');
    }

    public function store(OrderRequest $request)
    {
        $user = User::firstOrCreate(
            ['name' => $request->user_name],
            [
                'email' => strtolower(str_replace(' ', '', $request->user_name)) . '@gmail.com',
                'password' => '123456',
            ]
        );

        Order::create([
            'user_id' => $user->id
        ]);

        return redirect('/orders')->with(
            'success',
            'Order created successfully.'
        );
    }

    public function edit($id)
    {
        $order = Order::with('user')->findOrFail($id);

        return view('orders.edit', compact('order'));
    }

    public function update(OrderRequest $request, $id)
    {
        $order = Order::findOrFail($id);

        $user = User::firstOrCreate(
            ['name' => $request->user_name],
            [
                'email' => strtolower(str_replace(' ', '', $request->user_name)) . '@gmail.com',
                'password' => '123456',
            ]
        );

        $order->update([
            'user_id' => $user->id
        ]);

        return redirect('/orders')->with(
            'success',
            'Order updated successfully.'
        );
    }

    public function destroy($id)
    {
        $order = Order::findOrFail($id);

        if ($order->orderItems()->exists()) {
            return redirect('/orders')->with(
                'error',
                'Cannot delete this order because it has order items.'
            );
        }

        $order->delete();

        return redirect('/orders')->with(
            'success',
            'Order deleted successfully.'
        );
    }
}