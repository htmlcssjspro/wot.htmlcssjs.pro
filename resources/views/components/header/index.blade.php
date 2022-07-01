@props(['slider'])

<x-layout.header wrapper>

    <x-slot:top>
        <x-layout.wrapper class="header__top">
            <x-navbar class="navbar_top" flex>
                <x-navbar.list group="left">
                    <x-navbar.item>
                        <x-logo class="header__logo" />
                    </x-navbar.item>
                    <x-navbar.item dropdown>
                        <x-dropdown.toggle value="Партнерам" />
                        <x-navbar.list dropdown-list>
                            <x-navbar.item dropdown-item>
                                <x-link href="{{ route('referral.player') }}" value="Игрокам" />
                            </x-navbar.item>
                            <x-navbar.item dropdown-item>
                                <x-link href="{{ route('referral.developer') }}" value="Вебмастерам" />
                            </x-navbar.item>
                        </x-navbar.list>
                    </x-navbar.item>
                </x-navbar.list>
                <x-navbar.list group="right">
                    <x-navbar.item dropdown>
                        <x-dropdown.toggle value="Помощь" />
                        <x-navbar.list dropdown-list>
                            <x-navbar.item dropdown-item>
                                <x-link href="{{ route('instructions') }}" value="Инструкции для игроков" />
                            </x-navbar.item>
                            <x-navbar.item dropdown-item>
                                <x-link href="{{ route('faq') }}" value="Частозадаваемые вопросы" />
                            </x-navbar.item>
                        </x-navbar.list>
                    </x-navbar.item>
                    @guest
                        <x-navbar.item>
                            <x-link href="{{ route('login') }}" value="Вход" class="btn btn_border p-cell" />
                        </x-navbar.item>
                        <x-navbar.item>
                            <x-link href="{{ route('register') }}" value="Регистрация" class="btn btn_border p-cell" />
                        </x-navbar.item>
                    @endguest
                    @auth
                        <x-navbar.item>
                            <x-link href="{{ route('user.profile') }}" value="Личный кабинет" class="user-icon" />
                        </x-navbar.item>
                        <x-navbar.item>
                            <div class="user">
                                <span class="name">{{ auth()->user()->nickname }}</span>
                                <span class="gold">{{ auth()->user()->balance->total }}</span>
                            </div>
                        </x-navbar.item>
                        <x-navbar.item>
                            <x-link href="{{ route('user.buygold') }}" value="Пополнение счета"
                                class="btn btn_border p-cell" />
                        </x-navbar.item>
                    @endauth
                </x-navbar.list>
            </x-navbar>
            <x-navbar class="navbar_top" flex>
                <x-navbar.list group="right">
                    <x-navbar.item>
                        <x-link href="{{ route('login') }}" value="Вход" class="btn btn_border p-cell" />
                    </x-navbar.item>
                    <x-navbar.item>
                        <x-link href="{{ route('register') }}" value="Регистрация" class="btn btn_border p-cell" />
                    </x-navbar.item>
                    <x-navbar.item>
                        <x-link href="{{ route('user.profile') }}" value="Личный кабинет" class="user-icon" />
                    </x-navbar.item>
                    <x-navbar.item>
                        <div class="user">
                            <span class="name">{{ auth()->user()->nickname }}</span>
                            <span class="gold">{{ auth()->user()->balance->total }}</span>
                        </div>
                    </x-navbar.item>
                    <x-navbar.item>
                        <x-link href="{{ route('user.buygold') }}" value="Пополнение счета"
                            class="btn btn_border p-cell" />
                    </x-navbar.item>
                </x-navbar.list>
            </x-navbar>
        </x-layout.wrapper>
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

    <x-slot:bottom>
        <x-layout.content class="header__bottom">
            <x-layout.wrapper>
                <x-navbar list class="navbar_bottom">
                    <x-navbar.item>
                        <x-link href="{{ route('news.index') }}" value="Новости" />
                    </x-navbar.item>
                    <x-navbar.item>
                        <x-link href="{{ route('raiting') }}" value="Рейтинг игроков" />
                    </x-navbar.item>
                    <x-navbar.item>
                        <x-link href="{{ route('instructions') }}" value="Инструкции" />
                    </x-navbar.item>
                    <x-navbar.item>
                        <x-link href="{{ route('posts.index') }}" value="Блог" />
                    </x-navbar.item>
                    <x-navbar.item>
                        <x-link href="{{ route('faq') }}" value="FAQ" />
                    </x-navbar.item>
                </x-navbar>
            </x-layout.wrapper>
        </x-layout.content>
    </x-slot:bottom>
</x-layout.header>
