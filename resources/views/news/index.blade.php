<x-layouts.posts :title="$title" :description="$description" header-slider>
    <x-layout.main class="posts news" grid>
        <x-slot:top>
            <h1>{{ __($h1) }}</h1>
        </x-slot:top>

        @for ($i = 1; $i <= 15; $i++)
            <x-articles.news :news="'new' . $i" />
        @endfor

        {{-- <x-slot:bottom>
            news-main main__bottom
        </x-slot:bottom> --}}
    </x-layout.main>
</x-layouts.posts>
