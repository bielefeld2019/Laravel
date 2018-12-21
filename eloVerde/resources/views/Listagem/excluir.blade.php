@section('content')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<h1 class="title-pg"> {{$produto->nome}} </h1>

<p><b>Nome</b>{{$produto->nome}}</p>
<p><b>Descrição</b>{{$produto->descricao}}</p>
<p><b>Categoria</b>{{$produto->categoria}}</p>
<p><b>Quantidade no Estoque</b>{{$produto->qntd_estoque}}</p>



@endsection