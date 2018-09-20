<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class verifycontroller extends Controller
{
/**
*@param string $token
*@return Response
**/



public function verify($token){
$user=User::where('token', $token )->firstorFail();
$user->update(['token'=>null]);
$user->verified= 1;
$user->save();
return view('layouts.verified');


    }
}
