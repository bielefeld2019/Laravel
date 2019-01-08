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
        
        return redirect('produtos');

	}


    public function snow($codigo)
    {
        $produto = Produto::find($codigo);
        
        return view('Listagem/excluir', compact('produto'));
    }


    public function edit($codigo)
    {
        $produto = Produto::find($codigo);

        return view('/Listagem/editar', compact('produto'));
    }


    public function update(Request $request, $codigo)
    {
    	$produtos = $request->all();

    	$produto = Produto::find($codigo);

        $update = $produto->update($produtos);

        return redirect('produtos');
        
    }


    public function destroy($codigo)
    {
    	$produto = Produto::find($codigo);

        $delete = $produto->delete($codigo);
    
        return redirect('produtos');
    }

}