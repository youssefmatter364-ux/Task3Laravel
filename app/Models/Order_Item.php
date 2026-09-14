<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order_Item extends Model
{
    protected $table = 'order_items';

    public $timestamps = false;

    function order()
    {
        return $this->belongsTo(Order::class);
    }

    function product()
    {
        return $this->belongsTo(Product::class);
    }
}