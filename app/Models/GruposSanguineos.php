<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GruposSanguineos extends Model{
    protected $table = 'grupos_sanguineos';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'grupo'
    ];
}
