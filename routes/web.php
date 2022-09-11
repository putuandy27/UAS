<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\HandphonesController;

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

// Route::get('home', function () {
//     return view('home');
// });

Route::get('/', [PagesController::class, 'home']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/barang', [HandphonesController::class, 'index']);
Route::get('/edit/{handphones}', [HandphonesController::class, 'edit']);
Route::post('/update/{handphones}', [HandphonesController::class, 'update']);
Route::get('/tambah', [HandphonesController::class, 'create']);
Route::post('/add', [HandphonesController::class, 'store']);
Route::get('/hapus/{handphones}', [HandphonesController::class, 'hapus']);
Route::delete('/delete/{handphones}', [HandphonesController::class, 'destroy']);