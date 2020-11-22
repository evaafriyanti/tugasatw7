<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;

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

Route::get('/about', function () {
    return view('home.about');
});
Route::get('/blogdetail', function () {
    return view('home.blog-detail');
});
Route::get('/blog', function () {
    return view('home.blog');
});
Route::get('/contact', function () {
    return view('home.contact');
});
Route::get('/productdetail', function () {
    return view('home.product-detail');
});
Route::get('/product', function () {
    return view('home.product');
});
Route::get('/shopingcart', function () {
    return view('home.shoping-cart');
});



Route::get('/layout', function () {
    return view('layouts/layout');
});

Route::get('/menu', function () {
    return view('menu');
});


Route::get('/produk', function () {
    return view('produk');
});

Route::get('/home', function () {
    return view('base');
});

Route::get('/product', function () {
    return view('home.product');
});

Route::get('baju', function () {
    return view('kategori.baju');

});
Route::get('celana', function () {
    return view('kategori.celana');

});
Route::get('topi', function () {
    return view('kategori.topi');

});
Route::get('sepatu', function () {
    return view('kategori.sepatu');

});



Route::get('/login', function () {
    return view('login');
});


Route::get('/admin', function () {
    return view('layouts/admin');
});

Route::get('menu', [HomeController::class, 'showAbout']);

Route::get('test/{produk}/{hargaMin?}/{hargaMax?}',[HomeController::class, 'test']);

Route::post('produk/filter', [ProdukController::class, 'filter']);

Route::get('produk', [ProdukController::class, 'index']);
Route::get('produkcreate', [ProdukController::class, 'create']);
Route::post('produk/store', [ProdukController::class, 'store']);
Route::get('{produk}', [ProdukController::class, 'show']);
Route::get('produk/{produk}/edit', [ProdukController::class, 'edit']);
Route::put('produk/{produk}', [ProdukController::class, 'update']);
Route::delete('produk/{produk}', [ProdukController::class, 'destroy']);

Route::get('userindex', [UserController::class, 'index']);
Route::get('user/create', [UserController::class, 'create']);
Route::post('user', [UserController::class, 'store']);
Route::get('user/{user}', [UserController::class, 'show']);
Route::get('user/{user}/edit', [UserController::class, 'edit']);
Route::put('user/{user}', [UserController::class, 'update']);
Route::delete('user2/{user}', [UserController::class, 'destroy']);


Route::get('login', [AuthController::class, 'showLogin']);
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout']);