<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use Illuminate\Http\Request;

class BankController extends Controller
{

    public function create()
    {
        return view('payment.bankPayment');
    }

    public function store(Request $request)
    {
        $attributes = request()->validate([
            'sender_bank'=>'required',
            'receiver_bank'=>'required',
            'account_holder'=>'required',
            'sender_number'=>'required',
            'transaction'=>'required',
            'thumbnail'=>'required|image'
        ]);

        $thumbnail = $request->thumbnail;
        $newPhotoPath = time().$thumbnail->getClientOriginalName();
        $thumbnail->move('uploads/payments', $newPhotoPath);

        $attributes['thumbnail'] = 'uploads/products/'.$newPhotoPath;
        $attributes['user_id'] = auth()->id();

        Bank::create($attributes);
        return redirect('/')->with('success', 'You are a subscribed user');
    }
}
