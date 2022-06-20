@props(['header', 'title', 'footer', 'flex' => false, 'grid' => false])

<article {{ $attributes->class(['article']) }}>
    <x-layout.wrapper master="article" :flex="$flex" :grid="$grid">

        @isset($header)
            {{-- <header {{ $header->attributes() }}> --}}
            <header>
                {{ $header }}
            </header>
        @endisset

        @isset($title)
            <h2>{{ $title }}</h2>
        @endisset

        {{ $slot }}

        @isset($footer)
            {{-- <footer {{ $footer->attributes() }}> --}}
            <footer>
                {{ $footer }}
            </footer>
        @endisset

    </x-layout.wrapper>
</article>
