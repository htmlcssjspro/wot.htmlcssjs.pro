@props(['value' => null])

<a {{ $attributes->class(['link'])->merge(['href' => '#']) }}>
    {{ $value ? __($value) : $slot }}
</a>
