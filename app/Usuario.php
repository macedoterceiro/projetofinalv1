<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    function contatos(){
        return $this->hasMany('App\Contato');
    }
}
