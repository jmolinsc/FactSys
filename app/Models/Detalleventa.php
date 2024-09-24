<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detalleventa extends Model
{
  protected $table = 'detalleventa';
  protected $fillable =
  [
    'precio',
    'cantidad',
    'id_producto',
    'id_venta',
    'renglon',
    'aplica',
    'aplicaid',
    'cantidadinventario',
    'importe',
    'impuestos',
    'unidad',
  ];

  public function venta()
  {
    return $this->belongsTo(Venta::class);
  }
}
