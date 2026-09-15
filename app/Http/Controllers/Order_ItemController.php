<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderItemRequest;
use App\Models\Category;
use App\Models\Order;
use App\Models\Order_Item;
use App\Models\Product;
use App\Models\User;

class Order_ItemController extends Controller
{
    public function index()
    {
        $orderItems = Order_Item::with(['order.user', 'product'])->get();

        return view('order_items.index', compact('orderItems'));
    }

    public function show($id)
    {
        $orderItem = Order_Item::with([
            'order.user',
            'product'
        ])->findOrFail($id);

        return view('order_items.show', compact('orderItem'));
    }

    public function create()
    {
        return view('order_items.create');
    }

    public function store(OrderItemRequest $request)
    {
        $user = User::firstOrCreate(
            ['name' => $request->user_name],
            [
                'email' => strtolower(str_replace(' ', '', $request->user_name)) . '@gmail.com',
                'password' => '123456',
            ]
        );

        $order = Order::create([
            'user_id' => $user->id
        ]);

        $category = Category::first();

        $product = Product::firstOrCreate(
            ['name' => $request->product_name],
            [
                'description' => 'Product created from order item',
                'price' => $request->price,
                'quantity' => 10,
                'category_id' => $category->id,
            ]
        );

        Order_Item::create([
            'order_id' => $order->id,
            'product_id' => $product->id,
            'quantity' => $request->quantity,
            'price' => $request->price,
        ]);

        return redirect('/order-items')->with(
            'success',
            'Order item created successfully.'
        );
    }

    public function edit($id)
    {
        $orderItem = Order_Item::with([
            'order.user',
            'product'
        ])->findOrFail($id);

        return view('order_items.edit', compact('orderItem'));
    }

    public function update(OrderItemRequest $request, $id)
    {
        $orderItem = Order_Item::findOrFail($id);

        $user = User::firstOrCreate(
            ['name' => $request->user_name],
            [
                'email' => strtolower(str_replace(' ', '', $request->user_name)) . '@gmail.com',
                'password' => '123456',
            ]
        );

        $orderItem->order->update([
            'user_id' => $user->id
        ]);

        $category = Category::first();

        $product = Product::firstOrCreate(
            ['name' => $request->product_name],
            [
                'description' => 'Product created from order item',
                'price' => $request->price,
                'quantity' => 10,
                'category_id' => $category->id,
            ]
        );

        $orderItem->update([
            'product_id' => $product->id,
            'quantity' => $request->quantity,
            'price' => $request->price,
        ]);

        return redirect('/order-items')->with(
            'success',
            'Order item updated successfully.'
        );
    }

    public function destroy($id)
    {
        $orderItem = Order_Item::findOrFail($id);

        $orderItem->delete();

        return redirect('/order-items')->with(
            'success',
            'Order item deleted successfully.'
        );
    }
}