@extends('base')
@php
    use Carbon\Carbon;

    $lenght = $event->categories->count();
    $dateString = date('d/m/Y', strtotime($event->date));
    $timeString = date('H:i', strtotime($event->time));
    $filename = explode('/', $event->image->path_large)[1];

    $date = Carbon::parse($event->date);
    /*$date = Carbon::createFromFormat('d/m/Y', $dateString);
    $formattedDate = $date->isoFormat('dddd D, MMM. YYYY, HH:mm');*/
@endphp

@section('title', $event->title)

@section('description', strip_tags($event->description))

@section('og_title', $event->title)
@section('og_description', strip_tags($event->description))
@section('og_image', route('show.image', ['path' => $filename, 'w' => 1200, 'h' => 630]))
@section('og_type', 'article')


@section('twitter_title', $event->title)
@section('twitter_description', strip_tags($event->description))
@section('twitter_image', route('show.image', ['path' => $filename, 'w' => 500, 'h' => 500]))

@section('style')
    <!-- FLIPDOWN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flipdown@0.3.2/dist/flipdown.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flipdown@0.3.2/src/flipdown.min.js"></script>
    <!-- LEAFLET -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet@1.7.1/dist/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@3.2.12/dist/leaflet-routing-machine.css" />
    <style>
        #map {
            height: 400px;
        }
    </style>
@endsection

@section('main')

    <section id="el-breadcrumb" class="el-center-box">
        <div class="el-content-area">
            <div class="el-grid">
                <a href="{{ route('home.page') }}">Accueil /</a>
                @foreach($event->categories as $category)

                    @if($lenght > 1)
                        @if($loop->index == ($lenght - 1))
                            <a href="{{ route('category.page', $category) }}">{{$category->name}} /</a>
                        @else
                            <a href="{{ route('category.page', $category) }}">{{$category->name}} | |</a>
                        @endif
                    @else
                        <a href="{{ route('category.page', $category) }}">{{ $category->name }} /</a>
                    @endif

                @endforeach

                <span>{{ $event->title }}</span>
            </div>
        </div>
    </section>
    <section id="el-details-event" class="el-center-box">
        <div class="el-content-area">
            <div class="el-grid">
                <h1 class="el-title-event">{{ $event->title }}</h1>
                <p class="el-price"><i class="fas fa-money-bill-alt"></i> à partir de <span>{{ $event->prices()->where('type_id', '=', 1)->first()->amount }} $</span></p>

                <img src="{{ asset($event->image->path_large) }}" alt="{{ $event->title }}">
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
                                <h3 class="el-title">{{ $event->organiser->name }}</h3>
                            </div>
                        </div>
                        <div class="el-event-right">
                            <div class="el-icon el-center-box">
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                            <div class="el-group-title">
                                <h4 class="el-subtitle">Date et heure</h4>
                                {{--date('d/m/Y', strtotime($event->date))--}}
                                <h3 class="el-title">
                                    {{ \Carbon\Carbon::createFromFormat('d/m/Y', $dateString)->locale('fr')->isoFormat('dddd D, MMM. YYYY') }} à
                                    {{ $timeString }}
                                </h3>
                            </div>
                        </div>
                        <div class="el-event-right">
                            <div class="el-icon el-center-box">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="el-group-title">
                                <h4 class="el-subtitle">Localisation</h4>
                                <h3 class="el-title">{{ $event->location }}</h3>
                            </div>
                        </div>
                        <div class="el-controls-btn">
                            @if((!$date->isPast() || !$date->isToday()) && $date->isFuture())
                                <button onclick="onOpenFormAchatTicket()" class="el-btn el-vip">
                                    Acheter le ticket !
                                </button>
                            @endif
                            {{--<a href="" class="el-btn">
                                Acheter le ticket Standard
                            </a>--}}
                        </div>
                    </main>
                </div>
                <div class="el-contentainer">
                    <header>À propos de cet évènement</header>
                    <main class="el-descriptif">
                        {!! $event->description !!}
                    </main>
                </div>
                <div class="el-contentainer">
                    <header>Géo-localisation</header>
                    <main>
                        <div id="map"></div>
                        <div class="el-controls-btn">
                            <button id="itineraire-btn" class="el-btn" style="background: var(--info); color: #fff">Voir l'itinéraire</button>
                        </div>

                    </main>
                </div>
            </div>
        </div>
    </section>
    <section id="el-popup" class="el-center-box">
        <div class="el-content-area">
            <aside>
                <form method="post" action="{{ route('sale.store') }}">
                    @csrf
                    <input type="hidden" name="event_id" value="{{ $event->id }}" />
                    <button onclick="onCloseFormAchatTicket()" type="button" id="el-close-form-ticket" class="el-btn el-center-box"> <i class="fas fa-times"></i> </button>
                    <h2>Achat ticket Last Level Event</h2>
                    <div class="el-ligne">
                        <div class="el-colonne">
                            <label for="type_id">Type d'achat</label>
                            <select id="type_id" name="type_id" value="{{ old('quantity') }}">
                                @foreach($types as $type)
                                    <option @if(old('type_id') == $type->id) selected @endif value="{{ $type->id }}">{{ $type->name }}</option>
                                @endforeach
                            </select>
                            @error('type_id')
                                <div class="el-error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="el-colonne">
                            <label for="quantity">Quantité</label>
                            <input type="number" id="quantity" name="quantity" value="1" min="1" value="{{ old('quantity') }}" />
                            @error('quantity')
                                <div class="el-error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="el-type-payment">
                        <p id="el-price-standard" class="el-price el-active">Prix: <strong>{{ $event->prices()->where('type_id', '=', 1)->first()->amount }} $</strong></p>
                        <p id="el-price-vip" class="el-price">Prix: <strong>{{ $event->prices()->where('type_id', '=', 2)->first()->amount }} $</strong></p>
                        <p class="el-phone"><img src="{{ asset('assets/svg/mpsa.svg') }}" /> +243 812 135 885</p>
                        <p class="el-phone"><img src="{{ asset('assets/svg/orange_money.svg') }}" /> +243 812 135 885</p>
                        <p class="el-phone"><img src="{{ asset('assets/svg/airtel.svg') }}" /> +243 812 135 885</p>
                    </div>
                    <div class="el-ligne">
                        <div class="el-colonne el-one">
                            <label for="type_id">Référence de la transaction</label>
                            <input type="text" name="ref" value="{{ old('ref') }}" />
                            @error('ref')
                                <div class="el-error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="el-btn">Acheter</button>
                </form>
            </aside>
        </div>
    </section>
