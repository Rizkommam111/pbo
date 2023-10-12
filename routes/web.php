<?php

use App\Http\Controllers\JurusanController;
use App\Http\Controllers\SiswaController;
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

//Route::resource('/siswa', SiswaController::class);
Route::get('/siswa', [SiswaController::class, 'index']);
Route::get('/siswa/create', [SiswaController::class, 'create']);
Route::post('/siswa/store', [SiswaController::class, 'store']);
Route::get('/siswa/edit/{id}', [SiswaController::class, 'edit']);
Route::get('/jurusan', [JurusanController::class, 'index']);
Route::get('/jurusan/create', [JurusanController::class, 'create']);
Route::post('/jurusan/store', [JurusanController::class, 'store']);
Route::get('/jurusan/edit/{id}', [JurusanController::class, 'edit']);
Route::POST('/jurusan/update/{id}', [JurusanController::class, 'update']);
Route::get('/jurusan/delete/{id}', [JurusanController::class, 'destroy']);