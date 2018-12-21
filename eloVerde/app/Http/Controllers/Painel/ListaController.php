<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Painel\Produto;

class ListaController extends Controller
{
    public function ver(Produto $produto){

    	$produtos = $produto->all();

    	return view('/Listagem/lista', compact('produtos'));
    }


    public function create(Request $request)
    {	
    	$produtos = Produto::create($request->all());
    	
    	$produtos->save();
	}


    public function update(Produto $request, $id)
    {
    	$produtos = $request->all();

    	$produto = Produto::find($id);

    	$update = $produto->update($produtos);

    	$produtos->save();
    	
    }

    public function destroy($id)
    {
    	$produto = Produto::find($id);

    	$delete = $produto->delete();

    	$delete->save();
    }
   

}


