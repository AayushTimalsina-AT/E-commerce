<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        return view('user.index');
    }
    public function shop()
    {
        return view('user.shop');
    }
    public function wishlist()
    {
        return view('user.wishlist');
    }
    public function cart()
    {
        return view('user.cart');
    }
    public function about()
    {
        return view('user.about');
    }

    public function contact()
    {
        return view('user.contact');
    }
}
