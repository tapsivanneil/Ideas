@props(['value'])

<label {{ $attributes->merge(['class' => 'block bg-white font-medium text-sm text-gray-700 dark:text-gray-700']) }}>
    {{ $value ?? $slot }}
</label>
