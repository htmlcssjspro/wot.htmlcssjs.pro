@props([
    'username' => 'Игрок1',
    'balance' => 234,
    'slider',
])

<x-layout.header>

    {{-- <x-header.top /> --}}
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
                    <a href="{{ route('user.profile') }}" class="user-icon">
                        {{ __('Личный кабинет') }}
                    </a>
                </li>
                <li>
                    <div class="user">
                        <span class="name">{{ $username }}</span>
                        <span class="gold">{{ $balance }}</span>
                    </div>
                </li>
                <li class="navbar__item">
                    <a href="{{ route('user.buygold') }}" class="header__btn btn btn_border p-cell">
                        {{ __('Пополнение счета') }}
                    </a>
                </li>
            </ul>
        </nav>
    </x-slot:top>

    @isset($slider)
        @if ($slider)
            {{-- <x-header.slider /> --}}
            <x-swiper class="header-slider">

                <x-swiper.slide>
                    <img src="https://via.placeholder.com/1440x361.webp?text=Slide1" alt="slide">
                </x-swiper.slide>
                <x-swiper.slide>
                    <img src="https://via.placeholder.com/1440x361.webp?text=Slide2" alt="slide">
                </x-swiper.slide>
                <x-swiper.slide>
                    <img src="https://via.placeholder.com/1440x361.webp?text=Slide3" alt="slide">
                </x-swiper.slide>
                <x-swiper.slide>
                    <img src="https://via.placeholder.com/1440x361.webp?text=Slide4" alt="slide">
                </x-swiper.slide>
                <x-swiper.slide>
                    <img src="https://via.placeholder.com/1440x361.webp?text=Slide5" alt="slide">
                </x-swiper.slide>

                <x-swiper.navigation />

            </x-swiper>
        @endif
    @endisset

    {{-- <x-header.bottom /> --}}
    <x-slot:bottom>
        <div class="header__wrapper">
            <nav class="navbar header__nav">
                <ul class="navbar_bottom">
                    <li class="navbar__item">
                        <a href="{{ route('news.index') }}">{{ __('Новости') }}</a>
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
                        <a href="{{ route('raiting') }}">{{ __('Рейтинг игроков') }}</a>
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

</x-layout.header>
