@extends('plantillas.primer')
@section('contenido')
  <div class="vender">
    <button type="button" href="productos/agregar" class="btn btn-success">Vende ahora Gratis!!</button>
  </div>
<div class="autos">
    @foreach ($productos as $producto)
      <div class="auto">
        <div class="imagen">
          <img src="/storage/{{$producto->poster}}">
        </div>
        <h3>{{$producto->titulo}}</h3>
        <ul class="datos-secundarios">
          <li> {{$producto->precio}}$ </li>
          <li>{{$producto->estado}}</li>
          <li>{{$producto->km}}km</li>
        </ul>
      </div>

    @endforeach
</div>
@endsection
