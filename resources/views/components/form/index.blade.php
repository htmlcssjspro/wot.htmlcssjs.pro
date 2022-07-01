<form {{ $attributes->class(['form'])->merge(['method' => 'POST']) }}>
    @csrf
    {{ $slot }}
</form>
