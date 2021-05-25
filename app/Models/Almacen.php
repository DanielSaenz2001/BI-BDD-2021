<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Almacen extends Model{

    protected $table = 'almacenes';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'finca_id',
        'encargado_id',
        'codigo'
    ];
}
