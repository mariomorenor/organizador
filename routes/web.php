<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ListaController;
use App\Http\Controllers\RegistroController;
use Illuminate\Support\Facades\Auth;
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
    return view('home');
});

Route::resource("clientes",ClienteController::class);
Route::resource("listas",ListaController::class);
Route::resource("registros",RegistroController::class);