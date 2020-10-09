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

Route::get('posts', 'PostController@index');
Route::get('posts/{post:slug}', 'PostController@show');
// Route::get('posts/{post:slug}', 'PostController@show'); terima Slug
// Route::get('posts/{post}', 'PostController@show'); terima ID

Route::view('/login', 'login');
Route::view('/contact', 'contact');
Route::view('/about', 'about');