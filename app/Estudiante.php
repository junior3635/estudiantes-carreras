<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
	protected $table ="estudiantes";
    protected $fillable = [
        'nombre','apellidos', 'email', 'sexo', 'fecha_nac','email','pais','estado','ciudad','carrera','estatu','sexo',
    ];
    public function carreras()
    {
        return $this->hasOne('App\Carrera','id','carrera');
    }
    public function estatus()
    {
        return $this->hasOne('App\Estatu','id','estatu');
    }
}
