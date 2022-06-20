<x-slot:bottom>
    <div class="header__wrapper">
        <nav class="navbar header__nav">
            <ul class="navbar_bottom">
                <li class="navbar__item">
                    <a href="{{ route('news') }}">{{ __('Новости') }}</a>
                </li>
                {{-- <li class="navbar__item dropdown-menu">
                    <div class="dropdown-menu__toggle">
                        {{ __('Новости') }}
                    </div>
                    <ul class="dropdown-menu__menu">
                        <li class="dropdown__item">
                            <a href="#">{{ __('Новость1') }}</a>
                        </li>
                        <li class="dropdown__item">
                            <a href="#">{{ __('Новость2') }}</a>
                        </li>
                        <li class="dropdown__item">
                            <a href="#">{{ __('Новость3') }}</a>
                        </li>
                        <li class="dropdown__item">
                            <a href="#">{{ __('Новость4') }}</a>
                        </li>
                        <li class="dropdown__item">
                            <a href="#">{{ __('Новость5') }}</a>
                        </li>
                    </ul>
                </li> --}}
                <li class="navbar__item">
                    <a href="#">{{ __('Рейтинг игроков') }}</a>
                </li>
                <li class="navbar__item">
                    <a href="#">{{ __('Инструкции') }}</a>
                </li>
                <li class="navbar__item">
                    <a href="#">{{ __('Блог') }}</a>
                </li>
                <li class="navbar__item">
                    <a href="#">{{ __('FAQ') }}</a>
                </li>
            </ul>
        </nav>
    </div>
</x-slot:bottom>
