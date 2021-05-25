<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistroSanitario extends Model{
    protected $table = 'registros_sanitarios';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'descripcion',
        'medicacion',
        'vaca_id',
        'periodo_id'
    ];
}
