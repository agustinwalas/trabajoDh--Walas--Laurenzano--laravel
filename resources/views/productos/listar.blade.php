@extends('plantillas.primer')
@section('contenido')
  <h1>listado de productos</h1>
  <a href="/productos/agregar">agregar productos</a>
  <ul>

    @foreach ($productos as $producto)
      <div class="col-sm-12">
        <a href="/productos/listar/{{$producto->id}}">{{$producto->titulo}} {{$producto->marca}} {{$producto->modelo}} {{$producto->precio}}</a>

      </div>
    @endforeach
  </ul>
@endsection
