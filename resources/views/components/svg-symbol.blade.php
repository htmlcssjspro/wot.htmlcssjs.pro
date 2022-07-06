@props(['href'])

<svg {{ $attributes->class(['svg-symbol'])->merge(['width' => '14', 'height' => '14']) }}>
    <use href="{{ url("images/sprite.svg{$href}") }}" />
</svg>


{{-- Example

<x-svg-symbol href="#some-symbol" width="10" height="10" class="some-icon" />

endExample --}}
