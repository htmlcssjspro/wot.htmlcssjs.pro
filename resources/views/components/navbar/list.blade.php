@props(['dropdownList' => false, 'group' => null])

<ul
    {{ $attributes->class([
        'navbar__list',
        'navbar__group' => $group,
        'navbar__group_' . $group => $group && is_string($group),
        'dropdown__list' => $dropdownList,
    ]) }}>
    {{ $slot }}
</ul>
