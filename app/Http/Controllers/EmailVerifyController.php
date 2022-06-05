<?php

namespace App\Http\Controllers;

use App\Models\Suggestion;
use Illuminate\Http\Request;

class EmailVerifyController extends Controller
{
    public function create()
    {
        return view('auth.register.account');
    }


    public function store(Request $request)
    {
        $attributes = request()->validate([
            'title'=>'required',
            'content'=>'required',
            'type'=>'required',
        ]);

    }

}
