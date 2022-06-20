@props(['title', 'description', 'headerSlider'])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <meta name="description" content="{{ $description }}">
    <meta name="author" content="Sergei MILITER https://htmlcssjs.pro militer@htmlcssjs.pro">

    {{-- @livewireStyles --}}
    <livewire:styles />
    @stack('styles')
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @stack('scripts')
    <script defer src="{{ mix('js/app.js') }}"></script>
</head>

<body class="body">
    {{-- This comment will not be present in the rendered HTML --}}

    @isset($headerSlider)
        @if ($headerSlider)
            <x-header :slider="true" />
        @endif
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
