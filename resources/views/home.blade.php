@extends('base')

@section('sliders')
    <section id="el-sliders" class="el-center-box">
        <div id="el-bg"></div>
        <div id="el-particules"></div>
        <div class="el-content-area">
            <div class="owl-carousel owl-theme">
                <img src="{{ asset('assets/img/events/1.jpg') }}" alt="">
                <img src="{{ asset('assets/img/events/2.jpg') }}" alt="">
                <img src="{{ asset('assets/img/events/3.jpg') }}" alt="">
                <img src="{{ asset('assets/img/events/4.jpg') }}" alt="">
            </div>
        </div>
    </section>
@endsection

@section('main')
    <section id="el-popular-products" class="el-center-box">
        <div class="el-content-area">
            <div class="el-title-and-filter">
                <ul>
                    <li class="el-list el-active animate__animated" data-filter="Théatre & Humour">Théatre & Humour</li>
                    <li class="el-list animate__animated" data-filter="Concerts & Festival">Concerts & Festival</li>
                    <li class="el-list animate__animated" data-filter="Famille & loisirs">Famille & loisirs</li>
                    <li class="el-list animate__animated" data-filter="Sport">Sport</li>
                </ul>
            </div>
            <div class="el-grid">
                <a href="{{ route('article.page') }}" class="el-card animate__animated" data-item="Théatre & Humour">
                    <div class="el-box-img">
                        <img src="{{ asset('assets/img/events/1.jpg') }}" alt="" class="el-img">
                    </div>
                    <div class="el-content">
                        <h3 class="el-card-title">Boudchart à Rabat - Théâtre Mohammed V</h3>
                        <p class="el-price"><i class="fas fa-money-bill-alt"></i> à partir de <span>190 MAD</span></p>
                        <ul class="el-calandar">
                            <li class="el-date">
                                <p><i class="fas fa-calendar-alt"></i> mar 13 juin</p>
                            </li>
                            <li class="el-hour">
                                <p>20h30</p>
                            </li>
                            <li class="el-duration">
                                <p><i class="fas fa-clock"></i> 2h</p>
                            </li>
                        </ul>
                        <p class="el-localization"><i class="fas fa-map-marker-alt"></i> Thêatre national Mohammed V, Rabat</p>
                    </div>
                </a>
                <a href="{{ route('article.page') }}" class="el-card animate__animated" data-item="Concerts & Festival">
                    <div class="el-box-img">
                        <img src="{{ asset('assets/img/events/2.jpg') }}" alt="" class="el-img">
                    </div>
                    <div class="el-content">
                        <h3 class="el-card-title">Boudchart à Rabat - Théâtre Mohammed V</h3>
                        <p class="el-price"><i class="fas fa-money-bill-alt"></i> à partir de <span>190 MAD</span></p>
                        <ul class="el-calandar">
                            <li class="el-date">
                                <p><i class="fas fa-calendar-alt"></i> mar 13 juin</p>
                            </li>
                            <li class="el-hour">
                                <p>20h30</p>
                            </li>
                            <li class="el-duration">
                                <p><i class="fas fa-clock"></i> 2h</p>
                            </li>
                        </ul>
                        <p class="el-localization"><i class="fas fa-map-marker-alt"></i> Thêatre national Mohammed V, Rabat</p>
                    </div>
                </a>
                <a href="{{ route('article.page') }}" class="el-card animate__animated" data-item="Concerts & Festival">
                    <div class="el-box-img">
                        <img src="{{ asset('assets/img/events/3.jpg') }}" alt="" class="el-img">
                    </div>
                    <div class="el-content">
                        <h3 class="el-card-title">Boudchart à Rabat - Théâtre Mohammed V</h3>
                        <p class="el-price"><i class="fas fa-money-bill-alt"></i> à partir de <span>190 MAD</span></p>
                        <ul class="el-calandar">
                            <li class="el-date">
                                <p><i class="fas fa-calendar-alt"></i> mar 13 juin</p>
                            </li>
                            <li class="el-hour">
                                <p>20h30</p>
                            </li>
                            <li class="el-duration">
                                <p><i class="fas fa-clock"></i> 2h</p>
                            </li>
                        </ul>
                        <p class="el-localization"><i class="fas fa-map-marker-alt"></i> Thêatre national Mohammed V, Rabat</p>
                    </div>
                </a>
                <a href="{{ route('article.page') }}" class="el-card animate__animated" data-item="Famille & loisirs">
                    <div class="el-box-img">
                        <img src="{{ asset('assets/img/events/4.jpg') }}" alt="" class="el-img">
                    </div>
                    <div class="el-content">
                        <h3 class="el-card-title">Boudchart à Rabat - Théâtre Mohammed V</h3>
                        <p class="el-price"><i class="fas fa-money-bill-alt"></i> à partir de <span>190 MAD</span></p>
                        <ul class="el-calandar">
                            <li class="el-date">
                                <p><i class="fas fa-calendar-alt"></i> mar 13 juin</p>
                            </li>
                            <li class="el-hour">
                                <p>20h30</p>
                            </li>
                            <li class="el-duration">
                                <p><i class="fas fa-clock"></i> 2h</p>
                            </li>
                        </ul>
                        <p class="el-localization"><i class="fas fa-map-marker-alt"></i> Thêatre national Mohammed V, Rabat</p>
                    </div>
                </a>
                <a href="{{ route('article.page') }}" class="el-card animate__animated" data-item="Sport">
                    <div class="el-box-img">
                        <img src="{{ asset('assets/img/events/5.jpg') }}" alt="" class="el-img">
                    </div>
                    <div class="el-content">
                        <h3 class="el-card-title">Boudchart à Rabat - Théâtre Mohammed V</h3>
                        <p class="el-price"><i class="fas fa-money-bill-alt"></i> à partir de <span>190 MAD</span></p>
                        <ul class="el-calandar">
                            <li class="el-date">
                                <p><i class="fas fa-calendar-alt"></i> mar 13 juin</p>
                            </li>
                            <li class="el-hour">
                                <p>20h30</p>
                            </li>
                            <li class="el-duration">
                                <p><i class="fas fa-clock"></i> 2h</p>
                            </li>
                        </ul>
                        <p class="el-localization"><i class="fas fa-map-marker-alt"></i> Thêatre national Mohammed V, Rabat</p>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <section id="el-statistic" class="el-center-box">
        <div class="el-content-area">
            <div class="el-grid">
                <article class="el-counter">
                    <h3 class="el-number">37</h3>
                    <hr>
                    <p>événement organisés</p>
                </article>
                <article class="el-counter">
                    <h3 class="el-number">25771</h3>
                    <hr>
                    <p>utilisateur actifs</p>
                </article>
                <article class="el-counter">
                    <h3 class="el-number">76699</h3>
                    <hr>
                    <p>billets vendus</p>
                </article>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    @parent
    <!-- OWL CAROUSEL -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- COLOR JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/color-thief/2.3.2/color-thief.min.js"></script>
    <script>
        const filters = document.querySelectorAll('.el-list');
        const items = document.querySelectorAll('#el-popular-products .el-card');

        filters.forEach(filter => {

            filter.addEventListener('click', function() {

                filters.forEach(item => item === this ? item.classList.add('el-active') : item.classList.remove('el-active'));

                let dataFilter = this.getAttribute('data-filter');

                items.forEach(item => {

                    item.classList.remove('el-active');
                    item.classList.add('el-hide');

                    if(item.getAttribute('data-item') == dataFilter || dataFilter == "Tous"){

                        item.classList.remove('el-hide');
                        item.classList.add('el-active');

                    }
                });

            });
        });
    </script>

    <script>
        gsap.registerPlugin(ScrollTrigger);

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
    <script src="{{ asset('js/particles.min.js') }}"></script>
    <script src="{{ asset('js/myapp.js') }}"></script>
    <script src="{{ asset('js/sliders.js') }}"></script>
@endsection
