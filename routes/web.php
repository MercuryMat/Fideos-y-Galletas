<?php

use App\Http\Controllers\GalletasController;
use App\Http\Controllers\PastasController;
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
    return view('main');
});

Route::get('galletas', function () {
    return view('galletas');
});

Route::get('fideos', function () {
    return view('fideos');
});

Route::get('grafica', function () {
    return view('grafica');
});


// rutas de la api

Route::get('api/cookies', [GalletasController::class, 'get'])->name('cookies');

Route::get('api/cookies/branch/{branch}', [GalletasController::class, 'getFilterBranch'])->name('cookiesBranch');

Route::get('api/cookies/price/{price}', [GalletasController::class, 'getFilterPrice'])->name('cookiesPrice');

Route::get('api/cookies/stock', [GalletasController::class, 'getProductsStock'])->name('cookiesStock');

Route::post('api/cookies', [GalletasController::class, 'store'])->name('cookies');

Route::POST('api/cookies/update', [GalletasController::class, 'edit'])->name('cookies');

Route::delete('api/cookies/{id}', [GalletasController::class, 'delete'])->name('cookies');



Route::get('api/fideos', [PastasController::class, 'get'])->name('fideos');

Route::get('api/fideos/branch/{branch}', [PastasController::class, 'getFilterBranch'])->name('fideosBranch');

Route::get('api/fideos/price/{price}', [PastasController::class, 'getFilterPrice'])->name('fideosPrice');

Route::get('api/fideos/stock', [PastasController::class, 'getProductsStock'])->name('fideosStock');

Route::post('api/fideos', [PastasController::class, 'store'])->name('fideos');

Route::post('api/fideos/update', [PastasController::class, 'edit'])->name('fideos');

Route::delete('api/fideos/{id}', [PastasController::class, 'delete'])->name('fideos');

