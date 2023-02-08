<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $order = Order::join('items as i', 'orders.item_id', '=', 'i.id')
            ->join('users as u', 'orders.user_id', '=', 'u.id')
            ->where('u.id', Auth::user()->id)
            ->get(['i.*', 'orders.id as cart_id']);
        return view('cart', [
            'items' => $order,
            'total' => $order->sum('price')
        ]);
    }
    public function checkout(Request $request)
    {
        Order::where('user_id', Auth::id())->delete();
        return view('checkout');
    }
    public function add(Request $request, $id)
    {
        Order::create([
            'item_id' => $id,
            'user_id' => Auth::id()
        ]);
        return redirect()->route('cart');
    }
    public function delete(Request $request, $id)
    {
        Order::findOrFail($id)->delete();
        return redirect()->route('cart');
    }
}
