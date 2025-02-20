@extends('layouts.webpage')

@section('pagina')

        <section class="blog-section">
            <div class="w-layout-blockcontainer main-container w-container">
                <div class="blog-list-wrapper w-dyn-list">
                    <div role="list" class="blog-list w-dyn-items">

                        @foreach ($entradas as $entrada)
                            <div role="listitem" class="w-dyn-item"
                                 style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                                <a href="{{ route('web-page.show', ['idEntrada' => $entrada->id]) }}" class="blog-list-item w-inline-block">
                                    <img alt="{{ $entrada->titulo }}"
                                         src="{{ asset('storage/' . $entrada->imagen) }}"
                                         class="blog-main-image" />
                                    <div class="blog-meta">
                                        <div class="category-text-style">
                                            {{ $entrada->categoriaInfo->nombre ?? 'Sin categoría' }}
                                        </div>
                                        <div class="reading-time">5 min Read</div>
                                        <img src="{{ asset('') }}" style="opacity: 0;" alt="" class="blog-meta-arrow" />
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
