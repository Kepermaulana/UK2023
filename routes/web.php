<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'App\Http\Controllers\MasyarakatController@index')->name('masyarakat.index');

//Register
Route::get('/register', 'App\Http\Controllers\Auth\RegisterController@RegisterFormMasyarakat');
Route::post('/register/store', 'App\Http\Controllers\Auth\RegisterController@RegisterMasyrakat')->name('masyarakat.register');
//Login
Route::get('login', 'App\Http\Controllers\Auth\LoginController@FormLoginMasyarakat');
Route::post('login', 'App\Http\Controllers\Auth\LoginController@LoginMasyarakat')->name('masyarakat.login');

Route::middleware('masyarakat')->group(function(){
    Route::get('/pengaduan', 'App\Http\Controllers\MasyarakatController@FormPengaduan');
    Route::match(['get', 'post'],'/pengaduan/simpan', 'App\Http\Controllers\MasyarakatController@simpanPengaduan')->name('masyarakat.pengaduan');
    Route::get('/laporanku', 'App\Http\Controllers\MasyarakatController@laporanku');
    Route::get('/logout', 'App\Http\Controllers\MasyarakatController@logout');
});
