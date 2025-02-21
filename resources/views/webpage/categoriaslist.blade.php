@extends('layouts.webpage')

@section('pagina')

    <div class="footer">
        <div class="inner-footer">
            <div class="w-layout-blockcontainer main-container w-container">
                <div id="frenzy100" class="w-layout-layout footer-grid wf-layout-layout">

                    <div id="frenzy107" class="w-layout-cell footer-grid-item">


                        <h3 class="category-title">
                            {{ $categoriaSeleccionada->nombre ?? 'Todas las categorías' }}
                        </h3>

                        <div class="category-entries">
                            @forelse ($entradasFiltradas as $entrada)
                                <div role="listitem" class="w-dyn-item">

                                    <a href="{{ route('web-page.show', ['idEntrada' => $entrada->id]) }}"
                                       class="blog-list-item w-inline-block">

                                        <img alt="{{ $entrada->titulo }}"
                                             src="{{ asset('storage/' . $entrada->imagen) }}"
                                             class="blog-main-image"
                                        />

                                        <div class="blog-meta">
                                            <div class="category-text-style">
                                                {{ $entrada->categoriaInfo ? $entrada->categoriaInfo->nombre : 'Sin categoría' }}
                                            </div>
                                            <div class="reading-time">5 min Read</div>
                                        </div>

                                        <h4 class="main-blog-title">{{ $entrada->titulo }}</h4>
                                    </a>
                                </div>
                            @empty
                                <p>No hay entradas disponibles en esta categoría.</p>
                            @endforelse
                        </div> <!-- Cierra category-entries -->

                    </div> <!-- Cierra frenzy107 -->

                </div> <!-- Cierra frenzy100 -->

            </div> <!-- Cierra main-container -->
        </div> <!-- Cierra inner-footer -->
    </div> <!-- Cierra footer -->

@endsection
