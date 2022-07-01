@props(['top', 'bottom', 'flex' => false, 'grid' => false])

<aside {{ $attributes->class(['aside'])->merge(['id' => 'aside']) }}>

    @isset($top)
        <div {{ $top->attributes->class(['aside__top']) }}>
            {{ $top }}
        </div>
    @endisset

    <div @class(['aside__wrapper', 'flex' => $flex, 'grid' => $grid])>
        {{ $slot }}
    </div>

    @isset($bottom)
        <div {{ $bottom->attributes->class(['aside__bottom']) }}>
            {{ $bottom }}
        </div>
    @endisset

</aside>
