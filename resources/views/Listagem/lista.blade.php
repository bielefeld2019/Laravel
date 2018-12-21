<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<!DOCTYPE html>
<html>
<head>
	<title>Produtos</title>
	<meta charset="utf-8">

	
	<style type="text/css">
			body{
				font-family: Arial;
				background-color: #fff;
				color: black;

			}

			.conteudo{
				margin-left: 17%;
				margin-top: 20px;
			}

			.menu{
				height: 100%;
				width: 190px;
				position: fixed;
				top:0;
				left:0;
				background-color: #32CD32;
				text-align: center;
			}

				</style>

</head>
<body>



	<div class="menu">
		<h1 style="color: white; margin-left: 5%;"><center>EloVerde</center></h1>
		</div>

<div class="conteudo" >
	<table width="90%" border="0" >
		<tr>
		
			<td width="150"><strong><center>Nome</center></strong></td>
			<td width="150"><strong><center>Descrição</center></strong></td>
			<td width="120"><strong><center>Categoria</center></strong></td>
			<td width="175"><strong><center>Quantidade no estoque</center></strong></td>
			
		</tr>

		<h1>Lista de Produtos</h1>
		
		<a href="{{url('produtos/cadastrar')}}" class="btn btn-outline-success"><span class="glyphicon glyphicon-plus
"></span>Cadastrar</a>

		@foreach ($produtos as $produto)

		<tr>
			<td width="200"><center>{{$produto->nome}}</center></td>
			<td width="200"><center>{{$produto->descricao}}</center></td>
			<td width="200"><center>{{$produto->categoria}}</center></td>
			<td width="220"><center>{{$produto->qntd_estoque}}</center></td>
			<td ><a  class="btn btn-outline-warning" href="{{url('produtos/editar')}}">Editar</a> <a  class="btn btn-outline-danger" href="{{url('produtos/excluir')}}" >Excluir</a></td>
		</tr>

		@endforeach

	</table>
	<br>
	</div>

</body>
</html>
