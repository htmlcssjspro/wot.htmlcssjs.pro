@props(['master' => null, 'flex' => false, 'grid' => false])
@aware(['master', 'flex', 'grid'])

<div {{ $attributes->class(['wrapper', $master . '__wrapper' => $master, 'flex' => $flex, 'grid' => $grid]) }}>
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
