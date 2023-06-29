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
        }
    </style>
</head>
<body>
    <!-- SWEET ALERT -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @switch($is_valid)
        @case(1):
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Valide',
                    text: "Le ticket est valide"
                });
            </script>
        @break
        @case(0):
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Non valide',
                    text: "Le ticket n'est pas valide"
                });
            </script>
        @break
    @endswitch
</body>
</html>
