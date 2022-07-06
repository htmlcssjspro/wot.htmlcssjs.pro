{{-- @aware(['master', 'flex', 'grid']) --}}
@aware(['master'])
@props([
    'master' => null,
    'block' => false,
    'flex' => false,
    'grid' => false,
])

<div
    {{ $attributes->class([
        'bottom',
        $master . '__bottom' => $master,
        'flex' => $flex && !$block,
        'grid' => $grid && !$block,
    ]) }}>
    {{ $slot }}
</div>


{{-- Example

<x-layout.bottom master="main" flex>
    Content
</x-layout.bottom>

<x-layout.bottom class="some-class" grid>
    Content
</x-layout.bottom>

endExample --}}
