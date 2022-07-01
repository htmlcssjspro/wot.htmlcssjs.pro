@props(['list' => false, 'flex' => false, 'grid' => false])

<nav {{ $attributes->class(['navbar', 'flex' => $flex, 'grid' => $grid]) }}>
    @if ($list)
        <x-navbar.list>
            {{ $slot }}
        </x-navbar.list>
    @else
        {{ $slot }}
    @endif
</nav>
