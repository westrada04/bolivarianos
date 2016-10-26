<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function comentarios(){
        return $this->hasMany('App\Comentario');
    }
}