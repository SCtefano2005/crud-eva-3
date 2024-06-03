@extends('layout.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2>Lista de Personas</h2>
            <a class="btn btn-success" href="{{ route('personas.create') }}">Crear Persona</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($personas as $persona)
                    <tr>
                        <td>{{ $persona->id }}</td>
                        <td>{{ $persona->nombre }}</td>
                        <td>{{ $persona->paterno }}</td>
                        <td>{{ $persona->materno }}</td>
                        <td>{{ $persona->fecha_nacimiento }}</td>
                        <td>
                            <a class="btn btn-info" href="{{ route('personas.show', $persona->id) }}">Ver</a>
                            <a class="btn btn-primary" href="{{ route('personas.edit', $persona->id) }}">Editar</a>
                            <form action="{{ route('personas.destroy', $persona->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
