@extends('layouts.webpage')

@section('pagina')

    <section class="blog-section">
        <div class="w-layout-blockcontainer main-container w-container">


            <div class="category-header">
                <h3 class="category-title">
                    Todas las entradas
                </h3>
            </div>

            <div class="blog-list-wrapper w-dyn-list">
                <div role="list" class="blog-list w-dyn-items">

                    @foreach ($entradas as $entrada)
                        <div data-w-id="82b4cc5a-07f5-97c9-ff5a-9e1cf4b69c19"
                             style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                             role="listitem"
                             class="w-dyn-item">

                            <a href="{{ route('web-page.show', ['idEntrada' => $entrada->id]) }}"
                               class="blog-list-item w-inline-block">

                                <img alt="{{ $entrada->titulo }}"
                                     src="{{ asset('storage/' . $entrada->imagen) }}"
                                     class="blog-main-image" />

                                <div class="blog-meta">
                                    <div class="category-text-style">
                                        {{ $entrada->categoriaInfo ? $entrada->categoriaInfo->nombre : 'Sin categoría' }}
                                    </div>
                                    <div class="reading-time">5 min Read</div>
                                    <img src="{{ asset('images/arrow.png') }}" style="opacity: 0;" alt="" class="blog-meta-arrow" />
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
