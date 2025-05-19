<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | {{ env('APP_NAME') }}</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>

    <div
        class="flex px-[5%] justify-between items-center py-3 w-full fixed top-0 left-0 right-0 z-50 backdrop-blur-lg bg-white/40 shadow-lg border-b border-white/20">
        <a href="{{ route('home') }}" class="font-bold text-2xl bg-gradient-to-r from-purple-600 to-pink-500 bg-clip-text text-transparent">
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
                <div class="relative group ">
                    <button
                        class="max-w-xs flex items-center text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                        <span class="sr-only">Open user menu</span>
                        <div
                            class="h-8 w-8 rounded-full bg-purple-600 flex items-center justify-center text-white font-bold">
                            {{ mb_substr(auth()->user()->name, 0, 1) }}
                        </div>
                        <span class="ml-2 text-gray-300 bg-gradient-to-r from-purple-600 to-pink-500 bg-clip-text text-transparent group-hover:text-white">{{ auth()->user()->name }}
                        </span>
                    </button>

                    <!-- Dropdown menu -->
                    <div
                        class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 hidden group-hover:block">
                        <a href="" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Logout</a>
                    </div>
                </div>
            @endauth
        </div>
    </div>
    @section('main')
    @show

</body>

</html>