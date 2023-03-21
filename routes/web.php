<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\SaranController;
use App\Http\Controllers\LoginController;
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

Route::get('/', function () {return view('index');})->name('beranda')->middleware('guest');
Route::get('/alumni', function () {return view('alumni');})->middleware('guest');
Route::get('/lambang', function () {return view('lambang');})->middleware('guest');
Route::get('/tentang-hmsi', function () {return view('tentang-hmsi');})->middleware('guest');
Route::get('/visit', function () {return view('visit');})->middleware('guest');

// divisi
Route::get('/div-eksternal', function () {return view('divisi.div-eksternal');})->middleware('guest');
Route::get('/div-internal', function () {return view('divisi.div-internal');})->middleware('guest');
Route::get('/div-medkraf', function () {return view('divisi.div-medkraf');})->middleware('guest');
Route::get('/div-bikraf', function () {return view('divisi.div-bikraf');})->middleware('guest');
Route::get('/div-psdm', function () {return view('divisi.div-psdm');})->middleware('guest');
Route::get('/div-psi', function () {return view('divisi.div-psi');})->middleware('guest');
Route::get('/div-rtk', function () {return view('divisi.div-rtk');})->middleware('guest');
Route::get('/inti', function () {return view('divisi.inti');})->middleware('guest');

//saran
Route::get('/kotak-pesan', [SaranController::class, 'index'])->middleware('auth');
Route::post('/kirimsaran', [SaranController::class, 'store'])->middleware('guest');
Route::delete('/hapus-pesan/{saran}', [SaranController::class, 'destroy'])->middleware('auth');

//  blog
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/{blog:slug}', [BlogController::class, 'show']);
Route::get('/edit-blog/{blog:slug}', [BlogController::class, 'edit'])->middleware('auth');
Route::get('/kelola-blog', [BlogController::class, 'index_kelola'])->middleware('auth');
Route::get('/tambah-blog', [BlogController::class, 'create'])->middleware('auth');
Route::post('/tambah-blog', [BlogController::class, 'store'])->middleware('auth');
Route::delete('/hapus-blog/{blog}', [BlogController::class, 'destroy'])->middleware('auth');
Route::put('/edit-blog/{blog}', [BlogController::class, 'update'])->middleware('auth');

//auth
Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');


