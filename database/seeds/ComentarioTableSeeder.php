<?php

use App\Comentario;
use Illuminate\Database\Seeder;

class ComentarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comentario = new Comentario;
        $comentario->descripcion = 'este es el primer comentario de este tema';
        $comentario->user_id = 1;
        $comentario->noticia_id = 1;
        $comentario->save();

        $comentario = new Comentario;
        $comentario->descripcion = 'este es el segundo comentario de este tema';
        $comentario->user_id = 2;
        $comentario->noticia_id = 1;
        $comentario->save();

        $comentario = new Comentario;
        $comentario->descripcion = 'este es otro comentario';
        $comentario->user_id = 1;
        $comentario->noticia_id = 2;
        $comentario->save();

        $comentario = new Comentario;
        $comentario->descripcion = 'comentando aqui';
        $comentario->user_id = 2;
        $comentario->noticia_id = 2;
        $comentario->save();
    }
}
