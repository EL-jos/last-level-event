@extends('base')

@section('title', "Contact")

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
            <form method="post" action="{{ route('contact.page') }}">
                @csrf
                <h2>Nous joindre</h2>

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
                        <label for="subject">Sujet</label>
                        <select id="subject" name="subject">
                            <option disabled selected value=""></option>
                            <option @if(old('subject') == "Suggestion") selected @endif value="Suggestion">Suggestion</option>
                            <option @if(old('subject') == "Réclamation") selected @endif value="Réclamation">Réclamation</option>
                            <option @if(old('subject') == "Demande d'information") selected @endif value="Demande d'information">Demande d'information</option>
                        </select>
                        @error('subject')
                        <div class="el-error">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="el-ligne">
                    <div class="el-colonne  el-one">
                        <label for="content">Message</label>
                        <textarea id="content" name="content">{{ old('content') }}</textarea>
                        @error('content')
                            <div class="el-error">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button class="el-btn">Envoyer</button>
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
