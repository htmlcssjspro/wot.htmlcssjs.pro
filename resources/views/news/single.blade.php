<x-layouts.post :title="$title" :description="$description" header-slider>
    <x-layout.main class="post news">
        <x-slot:top>
            <h1>{{ __($title) }}</h1>
        </x-slot:top>

        <p>Content</p>
        <p>{{ $description }}</p>
        <p>{{ $content }}</p>
        <p>Content</p>
        {{-- $img --}}

        <x-slot:bottom>
            <p>{{ $author }}</p>
            <p> {{ $date }}</p>
        </x-slot:bottom>
    </x-layout.main>

    <x-layout.container class="post-pagination" flex>
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
    </x-layout.container>
</x-layouts.post>
