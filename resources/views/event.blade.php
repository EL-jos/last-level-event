@extends('base')

@section('style')
    <!-- FLIPDOWN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flipdown@0.3.2/dist/flipdown.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flipdown@0.3.2/src/flipdown.min.js"></script>
@endsection

@section('main')
    <section id="el-breadcrumb" class="el-center-box">
        <div class="el-content-area">
            <div class="el-grid">
                <a href="{{ route('home.page') }}">Accueil /</a>
                <a href="{{ route('category.page') }}">Categorie /</a>
                <span>Titre de l'événement</span>
            </div>
        </div>
    </section>
    <section id="el-details-event" class="el-center-box">
        <div class="el-content-area">
            <div class="el-grid">
                <h1 class="el-title-event">Zouhair Zair – Zouhero CASABLANCA</h1>
                <p class="el-price"><i class="fas fa-money-bill-alt"></i> à partir de <span>190 MAD</span></p>

                <img src="{{ asset('assets/img/events/5.jpg') }}" alt="">
                <div class="el-contentainer">
                    <header>Détails de l’évènement</header>
                    <main>
                        <div id="el-counter-down">
                            <div id="flipdown" class="flipdown"></div>
                        </div>
                        <div class="el-event-right">
                            <div class="el-icon el-center-box">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="el-group-title">
                                <h4 class="el-subtitle">Organisé par</h4>
                                <h3 class="el-title">electronic events</h3>
                            </div>
                        </div>
                        <div class="el-event-right">
                            <div class="el-icon el-center-box">
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                            <div class="el-group-title">
                                <h4 class="el-subtitle">Date et heure</h4>
                                <h3 class="el-title">Mardi 26, avr. 2022, 20:00</h3>
                            </div>
                        </div>
                        <div class="el-event-right">
                            <div class="el-icon el-center-box">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="el-group-title">
                                <h4 class="el-subtitle">Localisation</h4>
                                <h3 class="el-title">Megarama, Casablanca</h3>
                            </div>
                        </div>
                        <div class="el-controls-btn">
                            <a href="" class="el-btn el-vip">
                                Acheter le ticket VIP
                            </a>
                            <a href="" class="el-btn">
                                Acheter le ticket Standard
                            </a>
                        </div>
                    </main>
                </div>
                <div class="el-contentainer">
                    <header>À propos de cet évènement</header>
                    <main class="el-descriptif">
                        <p>
                            Le natif du quartier Hay Hassani, HH comme bon semble aux intimes l’appeler, le hero de toute une préfecture, joue une heure trente de spectacle en transportant les spectateurs vers les univers de son enfance au quartier connu par le grand commissariat Dar Al Hamra, le fameux Souk Weld Mina, certes un quartier populaire mais qui a toujours rendu fière ses fils, puis son passage au milieux du show bizz et de la scène, une narration mélancolique qui allie rire, émotion et nostalgie
                        </p>
                    </main>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    @parent
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            let timer = 1702827520;
            let flipdown = new FlipDown(timer,
                {
                    headings: ["Jour", "Heure", "minute", "séconde"]
                })
                .start()
                .ifEnded(() => {
                    document.querySelector('.flipdown').innerHTML = `<h2>Timer is ended</h2>`;
                })
        });
    </script>
    <script>
        const title = document.querySelectorAll('#el-popular-products .el-list');
        title.forEach(item => {
            gsap.from(item, {
                scrollTrigger: {
                    start: 'top bottom',
                    end: 'bottom top',
                    trigger: item,
                    toggleClass: 'animate__fadeInLeft'
                },
            })
        });

        const card = document.querySelectorAll('#el-popular-products .el-card');
        card.forEach(item => {
            gsap.from(item, {
                scrollTrigger: {
                    start: 'top bottom',
                    end: 'bottom top',
                    trigger: item,
                    toggleClass: 'animate__zoomIn'
                },
            })
        });

        gsap.from("#el-sponsors .el-title-section", {
            scrollTrigger: {
                start: 'top bottom',
                end: 'bottom top',
                trigger: "#el-sponsors .el-title-section",
                toggleClass: 'animate__zoomInDown'
            },
        });

        const heros = document.querySelectorAll('#el-heros .el-hero');
        heros.forEach(item => {
            gsap.from(item, {
                scrollTrigger: {
                    start: 'top bottom',
                    end: 'bottom top',
                    trigger: item,
                    toggleClass: 'animate__zoomIn'
                },
            })
        });
        /* gsap.from("#el-sponsors .el-title-section", 1.5, {
            delay: .5,
            scale: 0,
            opacity: 0,
            ease: "expo.out"
        }); */

        const footerRubrique = document.querySelectorAll('footer .el-block li');
        footerRubrique.forEach(item => {
            gsap.from('footer .el-block', {
                scrollTrigger: {
                    start: 'top bottom',
                    end: 'bottom top',
                    trigger: item,
                    toggleClass: 'animate__fadeInLeft'
                },
            });

        });
    </script>
@endsection
