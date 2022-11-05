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
            'clave'         => '5AVP', 
            'descripcion'   => 'Programacion vespertino', 
            'turno'         => 1, 
        ]); 
    }
}