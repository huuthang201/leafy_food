<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Favorite;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopGridController extends Controller
{
    public function index()
    {
        $user = Auth::user(); // alternative way to get the currently authenticated user
        if ($user)
        {
            $param['id'] = $user->id;
            $param['name'] = $user->name;
            $param['email'] = $user->email;
        }
        // Fetch all products
        $products = Product::orderBy('created_at', 'desc')->paginate(12);
        // get categories name
        foreach ($products as $product)
        {
            $category = Category::where('id', $product->category_id)->first();
            $product->category_name = $category->category_name;
        }
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
        if ($user)
        {
            $totalProductsInCart = Cart::where('user_id', $param['id'])->count();
        }
        if (!isset($totalProductsInCart))
        {
            $param['totalProductsInCart'] = 0;
        }
        else
        {
            $param['totalProductsInCart'] = $totalProductsInCart;
        }

        return view('shop-grid', $param);
    }
    public function shop_details(Request $request)
    {
        $idProduct = $request->id;
        $user = Auth::user(); // alternative way to get the currently authenticated user
        if ($user) {
            $param['id'] = $user->id;
            $param['name'] = $user->name;
            $param['email'] = $user->email;
            // Favorite products
            $favoriteProducts = Favorite::where('user_id', $param['id'])->where('product_id', $idProduct)->first();
        }
        if (isset($favoriteProducts)) {
            $param['favoriteProducts'] = true;
        }
        else
        {
            $param['favoriteProducts'] = false;
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
        // Get product details
        $dataProduct = Product::where('id', $idProduct)->first();
        $param['dataProduct'] = $dataProduct;
        // nl2br() function inserts HTML line breaks (<br> or <br />) in front of each newline in a string.
        $param['dataProduct']->description = str_replace("\n", '', $param['dataProduct']->description);
        $param['dataProduct']->description = nl2br($param['dataProduct']->description, true);
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
        if ($user) {
            $param['id'] = $user->id;
            $param['name'] = $user->name;
            $param['email'] = $user->email;
        }
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
        if ($user) {
            $totalProductsInCart = Cart::where('user_id', $param['id'])->count();
        }
        if (!isset($totalProductsInCart)) {
            $param['totalProductsInCart'] = 0;
        } else {
            $param['totalProductsInCart'] = $totalProductsInCart;
        }
        // Lastest products
        $lastestProducts = Product::orderBy('created_at', 'desc')->where('category_id', $idCategory)->take(6)->get();
        $param['lastestProducts'] = $lastestProducts;
        return view('shop-grid-category', $param);
    }

    public function add_favorite(Request $request)
    {
        $user = Auth::user(); // alternative way to get the currently authenticated user
        if ($user) {
            $param['id'] = $user->id;
        }
        else
        {
            return redirect()->route('login');
        }
        $idProduct = $request->product_id;
        $favoriteProducts = Favorite::where('user_id', $param['id'])->where('product_id', $idProduct)->first();
        if ($favoriteProducts)
        {
            $favoriteProducts->delete();
            return redirect()->back();
        }
        else
        {
            Favorite::updateOrCreate([
                'user_id' => $param['id'],
                'product_id' => $idProduct,
            ]);
        }
        return redirect()->back();
    }
}
