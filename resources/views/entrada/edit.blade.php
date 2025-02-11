@extends('layouts.app')

@section('title', 'Categoria de listas')

@section('content')

    <h1>Editar Entrada</h1>




    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('entrada.update' , $entrada->id) }}">

        @csrf
        @method('PATCH')

        <label for="titulo">Titulo</label>
        <input type="text" id="titulo" name="titulo" placeholder="Escribe el titulo" value="{{$entrada->titulo }}" required>
        @error('titulo')
        <span class="error">{{ $message }}</span>
        @enderror

        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion" rows="5" placeholder="Escribe una breve descripción" required>{{ $entrada->descripcion }}</textarea>
        @error('descripcion')
        <span class="error">{{ $message }}</span>
        @enderror

        <label for="contenido">Contenido:</label>
        <textarea id="contenido" name="contenido" rows="5" placeholder="Escribe el contenido del blog" required>{{ $entrada->contenido }}</textarea>
        @error('contenido')
        <span class="error">{{ $message }}</span>
        @enderror

        <label for="contenido">Categoria:</label>
        <select name="categoria_id" >
            @foreach($categorias as $categoria)
                <option value ="{{ $categoria->id }} ">{{$categoria->nombre}} </option>
            @endforeach
        </select>

        <label for="fecha_publicacion">Fecha de Publicación:</label>
        <input type="date" id="fecha_publicacion" name="fecha_publicacion" value="{{ $entrada->fecha_publicacion }}" required>
        @error('fecha_publicacion')
        <span class="error">{{ $message }}</span>
        @enderror

        <label for="estado">Estado:</label>
        <select id="estado" name="estado" required>
            <option value="proceso" {{ $entrada->estado == 'proceso' ? 'selected' : '' }} selected>Proceso</option>
            <option value="finalizado" {{ $entrada->estado == 'finalizado' ? 'selected' : '' }}>Finalizado</option>
        </select>




        <button type="submit">Guardar </button>
    </form>
    </div>

@endsection


