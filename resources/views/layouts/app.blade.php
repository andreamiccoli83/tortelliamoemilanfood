<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Tortelliamo - Gastronomia Tradizionale Emiliana')</title>
    
    <!-- Meta Tags SEO -->
    <meta name="description" content="@yield('meta_description', 'Tortelliamo - Pasta fresca e specialità gastronomiche della tradizione emiliana a Novellara')">
    <meta name="keywords" content="pasta fresca, tortelli, gastronomia emiliana, Novellara, Reggio Emilia">
    
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/logo/favicon.ico') }}" type="image/x-icon">
    
    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nouislider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/map.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    
    <!-- Font (TODO: copiare /font/ in /public/font/) -->
    <link rel="stylesheet" href="{{ asset('font/fonts.css') }}">
    
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('icons/icomoon/style.css') }}">
    
    <!-- Custom Styles -->
    @stack('styles')
    
    <!-- Vite Assets compilati -->
    <link rel="stylesheet" href="{{ asset('build/assets/app-BHUqQwTG.css') }}">
    <script src="{{ asset('build/assets/app-CAiCLEjY.js') }}" defer></script>
</head>
<body class="counter-scroll">
    
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- Preloader (opzionale) -->
        <div id="preload" class="preload">
            <div class="loader"></div>
        </div>

        <!-- Header -->
        @include('partials.header')

        <!-- Main Content -->
        @yield('content')

        <!-- Footer -->
        @include('partials.footer')

        <!-- Back to Top -->
        <a id="scroll-top" class="scroll-top">
            <i class="icon-arrow-up"></i>
        </a>
    </div>
    <!-- /Wrapper -->

    <!-- JavaScript Files -->
    <!-- jQuery DEVE essere caricato per primo -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/lazysize.min.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/rangle-slider.js') }}"></script>
    <script src="{{ asset('js/nouislider.min.js') }}"></script>
    <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('js/swiper.js') }}"></script>
    <script src="{{ asset('js/countto.js') }}"></script>
    {{-- Mappa Mapbox temporaneamente disabilitata - Token scaduto --}}
    {{-- <script src="{{ asset('js/map.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('js/map.js') }}"></script> --}}
    {{-- <script src="{{ asset('js/mmenu.js') }}"></script> --}}
    <script src="{{ asset('js/main.js') }}"></script>
    
    <!-- Custom Scripts -->
    @stack('scripts')
</body>
</html>