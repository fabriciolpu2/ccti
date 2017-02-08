<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//Route::get('/', 'WelcomeController@index');


Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);



Route::get('/alunos', 'AlunoController@index');
Route::get('/alunos/{id}', 'AlunoController@detalhes')->where('id', '[0-9]');
Route::get('/alunos/turmas/{id}', 'AlunoController@listaTurmas')->where('id', '[0-9]');
Route::get('/alunos/json', 'AlunoController@listaJson');

/* Cursos */
Route::get('/cursos','CursoController@lista');
Route::get('/cursos/novo', 'CursoController@novo');
Route::post('/cursos/adiciona', 'CursoController@adiciona');

/* Turmas */
Route::get('/turmas/novo', 'TurmaController@novo');
Route::post('/turmas/adiciona', 'TurmaController@adiciona');
Route::get('/turmas/alunos/{id}','TurmaController@listaAlunos')->where('id','[0-9]+');
Route::get('/turmas/{id}', 'CursoController@listaTurmas')->where('id', '[0-9]+');
Route::get('/turmas','TurmaController@lista');