@props(['top', 'bottom', 'wrapper', 'flex' => false, 'grid' => false])

<main {{ $attributes->class(['main'])->merge(['id' => 'main']) }}>

    @isset($top)
        {{ $top }}
    @endisset

    @isset($wrapper)
        <x-layout.wrapper master="main" :flex="$flex" :grid="$grid">
            {{ $slot }}
        </x-layout.wrapper>
    @else
        {{ $slot }}
    @endisset


    @isset($bottom)
        {{ $bottom }}
    @endisset

</main>


{{-- Example

<x-layout.main wrapper flex>
    Content
</x-layout.main>

<x-layout.main>
    <x-layout.wrapper flex>
        Content
    </x-layout.wrapper>
</x-layout.main>

endExample --}}
