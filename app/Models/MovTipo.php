<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovTipo extends Model
{
    use HasFactory;
    static $rules = [
        'consecutivo' => 'required',
        'mov' => 'required',
    ];


    protected $fillable = [
        'consecutivo', 'naceenmodulo', 'mov',
        'estatus', 'conceptos', 'observaciones',
        'reporte_default', 'reporte_pendiente', 'reporte_concluido',
        'reporte_cancelado',
        'id_modulo',
        'id_comportamiento',
    ];
    public function modulo()
    {
        return $this->belongsTo(Modulo::class);
    }

    public function comportamiento()
    {
        return $this->belongsTo(Comportamiento::class);
    }
}
