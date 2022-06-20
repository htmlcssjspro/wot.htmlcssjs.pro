@props(['top', 'bottom', 'wrapper', 'flex' => false, 'grid' => false])

<section {{ $attributes->class(['container']) }}>

    @isset($top)
        <div {{ $top->attributes->class(['container__top']) }}>
            {{ $top }}
        </div>
    @endisset

    <div class="container__content">
        @isset($wrapper)
            <x-layout.wrapper master="container" :flex="$flex" :grid="$grid">
                {{ $slot }}
            </x-layout.wrapper>
        @else
            {{ $slot }}
        @endisset
    </div>


    @isset($bottom)
        <div {{ $bottom->attributes->class(['container__bottom']) }}>
            {{ $bottom }}
        </div>
    @endisset

</section>
