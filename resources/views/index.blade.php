<!--@extends('templates.templates')-->
@extends('layouts.app')
@section('content')

<div class="col-12 m-auto">
    <div class="col-12 m-auto">
        <div class="col-2 m-auto">
            <H4 class="text-center">Relação de Candidatos</H4>
        </div>
        <div class="col-4 m-auto">
            <a class="btn btn-success" 
            href="{{url("candidato/create")}}"><i class="fa fa-plus"></i> Novo Cadastro</a>
            
            <a class="btn btn-primary" href="{{url("candidato")}}"><i class="fa fa-refresh"></i> Atualizar</a>
            
        
        <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#filtrar-modal" data-id="id"  data-nome="Teste" ><i class="fa fa-filter"></i> Filtrar</a>
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
    @{{$devs->links()}}
</div>


<!-- Modal de Filtrar-->
<div class="modal fade" id="filtrar-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modalLabel">Filtrar Cadastros</h4>
      </div>
      <div class="modal-body">
        Selecione as tecnologias a serem filtradas.
      </div>      
<form action="index.php"  name="NForm"  method="get" >
    <div class="form-group col-md-6">
           <select name="ord" id="ord" class="form-control">
                <option value="id"> Por Cadastro</option>
                <option value="nome"> Por Nome</option>
                <option value="tecnologias"> Por Tecnologias</option>
                </select> 
    </div>
  <div class="row" >  
    <div class="form-group col-md-12">
      <label for="campo3"> Tecnologias</label><br/>
    <div class="form-group col-md-4">
       <label class="btn btn-default" submit><input name="tec[]" type="checkbox" value="C#" class="badgebox" 
        style="margin-top:5px;"/> <span class="badge" >&check;</span> C#:</label><br/>
       <label class="btn btn-default" submit><input name="tec[]" type="checkbox" value="Javascript" class="badgebox" 
        style="margin-top:5px;"/> <span class="badge" >&check;</span> Javascript:</label><br/>
       <label class="btn btn-default" submit><input name="tec[]" type="checkbox" value="Nodejs" class="badgebox" 
        style="margin-top:5px;"/> <span class="badge" >&check;</span> Nodejs:</label><br/>
    </div> 
    <div class="form-group col-md-3">
       <label class="btn btn-default" submit><input name="tec[]" type="checkbox" value="Angular" class="badgebox" 
        style="margin-top:5px;"/> <span class="badge" >&check;</span> Angular:</label><br/>
       <label class="btn btn-default" submit><input name="tec[]" type="checkbox" value="React" class="badgebox" 
       style="margin-top:5px;"/> <span class="badge" >&check;</span> React:</label><br/>
       <label class="btn btn-default" submit><input name="tec[]" type="checkbox" value="Ionic" class="badgebox" 
        style="margin-top:5px;"/> <span class="badge" >&check;</span> Ionic:</label><br/>
    </div> 
    <div class="form-group col-md-4">
       <label class="btn btn-default" submit><input name="tec[]" type="checkbox" value="Mensageria" class="badgebox" 
        style="margin-top:5px;"/> <span class="badge" >&check;</span> Mensageria:</label><br/>
       <label class="btn btn-default" submit><input name="tec[]" type="checkbox" value="PHP" class="badgebox" 
        style="margin-top:5px;"/> <span class="badge" >&check;</span> PHP:</label><br/>
       <label class="btn btn-default" submit><input name="tec[]" type="checkbox" value="Laravel" class="badgebox" 
        style="margin-top:5px;"/> <span class="badge" >&check;</span> Laravel:</label><br/>
  </div> 
  </div> 
  </div> 
      <div class="modal-footer">
            <div class="form-group col-md-6">
                   <button type="submit" class="btn btn-primary">Filtrar</button>
                    <a id="cancel" class="btn btn-default" data-dismiss="modal">Cancelar</a>
                </div>
      </div>
</form>
    </div>
  </div>
</div> 
    
@endsection