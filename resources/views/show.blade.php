<!--@extends('templates.templates')-->
@extends('layouts.app')
@section('content')
    <h1 class="text-center">Visualizaro candidato #{{$dev->id}}</h1> <hr>

    <div class="col-8 m-auto">
      

        <dl class="dl-horizontal">
            <dt>Nome:</dt>
            <dd>{{$dev->nome}}</dd>

            <dt>Idade:</dt>
            <dd>{{$dev->idade}}</dd>

            <dt>E-mail:</dt>
            <dd>{{$dev->email}}</dd>

            <dt>Linkedin:</dt>
            <dd>{{$dev->Url_linkedin}}</dd>	
        </dl>

    </div>
    
<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="{{url("books/$dev->id")}}" class="btn btn-primary">Editar</a>
	  <a href="{{url("books")}}" class="btn btn-dark">Voltar</a>
	</div>
</div>
@endsection