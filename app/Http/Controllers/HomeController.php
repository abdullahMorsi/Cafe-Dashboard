<?php

namespace App\Http\Controllers;

use App\Models\Opinion;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
//
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function index()
    {
            $products = Product::all();
            $users = User::all();
            $opinions = Opinion::all();

            return view('main', ['products'=>$products, 'users'=>$users, 'opinions'=>$opinions]);

    }
}
