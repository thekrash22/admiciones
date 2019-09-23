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


Route::resource('personas', 'PersonasAPIController');

Route::resource('padres', 'PadresAPIController');

Route::resource('aspirantes', 'AspirantesAPIController');

Route::resource('hermanos', 'HermanosAPIController');

Route::resource('historia_academicas', 'HistoriaAcademicaAPIController');

Route::resource('relacion_colegios', 'RelacionColegioAPIController');

Route::resource('documentos', 'DocumentosAPIController');

Route::resource('documentos_incripcions', 'DocumentosIncripcionAPIController');