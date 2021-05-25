<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periodo extends Model{
    protected $table = 'periodos';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'codigo',
        'fecha_inicio',
        'fecha_fin',
        'activo'
    ];
}
