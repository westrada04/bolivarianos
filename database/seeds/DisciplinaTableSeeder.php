<?php

use App\Disciplina;
use Illuminate\Database\Seeder;

class DisciplinaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $disciplina = new Disciplina;
        $disciplina->nombre = 'Fubol';
        $disciplina->imgdisciplina = 'futbol.png';
        $disciplina->save();

        $disciplina = new Disciplina;
        $disciplina->nombre = 'Baseball';
        $disciplina->imgdisciplina = 'baseball.jpg';
        $disciplina->save();

    }
}
