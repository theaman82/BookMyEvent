@extends('landing.parent')

@section('title', 'Login')

@section('main')
    <div class="min-h-screen bg-gray-50 flex flex-col items-center justify-center py-12 sm:px-6 lg:px-8">
        <div class="bg-white flex w-[60%] shadow-lg sm:rounded-lg rounded">
            <div class="w-6/12 bg-linear-to-r from-purple-500 to-pink-500  p-10 rounded-l">
                <h2 class="text-3xl font-bold text-white mb-3">Plan Your Perfect Event</h2>
                <p class="text-lg text-gray-200">From weddings to seminars,<br> we help you find the perfect venue <br>and
                    vendors — all in one place.</p>

                <ul class="mt-4 text-white space-y-2">
                    <li>✓ Browse verified venues near you</li>
                    <li>✓ Book with real-time availability</li>
                    <li>✓ Track and manage your bookings</li>
                </ul>

            </div>
            <div class="w-6/12 bg-white p-10 rounded-r">
                <h2
                    class="text-3xl bg-gradient-to-r from-blue-400 to-purple-500 font-bold text-gray-800 bg-clip-text text-transparent">
                    Welcome Back</h2>
                <form action="{{ route('login') }}" class="mt-5" method="post">
                    @csrf
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">
                            Email address
                        </label>
                        <div class="mt-1">
                            <input id="email" name="email" type="email" autocomplete="email" value="{{ old('email') }}"
                                class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                placeholder="you@example.com">
                            @error('email')
                                <p class="text-red-500 font-semibold">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">
                            Password
                        </label>
                        <div class="mt-1 relative">
                            <input id="password" name="password" type="password" autocomplete="new-password"
                                class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                placeholder="••••••••">
                            @error('password')
                                <p class="text-red-500 font-semibold">{{ $message }}</p>
                            @enderror
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                <!-- Password visibility toggle would go here -->
                                <button type="button" class="text-gray-500 hover:text-gray-600 focus:outline-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="mt-2">
                        <a href="#" class="text-sm font-medium text-gray-700 hover:text-blue-500 underline">Forgot your
                            password</a>
                    </div>
                    <div class="mt-3 mb-4">
                        <button type="submit"
                            class="font-semibold bg-blue-500 hover:bg-blue-600 rounded w-full px-3 py-2 text-white">Login</button>
                    </div>

                    <span class="text-gray-500">-------------- Or Continue With -------------</span>

                    <div class="mt-3 mb-3 flex items-center justify-center w-fit gap-2 border border-gray-300 rounded-full px-4 py-1 bg-gray-100 p-1">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" class="h-5"
                            xmlns:xlink="http://www.w3.org/1999/xlink" style="display: block;">
                            <path fill="#EA4335"
                                d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z">
                            </path>
                            <path fill="#4285F4"
                                d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z">
                            </path>
                            <path fill="#FBBC05"
                                d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z">
                            </path>
                            <path fill="#34A853"
                                d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z">
                            </path>
                            <path fill="none" d="M0 0h48v48H0z"></path>
                        </svg>
                        <p>SignUp with Google</p>
                    </div>
                    <a href="{{ route('register') }}" class="text-sm underline mt-5 text-gray-500 font-medium">Don't have an account? <strong>Register now</strong></a>
                </form>
            </div>
        </div>
    </div>
@endsection