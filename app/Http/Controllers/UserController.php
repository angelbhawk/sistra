<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        try {
            $operadores = User::all();
            return $operadores;
        } catch (Exception $e) {
            return "Error al consultar los usuarios";
        }
    }

    public function store(Request $request){
        try {
            $operador = new User();
            $operador->nombre = $request->nombre;
            $operador->email = $request->email;
            $operador->password = Hash::make($request->password);
            $operador->save();
            return "Se ha registrado correctamente";
        } catch (Exception $e) {
            return "No se pudo guardar el usuario: ";
        }
    }

    public function show(string $id){
        try {
            $operador = User::findOrFail($id);
            return $operador;
        } catch (ModelNotFoundException $e) {
            return "Usuario no encontrado";
        }
    }

    public function update(Request $request, string $id){
        try {
            $operador = User::findOrFail($id);
            $operador->nombre = $request->nombre;
            $operador->email = $request->email;
            $operador->password = Hash::make($request->password);
            return $operador;
        } catch (ModelNotFoundException $e) {
            return "Usuario no encontrado";
        }
    }

    public function destroy(string $id){
        try {
            $operador = User::findOrFail($id);
            User::destroy($id);
            return "El operador ".$operador->nombre." ha sido elminado";
        } catch (ModelNotFoundException $e) {
            return "Usuario no encontrado";
        }
    }
}