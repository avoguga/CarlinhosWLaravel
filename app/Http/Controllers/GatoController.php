<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GatoController extends Controller
{
    //

    public function listar(){
        return view('gatos');
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
