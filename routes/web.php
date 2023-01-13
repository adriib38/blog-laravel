<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibrosController;


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

/*

Route::get('/', function () {
    return ('Hola soy Adrián Benítez, bienvenido a mi blog.');
})->name('inicio');

Route::get('/posts', function () {
    return ('Listado de posts del blog');
})->name('posts');

Route::get('/post/{id?}', function ($id = 'null') {
    return ('Este es el post: '.$id);
})->whereNumber('id')
->name('post');

*/

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::get('/posts', function () {
    return view('posts/listado');
})->name('posts');

Route::get('/post/{id?}', function ($id = 'null') {
    return view('posts/post', compact('id'));
})->whereNumber('id')
->name('post');

Route::get('libros', [librosController::class, 'listarlibros']);