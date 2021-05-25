<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacuno extends Model{
    protected $table = 'registros_producciones';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'codigo',
        'fecha_nacimiento',
        'peso',
        'n_partos',
        'sexo',
        'raza_id',
        'finca_id',
        'grupo_sanguineo_id'
    ];
}
