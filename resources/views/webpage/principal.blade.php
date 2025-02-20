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
                               class="tech-category-item w-inline-block">
                                <img alt="{{ $categoria->nombre }}"
                                     src="{{ asset('storage/' . $categoria->imagen) }}"
                                     class="latest-blog-4-col-image" />
                                <div class="tech-text-box">
                                    <h4 class="tech-category-heading">{{ $categoria->nombre }}</h4>
                                    <div class="tech-category-time">{{ $categoria->created_at }}</div>
                                </div>
                                <div class="tech-overlay"></div>
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
                                <img alt="{{ $entrada->titulo }}"
                                     src="{{ asset('storage/' . $entrada->imagen) }}"
                                     class="latest-blog-4-col-image" />
                                <h4 class="latest-blog-4-col-title">{{ $entrada->titulo }}</h4>
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
                                <img alt="{{ $entrada->titulo }}"
                                     src="{{ asset('storage/' . $entrada->imagen) }}"
                                     class="blog-main-image" />
                                <div class="blog-meta">
                                    <div class="category-text-style">{{ $entrada->categoriaInfo->nombre }}</div>
                                    <div class="reading-time">5 min Read</div>
                                </div>
                                <h4 class="main-blog-title">{{ $entrada->titulo }}</h4>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection
