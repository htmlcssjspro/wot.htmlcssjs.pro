@props(['value' => null])

<label {{ $attributes }}>
    {{ $value ? __($value) : $slot }}
</label>
