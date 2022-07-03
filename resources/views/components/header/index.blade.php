@props(['slider'])

<x-layout.header wrapper>

    <x-slot:top>
        <x-layout.content wrapper class="header__top">
            <x-navbar class="navbar_top" flex>
                <x-navbar.list group="left">
                    <x-navbar.item>
                        <x-logo class="logo_header" />
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
                            <x-link href="{{ route('user.buygold') }}" value="Пополнение счета" class="btn btn_main" />
                        </x-navbar.item>
                    @endauth
                </x-navbar.list>
            </x-navbar>
            <x-navbar class="navbar_top" flex>
                <x-navbar.list group="right">
                    <x-navbar.item>
                        <x-link href="{{ route('login') }}" value="Вход" class="btn btn_main" />
                    </x-navbar.item>
                    <x-navbar.item>
                        <x-link href="{{ route('register') }}" value="Регистрация" class="btn btn_main" />
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
                        <x-link href="{{ route('user.buygold') }}" value="Пополнение счета" class="btn btn_main" />
                    </x-navbar.item>
                </x-navbar.list>
            </x-navbar>
        </x-layout.content>
    </x-slot:top>

    @isset($slider)
        @if ($slider)
            <x-swiper class="header-slider">

                @php
                    $slides = [
                        'slide1' => [
                            'img' => url('images/slider/slider1.png'),
                            'alt' => 'slider-img',
                            'title' => "Прими\rучастие в\rсоревновании",
                            'link-title' => 'Максимальный урон',
                            'route' => 'battles/battle1',
                        ],
                        'slide2' => [
                            'img' => url('images/slider/slider1.png'),
                            'alt' => 'slider-img',
                            'title' => "Прими\rучастие в\rсоревновании",
                            'link-title' => 'Максимальный урон',
                            'route' => 'battles/battle2',
                        ],
                        'slide3' => [
                            'img' => url('images/slider/slider1.png'),
                            'alt' => 'slider-img',
                            'title' => "Прими\rучастие в\rсоревновании",
                            'link-title' => 'Максимальный урон',
                            'route' => 'battles/battle3',
                        ],
                        'slide4' => [
                            'img' => url('images/slider/slider1.png'),
                            'alt' => 'slider-img',
                            'title' => "Прими\rучастие в\rсоревновании",
                            'link-title' => 'Максимальный урон',
                            'route' => 'battles/battle4',
                        ],
                        'slide5' => [
                            'img' => url('images/slider/slider1.png'),
                            'alt' => 'slider-img',
                            'title' => "Прими\rучастие в\rсоревновании",
                            'link-title' => 'Максимальный урон',
                            'route' => 'battles/battle5',
                        ],
                    ];
                @endphp

                @foreach ($slides as $name => $item)
                    <x-swiper.slide>
                        <img src="{{ $item['img'] }}" alt="{{ $item['alt'] }}">
                        <h2 class="title">{{ $item['title'] }}</h2>
                        {{-- <x-link :href="route($item['route']) ?? '#'" class="btn btn_slider" :value="$item['link-title']" /> --}}
                        <x-link class="btn btn_slider" :value="$item['link-title']" />
                    </x-swiper.slide>
                @endforeach

                <x-slot:navigation>
                    <x-swiper.btn-prev>
                        <x-svg-symbol href="#caret-left" fill="white" width="21" height="37" />
                    </x-swiper.btn-prev>
                    <x-swiper.btn-next>
                        <x-svg-symbol href="#caret-right" fill="white" width="21" height="37" />
                    </x-swiper.btn-next>
                </x-slot:navigation>

            </x-swiper>
        @endif
    @endisset

    <x-slot:bottom>
        <x-layout.content wrapper class="header__bottom">
            <x-navbar list class="navbar_bottom">
                @php
                    $collection = [
                        'home' => 'Главная',
                        'news.index' => 'Новости',
                        'raiting' => 'Рейтинг игроков',
                        'instructions' => 'Инструкции',
                        'posts.index' => 'Блог',
                        'faq' => 'FAQ',
                    ];
                @endphp
                @foreach ($collection as $route => $title)
                    <x-navbar.item>
                        <x-link href="{{ route($route) }}" :value="$title"
                            class="{{ route($route) === url()->current() ? 'active' : '' }}" />
                    </x-navbar.item>
                @endforeach
            </x-navbar>
        </x-layout.content>
    </x-slot:bottom>
</x-layout.header>
