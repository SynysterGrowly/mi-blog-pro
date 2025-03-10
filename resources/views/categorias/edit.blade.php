@extends('layouts.app')

@section('title', 'Editar Categoría')

@section('content')

    <div class="container mt-4">
        <h1 class="mb-4">Editar Categoría</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('categorias.update', $categoria->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')


            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre de la Categoría</label>
                <textarea class="form-control" id="nombre" name="nombre" rows="2" required>{!! old('nombre', $categoria->nombre) !!}</textarea>
                @error('nombre')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>


            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="5" required>{!! old('descripcion', $categoria->descripcion) !!}</textarea>
                @error('descripcion')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Imagen Actual -->
            @if ($categoria->imagen)
                <div class="mb-3">
                    <label class="form-label">Imagen Actual:</label>
                    <img src="{{ asset('storage/'.$categoria->imagen) }}" alt="Imagen actual" width="150">
                </div>
            @endif

            <!-- Subir Nueva Imagen -->
            <div class="mb-3">
                <label for="imagen" class="form-label">Subir nueva imagen (opcional)</label>
                <input type="file" class="form-control" id="imagen" name="imagen">
            </div>

            <button type="submit" class="btn btn-primary">Actualizar Categoría</button>
        </form>
    </div>


    <script src="https://cdn.tiny.cloud/1/ti67oyb3b0lqpoji4pvw9pr9zxmwguovh1yz60a1yh8ucb26/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            tinymce.init({
                    selector: 'textarea#nombre, textarea#descripcion',
                plugins: 'advlist autolink lists link image charmap preview anchor',
                toolbar: 'undo redo | bold italic underline | alignleft aligncenter alignright | bullist numlist outdent indent | link image',
                menubar: false,
                height: 200,
                branding: false,
                setup: function (editor) {
                editor.on('change', function () {
                    editor.save();
                });
            }
        });
        });
    </script>

@endsection
