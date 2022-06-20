@props(['title' => 'Slider title'])

<x-layout.container class="slider" wrapper>
    <h2>{{ __($title) }}</h2>
    {{ $slot }}
</x-layout.container>
