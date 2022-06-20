{{-- @push('control')
    <div class="swiper-pagination"></div>
@endpush --}}

{{-- @push('pagination')
    <div class="swiper-pagination"></div>
@endpush --}}

<x-slot:pagination>
    <div class="swiper-pagination"></div>
</x-slot:pagination>

{{-- <x-slot name='control'>
    <div {{ $attributes->class(['swiper-pagination']) }}>
        {{ $slot }}
    </div>
</x-slot> --}}
