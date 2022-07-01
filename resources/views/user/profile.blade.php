<x-layouts.app :meta-title="$metaTitle" :meta-description="$metaDescription" header-slider>

    <x-layout.aside class="user profile">
        <nav class="flex">
            <ul class="nav nav-tabs flex">
                @php
                    $tabs = [
                        'summary' => 'Сводка',
                        'battles' => 'Соревнования',
                        'referral' => 'Реферальная программа',
                    ];
                @endphp
                @foreach ($tabs as $tab => $legend)
                    <li class="nav-item">
                        <button @class(['btn', 'btn_tab', 'active' => $loop->first]) data-tab="{{ $tab }}">
                            {{ __($legend) }}
                        </button>
                    </li>
                @endforeach
            </ul>
            <ul class="nav flex">
                <li class="nav-item">
                    <a class="nav-link active" href="#">{{ __('Пополнение счета') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">{{ __('Вывод средств') }}</a>
                </li>
            </ul>
        </nav>
    </x-layout.aside>

    <x-layout.main class="user profile" wrapper>

        {{-- <h1>{{ __('Личный кабинет') }}</h1> --}}


        <div class="tab-content summary active" data-tab="summary">
            <div class="total">
                <div class="avatar">
                    <img src="https://via.placeholder.com/70.webp/FF974C/FFFFFF?text=Avatar" alt="avatar">
                </div>
                <div>
                    <span class="t30 fw-7">{{ $raitingTotal }}</span>
                    <span>{{ __('Общий рейтинг') }}</span>
                </div>
            </div>
            @php
                $raiting = [
                    'battles' => 'Бои',
                    'wins' => 'Побед',
                    'expMax' => 'Максимальный опыт за бой',
                    'expAvg' => 'Средний опыт за бой',
                    'dmgMax' => 'Максимальный урон за бой',
                    'dmgAvg' => 'Средний урон за бой',
                    'destroyMax' => 'Максимально уничтожено за бой',
                    'destroyAvg' => 'В cреднем уничтожено за бой',
                    'hit' => 'Попадания',
                    'class' => 'Знаки классности',
                ];
            @endphp
            <x-layout.grid>
                @foreach ($raiting as $name => $title)
                    <x-marked-block>
                        <span class="t16">{{ __($title) }}</span>
                        <span>{{ $$name }}</span>
                    </x-marked-block>
                @endforeach
            </x-layout.grid>
        </div>
        <div class="tab-content competition" data-tab="competition">
            <x-layout.flex>
                <x-layout.flex class="competition__active">
                    <img src="https://via.placeholder.com/52.webp/#D9D9D9/FFFFFF?text=Active">
                    <span class="ta-c">Активные<br>Соревнования</span>
                    <table>
                        <tbody>
                            @for ($i = 0; $i < 10; $i++)
                                <tr>
                                    <td>{{ __('Максимальный урон') }}</td>
                                    <td>{{ __('Призовой фонд:') }} <span class="gold">1000</span> </td>
                                    <td>{{ __('До завершения: 2д') }}</td>
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                </x-layout.flex>
                <x-layout.flex class="competition__archive">
                    <img src="https://via.placeholder.com/52.webp/#D9D9D9/FFFFFF?text=Archive">
                    <span class="ta-c">Архивные<br>Соревнования</span>
                    <table>
                        <tbody>
                            @for ($i = 0; $i < 10; $i++)
                                <tr>
                                    <td>{{ __('Максимальный урон') }}</td>
                                    <td>{{ __('Призовой фонд:') }} <span class="gold">1000</span> </td>
                                    <td>{{ __('До завершения: 2д') }}</td>
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                </x-layout.flex>
            </x-layout.flex>
        </div>
        <div class="tab-content referral" data-tab="referral">
            <x-layout.flex>
                <div class="left">
                    <div class="total">
                        <div class="avatar">
                            <img src="https://via.placeholder.com/70.webp/FF974C/FFFFFF?text=Avatar" alt="avatar">
                        </div>
                        <div>
                            @php
                                $raitingTotal = 100;
                            @endphp
                            <span class="t30 fw-7">{{ __($raitingTotal) }}</span>
                            <span>{{ __('Всего рефералов') }}</span>
                        </div>
                    </div>
                    <div class="total">
                        <div class="avatar">
                            <img src="https://via.placeholder.com/70.webp/FF974C/FFFFFF?text=Avatar" alt="avatar">
                        </div>
                        <div>
                            @php
                                $raitingTotal = 1000;
                            @endphp
                            <span class="t30 fw-7">{{ __($raitingTotal) }}</span>
                            <span>{{ __('Общий доход от рефералов') }}</span>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <table>
                        <thead>
                            <tr>
                                <th scope="col">{{ __('Никнейм') }}</th>
                                <th scope="col">{{ __('Рейтинг') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 0; $i < 10; $i++)
                                <tr>
                                    <td>{{ __('Никнейм') }}</td>
                                    <td>{{ 2345 }}</td>
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
            </x-layout.flex>
        </div>
    </x-layout.main>
</x-layouts.app>
