<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;


class RegisterController extends Controller
{
    public function create(){
        return view('auth.register.register');
    }

    public function store(Request $request){
//        $request->validate([
//            'name'=>['required', 'min:3', 'max:255', Rule::unique('users', 'name')],
//            'email'=>['required', 'email', 'max:255', Rule::unique('users', 'email')],
//            'password'=>['required', 'min:3', 'max:255'],
//            'phone_number'=>['required'],
////            'g-recaptcha-response' => 'required|captcha'
//            ]);

        $attributes = $request->validate([
            'name'=>['required', 'min:3', 'max:255', Rule::unique('users', 'name')],
            'email'=>['required', 'email', 'max:255', Rule::unique('users', 'email')],
            'password'=>['required', 'min:3', 'max:255'],
            'phone_number'=>['required'],
        ]);
        $category = '';
        if(isset($request['category'])){
            foreach ($request['category'] as $item ){
                $category.= $item . " ";
            }
        }

        $attributes['category'] = $category;

        $user = User::create($attributes);

        Auth::login($user);
//        Mail::raw('Test Email', function ($message){
//            $message->to(request('email'))
//                ->subject('Welcome to my misery');
//        });
        return redirect('/verifyEmail')->with('success', 'Your account has been created');

    }

}
