<?php

use App\Http\Controllers\AnuncioController;
use App\Http\Controllers\LocalController;
use App\Http\Controllers\OfertaController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('productos', ProductoController::class);
Route::get('generate-pdf-productos', [ProductoController::class, 'generatePDF'])->name('productos.pdf');

Route::resource('ofertas', OfertaController::class);
Route::get('generate-pdf', [OfertaController::class, 'generatePDF'])->name('ofertas.pdf');


Route::resource('anuncios', AnuncioController::class);

Route::resource('locales', LocalController::class);

Route::get('/terminos-y-condiciones', function () {
    return view('terminos');
})->name('terminos-y-condiciones');