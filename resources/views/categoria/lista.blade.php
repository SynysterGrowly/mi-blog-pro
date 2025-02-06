@extends('layouts.app')

@section('title', 'Lista Categorias')

@section('content')

    <div class="container">
        <div class="row">
            <table class="table table-striped mt-4">
                <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre de categoria</th>
                    <th>Descripcion</th>

                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Fantasia</td>
                    <td>Aún no funciona bien</td>
                    <td><button class="btn btn-warning">Editar</button></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
