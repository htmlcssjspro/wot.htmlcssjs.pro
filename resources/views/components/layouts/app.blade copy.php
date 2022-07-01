@props(['metaTitle', 'metaDescription', 'headerSlider'])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $metaTitle }}</title>
    <meta name="description" content="{{ $metaDescription }}">
    <meta name="author" content="Sergei MILITER https://htmlcssjs.pro militer@htmlcssjs.pro">

    {{-- @livewireStyles --}}
    <livewire:styles />
    @stack('styles')
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @stack('scripts')
    <script defer src="{{ mix('js/app.js') }}"></script>
</head>

<body class="body flex">
    {{-- This comment will not be present in the rendered HTML --}}

    @isset($headerSlider)
        <x-header :slider="$headerSlider" />
    @else
        <x-header />
    @endisset

    {{ $slot }}

    <x-footer />

    @env('local')
    <x-layout.design-grid />
    @endenv

    {{-- @livewireScripts --}}
    <livewire:scripts />
</body>

</html>
