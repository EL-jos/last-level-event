@extends('base')
@php
$params = collect(explode('/login/', \Illuminate\Support\Facades\URL::current()));
$event = null;
if ($params->count() == 2){
    $event = $params[1];
}
@endphp
@section('title', "S'identifier")

@section('style')
    <style>
        #el-sponsors,
        #el-heros{
            display: none;
        }
    </style>
@endsection
@section('main')
    <section id="el-register" class="el-center-box">
        <div class="el-content-area">
            <form method="post" action="{{ route('login.auth', ['event' => $event]) }}">
                @csrf
                <h2>Connectez-vous à Last Level Event</h2>
                <div class="el-ligne">
                    <div class="el-colonne el-one">
                        <label for="email">E-mail</label>
                        <input type="text" id="email" name="email" value="{{ old('email') }}" />
                        @error('email')
                            <div class="el-error">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="el-ligne">
                    <div class="el-colonne el-one">
                        <label for="password">Mot de passe</label>
                        <input type="password" id="mdp" name="password" />
                    </div>
                </div>
                <button class="el-btn">Se connecter</button>
                <hr>
                @if($event != null)
                    <p>Vous n'avez pas de compte ? <a href="{{ route('register.page', ['event' => $event]) }}">S'inscrire</a></p>
                @else
                    <p>Vous n'avez pas de compte ? <a href="{{ route('register.page') }}">S'inscrire</a></p>
                @endif
            </form>
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
