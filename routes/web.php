<?php

use App\Http\Controllers\SignInController;
use App\Http\Controllers\SignUpController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
|Di sinilah Anda dapat mendaftarkan rute web untuk aplikasi Anda. Ini 
 | rute dimuat oleh ruteServiceProvider dan semuanya akan 
 | Ditugaskan ke grup middleware "web". Buat sesuatu yang hebat!
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
Route::view('/profil', 'profil.index')->middleware('isMember');

Route::view('/user', 'writer.index');
Route::view('/nulis', 'writePage.index')->name('nulis')->middleware('isMember');
Route::view('/tentang', 'about.index');

Route::view('/signin', 'signin.index')->name('signin')->middleware('notMember');
Route::post('/signin', [SignInController::class, 'signin']);

Route::view('/signup', 'signup.index')->name('signup')->middleware('notMember');
Route::post('/signup', [SignUpController::class, 'signup']);
