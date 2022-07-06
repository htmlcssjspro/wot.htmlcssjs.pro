<x-layout.aside {{ $attributes->class(['filter']) }} master="filter">

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
        $levels = [
            1 => 'I',
            2 => 'II',
            3 => 'III',
            4 => 'IV',
            5 => 'V',
            6 => 'VI',
            7 => 'VII',
            8 => 'VIII',
            9 => 'IX',
            10 => 'X',
        ];
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
            'fix' => 'Фиксированная',
            'day' => 'На весь день',
        ];
        $prizes = [
            'igold' => [
                'title' => 'iGold',
                'symbol' => 'igold',
            ],
            'kit' => [
                'title' => 'Наборы',
                'symbol' => 'kit',
            ],
            'prem-v' => [
                'title' => 'Премиум техника',
                'symbol' => 'tank',
            ],
            'prem-acc' => [
                'title' => 'Премиум аккаунты',
                'symbol' => 'user',
            ],
        ];
    @endphp

    <x-layout.wrapper class="filter__top" flex>
        <span>{{ __('Фильтры') }}</span>
        <x-form.reset id="filter-reset" form="filter" value="Сбросить" class="btn_unset" />
    </x-layout.wrapper>

    <x-layout.wrapper>

        <x-form id="filter" form-id="filter">

            <x-form.fieldset legend="Страна" form="filter" class="nation">
                <x-layout.flex>
                    @foreach ($nations as $id => $label)
                        <x-form.checkbox id="nation-{{ $id }}" name="nation" :input-value="$id"
                            label-value="{{ $label }}" flex>
                            <span class="flag flag_{{ $id }}"></span>
                        </x-form.checkbox>
                    @endforeach
                </x-layout.flex>
            </x-form.fieldset>

            <x-form.fieldset legend="Уровень танка" form="filter" class="level">
                <x-layout.flex>
                    @foreach ($levels as $id => $label)
                        <x-form.checkbox id="level-{{ $id }}" name="level" :input-value="$id">
                            <span class="ta-c">{{ $label }}</span>
                        </x-form.checkbox>
                    @endforeach
                </x-layout.flex>
            </x-form.fieldset>

            <x-form.fieldset legend="Тип техники" form="filter" class="v-type">
                <x-layout.flex>
                    @foreach ($vehicleTypes as $id => $label)
                        <x-form.checkbox id="vehicle-type-{{ $id }}" name="vehicle-type" :input-value="$id"
                            :label-value="$label" flex>
                            <span class="vehicle vehicle_{{ $id }}"></span>
                        </x-form.checkbox>
                    @endforeach
                </x-layout.flex>
            </x-form.fieldset>

            <x-form.fieldset legend="Тип задания" form="filter" class="task-type">
                <x-layout.flex>
                    @foreach ($taskTypes as $id => $label)
                        <x-form.checkbox id="task-type-{{ $id }}" name="task-type" :input-value="$id"
                            :label-value="$label" />
                    @endforeach
                </x-layout.flex>
            </x-form.fieldset>

            <x-form.fieldset legend="Доступность" form="filter" class="availability">
                <x-layout.flex>
                    <x-form.checkbox id="availability" name="availability" input-value="available"
                        label-value="Только доступные" />
                </x-layout.flex>
            </x-form.fieldset>

            <x-form.fieldset form="filter" class="cost">
                <legend class="flex">
                    <span>{{ __('Стоимость участия') }}</span>
                    <x-svg-symbol href="#igold" class="igold" />
                </legend>
                <x-double-range id="cost" form="filter" min="10" max="1000" step="10" />
            </x-form.fieldset>

            <x-form.fieldset legend="Продолжительность" form="filter" class="duration">
                <x-layout.flex>
                    @foreach ($durations as $id => $label)
                        <x-form.checkbox id="duration-{{ $id }}" name="duration" :input-value="$id"
                            :label-value="$label" />
                    @endforeach
                </x-layout.flex>
            </x-form.fieldset>

            <x-form.fieldset legend="Тип приза" form="filter" class="prize">
                <x-layout.flex>
                    @foreach ($prizes as $id => $prize)
                        <x-form.checkbox id="prize-{{ $id }}" name="prize" :input-value="$id"
                            :label-value="$prize['title']" flex>
                            <x-svg-symbol href="#{{ $prize['symbol'] }}" class="prize" />
                        </x-form.checkbox>
                    @endforeach
                </x-layout.flex>
            </x-form.fieldset>

            <x-form.fieldset legend="Тип соревенования" form="filter" class="task-super">
                <x-layout.flex>
                    <x-form.checkbox id="task-super" name="task-super" input-value="super"
                        label-value="Только супер-соревнования" flex>
                        <x-svg-symbol href="#super" class="super" />
                    </x-form.checkbox>
                </x-layout.flex>
            </x-form.fieldset>

            <x-form.fieldset form="filter" class="form__submit">
                <x-form.submit form="filter" class="btn_full" value="Применить" />
            </x-form.fieldset>

        </x-form>
    </x-layout.wrapper>
</x-layout.aside>
