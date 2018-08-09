@extends('plantillas.primer')

@section('contenido')
  <form style="text-align:center;width:80%;margin:0 auto;margin-top:30px;margin-bottom:30px;"  method="post" id="login" enctype="multipart/form-data" class="conteiner">
      {{ csrf_field() }}
       <div class="form-group">
         <label for="usr">Mail:</label>
         <input type="email" name="email" class="form-control" value="">
       </div>
       <div class="form-group">
         <label for="pwd">Contraseña:</label>
         <input type="password" name="password" class="form-control" value="">
       </div>
       <button type="submit" class="btn btn-success">Ingresar</button>
       </form>
@endsection
