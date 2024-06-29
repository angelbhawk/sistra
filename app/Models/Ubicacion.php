<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    use HasFactory;

    protected $table = 'ubicaciones';

    protected $primaryKey = 'id_ubicacion';
    protected $fillable = ['nombre_ubicacion', 'direccion', 'ciudad', 'pais', 'latitud', 'longitud'];

    public function productos()
    {
        return $this->hasMany(Producto::class, 'id_ubicacion_origen');
    }

    public function movimientos()
    {
        return $this->hasMany(Movimiento::class, 'id_ubicacion_actual');
    }
}
