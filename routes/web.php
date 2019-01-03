<?php

// -> Produtos

Route::get('/produtos', 'Painel\ListaController@index');

Route::get('/produtos/create', 'Painel\ListaController@create');

Route::post('/produtos', 'Painel\ListaController@store');

Route::get('/produtos/{codigo}/editar', 'Painel\ListaController@edit');

Route::put('/produtos/{codigo}', 'Painel\ListaController@update');

Route::delete('/produtos/{codigo}/excluir', 'Painel\ListaController@destroy');

// -> Login

route::get('/', 'Painel\LoginController@index');

Route::get('/login', 'Painel\LoginController@index');

Route::get('/login/create', 'Painel\LoginController@create');

Route::post('/login', 'Painel\LoginController@store');




