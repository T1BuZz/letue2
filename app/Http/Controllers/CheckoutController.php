<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);
        $total = array_sum(array_column($cart, 'subtotal'));

        return view('checkout.index', compact('cart', 'total'));
    }

    public function process(Request $request)
    {
        // Xử lý thanh toán ở đây (VD: lưu đơn hàng, gọi API thanh toán, ...)
        session()->forget('cart'); // Xóa giỏ hàng sau thanh toán
        return redirect()->route('home')->with('success', 'Thanh toán thành công!');
    }
}
