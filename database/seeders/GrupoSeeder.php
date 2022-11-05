<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Grupo;

class GrupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Grupo::create([
            'especialidad_id'   => 1,
            'clave'             => '5AVP', 
            'descripcion'       => 'Grupo de Programación Vespertino', 
            'turno'             => 1,
            'semestre'          => 5, 
        ]);

        Grupo::create([
            'especialidad_id'   => 1,
            'clave'             => '5AMP', 
            'descripcion'       => 'Grupo de Programación Matutino', 
            'turno'             => 0,
            'semestre'          => 5, 
        ]);

        Grupo::create([
            'especialidad_id'   => 2,
            'clave'             => '3AVO', 
            'descripcion'       => 'Grupo de Ofimática Vespertino', 
            'turno'             => 1,
            'semestre'          => 3, 
        ]);
    }
}
