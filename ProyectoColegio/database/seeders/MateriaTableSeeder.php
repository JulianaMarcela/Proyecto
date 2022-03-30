<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
USE Hash;

class MateriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('materia')->insert([
            'Nombre' => 'Base de Datos',
            'Descripcion' => 'Ingresa, modifica, muestra los registros de una base de datos',
            
        ]);
    }
}
