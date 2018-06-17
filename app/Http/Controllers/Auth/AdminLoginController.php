<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    public function showLoginForm(){
        return view('auth.admin-login');
    }

    public function login(Request $request){
        //validate the form
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        //apttend to log the user
            //       if (  Auth::guard('admin')->attempt($credentials, $remember)){}
          if (  Auth::guard('admin')->attempt(['email'=> $request->email, 'password'=>$request->password], $request->remember)){
            //if success , redirect to intended location
            return redirect()->intended(route('admin.dashboard'));
          }
        
        //if no siuccesfull, redirect to login 
          return redirect()->back()->withInput($request->only('email','remember'));
    }
}
