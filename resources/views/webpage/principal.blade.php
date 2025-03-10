@extends('layouts.webpage')

@section('pagina')

    <section class="home-category">
        <div class="w-layout-blockcontainer main-container w-container">
            <h3>CATEGORÍAS</h3>
            <div class="home-category-list-wrapper w-dyn-list">
                <div role="list" class="home-category-list w-dyn-items">
                    @foreach ($categoriasFijas as $categoria)
                        <div role="listitem" class="w-dyn-item">
                            <a href="{{ route('webpage.categoriaslist', ['idCategoria' => $categoria->id]) }}"
                               class="category-grid-item w-inline-block"
                               data-w-id="4cd9ff82-9f16-1c9a-a92d-da3323fc9873"
                               style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">

                                <!-- Imagen de la categoría -->
                                <img alt="{{ strip_tags($categoria->nombre) }}"
                                     src="{{ asset('storage/' . $categoria->imagen) }}"
                                     class="blog-category-main-image"
                                     style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" />

                                <div class="gradient-overlay"></div>
                                <div class="category-name">{{ strip_tags($categoria->nombre) }}</div>

                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>


    <section class="under-category-section">
        <div class="w-layout-blockcontainer main-container w-container">
            <h3>ÚLTIMAS ENTRADAS</h3>
            <div class="latest-blog-4-col-grid-wrapper w-dyn-list">
                <div role="list" class="latest-blog-4-col-grid w-dyn-items">
                    @foreach ($ultimasEntradas as $entrada)
                        <div role="listitem" class="w-dyn-item">
                            <a href="{{ route('web-page.show', ['idEntrada' => $entrada->id]) }}"
                               class="latest-blog-4-col-grid-item w-inline-block w-clearfix">

                                <!-- Imagen para entrada -->
                                <img alt="{{ strip_tags($entrada->titulo) }}"
                                     src="{{ asset('storage/' . $entrada->imagen) }}"
                                     class="latest-blog-4-col-image" />

                                <!-- Contenedor del texto -->
                                <div class="latest-blog-text">
                                    <h4 class="latest-blog-4-col-title">{{ strip_tags($entrada->titulo) }}</h4>

                                    <!-- Nombre categoría -->
                                    <div class="latest-blog-category">
                                        {{ $entrada->categoriaInfo ? strip_tags($entrada->categoriaInfo->nombre) : 'Sin categoría' }}
                                    </div>

                                    <!-- Fecha  -->
                                    <div class="latest-blog-4-col-publish-time">
                                        {{ $entrada->created_at->format('M d, Y') }}
                                    </div>
                                </div>

                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>


    <section class="main-blog-section">
        <div class="w-layout-blockcontainer main-container w-container">
            <div class="blog-list-wrapper w-dyn-list">
                <div role="list" class="blog-list w-dyn-items">
                    @foreach ($entradasAleatorias as $entrada)
                        <div role="listitem" class="w-dyn-item">
                            <a href="{{ route('web-page.show', ['idEntrada' => $entrada->id]) }}"
                               class="blog-list-item w-inline-block">
                                <img alt="{{ strip_tags($entrada->titulo) }}"
                                     src="{{ asset('storage/' . $entrada->imagen) }}"
                                     class="blog-main-image" />
                                <div class="blog-meta">
                                    <div class="category-text-style">
                                        {{ strip_tags($entrada->categoriaInfo->nombre) }}
                                    </div>
                                    <div class="reading-time">5 min Read</div>
                                </div>
                                <h4 class="main-blog-title">{{ strip_tags($entrada->titulo) }}</h4>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection
