@props(['dropdown' => false, 'dropdownItem' => false])

<li {{ $attributes->class(['navbar__item', 'dropdown' => $dropdown, 'dropdown__item' => $dropdownItem]) }}>
    {{ $slot }}
</li>
