@extends('layouts/agenda')

@section('tituloPagina', 'Editar contacto')

@section('contenido')

    <div class="container" style="font-family: 'Josefin Sans', sans-serif;">
        <div class="row my-4">
            <div class="col text-center">
                <h1 class="display-4">Editar contacto</h1>
            </div>
        </div>
        <div class="row my-4">
            <div class="col fw-bold">
                <form action="{{ route('contactos.update', $contacto->id_contacto) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <label for="categoria" class="my-2">Categoria</label>
                    <select name="categoria" id="categoria" class="form-select">
                        @foreach ($categorias as $item)
                            @if ($item->id_categoria == $contacto->id_categoria)
                                <option selected value="{{ $item->id_categoria }}">{{ $item->nombre }}</option>
                            @else
                                <option value="{{ $item->id_categoria }}">{{ $item->nombre }}</option>
                            @endif
                        @endforeach
                    </select>
                    <label for="paterno" class="my-2">Apellido paterno</label>
                    <input type="text" class="form-control" name="paterno" id="paterno" required value="{{ $contacto->paterno}}">
                    <label for="materno" class="my-2">Apellido materno</label>
                    <input type="text" class="form-control" name="materno" id="materno" required value="{{ $contacto->materno}}">
                    <label for="nombre" class="my-2">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" required value="{{ $contacto->nombre}}">
                    <label for="telefono" class="my-2">Telefono</label>
                    <input type="text" class="form-control" name="telefono" id="telefono" required value="{{ $contacto->telefono}}">
                    <label for="correo" class="my-2">correo electronico</label>
                    <input type="text" class="form-control" name="correo" id="correo" required value="{{ $contacto->email}}">
                    <br>
                    <button class="btn btn-warning"><i class="fas fa-user-edit"></i> Actualizar</button>
                </form>
            </div>
        </div>
    </div>

@endsection
