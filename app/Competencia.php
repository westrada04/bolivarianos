<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Competencia extends Model
{
    public function estadocompetencia(){
        return $this->belongsTo('App\Estadocompetencia');
    }

    public function sede(){
        return $this->belongsTo('App\Sede');
    }

    public function categoria(){
        return $this->belongsTo('App\Categoria');
    }
}