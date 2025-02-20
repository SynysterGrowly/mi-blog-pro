@extends('layouts.webpage')

@section('pagina')


    <section class="home-category">

        <div class="w-layout-blockcontainer main-container w-container">
            <H3>CATEGORIAS</H3>
            <div class="home-category-list-wrapper w-dyn-list">
                <div role="list" class="home-category-list w-dyn-items">

                    @foreach ($categoriasFijas as $categoria)
                        <div role="listitem" class="w-dyn-item">
                            <a data-w-id="e42a7868-a1ff-3fab-a88f-530c4a479735"
                               style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                               href="{{ route('webpage.categoriaslist', ['id' => $categoria->id]) }}"
                               class="tech-category-item w-inline-block">

                                <img alt="{{ $categoria->titulo }}"
                                     src="{{ asset('storage/' . $categoria->imagen) }}"
                                     class="latest-blog-4-col-image"
                                />

                                <div class="tech-text-box">
                                    <h4 class="tech-category-heading">{{ $categoria->nombre }}</h4>
                                    <div class="tech-category-time">{{ $categoria->created_at->format('d M, Y') }}</div>
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
            <H3>ULTIMAS ENTRADAS</H3>
            <div class="latest-blog-4-col-grid-wrapper w-dyn-list">
                <div role="list" class="latest-blog-4-col-grid w-dyn-items">

                    @foreach ($ultimasEntradas as $entrada)
                        <div role="listitem" class="w-dyn-item">
                            <a
                                data-w-id="277833fd-50dd-95f1-8892-1f7359050b3b"
                            <a href="{{ route('web-page.show', ['idEntrada' => $entrada->id]) }}"
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

    <section class="main-blog-section">
        <div class="w-layout-blockcontainer main-container w-container">
            <div class="blog-list-wrapper w-dyn-list">
                <div role="list" class="blog-list w-dyn-items">
                    @foreach ($entradasAleatorias as $entrada)
                        <div
                            data-w-id="82b4cc5a-07f5-97c9-ff5a-9e1cf4b69c19"
                            style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                            role="listitem"
                            class="w-dyn-item"
                        >
                            <a
                                data-w-id="8251edd9-9261-4de3-6c77-dd69fe9ce26a"
                            <a href="{{ route('web-page.show', ['idEntrada' => $entrada->id]) }}"
                                class="blog-list-item w-inline-block"
                            >
                                <img
                                    alt="{{ $entrada->titulo }}"
                                    src="{{ asset('storage/' . $entrada->imagen) }}"
                                    class="blog-main-image"
                                />
                                <div class="blog-meta">
                                    <div class="category-text-style">{{ $entrada->categoriaInfo->nombre}}</div>
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
