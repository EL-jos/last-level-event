@extends('base')
@php

    $lenght = $categories->count();
@endphp
@section('title', 'Recherche')
@section('main')
    <section id="el-breadcrumb" class="el-center-box">
        <div class="el-content-area">
            <div class="el-grid">
                <a href="{{ route('home.page') }}">Accueil /</a>
                @foreach($categories as $category)

                    @if($lenght > 1)
                        @if($loop->index == ($lenght - 1))
                            <span>{{ $category }} /</span>
                        @else
                            <span>{{ $category }} | |</span>
                        @endif
                    @else
                        <span>{{ $category }}</span>
                    @endif

                @endforeach
            </div>
        </div>
    </section>
    <section id="el-popular-products" class="el-center-box">
        <div class="el-content-area">
            <div class="el-grid">
                @forelse($events as $event)
                    <a href="{{ route('event.details.page', $event) }}" class="el-card animate__animated" data-item="@foreach($event->categories as $category) {{ $category->name . ' ' }} @endforeach">
                        <div class="el-box-img">
                            <img src="{{ asset($event->image->path_miniature) }}" alt="" class="el-img">
                        </div>
                        <div class="el-content">
                            <h3 class="el-card-title">{{ $event->title }}</h3>
                            <p class="el-price"><i class="fas fa-money-bill-alt"></i> à partir de <span>{{ $event->prices()->where('type_id', '=', 1)->first()->amount }} $</span></p>
                            <ul class="el-calandar">
                                <li class="el-date">
                                    <p><i class="fas fa-calendar-alt"></i> {{ date('d/m/Y', strtotime($event->date)) }}</p>
                                </li>
                                <li class="el-hour">
                                    <p>{{ date('H:i', strtotime($event->time)) }}</p>
                                </li>
                                <li class="el-duration">
                                    <p><i class="fas fa-clock"></i> {{ $event->duration }}h</p>
                                </li>
                            </ul>
                            <p class="el-localization"><i class="fas fa-map-marker-alt"></i> {{ $event->location }}</p>
                        </div>
                    </a>
                @empty
                    <p style="color: #fff; font-size: var(--font-size-text); font-family: var(--font-text) !important; line-height: var(--line-height-text)">Pas d'événement disponible pour cette catégorie.</p>
                @endforelse
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
