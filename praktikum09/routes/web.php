<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\SkillController;
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

//Bikin Route Kabar Nampilin View Kondisi
Route::get('/kabar', function () {
    return view('kondisi');
});

//Bikin Route Nilai Nampilin View Nilai
Route::get('/nilai', function () {
    return view('nilai');
});

Route::get('/pasien', function () {
    return view('pasien');
});

//Bikin Route Form
Route::get('/form', [FormController::class, 'index']);
//Bikin Routing Hasil Form
Route::post('/hasil', [FormController::class, 'hasil']);

Route::get('/skill', [SkillController::class, 'index']);
//Bikin Routing Hasil Form
Route::post('/skillhasil', [SkillController::class, 'skillhasil']);