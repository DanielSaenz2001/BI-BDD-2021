<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistroAlmacenamiento extends Model{
    protected $table = 'registros_almacenamientos';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'productor_id',
        'almacen_id',
        'registro_produccion_id',
        'tipo_id',
        'fecha'
    ];
}
