@extends('layouts/agenda')

@section('tituloPagina', 'Contactos')

@section('contenido')

    <div class="container" style="font-family: 'Josefin Sans', sans-serif;">
        <div class="row my-4">
            <div class="col text-center">
                <h1 class="display-4">Contactos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a href="{{ route('contactos.create') }}" class="btn btn-primary fw-bold"><i class="fas fa-plus"></i>
                    Agregar nuevo contacto</a>
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
                <table class="table table-hover text-center" id="tablaContactos">
                    <thead>
                        <th>Apellido paterno</th>
                        <th>Apellido materno</th>
                        <th>Nombre</th>
                        <th>Telefono</th>
                        <th>Email</th>
                        <th>Categoria</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </thead>
                    <tbody>
                        @foreach ($listado as $item)
                            <tr>
                                <td>{{ $item->paterno }}</td>
                                <td>{{ $item->materno }}</td>
                                <td>{{ $item->nombre }}</td>
                                <td>{{ $item->telefono }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->nombre_categoria }}</td>
                                <td>
                                    <a href="{{ route('contactos.edit', $item->id_contacto) }}" class="btn btn-warning btn-sm"><i class="fas fa-user-edit"></i> Editar</a>
                                </td>
                                <td>
                                    <a href="{{ route('contactos.show', $item->id_contacto) }}" class="btn btn-danger btn-sm"><i class="fas fa-user-times"></i> Eliminar</a>
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
            $('#tablaContactos').DataTable();
        });
    </script>
@endsection

