@extends('plantillas.primer')

@section('contenido')

<form style="text-align:center;"  method="post" enctype="multipart/form-data" class="conteiner">
     <div class="form-group">
       <label for="usr">Mail:</label>
       <input type="email" name="email" class="form-control" value="">
     </div>
     <div class="form-group">
       <label for="pwd">Contraseña:</label>
       <input type="password" name="pass" class="form-control" value="">
     </div>

     <div class="form-group">
       <label for="pwd">Repetir contraseña:</label>
       <input type="password" name="pass2" class="form-control" value="">
     </div>

     <div class="form-group">
           <label for="usr">Nombre y apellido:</label>
           <input type="text" name="nombre" class="form-control" value="">
         </div>
         <div class="item">
         <label for="">Provincia:</label>
         <select class="" name="provincia">
         <option value="">Elegí tu provincia</option>

         <br>

         <input type="file" name="avatar" value="">
         <br>
         <br>

         <button type="submit" class="btn btn-success">Ingresar</button>


        </form>
@endsection
