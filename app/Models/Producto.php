<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_producto';
    protected $fillable = ['nombre', 'descripcion', 'id_ubicacion_origen', 'fecha_origen', 'id_organizacion'];

    public function organizacion()
    {
        return $this->belongsTo(Organizacion::class, 'id_organizacion');
    }

    public function ubicacion_origen()
    {
        return $this->belongsTo(Ubicacion::class, 'id_ubicacion_origen');
    }

    public function movimientos()
    {
        return $this->hasMany(Movimiento::class, 'id_producto');
    }
}
