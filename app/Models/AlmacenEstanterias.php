<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlmacenEstanterias extends Model{
    protected $table = 'almacenes_tipos';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'almacen_id',
        'raza_id'
    ];
}
