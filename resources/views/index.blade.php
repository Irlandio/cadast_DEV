<!--@extends('templates.templates')-->
@extends('layouts.app')
@section('content')

    <div class="col-8 m-auto">
        <table class="table"><tbody>      
                <tr><td>
                    <a class="btn btn-success" href="{{url("candidato/create")}}"> <i class="fa fa-plus"></i> Novo Cadastro</a>
                  </td><td>
                    <H4 class="text-center">Relação de Candidatos</H4>
                  </td><td>
                    <a class="btn btn-primary" href="{{url("candidato")}}"><i class="fa fa-refresh"></i> Atualizar</a>
                  </td>
                </tr>
          </tbody></table>
    </div>
    
<div class="col-12 m-auto">
    
        <div class="col-6  m-auto">
        <form name="formSearch" id="formSearch" method="post" action="{{route("candidato.search")}}" class="form form-inline" >
     @csrf
                <div class="form-group col-12">
                  
                      <button type="submit" id="salvar"    class="btn btn-primary"><i class="fa fa-filter"></i> Filtrar por:</button>
              <select class="sform-control" id="filter" name="filter">
                <option value = "Javascript">Javascript</option>
                <option value = "Nodejs">    Nodejs</option>		
                <option value = "Angular">   Angular</option>		
                <option value = "React"  >   React</option>
                <option value = "Ionic"  >   Ionic</option>	
                <option value = "Mensageria">Mensageria</option>	
                <option value = "PHP"    >   PHP</option>	
                <option value = "Ionic"  >   Ionic</option>	
                <option value = "Laravel">   Laravel</option>	
              </select>
                </div>  
         </form>
        </div>

        </div>
    
    @if(Session::has('message'))
    <div class="col-8 m-auto">
        <h5 class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</h5>
    </div>
    @endif
    <div class="col-8 m-auto mt-2" id="tabelaDevs">
         @csrf
      <table class="table table-bordered">
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
                      <a href="{{url("candidato/$dv->id")}}">
                            <button class="btn btn-dark"> Visualizar</button>
                        </a>             

                      <a href="{{url("candidato/$dv->id/edit")}}">
                            <button class="btn btn-primary"> Editar</button>
                        </a>

                      <a href="{{url("candidato/$dv->id")}}" class="js-del"  data-id="{{$dv->id}}"  data-nome="{{$dv->nome}}">
                        <button class="btn btn-danger"> Excluir</button>
                    </a>

                  </td>
                </tr>
              @endforeach
          </tbody>
        </table>
</div>


@endsection