@props(['top', 'bottom', 'flex' => false, 'grid' => false])

<div {{ $attributes->class(['content']) }}>

    @isset($top)
        <div {{ $top->attributes->class(['content__top']) }}>
            {{ $top }}
        </div>
    @endisset

    <x-layout.wrapper master="content" :flex="$flex" :grid="$grid">
        {{ $slot }}
    </x-layout.wrapper>

    @isset($bottom)
        <div {{ $bottom->attributes->class(['content__bottom']) }}>
            {{ $bottom }}
        </div>
    @endisset

</div>
