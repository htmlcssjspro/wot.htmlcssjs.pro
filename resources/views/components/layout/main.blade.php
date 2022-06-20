@props(['topContent', 'topWrapper', 'bottomContent', 'bottomWrapper', 'wrapper', 'flex' => false, 'grid' => false])

<main {{ $attributes->class(['main'])->merge(['id' => 'main']) }}>

    @isset($topContent)
        <div {{ $topContent->attributes->class(['content', 'main__top']) }}>
            {{ $topContent }}
        </div>
    @endisset

    @isset($topWrapper)
        <div {{ $topWrapper->attributes->class(['wrapper', 'main__top']) }}>
            {{ $topWrapper }}
        </div>
    @endisset


    @isset($wrapper)
        <x-layout.wrapper master="main" :flex="$flex" :grid="$grid">
            {{ $slot }}
        </x-layout.wrapper>
    @else
        {{ $slot }}
    @endisset


    @isset($bottomWrapper)
        <div {{ $bottomWrapper->attributes->class(['wrapper', 'main__bottom']) }}>
            {{ $bottomWrapper }}
        </div>
    @endisset

    @isset($bottomContent)
        <div {{ $bottomContent->attributes->class(['content', 'main__bottom']) }}>
            {{ $bottomContent }}
        </div>
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
