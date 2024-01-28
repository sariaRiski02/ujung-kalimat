<?php

use App\Http\Controllers\SignInController;
use App\Http\Controllers\SignUpController;
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
})->name('home');

Route::get('/blog', function () {
    return view('post.index');
});

Route::view('/kontak', 'contact.index');

Route::view('/penulis', 'author.index');
Route::view('/kategori', 'categories.index');
Route::view('/profil', 'profil.index');

Route::view('/user', 'writer.index');
Route::view('/nulis', 'writePage.index');
Route::view('/tentang', 'about.index');

Route::view('/signin', 'signin.index')->name('signin');
Route::post('/signin', [SignInController::class, 'signin']);

Route::view('/signup', 'signup.index')->name('signup');
Route::post('/signup', [SignUpController::class, 'signup']);
