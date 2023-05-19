<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function index()
    {
        $user = Auth::user(); // alternative way to get the currently authenticated user
        $param['id'] = $user->id;
        $param['name'] = $user->name;
        $param['email'] = $user->email;
        // Count total products in cart
        $totalProductsInCart = Cart::where('user_id', $param['id'])->count();
        $param['totalProductsInCart'] = $totalProductsInCart;
        return view('contact', $param);
    }
}
