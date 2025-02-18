@extends('layouts.webpage')

@section('pagina')


    <section class="home-category">

        <div class="w-layout-blockcontainer main-container w-container">
            <H3>CATEGORIAS</H3>
            <div class="home-category-list-wrapper w-dyn-list">
                <div role="list" class="home-category-list w-dyn-items">


                    @foreach($categoriasFijas as $categoria)
                            <div role="listitem" class="w-dyn-item">
                                <a
                                    data-w-id="e42a7868-a1ff-3fab-a88f-530c4a479735"
                                    style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                                    href="#"
                                    class="tech-category-item w-inline-block"
                                >
                                    <img
                                        alt=""
                                        src="https://images.ctfassets.net/denf86kkcx7r/4IPlg4Qazd4sFRuCUHIJ1T/f6c71da7eec727babcd554d843a528b8/gatocomuneuropeo-97"
                                        class="tech-category-image"
                                    />
                                    <div class="tech-text-box">
                                        <h4 class="tech-category-heading">{{$categoria->nombre}}</h4>
                                        <div class="tech-category-time">{{$categoria->created_at}}</div>
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
                                href="#"
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
