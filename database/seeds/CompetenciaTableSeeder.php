<?php

use App\Competencia;
use Illuminate\Database\Seeder;

class CompetenciaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $competecia = new Competencia;
        $competecia->nombre = 'Natación con aletas - Dinámica con aletas (Masculino)';
        $competecia->fecha = '2017-11-16 08:00:00';
        $competecia->lugar = 'Rodadero';
        $competecia->categoria_id = 1;
        $competecia->sede_id = 1;
        $competecia->estadocompetencia_id = 2;
        $competecia->save();

        $competecia = new Competencia;
        $competecia->nombre = 'Apnea - Dinámica con aletas (Femenino)';
        $competecia->fecha = '2017-11-16 08:00:00';
        $competecia->lugar = 'Rodadero';
        $competecia->categoria_id = 2;
        $competecia->sede_id = 1;
        $competecia->estadocompetencia_id = 2;
        $competecia->save();

    }
}
