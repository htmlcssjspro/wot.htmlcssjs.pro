@props(['top' => null, 'bottom' => null])

<x-layout.container {{ $attributes->merge(['id' => 'footer']) }} tag="footer" master="footer">

    <x-slot:top>
        {{ $top }}
    </x-slot:top>

    {{ $slot }}

    <x-slot:bottom>
        {{ $bottom }}
    </x-slot:bottom>

</x-layout.container>
