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
});

Route::get('/alunos', 'AlunosController@mostrarAlunos');

// Route::get('/contato/{nome?}', function ($nome = 'BBBB') {
//     return "<h1>Boa noite, " . "$nome</h1>";
// });

//FILMES
Route::get('/filmes', 'FilmesController@mostrarFilmes');
Route::get('/filmes/{id?}', 'FilmesController@procurarFilmeId');
Route::get('/filmes/procurar/{nome?}', 'FilmesController@procurarFilmeNome');
Route::post('/filmes/adicionar/{filme}', 'FilmesController@adicionarFilme');

//ATOR
Route::get('/atores', 'AtorController@show')->middleware('auth');
Route::get('/ator/{id?}', 'AtorController@index');
Route::get('/atores/add', 'AtorController@novo');
Route::post('/atores/add', 'AtorController@adicionar');

//CATEGORIA
Route::get('/categoria', 'CategoriaController@exibir');
Route::get('/categoria/adicionar', 'CategoriaController@novo');
Route::post('/categoria/adicionar', 'CategoriaController@adicionar');
Route::get('/categoria/editar/{id}', 'CategoriaController@editar');
Route::put('/categoria/editar/{id}', 'CategoriaController@putCategoria');
Route::get('/categoria/excluir/{id}', 'CategoriaController@excluir');
Route::delete('/categoria/excluir/{id}','CategoriaController@deleteCategoria');

//Idioma
Route::get('/idioma/{id}', 'IdiomaController@exibir');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/noticias', 'NoticiaController@nytimes');
  
