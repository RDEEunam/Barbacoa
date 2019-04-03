<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NombreAntojitos extends Model
{
    protected $table = 'nombres';

    public function Nombres()
    {
       return $this->hasMany('App\Antojito', 'Nombre', 'id');
    }
}
