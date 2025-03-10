@extends('layouts.webpage')

@section('pagina')

    <section class="categories-section">
        <div class="w-layout-blockcontainer main-container w-container">
            <div class="home-category-list-wrapper w-dyn-list">
                <div role="list" class="home-category-list category-page-list w-dyn-items">

                    @foreach ($categoriasFijas as $categoria)
                        <div role="listitem" class="w-dyn-item">
                            <a data-w-id="frenzy110"
                               href="{{ route('webpage.categoriaslist', ['idCategoria' => $categoria->id]) }}"
                               class="category-grid-item category-page-grid-item w-inline-block">

                                <!-- Imagen de la categoría -->
                                <img alt="{{ $categoria->nombre }}"
                                     src="{{ $categoria->imagen ? asset('storage/' . $categoria->imagen) : asset('images/default.jpg') }}"
                                     class="blog-category-main-image"
                                     loading="lazy" />

                                <div class="gradient-overlay"></div>

                                <!-- Nombre de la categoría con el formato ya con html -->
                                <div class="category-name">{!! $categoria->nombre !!}</div>

                                <img src="{{ asset('images/readmore.png') }}"
                                     style="opacity: 0; transform: translate3d(0px, 60%, 0px) scale3d(1, 1, 1);"
                                     alt="" class="blog-arrow" />
                            </a>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>

    </section>

@endsection
