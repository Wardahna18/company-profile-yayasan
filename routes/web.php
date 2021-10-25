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
    return view('welcome');
});
Route::get('/index', function()
{
    return view('index');
})->name('index');
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/donasi', function () {
    $donasi = \App\Kategori_Donasi::all();
    return view('donasi', compact('donasi'));
})->name('donasi');

Route::get('/admin', function () {
    return view('layouts.admin');
});
Route::get('/admin/donasi/kategori', 'DonasiController@admin_index')->name('donasi-kategori');
Route::post('/admin/donasi/kategori/store', 'DonasiController@admin_store');
Route::get('/admin/donasi/ruang', 'DonasiController@admin_ruang')->name('donasi-ruang');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
