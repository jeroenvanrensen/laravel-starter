@props(['name' => ''])

@error($name)
    <div {{ $attributes->merge(['class'=> 'mt-2 text-red-600 font-semibold text-sm dark:text-red-400']) }}>
        {{ $message }}
    </div>
@enderror
