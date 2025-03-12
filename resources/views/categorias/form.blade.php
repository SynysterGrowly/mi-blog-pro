@extends('layouts.app')

@section('title', 'Categorías')

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

            <form method="POST" action="{{ route('entrada.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="titulo" class="form-label">Título</label>
                    <input type="text" id="titulo" name="titulo" class="form-control"
                           placeholder="Escribe el título" value="{{ old('titulo') }}" required>
                    @error('titulo')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <input type="text" id="descripcion" name="descripcion" class="form-control"
                           placeholder="Escribe una breve descripción" value="{{ old('descripcion') }}" required>
                    @error('descripcion')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="contenido" class="form-label">Contenido</label>
                    <textarea id="contenido" name="contenido" class="form-control" rows="5" required>{{ old('contenido') }}</textarea>
                    @error('contenido')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="imagen" class="form-label">Imagen</label>
                    <input type="file" id="imagen" name="imagen" class="form-control" accept="image/*">

                    @error('imagen')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Guardar Categoría</button>
            </form>
        </div>
    </div>
@endsection

@section('scripts')

    <script src="https://cdn.tiny.cloud/1/ti67oyb3b0lqpoji4pvw9pr9zxmwguovh1yz60a1yh8ucb26/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#contenido',
            menubar: false,
            plugins: 'advlist autolink lists link charmap preview anchor searchreplace visualblocks code fullscreen insertdatetime media table paste code help wordcount',
            toolbar: 'undo redo | formatselect | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
            content_css: '//www.tiny.cloud/css/codepen.min.css'
        });
    </script>
@endsection
