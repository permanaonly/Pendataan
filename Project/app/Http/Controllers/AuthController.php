<?php

namespace App\Http\Controllers;
use Auth;
use App\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class AuthController extends Controller
{
    public function login(){
        return view('auths.login');
    }
    
    public function postlogin(Request $request) {
        if(Auth::attempt($request->only('email','password'))){
            return redirect()->route('dasboard');
        }
        return redirect()->route('auths.login');
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('home');
    }

    protected function regist()
    {
        return view('auths.register');
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function postregist(Request $request)
    {
        admin::create([
            'name' => $request['nama'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->route('auths.login');
    }
}
