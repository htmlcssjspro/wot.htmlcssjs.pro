@props([
    'cost' => 10,
    'total' => 200,
    'title' => 'Название соревнования',
    'conditionBasic' => 'Основное условие',
    'conditionMain' => 'Главное условие',
    'prize' => 1000,
    'left' => 2,
])

<article {{ $attributes->class(['competition']) }}>
    <x-layout.wrapper master="competition">
        <header>
            <span>{{ __('Стоимость участия') }} <span class="gold">{{ $cost }}</span></span>
            <span>{{ __('Всего участников:') }} {{ $total }}</span>
        </header>

        <h2>{{ $title }}</h2>

        <ul>
            <li>{{ __($conditionBasic) }}</li>
            <li>{{ __($conditionMain) }}</li>
        </ul>

        <div class="prize t16">
            <span>{{ __('Призовой фонд:') }}</span>
            <span class="gold">{{ $prize }}</span>
        </div>

        <footer>
            <span>{{ __('До завершения:') }} {{ $left }}д</span>
            <button>{{ __('Участвовать') }}</button>
        </footer>
    </x-layout.wrapper>

</article>
