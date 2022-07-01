<x-layouts.posts :meta-title="$metaTitle" :meta-description="$metaDescription" header-slider>
    <x-layout.main class="posts news" wrapper grid>
        <x-slot:top-wrapper>
            <h1>{{ __($h1) }}</h1>
        </x-slot:top-wrapper>

        @for ($i = 1; $i <= 15; $i++)
            <x-articles.news :news="'new' . $i" />
        @endfor

        {{-- <x-slot:bottom>
            news-main main__bottom
        </x-slot:bottom> --}}
    </x-layout.main>
</x-layouts.posts>
