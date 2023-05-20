<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopingCartController extends Controller
{
    public function index()
    {
        $user = Auth::user(); // alternative way to get the currently authenticated user
        if ($user) {
            $param['id'] = $user->id;
            $param['name'] = $user->name;
            $param['email'] = $user->email;
        }
        // Get data cart
        if ($user) {
            $dataCart = Cart::where('user_id', $param['id'])->get();
        }
        else
        {
            $dataCart = [];
        }
        // get data product && calculate total price
        $totalPrice = 0;
        foreach ($dataCart as $key => $value) {
            $dataProduct = Product::find($value->product_id);
            $dataCart[$key]['product_name'] = $dataProduct->product_name;
            $dataCart[$key]['product_price'] = $dataProduct->price;
            $dataCart[$key]['product_image'] = $dataProduct->image;
            $totalPrice += $dataProduct->price * $value->quantity;
        }
        $param['dataCart'] = $dataCart;
        $param['totalPrice'] = $totalPrice;
        $categories = Category::take(8)->get();
        $param['categories'] = $categories;
        // Count total products in cart
        if ($user) {
            $totalProductsInCart = Cart::where('user_id', $param['id'])->count();
        }
        if (!isset($totalProductsInCart)) {
            $param['totalProductsInCart'] = 0;
        } else {
            $param['totalProductsInCart'] = $totalProductsInCart;
        }
        return view('shoping-cart', $param);
    }

    public function add_cart(Request $request)
    {
        // check if user is logged in
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        $user = Auth::user(); // alternative way to get the currently authenticated user
        $param['user_id'] = $user->id;
        $param['product_id'] = $request->product_id;
        $param['quantity'] = $request->quantity;
        // update if already exists
        $cart = Cart::where('user_id', $param['user_id'])->where('product_id', $param['product_id'])->first();
        if ($cart) {
            $cart->quantity = $cart->quantity + $param['quantity'];
            $cart->save();
        } else {
            Cart::create($param);
        }
        // redirect to shoping-cart
        return redirect()->route('shoping-cart');
    }
    public function delete_cart(Request $request)
    {
        $idCart = $request->id;
        $idProduct = $request->product_id;
        if ($idCart) {
            Cart::where('id', $idCart)->where('product_id', $idProduct)->delete();
        }
        // redirect to shoping-cart
        return redirect()->route('shoping-cart');
    }
}
