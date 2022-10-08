@php($dir = LaravelLocalization::getCurrentLocaleDirection())
@php($lang = app()->getLocale())
@php($regionals = collect(LaravelLocalization::getSupportedLocales())->except(app()->getLocale())->pluck('regional')->all())
<!doctype html>
<html lang="{{ $lang }}" dir="{{ $dir }}" class="dir-{{ $dir }}">
<head>
    @if($code = config('vue-dashboard.google_analytics'))
        <script async defer src="https://www.googletagmanager.com/gtag/js?id={{ $code }}"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', '{{ $code }}');
        </script>
    @endif
    <base href="{{ url('') }}/">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="support-webp" content="{{ supportWebp() ? ', image/webp' : '' }}">
    <meta name="base-url" content="{{ getBaseUrl() ?: '/' }}">
    <meta name="base-full-url" content="{{ localizeUrl('') }}">
    <meta name="direction" content="{{ LaravelLocalization::getCurrentLocaleDirection() }}">
    <meta name="Description" content="@lang('app.app_description')">

    @php($favFolder = config('vue-dashboard.fav_folder'))
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset("{$favFolder}apple-touch-icon.png") }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset("{$favFolder}favicon-32x32.png") }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset("{$favFolder}favicon-16x16.png") }}">
    <link rel="manifest" href="{{ asset("{$favFolder}/site.webmanifest") }}">
    <link rel="mask-icon" href="{{ asset("{$favFolder}safari-pinned-tab.svg") }}" color="#5bbad5">
    <link rel="icon" href="{{ asset(mix(config('vue-dashboard.favicon'))) }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset(mix(config('vue-dashboard.favicon'))) }}" type="image/x-icon">
    <meta name="msapplication-TileColor" content="{{ config('vue-dashboard.tile_color') }}">
    <meta name="msapplication-config" content="{{ asset("{$favFolder}browserconfig.xml") }}">
    <meta name="theme-color" content="{{ config('vue-dashboard.theme_color') }}">

    <meta property="og:image" content="{{ asset("{$favFolder}og-image.jpg") }}">
    <meta property="og:image:width" content="1239">
    <meta property="og:image:height" content="649">
    <meta property="og:description" content="@lang('app.app_description')">
    <meta property="og:title" content="{{ config('app.name') }}, {{ trans('app.motto') }}">
    <meta property="og:url" content="{{ url('') }}">
    <meta property="og:locale" content="{{ LaravelLocalization::getCurrentLocaleRegional() }}">
    @foreach($regionals as $regional)
        <meta property="og:locale:alternate" content="{{ $regional }}">
    @endforeach

    <title>{{ config('app.name') }} | {{ trans('app.motto') }}</title>

    <link rel="preload" as="font" href="{{ asset('webfonts/fa-solid-900.woff2') }}" type="font/woff2" crossorigin>
    <link rel="preload" as="font" href="https://fonts.gstatic.com/s/materialicons/v92/flUhRq6tzZclQEJ-Vdg-IuiaDsNc.woff2" type="font/woff2" crossorigin>
    @if(config()->has("vue-dashboard.fonts.{$lang}") && config()->has("vue-dashboard.fonts.{$lang}.preload"))
        <link rel="preload" as="font" href="{{ config("vue-dashboard.fonts.{$lang}.preload") }}" type="font/woff2" crossorigin>
    @endif

    <link rel="preload" href="{{ asset(mix('css/app.css')) }}" as="style">
    <link rel="preload" href="{{ asset(mix("css/custom-{$dir}-app.css")) }}" as="style">
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Material+Icons" as="style">
    @if(config()->has("vue-dashboard.fonts.{$lang}.url"))
        <link rel="preload" href="{{ config("vue-dashboard.fonts.{$lang}.url") }}" as="style">
    @endif

    <link rel="stylesheet" disabled href="{{ asset(mix('css/app.css')) }}" media="all">
    <link rel="stylesheet" disabled href="{{ asset(mix("css/custom-{$dir}-app.css")) }}" media="all">
    <link rel="stylesheet" disabled href="https://fonts.googleapis.com/css?family=Material+Icons" media="all">
    @if(config()->has("vue-dashboard.fonts.{$lang}.url"))
        <link rel="stylesheet" disabled href="{{ config("vue-dashboard.fonts.{$lang}.url") }}" media="all">
    @endif
    <noscript>
        <link rel="stylesheet" href="{{ asset(mix('css/app.css')) }}" media="all">
        <link rel="stylesheet" href="{{ asset(mix("css/custom-{$dir}-app.css")) }}" media="all">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons" media="all">
        @if(config()->has("vue-dashboard.fonts.{$lang}.url"))
            <link rel="stylesheet" href="{{ config("vue-dashboard.fonts.{$lang}.url") }}" media="all">
        @endif
    </noscript>
    <script id="configuration">
        CONFIG = '{!! vueConfig()->render() !!}';
    </script>
    <script id="translations_lines">
        TRANSLATIONS = '{!! json_encode(['ar' => ['test' => ['a' => 'أ']], 'en' => ['test' => ['a' => 'a']]]) !!}';
    </script>
    <script src="{{ asset(mix('js/manifest.js')) }}" defer></script>
    <script src="{{ asset(mix('js/vendor.js')) }}" defer></script>
    <script src="{{ asset(mix('js/app.js')) }}" defer></script>

    @if(config()->has("vue-dashboard.fonts.{$lang}.name"))
        <style>
            .application {
                font-family: {!! config("vue-dashboard.fonts.{$lang}.name") !!};
            }
        </style>
    @endif
    <style id="loader">
        .dot-elastic {
            background-color: {{ config('vue-dashboard.color.secondary') }};
            color: {{ config('vue-dashboard.color.secondary') }};
        }
        .dot-elastic::before,.dot-elastic::after {
            background-color: {{ config('vue-dashboard.color.primary') }};
            color: {{ config('vue-dashboard.color.primary') }};
        }
    </style>
</head>
<body>
@yield('body')
<script>
    document.querySelectorAll('link[disabled]').forEach(function (e) {
        e.removeAttribute('disabled');
    });
</script>
</body>
</html>
