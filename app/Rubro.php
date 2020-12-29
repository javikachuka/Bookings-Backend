<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rubro extends Model
{
    protected $table = 'rubros';

    public function empresas(){
        return $this->belongsToMany(Empresa::class, 'empresas_rubros');
    }
}
