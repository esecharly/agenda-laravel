@extends('layouts/agenda')

@section('tituloPagina', 'Inicio')

@section('contenido')

<div class="container" style="font-family: 'Josefin Sans', sans-serif;">
    <div class="row my-4">
        <div class="col text-center">
            <h1 class="display-4">Agenda de Contactos con Laravel 8</h1>
        </div>
    </div>
    <div class="row my-4">
        <div class="col text-center">
            <img src="{{ asset('img/cheems.jpg')}}" alt="" class="img-fluid" width="280">
        </div>
    </div>
    <div class="row my-4">
        <div class="col text-center">
            <h2>Examen para la unidad 2 de Programación lógica y funcional.</h2>
            <h2>Ayala Galarza Carlos Eduardo.</h2>
        </div>
    </div>
</div>

@endsection
