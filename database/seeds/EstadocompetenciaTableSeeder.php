<?php

use App\Estadocompetencia;
use Illuminate\Database\Seeder;

class EstadocompetenciaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $estado = new Estadocompetencia;
        $estado->nombre = 'Programada';
        $estado->save();

        $estado = new Estadocompetencia;
        $estado->nombre = 'En Competencia';
        $estado->save();

        $estado = new Estadocompetencia;
        $estado->nombre = 'Finalizada';
        $estado->save();

    }
}
