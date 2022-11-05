@extends('master')

@section('contenido')
    <h1>Editar Especialidad</h1><hr>
    <form action="{{url('especialidad/actualizar')}}/{{$especialidades->id}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">ID:</label>
            <input value="{{$especialidades->id}}" type="text" class="form-control" name="n_control" disabled>
        </div>

        <div class="form-group">
            <label for="">Nombre:</label>
            <input value="{{$especialidades->nombre}}" type="text" class="form-control" name="nombre" required>
        </div>
        
        <div>
            <input type="submit" value="Guardar" class="btn btn-primary">
            <a href="{{ url('/especialidad') }}" class="btn btn-danger">Cancelar</a>
        </div>
    </form>
@stop