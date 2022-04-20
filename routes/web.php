<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\SearchController;

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

Route::resource('mahasiswa', MahasiswaController::class);

Route::get('khs/{nim}', [MahasiswaController::class, 'khs'])->name('khs');

Route::get('/index/search', [SearchController::class, 'search'])->name('index.search');

Route::get('mahasiswa/cetak_pdf/{nim}', [MahasiswaController::class, 'cetak_khs'])->name('cetak_khs');


