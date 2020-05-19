<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ config('app.name', 'WebX') }}</title>
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Fonts -->
    
    
    <!-- Touch-icons -->
    <link rel="apple-touch-icon" href="{{ asset('img/touch-icons/apple-touch-icon-iphone-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('img/touch-icons/apple-touch-icon-ipad-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/touch-icons/apple-touch-icon-iphone-retina-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('img/touch-icons/apple-touch-icon-ipad-retina-152x152.png') }}">
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/@coreui/icons/css/all.min.css">
</head>
<body class="c-app">
    <div id="app">
        @include('dashboard.shared.sidebar')
        <div class="c-wrapper">
            @include('dashboard.shared.navbar')
            
            <div class="c-body">
                <main class="c-main">
                    @yield('content')
                </main>
            </div>
            @include('dashboard.shared.footer')
        </div>
    </div>
</body>
</html>
