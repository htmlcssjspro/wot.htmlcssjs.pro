@props([
    'logo' => 'https://via.placeholder.com/53.webp/FF974C/FFFFFF?text=Logo',
    'title' => 'Logo',
])

<div {{ $attributes->class(['logo']) }}>
    <a href="{{ route('home') }}">
        <img src="{{ $logo }}" alt="logo">
        <span>{{ $title }}</span>
    </a>
</div>
