<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\User;
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
  
   $verify=Auth::user()->verified;
   if($verify!=1){
    return redirect()->route('notv');
   }
    return redirect()->route('home');
}
    

    return redirect()->back();
    }
}
