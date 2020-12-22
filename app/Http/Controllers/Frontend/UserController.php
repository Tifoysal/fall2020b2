<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function registration(Request  $request)
    {
       $request->validate([
          'name'=>'required',
          'email'=>'required|email',
          'mobile'=>'required',
          'password'=>'required',
       ]);

       User::create([
          'name'=>$request->name,
          'mobile'=>$request->mobile,
          'email'=>$request->email,
          'password'=>bcrypt($request->password)
       ]);

       return redirect()->back()->with('message','User Registration Successful.');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);

        $credentials = $request->except('_token');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/')->with('message','Login Success!');
        }else
        {
            return redirect()->back()->withErrors('Invalid Credentials');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->back()->with('message','Logout Success!');
    }
}
