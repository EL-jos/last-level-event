@extends('base')
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
            <form method="post" action="{{ route('user.store') }}">
                @csrf
                {{--@method($event->exists ? 'put' : 'post')--}}
                <h2>S'inscrire à Last Level Event</h2>
                <div class="el-ligne">
                    <div class="el-colonne el-one">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" />
                    </div>

                </div>
                <div class="el-ligne">
                    <div class="el-colonne">
                        <label for="lastname">Prénom</label>
                        <input type="text" id="lastname" name="lastname" />
                    </div>
                    <div class="el-colonne">
                        <label for="name">Nom</label>
                        <input type="text" id="name" name="name" />
                    </div>
                </div>
                <div class="el-ligne">
                    <div class="el-colonne">
                        <label for="email">E-mail</label>
                        <input type="text" id="email" name="email" />
                    </div>
                    <div class="el-colonne">
                        <label for="phone">Téléphone</label>
                        <input type="text" id="phone" name="phone" />
                    </div>
                </div>
                <div class="el-ligne">
                    <div class="el-colonne el-one">
                        <label for="address">Adresse</label>
                        <input type="text" id="address" name="address" />
                    </div>
                </div>
                <div class="el-ligne">
                    <div class="el-colonne">
                        <label for="mdp">Mot de passe</label>
                        <input type="password" id="mdp" name="mdp" />
                    </div>
                    <div class="el-colonne">
                        <label for="confirm">Confirmer le mot de passe</label>
                        <input type="password" id="confirm" name="confirm" />
                    </div>
                </div>
                <button class="el-btn">S'inscrire</button>
                <p>En cliquant sur "S'inscrire", vous acceptez les <a href="">termes &amp; conditions</a> d'Events et avoir lu les <a href="#">Politique de confidentialité</a>.</p><hr>
                <p>Vous avez déjà un de compte ? <a href="{{ route('login.page') }}">Se connecter</a></p>
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
