@extends('layouts.webpage')

@section('pagina')

    <div class="main-content">
        <div class="main-container">
            <div class="w-row">
                <!-- Sección principal del post -->
                <div class="column w-col w-col-8 w-col-stack">
                    <div class="single-post-body">
                        <div class="single-blog-inner">
                            <h2 class="single-post-title">{{ $titulo ?? 'No hay título' }}</h2>

                            @if (!empty($imagen))
                                <img src="{{ asset('storage/' . $imagen) }}" class="single-post-lower-image" alt="{{ $titulo ?? 'Imagen' }}">
                            @endif

                            <p class="single-post-paragraph">
                                <strong>Descripción:</strong> {{ $descripcion ?? 'Sin Descripción' }}
                            </p>

                            <p class="single-post-paragraph">
                                <strong>Contenido:</strong> {{ $contenido ?? 'Sin contenido' }}
                            </p>

                            <p class="single-post-paragraph">
                                <strong>Categoría:</strong> {{ $categoria ?? 'Sin categoría' }}
                            </p>

                            <p class="single-post-paragraph">
                                <strong>Publicado:</strong> {{ $fecha ?? 'Fecha desconocida' }}
                            </p>
                            <br>
                            <a href="{{ route('web-page.principal') }}" style="color: white;" class="btn social-link">Regresar</a>
                        </div>
                    </div>
                </div>

                <!-- Sección de categorias que está a un costado-->
                <div class="column w-col w-col-4 w-col-stack">
                    <div class="aside">
                        <div class="aside-category">
                            <h4 class="aside-title">Categorías</h4>
                            <ul class="category-list">
                                @foreach($categoriasFijas as $categoria)
                                    <li>
                                        <a href="">
                                            {{ $categoria->nombre }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>


                <div class="aside-post-wrapper">
                    @foreach ($entradasAleatorias as $entrada)
                        <div role="listitem" class="w-dyn-item">
                            <a href="{{ route('web-page.show', ['idEntrada' => $entrada->id]) }}" class="aside-post w-inline-block">
                                <h4 class="heading2">{{ $entrada->titulo }}</h4>
                                <img src="{{ asset('storage/' . $entrada->imagen) }}" alt="{{ $entrada->titulo }}" class="aside-post-img" />
                            </a>
                        </div>
                    @endforeach


                </div>




                </div>
            </div>
        </div>
    </div>

@endsection
