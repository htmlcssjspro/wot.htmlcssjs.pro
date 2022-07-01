@props([
    'required' => false,
    'autofocus' => false,
    'disabled' => false,
])

<input {{ $attributes }} {{ $required ? 'required' : '' }} {{ $autofocus ? 'autofocus' : '' }}
    {{ $disabled ? 'disabled' : '' }} />


{{-- Example

<x-input id="" type="" name=""  class=""/>
<x-form.input {{ $attributes->merge(['type' => 'type']) }} />

endExample --}}
