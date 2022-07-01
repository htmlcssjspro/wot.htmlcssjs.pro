@props([
    'master' => 'container',
    'tag' => 'section',
    'top',
    'bottom',
    'content' => false,
    'wrapper' => false,
    'flex' => false,
    'grid' => false,
])

<{{ $tag }} {{ $attributes->class(['container', $master => $master]) }}>

    @isset($top)
        {{ $top }}
    @endisset

    @if ($content)
        <x-layout.content>
            {{ $slot }}
        </x-layout.content>
    @elseif($wrapper)
        <x-layout.wrapper>
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
