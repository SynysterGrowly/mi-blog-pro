@extends('layouts.webpage')

@section('pagina')

    <div class="main-content">
        <div class="main-container">
            <div class="w-row">
                <!-- Sección Principal (Resultados para Búsqueda) -->
                <div class="column w-col w-col-8 w-col-stack">
                    <div class="single-post-body">
                        <div class="single-blog-inner">
                            <h2 class="single-post-title">Resultados de búsqueda para "{{ request('query') }}"</h2>

                            <!-- Resultados para Entradas -->
                            <h3 class="single-post-subtitle">Entradas</h3>
                            @if($entradas->isEmpty())
                                <p class="single-post-paragraph">No se encontraron entradas.</p>
                            @else
                                @foreach($entradas as $entrada)
                                    <div class="single-post">
                                        <h4 class="single-post-title">
                                            <a href="{{ route('web-page.show', $entrada->id) }}">{{ $entrada->titulo }}</a>
                                        </h4>

                                @endforeach
                            @endif

                            <!-- Resultados de Categorías -->
                            <h3 class="single-post-subtitle">Categorías</h3>
                            @if($categorias->isEmpty())
                                <p class="single-post-paragraph">No se encontraron categorías.</p>
                            @else
                                <ul class="category-list">
                                    @foreach($categorias as $categoria)
                                        <li>
                                            <a href="{{ route('webpage.categoriaslist', $categoria->id) }}">{{ $categoria->nombre }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif

                            <br>
                            <a href="{{ route('web-page.principal') }}"  style="color: white;" class="btn social-link">Regresar</a>
                        </div> <!-- Cierra .singleinner -->
                    </div> <!-- Cierra .single-body -->
                </div> <!-- Cierracolumn  -->

            </div>
        </div> <!-- Cierra container -->
    </div> <!-- Cierracontent -->

@endsection
