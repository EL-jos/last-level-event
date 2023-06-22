@extends('base')

@section('main')
    <section id="el-breadcrumb" class="el-center-box">
        <div class="el-content-area">
            <div class="el-grid">
                <a href="{{ route('home.page') }}">Accueil /</a>
                <span>Categorie</span>
            </div>
        </div>
    </section>
    <section id="el-popular-products" class="el-center-box">
        <div class="el-content-area">
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
@endsection

@section('scripts')
    @parent
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
