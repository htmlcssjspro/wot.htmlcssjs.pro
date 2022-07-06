{{-- @aware(['master', 'wrapper', 'flex', 'grid']) --}}
@aware(['master', 'wrapper'])
@props([
    'master' => null,
    'wrapper' => false,
    'block' => false,
    'flex' => false,
    'grid' => false,
])

<div
    {{ $attributes->class([
        'content',
        $master . '__content' => $master,
        'flex' => $flex && !$wrapper && !$block,
        'grid' => $grid && !$wrapper && !$block,
    ]) }}>

    @if ($wrapper)
        <x-layout.wrapper :flex="$flex" :grid="$grid">
            {{ $slot }}
        </x-layout.wrapper>
    @else
        {{ $slot }}
    @endif

</div>


{{-- Example

<x-layout.content>
    Content
</x-layout.content>

<x-layout.content wrapper flex>
    Content
</x-layout.content>

endExample --}}
