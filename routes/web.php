<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('banner.index');
});

Route::get('/beranda', function () {
    return view('home.index');
});

Route::get('/post', function () {
    return view('post.index');
});

Route::view('/kontak', 'contact.index');

Route::view('/tentang', 'about.index');

Route::view('/login', 'login.index');
Route::view('/signin', 'signin.index');
