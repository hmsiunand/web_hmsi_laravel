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

// tentang
Route::get('/tentang', function () {return view('tentang-hmsi');})->middleware('guest');
Route::get('/tentang/alumni', function () {return view('alumni');})->middleware('guest');
Route::get('/tentang/lambang', function () {return view('lambang');})->middleware('guest');
Route::get('/tentang/berkunjung', function () {return view('berkunjung');})->middleware('guest');

// divisi
Route::get('/divisi/eksternal', function () {return view('divisi.div-eksternal');})->middleware('guest');
Route::get('/divisi/internal', function () {return view('divisi.div-internal');})->middleware('guest');
Route::get('/divisi/medkraf', function () {return view('divisi.div-medkraf');})->middleware('guest');
Route::get('/divisi/bikraf', function () {return view('divisi.div-bikraf');})->middleware('guest');
Route::get('/divisi/psdm', function () {return view('divisi.div-psdm');})->middleware('guest');
Route::get('/divisi/psi', function () {return view('divisi.div-psi');})->middleware('guest');
Route::get('/divisi/rtk', function () {return view('divisi.div-rtk');})->middleware('guest');
Route::get('/divisi/inti', function () {return view('divisi.inti');})->middleware('guest');

// saran
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

// auth
Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

// isce
Route::get('/isce', function () {return view('isce.beranda');})->middleware('guest');
