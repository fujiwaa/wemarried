<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::resource('customer', CustomerController::class);
Route::get('searchcustomer', [CustomerController::class, 'search'])->name('customer.search');

Route::resource('client', ClientController::class);
Route::get('searchclient', [ClientController::class, 'search'])->name('client.search');

Route::resource('produk', ProdukController::class);
Route::get('searchproduk', [ProdukController::class, 'search'])->name('produk.search');

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function() {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});