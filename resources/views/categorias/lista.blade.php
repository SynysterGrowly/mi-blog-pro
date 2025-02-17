@extends('layouts.webpage')

@section('title', 'Categoría de Listas')

@section('content')

    <div class="container mt-4">
        <h1 class="mb-4">Lista de Categorías</h1>

        @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <div class="card shadow-sm">
            <div class="card-body">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">Categoría</th>
                        <th scope="col">Descripción</th>
                        <th scope="col" class="text-center">Editar</th>
                        <th scope="col" class="text-center">Eliminar</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($categorias as $categoria)
                        <tr>
                            <td>{{ $categoria->nombre }}</td>
                            <td>{{ $categoria->descripcion }}</td>
                            <td class="text-center">
                                <a href="{{ route('categorias.edit', $categoria->id) }}" class="btn btn-warning btn-sm">
                                    Editar
                                </a>
                            </td>

                            <td class="text-center">
                                <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar esta categoría?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
