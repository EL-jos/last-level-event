@extends('base')

@section('title', "Foire aux questions")

@section('main')
    <section id="el-breadcrumb" class="el-center-box">
        <div class="el-content-area">
            <div class="el-grid">
                <a href="{{ route('home.page') }}">Accueil /</a>
                <span>Foire aux questions</span>
            </div>
        </div>
    </section>
    <section id="el-about" class="el-center-box">
        <div class="el-content-area">
            <div class="accordion">
                <h3>Nouveau sur lastlevelevent.com ?</h3>
                <div>
                    <p>Vous trouverez ici tout ce dont vous avez besoin pour démarrer. N’oubliez pas que l’utilisation de notre plateforme est gratuite si votre événement est gratuit ! N’hésitez donc pas à créer vos évènements même si vous ne faites pas payer le billet ou l’enregistrement.</p>
                </div>
                <h3>Qui détermine le nombre et les types de billets mis en vente ?</h3>
                <div>
                    <p>Les organisateurs d’événements contrôlent tous les détails clés lorsqu’il s’agit de vendre leurs billets. Ils décident du nombre de billets à vendre, des types de billets à vendre, des prix, du moment où les informations sur la vente des billets sont mises à la disposition du public, ainsi que du moment où ils souhaitent que les billets soient mis en vente.</p>
                </div>
                <h3>Comment trouver un spectacle ?</h3>
                <div>
                    <p>Vous pouvez utiliser notre moteur de recherche et effectuer une recherche par spectacle, par ville, par artiste, ou par salle de représentation ou bien sélectionnez directement un spectacle parmi ceux mis en avant sur la page d’accueil.</p>
                </div>
                <h3>Comment réserver un spectacle ?</h3>
                <div>
                    <p>– Effectuez votre choix entre les différents évènements proposés.</p>
                    <p>– Pour poursuivre votre commande, identifiez-vous dans la rubrique « Mon compte » ou créez un compte si vous n’êtes pas encore inscrit. Toutes les informations demandées lors de la création de votre compte nous sont nécessaires pour traiter vos commandes dans les meilleures conditions. Elles vous permettront également de recevoir vos billets, d’être prévenu en cas d’annulation de la manifestation, de consulter l’état de vos commandes en ligne, de gagner du temps lors de votre prochaine réservation en ligne, etc.</p>
                    <p>– Cliquez sur le bouton « Acheter », choisissez la catégorie et le nombre de tickets souhaités.</p>
                    <p>– Réservez votre place sur le plan de la salle suivant les disponibilités proposées.</p>
                    <p>– Procédez au paiement par carte bancaire marocaine ou bien en espèces afin de recevoir votre ticket.</p>
                </div>
                <h3>lastlevelevent.com fixe-t-il les prix des billets ?</h3>
                <div>
                    <p>Non, Les prix sont déterminés par les organisateurs d’événements. </p>
                    <p>Lorsqu’un billet est proposé à la vente sur lastlevelevent.com, ce prix est choisi par le revendeur, </p>
                    <p>Les frais sont inclus dans le prix du billet affiché.</p>
                </div>
                <h3>Proposez-vous des remboursements ou des échanges ?</h3>
                <div>
                    <p>Toutes les ventes sont finales, mais les remboursements sont autorisés dans des circonstances limitées. La meilleure source d’informations à jour sur votre événement – et si des procédures de remboursement, de crédit ou d’échange peuvent être disponibles – se trouve dans votre compte en ligne. Pour votre commodité, voici quelques exemples de cas où un remboursement peut être disponible :</p>
                    <ul>
                        <li><p>Si votre événement est annulé et que vous avez acheté vos billets sur lastlevelevent.com, nous effectuerons un remboursement selon le mode de paiement d’origine utilisé au moment de l’achat, une fois les fonds reçus de l’organisateur de l’événement. Certaines exceptions et limitations peuvent s’appliquer. Veuillez consulter notre politique d’achat pour plus de détails.</p></li>
                        <li><p>Si votre événement est reporté, reprogrammé ou déplacé et que vous avez acheté vos billets sur lastlevelevent.com, vos billets sont toujours valables ; dans certains cas, cependant, l’organisateur de l’événement peut vous donner la possibilité de demander un remboursement. Certaines exceptions et limitations peuvent s’appliquer. Veuillez consulter notre politique d’achat pour plus de détails. </p></li>
                    </ul>
                </div>
                <h3>Qu'est-ce que l'entrée mobile ?</h3>
                <div>
                    <p>L’entrée mobile transforme votre téléphone en votre ticket. C’est le moyen le plus simple et le plus sûr d’entrer dans votre événement.
                        Lorsque vous sélectionnez l’option de livraison « Entrée mobile » à la caisse, ou lorsque les organisateurs d’événements décident qu’un événement doit être « Mobile uniquement », vous ne recevrez pas de billets physiques ou de billets par e-mail à imprimer – alors assurez-vous que votre téléphone est chargé et prêt aller.
                        Votre téléphone est votre billet</p>
                    <ol>
                        <li>
                            <p> Connectez-vous</p>
                        </li>
                        <li>
                            <p>Appuyez sur « Mes événements » pour localiser votre commande et afficher vos billets</p>
                        </li>
                        <li>
                            <p>Pour entrer, scannez simplement votre billet directement depuis votre téléphone</p>
                        </li>
                    </ol>
                    <p>CONSEIL : Consultez vos billets avant de partir afin qu’ils soient chargés, même lorsque le Wi-Fi est lent.</p>
                </div>
                <h3>Pourquoi un lieu ou un organisateur d'événements n'autoriserait-il pas les billets papier ?</h3>
                <div>
                    <p>Avec le réchauffement climatique et le CO2 excessive qui polluent l’environnement, le monde a commencé à voir l’intérêt de devenir «vert» tout comme notre logo 😉 et de réduire notre empreinte carbone.
                        Passer au papierless en utilisant des billets électroniques aide à réduire la déforestation et la pollution, laissant plus d’arbres faire le sale boulot d’absorber le dioxyde de carbone (et de ralentir le changement climatique mondial).
                        ainsi Nous travaillons avec des sites et des organisateurs d’événements pour rendre le processus d’entrée mobile facile à utiliser et pour réduire la fraude afin que les personnes entrant dans le spectacle soient les fans qui ont acheté les billets.
                        Les billets papier sont plus sensibles à la duplication illégale, au vol et à la fraude par rapport aux billets sur votre téléphone. lastlevelevent.com innove et travaille en permanence sur de nouveaux produits et programmes pour éliminer la fraude aux billets afin de créer une expérience de billetterie en direct plus sûre pour les fans.</p>
                </div>
                <h3>Comment voir les billets que j'ai achetés en ligne ?</h3>
                <div>
                    <p>Pour voir les billets achetés en ligne, visitez lastlevelevent.com sur votre navigateur. Connectez-vous à votre compte et localisez votre commande. De là, vous pourrez voir vos billets, enregistrer des billets mobiles dans le portefeuille de votre téléphone, ou les transférer à un ami. </p>
                </div>
                <h3>Comment puis-je obtenir de l'aide ?</h3>
                <div>
                    <p>Notre centre d’aide peut vous aider à trouver des réponses aux questions les plus courantes, et notre équipe d’assistance aux fans est toujours à vos côtés. N’hésitez pas à nous contacter.</p>
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
