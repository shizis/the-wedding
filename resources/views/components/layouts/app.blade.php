<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="language" content="en-US" />
    <meta name="robots" content="index,follow" />
    <meta http-equiv="Cache-Control" content="no cache" />
    <meta http-equiv="x-dns-prefetch-control" content="off" />
    <meta name="robots" content="noindex,nofollow" />
    <meta name="googlebot-news" content="noindex" />
    <meta name="google" content="notranslate">
    <link rel="canonical" href="{{ url('/angga-laras') }}" />
    <title>{{ $title ?? 'Page Title' }}</title>
    <meta name="title" content="The Wedding of Angga &amp; Laras">
    <meta name="description" content="Sabtu - Minggu, 12 - 13 April 2025" />
    <meta name="url" content="{{ url('/angga-laras') }}" />
    <meta name="identifier-URL" content="{{ url('/angga-laras') }}" />
    <meta name="keywords" content="wedding website, angga laras," />
    <!-- open graph -->
    <meta name="og:title" content="The Wedding of Angga &amp; Laras" />
    <meta name="og:type" content="website" />
    <meta name="og:url" content="{{ url('/angga-laras') }}" />
    <meta name="og:image" content="{{ url('images/WA0002.jpg') }}" />
    <meta name="og:site_name" content="dr. angga &amp; dr. laras" />
    <meta name="og:description" content="Sabtu - Minggu, 12 - 13 April 2025" />
    <!-- apple meta tags -->
    <meta name="apple-mobile-web-app-title" content="Wedding Angga &amp; Laras" />
    <!-- New in iOS6 -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="no" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="format-detection" content="telephone=no" />
    <link href="http://github.com/images/touch-icon-iphone4.png" sizes="114x114" rel="apple-touch-icon-precomposed" />
    <link href="http://github.com/images/touch-icon-ipad.png" sizes="72x72" rel="apple-touch-icon-precomposed" />
    <link href="http://github.com/images/apple-touch-icon-57x57.png" sizes="57x57"
        rel="apple-touch-icon-precomposed" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class=" overflow-x-hidden font-lora touch-pan-y bg-angga-laras-bg">
    {{ $slot }}
    @livewireScriptConfig
</body>

</html>
