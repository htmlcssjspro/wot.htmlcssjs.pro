<form {{ $attributes->class(['form'])->merge(['action' => '#', 'method' => 'POST']) }}>
    @csrf
    {{ $slot }}
</form>
