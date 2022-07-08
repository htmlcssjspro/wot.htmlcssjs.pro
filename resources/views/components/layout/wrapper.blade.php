{{-- @aware(['master', 'flex', 'grid']) --}}
@aware(['master'])
@props([
    'master' => null,
    'top' => false,
    'bottom' => false,
    'block' => false,
    'flex' => false,
    'grid' => false,
])

<div
    {{ $attributes->class([
        'wrapper',
        'wrapper_top' => $top,
        'wrapper_bottom' => $bottom,
        $master . '__wrapper' => $master,
        'flex' => $flex && !$block,
        'grid' => $grid && !$block,
    ]) }}>
    {{ $slot }}
</div>


{{-- Example

<x-layout.wrapper master="main" flex>
    Content
</x-layout.wrapper>

<x-layout.wrapper class="some-class" grid>
    Content
</x-layout.wrapper>

endExample --}}
