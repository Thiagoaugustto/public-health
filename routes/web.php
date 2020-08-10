<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/**
 *==========================================================================
 *==========================================================================
 *------------------------      ROTAS USER      ----------------------------
 *==========================================================================
 *==========================================================================
 */

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

/**
 *==========================================================================
 *==========================================================================
 *------------------------      ROTAS EXAME      ---------------------------
 *==========================================================================
 *==========================================================================
 */

Route::get('/exame', 
	['uses'=>'ExamesController@listaExame','as'=>'exame.index']);

Route::resource('exame', 'ExamesController');

Route::get('/exame/{id}', 'ExamesController@show')
->name('exame');

/**
 *==========================================================================
 *==========================================================================
 *------------------------      ROTAS PERFIL      --------------------------
 *==========================================================================
 *==========================================================================
 */

Route::get('/perfil', 
	['uses'=>'HomeController@perfil','as'=>'perfil.index']);

Route::post('/perfil', 
	['uses'=>'HomeController@perfilAtualiza','as'=>'perfil.index']);

/**
 *==========================================================================
 *==========================================================================
 *----------------------      ROTAS CALENDARIO      ------------------------
 *==========================================================================
 *==========================================================================
 */

Route::get('/calendario', 'FullCalendarController@index')
	->name('index');

Route::get('/load-events', 'EventController@loadEvents')
	->name('routeLoadEvents');

Route::put('/event-update', 'EventController@update')
	->name('routeEventUpdate');

Route::post('/event-store', 'EventController@store')
	->name('routeEventStore');

Route::delete('/event-destroy', 'EventController@destroy')
	->name('routeEventDelete');