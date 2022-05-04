<?php

use App\Http\Controllers\MahasiswaController;
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

Route::get('/insert', [MahasiswaController::class, 'insert'])->name('insert');

Route::post('insertMahasiswa', [MahasiswaController::class, 'insertMahasiswa'])->name('insertMahasiswa');

Route::get('/', [MahasiswaController::class, 'view'])->name('view');

Route::get('updateMahasiswa/{id}', [MahasiswaController::class, 'updateMahasiswa'])->name('updateMahasiswa');

Route::patch('/update/{id}', [MahasiswaController::class, 'update'])->name('update');

Route::delete('/delete/{id}', [MahasiswaController::class, 'delete'])->name('delete');