@endsection

@section('scripts')
    @parent
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script>
        var dateString = '{{ $event->date }}'; // Votre date au format 'd/m/Y'
        var momentDate = moment(dateString, 'DD/MM/YYYY');
        var timestampMilliseconds = moment(dateString).unix();
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {

            let timer = timestampMilliseconds;
            let flipdown = new FlipDown(timer,
                {
                    headings: ["Jour", "Heure", "minute", "séconde"]
                })
                .start()
                .ifEnded(() => {
                    document.querySelector('.flipdown').innerHTML = `<h2 style="font-family: var(--font-text)">Guichet Fermé</h2>`;
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
    <script>
        const onOpenFormAchatTicket = () => {
            document.getElementById('el-popup').classList.add('el-active')
            calculatedPrice(parseInt(document.getElementById('quantity').value));
        }
        const onCloseFormAchatTicket = () => {
            document.querySelector('#el-popup form').reset();
            document.getElementById('el-popup').classList.remove('el-active');
            calculatedPrice(parseInt(document.getElementById('quantity').value));
        }

        document.getElementById('quantity').addEventListener('change', (e) => {
            let quantity = parseInt(e.target.value);

            if(quantity){
                calculatedPrice(quantity);
            }
        })

        const el_price_standard = document.getElementById('el-price-standard');
        const el_price_vip = document.getElementById('el-price-vip');
        const type_id = document.getElementById('type_id');
        type_id.addEventListener('change', (e) => {
            switch (parseInt(e.target.value)) {
                case 1:
                    el_price_standard.classList.add('el-active')
                    el_price_vip.classList.remove('el-active')
                    calculatedPrice(parseInt(document.getElementById('quantity').value))
                    break;
                case 2:
                    el_price_standard.classList.remove('el-active')
                    el_price_vip.classList.add('el-active')
                    calculatedPrice(parseInt(document.getElementById('quantity').value))
                    break;
            }
        })

        function calculatedPrice(quantity){
            let price = document.querySelector('.el-price.el-active strong');
            const standard_price = document.getElementById('el-price-standard')
            const vip_price = document.getElementById('el-price-vip')
            if(standard_price.classList.contains('el-active') || parseInt(document.getElementById('type_id').value) == 1){
                price.textContent = (`${parseInt( {{ $event->prices()->where('type_id', '=', 1)->first()->amount }} ) * quantity} $`);
            }else if(vip_price.classList.contains('el-active') || parseInt(document.getElementById('type_id').value) == 2){
                price.textContent = (`${parseInt( {{ $event->prices()->where('type_id', '=', 2)->first()->amount }} ) * quantity} $`);
            }
        }
    </script>
    <script src="{{ asset('js/leaflet.js') }}"></script>
    <script src="{{ asset('js/Control.Geocoder.js') }}"></script>
    <script src="{{ asset('js/unpkg.com_leaflet-routing-machine@3.2.12_dist_leaflet-routing-machine.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var address = "{{ $event->location }}";
            var itineraireBtn = document.getElementById('itineraire-btn');
            var map = L.map('map').setView([0, 0], 13);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors',
                maxZoom: 18,
            }).addTo(map);

            var geocoder = L.Control.Geocoder.nominatim();
            var routingControl;

            geocoder.geocode(address, function(results) {
                if (results.length > 0) {
                    var latlng = results[0].center;

                    L.marker(latlng).addTo(map).bindPopup(address).openPopup();
                    map.setView(latlng, 13);

                    // Récupérer la position actuelle du navigateur de l'utilisateur
                    function getCurrentLocation() {
                        if (navigator.geolocation) {
                            itineraireBtn.disabled = true; // Désactiver le bouton pendant le traitement

                            navigator.geolocation.getCurrentPosition(function(position) {
                                var currentLatLng = {
                                    lat: position.coords.latitude,
                                    lng: position.coords.longitude
                                };

                                try {
                                    // Créer l'itinéraire
                                    routingControl = L.Routing.control({
                                        waypoints: [
                                            L.latLng(currentLatLng.lat, currentLatLng.lng),
                                            L.latLng(latlng.lat, latlng.lng)
                                        ],
                                        routeWhileDragging: true,
                                        language: 'fr', // Définir la langue des instructions en français
                                    }).addTo(map);

                                    routingControl.on('routesfound', function() {
                                        itineraireBtn.disabled = false; // Réactiver le bouton en cas de succès
                                    });
                                } catch (error) {
                                    alert("Erreur lors de la création de l'itinéraire :\n" + error.message);
                                    itineraireBtn.disabled = false; // Réactiver le bouton en cas d'erreur
                                }
                            }, function(error) {
                                alert("Erreur lors de la récupération de la position actuelle :\n" + error.message);
                                itineraireBtn.disabled = false; // Réactiver le bouton en cas d'erreur
                            });
                        } else {
                            alert("La géolocalisation n'est pas prise en charge par ce navigateur.");
                        }
                    }

                    // Gérer le clic sur le bouton "Voir l'itinéraire"
                    itineraireBtn.addEventListener('click', getCurrentLocation);
                } else {
                    alert("Aucun résultat de géocodage trouvé pour l'adresse spécifiée.");
                }
            }, function(error) {
                alert("Erreur lors du géocodage de l'adresse :\n" + error.message);
            });
        });
    </script>
@endsection
