<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class logincontroller extends Controller
{
    public function login(Request $request){


    if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
    {
     $user = Auth::User()->where('email', $request->email)->first();
   if($user->is_admin())
   {

   return redirect()->route('dashboard');
   }
   return redirect()->route('home');
    }
    return redirect()->back();
    }
}
