@extends('layouts/agenda')

@section('tituloPagina', 'Editar categoria')

@section('contenido')

<div class="container" style="font-family: 'Josefin Sans', sans-serif;">
    <div class="row my-4">
        <div class="col text-center">
            <h1 class="display-4" >Editar categoria</h1>
        </div>
    </div>
    <div class="row my-4">
        <div class="col fw-bold">
            <form action="{{ route('categorias.update', $categorias->id_categoria) }}" method="POST">
                @csrf
                @method('PUT')
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre"  
                required value="{{ $categorias->nombre }}">
                <label for="descripcion" class="my-1">Descripcion</label>
                <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="5">{{ $categorias->descripcion }}</textarea>
                <br>
                <button class="btn btn-warning"><i class="fas fa-edit"></i> Actualizar</button>
            </form>
        </div>
    </div>
</div>

@endsection
