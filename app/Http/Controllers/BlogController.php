<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index()
    {
        $user = Auth::user(); // alternative way to get the currently authenticated user
        if ($user) {
            $param['id'] = $user->id;
            $param['name'] = $user->name;
            $param['email'] = $user->email;
        }
        // Categories
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
        return view('blog', $param);
    }
    public function blog_details()
    {
        $user = Auth::user(); // alternative way to get the currently authenticated user
        if ($user) {
            $param['id'] = $user->id;
            $param['name'] = $user->name;
            $param['email'] = $user->email;
        }
        // Categories
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
        return view('blog-details', $param);
    }
}
