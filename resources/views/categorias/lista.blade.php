@extends('layouts.app')

@section('title', 'Lista de Categorías')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Lista de Categorías</h1>

        <div class="card shadow-sm">
            <div class="card-body">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">Imagen</th>
                        <th scope="col">Título</th>
                        <th scope="col">Descripción</th>
                        <th scope="col" class="text-center">Editar</th>
                        <th scope="col" class="text-center">Eliminar</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($categorias as $categoria)
                        <tr>
                            <td>
                                @if ($categoria->imagen)
                                    <img src="{{ asset('storage/' . $categoria->imagen) }}"
                                         alt="Imagen de {{ $categoria->nombre }}" width="100">
                                @else
                                    <span>Sin imagen</span>
                                @endif
                            </td>
                            <td>{!! $categoria->nombre !!}</td>  <!-- Se permite HTML en el nombre -->
                            <td>{!! $categoria->descripcion !!}</td>  <!-- Se permite HTML en la descripción -->

                            <td class="text-center">
                                <a href="{{ route('categorias.edit', $categoria->id) }}" class="btn btn-warning btn-sm">
                                    Editar
                                </a>
                            </td>
                            <td class="text-center">
                                <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST"
                                      onsubmit="return confirm('¿Estás seguro de eliminar esta entrada?');">
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
