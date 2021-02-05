<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cad_DEV</title>
        <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
    </head>
    <bode>
      <!-- @yield('content') 
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
        <script src="{{url("assets/js/javascript.js")}}"></script>
    </bode>
</html>