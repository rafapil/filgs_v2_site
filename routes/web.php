<?php

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

// Rotas estaticas para fora do laravel - podendo ser outros servicos ou worpress

Route::get('/blog', function () {
    return redirect('http://www.filgs.com.br/blog');
    // return view('welcome');
});