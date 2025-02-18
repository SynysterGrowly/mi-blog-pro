<!DOCTYPE html>
<html data-wf-page="6577019a915bb98abc733643">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1" name="viewport"/>

    <title>Frennzy - Blog Template</title>

    <link href="{{asset('webpage/css/normalize.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('webpage/css/layout.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('webpage/css/style.css')}}" rel="stylesheet" type="text/css"/>


    <link href="https://fonts.googleapis.com" rel="preconnect"/>
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous"/>
    <link href="{{asset('webpage/images/favicon.png')}}" rel="shortcut icon" type="image/x-icon"/>
    <link href="{{asset('webpage/images/webclip.png')}}" rel="apple-touch-icon"/>


</head>
<body>
<div class="header">
    <div class="w-layout-blockcontainer main-container w-container">
        <div data-animation="default" data-collapse="medium" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="header-inner w-nav">
            <a href="index.html" aria-current="page" class="logo w-inline-block w--current"><img src="{{ asset('webpage/images/logo.png') }}" alt="" class="logo-img" /></a>
            <nav role="navigation" class="main-menu w-nav-menu">
                <a href="index.html" aria-current="page" class="menu-item w-nav-link w--current">Inicio</a>

                <a href="{{ route('categorias.lista') }}" class="menu-item w-nav-link">Categorias</a>
                <a href="{{ route('entrada.form') }}" class="menu-item w-nav-link">Post</a>

            </nav>
            <div class="menu-button w-nav-button">
                <div class="icon w-icon-nav-menu"></div>
            </div>

            <div class="header-right-side">
                <form action="#" class="search-div w-form">
                    <input class="search-field w-input" maxlength="256" name="query" placeholder="type something" type="search" id="search" required="" /><input type="submit" class="search-button w-button" value="Search" />
                    <img src="{{ asset('webpage/images/search.png') }}" alt="" class="image" />
                </form>
            </div>
        </div>
    </div>
</div>


@yield('pagina')

<div class="footer">
    <div class="inner-footer">
        <div class="w-layout-blockcontainer main-container w-container">
            <div id="frenzy100" class="w-layout-layout footer-grid wf-layout-layout">

                <div id="frenzy107" class="w-layout-cell footer-grid-item">
                    <h4 class="footer-heading">contact</h4>
                    <a href="mailto:test@gmail.com?subject=Your%20Mail" class="footer-email-and-phone w-inline-block">
                        <img src="{{ asset('webpage/images/email.png') }}" alt="" class="footer-emailphone-icon"/>
                        <div class="text-block">hello@frenzy.webflow.io</div>
                    </a>
                    <a href="tel:+1231685496" class="footer-email-and-phone last-phone w-inline-block">
                        <img src="{{ asset('webpage/images/phone.png') }}" alt="" class="footer-emailphone-icon"/>
                        <div class="text-block">+5 (123) 456 789 0</div>
                    </a>
                </div>

                <div id="frenzy108" class="w-layout-cell footer-grid-item">
                    <h4 class="footer-heading">socials</h4>
                    <div class="foot-socials">
                        <a href="http://www.facebook.com" target="_blank" class="social-link w-inline-block"><img
                                src="{{ asset('webpage/images/fb.png') }}" alt="" class="foot-social-link"/></a>
                        <a href="http://www.twitter.com" target="_blank" class="social-link w-inline-block"><img
                                src="{{ asset('webpage/images/twitter.png') }}" alt="" class="foot-social-link"/></a>
                        <a id="frenzy106" href="http://www.instagram.com" target="_blank"
                           class="social-link w-inline-block">
                            <img src="{{ asset('webpage/images/insta.png') }}" alt="" class="foot-social-link"/>
                        </a>
                        <a href="http://www.youtube.com" target="_blank" class="social-link w-inline-block"><img
                                src="{{ asset('webpage/images/you.png') }}" alt="" class="foot-social-link"/></a>
                        <a href="http://www.pinterest.com" target="_blank" class="social-link w-inline-block"><img
                                src="{{ asset('webpage/images/pint.png') }}" alt="" class="foot-social-link"/></a>
                    </div>
                </div>

                <div id="frenzy109" class="w-layout-cell footer-grid-item">
                    <h4 class="footer-heading">Newsletter</h4>
                    <p class="footer-text">Stay ahead of the curve with our exclusive daily newsletter directly in your
                        inbox!</p>
                    <div class="w-form">
                        <form id="email-form" method="post" action="#" aria-label="Form" class="form">
                            <input class="subscribe-field w-input" maxlength="256" name="email-2" data-name="Email 2"
                                   placeholder="your e-mail" type="email" id="email-2" required=""/>
                            <input type="submit" data-wait="Please wait..." class="submit-button w-button"
                                   value="subscribe"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-layout-blockcontainer main-container w-container">
        <div class="copyright">
            <div class="copyright-text">© 2024  Frenzy - HTML Template. Made by <a href="#" class="copyright-text">Max
                    Themes</a></div>
        </div>
    </div>
</div>

<script src="{{asset('webpage/js/webfont.js')}}" type="text/javascript"></script>
<script type="text/javascript">
    WebFont.load({google: {families: ["Manrope:200,300,regular,500,600,700,800"]}});
</script>
<script src="{{asset('webpage/js/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('webpage/js/plugins.js')}}" type="text/javascript"></script>

</body>
</html>
