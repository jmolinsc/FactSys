<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{

  static $rules = [
    'codigo' => 'required',
    'nombre' => 'required',
    'telefono' => 'required',
    'direccion' => 'required'

  ];

  protected $fillable = [
    'codigo',
    'nombre',
    'telefono',
    'direccion',
    'dui',
    'nit',
    'nrc',
    'categoria',
    'familia',
    'grupo',
    'giro',
    'actividadeconomica',
    'email',
    'contacto',
    'pais',
    'departamento',
    'municipio',
    'colonia',
    'regimenfiscal',
    'tipo',
    'estatus'

  ];
}
