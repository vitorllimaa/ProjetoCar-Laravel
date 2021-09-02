@extends('main')


@section('content')

<h1>Formulário de Edição de Carros</h1>
<form action="/edit/update/{{$editCar->id}}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  
    <div class="form-group">
      <label for="exampleInput">Marca do Carro</label>
      <input type="text" class="form-control" id="brand" name="brand" value="{{$editCar->brand}}" placeholder="Marca">
      <small  class="form-text text-muted">Campo Obrigatório.</small>
    </div>
    <div class="form-group">
        <label for="exampleInput">Modelo do Carro</label>
        <input type="text" class="form-control" id="model" name="model" value="{{$editCar->model}}" placeholder="Modelo">
        <small  class="form-text text-muted">Campo Obrigatório.</small>
    </div>
    <div class="form-group">
        <label for="exampleInput">Ano do Carro</label>
        <input type="year" class="form-control" id="year" maxlength="4" name="year" value="{{$editCar->year}}" placeholder="Ano">
        <small  class="form-text text-muted">digite 4 numeros referente ao ano - Campo Obrigatório.</small>
    </div>
    <button type="submit" class="btn btn-success">Enviar</button>
</form>
    
@endsection