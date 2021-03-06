@props([
    'url' => '#',
    'active' => ($url ?? null) == url()->current()
])

<a
    href="{{ $url }}"
    {{ $attributes->merge([
        'href' => $url,
        'class' => 'block md:px-3 md:py-2 md:mx-1 mt-1 md:mt-0 rounded-md md:text-sm md:font-semibold focus:outline-none ' . ($active ? 'text-white md:bg-gray-900 md:focus:bg-gray-700 md:dark:bg-gray-700 md:dark:focus:bg-gray-800' : 'text-white md:text-gray-200 hover:text-white md:hover:bg-gray-700 focus:text-white md:focus:bg-gray-600' )
    ]) }}
>
    {{ $slot }}
</a>
