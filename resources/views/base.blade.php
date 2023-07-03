@php
    $routesBGWhite = ['register', 'login', 'contact'];
@endphp
<!DOCTYPE html>
<html lang="fr">
<head>

    <title>@yield('title', 'Last Level Event')</title>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--SEO -->
    <meta name="description" content="@yield('description', "Last Level Event est une société spécialisée dans la vente en ligne de tickets pour les événements. Découvrez une large sélection de concerts, spectacles, festivals et bien plus encore. Réservez vos places en toute simplicité et profitez d'une expérience unique. Ne manquez pas les événements les plus populaires et vivez des moments inoubliables avec Last Level Event.")">
    <link rel="canonical" href="{{ route('home.page') }}">

    <meta name="robots" content="index, follow">
    <meta property="og:title" content="@yield('og_title', 'Last Level Event')">
    <meta property="og:description" content="@yield('og_description',"Last Level Event est une société spécialisée dans la vente en ligne de tickets pour les événements. Découvrez une large sélection de concerts, spectacles, festivals et bien plus encore. Réservez vos places en toute simplicité et profitez d'une expérience unique. Ne manquez pas les événements les plus populaires et vivez des moments inoubliables avec Last Level Event.")">
    <meta property="og:image" content="@yield('og_image', asset('events/logo_fb.png'))">
    <meta property="og:url" content="@yield('og_url', \Illuminate\Support\Facades\URL::current())">
    <meta property="og:type" content="@yield('og_type', "website")">

    <meta property="twitter:title" content="@yield('twitter_title', 'Last Level Event')">
    <meta property="twitter:description" content="@yield('twitter_description',"Last Level Event est une société spécialisée dans la vente en ligne de tickets pour les événements. Découvrez une large sélection de concerts, spectacles, festivals et bien plus encore. Réservez vos places en toute simplicité et profitez d'une expérience unique. Ne manquez pas les événements les plus populaires et vivez des moments inoubliables avec Last Level Event.")">
    <meta property="twitter:image" content="@yield('twitter_image', asset('events/logo_fb.png'))">
    <meta property="twitter:url" content="@yield('twitter_url', \Illuminate\Support\Facades\URL::current())">
    <meta name="twitter:creator" content="@lastlevelevent">

    <!-- JQUERY UI -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <!-- OWL CAROUSEL -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <!-- ANIMATION -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- AOS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <!-- CUSTOM STYLES -->
    <link rel="stylesheet" href="{{ asset('css/owl_carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    @yield('style')
</head>
<body @class(['el-identification' => in_array(explode('/',Request::path())[0], $routesBGWhite)])>
<header id="el-header-page" class="el-center-box">
    <div class="el-content-area">
        <ul>
            <li class="el-open-menu-phone">
                <button onclick="onOpenMenu()" class="el-btn el-center-box">
                    <i class="fas fa-bars"></i>
                </button>
            </li>
            <li class="el-logo">
                <!-- <a href=" {{ route('home.page') }} "> Last Level Event </a> -->
                <a href=" {{ route('home.page') }} ">
                    <img src="{{ asset('assets/svg/logo.svg') }}" alt="" />
                </a>
            </li>
            <li class="el-menu-desktop">
                <nav>
                    <ul>
                        <li><a href="{{ route('category.page', http_build_query(['ids' => [20, 21]])) }}">Théatre & Humour</a></li>
                        <li><a href="{{ route('category.page', http_build_query(['ids' => [13, 36]])) }}">Concerts & Festival</a></li>
                        <li><a href="{{ route('category.page', http_build_query(['ids' => [27, 37]])) }}">Famille & loisirs</a></li>
                        <li><a href="{{ route('category.page', http_build_query(['ids' => [38]])) }}">Sport</a></li>
                    </ul>
                </nav>
            </li>
            <li class="el-checkout">
                <a href="{{ route('register.page') }}" class="el-btn el-center-box"><i class="fas fa-user-plus"></i></a>
            </li>
        </ul>
    </div>
