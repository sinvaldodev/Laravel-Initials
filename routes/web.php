<?php

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

// Route::get('fornecedores', [\App\Http\Controllers\fornecedorController::class, 'index']);
// Route::get('fornecedores/{id}', [\App\Http\Controllers\fornecedorController::class, 'show']);

Route::get('fornecedorView', [\App\Http\Controllers\fornecedorController::class, 'index']);
