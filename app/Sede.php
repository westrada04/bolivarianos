<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    public function competencias(){
        return $this->hasMany('App\Competencia');
    }
}