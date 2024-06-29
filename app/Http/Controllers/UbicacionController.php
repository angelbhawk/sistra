<?php

namespace App\Http\Controllers;

use App\Models\Ubicacion;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class UbicacionController extends Controller
{
    public function index(){
        $ubicaciones = Ubicacion::all();
        return $ubicaciones;
    }

    public function store(Request $request){
        try {
            $ubicacion = new Ubicacion();
            $ubicacion->nombre_ubicacion = $request->nombre_ubicacion;
            $ubicacion->direccion = $request->direccion;
            $ubicacion->ciudad = $request->pais;
            $ubicacion->pais = $request->pais;
            $ubicacion->latitud = $request->latitud;
            $ubicacion->longitud = $request->longitud;
            $ubicacion->save();
            return "Se ha registrado correctamente";
        } catch (Exception $e) {
            return "No se pudo guardar el usuario: ";
        }
    }

    public function show(string $id){
        try {
            $ubicacion = Ubicacion::findOrFail($id);
            return $ubicacion;
        } catch (ModelNotFoundException $e) {
            return "Ubicacion no encontrada";
        }
    }

    public function update(Request $request, string $id){
        try {
            $ubicacion = Ubicacion::findOrFail($id);
            $ubicacion->nombre_ubicacion = $request->nombre_ubicacion;
            $ubicacion->direccion = $request->direccion;
            $ubicacion->ciudad = $request->pais;
            $ubicacion->pais = $request->pais;
            $ubicacion->latitud = $request->latitud;
            $ubicacion->longitud = $request->longitud;
            return $ubicacion;
        } catch (ModelNotFoundException $e) {
            return "Ubicacion no encontrada";
        }
    }

    public function destroy(string $id){
        try {
            $ubicacion = Ubicacion::findOrFail($id);
            Ubicacion::destroy($id);
            return "La ubicacion ".$ubicacion->nombre." ha sido elminada";
        } catch (ModelNotFoundException $e) {
            return "Ubicacion no encontrada";
        }
    }
}
