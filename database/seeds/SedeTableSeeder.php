<?php

use App\Sede;
use Illuminate\Database\Seeder;

class SedeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sede = new Sede;
        $sede->nombre = 'Principal';
        $sede->ciudad = 'Santa Marta';
        $sede->save();

        $sede2 = new Sede;
        $sede2->nombre = 'Subsede';
        $sede2->ciudad = 'Santiago de Cali';
        $sede2->save();

    }
}
