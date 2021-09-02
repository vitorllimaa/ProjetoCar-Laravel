@extends('main')


@section('content')

<h1>Formulário de Carros</h1>
<form action="/create/submit" method="POST">
  @csrf
    <div class="form-group">
      <label for="exampleInput">Marca do Carro</label>
      <input type="text" class="form-control" name="brand" id="brand" placeholder="Marca">
      <small class="form-text text-muted">Campo Obrigatório.</small>
    </div>
    <div class="form-group">
        <label for="exampleInput">Modelo do Carro</label>
        <input type="text" class="form-control" name="model" id="model" placeholder="Modelo">
        <small  class="form-text text-muted">Campo Obrigatório.</small>
      </div>
      <div class="form-group">
        <label for="exampleInput">Ano do Carro</label>
        <input type="text" class="form-control" maxlength="4" name="year" id="year" placeholder="Ano">
        <small  class="form-text text-muted">digite 4 numeros referente ao ano - Campo Obrigatório.</small>
      </div>
    <button type="submit" class="btn btn-success">Enviar</button>
  </form>
    
@endsection

