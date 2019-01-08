<?php

// -> Produtos

Route::get('/produtos', 'Painel\ListaController@index');

Route::get('/produtos/create', 'Painel\ListaController@create');

Route::post('/produtos', 'Painel\ListaController@store');

Route::get('/produtos/{codigo}/editar', 'Painel\ListaController@edit');

Route::put('/produtos/{codigo}', 'Painel\ListaController@update');

Route::get('/produtos/{codigo}', 'Painel\ListaController@snow');

Route::delete('/produtos/{codigo}', 'Painel\ListaController@destroy');

// -> Login

route::get('/', 'Painel\LoginController@index');

Route::get('/users', 'Painel\LoginController@index');

Route::get('/users/create', 'Painel\LoginController@create');

Route::post('/users', 'Painel\LoginController@store');

Route::get('/users/{codigo}/editar', 'Painel\LoginController@edit');

Route::put('/users/{codigo}', 'Painel\LoginController@update');

Route::get('/users/{codigo}/excluir', 'Painel\LoginController@show');

Route::delete('/users/{codigo}', 'Painel\LoginController@destroy');


// -> Categoria


Route::get('/categoria', 'Painel\CategoriaController@index');

Route::get('/categoria/create', 'Painel\CategoriaController@create');

Route::post('/categoria', 'Painel\CategoriaController@store');

Route::get('/categoria/{codigo}/editar', 'Painel\CategoriaController@edit');

Route::put('/categoria/{codigo}', 'Painel\CategoriaController@update');

Route::get('/categoria/{codigo}/excluir', 'Painel\CategoriaController@show');

Route::delete('/categoria/{codigo}', 'Painel\CategoriaController@destroy');