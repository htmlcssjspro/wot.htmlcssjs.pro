@props(['href'])

<svg {{ $attributes->class(['svg-symbol'])->merge(['width' => '1.5em', 'height' => '1em']) }}>
    <use href="{{ url("images/sprite.svg{$href}") }}" />
</svg>


{{-- Example

<x-svg-symbol href="#symbol" class="symbol" />

endExample --}}
