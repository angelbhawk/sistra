<?php

namespace App\Http\Controllers;

use App\Models\Organizacion;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class OrganizacionController extends Controller
{
    public function index(){
        $organizaciones = Organizacion::all();
        return $organizaciones;
    }

    public function store(Request $request){
        try {
            $organizacion = new Organizacion();
            $organizacion->nombre = $request->nombre;
            $organizacion->save();
            return "Se ha registrado correctamente";
        } catch (Exception $e) {
            return "No se pudo guardar el usuario: ";
        }
    }

    public function show(string $id){
        try {
            $organizacion = Organizacion::findOrFail($id);
            return $organizacion;
        } catch (ModelNotFoundException $e) {
            return "Organizacion no encontrada";
        }
    }

    public function update(Request $request, string $id){
        try {
            $organizacion = Organizacion::findOrFail($id);
            $organizacion->nombre = $request->nombre;
            return $organizacion;
        } catch (ModelNotFoundException $e) {
            return "Organizacion no encontrada";
        }
    }

    public function destroy(string $id){
        try {
            $organizacion = Organizacion::findOrFail($id);
            Organizacion::destroy($id);
            return "La organizacion ".$organizacion->nombre." ha sido elminada";
        } catch (ModelNotFoundException $e) {
            return "Organizacion no encontrada";
        }
    }
}
