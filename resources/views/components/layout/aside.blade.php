@props(['top' => null, 'bottom' => null])

<x-layout.container {{ $attributes->merge(['id' => 'aside']) }} tag="aside" master="aside">

    <x-slot:top>
        {{ $top }}
    </x-slot:top>

    {{ $slot }}

    <x-slot:bottom>
        {{ $bottom }}
    </x-slot:bottom>

</x-layout.container>
