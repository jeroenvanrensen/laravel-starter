<div class="mb-12 md:mb-16">
    <div class="md:grid grid-cols-3 gap-6 md:gap-8">
        <!-- Left -->
        <div class="mb-6 md:mb-0 col-span-1">
            <div class="flex items-center mb-2">
                <div class="w-6 h-6 mr-2 text-gray-600 dark:text-gray-400">
                    {{ $icon }}
                </div>

                <h2 class="text-2xl">{{ $title }}</h2>
            </div>

            <p>{{ $description }}</p>
        </div>

        <!-- Right -->
        <div class="col-span-2">
            <div class="shadow rounded-md bg-white dark:bg-gray-900 p-6 md:p-8">
                {{ $card }}
            </div>
        </div>
    </div>
</div>