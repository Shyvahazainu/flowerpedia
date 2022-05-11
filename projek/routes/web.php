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

<<<<<<< HEAD
Route::get('/flowerpedia/list', function () {
    return view('list');
});

Route::get('/flowerpedia', function () {
    return view('template');
});

Route::get('/flowerpedia/matahari', function () {
    return view('matahari');
});

Route::get('/flowerpedia/amaryllis', function () {
    return view('amaryllis');
=======
Route::get('/', function () {
    return view('template');
});

Route::get('/fotd', function () {
    return view('fotd');
>>>>>>> main
});

Route::get('/flowerpedia/aster', function () {
    return view('aster');
});

Route::get('/search', function () {
    return view('search');
});
