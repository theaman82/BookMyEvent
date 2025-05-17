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
        <h1 class="font-bold text-2xl bg-gradient-to-r from-purple-600 to-pink-500 bg-clip-text text-transparent">
            {{ env('APP_NAME') }}
        </h1>

        <div class="links flex gap-8 items-center">
            <a href="" class="text-gray-700 hover:text-purple-600 font-medium transition-colors duration-200">Home</a>
            <a href="" class="text-gray-700 hover:text-purple-600 font-medium transition-colors duration-200">Events</a>
            <a href="" class="text-gray-700 hover:text-purple-600 font-medium transition-colors duration-200">Venues</a>
            <a href="" class="text-gray-700 hover:text-purple-600 font-medium transition-colors duration-200">About</a>
            <a href=""
                class="text-gray-700 hover:text-purple-600 font-medium transition-colors duration-200">Contact</a>
        </div>

        <div>
            <a href=""
                class="px-4 py-2 rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-white font-medium hover:shadow-lg transition-all duration-200">
                Login
            </a>
        </div>
    </div>
    @section('main')
    @show

</body>

</html>