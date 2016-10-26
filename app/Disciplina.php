<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    public function categorias(){
        return $this->hasMany('App\Categoria');
    }
}
