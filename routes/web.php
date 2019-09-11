<?php

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
<<<<<<< HEAD
    return view('master-layout');
});
Route::get('trangchu', function () {
    return view('pages.trangchu');
});
=======
    return view('pages.gioithieu');
})->name('gioi-thieu');
>>>>>>> 838482f73437dd90af628351b14f80faf356cf1d
