@extends('base')

@section('title', "Qui sommes-nous")

@section('main')
    <section id="el-breadcrumb" class="el-center-box">
        <div class="el-content-area">
            <div class="el-grid">
                <a href="{{ route('home.page') }}">Accueil /</a>
                <span>Qui sommes-nous ?</span>
            </div>
        </div>
    </section>
    <section id="el-about" class="el-center-box">
        <div class="el-content-area">
            <div class="accordion">
                <h3>Qui sommes-nous ? Cabine insonorisée</h3>
                <div>
                    <p>Nous sommes une équipe qui aime soutenir la communauté à travers des événements</p>
                </div>
                <h3>Objectif et mission</h3>
                <div>
                    <p>Notre objectif est de fournir une solution de billetterie événementielle puissante et abordable qui peut gérer des événements de toute taille et complexité sans problème.</p>
                </div>
            </div>
            <p>Chez lastlevelevent.com , nous nous efforçons de donner la priorité aux fans. Chaque jour, nous écoutons vos commentaires et travaillons pour améliorer votre expérience avant, pendant et après les événements.</p>
            <p>Maintenant, vous avez plus d’options que jamais pour profiter des événements live, et les choses ne font que s’améliorer.</p>
            <p>Nous apportons de réels changements et vous accordons la priorité à tout ce que nous faisons. Voici juste un avant-goût de ce que nous préparons…</p>
            <p>Lorsque vous achetez un billet, vous soutenez vos événements live préférés, comme votre comédien préférée, les spectacles, les concerts et les divertissements familiaux. Nous voulons que vous sachiez comment fonctionne le processus de billetterie et comment nous pensons qu’il pourrait être meilleur pour les fans, les interprètes, et les artistes.</p>
            <p>Nous nous concentrons sur l’utilisation de nouvelles technologies et la création de nouveaux produits qui garantissent que les billets finissent entre les mains de vrais fans.</p>
            <p>Chaque jour, des millions de fans font confiance à lastlevelevent.com pour acheter et vendre des billets pour des expériences live inoubliables. Nous travaillons en permanence pour offrir aux fans une expérience d’achat de billets fluide, sûre et équitable.</p>
            <div class="accordion">
                <h3>À qui appartiennent les billets pour vos événements live préférés ?</h3>
                <div>
                    <p>Les billets vendus sur lastlevelevent.com appartiennent aux personnes qui organisent l’événement -alias « organisateur d’événement ».</p>
                    <p>lastlevelevent.com est le plus grand marché de billets en RD Congo, et nous travaillons en partenariat avec les organisateurs d’événements pour rendre leurs billets disponibles via notre marché, qui comprend des sites Web, des applications et des centres d’assistance aux fans dans tous les pays.</p>
                </div>
                <h3>La différence entre une date de pré-vente et une date de mise en vente</h3>
                <div>
                    <p>Avant la mise en vente des billets, les organisateurs d’événements nous indiquent le nombre de billets qu’ils souhaitent mettre à disposition, le prix du billet et la date à laquelle ils souhaitent que la ou les ventes commencent.</p>
                    <p>Dans de nombreux cas, vous pouvez voir les ventes de billets répertoriées en tant que « Pré-vente » ou « En vente grand public ». Les organisateurs d’événements peuvent organiser ces pré-ventes anticipées dans le cadre d’efforts promotionnels qu’ils ont avec un tiers, tels que l’offre de billets à certains titulaires de cartes bancaires  en échange de la société émettrice de cartes bancaires faisant la promotion de l’événement auprès de ses clients, ou dans le cadre de fidélisation des fans pour obtenir des billets directement entre les mains de leurs meilleurs fans qui sont membres d’un fan club ou qui se sont pré-inscrits. Les ventes grand public, quant à elles, sont ouvertes à tous les fans et commencent généralement un jour après la fin de toute pré-vente.</p>
                    <p>ASTUCE : lastlevelevent.com vous avertira des pré-ventes ou des mises en vente grand public à venir et vous enverra des annonces d’événements si vous « favorisez » un artiste, un lieu ou un événement dans votre compte lastlevelevent.com.</p>
                </div>
                <h3>Le coût d’un billet : prix, frais et taxes</h3>
                <div>
                    <p>Les organisateurs d’événements fixent le prix des billets Standard, Platine et VIP.</p>
                    <p>Les frais, y compris notre part des frais, varient selon l’événement et couvrent les coûts des services que nous fournissons aux sites, aux promoteurs et aux fans, y compris le développement de nouvelles technologies, le support client, la prévention de la fraude, le marketing et d’autres services.</p>
                    <p>Les prix des billets incluent également les taxes imposées par l’État.</p>
                </div>
                <h3>Livraison des billets et entrée</h3>
                <div>
                    <p>Une fois que vous avez acheté un billet, accéder à vos événements live préférés devrait être facile.</p>
                    <p>Nous proposons aux organisateurs d’événements plusieurs façons de livrer des billets aux fans, y compris des billets mobiles, call pickup, l’impression à domicile et le courrier. Ces options sont toujours sélectionnées par l’organisateur de l’événement.</p>
                    <p>De plus en plus, les organisateurs d’événements choisissent d’utiliser notre billetterie mobile, comme option exclusive pour entrer dans leurs spectacles. La billetterie mobile, utilise un ticket numérique crypté qui élimine la fraude et la contrefaçon des tickets en rendant impossible la copie et la vente de faux tickets sur papier.</p>
                    <p>Vous pouvez toujours consulter l’option de livraison que vous avez sélectionnée et accéder à vos billets pour les événements à entrée mobile depuis votre compte sur notre site Web ou dans l’application lastlevelevent.com. Vous n’avez pas de smartphone ? Nous veillerons à ce que vous participiez à votre événement en préparant vos billets à l’emplacement de la billetterie du lieu. Vous pouvez facilement mettre à jour votre mode de livraison.</p>
                </div>
                <h3>Transférer votre billet</h3>
                <div>
                    <p>Beaucoup de gens aiment assister à des événements live avec leurs amis, leur famille ou leurs proches. e-vents.ma a rendu le transfert sûr et facile des billets que vous ne pouvez pas utiliser, ou des billets achetés pour vos amis et votre famille, directement depuis votre compte.</p>
                    <p>Dans votre compte, localisez votre commande et choisissez Transférer des billets, sélectionnez à qui vous souhaitez les envoyer et comment ils doivent être livrés (envoyez le lien par WhatsApp ou e-mail).</p>
                    <p>Dans de cas rares, certains organisateurs d’événements peuvent choisir de rendre les billets « non transférables ». Il s’agit d’empêcher les acheteurs d’acheter des groupes de billets dans le seul but de les revendre à profit.</p>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    @parent
    <script>
        $( function() {
            $( ".accordion" ).accordion({
                collapsible: true,
                heightStyle: "content"
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
@endsection

