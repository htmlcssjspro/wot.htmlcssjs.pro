@props(['metaTitle', 'metaDescription','flex' => false, 'grid' => false])

<x-layouts.app :meta-title="$metaTitle" :meta-description="$metaDescription">
    {{-- <x-layout.main {{ $attributes->class('posts') }} :flex="$flex" :grid="$grid"> --}}
        {{ $slot }}
    {{-- </x-layout.main> --}}
</x-layouts.app>
