@extends('layouts/agenda')

@section('tituloPagina', 'Agregar contacto')

@section('contenido')

    <div class="container" style="font-family: 'Josefin Sans', sans-serif;">
        <div class="row my-4">
            <div class="col text-center">
                <h1 class="display-4">Agregar nuevo contacto</h1>
            </div>
        </div>
        <div class="row my-4">
            <div class="col fw-bold">
                <form action="{{ route('contactos.store') }}" method="POST">
                    @csrf
                    @method('POST')
                    <label for="categoria" class="my-2">Categoria</label>
                    <select name="categoria" id="categoria" class="form-select" required>
                        <option value="">Selecciona una categoria</option>
                        @foreach ($categorias as $item)
                            <option value="{{ $item->id_categoria }}">{{ $item->nombre }}</option>
                        @endforeach
                    </select>
                    <label for="paterno" class="my-2">Apellido paterno</label>
                    <input type="text" class="form-control" name="paterno" id="paterno" required>
                    <label for="materno" class="my-2">Apellido materno</label>
                    <input type="text" class="form-control" name="materno" id="materno" required>
                    <label for="nombre" class="my-2">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" required>
                    <label for="telefono" class="my-2">Telefono</label>
                    <input type="text" class="form-control" name="telefono" id="telefono" required>
                    <label for="correo" class="my-2">Correo electronico</label>
                    <input type="text" class="form-control" name="correo" id="correo" required>
                    <br>
                    <button class="btn btn-primary"><i class="fas fa-plus"></i> Agregar</button>
                </form>
            </div>
        </div>
    </div>

@endsection