</header>
@yield('sliders')
<main id="page">
    @yield('main')
    <section id="el-sponsors" class="el-center-box">
        <div class="el-content-area">
            <h2 class="el-title-section animate__animated"> <span>Partners & Sponsors</span> Sponsor officiel</h2>
            <div class="el-grid">
                <article class="el-sponsor">
                    <img src="{{ asset('assets/img/sponsors/p-1.png') }}" alt="">
                </article>
                <article class="el-sponsor">
                    <img src="{{ asset('assets/img/sponsors/p-2.png') }}" alt="">
                </article>
                <article class="el-sponsor">
                    <img src="{{ asset('assets/img/sponsors/p-3.png') }}" alt="">
                </article>
                <article class="el-sponsor">
                    <img src="{{ asset('assets/img/sponsors/p-4.png') }}" alt="">
                </article>
                <article class="el-sponsor">
                    <img src="{{ asset('assets/img/sponsors/p-5.png') }}" alt="">
                </article>
                <article class="el-sponsor">
                    <img src="{{ asset('assets/img/sponsors/p-6.png') }}" alt="">
                </article>
                <article class="el-sponsor">
                    <img src="{{ asset('assets/img/sponsors/p-7.png') }}" alt="">
                </article>
                <article class="el-sponsor">
                    <img src="{{ asset('assets/img/sponsors/p-8.png') }}" alt="">
                </article>
            </div>
        </div>
    </section>
    <section id="el-heros" class="el-center-box">
        <div class="el-content-area">
            <div class="el-grid">
                <article class="el-hero animate__animated">
                    <div class="el-icon"><i class="fas fa-medal"></i></div>
                    <h3 class="el-hero-title">Nos engagements</h3>
                    <p>Billetterie officielle <br> Des tickets 100% authentiques</p>
                </article>
                <article class="el-hero animate__animated">
                    <div class="el-icon"><i class="fas fa-shield-alt"></i></div>
                    <h3 class="el-hero-title">Assurance Qualité</h3>
                    <p>Paiement 100% sécurisé</p>
                </article>
                <article class="el-hero animate__animated">
                    <div class="el-icon"><i class="fas fa-headset"></i></i></div>
                    <h3 class="el-hero-title">Services client</h3>
                    <p>Trouvez immédiatement des réponses à vos questions grâce à notre service de support 24h/7j</p>
                </article>
            </div>
        </div>
    </section>
</main>
<div id="el-container-menu-phone">
    <div class="el-content-area">
        <header>

            <button onclick="onCloseMenu()" class="el-btn" id="el-close-menu-phone"><i class="fas fa-times"></i></button>
        </header>
        <main>
            <ul>
                <li><a href="{{ route('category.page', http_build_query(['ids' => [20, 21]])) }}">Théatre & Humour</a></li>
                <li><a href="{{ route('category.page', http_build_query(['ids' => [13, 36]])) }}">Concerts & Festival</a></li>
                <li><a href="{{ route('category.page', http_build_query(['ids' => [27, 37]])) }}">Famille & loisirs</a></li>
                <li><a href="{{ route('category.page', http_build_query(['ids' => [38]])) }}">Sport</a></li>
            </ul>
        </main>
        <ul class="el-social-links">
            <li><a href="{{ route('register.page') }}" class="el-btn el-center-box"><i class="fas fa-user-plus"></i></a></li>
            <!--<li><a href="" class="el-btn el-center-box"><i class="fas fa-shopping-bag"></i></a></li>
            <li><a href="" class="el-btn el-center-box"><i class="fas fa-sun"></i></a></li>-->
        </ul>
        <ul class="el-reseaux-sociaux">
            <li><a href="https://www.facebook.com" target="_blank" class="el-center-box"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="https://www.instagram.com" target="_blank" class="el-center-box"><i class="fab fa-instagram"></i></a></li>
            <li><a href="https://www.twitter.com" target="_blank" class="el-center-box"><i class="fab fa-twitter"></i></a></li>
            <li><a href="https://www.linkedin.com" target="_blank" class="el-center-box"><i class="fab fa-linkedin-in"></i></a></li>
            <li><a href="https://www.youtube.com" target="_blank" class="el-center-box"><i class="fab fa-youtube"></i></a></li>
        </ul>
    </div>
