@props([
    'logo' => 'https://via.placeholder.com/100.webp/FF974C/FFFFFF?text=Logo',
    'title' => 'Logo',
])

<div {{ $attributes->class(['logo']) }}>
    <x-link href="{{ route('home') }}" class="flex">
        <img src="{{ $logo }}" alt="logo">
        <span>{{ $title }}</span>
    </x-link>
</div>
