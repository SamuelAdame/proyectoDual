<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorProductos;
use App\Http\Controllers\ControladorRegistro;
use App\Http\Controllers\ControladorSesion;
use App\Http\Controllers\ControladorAdmin;

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
})->middleware('auth');

Route::get('/productos', [ControladorProductos::class, 'index'])
    ->name('productos.index');


Route::get('/productos/crear', [ControladorProductos::class, 'crear'])
    ->middleware('auth.admin')
    ->name('productos.crear');

Route::post('/productos/crear', [ControladorProductos::class, 'tienda'])
    ->middleware('auth.admin')
    ->name('productos.tienda');

Route::resource('/productos', ControladorProductos::class);

Route::get('/registro', [ControladorRegistro::class, 'crear'])
    ->middleware('guest')
    ->name('registro.index');

Route::post('/registro', [ControladorRegistro::class, 'store'])
    ->name('registro.store');


Route::get('/login', [ControladorSesion::class, 'crear'])
    ->middleware('guest')
    ->name('login.index');

Route::post('/login', [ControladorSesion::class, 'store'])
    ->name('login.store');

Route::get('/logout', [ControladorSesion::class, 'destroy'])
    ->middleware('auth')
    ->name('login.destroy');

Route::get('/admin', [ControladorAdmin::class, 'index'])
    ->middleware('auth.admin')
    ->name('admin.index');
