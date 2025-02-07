@extends('layouts.app')

@section('title', 'Lista Categorias')

@section('content')

    <div class="container">
        <div class="row">
            <form>
                <div class="mb-3">
                    <label for="titulo" class="form-label">Título</label>
                    <input type="text" class="form-control" id="titulo" name="titulo"
                           placeholder="Escribe el título de tu blog" required>
                </div>
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <textarea class="form-control" id="descripcion" name="descripcion" rows="3"
                              placeholder="Escribe una descripción breve" required></textarea>
                </div>
                <div class="mb-3">
                    <input type="file" class="form-control">
                    <img src=" " class="rounded float-end" alt="...">
                </div>
                <div class="mb-3">
                    <label for="contenido" class="form-label">Contenido</label>
                    <textarea class="form-control" id="contenido" name="contenido" rows="5"
                              placeholder="Escribe el contenido de tu blog" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="estado" class="form-label">Estado</label>
                    <select class="form-control" id="estado" name="estado">
                        <option value="Proceso">Proceso</option>
                        <option value="Finalizado">Finalizado</option>

                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
@endsection
