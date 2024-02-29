<?php

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
    return view('bubuku.homepage');
});

Auth::routes();

Route::get('/homepage', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Menampilkan Dashboard
Route::get('/dashboard', [App\Http\Controllers\BookController::class, 'index'])->name('dashboard');

//Menampilkan Table Buku
Route::get('/buku', [App\Http\Controllers\BookController::class, 'tablte'])->name('buku');

//Menampilkan Form
Route::get('/tambah', [App\Http\Controllers\BookController::class, 'createbuk'])->name('tambah');

//Proses Form
Route::post('/addbuku', [App\Http\Controllers\BookController::class, 'add'])->name('addbuku');

//Proses edit
Route::put('/update/{id}', [App\Http\Controllers\BookController::class, 'update'])->name('update');

//Menampilkan form edit
Route::get('/edit/{id}', [App\Http\Controllers\BookController::class, 'edit'])->name('edit');

Route::delete('/delete/{id}', [App\Http\Controllers\BookController::class, 'delete'])->name('delete');

Route::get('/datau', [App\Http\Controllers\BookController::class, 'user'])->name('datau');

Route::get('/datap', [App\Http\Controllers\BookController::class, 'petugas'])->name('datap');

Route::get('/adddatap', [App\Http\Controllers\BookController::class, 'addpetugas'])->name('adddatap');

Route::post('/prosesadddatap', [App\Http\Controllers\BookController::class, 'create'])->name('prosesadddatap');

Route::get('/catalog', [App\Http\Controllers\BookController::class, 'kolek'])->name('catalog');

Route::get('/detail/{id}', [App\Http\Controllers\BookController::class, 'jelax'])->name('detail');

Route::get('/profil', [App\Http\Controllers\BookController::class, 'bio'])->name('profil');
