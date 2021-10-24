<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PassarinhoController extends Controller
{
    //

    public function listar(){
        return view('passarinhos');
    }

    public function cadastro(){
        echo 'testeaacadas';
    }

    public function editar(){
        echo 'testeedi';

    }

    public function visualizar(){
        echo 'testevisu';
    }
}
