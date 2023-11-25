<?php

use  Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;

use App\Http\Controllers\HomeController;

Route::resource('posts', PostController::class);
Route::resource('articles', ArticleController::class);
Route::resource('categories', CategoryController::class);

//Mengonfigurasi Route


Route::get('/', function () {
    return view('halaman-utama');
});

Route::get('/home', function () {
    return view('home_page');
});

route::view('/home_page', 'home_page');

Route::get('/home', function () {
    return view('home');
});


//tugas 2




Route::get('/home', [HomeController::class, 'index'])->name('home.blade.php');

Route::get('/get-data-pasien', [PasienController::class, 'getDataPasien']);
Route::get('/pasien/detail/{id}', 'PasienController@detail');
Route::get('/post/informasi-kkn', 'PostController@showByTitle');
Route::get('/post/user/{userId}', 'PostController@showByUser');
Route::get('/post/tanggal/{date}', 'PostController@showByDate');
Route::get('/post/{postId}/comment', 'CommentController@showByPost');
Route::get('/post/kategori/{categoryId}', 'PostController@showByCategory');

//admin route

Route::group(['prefix' => 'wbpanel', 'middleware' => 'admin'], function () {
    Route::get('/kategori', 'AdminPanelController@kategoriIndex');
    Route::get('/kategori/form', 'AdminPanelController@kategoriForm');
    Route::post('/kategori/save', 'AdminPanelController@kategoriSave');
    Route::put('/kategori/update/{id}', 'AdminPanelController@kategoriUpdate');
    Route::delete('/kategori/delete/{id}', 'AdminPanelController@kategoriDelete');
    // Similar routes for 'post'
});



Route::get('/', function () {
    return view('welcome');
});
