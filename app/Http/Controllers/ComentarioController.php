<?php

namespace App\Http\Controllers;

use App\Comentario;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class ComentarioController extends Controller
{

    public function comentar(Request $request){

        $user = Auth::user();
        $comentario = new Comentario;
        $comentario->descripcion = $request->input('comentario');
        $comentario->noticia_id = $request->input('noticia');
        $comentario->user_id = $user->id;
        $comentario->save();

        return response()->json( true );
    }

}
