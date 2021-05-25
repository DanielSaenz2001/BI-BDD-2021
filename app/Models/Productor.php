<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Productor extends Authenticatable{
    
    protected $table = 'productores';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'email','nombres','apellido_paterno'
        ,'apellido_materno','dni','fecha_nacimiento'
        ,'fecha_inscripcion','sexo','direccion'
        ,'celular','finca_id','password'
    ];
    protected $hidden = [
        'password'
    ];
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }
    public function getJWTCustomClaims()
    {
        return [];
    }
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}
