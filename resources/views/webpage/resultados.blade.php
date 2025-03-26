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
                            <br>
                            <!-- Resultados de Categorías -->
                            <h3 class="single-post-subtitle">Categorías</h3>
                            @if($categorias->isEmpty())
                                <p class="single-post-paragraph">No se encontraron categorías.</p>
                            @else
                                @foreach($categorias as $categoria)
                                    <div class="single-post">
                                        <h4 class="single-post-title">
                                            <a href="{{ route('webpage.categoriaslist', $categoria->id) }}">{{ $categoria->nombre }}</a>
                                        </h4>
                                    </div>
                                @endforeach
                            @endif

                            <!-- Resultados para Entradas  -->
                            <h3 class="single-post-subtitle">Post</h3>
                            @if($entradas->isEmpty())
                                <p class="single-post-paragraph">No se encontraron resultados.</p>
                            @else
                                <ul class="category-list">
                                    @foreach($entradas as $entrada)
                                        <li>
                                            <a href="{{ route('web-page.show', $entrada->id) }}">{{ $entrada->titulo }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif

                            <br>
                            <a href="{{ route('web-page.principal') }}" class="btn back-link">Regresar</a>
                        </div> <!-- Cierra .singleinner -->
                    </div> <!-- Cierra .single-body -->
                </div> <!-- Cierracolumn  -->

            </div>
        </div> <!-- Cierra container -->
    </div> <!-- Cierracontent -->

@endsection
