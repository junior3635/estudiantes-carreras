<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estatu extends Model
{
    protected $table ="estatus";
    protected $fillable = [
        'id','nombre',
    ];
}
