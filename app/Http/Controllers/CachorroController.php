<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CachorroController extends Controller
{
    // Listagem dos produtos de cães
    public function listar(){
        return view('cachorros');
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
