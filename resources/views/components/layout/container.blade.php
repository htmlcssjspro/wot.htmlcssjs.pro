@props(['wrapper', 'header', 'flex' => false, 'grid' => false])

<section {{ $attributes->class(['container']) }}>
    @isset($header)
        <div {{ $header->attributes->class(['wrapper container__top']) }}>
            {{ $header }}
        </div>
    @endisset

    @isset($wrapper)
        <x-layout.wrapper master="container" :flex="$flex" :grid="$grid">
            {{ $slot }}
        </x-layout.wrapper>
    @else
        {{ $slot }}
    @endisset
</section>


{{-- Example

<x-layout.container>
    Content
</x-layout.container>

<x-layout.container wrapper flex>
    Content
</x-layout.container>

endExample --}}
