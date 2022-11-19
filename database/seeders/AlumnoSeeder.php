<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Alumno;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Alumno::create([ 
            'n_control'         => '203263041701', 
            'nombre'            => 'Francisco Lopez', 
            'edad'              => 18, 
            'sexo'              => 1, 
            'fecha_nacimiento'  => '2004-12-3', 
            'domicilio'         => 'Calle z Col Y CP 80050', 
            'telefono'          => '6777263761', 
        ]); 

        Alumno::create([ 
            'n_control'         => '2045830141781',
            'nombre'            => 'George de la Selva', 
            'edad'              => 24, 
            'sexo'              => 1, 
            'fecha_nacimiento'  => '1998-10-3', 
            'domicilio'         => 'Valle Alto', 
            'telefono'          => '6671483129', 
        ]); 

        Alumno::create([ 
            'n_control'         => '917203614862', 
            'nombre'            => 'Ana Lisa', 
            'edad'              => 17, 
            'sexo'              => 1, 
            'fecha_nacimiento'  => '2005-11-3', 
            'domicilio'         => 'Calle Bahía de Sta. María Col a Y CP 80058', 
            'telefono'          => '6674165798', 
        ]); 

        Alumno::create([ 
            'n_control'         => '201010041701', 
            'nombre'            => 'Jorge Sanchez', 
            'edad'              => 16, 
            'sexo'              => 1, 
            'fecha_nacimiento'  => '2005-12-3', 
            'domicilio'         => 'Calle z Col Y CP 80058', 
            'telefono'          => '6778972831', 
        ]); 
    }
}
