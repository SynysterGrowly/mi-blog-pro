@extends('layouts.app')

@section('title', 'Lista de Entradas')

@section('content')

    <div class="container">
        <div class="row">
            <table class="table table-striped mt-4">
                <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Descripción</th>
                    <th>Contenido</th>
                    <th> Categoria</th>
                    <th> Estado</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Descripción</th>
                    <th>Contenido</th>
                    <th> Categoria</th>
                    <th> Estado</th>
                </tr>
                <td>
                    <button class="btn btn-warning">Editar</button>
                </td>

                </tbody>
            </table>
        </div>
    </div>

@endsection
