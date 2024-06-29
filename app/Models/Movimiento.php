<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_movimiento';
    protected $fillable = ['id_producto', 'id_ubicacion_actual', 'fecha_actual', 'id_operador'];

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'id_producto');
    }

    public function ubicacion_actual()
    {
        return $this->belongsTo(Ubicacion::class, 'id_ubicacion_actual');
    }

    public function operador()
    {
        return $this->belongsTo(User::class, 'id_operador');
    }
}
