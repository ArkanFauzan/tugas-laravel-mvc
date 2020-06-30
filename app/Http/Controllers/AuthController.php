<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    function register(){
        return view("register");
    }

    function welcome(Request $request){
        // dd($request["first_name"]);
        return view("welcome",["nama_depan"=>$request["first_name"],"nama_belakang"=>$request["last_name"]]);
    }
}
