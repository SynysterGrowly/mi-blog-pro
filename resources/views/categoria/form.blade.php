@extends('layouts.app')

@section('title', 'Categorias')

@section('content')
<div class="container">
    <div class="row">
        <form>
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre" placeholder="Nombre de la categoría">
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción:</label>
                <textarea class="form-control" id="descripcion" rows="3" placeholder="Descripción de la categoría"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>

    </div>
</div>


@endsection
