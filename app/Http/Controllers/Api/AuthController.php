<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends BaseController
{
    public function register(Request $request){
        $validator = Validator::make($request->all(),[
                'name'=>'required',
                'email'=>'required|email',
                'password'=>'required',
                'c_password'=>'required|same:password'
            ]);
        if ($validator->fails()){
            return $this->sendError('Validate Error', $validator->errors());
        }
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $user = User::create($input);
        $success['token'] = $user->createToken('abdullah')->accessToken;
        $success['name'] = $user->name;
        return $this->sendResponse($success, 'User Registered Successfully');
    }

    public function login(Request $request){
        $credentials = $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        if(Auth::attempt($credentials)) {
            $user = Auth::user();
            $success['token'] = $user->createToken('abdullah')->accessToken;
            $success['name'] = $user->name;
            return $this->sendResponse($success, 'User Logged In Successfully');
        }
        else{
            return $this->sendError('Validate Error', ['error', 'Unauthorized']);
        }
    }


}
