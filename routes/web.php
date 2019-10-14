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
    return view('home');
});
//Rotas para o Auth
Auth::routes();

//Rotas para a Home
Route::get('/home', 'HomeController@index')->name('home');

//Rotas para Alunos
Route::resource('/alunos', 'AlunoController', ['except' => ['destroy']]);
Route::get('/alunos/{aluno}/delete', 'AlunoController@destroy')->name('alunos.destroy');

//Rotas para Instrutors
Route::resource('/instrutores', 'InstrutorController', ['except' => ['destroy',  ]]);
Route::get('/instrutores/{instrutor}/delete', 'InstrutorController@destroy')->name('instrutores.destroy');
Route::put('/instrutores/{instrutor}', 'InstrutorController@update')->name('instrutores.update');
Route::get('/instrutores/{instrutor}/edit', 'InstrutorController@edit')->name('instrutores.edit');

//Rotas para Gerentes
Route::resource('/relatorios', 'RelatorioController', ['except'=>['create','store', 'destroy','show', 'edit', 'update']]);
Route::get('/relatorios/show', 'RelatorioController@show')->name('relatorios.show');
//Route::post('/relatorios/show', 'RelatorioController@show')->name('relatorios.show');
//Rotas para Recepcionistas


//Authentication
Route::get('profile', function() {

})->middleware('auth');
Auth::routes();
