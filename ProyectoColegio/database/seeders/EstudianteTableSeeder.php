<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Hash;
class EstudianteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estudiante')->insert([
            'Nom_estudiante' => 'GUILLERMO',
            'Apell_estudiante' => 'SAMBONI',
            'Direccion' => 'Calle 70 BN #3 a 28',
            'Telefono' => 253,
            'Tipo_documento' => 'CC',
            'Num_documento' => 1002806863,

        ]);
    }
}
