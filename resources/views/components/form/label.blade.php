@props(['value' => null, 'flex' => false, 'grid' => false])

<label {{ $attributes->class(['flex' => $flex, 'grid' => $grid]) }}>
    {{ $value ? __($value) : $slot }}
</label>
