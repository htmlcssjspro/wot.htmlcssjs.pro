@props(['metaTitle', 'metaDescription', 'headerSlider'])

<x-layouts.clean meta-title="Панель администратора" meta-description="Панель администратора" class="flex">

    @push('styles')
        <link rel="stylesheet" href="{{ mix('css/admin.css') }}">
    @endpush
    @push('scripts')
        <script defer src="{{ mix('js/admin.js') }}"></script>
    @endpush


    <x-header.admin />

    <x-layout.container master="admin" content grid>

        <x-slot:top>
            <div class="wrapper">
                <h1>{{ __('Панель администратора') }}</h1>
            </div>
        </x-slot:top>

        <x-layout.aside class="admin">
            <ul>
                @php
                    $links = [
                        'admin.finance' => 'Финансы',
                        'admin.referral' => 'Реферальная программа',
                        'admin.battles' => 'Соревнования',
                    ];
                @endphp
                @foreach ($links as $route => $link)
                    <li>
                        <x-link href="{{ route($route) }}" @class(['p-cell', 'active' => route($route) === url()->current()])>
                            {{ __($link) }}
                        </x-link>
                    </li>
                @endforeach
            </ul>
        </x-layout.aside>

        {{ $slot }}

    </x-layout.container>

    <x-footer.admin />

</x-layouts.clean>
