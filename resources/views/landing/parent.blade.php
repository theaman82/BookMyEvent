<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | {{ env('APP_NAME') }}</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    {!! ToastMagic::styles() !!}
</head>

<body>

    <div
        class="flex px-[5%] justify-between items-center py-3 w-full fixed top-0 left-0 right-0 z-50 backdrop-blur-lg bg-white/40 shadow-lg border-b border-white/20">
        <a href="{{ route('home') }}"
            class="font-bold text-2xl bg-gradient-to-r from-purple-600 to-pink-500 bg-clip-text text-transparent">
            {{ env('APP_NAME') }}
        </a>

        <div class="links flex gap-8 items-center">
            <a href="" class="text-gray-700 hover:text-purple-600 font-medium transition-colors duration-200">Home</a>
            <a href="" class="text-gray-700 hover:text-purple-600 font-medium transition-colors duration-200">Events</a>
            <a href="" class="text-gray-700 hover:text-purple-600 font-medium transition-colors duration-200">Venues</a>
            <a href="" class="text-gray-700 hover:text-purple-600 font-medium transition-colors duration-200">About</a>
            <a href=""
                class="text-gray-700 hover:text-purple-600 font-medium transition-colors duration-200">Contact</a>
        </div>

        <div>
            @guest
                <a href="{{ route('login') }}"
                    class="px-4 py-2 rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-white font-medium hover:shadow-lg transition-all duration-200">
                    Login
                </a>
            @endguest
            @auth

                <div id="avatarButton" type="button" data-dropdown-toggle="userDropdown"
                    data-dropdown-placement="bottom-start"
                    class="px-3 py-1 text-white font-semibold rounded-full bg-purple-500 cursor-pointer">
                    {{ mb_substr(auth()->user()->name, 0, 1) }}
                </div>

                <!-- Dropdown menu -->
                <div id="userDropdown"
                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700 dark:divide-gray-600">
                    <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                        <div>{{ auth()->user()->name }}</div>
                    </div>
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="avatarButton">
                        <li>
                            <a href="{{ route('admin.dashboard') }}"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Admin
                                Panel</a>
                        </li>
                    </ul>
                    <div class="py-1">
                        <a href="{{ route('logoutUser') }}"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                            out</a>
                    </div>
                </div>

            @endauth
        </div>
    </div>
    @section('main')
    @show
    {!! ToastMagic::scripts() !!}
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>