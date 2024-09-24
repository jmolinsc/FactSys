<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
  protected $fillable =
   ['total', 'id_cliente', 'id_usuario','mov'
   ,'movid'
  ,'fechaemision','almacen_id'
  ,'condicion_id','ejercicio','periodo'
  ,'referencia','origen','origenid','origentipo'
  ,'observaciones','estatus'
  ,'importe','impuestos','tipoventa','comentarios'
  ,'descuentoglobal_id'
  ,'importe'];

  public function detalleventa()
  {
    return $this->hasMany(Detalleventa::class);
  }
}
