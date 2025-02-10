@extends('layouts.app')

   @section('title', 'Categorias')
@section('content')

    <div class="container mt-4">
        <div class="row gy-5">
    <h1>Formulario de Categorías</h1>


    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('categorias.store') }}">
        @csrf


        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre de la Categoría</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escribe el nombre de la categoría" value="{{ old('nombre') }}" required>
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

        <button type="submit" class="btn btn-primary">Guardar Categoría</button>
    </form>
</div>

   @endsection
