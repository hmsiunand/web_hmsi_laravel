<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\SaranController;
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

Route::get('/', function () {return view('index');});
Route::get('/alumni', function () {return view('alumni');});
Route::get('/lambang', function () {return view('lambang');});
Route::get('/login', function () {return view('login');});
Route::get('/tentang-hmsi', function () {return view('tentang-hmsi');});

// divisi
Route::get('/div-humas', function () {return view('divisi.div-humas');});
Route::get('/div-infomed', function () {return view('divisi.div-infomed');});
Route::get('/div-kwu', function () {return view('divisi.div-kwu');});
Route::get('/div-psdm', function () {return view('divisi.div-psdm');});
Route::get('/div-psi', function () {return view('divisi.div-psi');});
Route::get('/div-rtk', function () {return view('divisi.div-rtk');});
Route::get('/inti', function () {return view('divisi.inti');});

//  blog
Route::get('/blog', [BlogController::class, 'index'])->name('tampil_list_blog');
Route::get('/blog/{blog:slug}', [BlogController::class, 'show'])->name('tampil_detail_blog');

Route::get('/edit-blog/{blog:slug}', [BlogController::class, 'edit']);
Route::get('/kelola-blog', [BlogController::class, 'index_kelola']);
Route::get('/kotak-pesan', [SaranController::class, 'index']);
Route::get('/tambah-blog', function () {return view('kelola-blog.tambah-blog');});

