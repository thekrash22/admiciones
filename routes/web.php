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

//use Illuminate\Routing\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder');

Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate');

Route::get('relation_field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@relationFieldTemplate');

Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate');

Route::post('generator_builder/rollback', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@rollback');

Route::post(
    'generator_builder/generate-from-file',
    '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generateFromFile'
);

Route::resource('personas', 'PersonasController');

Route::resource('padres', 'PadresController');

Route::resource('aspirantes', 'AspirantesController');

Route::resource('hermanos', 'HermanosController');

Route::resource('historiaAcademicas', 'HistoriaAcademicaController');

Route::resource('relacionColegios', 'RelacionColegioController');

Route::resource('documentos', 'DocumentosController');

Route::get('formulario/create','FormularioController@formulario')->name('formulario.create');
Route::post('formulario','FormularioController@store')->name('formulario.store');
Route::get('subir-documentos/{id}','FormularioController@documentos')->name('formulario.documentos');
Route::get('subir/documentos-inscripcion/{id}','FormularioController@documentos_inscripcion')->name('formulario.documentosinscripcion');
Route::post('subir/inscripcion','FormularioController@inscripcion')->name('formulario.inscripcion');

/*
    Route ---> resource(get,post,put,path,delete), por defecto toma las funciones
        index,create,store,edit,update,destroy
    Route ---> get(get) --> especificar la funcion.
*/

Route::resource('documentosIncripcions', 'DocumentosIncripcionController');
Route::get('correo','PersonasController@correo');
Route::get('pdf','FormularioController@pdf');
Route::get('bajar/pdf/solicitud-admision/{id}','FormularioController@pdf_admision');
Route::get('asp','AspirantesController@ad');
