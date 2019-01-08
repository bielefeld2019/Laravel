<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Painel\Categoria;


class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Categoria $categoria)
    {
        $categorias = $categoria->all();
        
        return view('/Categoria/lista', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('/Categoria/cadastro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categorias = Categoria::create($request->all());
    	
        $categorias->save();
        
        return redirect('categoria');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($codigo)
    {
        $categoria = Categoria::find($codigo);
        
        return view('Categoria/excluir', compact('categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($codigo)
    {
        $categoria = Categoria::find($codigo);

        return view('/Categoria/editar', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $codigo)
    {
        $categorias = $request->all();

    	$categoria = Categoria::find($codigo);

        $update = $categoria->update($categorias);
      
        return redirect('categoria');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($codigo)
    {
        $categoria = Categoria::find($codigo);

        $delete = $categoria->delete($codigo);

        return redirect('categoria');
    }
}
