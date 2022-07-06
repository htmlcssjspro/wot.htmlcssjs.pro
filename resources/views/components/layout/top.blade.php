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
        'top',
        $master . '__top' => $master,
        'flex' => $flex && !$block,
        'grid' => $grid && !$block,
    ]) }}>
    {{ $slot }}
</div>


{{-- Example

<x-layout.top master="main" flex>
    Content
</x-layout.top>

<x-layout.top class="some-class" grid>
    Content
</x-layout.top>

endExample --}}
