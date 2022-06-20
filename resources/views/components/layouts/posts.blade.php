@props(['title', 'description','flex' => false, 'grid' => false])

<x-layouts.app :title="$title" :description="$description">
    {{-- <x-layout.main {{ $attributes->class('posts') }} :flex="$flex" :grid="$grid"> --}}
        {{ $slot }}
    {{-- </x-layout.main> --}}
</x-layouts.app>
