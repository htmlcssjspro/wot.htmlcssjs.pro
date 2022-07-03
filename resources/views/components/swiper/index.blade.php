@props(['pagination', 'navigation', 'scrollbar'])

<div {{ $attributes->class(['swiper']) }}>

    <div class="swiper-wrapper">
        {{ $slot }}
    </div>

    @isset($pagination)
        @if ($pagination === 'pagination')
            <div class="swiper-pagination"></div>
        @else
            {{ $pagination }}
        @endif
    @endisset
    @isset($navigation)
        @if ($navigation === 'navigation')
            <x-swiper.btn-prev />
            <x-swiper.btn-next />
        @else
            {{ $navigation }}
        @endif
    @endisset
    @isset($scrollbar)
        @if ($scrollbar === 'scrollbar')
            <div class="swiper-scrollbar"></div>
        @else
            {{ $scrollbar }}
        @endif
    @endisset

</div>
