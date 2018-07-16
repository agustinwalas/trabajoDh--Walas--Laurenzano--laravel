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
    'poster' => 'image'
   ];
   $errors = [
    'titulo.required' => 'Titulo requerido',
    'precio.required' => 'Indique un precio',

    ];
    $this->validate($request, $reglas, $errors);

    $ruta_image='';
    if($request->file('poster')){
      $ruta_image = $request->file('poster')->store('posters', 'public');
    }


    $producto= producto::create([
      'titulo' => $request->input('titulo'),
      'marca_id' => $request->input('marca_id'),
      'modelo_id' => $request->input('modelo_id'),
      'precio' => $request->input('precio'),
      'estado' => $request->input('estado'),
      'poster' => $ruta_image
    ]);
}

public function editar($id){
$producto= producto::find($id);
return view('productos.editar') -> with('producto',$producto);
}

public function editarGuardar(request $request){
  $reglas = [
    'titulo' => 'required',
    'marca_id' => 'required',
    'modelo_id' => 'required',
    'precio' => 'required',
    'estado' => 'required',
    'poster' => 'image'
   ];
   $errors = [
    'titulo.required' => 'Titulo requerido',
    'precio.required' => 'Indique un precio',

    ];
    $this->validate($request, $reglas, $errors);

    $ruta_image='';
    if($request->file('poster')){
      $ruta_image = $request->file('poster')->store('posters', 'public');
    }


    $producto= producto::fill([
      'titulo' => $request->input('titulo'),
      'marca_id' => $request->input('marca_id'),
      'modelo_id' => $request->input('modelo_id'),
      'precio' => $request->input('precio'),
      'estado' => $request->input('estado'),
      'poster' => $ruta_image
    ]);

    $producto->save();
}

public function mostrar(){
$marca= marca::all();
$modelo= modelo::all();

return view('productos.mostrar') ->with('marcas',$marca) ->with('modelo', $modelo);
}


}
