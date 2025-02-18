@extends('layouts.webpage')

@section('pagina')
    <section class="blog-section">
        <div class="w-layout-blockcontainer main-container w-container">
            <div class="blog-list-wrapper w-dyn-list">
                <div role="list" class="blog-list w-dyn-items">
                    @foreach ($categorias as $categoria)
                        @php
                            $imagenesCategorias = [
                                'Michinina' => 'asset/totoro.jpg',
                                'Fantasia' => 'asset/nature.jpg',
                                'Terror' => 'asset/pets.jpg',
                                'Romance' => 'asset/sports.jpg',
                                'La novela' => 'asset/tech.jpg',
                                'miedo' => 'asset/travel.jpg',

                            ];
                            $imagen = $imagenesCategorias[$categoria->nombre] ?? 'asset/pokemon.jpg';
                        @endphp

                        <div role="listitem" class="w-dyn-item">
                            <a href="{{ url('categoria/' . $categoria->id) }}" class="blog-list-item w-inline-block">
                                <img src="{{ asset($imagen) }}" alt="{{ $categoria->nombre }}" class="blog-main-image">
                                <div class="blog-meta">
                                    <div class="category-text-style">{{ $categoria->nombre }}</div>
                                    <div class="reading-time">5 min Read</div>
                                    <img src="{{ asset('images/arrow.png') }}" style="opacity: 0;" alt="" class="blog-meta-arrow" />
                                </div>
                                <h4 class="main-blog-title">{{ $categoria->descripcion }}</h4>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
