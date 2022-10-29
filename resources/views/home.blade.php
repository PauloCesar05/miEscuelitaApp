@extends('master')

@section('contenido')
    <div class="jumbotron">
        <h1 class="display-4">Mi Escuela App</h1>
        <p class="lead">Bienvenido a mi escuelita.com!</p>
        <hr class="my-4">
        <p>
            Aquí podrás encontrar todoos los trámites eléctronicos relacionados
            a tu escuela.
        </p><br>
        <img src="{{asset('imagenes/logo2_home.jpg')}}" alt=""  width="500px">
        
    </div>
@stop