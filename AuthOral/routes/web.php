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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/player', 'App\Http\Controllers\PlayerController@index')->name('player')->middleware('player');
Route::get('/admin', 'App\Http\Controllers\AdminController@index')->name('admin')->middleware('admin');
Route::get('/superadmin', 'App\Http\Controllers\SuperAdminController@index')->name('superadmin')->middleware('superadmin');
Route::get('/scout', 'App\Http\Controllers\ScoutController@index')->name('scout')->middleware('scout');
Route::get('/team', 'App\Http\Controllers\TeamController@index')->name('team')->middleware('team');
Route::get('/academy', 'App\Http\Controllers\AcademicController@index')->name('academy')->middleware('academy');
// Route::get('/home', 'AcademicController@index')->name('home');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');