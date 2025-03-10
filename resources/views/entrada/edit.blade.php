@extends('layouts.app')

@section('title', 'Editar Entrada')

@section('content')

    <div class="container mt-4">
        <h1 class="mb-4">Editar Entrada</h1>

        <form method="POST" action="{{ route('entrada.update', $entrada->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')


            <div class="mb-3">
                <label for="titulo" class="form-label">Título</label>
                <textarea id="titulo" name="titulo" class="form-control" rows="2" required>{!! $entrada->titulo !!}</textarea>
                @error('titulo')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>


            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea id="descripcion" name="descripcion" class="form-control" rows="5" required>{!! $entrada->descripcion !!}</textarea>
                @error('descripcion')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>


            <div class="mb-3">
                <label for="contenido" class="form-label">Contenido</label>
                <textarea id="contenido" name="contenido" class="form-control" rows="5" required>{!! $entrada->contenido !!}</textarea>
                @error('contenido')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            @if ($entrada->imagen)
                <div>
                    <label class="form-label">Imagen Actual:</label>
                    <img src="{{ asset('storage/'.$entrada->imagen) }}" alt="Imagen actual" width="150">
                </div>
            @endif

            <div class="mb-3">
                <label for="imagen" class="form-label">Subir nueva imagen (opcional)</label>
                <input type="file" class="form-control" id="imagen" name="imagen">
            </div>

            <div class="mb-3">
                <label for="categoria_id" class="form-label">Categoría</label>
                <select name="categoria_id" id="categoria_id" class="form-select" required>
                    <option value="">Seleccione una categoría</option>
                    @foreach($categorias as $categoria)
                        <option value="{{ $categoria->id }}" {{ $entrada->categoria_id == $categoria->id ? 'selected' : '' }}>
                            {{ $categoria->nombre }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="estado" class="form-label">Estado</label>
                <select id="estado" name="estado" class="form-select" required>
                    <option value="proceso" {{ $entrada->estado == 'proceso' ? 'selected' : '' }}>Proceso</option>
                    <option value="finalizado" {{ $entrada->estado == 'finalizado' ? 'selected' : '' }}>Finalizado</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="fecha_creacion" class="form-label">Fecha de Creación</label>
                <input type="text" id="fecha_creacion" name="fecha_creacion" class="form-control w-50" value="{{ $entrada->created_at->format('d/m/Y H:i') }}" readonly>
            </div>

            <button type="submit" class="btn btn-danger">GUARDAR</button>
        </form>
    </div>


    <script src="https://cdn.tiny.cloud/1/ti67oyb3b0lqpoji4pvw9pr9zxmwguovh1yz60a1yh8ucb26/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            tinymce.init({
                selector: 'textarea#contenido', // Solo se aplica a "contenido"
                plugins: 'advlist autolink lists link image charmap preview anchor',
                toolbar: 'undo redo | bold italic underline | alignleft aligncenter alignright | bullist numlist outdent indent | link image',
                menubar: false,
                height: 300,
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


