<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Domains Manager</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
        <div>
            <a href="https://github.com/marekgacek45" target="_blank">
                {{-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> --}}
                <h1 class="text-2xl font-bold text-center mb-6 dark:text-white">Domains Manager - <span
                        class="text-base">created by Marek Gacek</span></h1>
                <div class="flex flex-wrap justify-center items-center gap-5 rounded-md px-2 dark:bg-white ">
                    <img src="{{ asset('assets/laravel.png') }}" alt="" class="w-12">
                    <img src="{{ asset('assets/js.png') }}" alt="" class="w-12">
                    <img src="{{ asset('assets/mysql.png') }}" alt="" class="w-24">
                    <img src="{{ asset('assets/tailwind.png') }}" alt="" class="w-16">
                    <img src="{{ asset('assets/flowbite.png') }}" alt="" class="w-24">
                </div>
            </a>

        </div>

        <div
            class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
        <div class="mt-2">

            <button id="theme-toggle" type="button"
                class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-md text-md p-2.5">
                <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                </svg>
                <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                        fill-rule="evenodd" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <div class="flex flex-col sm:flex-row gap-7">
            <div class="flex flex-col ">
                <h2 class="font-bold text-center dark:text-white">Admin</h2>
                <p class="dark:text-white"><span class="font-bold dark:text-white">login:</span> admin@admin.pl</p>
                <p class="dark:text-white"><span class="font-bold dark:text-white">hasło:</span> admin123456</p>
            </div>
            <div class="flex flex-col">
                <h2 class="font-bold text-center dark:text-white">Gość</h2>
                <p class="dark:text-white"><span class="font-bold dark:text-white">login:</span> guest@guest.pl</p>
                <p class="dark:text-white"><span class="font-bold dark:text-white">hasło:</span> guest123456</p>
            </div>
        </div>

    </div>
</body>

</html>
