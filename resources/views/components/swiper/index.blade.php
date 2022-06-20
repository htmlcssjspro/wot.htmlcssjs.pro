@props(['pagination', 'navigation', 'scrollbar'])

<div {{ $attributes->class(['swiper']) }}>

    <div class="swiper-wrapper">
        {{ $slot }}
    </div>

    @isset($pagination)
        @if ($pagination === true)
            <x-swiper.pagination />
        @else
            {{ $pagination }}
        @endif
    @endisset
    @isset($navigation)
        @if ($navigation === true)
            <x-swiper.navigation />
        @else
            {{ $navigation }}
        @endif
    @endisset
    @isset($scrollbar)
        @if ($scrollbar === true)
            <x-swiper.scrollbar />
        @else
            {{ $scrollbar }}
        @endif
    @endisset

</div>
