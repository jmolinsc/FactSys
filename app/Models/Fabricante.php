<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fabricante extends Model
{
    use HasFactory;

    static $rules = [
        'nombre' => 'required'
    ];

    protected $table = 'fabricantes';

    protected $fillable = ['nombre'];

    public function productos()
    {
        return $this->hasMany(Producto::class);
    }
}
