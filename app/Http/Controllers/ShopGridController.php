<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopGridController extends Controller
{
    public function index()
    {
        $user = Auth::user(); // alternative way to get the currently authenticated user
        $param['id'] = $user->id;
        $param['name'] = $user->name;
        $param['email'] = $user->email;
        return view('shop-grid', $param);
    }
    public function shop_details(Request $request)
    {
        $user = Auth::user(); // alternative way to get the currently authenticated user
        $param['id'] = $user->id;
        $param['name'] = $user->name;
        $param['email'] = $user->email;
        $idProduct = $request->id;
        $dataProduct = Product::where('id', $idProduct)->first();
        $param['dataProduct'] = $dataProduct;
        return view('shop-details', $param);
    }
}
