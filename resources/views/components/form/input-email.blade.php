{{-- @props(['disabled' => false])

<x-form.input {{ $attributes->merge(['type' => 'text']) }} :disabled="$disabled" /> --}}

<x-form.input {{ $attributes->merge(['type' => 'email', 'name' => 'email']) }} />
