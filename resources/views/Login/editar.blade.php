<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<form class="form-horizontal" method="POST" action="{{url('/users/'. $user->id .'')}}">
@method('PUT')
@csrf

<fieldset>

<legend><h1><center>Editando : {{$user->name}}</center></h1></legend>

<div class="form-group">
  <label class="col-md-4 control-label" for="txtcodigo_produto_id">Cód. Usuário : </label>  
  <div class="col-md-2">
  <input id="id" name="id" type="hidden" value="{{$user->id}}" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Nome : </label>  
  <div class="col-md-6">
  <input id="name" name="name" type="text" value="{{$user->name}}" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">E-mail : </label>
  <div class="col-md-4">
   <input id="email" name="email" type="text" value="{{$user->email}}" class="form-control input-md" required="">
  </div>
</div>

<!-- Sexo -->
<div class="form-group">
  <label class="col-md-4 control-label" for="categoria">Sexo : </label>  
  <div class="col-md-6">
  <input id="sexo" name="sexo" type="text" value="{{$user->sexo}}" class="form-control input-md" required="">
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="telefone">Telefone : </label>
  <div class="col-md-4">
   <input id="telefone" name="telefone" type="number" value="{{$user->telefone}}" class="form-control input-md" required="">
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="password">Senha : </label>  
  <div class="col-md-6">
  <input id="password" name="password" type="password" value="{{$user->password}}" class="form-control input-md" required="">
    
  </div>
</div>
 
<div class="form-group">
  <label class="col-md-4 control-label" for="btneditar"></label>
  <div class="col-md-8">
    
    <button id= "btneditar" class="btn btn-primary" > Salvar </button>
    <a class="btn btn-danger" id="btncancelar" href="{{url('/users')}}"> Cancelar </a>
  
  </div>
</div>
</fieldset>
</form>