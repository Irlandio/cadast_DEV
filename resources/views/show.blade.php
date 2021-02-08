<!--@extends('templates.templates')-->
@extends('layouts.app')
@section('content')
    <h3 class="text-center">Visualizaro cadastro #{{$dev->id}}</h3> <hr>

    <div class="col-6 m-auto">
      
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <td style="text-align: right; width: 20%"><strong> Nome:</strong></td>
                    <td>{{$dev->nome}}</td>
                </tr>
                <tr>
                    <td style="text-align: right"><strong> Idade:</strong></td>
                    <td>{{$dev->idade}}</td>
                </tr>
                <tr>
                    <td style="text-align: right"><strong> E-mail:</strong></td>
                    <td>{{$dev->email}}</td>
                </tr>
                <tr>
                    <td style="text-align: right"><strong> Linkedin:</strong></td>
                    <td>{{$dev->Url_linkedin}}</td>
                </tr>
                <tr>
                    <td style="text-align: right"><strong> Tecnologias:</strong></td>
                    <td>{{$dev->tecnologias}}</td>
                </tr>
            </tbody>
        </table>

    </div>
    
<div id="actions" class="col-6 m-auto">
	<div class="col-12 m-auto">
	  <a href="{{url("candidato/$dev->id/edit")}}" class="btn btn-primary">Editar</a>
	  <a href="{{url("candidato")}}" class="btn btn-dark">Voltar</a>
	</div>
</div>
@endsection