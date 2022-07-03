@props(['href'])

<svg {{ $attributes->class(['icon']) }}>
    <use href="{{ url("images/sprite.svg{$href}")  }}" />
</svg>


{{-- Example

<x-svg-symbol class="some-icon" href="#some-symbol" width="10" height="10">

endExample --}}
