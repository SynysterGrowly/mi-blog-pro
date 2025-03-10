@extends('layouts.webpage')

@section('pagina')

    <section class="blog-section">
        <div class="w-layout-blockcontainer main-container w-container">

            <div class="blog-list-wrapper w-dyn-list">
                <div role="list" class="blog-list w-dyn-items">
                    @forelse ($entradasFiltradas as $entrada)
                        <div role="listitem" class="w-dyn-item">
                            <a href="{{ route('web-page.show', ['idEntrada' => $entrada->id]) }}"
                               class="blog-list-item w-inline-block">

                                <img alt="{{ strip_tags($entrada->titulo) }}"
                                     src="{{ asset('storage/' . $entrada->imagen) }}"
                                     class="blog-main-image"
                                />

                                <div class="blog-meta">
                                    <div class="category-text-style">
                                        {{ $entrada->categoriaInfo ? strip_tags($entrada->categoriaInfo->nombre) : 'Sin categoría' }}
                                    </div>
                                    <div class="reading-time">5 min Read</div>
                                </div>

                                <h4 class="main-blog-title">{{ strip_tags($entrada->titulo) }}</h4>
                            </a>
                        </div>
                    @empty
                        <p>No hay entradas disponibles en esta categoría.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </section>

@endsection
