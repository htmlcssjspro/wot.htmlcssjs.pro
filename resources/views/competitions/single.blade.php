<x-layouts.app :meta-title="$metaTitle" :meta-description="$metaDescription" header-slider>
    <x-layout.main class="competition" wrapper flex>
        <x-slot:top-wrapper class="flex">
            @if ($status === 'active')
                <h1>{{ __('Характеристики соревнования') }}</h1>
                <span>{{ __('До завершения: ') }}{{ $left }}</span>
            @elseif ($status === 'completed')
                <h1>{{ __('Итоги соревнования') }}</h1>
                <span>{{ __('Завершенно') }}</span>
            @endif
        </x-slot:top-wrapper>

        <div class="stats">
            <h2>{{ __($title) }}</h2>
            <span>{{ __($description) }}</span>

            <x-layout.grid>
                <x-marked-block>
                    <span>{{ __('Стоимость участия:') }}</span>
                    <span>{{ $cost }}</span>
                </x-marked-block>
                <x-marked-block>
                    <span>{{ __('Задача') }}</span>
                    <span>{{ __('Максимальный урон') }}</span>
                </x-marked-block>
                <x-marked-block>
                    <span>{{ __('Призовой фонд') }}</span>
                    <span>{{ $prizeFund }}</span>
                </x-marked-block>
                <x-marked-block>
                    <span>{{ __('Призовых мест') }}</span>
                    <span>{{ $prizePlace }}/{{ $prizePlaceTotal }}</span>
                </x-marked-block>
                <x-marked-block>
                    <span>{{ __('Уровень техники') }}</span>
                    <span>{{ collect($level)->implode(' ') }}</span>
                </x-marked-block>
                <x-marked-block>
                    <span>{{ __('Тип техники') }}</span>
                    <span>{{ __('Только ТТ') }}</span>
                </x-marked-block>
            </x-layout.grid>
        </div>

        @if ($status === 'active')
            <div class="competition__img">
                <img src="https://picsum.photos/345.webp?random=1" alt="">
            </div>
        @elseif ($status === 'completed')
            <div class="competition__results">
                <h2>{{ __('Победители') }}</h2>
                <div class="table">
                    <table>
                        <thead>
                            <tr>
                                <th scope="col">{{ __('Никнейм') }}</th>
                                <th scope="col">{{ __('Место') }}</th>
                                <th scope="col">{{ __('Приз') }}</th>
                            </tr>
                        </thead>
                    </table>
                    <div class="table-body-scroll">
                        <table>
                            <tbody>
                                @for ($i = 1; $i <= 22; $i++)
                                    <tr>
                                        <td>{{ __('Никнейм') }}</td>
                                        <td>{{ $i }}</td>
                                        <td>{{ 2345 }}</td>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endif



    </x-layout.main>
</x-layouts.app>
