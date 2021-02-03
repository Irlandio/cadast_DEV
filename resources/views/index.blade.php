@extends('templates.templates')

@section('content')

<div class="col-12 m-auto">
<div class="col-2 m-auto">
<H2 class="text-center">CRUD DEVS</H2>
</div>
<div class="col-4 m-auto">
	    	<a class="btn btn-success" 
	    	href="{{url("books/create")}}"><i class="fa fa-plus"></i> Novo Cadastro</a>
	    	<a class="btn btn-primary" href="{{url("books")}}"><i class="fa fa-refresh"></i> Atualizar</a>
</div>
</div>
<DIV class="col-8 m-auto" id="tabelaDevs">
     @csrf
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome</th>
      <th scope="col">Linkedin</th>
      <th scope="col">Tecnologias</th>
      <th scope="col">Idade</th>
      <th scope="col">Opções</th>
    </tr>
  </thead>
  <tbody>
      @foreach($devs as $dv)          
        <tr>
          <th scope="row">{{$dv->id}}</th>
          <td>{{$dv->nome}}</td>
          <td>{{$dv->Url_linkedin}}</td>
          <td>{{$dv->tecnologias}}</td>
          <td>{{$dv->idade}}</td>
          <td>
              <a href="{{url("books/$dv->id")}}">
                    <button class="btn btn-dark"> Visualizar</button>
                </a>             
              
              <a href="{{url("books/$dv->id/edit")}}">
                    <button class="btn btn-primary"> Editar</button>
                </a>
                
              <a href="{{url("books/$dv->id")}}" class="js-del"  data-id="{{$dv->id}}"  data-nome="{{$dv->nome}}">
                <button class="btn btn-danger"> Excluir</button>
            </a>
            
            </td>
        </tr>
      @endforeach
  </tbody>
</table>
@{{$devs->links()}}
</DIV>
@endsection