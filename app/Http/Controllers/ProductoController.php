<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(){
        $productos = Producto::all();
        return $productos;
    }
    
    public function store(Request $request){
        try {
            $producto = new Producto();
            $producto->nombre = $request->nombre;
            $producto->descripcion = $request->descripcion;
            $producto->id_ubicacion_origen = $request->id_ubicacion_origen;
            $producto->fecha_origen = $request->fecha_origen;
            $producto->id_organizacion = $request->id_organizacion;
            $producto->save();
            return "Se ha registrado correctamente";
        } catch (Exception $e) {
            return "No se pudo guardar el producto: ";
        }
    }

    public function show(string $id){
        try {
            $producto = Producto::findOrFail($id);
            return $producto;
        } catch (ModelNotFoundException $e) {
            return "Producto no encontrado";
        }
    }

    public function update(Request $request, string $id){
        try {
            $producto = Producto::findOrFail($id);
            $producto->nombre = $request->nombre;
            $producto->descripcion = $request->descripcion;
            $producto->id_ubicacion_origen = $request->id_ubicacion_origen;
            $producto->fecha_origen = $request->fecha_origen;
            $producto->id_organizacion = $request->id_organizacion;
            return $producto;
        } catch (ModelNotFoundException $e) {
            return "Producto no encontrada";
        }
    }

    public function destroy(string $id){
        try {
            $producto = Producto::findOrFail($id);
            Producto::destroy($id);
            return "El producto ".$producto->nombre." ha sido elminado";
        } catch (ModelNotFoundException $e) {
            return "Producto no encontrado";
        }
    }
}