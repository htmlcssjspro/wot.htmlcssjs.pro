<x-layouts.app :meta-title="$metaTitle" :meta-description="$metaDescription" header-slider>

    <x-layout.container master="home" wrapper grid>

        <x-aside.filter />
        <x-aside.filters />

        <x-layout.main class="home" wrapper grid>

            @for ($i = 0; $i < 15; $i++)
                <x-articles.competition />
            @endfor

            <x-slot:bottom>
                <x-layout.wrapper class="pagination" flex>
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
                </x-layout.wrapper>
            </x-slot:bottom>

        </x-layout.main>

    </x-layout.container>

    <x-sections.slider title="Наибольший выигрыш">
        <x-swiper class="slider1" navigation>
            @for ($i = 0; $i < 10; $i++)
                <x-swiper.slide>
                    <x-articles.competition />
                </x-swiper.slide>
            @endfor
        </x-swiper>
    </x-sections.slider>

    <x-sections.slider title="Скоро завершатся">
        <x-swiper class="slider2" navigation>
            @for ($i = 0; $i < 10; $i++)
                <x-swiper.slide>
                    <x-articles.competition />
                </x-swiper.slide>
            @endfor
        </x-swiper>
    </x-sections.slider>

    <x-sections.slider title="Скоро начнутся">
        <x-swiper class="slider3" navigation>
            @for ($i = 0; $i < 10; $i++)
                <x-swiper.slide>
                    <x-articles.competition />
                </x-swiper.slide>
            @endfor
        </x-swiper>
    </x-sections.slider>

    <x-sections.slider title="Рекомендуемые">
        <x-swiper class="slider4" navigation>
            @for ($i = 0; $i < 10; $i++)
                <x-swiper.slide>
                    <x-articles.competition />
                </x-swiper.slide>
            @endfor
        </x-swiper>
    </x-sections.slider>

    <x-sections.slider title="Последние просмотренные">
        <x-swiper class="slider5" navigation>
            @for ($i = 0; $i < 10; $i++)
                <x-swiper.slide>
                    <x-articles.competition />
                </x-swiper.slide>
            @endfor
        </x-swiper>
    </x-sections.slider>

</x-layouts.app>
