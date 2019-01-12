<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    function usuario(){
        return $this->belongsTo('App\Usuario');
    }
    function telefones(){
        return $this->hasMany('App\Telefone');
    }
}
