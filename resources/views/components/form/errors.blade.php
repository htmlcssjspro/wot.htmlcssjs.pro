@props(['errors'])

@if ($errors->any())
    <div {{ $attributes->class(['form__errors']) }}>
        <div class="">
            {{ __('Что-то пошло не так...') }}
        </div>

        <ul class="">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{-- Example

<x-form.errors class="" :errors="$errors" />

endExample --}}
