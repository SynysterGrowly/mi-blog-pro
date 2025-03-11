@extends('layouts.app')

@section('title', 'Editar Categoría')

@section('content')
    <div class="container">
        <h1>Editar Categoría</h1>

        <form method="POST" action="{{ route('categorias.update', $categoria->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre de la Categoría</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre', $categoria->nombre) }}" required>
            </div>

            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{ old('descripcion', $categoria->descripcion) }}" required>
            </div>

            @if ($categoria->imagen)
                <div>
                    <label class="form-label">Imagen Actual:</label>
                    <img src="{{ asset('storage/'.$categoria->imagen) }}" alt="Imagen actual" width="150">
                </div>
            @endif

            <div class="mb-3">
                <label for="imagen" class="form-label">Subir nueva imagen (opcional)</label>
                <input type="file" class="form-control" id="imagen" name="imagen">
            </div>

            <button type="submit" class="btn btn-primary">Actualizar Categoría</button>
        </form>
    </div>
@endsection
