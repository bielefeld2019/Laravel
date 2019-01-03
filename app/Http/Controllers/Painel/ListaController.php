<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Painel\Produto;

class ListaController extends Controller
{
    
    public function index(Produto $produto)
    {
    	$produtos = $produto->all();

    	return view('/Listagem/lista', compact('produtos'));
    }


    public function create(Request $request)
    {	
    	return view('/Listagem/cadastro');
	}


    public function store(Request $request)
    {	
    	$produtos = Produto::create($request->all());
    	
    	$produtos->save();
	}


    public function edit($codigo)
    {
        $produto = Produto::find($codigo);

        return view('/Listagem/editar', compact('produto'));
    }


    public function update(Produto $request)
    {
    	$produtos = $request->all();

    	$produto = Produto::find($request);

        $update = $produto->update($produtos);

        return redirect('/produtos');
    }


    public function destroy(Produto $produto)
    {
    	$produto = Produto::delete();

        $delete = $produto->delete();	     
    }

}