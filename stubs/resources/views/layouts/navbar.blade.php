<div>
    <!-- Desktop menu -->
    <nav class="hidden md:block w-full bg-gray-800 dark:bg-black {{ auth()->check() ? '' : 'shadow-md' }}">
        <x-container class="flex items-center justify-between py-5">
            <!-- Left side -->
            <div class="flex items-center">
                <!-- Logo -->
                <a href="{{ url('/') }}" class="block mr-6 text-white font-semibold focus:underline focus:outline-none">
                    {{ config('app.name') }}
                </a>

                <!-- Menu -->
                <div class="flex items-center">
                    @auth
                        <x-layouts.nav-link url="{{ route('dashboard') }}">Dashboard</x-layouts.nav-link>
                    @endauth
                </div>
            </div>

            <!-- Right side -->
            @auth
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = true" @keydown.escape="open = false" class="text-gray-200 mr-1 focus:outline-none focus:underline">
                        {{ auth()->user()->name }}
                    </button>

                    <!-- Dropdown menu -->
                    <div
                        x-show="open"
                        @click.away="open = false"
                        style="display: hidden;"
                        class="absolute z-10 top-10 right-0 w-56 py-2 bg-white dark:bg-gray-700 shadow-lg rounded-md ring-1 ring-black ring-opacity-5"
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="transform opacity-0 scale-95"
                        x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-100"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-95"
                    >
                        <x-layouts.dropdown-link href="{{ route('profile.edit') }}">My Profile</x-layouts.dropdown-link>
                        <x-layouts.dropdown-link class="cursor-pointer" wire:click="logout">Sign out</x-layouts.dropdown-link>
                    </div>
                </div>
            @else
                <div class="flex items-center">
                    <x-layouts.nav-link url="{{ route('login') }}">Login</x-layouts.nav-link>
                    <x-layouts.nav-link url="{{ route('register') }}">Register</x-layouts.nav-link>
                </div>
            @endauth
        </x-container>
    </nav>

    <!-- Mobile menu -->
    <nav class="block md:hidden w-full bg-gray-800 dark:bg-black" x-data="{ open: false }">
        <x-container class="py-4">
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <a href="{{ url('/') }}" class="block mr-6 text-white font-semibold focus:underline focus:outline-none">
                    {{ config('app.name') }}
                </a>

                <!-- Hamburger -->
                <button @click="open = true" class="block w-5 h-5 text-white focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Menu -->
            <div x-show="open" @click.away="open = false" class="mt-3">
                @auth
                    <x-layouts.nav-link url="{{ route('dashboard') }}">Dashboard</x-layouts.nav-link>
                    <x-layouts.nav-link url="{{ route('profile.edit') }}">My Profile</x-layouts.nav-link>
                    <x-layouts.nav-link class="cursor-pointer" wire:click="logout">Sign out</x-layouts.nav-link>
                @else
                    <x-layouts.nav-link url="{{ route('login') }}">Login</x-layouts.nav-link>
                    <x-layouts.nav-link url="{{ route('register') }}">Register</x-layouts.nav-link>
                @endauth
            </div>
        </x-container>
    </nav>

    <!-- Header -->
    @auth
        <header class="relative w-full bg-white dark:bg-gray-900 shadow">
            <x-container class="py-4 md:py-6">
                <h1 class="text-lg md:text-xl font-semibold">{{ $title }}</h1>
            </x-container>
        </header>
    @endauth
</div>
