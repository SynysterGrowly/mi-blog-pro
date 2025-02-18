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


    <div class="footer">
        <div class="inner-footer">
            <div class="w-layout-blockcontainer main-container w-container">
                <div id="frenzy100" class="w-layout-layout footer-grid wf-layout-layout">
                    <div id="frenzy107" class="w-layout-cell footer-grid-item">
                        <h4 class="footer-heading">Contact</h4>
                        <a href="mailto:test@gmail.com" class="footer-email-and-phone w-inline-block">
                            <img src="{{ asset('images/email.png') }}" alt="" class="footer-emailphone-icon" />
                            <div class="text-block">hello@frenzy.webflow.io</div>
                        </a>
                    </div>
                    <div id="frenzy108" class="w-layout-cell footer-grid-item">
                        <h4 class="footer-heading">Socials</h4>
                        <div class="foot-socials">
                            <a href="http://www.facebook.com" target="_blank" class="social-link w-inline-block">
                                <img src="{{ asset('images/fb.png') }}" alt="Facebook" class="foot-social-link" />
                            </a>
                            <a href="http://www.twitter.com" target="_blank" class="social-link w-inline-block">
                                <img src="{{ asset('images/twitter.png') }}" alt="Twitter" class="foot-social-link" />
                            </a>
                            <a href="http://www.instagram.com" target="_blank" class="social-link w-inline-block">
                                <img src="{{ asset('images/insta.png') }}" alt="Instagram" class="foot-social-link" />
                            </a>
                        </div>
                    </div>
                    <div id="frenzy109" class="w-layout-cell footer-grid-item">
                        <h4 class="footer-heading">Newsletter</h4>
                        <p class="footer-text">Stay ahead of the curve with our exclusive daily newsletter.</p>
                        <div class="w-form">
                            <form id="email-form" method="post" action="#" class="form">
                                <input class="subscribe-field w-input" maxlength="256" name="email" placeholder="Your e-mail" type="email" id="email" required />
                                <input type="submit" class="submit-button w-button" value="Subscribe" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-layout-blockcontainer main-container w-container">
            <div class="copyright">
                <div class="copyright-text">© 2024 Frenzy - HTML Template. Made by Max Themes</div>
            </div>
        </div>
    </div>



    <script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/plugins.js') }}" type="text/javascript"></script>

    </body>
    </html>
@endsection
