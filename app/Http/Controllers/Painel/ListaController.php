<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Painel\Produto;

class ListaController extends Controller
{
    
    public function ver(Produto $produto)
    {
    	$produtos = $produto->all();

    	return view('/Listagem/lista', compact('produtos'));
    }


    public function create(Request $request)
    {	
    	$produtos = Produto::create($request->all());
    	
    	$produtos->save();
	}


    public function update(Request $request, $id)
    {
    	$produtos = $request->all();

    	$produto = Produto::find($id);

        $update = $produto->update($produtos);
    }


    public function destroy(Produto $produto)
    {
    	$produto = Produto::delete();

        $delete = $produto->delete();	     
        
        return redirect('Listagem/excluir');
    }

   

}


