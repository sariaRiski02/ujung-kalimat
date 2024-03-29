<?php

use App\Http\Controllers\CategoryController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SignInController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\SignoutController;

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

Route::get('/blog', [ContentController::class, 'contentPage']);

Route::view('/kontak', 'contact.index');

Route::get('/penulis', [UserController::class, 'author']);
Route::get('/kategori', [CategoryController::class, 'categories']);
Route::view('/profil', 'profil.index')->middleware('isMember');

Route::view('/user', 'writer.index');
Route::get('/nulis', [ContentController::class, 'writePage'])->name('nulis')->middleware('isMember');
Route::view('/tentang', 'about.index');

Route::view('/signin', 'signin.index')->name('signin')->middleware('notMember');
Route::post('/signin', [SignInController::class, 'signin']);

Route::view('/signup', 'signup.index')->name('signup')->middleware('notMember');
Route::post('/signup', [SignUpController::class, 'signup']);

// signout
Route::get('/signout', [SignoutController::class, 'signout']);

// save content
Route::post('/content', [ContentController::class, 'content']);

// fallback route
Route::fallback(function () {
    return view('error.index');
});
