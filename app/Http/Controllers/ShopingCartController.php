<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Favorite;
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
            $dataCart[$key]['number'] = $dataProduct->number;
            $dataCart[$key]['unit'] = $dataProduct->unit;
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
        // Count total products favorite
        if ($user) {
            $totalProductsFavorite = Favorite::where('user_id', $param['id'])->count();
        }
        if (!isset($totalProductsFavorite)) {
            $param['totalProductsFavorite'] = 0;
        } else {
            $param['totalProductsFavorite'] = $totalProductsFavorite;
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
        // check if product is available
        $product = Product::find($param['product_id']);
        if ($product->quantity < $param['quantity']) {
            return redirect('/shop-details/' . $param['product_id'] . '?error=khongduhangroibanoi');
        }
        // update if already exists
        $cart = Cart::where('user_id', $param['user_id'])->where('product_id', $param['product_id'])->first();
        if ($cart) {
            $cart->quantity = $cart->quantity + $param['quantity'];
            $cart->save();
        } else {
            Cart::create($param);
        }
        // Reduce quantity in product table
        $product = Product::find($param['product_id']);
        $product->quantity = $product->quantity - $param['quantity'];
        $product->save();
        // redirect to shoping-cart
        return redirect()->route('shoping-cart');
    }
    public function delete_cart(Request $request)
    {
        $idCart = $request->id;
        $idProduct = $request->product_id;
        if ($idCart) {
            $CartData = Cart::where('id', $idCart)->first();
            $CartData->delete();
            // Increase quantity in product table
            $product = Product::find($idProduct);
            $product->quantity = $product->quantity + $CartData->quantity;
            $product->save();
        }
        // redirect to shoping-cart
        return redirect()->route('shoping-cart');
    }
}
