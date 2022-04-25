@extends('layouts/agenda')

@section('tituloPagina', 'Eliminar contacto')

@section('contenido')

    <div class="container" style="font-family: 'Josefin Sans', sans-serif;">
        <div class="row my-4">
            <div class="col text-center">
                <h1 class="display-4">Eliminar contacto</h1>
            </div>
        </div>
        <div class="row my-4">
            <div class="col fw-bold">
                <div class="alert alert-danger" role="alert">
                    Estas seguro de que quieres eliminar este registro?
                    <p>Una vez eliminado no podra recuperarse</p>
                    <table class="table table-hover">
                        <thead>
                            <th>Apellido paterno</th>
                            <th>Apellido materno</th>
                            <th>Nombre</th>
                            <th>Telefono</th>
                            <th>Email</th>
                            <th>Categoria</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $contacto->paterno }}</td>
                                <td>{{ $contacto->materno }}</td>
                                <td>{{ $contacto->nombre }}</td>
                                <td>{{ $contacto->telefono }}</td>
                                <td>{{ $contacto->email }}</td>
                                <td>{{ $contacto->nombre_categoria }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <form action="{{ route('contactos.destroy', $contacto->id_contacto) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger"><i class="fas fa-user-times"></i> Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
