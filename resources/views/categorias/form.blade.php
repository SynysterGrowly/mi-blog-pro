@extends('layouts.app')

@section('title', 'Categorias')

@section('content')

    <div class="container mt-4">
        <div class="row gy-5">
            <h1>Formulario de Categorías</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('categorias.store') }}" enctype="multipart/form-data">
                @csrf


                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre de la Categoría</label>
                    <textarea class="form-control" id="nombre" name="nombre" rows="2" placeholder="Escribe el nombre de la categoría" required>{{ old('nombre') }}</textarea>
                    @error('nombre')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>


                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <textarea class="form-control" id="descripcion" name="descripcion" rows="5" placeholder="Escribe una breve descripción de la categoría" required>{{ old('descripcion') }}</textarea>
                    @error('descripcion')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Imagen -->
                <div class="mb-3">
                    <label for="imagen" class="form-label">Imagen</label>
                    <input type="file" id="imagen" name="imagen" class="form-control w-50" accept="image/*">
                    @error('imagen')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Guardar Categoría</button>
            </form>
        </div>
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
