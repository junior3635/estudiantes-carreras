<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
	protected $table ="carreras";
    protected $fillable = [
        'id','nombre','descripcion_larga','estatu'
    ];
    public function estatus()
    {
        return $this->hasOne('App\Estatu','id','estatu');
    }
}
