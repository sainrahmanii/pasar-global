<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AlamatController;
use App\Http\Controllers\Admin\PesananController;
use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\Admin\RegistrasiProdukController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\user\TransaksiController;
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
    return view('user.layout.index');
    // return view('user.component.404');
});
 
Route::resource('admins', AdminController::class)->middleware('auth');
Route::resource('products', ProdukController::class)->middleware('auth');
Route::resource('pesanans', PesananController::class)->middleware('auth');
Route::resource('signin', LoginController::class)->middleware('guest');
Route::resource('regis', RegisterController::class)->middleware('guest');
Route::resource('users', UserController::class)->middleware('auth');
Route::resource('home', HomeController::class)->middleware('auth');
Route::resource('registration-products', RegistrasiProdukController::class)->middleware('auth');
Route::resource('products', TransaksiController::class);

Route::get('registration-products/{id}/set-status', [RegistrasiProdukController::class, 'setStatus'])->name('registration-products.set-status');
Route::get('registration-products/{id}/delete', [RegistrasiProdukController::class, 'destroy'])->name('registration-products.delete');

Route::post('signin', [LoginController::class, 'authenticate'])->name('signin.authenticate')->middleware('guest');
// Route::post('logout', [AuthenticatedSessionController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('nama-products/nama-user', [TransaksiController::class, 'check'])->name('products.check');
Route::get('nama-products/nama-user/success', [TransaksiController::class, 'checkout'])->name('products.checkouts');
Route::get('start-selling', [HomeController::class, 'index'])->name('selling.index');
Route::get('register-produk', [HomeController::class, 'create'])->name('register.product');


Route::controller(AlamatController::class)->group(function () {
    Route::post('/getkota', 'getkota')->name('getkota');
    Route::post('/getkec', 'getkec')->name('getkec');
    Route::post('/getkel', 'getkel')->name('getkel');
});

require __DIR__.'/auth.php';
