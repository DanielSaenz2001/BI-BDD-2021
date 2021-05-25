<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistroProduccion extends Model{
    protected $table = 'registros_producciones';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'vaca_id',
        'productor_id',
        'periodo_id',
        'fecha',
        'can_litros',
        'can_horas_ordenadimiento'
    ];
}
