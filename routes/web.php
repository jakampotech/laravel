<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

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

Route::get('/blog', [BlogController::class, 'home']);

Route::get('/blog/tabel', [BlogController::class, 'tabel']);
Route::get('/blog/tambah', [BlogController::class, 'tambah']);
Route::post('/blog/proses', 'MalasngodingController@proses');
Route::post('/blog/store', [BlogController::class, 'store']);
Route::get('/blog/edit/{id}', [BlogController::class, 'edit']);
Route::post('/blog/update', [BlogController::class, 'update']);
Route::get('/blog/hapus/{id}', [BlogController::class, 'hapus']);
Route::get('/blog/cari', [BlogController::class, 'cari']);

Route::get('/blog/kontak', [BlogController::class, 'kontak']);

