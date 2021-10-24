<?php

use App\Http\Controllers\CachorroController;
use App\Http\Controllers\GatoController;
use App\Http\Controllers\PassarinhoController;
use App\Http\Controllers\PeixeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contatos', function () {
    return view('contatos');
}); 

Route::get('/chat', function () {
    return view('chat');
});

Route::get('/login', 'LoginController@login');

Route::post('/logar', 'LoginController@logar')->name('logar');

Route::get('/register', 'RegisterController@register')->name('register');

Route::prefix('cachorros')->group(function () {
    Route::get('/', [CachorroController::class, 'listar']);
    Route::get('/cadastro', [CachorroController::class, 'cadastro']);
    Route::get('/editar', [CachorroController::class, 'editar']);
    Route::get('/visualizar', [CachorroController::class, 'visualizar']);
});

Route::prefix('gatos')->group(function () {
    Route::get('/', [GatoController::class, 'listar']);
    Route::get('/cadastro', [GatoController::class, 'cadastro']);
    Route::get('/editar', [GatoController::class, 'editar']);
    Route::get('/visualizar', [GatoController::class, 'visualizar']);
});

Route::prefix('peixes')->group(function () {
    Route::get('/', [PeixeController::class, 'listar']);
    Route::get('/cadastro', [PeixeController::class, 'cadastro']);
    Route::get('/editar', [PeixeController::class, 'editar']);
    Route::get('/visualizar', [PeixeController::class, 'visualizar']);
});

Route::prefix('passarinho')->group(function () {
    Route::get('/', [PassarinhoController::class, 'listar']);
    Route::get('/cadastro', [PassarinhoController::class, 'cadastro']);
    Route::get('/editar', [PassarinhoController::class, 'editar']);
    Route::get('/visualizar', [PassarinhoController::class, 'visualizar']);
});