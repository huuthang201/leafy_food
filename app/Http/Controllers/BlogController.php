<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index()
    {
        $user = Auth::user(); // alternative way to get the currently authenticated user
        $param['id'] = $user->id;
        $param['name'] = $user->name;
        $param['email'] = $user->email;
        return view('blog', $param);
    }
    public function blog_details()
    {
        $user = Auth::user(); // alternative way to get the currently authenticated user
        $param['id'] = $user->id;
        $param['name'] = $user->name;
        $param['email'] = $user->email;
        return view('blog-details', $param);
    }
}
