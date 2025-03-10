@extends('layouts.app')

@section('title', 'Formulario')

@section('content')
    <div class="container">
        <h1>Formulario de Entradas</h1>

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


        <form method="POST" action="{{ route('entrada.store') }}" enctype="multipart/form-data">
            @csrf


                <div class="mb-3">
                    <label for="titulo" class="form-label">Título</label>
                    <textarea id="titulo" name="titulo" class="form-control" rows="2" required>{{ old('titulo') }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <textarea id="descripcion" name="descripcion" class="form-control" rows="3" required>{{ old('descripcion') }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="contenido" class="form-label">Contenido</label>
                    <textarea id="contenido" name="contenido" class="form-control" rows="5" required>{{ old('contenido') }}</textarea>
                </div>


                <div class="mb-3">
                    <label for="imagen" class="form-label">Imagen</label>
                    <input type="file" id="imagen" name="imagen" class="form-control w-50" accept="image/*">

                    @error('imagen')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <select name="categoria_id" id="categoria_id" class="form-select">
                    <option value="">Seleccione una categoría</option>
                    @foreach($categorias as $categoria)
                        <option value="{{ $categoria->id }}" {{ old('categoria_id') == $categoria->id ? 'selected' : '' }}>
                            {{ strip_tags($categoria->nombre) }} <!-- Esto elimina el HTML -->
                        </option>
                    @endforeach
                </select>


                <div class="mb-3">
                    <label for="estado" class="form-label">Estado</label>
                    <select id="estado" name="estado" class="form-select " required>
                        <option value="proceso" {{ old('estado') == 'proceso' ? 'selected' : '' }}>Proceso</option>
                        <option value="finalizado" {{ old('estado') == 'finalizado' ? 'selected' : '' }}>Finalizado</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="fecha_publicacion" class="form-label">Fecha de Publicación</label>
                    <input type="date" id="fecha_publicacion" name="fecha_publicacion" class="form-control w-50" value="{{ old('fecha_publicacion') }}" required>
                    @error('fecha_publicacion')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-danger">GUARDAR</button>
            </form>
    </div>
@endsection
