@extends('layouts/agenda')

@section('tituloPagina', 'Eliminar categoria')

@section('contenido')

    <div class="container" style="font-family: 'Josefin Sans', sans-serif;">
        <div class="row my-4">
            <div class="col text-center">
                <h1 class="display-4">Eliminar categoria</h1>
            </div>
        </div>
        <div class="row my-4">
            <div class="col fw-bold">
                <div class="alert alert-danger" role="alert">
                    Estas seguro de que quieres eliminar este registro?
                    <p>Una vez eliminado no podra recuperarse</p>

                    <table class="table">
                        <thead>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $categorias->nombre }}</td>
                                <td>{{ $categorias->descripcion}}</td>
                            </tr>
                        </tbody>
                    </table>
                    <hr>
                    <form action="{{ route('categorias.destroy', $categorias->id_categoria) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger"><i class="fas fa-trash-alt"></i> Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
