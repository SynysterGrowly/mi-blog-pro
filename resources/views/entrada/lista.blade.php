@extends('layouts.app')

@section('title', 'Lista de Entradas')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Lista de Entradas</h1>

        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <div class="card shadow-sm">
            <div class="card-body">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">Imagen</th>
                        <th scope="col">Título</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Contenido</th>
                        <th scope="col">Estado</th>
                        <th scope="col" class="text-center">Editar</th>
                        <th scope="col" class="text-center">Eliminar</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($entradas as $entrada)
                        <tr>
                            <td>
                                @if ($entrada->imagen)
                                    <img src="{{ asset('storage/' . $entrada->imagen) }}"
                                         alt="Imagen de {{ $entrada->titulo }}" width="100">
                                @else
                                    <span>Sin imagen</span>
                                @endif
                            </td>
                            <td>{{ $entrada->titulo }}</td>
                            <td>{{ $entrada->descripcion }}</td>
                            <td>{{ $entrada->contenido }}</td>
                            <td>{{ $entrada->estado }}</td>
                            <td class="text-center">
                                <a href="{{ route('entrada.edit', $entrada->id) }}" class="btn btn-warning btn-sm">
                                    Editar
                                </a>
                            </td>
                            <td class="text-center">
                                <form action="{{ route('entrada.destroy', $entrada->id) }}" method="POST"
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

