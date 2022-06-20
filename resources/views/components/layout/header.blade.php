@props(['top', 'bottom', 'flex' => false, 'grid' => false])

<header {{ $attributes->class(['header'])->merge(['id' => 'header']) }}>

    @isset($top)
        <div {{ $top->attributes->class(['header__top']) }}>
            {{ $top }}
        </div>
    @endisset

    <div @class(['header__wrapper', 'flex' => $flex, 'grid' => $grid])>
        {{ $slot }}
    </div>

    @isset($bottom)
        <div {{ $bottom->attributes->class(['header__bottom']) }}>
            {{ $bottom }}
        </div>
    @endisset

</header>
