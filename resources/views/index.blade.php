@extends('templates.templates')

@section('content')

<H2 class="text-center">CRUD DEVS</H2>
<DIV class="col-8 m-auto">
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome</th>
      <th scope="col">Linkedin</th>
      <th scope="col">Idade</th>
    </tr>
  </thead>
  <tbody>
      @foreach($devs as $dv)          
        <tr>
          <th scope="row">{{$dv->idDev}}</th>
          <td>{{$dv->nome}}</td>
          <td>{{$dv->Url_linkedin}}</td>
          <td>{{$dv->idade}}</td>
        </tr>
      @endforeach
  </tbody>
</table>

</DIV>
@endsection