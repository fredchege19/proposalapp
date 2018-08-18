<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function index(){

        return view('infos.index');
    }
    
    public function prop(){
return view('prop.index');

    }
    public function register(){
   return view('auth.register');

    }
    public function login(){
   return view('auth.login');

    }
    public function create(){

        
    }
}
