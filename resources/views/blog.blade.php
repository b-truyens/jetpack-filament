<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
    </style>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles

</head>

<body class="antialiased">
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">

        <x-nav-bar />

        <div class="max-w-7xl mx-auto p-6 lg:p-8">


            <div class="mt-16">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">

                    <x-post />
                    <x-post1 />
                    <x-post2 />
                    <x-post-div />

                </div>
            </div>

            <x-footer />

        </div>

    </div>

    @livewireScripts

</body>



</html>