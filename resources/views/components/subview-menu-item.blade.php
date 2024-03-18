<a
    href="{{ $attributes->get('href') }}"
    class="px-4 py-2 {{ $attributes->get('active') ? 'border-r-2 border-indigo-600 font-bold' : 'hover:border-r-2 hover:border-indigo-600 hover:font-bold' }}"
>
    {{ $slot }}
</a>
