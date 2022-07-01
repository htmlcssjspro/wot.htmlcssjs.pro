<x-layouts.app :meta-title="$metaTitle" :meta-description="$metaDescription">

    <x-layout.main class="buygold" wrapper>

        <x-slot:top-content>
            <x-layout.wrapper master="content" flex>
                <div class="form">
                    <h1>{{ __($title) }}</h1>
                    <form id="buygold" action="#" method="POST">
                        @csrf
                        <input type="number" name="amount" id="amount">
                        <button type="submit" class="btn btn_common">{{ __('Купить') }}</button>
                    </form>
                </div>
                <div class="balance flex">
                    <span>{{ __('Никнейм') }}</span>
                    <x-marked-block>
                        <span>
                            {{ __('Собственных средств:') }}
                        </span>
                        <span class="gold">
                            {{ $own }}
                        </span>
                    </x-marked-block>
                    <x-marked-block>
                        <span>
                            {{ __('Бонусных средств:') }}
                        </span>
                        <span class="gold">
                            {{ $bonus }}
                        </span>
                    </x-marked-block>
                    <x-marked-block>
                        <span>
                            {{ __('Всего средств:') }}
                        </span>
                        <span class="gold">
                            {{ $total }}
                        </span>
                    </x-marked-block>
                </div>
            </x-layout.wrapper>
        </x-slot:top-content>

        <h2>ПОДРОБНЕЕ</h2>
        <p>Настойчивость и мастерство в бою позволят вам исследовать любую ветку техники без каких-либо финансовых
            затрат. Однако вы можете приобрести специальную внутриигровую валюту — золото, которое облегчит ваше
            продвижение по дереву исследований. Золото — это прекрасная возможность сделать игровой процесс комфортнее и
            быстрее достигнуть желаемой цели.</p>

        <x-slot:bottom-wrapper class="flex">
            @for ($i = 1; $i <= 4; $i++)
                <figure class="post-more">
                    <img src="https://picsum.photos/345/180.webp?random={{ $i }}" alt="">
                    <figcaption>Покупайте премиум технику и получайте больше кредитов и опыта</figcaption>
                </figure>
            @endfor
        </x-slot:bottom-wrapper>

    </x-layout.main>

    {{-- <x-layout.container class="post-pagination" flex>
        <div class="post-pagination__left">
            <a href="#" class="left">Pagination Left</a>
        </div>
        <div class="post-pagination__social">
            <span class="tt-uc ta-c py-2">{{ __('РАССКАЖИТЕ В СОЦИАЛЬНЫХ СЕТЯХ') }}</span>
            <div class="social flex">
                @for ($i = 0; $i < 4; $i++)
                    <a href="#" class="btn btn_common p-1"></a>
                @endfor
            </div>
        </div>
        <div class="post-pagination__right">
            <a href="#" class="right">Pagination Right</a>
        </div>
    </x-layout.container>
    <x-layout.container class="post-more" flex>
        <x-slot:top>
            <h2>{{ __('Читайте также') }}</h2>
        </x-slot:top>

        @for ($i = 1; $i <= 4; $i++)
            <div class="post-more__block">
                block{{ $i }}
            </div>
        @endfor
    </x-layout.container> --}}

</x-layouts.app>
