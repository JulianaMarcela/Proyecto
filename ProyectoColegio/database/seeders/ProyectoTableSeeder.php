<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
USE Hash;

class ProyectoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('proyecto')->insert([
            'Nom-proyecto' => 'Analítica De Datos',
            'Tiempo_inicio' =>'2022-03-14',
            'Tiempo_final' => '2022-06-14',
        ]);
    }
}
