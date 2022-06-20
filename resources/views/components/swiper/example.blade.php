{{-- Slider main container --}}
<x-swiper class="slider">
    {{-- Additional required wrapper --}}
    {{-- Slides --}}
    <x-swiper.slide>
        {{-- Slide content --}}
    </x-swiper.slide>
    <x-swiper.slide>
        {{-- Slide content --}}
    </x-swiper.slide>
    <x-swiper.slide>
        {{-- Slide content --}}
    </x-swiper.slide>

    {{-- <!-- If we need navigation buttons --> --}}
    <x-swiper.navigation />
    <x-slot:navigation>
        <x-swiper.btn-prev />
        <x-swiper.btn-next />
    </x-slot:navigation>
    <x-slot:navigation>
        <x-swiper.btn-prev></x-swiper.btn-prev>
        <x-swiper.btn-next></x-swiper.btn-next>
    </x-slot:navigation>

    {{-- If we need pagination --}}
    <x-swiper.pagination />

    {{-- If we need scrollbar --}}
    <x-swiper.scrollbar />

</x-swiper>
