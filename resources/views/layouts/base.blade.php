<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <script src="https://cdn.tailwindcss.com"></script>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans">
        <div class="min-h-screen flex flex-col text-center sm:justify-center items-center pt-6 sm:pt-0 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500">
            <div>
                <p class="font-sans font-black text-6xl text-amber-50">ideas</p>
                <p class="font-sans font-thin text-xl py-0 text-amber-50">what's on your mind?</p>
            </div>

            <div class="w-full sm:max-w-md mt-6 overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
