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
               max-width: 800px;
               width: 100%;
               display: flex;
               align-items: center;
               position: relative;
               overflow: hidden;
           }.el-identity{
                background-color: rgba(47, 47, 111, .1);
                list-style: none;
                padding: 1rem;
                display: flex;
                flex-direction: column;
                gap: 1rem;
                width: 200px;
                min-width: 200px;
                border-radius: var(--border-radius);
            }.el-identity li{
                 color: #68686d;
                 display: flex;
                 flex-direction: column;
                 gap: .25rem;
             }.el-identity h3{
                  color: #1a1a1a;
                  font-size: 12px;
              }.el-identity p{
                   font-size: 10px;
               }#qrcode{
                    width: 100px;
                    height: 100px;
                    background-color: #fff;
                }.el-content{
                     width: 100%;
                     display: flex;
                     flex-direction: column;
                     align-items: center;
                     gap: .5rem;
                 }.el-content h1{
                      width: fit-content;
                      font-size: 20px;
                      color: #1a1a1a;
                      font-weight: bold;
                  }.el-content p{
                       width: fit-content;
                       font-size: 12px;
                       color: var(--blue);
                       font-weight: bold;
                   }span{
                        position: absolute;
                        border-radius: 50%;
                    }span:nth-child(1){
                         background-image: linear-gradient(135deg, rgba(223, 66, 177, .2), transparent, transparent);
                         width: 100px;
                         height: 100px;
                         top: 70%;
                         right: 100px;
                     }span:nth-child(2){
                          background-image: linear-gradient(135deg, rgba(223, 66, 177, .2), rgba(80, 90, 221, .2));
                          width: 50px;
                          height: 50px;
                          top: 5%;
                          right: 220px;
                      }span:nth-child(3){
                           background-image: linear-gradient(135deg, rgba(80, 90, 221, .2), transparent);
                           width: 150px;
                           height: 150px;
                           top: 5%;
                           left: 320px;
                       }aside{
                            top: 26%;
                            transform: rotate(45deg) translate(-50%, -50%);
                            background: #1a1a1a;
                            color: var(--warning);
                            width: 100px;
                            position: absolute;
                            text-align: center;
                            right: -7%;
                        }a{
                             background: var(--blue);
                             padding: .5rem 1rem;
                             width: fit-content;
                             border-radius: var(--border-radius);
                             box-shadow: 0 8px 10px rgba(0, 0, 0, .1);
                             color: #f2f2f2;
                             text-decoration: none;
                         }
    </style>
    <script src="{{ asset('js/qrcode.min.js')}}"></script>
</head>
<body>
<section id="el-ticket">
    <ul class="el-identity">
        <li>
            <h3>Date et heure:</h3>
            <p>Le {{ date('d/m/Y', strtotime($sale->event->date)) }} à {{ date('H:i', strtotime($sale->event->time)) }}</p>
        </li>
        <li>
            <h3>Durée:</h3>
            <p>{{ $sale->event->duration }} heure</p>
        </li>
        <li>
            <h3>Adresse:</h3>
            <p>{{ $sale->event->location }}</p>
        </li>
    </ul>
    <article class="el-content">
        <span></span>
        <span></span>
        <span></span>
        <h1>{{ $sale->event->title }}</h1>
        <p>{{ $sale->event->organiser->name }}</p>
    </article>
    <article id="qrcode"></article>
    @if($sale->type->id == 2)
        <aside>V.I.P</aside>
    @endif
</section>
<a href="">Télécharger</a>
<script>

    var qrcode = new QRCode(document.getElementById("qrcode"), {
        width : 100,
        height : 100
    });
    qrcode.makeCode('{{ route('check.sale', $sale) }}');
</script>
</body>
</html>
