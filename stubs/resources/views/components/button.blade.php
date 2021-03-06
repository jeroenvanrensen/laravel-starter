@props([
    'link' => false,
    'loading' => '',
    'color' => 'indigo'
])

@php

$colors = [
    'indigo' => 'bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 dark:hover:bg-indigo-600 dark:bg-indigo-500',
    'gray' => 'bg-gray-500 hover:bg-gray-600 focus:ring-gray-400 dark:hover:bg-gray-600 dark:bg-gray-500',
    'red' => 'bg-red-700 hover:bg-red-800 focus:ring-red-600 dark:hover:bg-red-600 dark:bg-red-500'
];

$injectedColor = $colors[$color];

@endphp

<{{ $link ? 'a' : 'button' }} {{ $attributes->merge([
    'class' => 'inline-flex items-center px-4 py-2 rounded-md text-white focus:outline-none focus:ring-2 focus:ring-offset-2 dark:ring-offset-gray-800 ' . $injectedColor,
    'wire:loading.delay.class' => 'opacity-70 pointer-events-none',
    'wire:target' => $loading
]) }}>
    <svg wire:target="{{ $loading }}" wire:loading.delay class="-ml-1 mr-3 h-5 w-5 text-white animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
    </svg>

    {{ $slot }}
</{{ $link ? 'a' : 'button' }}>
      