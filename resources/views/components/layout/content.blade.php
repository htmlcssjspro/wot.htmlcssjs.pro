@props(['wrapper', 'flex' => false, 'grid' => false])

<div {{ $attributes->class(['content']) }}>
    @isset($wrapper)
        <x-layout.wrapper master="content" :flex="$flex" :grid="$grid">
            {{ $slot }}
        </x-layout.wrapper>
    @else
        {{ $slot }}
    @endisset
    {{ $slot }}
</div>


{{-- Example

<x-layout.content>
    Content
</x-layout.content>

<x-layout.content wrapper flex>
    Content
</x-layout.content>

endExample --}}
