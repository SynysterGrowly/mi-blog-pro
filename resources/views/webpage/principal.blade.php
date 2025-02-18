@extends('layouts.webpage')

@section('pagina')


    <section class="home-category">
        <div class="w-layout-blockcontainer main-container w-container">
            <div class="home-category-list-wrapper w-dyn-list">
                <div role="list" class="home-category-list w-dyn-items">
                    @foreach ($categoriasFijas as $categoria)
                        <div role="listitem" class="w-dyn-item">
                            <a href="{{ url('categoria/' . $categoria->id) }}" class="category-grid-item w-inline-block">
                                <img src="{{ asset($categoria->imagen) }}" alt="{{ $categoria->nombre }}" class="blog-category-main-image">
                                <div class="gradient-overlay"></div>
                                <div class="category-name">{{ $categoria->nombre }}</div>
                                <img src="{{ asset('asset/pokemon.jpg') }}" class="blog-arrow">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>


    <section class="under-category-section">
        <div class="w-layout-blockcontainer main-container w-container">
            <div class="latest-blog-4-col-grid-wrapper w-dyn-list">
                <div role="list" class="latest-blog-4-col-grid w-dyn-items">
                    @foreach ($ultimasEntradas as $entrada)
                        <div role="listitem" class="w-dyn-item">
                            <a
                                data-w-id="277833fd-50dd-95f1-8892-1f7359050b3b"
                                href="{{ route('entrada.lista', $entrada->id) }}"
                                class="latest-blog-4-col-grid-item w-inline-block w-clearfix"
                                style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                            >
                                <img
                                    alt="{{ $entrada->titulo }}"
                                    src="{{ asset('storage/' . $entrada->imagen) }}"
                                    class="latest-blog-4-col-image"
                                />
                                <h4 class="latest-blog-4-col-title">{{ $entrada->titulo }}</h4>
                                <div class="latest-blog-4-col-publish-time">

                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection
