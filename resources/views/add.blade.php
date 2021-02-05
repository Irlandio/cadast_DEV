<!--@extends('templates.templates')-->
@extends('layouts.app')

@section('content')
  
  <h1 class="text-center">@if(isset($dev))Editar @else Cadastrar @endif</h1> <hr>
 
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
        <div class="row col-md-10" >    
        <h2>Novo Cadastro</h2>
          <!-- area de campos do form -->
          <hr />
          <div class="row" >
            <div class="form-group col-8 m-auto">
              <label for="name"> Nome Completo</label>
              <input id="nome" type="text" class="form-control"  value="{{($dev->nome ?? '')}}" name="nome" autofocus onblur="verificanome(this);" >
            </div>	  
            <div class="form-group col-8 m-auto" id="myModal">
              <label for="email"> E-mail</label>
              <input id="email1" type="email" class="form-control" value="{{($dev->email ?? '')}}"  name="email1"   onblur="verificaemail(this,1);" Placeholder="fulano@email.com">
            </div>
            <div class="form-group col-8 m-auto">
              <input id="email2" type="email" class="form-control" value="{{($dev->email ?? '')}}"  name="email2"  Placeholder="Repita seu E-mail"  onblur="verificaemail(this,2);">
            </div>

            <div class="form-group col-8 m-auto">
              <label for="campo3">Data de Nasc.</label>
              <input type="date" class="form-control" name="datNasc" id="datNasc" value="{{($dev->dNasc ?? '')}}"  onblur="calculaIdade(this.value);" min="1920-01-01" max="<?php echo date('Y-m-d', strtotime('-15 year')); ?>" > <span class="validity"></span>
            </div>     
            <div class="form-group col-8 m-auto">
              <label for="campo3"> Likedin</label><br>
                   <input type="text" class="form-control" name="linkedin" value="{{($dev->Url_linkedin ?? '')}}"  Placeholder="www.linkedin.com/in/www.linkedin.com/in/Fulano-De-Tal-999990025/">
            </div>       
            <div class="form-group col-8 m-auto">
              <label for="campo3">Idade</label>
              <input type="text" class="form-control"  name="idade" id="idade" value="{{($dev->idade ?? '')}}" >
            </div>          
            <div class="form-group col-8 m-auto">
              <label for="campo3">Idade</label>
              <input type="text" class="form-control"  name="te" id="te" value="{{($dev->tecnologias ?? '')}}" >
            </div>        
          </div>    
          </div> 
          <div class="row" >  
            <div class="col-8">
         
    <table class="table">
  <thead class="thead-dark">
    <tr style="text-center">
      <th scope="col" colspan="3" style="text-center">Tecnologias</th>
    </tr>
  </thead>
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
          <td><label class="btn btn-default" submit><input name="tec[]" type="checkbox" value="C#"  
               {{$c}} style="margin-top:5px;"/> <span class="badge" >&check;</span> C#:</label><br/>
               <label class="btn btn-default" submit><input name="tec[]" type="checkbox" value="Javascript" 
               {{$javascript}} style="margin-top:5px;"/> <span class="badge" >&check;</span> Javascript:</label><br/>
               <label class="btn btn-default" submit><input name="tec[]" type="checkbox" value="Nodejs" class="badgebox" 
               <?php echo $nodejs ?> style="margin-top:5px;"/> <span class="badge" >&check;</span> Nodejs:</label><br/>
        </td>
          <td><label class="btn btn-default" submit><input name="tec[]" type="checkbox" value="Angular" class="badgebox" 
               <?php echo $angular ?> style="margin-top:5px;"/> <span class="badge" >&check;</span> Angular:</label><br/>
               <label class="btn btn-default" submit><input name="tec[]" type="checkbox" value="React" class="badgebox" 
               <?php echo $react ?> style="margin-top:5px;"/> <span class="badge" >&check;</span> React:</label><br/>
               <label class="btn btn-default" submit><input name="tec[]" type="checkbox" value="Ionic" class="badgebox" 
               <?php echo $ionic ?> style="margin-top:5px;"/> <span class="badge" >&check;</span> Ionic:</label><br/>
         </td>
          <td><label class="btn btn-default" submit><input name="tec[]" type="checkbox" value="Mensageria" class="badgebox" 
               <?php echo $mensageria ?> style="margin-top:5px;"/> <span class="badge" >&check;</span> Mensageria:</label><br/>
               <label class="btn btn-default" submit><input name="tec[]" type="checkbox" value="PHP" class="badgebox" 
               <?php echo $pHP ?> style="margin-top:5px;"/> <span class="badge" >&check;</span> PHP:</label><br/>
               <label class="btn btn-default" submit><input name="tec[]" type="checkbox" value="Laravel" class="badgebox" 
               <?php echo $laravel ?> style="margin-top:5px;"/> <span class="badge" >&check;</span> Laravel:</label><br/>
          </td>
          
            
          
        </tr>
  </tbody>
</table>
             
          </div> 
          </div> 

          <div id="actions" class="row">
            <div class="col-md-12">
              <button type="submit" id="salvar"    class="btn btn-primary">@if(isset($dev))Alterar @else Salvar @endif</button>
	          <a href="{{url("books")}}" class="btn btn-dark">Voltar</a>
            </div>
          </div>
     
     
     </form> 

    </div>
    
    <!-- Adicionando Javascript -->
    <script>
    function verificanome(input){
        if(input.value=="" || input.value==" " || input.value.indexOf(' ')==-1 ){
                alert( "Por favor, informe seu nome completo!" );
                document.getElementById("nome").style.background  = "#f0b9b9";
    }else       document.getElementById("nome").style.background  = "#a7f5bf";
    }
    function calculaIdade(dataNasc){
         var dataAtual = new Date();
         var anoAtual = dataAtual.getFullYear();
         var anoNascParts = dataNasc.split('-');
         var diaNasc =anoNascParts[2];
         var mesNasc =anoNascParts[1];
         var anoNasc =anoNascParts[0];
         var idade = anoAtual - anoNasc;
         var mesAtual = dataAtual.getMonth() + 1; 
         //Se mes atual for menor que o nascimento, nao fez aniversario ainda; 
         if(mesAtual < mesNasc){ idade--; 
         } else {
         //Se estiver no mes do nascimento, verificar o dia
         if(mesAtual == mesNasc){ 
         if(new Date().getDate() < diaNasc ){ 
         //Se a data atual for menor que o dia de nascimento ele ainda nao fez aniversario
         idade--; 
         }} }
        if(idade < 105)
        document.getElementById("idade").value= idade;          
        // return idade; 
        }
    
    function verificaemail(input,campo){
         var outroCampo = 3- campo;
          var email = document.getElementById("email"+outroCampo).value;        
         if(input.value.length == 0 ){ //Se o campo estiver limpo
                alert( "Por favor, informe seu E-MAIL!" );
                document.getElementById("email"+campo).style.background  = "#f0b9b9";
              }else
            if(input.value=="" || input.value.indexOf('@')==-1 || input.value.indexOf('.')==-1 ){
                         alert( "Por favor, informe um E-MAIL válido!" );
                document.getElementById("email"+campo).style.background  = "#f0b9b9";
              } else 
                if( email != "" && input.value != email){
                     alert( "Por favor, Preencha os dois campos com o mesmo E-MAIL!" );
                    document.getElementById("email"+campo).style.background  = "#f0b9b9";

              } else {
                document.getElementById("email"+campo).style.background  = "#a7f5bf";
              }
        }
    </script>
    
@endsection