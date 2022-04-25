@extends('layouts/agenda')

@section('tituloPagina', 'Agregar categoria')

@section('contenido')

    <div class="container" style="font-family: 'Josefin Sans', sans-serif;">
        <div class="row my-4">
            <div class="col text-center">
                <h1 class="display-4">Agregar nueva categoria</h1>
            </div>
        </div>
        <div class="row my-4">
            <div class="col fw-bold">
                <form action="{{ route('categorias.store') }}" method="POST">
                    @csrf
                    @method('POST')
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" required>
                    <label for="descripcion" class="my-1">Descripcion</label>
                    <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="5"></textarea>
                    <br>
                    <button class="btn btn-primary"><i class="fas fa-plus"></i> Agregar</button>
                </form>
            </div>
        </div>
    </div>

@endsection
