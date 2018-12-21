<?php

Route::get('produtos/lista', 'Painel\ListaController@ver');

Route::post('produtos/cadastrar', 'Painel\ListaController@create');

Route::get('produtos/cadastrar', function () 
{
	return view('/Listagem/cadastro');
});

Route::put('produtos/editar', 'Painel/ListaController@update');

Route::get('produtos/editar', function () 
{	
	return view('/Listagem/editar');
});

Route::delete('produtos/excluir', 'Painel/ListaController@destroy');

Route::delete('produtos/excluir', function () 
{	
	return view('/Listagem/excluir');
});







