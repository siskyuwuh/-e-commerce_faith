<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function index(Order $order, Product $product, $username)
    {
        $order = $order->where('user_id', auth()->user()->id)->get();
        return view('customer.order.index', [
            'title' => 'My Order List',
            'orders' => $order,
            'products' => $product->get(),
            'username' => $username,
        ]);
    }

    public function show(Order $order, $username, $id)
    {
        // dd($order->where('id', $id)->get());
        return view('customer.order.detail', [
            'title' => 'Detail Transaksi',
            'item' => $order->where('id', $id)->get(),
            'username' => $username,
        ]);
    }
}
