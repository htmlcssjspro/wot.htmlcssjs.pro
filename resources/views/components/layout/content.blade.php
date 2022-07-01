@props(['master' => null, 'wrapper' => false, 'flex' => false, 'grid' => false])
@aware(['master', 'wrapper', 'flex', 'grid'])

<div
    {{ $attributes->class([
        'content',
        $master . '__content' => $master,
        'flex' => $flex && !$wrapper,
        'grid' => $grid && !$wrapper,
    ]) }}>

    @if ($wrapper)
        <x-layout.wrapper>
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
