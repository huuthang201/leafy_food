<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cart;
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
        // Fetch all products
        $products = Product::orderBy('created_at', 'desc')->paginate(12);
        $param['products'] = $products;
        // Total products found
        $allProducts = Product::all();
        $totalProducts = count($allProducts);
        $param['totalProducts'] = $totalProducts;
        // All categories
        $categories = Category::take(8)->get();
        $param['categories'] = $categories;
        // Lastest products
        $lastestProducts = Product::orderBy('created_at', 'desc')->take(6)->get();
        $param['lastestProducts'] = $lastestProducts;
        // Count total products in cart
        $totalProductsInCart = Cart::where('user_id', $param['id'])->count();
        $param['totalProductsInCart'] = $totalProductsInCart;

        return view('shop-grid', $param);
    }
    public function shop_details(Request $request)
    {
        $user = Auth::user(); // alternative way to get the currently authenticated user
        $param['id'] = $user->id;
        $param['name'] = $user->name;
        $param['email'] = $user->email;
        $idProduct = $request->id;
        // Categories
        $categories = Category::take(8)->get();
        $param['categories'] = $categories;
        // Count total products in cart
        $totalProductsInCart = Cart::where('user_id', $param['id'])->count();
        $param['totalProductsInCart'] = $totalProductsInCart;
        // Get product details
        $dataProduct = Product::where('id', $idProduct)->first();
        $param['dataProduct'] = $dataProduct;
        // nl2br() function inserts HTML line breaks (<br> or <br />) in front of each newline in a string.
        $param['dataProduct']->description = nl2br($param['dataProduct']->description);
        // Category name of product
        $categoryName = Category::where('id', $dataProduct->category_id)->first();
        $param['categoryName'] = $categoryName;
        // Related products
        $relatedProducts = Product::where('category_id', $dataProduct->category_id)->where('id', '!=', $idProduct)->take(4)->get();
        $param['relatedProducts'] = $relatedProducts;
        return view('shop-details', $param);
    }
    public function shop_grid(Request $request)
    {
        $user = Auth::user(); // alternative way to get the currently authenticated user
        $param['id'] = $user->id;
        $param['name'] = $user->name;
        $param['email'] = $user->email;
        $idCategory = $request->id;
        // Categories info
        $categoryInfo = Category::where('id', $idCategory)->first();
        $param['categoryInfo'] = $categoryInfo;
        $products = Product::where('category_id', $idCategory)->orderBy('created_at', 'desc')->paginate(12);
        $param['products'] = $products;
        // Total products found
        $allProducts = Product::where('category_id', $idCategory)->get();
        $totalProducts = count($allProducts);
        $param['totalProducts'] = $totalProducts;
        // Categories
        $categories = Category::take(8)->get();
        $param['categories'] = $categories;
        // Count total products in cart
        $totalProductsInCart = Cart::where('user_id', $param['id'])->count();
        $param['totalProductsInCart'] = $totalProductsInCart;
        // Lastest products
        $lastestProducts = Product::orderBy('created_at', 'desc')->where('category_id', $idCategory)->take(6)->get();
        $param['lastestProducts'] = $lastestProducts;
        return view('shop-grid-category', $param);
    }
}
