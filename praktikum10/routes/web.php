<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\WelcomeController;
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
Route::get('/welcome', [WelcomeController::class, 'welcome']);

//Routing ke Apphome Pake Controller
Route::get('/about', [AboutController::class, 'about']);