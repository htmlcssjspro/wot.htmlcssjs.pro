@props([
    'username' => 'Игрок1',
    'balance' => 234,
])

<x-slot:top>
    <nav class="navbar navbar_top">
        <ul class="navbar__group_left">
            <li class="navbar__item">
                <x-logo class="header__logo" />
            </li>
            <li class="navbar__item dropdown-menu">
                <div class="dropdown-menu__toggle">
                    {{ __('Партнерам') }}
                </div>
                <ul class="dropdown-menu__menu">
                    <li>
                        <a class="dropdown__item" href="{{ route('ref-player') }}">
                            {{ __('Игрокам') }}
                        </a>
                    </li>
                    <li>
                        <a class="dropdown__item" href="{{ route('ref-dev') }}">
                            {{ __('Вебмастерам') }}
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <ul class="navbar__group_right">
            <li class="navbar__item dropdown-menu">
                <div class="dropdown-menu__toggle">
                    {{ __('Помощь') }}
                </div>
                <div class="dropdown-menu__menu">
                    <a class="dropdown__item" href="{{ route('instructions') }}">
                        {{ __('Инструкции для игроков') }}
                    </a>
                    <a class="dropdown__item" href="{{ route('faq') }}">
                        {{ __('Частозадаваемые вопросы') }}
                    </a>
                </div>
            </li>
            <li class="navbar__item">
                <div class="user-icon">
                    {{ __('Личный кабинет') }}
                </div>
            </li>
            <li>
                <div class="user">
                    <span class="name">{{ $username }}</span>
                    <span class="gold">{{ $balance }}</span>
                </div>
            </li>
            <li class="navbar__item">
                <button class="header__btn">
                    {{ __('Пополнение счета') }}
                </button>
            </li>
        </ul>
    </nav>
</x-slot:top>
