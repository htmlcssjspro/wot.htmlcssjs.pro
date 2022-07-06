@props([
    'master' => 'container',
    'tag' => 'section',
    'top',
    'bottom',
    'content' => false,
    'wrapper' => false,
    'block' => false,
    'flex' => false,
    'grid' => false,
])

<{{ $tag }} {{ $attributes->class(['container', $master => $master]) }}>

    @isset($top)
        {{ $top }}
    @endisset

    @if ($content)
        <x-layout.content :flex="$flex" :grid="$grid">
            {{ $slot }}
        </x-layout.content>
    @elseif($wrapper)
        <x-layout.wrapper :flex="$flex" :grid="$grid">
            {{ $slot }}
        </x-layout.wrapper>
    @else
        {{ $slot }}
    @endif

    @isset($bottom)
        {{ $bottom }}
    @endisset

    </{{ $tag }}>


    {{-- Example

<x-layout.container>
    Content
</x-layout.container>

<x-layout.container wrapper flex>
    Content
</x-layout.container>

endExample --}}
