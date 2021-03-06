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
})->name('home');

Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/', 'AdminController@index')->name('index');
    });
    Route::prefix('manga')->name('manga.')->group(function () {
        Route::get('/', 'MangaController@index')->name('index');
        Route::get('top', 'MangaController@top')->name('top');
    });
});

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout')->name('logout.get');
Route::get('/dashboard', 'HomeController@index')->name('dashboard');
