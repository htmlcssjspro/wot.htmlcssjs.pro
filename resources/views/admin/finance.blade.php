<x-layouts.admin :title="$title" :description="$description">
    <x-layout.main class="admin finance" wrapper>

        @php
            $total = 123456789;
        @endphp

        <x-layout.grid>
            <x-marked-block>
                <span class="t16">{{ __('Общая сумма пополнений') }}</span>
                <span>{{ $total }}</span>
            </x-marked-block>
            <x-marked-block>
                <span class="t16">{{ __('Общая сумма всех комиссий') }}</span>
                <span>{{ $total }}</span>
            </x-marked-block>
            <x-marked-block class="marked-block_green">
                <span class="t16">{{ __('Свободные средства') }}</span>
                <span>{{ $total }}</span>
            </x-marked-block>
            <x-marked-block>
                <span class="t16">{{ __('Общая сумма всех средств') }}</span>
                <span>{{ $total }}</span>
            </x-marked-block>
            <x-marked-block>
                <span class="t16">{{ __('Общая сумма джек-пота') }}</span>
                <span>{{ $total }}</span>
            </x-marked-block>
        </x-layout.grid>

        <x-layout.flex>
            <x-marked-block>
                <span class="t16">{{ __('Сумма удержанных комиссий за участие в соревнованиях') }}</span>
                <span>{{ $total }}</span>
            </x-marked-block>
            <x-marked-block>
                <span class="t16">{{ __('Сумма удержанных комиссий за участие в ЛБЗ') }}</span>
                <span>{{ $total }}</span>
            </x-marked-block>
        </x-layout.flex>

    </x-layout.main>
</x-layouts.admin>
