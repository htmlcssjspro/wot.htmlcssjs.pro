@props(['master' => null, 'wrapClass' => null, 'flex' => false, 'grid' => false])

<div
    {{ $attributes->class([
        'wrapper',
        $master . '__wrapper' => $master,
        $wrapClass => $wrapClass,
        'flex' => $flex,
        'grid' => $grid,
    ]) }}>
    {{ $slot }}
</div>


{{-- Example

<x-layout.wrapper master="main" flex>
    Content
</x-layout.wrapper>

<x-layout.wrapper wrap-class="some-class" grid>
    Content
</x-layout.wrapper>

endExample --}}
