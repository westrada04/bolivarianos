<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(SedeTableSeeder::class);
        $this->call(EstadocompetenciaTableSeeder::class);
        $this->call(DisciplinaTableSeeder::class);
        $this->call(CategoriaTableSeeder::class);
        $this->call(CompetenciaTableSeeder::class);
        $this->call(NoticiaTableSeeder::class);
        $this->call(CompetenciaTableSeeder::class);
        $this->call(ComentarioTableSeeder::class);
    }
}
