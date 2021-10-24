<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeixeController extends Controller
{
    //

    public function listar(){
        return view('peixes');
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
