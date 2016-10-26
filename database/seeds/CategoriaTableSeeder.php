<?php

use App\Categoria;
use App\Disciplina;
use Illuminate\Database\Seeder;

class CategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoria = New Categoria;
        $categoria->nombre = 'Equipos (Masculino)';
        $categoria->disciplina_id = 1;
        $categoria->save();

        $categoria = New Categoria;
        $categoria->nombre = 'Natación con aletas - 4 km (Femenino))';
        $categoria->disciplina_id = 1;
        $categoria->save();

        $categoria = New Categoria;
        $categoria->nombre = 'Natación con aletas - 50 m Bialetas (Femenino)';
        $categoria->disciplina_id = 1;
        $categoria->save();

    }
}
