@extends('plantillas.primer')
@section('contenido')
  <h1>listado de marcas</h1>
  <ul>
    @foreach ($marcas as $marca)
      <div class="col-sm-12">
        <a href="/marcas/{{$marca->id}}">{{$marca->marca}} ({{$marca->modelo}})</a>

      </div>
    @endforeach
  </ul>
@endsection
