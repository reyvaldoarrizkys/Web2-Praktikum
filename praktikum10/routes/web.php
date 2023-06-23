<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\EtalaseController;
use App\Http\Controllers\HomeFrontController;
use App\Http\Controllers\TampilanController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [TampilanController::class, 'index']);

//bikin routing untuk validasi user
Route::group(['middleware' => ['auth']], function () {

    //bikin route grup baru berdasarkan admin dan manager
    Route::group(['middleware' => ['auth', 'peran:admin-manager']], function () {
        //Routing ke Dashboard Pake Controller
        Route::get('/dashboard', [DashboardController::class, 'index']);
        //Routing ke Produk Pake Controller
        Route::get('/produk', [ProdukController::class, 'produk']);
        //Routing ke Apphome Pake Controller
        Route::get('/homefront', [HomeFrontController::class, 'index']);

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
    });


    // tambahin route untuk after register
    Route::get('/after_register', function () {
        return view('after_register');
    });
});

Route::get('/',[ProdukController::class,'publicIndex'])->name('public.index');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
