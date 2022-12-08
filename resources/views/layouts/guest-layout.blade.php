<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camino Viejo Residencial - Venta de Terrenos</title>

    <!-- We need to import the CSS file -->
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
    <!-- We need a header with the logo on the left and a menu on the right and we need a button to request information -->
    <header class="header">
        <div class="header__logo">
            <a href="{{ route('home') }}">
                <img src="{{ asset('img/LOGO_CAMINO_VIEJO.svg') }}" alt="">
            </a>
        </div>
        <div class="header__menu">
            <ul>
                <li><a href="{{ route('home') }}">Inicio</a></li>
                <li><a href="{{ route('specs') }}">Terrenos</a></li>

                <!-- We need the social media icons here -->
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div>
    </header>

    <x-whatsapp-button></x-whatsapp-button>

    <main class="main">
        {{ $slot }}
    </main>

    <footer class="footer">
        <div class="footer__content">
            <div class="footer__logo">
                <a href="{{ route('home') }}">
                    <h1>Camino Viejo Residencial</h1>
                </a>
                <p class="credits">
                    © 2021 Todos los derechos reservados.
                </p>
            </div>
            <div class="footer__menu">
                <ul>
                    <li><a href="{{ route('home') }}">Inicio</a></li>
                    <li><a href="{{ route('specs') }}">Terrenos</a></li>
                    <li><a href="#">Políticas de privacidad</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/jquery-3.6.1.js') }}"></script>
    <script src="https://kit.fontawesome.com/133291f590.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>