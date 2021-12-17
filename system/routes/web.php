<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;
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
    return view('welcome');
});

Route::get('user', function () {
    return view('user');
});


Route::get('dashboard', function () {
    return view('dashboard');
});

Route::get('product', function () {
    return view('product');
});

Route::get('category', function () {
    return view('category');
});

Route::get('login', function () {
    return view('login');
});

Route::get('home', function () {
    return view('home');
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('home', function () {
    return view('home');
});

Route::get('home', function () {
    return view('home');
});

Route::get('dashboard', [HomeController::class, 'showDashboard']);
Route::get('dashboard/{status}', [HomeController::class, 'showDashboard']);
Route::get('kategori', [HomeController::class, 'showKategori']);

Route::prefix('admin')->group(function(){
    Route::post('produk/filter', [ProdukController::class, 'filter']);
    Route::resource('produk', ProdukController::class);
    Route::resource('kategori', KategoriController::class);
    Route::resource('user', UserController::class);
});

//Client
Route::get('home', [ClientController::class, 'showHome']);
Route::post('home/filter', [ClientController::class, 'filter']);
Route::get('produk/{produk}', [ClientController::class, 'showProduk']);
Route::get('about', [ClientController::class, 'showAbout']);
Route::get('furniture', [ClientController::class, 'showFurniture']);
Route::get('contact', [ClientController::class, 'showContact']);
Route::get('pesan', [ClientController::class, 'Pesan']);

Route::get('login', [AuthController::class, 'showLogin']);
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [Authcontroller::class, 'logout']);

Route::get('test-ajax', [HomeController::class, 'testAjax']);