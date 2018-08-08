@extends('plantillas.primer')

@section('contenido')

<form style="text-align:center;width:80%;margin:0 auto;margin-top:30px;margin-bottom:30px;"  method="post" enctype="multipart/form-data" class="conteiner">
{{ csrf_field() }}

     <div class="form-group">
       <label for="email">Mail:</label>
       <input type="email" name="email" class="form-control" value="">
     </div>
     <div class="form-group">
       <label for="password">Contraseña:</label>
       <input type="password" name="password" class="form-control" value="">
     </div>

     <div class="form-group">
       <label for="password">Repetir contraseña:</label>
       <input type="password" name="password_confirmation" class="form-control" value="">
     </div>

     <div class="form-group">
           <label for="user">Nombre y apellido:</label>
           <input type="text" name="name" class="form-control" value="">
         </div>
         <div class="item">
         <label for="">Provincia:</label>
         <select class="" name="provincia">
         <option value="">Elegí tu provincia</option>
         <option value="Bsas">Buenos Aires</option>
         <option value="Cordoba">Cordoba</option>
         <option value="Tierra del fuego">Tierra del fuego</option>
         <option value="Catamarca">Catamarca</option>
         <option value="Rosario">Rosario</option>
         <option value="Santa fe">Santa fe</option>

         <br>

         <input type="file" name="avatar" value="">
         <br>
         <br>

         <button type="submit" class="btn btn-success">Registrarse</button>


        </form>
@endsection
