<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mahasiswaController;
use App\Http\Controllers\laporaMahasiswaController;
use App\Http\Controllers\Admin\ItemController;

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
    return view('index');
});
Route::get('/Selamatdatang', function () {
    return view('welcome');
});
// profil
Route::get('/profil', function () {
    return view('profil');
});

// data mahasiswa
Route::get('/mahasiswa', [mahasiswaController::class, 'index']);
    //return view('mahasiswa');
//});

//Route::resource('admin/item', ItemController::class);
Route::resource('admin/item', 'App\Http\Controllers\Admin\ItemController');
Route::resource('admin/item2', 'App\Http\Controllers\Admin\Item2Controller');//
Route::resource('mahasiswa/mahasiswa2', 'App\Http\Controllers\Mahasiswa\Mahasiswa2Controller');
Route::resource('mahasiswa/bayar', 'App\Http\Controllers\BayarController');

Route::get('/laporan', [laporaMahasiswaController::class,'index']);
Route::get('/laporan/cetak_pdf', [laporaMahasiswaController::class,'cetak_pdf']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
