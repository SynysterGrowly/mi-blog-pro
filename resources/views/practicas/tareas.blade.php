@extends('layouts.app')

@section('title', 'Practicas')

@section('content')

    <div class="container mt-4">
        <div class="row gy-5">

            <h2>Lista de Practicas</h2>


            <div class="container">
                <div class="row">
                    <h2>Ejercicio 2</h2>
                    <div class="col-lg-4 col-md-6 col-12 ">
                        <h2>columna 1</h2>
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


            <div class="container">
                <div class="row">
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
            </div>



            <div class="container">
                <div class="row">
                    <h2> Ejercicio 3</h2>
                    <div class="col-12">
                        <div class="card" style="width: 18rem;">
                            <img src="{{asset('asset/pokemon.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Tarjeta pokemon</h5>
                                <p class="card-text"></p>
                                <a href="#" class="btn btn-primary">Conseguir</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container">
                <div class="row">
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
                        </tbody>
                    </table>
                </div>
            </div>

            <form>
            <div class="mb-3">
                <h2> Ejercicio 5 </h2>
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre" placeholder="Nombre">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Correo electrónico:</label>
                <input type="email" class="form-control" id="email" placeholder="correo@ejemplo.com">
            </div>
            <div class="mb-3">
                <label for="mensaje" class="form-label">Mensaje:</label>
                <textarea class="form-control" id="mensaje" rows="3"></textarea>
            </div>

                <button type="submit" class="btn btn-primary">Guardar</button>
                </form>



        </div>
    </div>
@endsection
