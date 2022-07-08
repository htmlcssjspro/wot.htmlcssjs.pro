@props(['value' => null, 'disabled' => false])

{{-- <button {{ $attributes->class(['btn'])->merge(['type' => 'button']) }} @disabled($disabled) > --}}
<button {{ $attributes->class(['btn'])->merge(['type' => 'button']) }} >
    {{ $value ? __($value) : $slot }}
</button>
