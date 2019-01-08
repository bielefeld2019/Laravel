<?php

namespace App\Models\Painel;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
	public $timestamps = false; 

	protected $fillable = 
	[
		'nome',
		'descricao',
		'categoria',
		'qntd_estoque' 
	];

}
