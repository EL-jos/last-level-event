@extends('base')
@php
    $params = collect(explode('/register/', \Illuminate\Support\Facades\URL::current()));
    $event = null;
    if ($params->count() == 2){
        $event = $params[1];
    }
@endphp
@section('title', "S'inscrire")

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
            <form method="post" action="{{ route('register.auth', ['event' => $event]) }}">
                @csrf
                {{--@method($event->exists ? 'put' : 'post')--}}
                <h2>S'inscrire à Last Level Event</h2>
                <div class="el-ligne">
                    <div class="el-colonne el-one">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" value="{{ old('username') }}" />
                        @error('username')
                            <div class="el-error">{{ $message }}</div>
                        @enderror
                    </div>

                </div>
                <div class="el-ligne">
                    <div class="el-colonne">
                        <label for="lastname">Prénom</label>
                        <input type="text" id="lastname" name="lastname" value="{{ old('lastname') }}" />
                        @error('lastname')
                            <div class="el-error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="el-colonne">
                        <label for="name">Nom</label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" />
                        @error('name')
                            <div class="el-error">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="el-ligne">
                    <div class="el-colonne">
                        <label for="email">E-mail</label>
                        <input type="text" id="email" name="email" value="{{ old('email') }}" />
                        @error('email')
                            <div class="el-error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="el-colonne">
                        <label for="phone">Téléphone</label>
                        <input type="text" id="phone" name="phone" placeholder="+243 xxx xxx xxx" value="{{ old('phone') }}" />
                        @error('phone')
                            <div class="el-error">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="el-ligne">
                    <div class="el-colonne el-one">
                        <label for="address">Adresse</label>
                        <input type="text" id="address" name="address" value="{{ old('address') }}" />
                        @error('address')
                        <div class="el-error">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="el-ligne">
                    <div class="el-colonne">
                        <label for="mdp">Mot de passe</label>
                        <input type="password" id="mdp" name="mdp" value="{{ old('mdp') }}" />
                        @error('mdp')
                            <div class="el-error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="el-colonne">
                        <label for="mdp_confirmation">Confirmer le mot de passe</label>
                        <input type="password" id="mdp_confirmation" name="mdp_confirmation" />
                    </div>
                </div>
                <div class="el-ligne el-radio">
                    @foreach($sexes as $sex)
                        <div class="el-colonne">
                            <label for="sex-{{ $sex->id }}">{{ $sex->name }}</label>
                            <input type="radio" name="sex_id" id="sex-{{ $sex->id }}" value="{{ $sex->id }}">
                            @error('sex_id')
                            <div class="el-error">{{ $message }}</div>
                            @enderror
                        </div>
                    @endforeach
                </div>
                <button class="el-btn">S'inscrire</button>
                <p>En cliquant sur "S'inscrire", vous acceptez les <a href="">termes &amp; conditions</a> d'Events et avoir lu les <a href="#">Politique de confidentialité</a>.</p><hr>
                @if($event != null)
                    <p>Vous avez déjà un de compte ? <a href="{{ route('login.page', ['event' => $event]) }}">Se connecter</a></p>
                @else
                    <p>Vous avez déjà un de compte ? <a href="{{ route('login.page') }}">Se connecter</a></p>
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
