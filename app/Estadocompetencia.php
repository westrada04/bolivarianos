<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Estadocompetencia extends Model
{
    public function competencias(){
        return $this->hasMany('App\Competencia');
    }
}