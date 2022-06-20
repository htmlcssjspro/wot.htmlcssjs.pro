<li class="navbar__item">
    <button class="header__btn">
        {{ __('Пополнение счета') }}
    </button>
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
    <ul class="dropdown-menu__menu">
        <li>
            <a class="dropdown__item" href="{{ route('get-gold') }}">
                {{ __('Пополнение счета') }}
            </a>
        </li>
        <li>
            <a class="dropdown__item" href="{{ route('get-cash') }}">
                {{ __('Вывод средств') }}
            </a>
        </li>
    </ul>
</li>