</div>
<footer class="el-center-box">
    <div class="el-content-area">
        <div class="el-grid">
            <div class="el-block">
                <h2>À propos</h2>
                <ul>
                    <li class="animate__animated"><a href="{{ route('about.page') }}">Qui sommes-nous ?</a></li>
                    <li class="animate__animated"><a href="{{ route('faq.page') }}">Centre d'aide</a></li>
                    <li class="animate__animated"><a href="{{ route('faq.page') }}">FAQ</a></li>
                    <li class="animate__animated"><a href="{{ route('contact.page') }}">Contactez-nous</a></li>
                </ul>
            </div>
            <div class="el-block">
                <h2>Liens utiles</h2>
                <ul>
                    <li class="animate__animated"><a href="{{ route('login.page') }}">S'identifier ?</a></li>
                    <li class="animate__animated"><a href="{{ route('register.page') }}">S'inscrire</a></li>
                    <li class="animate__animated"><a href="{{ route('confidentialite.page') }}">Politique de confidentialité</a></li>
                    <li class="animate__animated"><a href="{{ route('confidentialite.page') }}">Terme et conditions</a></li>
                </ul>
            </div>
            <div class="el-block">
                <h2>Suivez-nous</h2>
                <ul class="el-reseaux-sociaux">
                    <li class="animate__animated"><a href="https://www.facebook.com" target="_blank" class="el-center-box"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="animate__animated"><a href="https://www.instagram.com" target="_blank" class="el-center-box"><i class="fab fa-instagram"></i></a></li>
                    <li class="animate__animated"><a href="https://www.twitter.com" target="_blank" class="el-center-box"><i class="fab fa-twitter"></i></a></li>
                    <li class="animate__animated"><a href="https://www.linkedin.com" target="_blank" class="el-center-box"><i class="fab fa-linkedin-in"></i></a></li>
                    <li class="animate__animated"><a href="https://www.youtube.com" target="_blank" class="el-center-box"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
        </div>
        <p> © 2023, <strong>LAST LEVEL EVENT</strong>. Tous droits réservés.</p>
    </div>
</footer>
@section('scripts')
    <!-- JQUERY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <!-- FONT AWESOME -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    <!-- WAY POINT -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/3.0.0/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.5/waypoints.min.js"></script>
    <!-- COUNTER UP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    <!-- AOS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>
    <!-- SWEET ALERT -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        AOS.init();
        gsap.registerPlugin(ScrollTrigger);

        $(document).ready(() => {
            $(".el-counter .el-number").counterUp({
                delay: 10,
                time: 2000
            });
        })
        const onOpenMenu = () => {
            document.getElementById('el-container-menu-phone').classList.add('el-active');
        }
        const onCloseMenu = () => {
            document.getElementById('el-container-menu-phone').classList.remove('el-active');
        }
    </script>
    @if(session()->has('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Valide',
                text: "{!! session('success') !!}"
            });
        </script>
    @elseif(session()->has('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Erreur',
                text: "{!! session('error') !!}"
            });
        </script>
    @elseif(session()->has('warning'))
        <script>
            Swal.fire({
                icon: 'warning',
                title: 'Votre attention',
                text: "{!! session('warning') !!}"
            });
        </script>
    @elseif(session()->has('info'))
        <script>
            Swal.fire({
                icon: 'info',
                title: 'Information',
                text: "{!! session('info') !!}"
            });
        </script>
    @elseif($errors->any())
        <script>
            var errorMessages = "<ul>";
            @foreach ($errors->all() as $error)
                errorMessages += "<li>{{ $error }}</li>";
            @endforeach
                errorMessages += "</ul>";

            Swal.fire({
                icon: 'error',
                title: 'Erreur',
                html: errorMessages
            });
        </script>
    @endif
@show

</body>
</html>
