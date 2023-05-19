<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user(); // alternative way to get the currently authenticated user
        $param['id'] = $user->id;
        $param['name'] = $user->name;
        $param['email'] = $user->email;

        // Fake data products
        // check product is not empty
        $firstProduct = Product::where('id', '!=', '')->first();
        if (empty($firstProduct)) {
            Product::factory()->count(50)->create();
        }

        // Featured products
        $featuredProducts = Product::where('status', 1)->orderBy('quantity', 'desc')->take(8)->get();
        $param['featuredProducts'] = $featuredProducts;
        // Latest products
        $latestProducts = Product::where('status', 1)->orderBy('created_at', 'desc')->take(6)->get();
        $param['latestProducts'] = $latestProducts;
        // Categories
        $categories = Category::take(8)->get();
        $param['categories'] = $categories;
        // Count total products in cart
        $totalProductsInCart = Cart::where('user_id', $param['id'])->count();
        $param['totalProductsInCart'] = $totalProductsInCart;
        return view('index', $param);
    }

    /**
     * Search products
     *
     */
    public function search(Request $request)
    {
        $user = Auth::user(); // alternative way to get the currently authenticated user
        $param['id'] = $user->id;
        $param['name'] = $user->name;
        $param['email'] = $user->email;

        $keyword = $request->keyword;
        $products = Product::where('product_name', 'like', '%' . $keyword . '%')->paginate(12);
        $param['products'] = $products;
        // Total products found
        $allProducts = Product::where('product_name', 'like', '%' . $keyword . '%')->get();
        $totalProducts = count($allProducts);
        $param['totalProducts'] = $totalProducts;
        // Categories
        $categories = Category::take(8)->get();
        $param['categories'] = $categories;
        // Count total products in cart
        $totalProductsInCart = Cart::where('user_id', $param['id'])->count();
        $param['totalProductsInCart'] = $totalProductsInCart;
        return view('search', $param);
    }
}
