<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<form class="form-horizontal" method="POST" action="{{url('/categoria/'. $categoria->id .'')}}">
@method('PUT')
@csrf

<fieldset>

<legend><h1><center>Editando : {{$categoria->nome}}</center></h1></legend>

<!-- Código -->
<div class="form-group">
  <label class="col-md-4 control-label" for="id">Cód. Categoria : </label>  
  <div class="col-md-2">
  <input id="id" name="id" type="hidden" value="{{$categoria->id}}" class="form-control input-md">

  </div>
</div>

<!-- Nome -->
<div class="form-group">
  <label class="col-md-4 control-label" for="nome">Nome : </label>  
  <div class="col-md-6">
  <input id="nome" name="nome" type="text" value="{{$categoria->nome}}" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="btneditar"></label>
  <div class="col-md-8">
    
    <button id= "btneditar" class="btn btn-primary" href="{{url('/categoria')}}" > Salvar </button>
    <a class="btn btn-danger" id="btncancelar" href="{{url('/categoria')}}"> Cancelar </a>
  
  </div>
</div>
 
</fieldset>
</form>