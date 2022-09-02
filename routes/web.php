<?php

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
    return view('welcome');
});

Route::get('/soal_a', [App\Http\Controllers\GantikaController::class, 'soal_a'])->name('soal_a');;
Route::get('/soal_b', [App\Http\Controllers\GantikaController::class, 'soal_b'])->name('soal_b');;
Route::get('/soal_c_a', [App\Http\Controllers\GantikaController::class, 'soal_c_a'])->name('soal_c_a');;
Route::get('/soal_c_b', [App\Http\Controllers\GantikaController::class, 'soal_c_b'])->name('soal_c_b');;
Route::get('/soal_c_c', [App\Http\Controllers\GantikaController::class, 'soal_c_c'])->name('soal_c_c');;
