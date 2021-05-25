<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NacimientoVacuno extends Model{
    protected $table = 'nacimiento_vacunos';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'vacuno_padre_id',
        'vacuno_madre_id',
        'raza_id',
        'finca_id',
        'grupo_sanguineo_id',
        'codigo',
        'fecha',
        'peso',
        'sexo'
    ];
}
