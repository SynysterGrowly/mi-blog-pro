 @extends('layouts.app')

    @section('title', 'Practicas')

    @section('content')


            <div class="container d-flex justify-content-center align-items-center vh-100">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="fw-bold text-uppercase text-dark">BIENVENIDO</h1>
                        <br>
                        <div class="card mx-auto" style="max-width: 600px; border: none;">
                             <img src="{{ asset('webpage/images/logogato.png') }}" alt="" class="logo-img" />
                            <br>
                            <div class="card-body text-center">
                                <h2 class="text-dark">CREA Y DISFRUTA</h2>
                                <p class="text-muted">suemy</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


    @endsection
