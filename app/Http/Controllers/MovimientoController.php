<?php

namespace App\Http\Controllers;

use App\Models\Movimiento;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class MovimientoController extends Controller
{
    public function index(){
        $movimientos = Movimiento::all();
        return $movimientos;
    }
  
    public function store(Request $request){
        try {
            $movimiento = new Movimiento();
            $movimiento->id_producto = $request->id_producto;
            $movimiento->id_ubicacion_actual = $request->id_ubicacion_actual;
            $movimiento->fecha_actual = $request->fecha_actual;
            $movimiento->id_operador = $request->id_operador;
            $movimiento->save();
            return "Se ha registrado correctamente";
        } catch (Exception $e) {
            return "No se pudo guardar el movimiento: ";
        }
    }

    public function show(string $id){
        try {
            $movimiento = Movimiento::findOrFail($id);
            return $movimiento;
        } catch (ModelNotFoundException $e) {
            return "Movimiento no encontrado";
        }
    }

    public function update(Request $request, string $id){
        try {
            $movimiento = Movimiento::findOrFail($id);
            $movimiento->id_producto = $request->id_producto;
            $movimiento->id_ubicacion_actual = $request->id_ubicacion_actual;
            $movimiento->fecha_actual = $request->fecha_actual;
            $movimiento->id_operador = $request->id_operador;
            return $movimiento;
        } catch (ModelNotFoundException $e) {
            return "Movimiento no encontrada";
        }
    }

    public function destroy(string $id){
        try {
            $movimiento = Movimiento::findOrFail($id);
            Movimiento::destroy($id);
            return "El movimiento ".$movimiento->nombre." ha sido elminado";
        } catch (ModelNotFoundException $e) {
            return "Movimiento no encontrado";
        }
    }
}
