<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grupo;

class GrupoController extends Controller
{
    function consultar(){
        
        $grupos = Grupo::paginate(3);
        
        return view('grupo.grupos', compact('grupos'));
    }

    function registrar(){
        return view('grupo.registrarGrupo');
    }

    function guardar(Request $datos){
        $grupos = Grupo::create($datos->post());

        return redirect('/grupos');
    }

    function eliminar($id){
        
        $grupos = Grupo::find($id);
        $grupos->delete();

        return redirect('/grupos');
    }

    function editar($id){
        $grupos = Grupo::find($id);
        
        return view('grupo.editarGrupo', compact('grupo'));
    }

    function actualizar(Request $datos, $id){
        $grupos = Grupo::find($id);
        $grupos->n_control = $datos->input('n_control');
        $grupos->nombre = $datos->input('nombre');
        $grupos->telefono = $datos->input('telefono');
        $grupos->edad = $datos->input('edad');
        $grupos->sexo = $datos->input('sexo');
        $grupos->fecha_nacimiento = $datos->input('fecha_nacimiento');
        $grupos->domicilio = $datos->input('domicilio');
        $grupos
        ->save();

        return redirect('/grupos');

    }
}
