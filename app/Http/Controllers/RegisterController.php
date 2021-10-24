<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //

    public function register(){
        return view('register');
    }
    public function cadastrar(Request $r){

        $r->validate([
            'name' => 'required',
            'surname' => 'required',
            'user' => 'required',
            'email' => 'required',
            'password' => 'required|integer'
        ]);

        echo 'Ainda não tem cadastro >//<';
    }
}
