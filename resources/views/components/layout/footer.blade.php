@props(['top', 'bottom', 'flex' => false, 'grid' => false])

<footer {{ $attributes->class(['footer'])->merge(['id' => 'footer']) }}>

    @isset($top)
        <div {{ $top->attributes->class(['footer__top']) }}>
            {{ $top }}
        </div>
    @endisset

    <div @class(['footer__wrapper', 'flex' => $flex, 'grid' => $grid])>
        {{ $slot }}
    </div>

    @isset($bottom)
        <div {{ $bottom->attributes->class(['footer__bottom']) }}>
            {{ $bottom }}
        </div>
    @endisset

</footer>
