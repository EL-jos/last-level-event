<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="{{ asset('css/element.css') }}" rel="stylesheet">
    <title>Last Levet Event</title>
    <style>
        :root {
            --info: #2f89fc;
            --warning: #f89d13;
            --success: #8bc34a;
            --white: #f1f2f4;
            --black: #1b1f30;
            --bg-black: #333;
            --danger: #f23a2e;
            --grey: #4d4d4d;
            --primary: #2f2f6f;
            --accent: #20204d;
            --secondary: #E94E1B;
            --violet: #df42b1;
            --blue: #505add;
            --font-text: 'Eurostile', sans-serif !important;
            --border-radius: 15px;
            --font-size-text: 3.5vw;
        }*{
             padding: 0;
             margin: 0;
             font-family: var(--font-text) !important;
        }body{
            background-color: #f1f2f4;
            display: flex;
            align-items: center;
            flex-direction: column;
            gap: 1rem;
        }#el-ticket{
            padding: 1rem;
            background-color: #fff;
            max-width: 350px;
            min-width: 350px;
            width: 100%;
            aspect-ratio: 3/4;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1rem;
        }.el-group-block{
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            width: 100%;
            gap: 1rem;
        }.el-block{
            display: flex;
            flex-direction: column;
            width: 100%;
            gap: .25rem;
            width: fit-content;
        }.el-title{
            width: 100%;
            color: #1a1a1a;
            font-size: 20px;
        }label{
            color: #1a1a1a;
            text-transform: uppercase;
            font-size: 12px;
            font-weight: bold;
        }p{
            color: #68686d;
            font-size: 16px;
        }aside{
            color: #1a1a1a;
            font-size: 24px;
        }#qrcode{
            margin-top: auto;
        }button{
            background: var(--blue);
            padding: .5rem 1rem;
            width: fit-content;
            border-radius: var(--border-radius);
            box-shadow: 0 8px 10px rgba(0, 0, 0, .1);
            color: #f2f2f2;
            text-decoration: none;
            outline: none;
            border: none;
            cursor: pointer;
        }
    </style>
    <script src="{{ asset('js/qrcode.min.js')}}"></script>
</head>
<body>
<section id="el-ticket">
    <img src="{{ asset('assets/svg/logo.svg') }}" width="50px" />
    <div class="el-block el-title">
        <h1>{{ $sale->event->title }}</h1>
    </div>
    <div class="el-group-block">
        <div class="el-block">
            <label>Date et heure</label>
            <p>Le {{ date('d/m/Y', strtotime($sale->event->date)) }} à {{ date('H:i', strtotime($sale->event->time)) }}</p>
        </div>
        <div class="el-block">
            <label>Durée:</label>
            <p>{{ $sale->event->duration }} heure</p>
        </div>
    </div>
    <div class="el-group-block">
        <div class="el-block">
            <label>Adresse:</label>
            <p>{{ $sale->event->location }}</p>
        </div>
        <div class="el-block">
            <label>Participant</label>
            <p>{{ $sale->user->lastname . ' ' . $sale->user->name }}</p>
        </div>
    </div>
    <article id="qrcode"></article>
    @if($sale->type->id == 2)
        <aside>V.I.P</aside>
    @endif
</section>

<button id="el-btn-download">Télécharger</button>
<!--<a href="{{ route('check.sale', $sale) }}">Télécharger</a>-->

<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.min.js"></script>-->
<!-- JQUERY -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="{{ asset("js/printThis.js") }}"></script>
<script>
    $(document).ready(() => {
        $("#el-btn-download").click(() => {
            $("#el-ticket").printThis();
        })
    })
    function convertToImage() {
        const element = document.getElementById('el-ticket');

        html2canvas(element).then(function (canvas) {
            // Convertir le canvas en image (par défaut, l'image sera au format PNG)
            const image = canvas.toDataURL();

            // Créer un lien de téléchargement pour l'image
            const link = document.createElement('a');
            link.href = image;
            link.download = 'capture.png';
            link.click();
        });
    }

</script>
<script>

    var qrcode = new QRCode(document.getElementById("qrcode"), {
        width : 100,
        height : 100
    });
    qrcode.makeCode('{{ route('check.sale', $sale) }}');
</script>
</body>
</html>
