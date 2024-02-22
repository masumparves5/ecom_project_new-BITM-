<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    private static $order;
    public static function newOrder($request)
    {
        self::$order = new Order();
        self::$order->name          = $request->name;
        self::$order->email         = $request->email;
        self::$order->mobile        = $request->mobile;
        self::$order->address       = $request->address;
        self::$order->subtotal      = $request->subtotal;
        self::$order->tax           = $request->tax;
        self::$order->shipping      = $request->shipping;
        self::$order->total         = $request->total;
        self::$order->order_timestamp   = strtotime(date('F-j-Y, g:i A'));
        self::$order->payment_method    = $request->payment_method;
        self::$order->save();

        return self::$order;
    }
}
