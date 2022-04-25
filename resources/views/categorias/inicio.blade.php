@extends('layouts/agenda')

@section('tituloPagina', 'Categorias')

@section('contenido')

    <div class="container" style="font-family: 'Josefin Sans', sans-serif;">
        <div class="row my-4">
            <div class="col text-center">
                <h1 class="display-4">Categorias</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a href="{{ route('categorias.create') }}" class="btn btn-primary fw-bold"><i class="fas fa-plus"></i>
                    Agregar nueva categoria</a>
                <hr>
                @if ($mensaje = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        {{ $mensaje }}
                    </div>
                @endif
            </div>
        </div>
        <div class="row my-4">
            <div class="col">
                <table class="table table-hover text-center" id="tablaCategorias">
                    <thead>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </thead>
                    <tbody>
                        @foreach ($categorias as $item)
                            <tr>
                                <td>{{ $item->nombre }}</td>
                                <td>{{ $item->descripcion }}</td>
                                <td>
                                    <a href="{{ route('categorias.edit', $item->id_categoria) }}"
                                        class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Editar</a>
                                </td>
                                <td>
                                    <a href="{{ route('categorias.show', $item->id_categoria) }}"
                                        class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Eliminar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

@section('dataTable')
    <script>
        $(document).ready(function(){
            $('#tablaCategorias').DataTable();
        });
    </script>
@endsection
