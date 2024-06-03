@extends('layout.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2>Editar Persona</h2>
            <form action="{{ route('personas.update', $persona->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" value="{{ $persona->nombre }}" required>
                </div>
                <div class="form-group">
                    <label for="paterno">Apellido Paterno:</label>
                    <input type="text" class="form-control" name="paterno" id="paterno" value="{{ $persona->paterno }}" required>
                </div>
                <div class="form-group">
                    <label for="materno">Apellido Materno:</label>
                    <input type="text" class="form-control" name="materno" id="materno" value="{{ $persona->materno }}" required>
                </div>
                <div class="form-group">
                    <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                    <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" value="{{ $persona->fecha_nacimiento }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </form>
        </div>
    </div>
</div>
@endsection
