<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Order;
use App\Product;
use Illuminate\Http\Request;
use Session;

class ProductController extends Controller
{
    public function index()
{
    $products = Product::all();
    // ToDo refactor get items from period
    $orderCount = Order::all()->count();
return view('products', compact('products', 'orderCount'));
}  //
    public function create()
    {
        return view('create');
    }  //
    public function edit($id)
    {
        $product = Product::find($id);
        return view('edit', compact('product'));
    }
    public function update(Request $request, Product $product)
    {
        Product::find($product->id)->update($request->all());
        return redirect()->route('products.index');
    }
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('products.index');
    }
    public function store(Request $request)
    {
        Product::create($request->all());
        return redirect()->route('products.index');
    }

    public function catalog()
    {
        $products = Product::all();// вернуть представление одного products и передаем туда переменную
        return view('index', [
            'products' => $products
        ]);
    }
    public function catalogAll()
    {
        $products = Product::all();// вернуть представление одного products и передаем туда переменную
        return view('catalog', [
            'products' => $products
        ]);
    }
    public function getAddToCart(Request $request, $id) {

        $product = Product::find($id);

        $oldCart = Session::has('cart') ? Session::get('cart') : null;

        $cart = new Cart($oldCart);

        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);

        return redirect()->route('catalogAll');
    }
    public function showCart() {
        if(!Session::has('cart')) {
            return view('shopping-cart', [
                'products' => null
            ]);
        }

        $oldCart = Session::get('cart');

        $cart = new Cart($oldCart);

        return view('shopping-cart', [
            'products' => $cart->items,
            'totalQty' => $cart->totalQty,
            'totalPrice' => $cart->totalPrice
        ]);

    }

    /*public function destroy() {
        Session::forget('cart');

        return redirect()->route('mainPage');
    }

    public function reduceByOne($id) {

        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);
        if(count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
            return redirect()->route('mainPage');
        }

        return redirect()->route('show.cart');

    }

    public function delete($id) {

        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->delete($id);
        if(count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
            return redirect()->route('main.page');
        }

        return redirect()->route('show.cart');

    }*/


}
