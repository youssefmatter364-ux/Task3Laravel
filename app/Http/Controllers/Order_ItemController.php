<?php

namespace App\Http\Controllers;

use App\Models\Order_Item;

class Order_ItemController extends Controller
{
    public function index()
    {
        $orderItems = Order_Item::all();

        return view('order_items.index', compact('orderItems'));
    }

    public function show($id)
    {
        $orderItem = Order_Item::findOrFail($id);

        return view('order_items.show', compact('orderItem'));
    }
}