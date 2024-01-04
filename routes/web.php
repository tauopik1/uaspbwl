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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/siswa', [App\Http\Controllers\SiswaController::class, 'index']);
Route::get('/siswa/create', [App\Http\Controllers\SiswaController::class, 'create']);
Route::post('/siswa', [App\Http\Controllers\SiswaController::class, 'store']);
Route::get('/siswa/edit/{id}', [App\Http\Controllers\SiswaController::class, 'edit']);
Route::patch('/siswa/{id}', [App\Http\Controllers\SiswaController::class, 'update']);
Route::delete('/siswa/{id}', [App\Http\Controllers\SiswaController::class, 'destroy']);

Route::get('/kelas', [App\Http\Controllers\KelasController::class, 'index']);
Route::get('/kelas/create', [App\Http\Controllers\KelasController::class, 'create']);
Route::post('/kelas', [App\Http\Controllers\KelasController::class, 'store']);
Route::get('/kelas/edit/{id}', [App\Http\Controllers\KelasController::class, 'edit']);
Route::patch('/kelas/{id}', [App\Http\Controllers\KelasController::class, 'update']);
Route::delete('/kelas/{id}', [App\Http\Controllers\KelasController::class, 'destroy']);

Route::get('/absensi', [App\Http\Controllers\AbsensiController::class, 'index']);
Route::get('/absensi/create', [App\Http\Controllers\AbsensiController::class, 'create']);
Route::post('/absensi', [App\Http\Controllers\AbsensiController::class, 'store']);
Route::get('/absensi/edit/{id}', [App\Http\Controllers\AbsensiController::class, 'edit']);
Route::patch('/absensi/{id}', [App\Http\Controllers\AbsensiController::class, 'update']);
Route::delete('/absensi/{id}', [App\Http\Controllers\AbsensiController::class, 'destroy']);