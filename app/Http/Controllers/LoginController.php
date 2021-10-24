<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }

    public function logar(Request $request){

        if($request->user = 'carloswgama' && $request->senha = 'assista-ousama-ranking')
            return view('home');

        else
            return view('login');
    }
}
