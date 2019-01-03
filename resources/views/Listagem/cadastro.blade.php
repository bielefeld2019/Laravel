<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<form class="form-horizontal" method="POST" action="{{url('produtos')}}">
@csrf

<fieldset>

<legend><h1><center>Cadastro de Produtos</center></h1></legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtcodigo_produto_id">Cód. Produto : </label>  
  <div class="col-md-2">
  <input id="codigo" name="codigo" type="hidden" placeholder="Código" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nome">Nome : </label>  
  <div class="col-md-6">
  <input id="nome" name="nome" type="text" placeholder="Nome do Produto" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="descricao">Descrição : </label>
  <div class="col-md-4">
   <input id="descricao" name="descricao" type="text" placeholder="Descrição do Produto" class="form-control input-md" required="">
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="categoria">Categoria : </label>  
  <div class="col-md-6">
  <input id="categoria" name="categoria" type="text" placeholder="Nome da Categoria" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="qntd_estoque">Quantidade no Estoque : </label>
  <div class="col-md-4">
   <input id="qntd_estoque" name="qntd_estoque" type="text" placeholder="Quantidade do Produto no estoque" class="form-control input-md" required="">
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="btnsalvar"></label>
  <div class="col-md-8">
    

    <button id= "btnsalvar" class="btn btn-primary" href="{{url('produtos')}}"> Salvar </button>
    <a class="btn btn-danger" id="btncancelar" href="{{url('produtos')}}"> Cancelar </a>
  
  </div>
</div>

</fieldset>
</form>

