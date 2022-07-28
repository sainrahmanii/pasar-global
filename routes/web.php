<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProdukController;
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
    return view('admin.indexadmin');
});
 
Route::controller(UserController::class)->group(function () {
    Route::get('/dashboard-admin/user', 'user');
    Route::get('/dashboard-admin/detail-peasanan', 'showpesanan');
    Route::get('/dashboard-admin/registrasi-produk', 'showregistrasiproduk');
    Route::get('/dashboard-admin/produk', 'showproduk');
});

Route::controller(ProdukController::class)->group(function () {
    Route::get('/dashboard-admin/tambah-produk', 'index');
});

require __DIR__.'/auth.php';
