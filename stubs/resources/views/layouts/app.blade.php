<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <!-- Metas -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Title -->
    <title>{{ $title ?? 'Page Title' }} - {{ config('app.name') }}</title>

    <!-- Styles -->
    <livewire:styles />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />

    <!-- Scripts -->
    <livewire:scripts />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/turbolinks/5.2.0/turbolinks.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false"></script>
</head>
<body class="bg-gray-100 dark:bg-gray-800 dark:text-white">
    <livewire:layouts.navbar :title="$title ?? 'Page Title'" />

    <x-container class="my-8 md:my-14 lg:my-20">
        {{ $slot }}
    </x-container>
</body>
</html>