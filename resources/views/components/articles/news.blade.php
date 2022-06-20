@props(['news' => 1])

<x-articles.article class="news-item" flex>
    <x-slot:title>
        Title
    </x-slot:title>

    <p>Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты.</p>
    {{-- {{ $slot }} --}}

    <x-slot:footer>
        <a href="{{ route('news.show', ['news' => $news]) }}">Link</a>
    </x-slot:footer>
</x-articles.article>
