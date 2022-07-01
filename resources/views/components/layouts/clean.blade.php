@props(['metaTitle', 'metaDescription'])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ __($metaTitle) ?? __('Title') }}</title>
    <meta name="description" content="{{ __($metaDescription) ?? __('Description') }}">
    <meta name="author" content="Sergei MILITER https://htmlcssjs.pro militer@htmlcssjs.pro">

    {{-- @livewireStyles --}}
    <livewire:styles />
    @stack('vendor-styles')
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @stack('styles')

    @stack('vendor-scripts')
    <script defer src="{{ mix('js/app.js') }}"></script>
    @stack('scripts')
</head>

<body {{ $attributes->class(['body']) }}>

    {{ $slot }}

    {{-- @livewireScripts --}}
    <livewire:scripts />
</body>

</html>
