<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function index()
    {
        $user = Auth::user(); // alternative way to get the currently authenticated user
        if ($user) {
            $param['id'] = $user->id;
            $param['name'] = $user->name;
            $param['email'] = $user->email;
        }
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
        // All categories
        $categories = Category::take(8)->get();
        $param['categories'] = $categories;
        return view('contact', $param);
    }
}
