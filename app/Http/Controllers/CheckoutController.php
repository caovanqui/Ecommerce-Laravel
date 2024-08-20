<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function showPaymentForm()
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Bạn cần đăng nhập để thanh toán!');
        }

        $cart = session()->get('cart', []);
        if (empty($cart)) {
            return redirect()->route('product')->with('error', 'Giỏ hàng của bạn đang trống!');
        }
        $user = Auth::user();
        return view('client.payment', ['cart' => $cart, 'user' => $user]);
    }
    public function showOrderTrackingForm()
    {
        $user = Auth::user();
        $orders = Checkout::where('user_id', $user->id)->get();
        return view('client.ordertracking', ['orders' => $orders]);
    }
    public function processCheckout(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'address' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15',
            'card_name' => 'required|string|max:255',
            'card_number' => 'required|numeric',
            'expiry_year' => 'required|numeric',
            'cvv' => 'required|numeric'
        ]);

        $user = Auth::user();
        $cart = session()->get('cart', []);
        $totalAmount = array_sum(array_column($cart, 'price'));

        $orderCode = strtoupper(uniqid('ORDER_'));

        $checkout = Checkout::create([
            'user_id' => $user->id,
            'order_code' => $orderCode,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'total_amount' => $totalAmount,
            'status' => 'Đang xử lý',
        ]);

        session()->forget('cart');

        return redirect()->route('showOrderTrackingForm')->with('success', 'Thanh toán thành công!');
    }
}
