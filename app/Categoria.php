<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public function competencias(){
        return $this->hasMany('App\Competencia');
    }

    public function disciplina(){
        return $this->belongsTo('App\Disciplina');
    }

}