<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{asset('favicon.ico')}}">
    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Meta title and description --}}
    <title>{{$title}} - Интернет каталог детских вещей от ведущих брендов</title>
    <meta name="description" content="Интернет магазин детской одежды от ведущих брендов">
    <meta name="robots" content="index, follow">
    {{-- Open Graph meta --}}
    <meta property="og:url" content="{{ url()->full()}}" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="ru_RU" />
    <meta property="og:title" content="{{$title}} - Интернет каталог детских вещей от ведущих брендов" />
    <meta property="og:description" content="Интернет каталог детских вещей от ведущих брендов" />
    <meta property="og:image" content="{{asset('img/og-logo.png')}}" />
    <meta property="og:image_secure" content="{{asset('img/og-logo.png')}}" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-139135663-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-139135663-1');
    </script>
    {{-- Styles --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('styles')
    {{-- Scripts --}}
    <script src="{{ asset('js/manifest.js') }}" defer></script>
    <script src="{{ asset('js/vendor.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    @yield('scripts')

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


</head>
