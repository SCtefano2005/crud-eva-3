@extends('layout.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2>Detalles de la Persona</h2>
            <table class="table">
                <tr>
                    <th>ID:</th>
                    <td>{{ $persona->id }}</td>
                </tr>
                <tr>
                    <th>Nombre:</th>
                    <td>{{ $persona->nombre }}</td>
                </tr>
                <tr>
                    <th>Apellido Paterno:</th>
                    <td>{{ $persona->paterno }}</td>
                </tr>
                <tr>
                    <th>Apellido Materno:</th>
                    <td>{{ $persona->materno }}</td>
                </tr>
                <tr>
                    <th>Fecha de Nacimiento:</th>
                    <td>{{ $persona->fecha_nacimiento }}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection
