@props(['metaTitle', 'metaDescription', 'headerSlider'])

<x-layouts.clean :meta-title="$metaTitle" :meta-description="$metaDescription" class="flex">

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

</x-layouts.clean>
