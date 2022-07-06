@props(['legend'])

<fieldset {{ $attributes }}>
    @isset($legend)
        <legend>
            {{ __($legend) }}
        </legend>
    @endisset

    {{ $slot }}

</fieldset>
