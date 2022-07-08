<x-layout.aside {{ $attributes->class(['filters'])->merge(['id' => 'aside-filters']) }} master="filters">
    <x-layout.wrapper top flex />

    <x-layout.wrapper class="sorting" flex>
        <button>{{ __('По дате завершения') }}</button>
        <button>{{ __('По стоимости участия') }}</button>
        <button>{{ __('По величине призовых') }}</button>
        <button>{{ __('По количеству участников') }}</button>
    </x-layout.wrapper>
</x-layout.aside>
