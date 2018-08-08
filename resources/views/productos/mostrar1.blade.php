@extends('plantillas.primer')
@section('contenido')
  <div class="vender">
    <form method="get" action="productos/agregar">
    <button type="submit" class="btn btn-success">Vende ahora Gratis!!</button>
    </form>
  </div>
  <a href="/productos/mostrar1/{{$producto->id}}"></a>
<div class="autos">

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


</div>

@endsection
