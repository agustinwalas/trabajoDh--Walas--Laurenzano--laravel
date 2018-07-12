<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\marca;
use App\modelo;
use App\Producto;

class ProductosControlador extends Controller
{
    public function listar(){
    $productos = Producto::all();
      return view('productos.listar')-> with ('productos', $productos);}


 public function agregar(){
     $marca = marca::all();
     $modelos = modelo::all();
return view ('productos.agregar')->with('modelos',$modelos) ->with('marcas',$marca);
}

public function guardar(Request $request){
  $reglas = [
    'titulo' => 'required',
    'marca_id' => 'required',
    'modelo_id' => 'required',
    'precio' => 'required',
    'estado' => 'required',
   ];
   $errors = [
    'titulo.required' => 'Titulo requerido',
    'precio.required' => 'Indique un precio',

    ];
    $this->validate($request, $reglas, $errors);

    $producto= producto::create(
      $request->except(['_token'])
    );

    dd($producto);

}

public function editar($id){
$producto= producto::find($id);
return view('productos.editar') -> with('peli',$pelicula);
}

public function editarGuardar(request $request){

  $reglas = [
    'titulo.required' => 'required|unique:titulo',
     'marca.required' => 'required',
      'modelo.required' => 'required',
      'precio' => 'required',

   ];
}

public function mostrar(){
$marca= marca::all();
$modelo= modelo::all();

return view('productos.mostrar') ->with('marcas',$marca) ->with('modelo', $modelo);
}


}
