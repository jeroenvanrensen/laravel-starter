<div
    class="fixed z-50 inset-0 overflow-y-auto"
    x-show="show"
    x-data="{ show: @entangle($name) }"
    @keydown.escape.window="show = false"
>
    <div
        x-show="show"
        class="absolute inset-0"
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
    >
        <div class="absolute inset-0 bg-gray-600 opacity-70 dark:bg-gray-800"></div>
    </div>

    <div class="mx-4 relative z-10 h-full flex items-center justify-center">
        <div
            x-show="show"
            @click.away="show = false"
            class="w-full max-w-xl mx-auto bg-white dark:bg-gray-900 shadow-lg rounded-md overflow-hidden p-6 md:p-8 transform transition"
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"
        >
            <header class="flex justify-between items-center">
                <h3 class="text-2xl font-semibold">{{ $title }}</h3>

                <button @click="show = false" class="w-6 h-6 text-gray-500 hover:text-gray-700 focus:outline-none focus:text-gray-900 dark:hover:text-gray-300 dark:focus:text-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </header>

            <main class="my-6 md:my-8">
                <p class="text-gray-700 dark:text-gray-400">{{ $body }}</p>
            </main>

            <footer class="flex justify-end items-center space-x-4">
                {{ $slot }}
            </footer>
        </div>
    </div>
</div>
