 @extends('layouts.app')

    @section('title', 'Lista de Usuarios')

    @section('content')
        <div class="container mt-4">
            <h2>Lista de Usuarios</h2>

            <div class="container mb-5" style="border: 1px solid orange">
                <div class="row gy-5">
                    <div class="col-6">
                        <h2>Ejercicio 2</h2>
                        <div class="p-3">columna gato1</div>
                    </div>
                    <div class="col-6">
                        <div class="p-3">columna gato2</div>
                    </div>
                    <div class="col-6">
                        <div class="p-3">columna gato3</div>
                    </div>
                    <div class="col-6">
                        <div class="p-3">columna gato4</div>
                    </div>
                </div>
            </div>


            <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mi-estilo-div">
                    <h2>Grid: container, col 1</h2>
                    <p>columna 1</p>
                </div>
                <div class="col-lg-4 col-md-6 col-12 bg-light p-3 text-center">
                    <h2>Columna 2</h2>
                    <p>la columna 2</p>
                </div>
                <div class="col-lg-4 col-md-6 col-12" style="background-color: #e0e0e0; padding: 15px;">
                    <h2>Columna 3</h2>
                    <p> la columna 3.</p>
                </div>
            </div>
        </div>


            <table class="table table-striped mt-4">
                <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Nombre</td>
                    <td>Correo</td>
                    <td><button class="btn btn-warning">Editar</button></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Nombre</td>
                    <td>Correo</td>
                    <td><button class="btn btn-warning">Editar</button></td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="{{asset('/ pokemon.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Tarjeta pokemon</h5>
                <p class="card-text"></p>
                <a href="#" class="btn btn-primary">Conseguir</a>
            </div>
        </div>


        <h2> Ejercico 4</h2>

        <table class="table table-striped-columns">
            <thead>
            <tr>
                <th scope="col"> NÚMERO</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">APELLIDO</th>
                <th scope="col">CORREO</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>suemy</td>
                <td>aguilar</td>
                <td>suemy@gmail</td>
            </tr>



    @endsection
