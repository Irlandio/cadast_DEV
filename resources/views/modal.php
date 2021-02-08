<!-- Modal de Delete-->
<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modalLabel">Excluir Cadastro</h4>
      </div>
      <div class="modal-body">
        Deseja realmente excluir este Cadastro?
      </div>
      <div class="modal-footer">
        <a id="confirm" class="btn btn-primary" href="#">Sim</a>
        <a id="cancel" class="btn btn-default" data-dismiss="modal">N&atilde;o</a>
      </div>
    </div>
  </div>
</div> <!-- /.modal -->
<!-- Modal de Filtrar-->
<div class="modal fade" id="filtrar23-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
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
  
                  
        <table class="table">
          <tbody>  

                <tr >
                     <td>              
                      <label class="form-check-label" submit>
                      <input name="tec[]" type="checkbox" value="C#" {{$c}} class="form-check-input" /> C#:</label><br/>
                       <label class="form-check-label" submit><input name="tec[]" type="checkbox" value="Javascript" 
                       {{$javascript}} class="form-check-input"/> Javascript:</label><br/>
                       <label class="form-check-label" submit><input name="tec[]" type="checkbox" value="Nodejs" 
                        class="form-check-input"/> Nodejs:</label><br/>
                  </td>
                  <td>
                      <label class="form-check-label" submit><input name="tec[]" type="checkbox" value="Angular" 
                        class="form-check-input"/> Angular:</label><br/>
                       <label class="form-check-label" submit><input name="tec[]" type="checkbox" value="React" 
                        class="form-check-input"/> React:</label><br/>
                       <label class="form-check-label" submit><input name="tec[]" type="checkbox" value="Ionic" 
                        class="form-check-input"/>  Ionic:</label><br/>
                 </td>
                  <td>
                      <label class="form-check-label" submit><input name="tec[]" type="checkbox" value="Mensageria" 
                        class="form-check-input"/> Mensageria:</label><br/>
                       <label class="form-check-label" submit><input name="tec[]" type="checkbox" value="PHP" 
                        class="form-check-input"/> PHP:</label><br/>
                       <label class="form-check-label" submit><input name="tec[]" type="checkbox" value="Laravel" 
                        class="form-check-input"/> Laravel:</label><br/>
                  </td>
                </tr>
          </tbody>
        </table>  

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
</div> <!-- /.modal -->

<style>
.badgebox{ opacity: 0;}.badgebox + .badge{text-indent: -999999px;width: 27px;}
.badgebox:focus + .badge{ box-shadow: inset 0px 0px 5px;}
.badgebox:checked + .badge{text-indent: 0;}
</style>
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
    
    
