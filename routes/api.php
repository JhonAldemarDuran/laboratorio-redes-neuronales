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

Route::post('/login_api','ApiLogin@login');

Route::prefix('user/{id}/')->group(function () {
    Route::get('redes', 'RedController@raspberry');
    Route::post('redes/agregar', 'RedController@raspberryAgregar');
});



