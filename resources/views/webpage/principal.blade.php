@extends('layouts.webpage')
@section('pagina')
    <section class="home-category">


        <div class="w-layout-blockcontainer main-container w-container">
            <div class="home-category-list-wrapper w-dyn-list">
                <div role="list" class="home-category-list w-dyn-items">

                    @foreach($categoriasFijas as $categoria)
                        <div role="listitem" class="w-dyn-item">
                            <a
                                data-w-id="4cd9ff82-9f16-1c9a-a92d-da3323fc9873"
                                href="{{ route('category.show', $categoria->id) }}"
                                class="category-grid-item w-inline-block"
                            >
                                <img
                                    alt="{{ $categoria->name }}"
                                    src="{{ asset('images/' . $categoria->image) }}"
                                    class="blog-category-main-image"
                                />
                                <div class="gradient-overlay"></div>
                                <div class="category-name">{{ $categoria->name }}</div>
                                <img
                                    src="{{ asset('images/readmore.png') }}"
                                    alt="Read More"
                                    class="blog-arrow"
                                />
                            </a>
                        </div>
                    @endforeach


                    <div role="listitem" class="w-dyn-item">
                        <a
                            data-w-id="4cd9ff82-9f16-1c9a-a92d-da3323fc9873"
                            style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                            href="category.html"
                            class="category-grid-item w-inline-block"
                        >
                            <img
                                alt=""
                                src="images/post21.jpg"
                                class="blog-category-main-image"
                                style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                            />
                            <div class="gradient-overlay"></div>
                            <div class="category-name">Nature</div>
                            <img
                                src="images/readmore.png"
                                style="opacity: 0; transform: translate3d(0px, 60%, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                                alt=""
                                class="blog-arrow"
                            />
                        </a>
                    </div>
                    <div role="listitem" class="w-dyn-item">
                        <a
                            data-w-id="4cd9ff82-9f16-1c9a-a92d-da3323fc9873"
                            style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                            href="category.html"
                            class="category-grid-item w-inline-block"
                        >
                            <img
                                alt=""
                                src="images/post24.jpg"
                                class="blog-category-main-image"
                                style=""
                            />
                            <div class="gradient-overlay"></div>
                            <div class="category-name">Gaming</div>
                            <img
                                src="images/readmore.png"
                                style="opacity: 0; transform: translate3d(0px, 60%, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                                alt=""
                                class="blog-arrow"
                            />
                        </a>
                    </div>
                    <div role="listitem" class="w-dyn-item">
                        <a
                            data-w-id="4cd9ff82-9f16-1c9a-a92d-da3323fc9873"
                            style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                            href="category.html"
                            class="category-grid-item w-inline-block"
                        >
                            <img
                                alt=""
                                src="images/post25.jpg"
                                class="blog-category-main-image"
                                style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                            />
                            <div class="gradient-overlay"></div>
                            <div class="category-name">Business</div>
                            <img
                                src="images/readmore.png"
                                style="opacity: 0; transform: translate3d(0px, 60%, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                                alt=""
                                class="blog-arrow"
                            />
                        </a>
                    </div>
                    <div role="listitem" class="w-dyn-item">
                        <a
                            data-w-id="4cd9ff82-9f16-1c9a-a92d-da3323fc9873"
                            style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                            href="category.html"
                            class="category-grid-item w-inline-block"
                        >
                            <img
                                alt=""
                                src="images/post1.jpg"
                                sizes="(max-width: 479px) 100vw, (max-width: 767px) 46vw, (max-width: 1439px) 22vw, 151px"
                                class="blog-category-main-image"
                                style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                            />
                            <div class="gradient-overlay"></div>
                            <div class="category-name">Science</div>
                            <img
                                src="images/readmore.png"
                                style="opacity: 0; transform: translate3d(0px, 60%, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                                alt=""
                                class="blog-arrow"
                            />
                        </a>
                    </div>
                    <div role="listitem" class="w-dyn-item">
                        <a
                            data-w-id="4cd9ff82-9f16-1c9a-a92d-da3323fc9873"
                            style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                            href="category.html"
                            class="category-grid-item w-inline-block"
                        >
                            <img
                                alt=""
                                src="images/post11.jpg"
                                class="blog-category-main-image"
                                style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                            />
                            <div class="gradient-overlay"></div>
                            <div class="category-name">Education</div>
                            <img
                                src="images/readmore.png"
                                style="opacity: 0; transform: translate3d(0px, 60%, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                                alt=""
                                class="blog-arrow"
                            />
                        </a>
                    </div>
                    <div role="listitem" class="w-dyn-item">
                        <a
                            data-w-id="4cd9ff82-9f16-1c9a-a92d-da3323fc9873"
                            style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                            href="category.html"
                            class="category-grid-item w-inline-block"
                        >
                            <img
                                alt=""
                                loading="lazy"
                                src="images/post2.jpg"
                                class="blog-category-main-image"
                                style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                            />
                            <div class="gradient-overlay"></div>
                            <div class="category-name">Sport</div>
                            <img
                                src="images/readmore.png"
                                style="opacity: 0; transform: translate3d(0px, 60%, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                                alt=""
                                class="blog-arrow"
                            />
                        </a>
                    </div>
                    <div role="listitem" class="w-dyn-item">
                        <a
                            data-w-id="4cd9ff82-9f16-1c9a-a92d-da3323fc9873"
                            style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                            href="category.html"
                            class="category-grid-item w-inline-block"
                        >
                            <img
                                alt=""
                                loading="lazy"
                                src="images/post4.jpg"
                                class="blog-category-main-image"
                                style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                            />
                            <div class="gradient-overlay"></div>
                            <div class="category-name">Travel</div>
                            <img
                                src="images/readmore.png"
                                style="opacity: 0; transform: translate3d(0px, 60%, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                                alt=""
                                class="blog-arrow"
                            />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
