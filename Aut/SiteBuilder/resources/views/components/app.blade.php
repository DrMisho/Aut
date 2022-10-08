<!doctype html>
<html lang="{{ $lang }}" dir="{{ $dir }}">
<head>
    <base href="{{ url('') }}/">
    {!! $seo !!}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>

    <link href="{{ asset("css/{$project}-theme-{$dir}.css") }}" rel="stylesheet" type="text/css">

    <script>
        DIR = '{{ $dir }}';
        isRtl = DIR === 'rtl';
        isLtr = !isRtl;
        var plugin_path = '{{ asset("js/plugins") }}/';
    </script>

    <script src="{{ asset(mix("js/{$project}.js")) }}" defer></script>
    <script src="{{ asset(mix('js/ie.js')) }}" defer></script>
</head>
<body class="smoothscroll enable-animation {{ $dir }} {{ $project }}">
    <div id="wrapper">
        <x-site-builder-header />
        {{ $slot }}
        <x-site-builder-footer />
    </div>
    <x-site-builder-preloader />
</body>
</html>
