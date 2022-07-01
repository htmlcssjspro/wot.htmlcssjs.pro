<x-layouts.app :meta-title="$metaTitle" :meta-description="$metaDescription">
    <x-layout.container class="admin" wrapper grid>

        <x-slot:header>
            <h1>{{ __('Панель администратора') }}</h1>
        </x-slot:header>

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
                        <a href="{{ route($route) }}" @class([
                            'p-cell',
                            'active' => route($route) === url()->current(),
                        ])>
                            {{ __($link) }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </x-layout.aside>

        {{ $slot }}

    </x-layout.container>
</x-layouts.app>
