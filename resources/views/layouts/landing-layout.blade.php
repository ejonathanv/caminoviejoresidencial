<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camino Viejo Residencial - Venta de Terrenos en Vicente Guerrero B.C.</title>

    <!-- We need to import the CSS file -->
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

</head>
<body>

    <x-whatsapp-button></x-whatsapp-button>

    <main class="main">
        {{ $slot }}
    </main>

    <script src="{{ asset('js/jquery-3.6.1.js') }}"></script>
    <script src="https://kit.fontawesome.com/133291f590.js" crossorigin="anonymous"></script>
</body>
</html>