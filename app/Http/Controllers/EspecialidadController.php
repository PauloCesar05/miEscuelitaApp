<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Especialidad;

class EspecialidadController extends Controller
{
    function consultar(){
        

        $especialidades = Especialidad::paginate(3);
        
        return view('especialidad.especialidades', compact('especialidades'));
    }

    function registrar(){
        return view('especialidad.registrar');
    }

    function guardar(Request $datos){
        $especialidades = Especialidad::create($datos->post());

        return redirect('/especialidad');
    }

    function eliminar($id){
        
        $especialidades = Especialidad::find($id);
        $especialidades->delete();

        return redirect('/especialidad');
    }

    function editar($id){
        $especialidades = Especialidad::find($id);
        
        return view('especialidad.editar', compact('especialidades'));
    }

    function actualizar(Request $datos, $id){
        $especialidades = Especialidad::find($id);
        $especialidades->nombre = $datos->input('nombre');
        $especialidades->save();

        return redirect('/especialidad');

    }
}
