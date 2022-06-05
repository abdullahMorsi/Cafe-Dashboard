<?php

namespace App\Http\Controllers;

use App\Models\Opinion;
use Illuminate\Http\Request;

class OpinionController extends Controller
{

    public function index()
    {
        $opinions = Opinion::all();
        return view('opinions',['opinions'=> $opinions]);
    }
}
