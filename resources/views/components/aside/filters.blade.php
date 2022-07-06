<x-layout.aside {{ $attributes->class(['filters']) }} master="filters">

    <x-layout.wrapper class="filters__top" flex>
        @php
            $filterTags = ['CCCP', 'ЛТ'];
        @endphp

        @foreach ($filterTags as $item)
            <span class="filter-tag">
                <span>{{ $item }}</span>
                <button class="xmark"></button>
            </span>
        @endforeach
    </x-layout.wrapper>

    <x-layout.wrapper class="sorting" flex>
        <button>{{ __('По дате завершения') }}</button>
        <button>{{ __('По стоимости участия') }}</button>
        <button>{{ __('По величине призовых') }}</button>
        <button>{{ __('По количеству участников') }}</button>
    </x-layout.wrapper>
</x-layout.aside>
