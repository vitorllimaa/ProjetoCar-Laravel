@extends('main')



@section('content')
<div class="form-inline">
    <h1>Lista de Carros</h1>
    <a href="/create"><button class="btn btn-success btn-sm">Cadastrar Carro Novo</button></a>
</div>

<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Marca</th>
        <th scope="col">Modelo</th>
        <th scope="col">Ano</th>
        <th scope="col">Editar cadastro</th>
        <th scope="col">Excluir cadastro</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($listCars as $listCar)
      <tr>
        <th scope="row">{{$listCar->id}}</th>
        <td>{{$listCar->brand}}</td>
        <td>{{$listCar->model}}</td>
        <td>{{$listCar->year}}</td>
        <td id="td-edit"><a href="/edit/{{$listCar->id}}"><button class="btn btn-primary btn-sm">Editar</button></a></td>  
        <form action="/{{$listCar->id}}" method="POST">
          @csrf
          @method('DELETE')
          <td id="td-delete"><button id="btn-delete" class="btn btn-danger btn-sm">Excluir</button></td>
        </form>
          
      </tr>
      @endforeach
      
    </tbody>
  </table>
    
@endsection