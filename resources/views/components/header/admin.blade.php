<x-layout.header class="admin" content flex>
    <a href="{{ route('admin.index') }}" class="">Dashboard</a>
    <div>Hello, {{ auth()->user()->name }}!</div>
    <x-link href="{{ route('admin.logout') }}" class="btn btn_common p-cell">{{ __('Logout') }}</x-link>
</x-layout.header>
