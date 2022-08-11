<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PedagangController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WilayahController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AbsensiController;

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
// Route::get('/login', [LoginController::class, 'index']);
// Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');

Route::resource('/pedagang', PedagangController::class);
Route::resource('/karyawan', KaryawanController::class);
Route::resource('/wilayah', WilayahController::class);
Route::resource('/pegawai', PegawaiController::class);
Route::resource('/jabatan', JabatanController::class);
Route::resource('/profile', ProfileController::class);
Route::resource('/absensi', AbsensiController::class);

Auth::routes();

Route::group(['middleware' => ['auth','ceklevel:admin,user']], function() {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

