<x-layouts.app :meta-title="$metaTitle" :meta-description="$metaDescription" header-slider>

    <x-layout.container master="home" wrapper grid>

        <x-layout.aside class="home">
            @php
                $nations = [
                    'usr' => 'СССР',
                    'deu' => 'Германия',
                    'usa' => 'США',
                    'fra' => 'Франция',
                    'gbr' => 'Великобритания',
                    'cze' => 'Чехословакия',
                    'chi' => 'Китай',
                    'jpn' => 'Япония',
                    'pol' => 'Польша',
                    'swe' => 'Швеция',
                    'ita' => 'Италия',
                ];
                $levels = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
                $vehicleTypes = [
                    'lt' => 'ЛТ',
                    'st' => 'СТ',
                    'tt' => 'ТТ',
                    'pt' => 'ПТ',
                    'sau' => 'САУ',
                ];
                $taskTypes = [
                    'damage-max' => 'Максимальный урон',
                    'damage-average' => 'Средний урон',
                    'damage-blocked' => 'Заблокированный урон',
                    'damage-light' => 'Урон по засвету',
                    'damage-assist' => 'Урон по асисту',
                    'combo' => 'Комбо соревнование',
                    'fun' => 'Фан соревнование',
                    'super' => 'Супер-соревнование',
                ];
                $durations = [
                    'fix' => 'С фиксированной продолжительностью',
                    'day' => 'На весь день',
                ];
                $prizes = [
                    'igold' => 'iGold',
                    'prem-v' => 'Премиум техника',
                    'prem-acc' => 'Премиум аккаунты',
                    'kit' => 'Наборы',
                ];
            @endphp
            <x-slot:top>
                {{-- class="aside__home-top" --}}
                <span>{{ __('Фильтры') }}</span>
                <button id="filter-reset" type="reset" form="filter" class="">
                    {{ __('Сбросить') }}
                </button>
            </x-slot:top>

            <form id="filter" class="filter" action="#" method="POST">
                @csrf
                <fieldset form="filter" class="nation dropdown-filter">
                    <legend class="tt_uc dropdown-filter__toggle flex">
                        {{ __('НАЦИЯ') }}
                    </legend>
                    <x-layout.grid class="dropdown-filter__content">
                        @foreach ($nations as $ticker => $nation)
                            <div class="checkbox">
                                <input type="checkbox" id="nation-{{ $ticker }}" name="nation"
                                    value="{{ $ticker }}">
                                <label for="nation-{{ $ticker }}" class="checkbox__label">
                                    <span class="flag flag_35 flag_{{ $ticker }}"></span>
                                    <span>{{ __($nation) }}</span>
                                </label>
                            </div>
                        @endforeach
                    </x-layout.grid>
                </fieldset>

                <fieldset form="filter" class="level dropdown-filter">
                    <legend class="tt-uc dropdown-filter__toggle flex">
                        {{ __('УРОВЕНЬ ТАНКА') }}
                    </legend>
                    <x-layout.flex class="dropdown-filter__content">
                        @foreach ($levels as $level)
                            <div class="checkbox">
                                <input type="checkbox" id="level-{{ $level }}" name="level"
                                    value="{{ $level }}">
                                <label for="level-{{ $level }}" class="checkbox__label">
                                    <span class="flag flag_15 flag_{{ $level }}"></span>
                                    <span>{{ $level }}</span>
                                </label>
                            </div>
                        @endforeach
                    </x-layout.flex>
                </fieldset>

                <fieldset form="filter" class="v-type dropdown-filter">
                    <legend class="tt-uc dropdown-filter__toggle flex">
                        {{ __('ТИП ТЕХНИКИ') }}
                    </legend>
                    <x-layout.flex class="dropdown-filter__content">
                        @foreach ($vehicleTypes as $id => $type)
                            <div class="checkbox">
                                <input type="checkbox" id="vehicle-type-{{ $id }}" name="vehicle-type"
                                    value="{{ $id }}">
                                <label for="vehicle-type-{{ $id }}" class="checkbox__label">
                                    <span class="flag flag_15 flag_{{ $id }}"></span>
                                    <span>{{ __($type) }}</span>
                                </label>
                            </div>
                        @endforeach
                    </x-layout.flex>
                </fieldset>

                <fieldset form="filter" class="task-type dropdown-filter">
                    <legend class="tt-uc dropdown-filter__toggle flex">
                        {{ __('ТИП ЗАДАНИЯ') }}
                    </legend>
                    <x-layout.flex class="dropdown-filter__content">
                        @foreach ($taskTypes as $id => $type)
                            <div class="checkbox">
                                <input type="checkbox" id="task-type-{{ $id }}" name="task-type"
                                    value="{{ $id }}">
                                <label for="task-type-{{ $id }}" class="checkbox__label">
                                    <span class="flag flag_35 flag_{{ $id }}"></span>
                                    <span>{{ __($type) }}</span>
                                </label>
                            </div>
                        @endforeach
                    </x-layout.flex>
                </fieldset>

                <fieldset form="filter" class="availability dropdown-filter">
                    <legend class="dropdown-filter__toggle flex">
                        {{ __('Доступность') }}
                    </legend>
                    <x-layout.flex class="dropdown-filter__content">
                        <div class="checkbox">
                            <input type="checkbox" id="availability" name="availability" value="available" checked>
                            <label for="availability" class="checkbox__label">
                                <span class="flag flag_15"></span>
                                <span>{{ __('Только доступные для участия') }}</span>
                            </label>
                        </div>
                    </x-layout.flex>
                </fieldset>

                <fieldset form="filter" class="cost dropdown-filter">
                    <legend class="dropdown-filter__toggle flex">
                        {{ __('Стоимость участия') }}
                    </legend>
                    <div class="dropdown-filter__content">
                        <x-double-range id="cost" form="filter" min="10" max="1000" step="10" />
                    </div>
                </fieldset>

                <fieldset form="filter" class="duration dropdown-filter">
                    <legend class="dropdown-filter__toggle flex">
                        {{ __('Продолжительность') }}
                    </legend>
                    <x-layout.flex class="dropdown-filter__content">
                        @foreach ($durations as $id => $duration)
                            <div class="checkbox">
                                <input type="checkbox" id="duration-{{ $id }}" name="duration"
                                    value="{{ $id }}">
                                <label for="duration-{{ $id }}" class="checkbox__label">
                                    <span class="flag flag_15 flag_{{ $id }}"></span>
                                    <span>{{ __($duration) }}</span>
                                </label>
                            </div>
                        @endforeach
                    </x-layout.flex>
                </fieldset>

                <fieldset form="filter" class="prize dropdown-filter">
                    <legend class="dropdown-filter__toggle flex">
                        {{ __('Тип приза') }}
                    </legend>
                    <x-layout.flex class="dropdown-filter__content">
                        @foreach ($prizes as $id => $prize)
                            <div class="checkbox">
                                <input type="checkbox" id="prize-{{ $id }}" name="prize"
                                    value="{{ $id }}">
                                <label for="prize-{{ $id }}" class="checkbox__label">
                                    <span class="flag flag_15 flag_{{ $id }}"></span>
                                    <span>{{ __($prize) }}</span>
                                </label>
                            </div>
                        @endforeach
                    </x-layout.flex>
                </fieldset>

                <fieldset form="filter" class="task-super dropdown-filter">
                    <legend class="dropdown-filter__toggle flex">
                        {{ __('Тип соревенования') }}
                    </legend>
                    <x-layout.flex class="dropdown-filter__content">
                        <div class="checkbox">
                            <input type="checkbox" id="task-super" name="task-super" value="super">
                            <label for="task-super" class="checkbox__label">
                                <span class="flag flag_15"></span>
                                <span>{{ __('Только супер-соревнования') }}</span>
                            </label>
                        </div>
                    </x-layout.flex>
                </fieldset>

                <fieldset form="filter" class="form__submit">
                    <x-form.submit form="filter" class="btn_center">
                        {{ __('Сохранить') }}
                    </x-form.submit>
                </fieldset>

            </form>

        </x-layout.aside>

        <x-layout.main class="home" wrapper grid>
            <x-slot:top-wrapper>
                <x-layout.flex class="filters">
                    @php
                        $filterTags = ['CCCP', 'ЛТ'];
                    @endphp
                    <span class="t20">{{ __('Фильтры') }}</span>
                    <x-layout.flex class="filters__wrapper">
                        @foreach ($filterTags as $item)
                            <span class="filter-tag">
                                <span>{{ $item }}</span>
                                <button class="xmark"></button>
                            </span>
                        @endforeach
                    </x-layout.flex>
                </x-layout.flex>
                <x-layout.flex class="sorting">
                    <button>{{ __('По дате завершения') }}</button>
                    <button>{{ __('По стоимости участия') }}</button>
                    <button>{{ __('По величине призовых') }}</button>
                    <button>{{ __('По количеству участников') }}</button>
                </x-layout.flex>
            </x-slot:top-wrapper>

            {{-- <x-layout.grid class="main__content"> --}}
            @for ($i = 0; $i < 15; $i++)
                <x-articles.competition />
            @endfor
            {{-- </x-layout.grid> --}}

            <x-slot:bottom-wrapper class="pagination flex">
                @php
                    $pages = [1, 2, 3, 4, 5];
                @endphp
                <button class="prev"></button>
                @foreach ($pages as $item)
                    <button class="page {{ $loop->first ? 'active' : '' }}">
                        {{ $item }}
                    </button>
                @endforeach
                <button class="next"></button>
            </x-slot:bottom-wrapper>

        </x-layout.main>

    </x-layout.container>

    <x-sections.slider title="Наибольший выигрыш">
        <x-swiper class="slider1" :navigation="true">
            @for ($i = 0; $i < 10; $i++)
                <x-swiper.slide>
                    <x-articles.competition />
                </x-swiper.slide>
            @endfor
        </x-swiper>
    </x-sections.slider>

    <x-sections.slider title="Скоро завершатся">
        <x-swiper class="slider2" :navigation="true">
            @for ($i = 0; $i < 10; $i++)
                <x-swiper.slide>
                    <x-articles.competition />
                </x-swiper.slide>
            @endfor
        </x-swiper>
    </x-sections.slider>

    <x-sections.slider title="Скоро начнутся">
        <x-swiper class="slider3" :navigation="true">
            @for ($i = 0; $i < 10; $i++)
                <x-swiper.slide>
                    <x-articles.competition />
                </x-swiper.slide>
            @endfor
        </x-swiper>
    </x-sections.slider>

    <x-sections.slider title="Рекомендуемые">
        <x-swiper class="slider4" :navigation="true">
            @for ($i = 0; $i < 10; $i++)
                <x-swiper.slide>
                    <x-articles.competition />
                </x-swiper.slide>
            @endfor
        </x-swiper>
    </x-sections.slider>

    <x-sections.slider title="Последние просмотренные">
        <x-swiper class="slider5" :navigation="true">
            @for ($i = 0; $i < 10; $i++)
                <x-swiper.slide>
                    <x-articles.competition />
                </x-swiper.slide>
            @endfor
        </x-swiper>
    </x-sections.slider>

</x-layouts.app>
