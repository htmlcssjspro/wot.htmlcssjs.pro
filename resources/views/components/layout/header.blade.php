@props(['top' => null, 'bottom' => null])

<x-layout.container {{ $attributes->merge(['id' => 'header']) }} tag="header" master="header">

    <x-slot:top>
        {{ $top }}
    </x-slot:top>

    {{ $slot }}

    <x-slot:bottom>
        {{ $bottom }}
    </x-slot:bottom>

</x-layout.container>
