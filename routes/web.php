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

// divisi
Route::get('/div-humas', function () {return view('divisi.div-humas');})->middleware('guest');
Route::get('/div-infomed', function () {return view('divisi.div-infomed');})->middleware('guest');
Route::get('/div-kwu', function () {return view('divisi.div-kwu');})->middleware('guest');
Route::get('/div-psdm', function () {return view('divisi.div-psdm');})->middleware('guest');
Route::get('/div-psi', function () {return view('divisi.div-psi');})->middleware('guest');
Route::get('/div-rtk', function () {return view('divisi.div-rtk');})->middleware('guest');
Route::get('/inti', function () {return view('divisi.inti');})->middleware('guest');

//saran
Route::get('/kotak-pesan', [SaranController::class, 'index'])->middleware('auth');
Route::post('/kirimsaran', [SaranController::class, 'store']);

//  blog
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/{blog:slug}', [BlogController::class, 'show']);
Route::get('/edit-blog/{blog:slug}', [BlogController::class, 'edit'])->middleware('auth');
Route::get('/kelola-blog', [BlogController::class, 'index_kelola'])->middleware('auth');
Route::get('/tambah-blog', function () {return view('kelola-blog.tambah-blog');})->middleware('auth');

//auth
Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


