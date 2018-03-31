<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->group(function () {
    Route::prefix('/manga')->name('manga.')->group(function () {
        Route::post('edit/{id}', 'MangaController@update')->name('update');
        Route::post('delete/{id}', 'MangaController@delete')->name('delete');
        Route::post('create', 'MangaController@store')->name('store');
        Route::get('list', 'MangaController@list')->name('list');
    });
});
