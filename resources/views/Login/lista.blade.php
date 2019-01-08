<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<!------ Include the above in your HEAD tag ---------->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="#" crossorigin="anonymous">

<div class="container-fluid">
	<div class="row">
		<div class="col-md-3 ">
		     <div class="list-group ">
             <h1> <center>EloVerde</center></h1>
              <a href="{{url('users')}}" class="list-group-item list-group-item-action active">Usuários</a>
              <a href="{{url('produtos')}}" class="list-group-item list-group-item-action">Produtos</a>
              <a href="{{url('categoria')}}" class="list-group-item list-group-item-action">Categoria</a>       
            </div> 
		</div>
		<div class="col-md-9">
		    <div class="card">
		        <div class="card-body">
		            <div class="row">
		                <div class="col-md-2 border-right">
	                    <h4>Usuários</h4>
	                     </div>


		                <div class="col-md-6">
	 <a class="btn btn-sm btn-success" href="{{url('users/create')}}"><span class="glyphicon glyphicon-plus"></span></a>
		                </div>
		                
		            </div>
		            <div class="row">
		                <div class="col-md-12">
		                    <table class="table table-hover ">
                                <thead class="bg-light ">
                                  <tr>
                                    <th>
                                      
                                    </th>  
                                    <th>Nome</th>
                                    <th>E-mail</th>
                                    <th>Sexo</th>
                                    <th>Telefone</th>
									<th>Ações</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                  @foreach ($users as $user)  
								  <td></td>
                                    <td><small>{{$user->name}}</small></td>
                                    <td><small>{{$user->email}}</small></td>
                                    <td><small>{{$user->sexo}}</small></td>
                                    <td><small>{{$user->telefone}}</small></td>
                                    
                                    <td>
                                        <a href="{{url('users/' . $user->id . '/editar')}}"><i class="fa fa-pencil-square-o"></i></a>
                                        
                                        <a href="{{url('users/' . $user->id . '/excluir')}}"><i class="fa fa-trash"></i></a>
                                    </td>
                                  </tr>
                                  @endforeach
                         
                                </tbody>
                      </table>
	                </div>
		            </div>
		        </div>
		    </div>
		</div>
	</div>
</div>