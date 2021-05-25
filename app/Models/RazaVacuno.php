<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RazaVacuno extends Model{
    protected $table = 'raza_vacunos';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'raza'
    ];
}
