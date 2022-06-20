
<x-layout :title="$title" :description="$description" header-slider>
    {{-- <x-layout :title="$title" :description="$description"> --}}

    <x-layout.main class="raiting" wrapper>

        <x-slot:top>
            <h1>{{ __($h1) }}</h1>
        </x-slot:top>

        <div>
            filter
        </div>

        <div class="table">

            <table>
                <thead>
                    <tr>
                        <th scope="col">{{ __('Место') }}</th>
                        <th scope="col">{{ __('Имя') }}</th>
                        <th scope="col">{{ __('Игр всего') }}</th>
                        <th scope="col">{{ __('Побед') }}</th>
                    </tr>
                </thead>
            </table>

            <div class="table-body-scroll">
                <table>
                    <tbody>
                        @for ($i = 0; $i < 50; $i++)
                            <tr>
                                <td>{{ __($user['position'] + $i) }}</td>
                                <td>{{ __($user['nickname']) }}</td>
                                <td>{{ __($user['gamesTotal']) }}</td>
                                <td>{{ __($user['gamesWin']) }}</td>
                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>

    </x-layout.main>

</x-layout>
