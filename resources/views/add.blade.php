
@extends('layouts.app')

@section('content')
  
  <h4 class="text-center">@if(isset($dev))Editar @else Cadastrar @endif</h4> <hr>
 
  @if(isset($errors) && count($errors)>0)
    <div class="text-center mt-4 mb-4 p-2 alert-danger">
        @foreach($errors->all() as $erro)
            {{$erro}}<br>
        @endforeach
    </div>
@endif
   
    <div class="col-8 m-auto">
    @if(isset($dev))
        
    <form name="formEdit" id="formEdit" method="post" action="{{url("books/$dev->id")}}" > @method('PUT')
    @else 
    <form name="formAdd" id="formAdd" method="post" action="{{url("books")}}"  >
    @endif
     @csrf
       
    <div class="col-12 m-auto">
        <div class="row col-md-10 m-auto" >    
            <h5>@if(isset($dev))Edição @else Novo Cadastro @endif </h5>
              <!-- area de campos do form -->
              <hr />
              <div class=" col-md-5" >
                <div class="form-group col-12 m-auto">
                  <label for="name"> Nome Completo</label>
                  <input id="nome" type="text" class="form-control"  value="{{($dev->nome ?? '')}}" name="nome" autofocus onblur="verificanome(this);" >
                </div>	  
                <div class="form-group col-12 m-auto" id="myModal">
                  <label for="email"> E-mail</label>
                  <input id="email1" type="email" class="form-control" value="{{($dev->email ?? '')}}"  name="email1"   onblur="verificaemail(this,1);" Placeholder="fulano@email.com">
                </div>
                <div class="form-group col-12 m-auto">
                  <label for="email"> Repita o E-mail</label>
                  <input id="email2" type="email" class="form-control" value="{{($dev->email ?? '')}}"  name="email2"  Placeholder="Repita seu E-mail"  onblur="verificaemail(this,2);">
                </div>
                <div class="form-group col-12 m-auto">
                  <label for="campo3"> Likedin</label><br>
                       <input type="text" class="form-control" name="linkedin" value="{{($dev->Url_linkedin ?? '')}}"  Placeholder="www.linkedin.com/in/www.linkedin.com/in/Fulano-De-Tal-999990025/">
                </div>      
              </div> 
              <div class=" col-md-5 m-left" >

                <div class="form-group col-6 ">
                  <label for="campo3">Data de Nasc.</label>
                  <input type="date" class="form-control" name="datNasc" id="datNasc" value="{{($dev->dNasc ?? '')}}"  onblur="calculaIdade(this.value);" min="1920-01-01" max="<?php echo date('Y-m-d', strtotime('-15 year')); ?>" > <span class="validity"></span>
                </div>     
                <div class="form-group col-4 ">
                  <label for="campo3">Idade</label>
                  <input type="text" class="form-control" name="idade" id="idade" value="{{($dev->idade ?? '')}}" Readonly >
                </div>
                <div class="form-group col-12">
                  <label for="campo3">Tecnologias</label>
                  <input type="text" class="form-control" name="te" id="te" value="{{($dev->tecnologias ?? '')}}" Readonly>
                </div>          
                </div>           
        </div>           
    </div> 
          
    <div class="col-12  m-auto">                

        <table class="table">
          <thead class="thead-dark">
            <tr style="text-center">
              <th scope="col" colspan="3" >Tecnologias</th>
            </tr>
          </thead>
        </table>
        <div class="col-4  m-auto">                

        <table class="table">
          <tbody>      
                <?php $c = $javascript = $nodejs = $angular = $react = $ionic = $mensageria = $pHP = $laravel = " "; 
                    if(isset($dev)){  $tec= $dev->tecnologias; 
                    if (strpos($tec, 'C#')          !== false) {$c          = 'checked';}
                    if (strpos($tec, 'Javascript')  !== false) {$javascript = 'checked';}
                    if (strpos($tec, 'Nodejs')      !== false) {$nodejs     = 'checked';}
                    if (strpos($tec, 'Angular')     !== false) {$angular    = 'checked';}
                    if (strpos($tec, 'React')       !== false) {$react      = 'checked';}
                    if (strpos($tec, 'Ionic')       !== false) {$ionic      = 'checked';}
                    if (strpos($tec, 'Mensageria')  !== false) {$mensageria = 'checked';}
                    if (strpos($tec, 'PHP')         !== false) {$pHP        = 'checked';}
                    if (strpos($tec, 'Laravel')     !== false) {$laravel    = 'checked';}}
                ?>

                <tr >
                  <td>              
                      <label class="form-check-label" submit>
                      <input name="tec[]" type="checkbox" value="C#" {{$c}} class="form-check-input" /> C#:</label><br/>
                       <label class="form-check-label" submit><input name="tec[]" type="checkbox" value="Javascript" 
                       {{$javascript}} class="form-check-input"/> Javascript:</label><br/>
                       <label class="form-check-label" submit><input name="tec[]" type="checkbox" value="Nodejs" 
                       <?php echo $nodejs ?> class="form-check-input"/> Nodejs:</label><br/>
                  </td>
                  <td>
                      <label class="form-check-label" submit><input name="tec[]" type="checkbox" value="Angular" 
                       <?php echo $angular ?> class="form-check-input"/> Angular:</label><br/>
                       <label class="form-check-label" submit><input name="tec[]" type="checkbox" value="React" 
                       <?php echo $react ?> class="form-check-input"/> React:</label><br/>
                       <label class="form-check-label" submit><input name="tec[]" type="checkbox" value="Ionic" 
                       <?php echo $ionic ?> class="form-check-input"/>  Ionic:</label><br/>
                 </td>
                  <td>
                      <label class="form-check-label" submit><input name="tec[]" type="checkbox" value="Mensageria" 
                       <?php echo $mensageria ?> class="form-check-input"/> Mensageria:</label><br/>
                       <label class="form-check-label" submit><input name="tec[]" type="checkbox" value="PHP" 
                       <?php echo $pHP ?> class="form-check-input"/> PHP:</label><br/>
                       <label class="form-check-label" submit><input name="tec[]" type="checkbox" value="Laravel" 
                       <?php echo $laravel ?> class="form-check-input"/> Laravel:</label><br/>
                  </td>  

                </tr>
          </tbody>
        </table>

        </div>
    </div> 

      <div id="actions" class="col-4  m-auto">
        <div class="col-md-12">
          <button type="submit" id="salvar"    class="btn btn-primary">@if(isset($dev))Alterar @else Salvar @endif</button>
          <a href="{{url("books")}}" class="btn btn-dark">Voltar</a>
        </div>
      </div>     

 </form> 

</div>
    
@include('modal')
@endsection