<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;

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
    return view('welcome');
});

//Routing ke Dashboard Pake Controller
Route::get('/dashboard', [DashboardController::class, 'index']);
//Routing ke Produk Pake Controller
Route::get('/produk', [ProdukController::class, 'produk']);

//Routing ke Apphome Pake Controller
Route::get('/home', [HomeController::class, 'index']);

//Routing ke Page About
Route::get('/about', [AboutController::class, 'about']);

//Routing ke Form Create
Route::get('/produk/create', [ProdukController::class, 'create']);

//Routing Tambah data Fungsi Store
Route::post('/produk/store', [ProdukController::class, 'store']);

//Routing Edit data 
Route::get('produk/edit/{id}', [ProdukController::class, 'edit']);
Route::put('/produk/update/{id}', [ProdukController::class, 'update']);

//Routing Delete data 
Route::get('/produk/delete/{id}', [ProdukController::class, 'destroy']);