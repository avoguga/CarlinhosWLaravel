<?php

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

Route::get('/register', function () {
    return view('register');
});

Route::get('/about', function () {
    return view('about');
});

Route::prefix('logado')->group(function(){
    Route::get('/home', function () {
        return view('homeLogado');
    });

    Route::get('/cachorros', function () {
        return view('cachorros');
    });

    Route::get('/gatos', function () {
        return view('gatos');
    });

    Route::get('/passarinhos', function () {
        return view('passarinhos');
    });

    Route::get('/silvestres', function () {
        return view('silvestres');
    });

    Route::get('/peixes', function () {
        return view('peixes');
    });
});
