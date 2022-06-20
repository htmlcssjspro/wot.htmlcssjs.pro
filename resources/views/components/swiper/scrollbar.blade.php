{{-- @push('control')
    <div class="swiper-scrollbar"></div>
@endpush --}}

{{-- @push('scrollbar')
    <div class="swiper-scrollbar"></div>
@endpush --}}

{{-- @push('scrollbar')
    <div class="swiper-scrollbar"></div>
@endpush --}}

<x-slot:scrollbar>
    <div class="swiper-scrollbar"></div>
</x-slot:scrollbar>

{{-- <x-slot name='control'>
    <div {{ $attributes->class(['swiper-scrollbar']) }}>
        {{ $slot }}
    </div>
</x-slot> --}}
