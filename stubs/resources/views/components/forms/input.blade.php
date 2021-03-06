@props(['name' => ''])

<input {{ $attributes->merge(['class' => 'w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:bg-gray-700 dark:border-gray-700' . ($errors->has($name) ? ' ring-2 ring-red-500' : '')]) }} />
