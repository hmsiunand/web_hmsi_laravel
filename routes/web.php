<?php

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
Route::get('/blog', function () {return view('blog');});
Route::get('/detail-blog', function () {return view('detail-blog');});
Route::get('/lambang', function () {return view('lambang');});
Route::get('/tentang-hmsi', function () {return view('tentang-hmsi');});

// divisi
Route::get('/div-humas', function () {return view('divisi.div-humas');});
Route::get('/div-infomed', function () {return view('divisi.div-infomed');});
Route::get('/div-kwu', function () {return view('divisi.div-kwu');});
Route::get('/div-psdm', function () {return view('divisi.div-psdm');});
Route::get('/div-psi', function () {return view('divisi.div-psi');});
Route::get('/div-rtk', function () {return view('divisi.div-rtk');});
Route::get('/inti', function () {return view('divisi.inti');});