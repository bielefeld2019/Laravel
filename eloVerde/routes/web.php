<?php

Route::get('/lista', 'Painel\ListaController@ver');

Route::post('/cadastrar', 'Painel\ListaController@create');

Route::get('/cadastrar', function () {

	return view('/Listagem/cadastro');
});


Route::put('/editar', 'Painel/ListaController@update');

Route::get('/editar', function () {

	return view('/Listagem/editar');
});


Route::get('/excluir', function () {

	return view('/Listagem/excluir');
});
Route::delete('/excluir', 'Painel/ListaController@destroy');



