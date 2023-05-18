<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
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

        $products = Product::orderBy('created_at', 'desc')->paginate(12);
        $param['products'] = $products;

        $categories = Category::take(8)->get();
        $param['categories'] = $categories;

        $lastestProducts = Product::orderBy('created_at', 'desc')->take(6)->get();
        $param['lastestProducts'] = $lastestProducts;
        
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
        $categories = Category::take(8)->get();
        $param['categories'] = $categories;
        return view('shop-details', $param);
    }
    public function shop_grid(Request $request)
    {
        $user = Auth::user(); // alternative way to get the currently authenticated user
        $param['id'] = $user->id;
        $param['name'] = $user->name;
        $param['email'] = $user->email;
        $idCategory = $request->id;
        $products = Product::where('category_id', $idCategory)->get();
        $param['products'] = $products;
        $categories = Category::take(8)->get();
        $param['categories'] = $categories;
        return view('shop-grid-category', $param);
    }
}
