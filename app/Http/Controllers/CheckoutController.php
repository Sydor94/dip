<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout() {

        $cart = Session::get('cart');

        return view('checkout', compact('cart'));
    }

    public function checkoutForm(Request $request) {

        $cart = Session::get('cart');

        $order = Order::create([
            'cart' => serialize($cart),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
        ]);

        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('client_email'),
            'amount' => $cart->totalPrice * 100,
            'shop_id' => 4617,
            'currency' => 'RUB',
            'description' => 'description',
            'order_id' => 1,
            'debug' => 1,
            'signature' => 'c1ee070b34d13574',
            'language' => 'ru'

        ];

        Session::forget('cart');

        return redirect()->route('mainPage');
    }
    //
}
