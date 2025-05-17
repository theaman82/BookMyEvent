@extends('landing.parent')

@section('title', 'Home')

@section('main')
    <x-banner />

    <div class="mt-5">
        <h1 class="font-bold px-[5%] text-2xl">Popular Venues Near You</h1>
        <div class="px-[5%] grid grid-cols-2 gap-5">
            <div
                class="max-w-sm bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <img class="w-full h-48 object-cover"
                    src="https://lh3.googleusercontent.com/gps-cs-s/AC9h4nrNc8NRrn9oyPh6XGNNuBrEx4iArf5hKU3VPyY1qRpBG7VolY1oFmJlkULo9nIJIztVX62LAhuPa_nkIyMUBirchydp12qOC0_rliYI8jXThb-y5woGNCn8WDQ_Q9tT0UCQpeyS=s680-w680-h510-rw"
                    alt="Venue Image">

                <div class="p-4">
                    <div class="flex justify-between items-start">
                        <div>
                            <h2 class="text-xl font-semibold text-gray-800">Royal Palace Banquet</h2>
                            <p class="text-sm text-gray-500 mt-1">Delhi, India</p>
                        </div>
                        <div class="bg-yellow-400 text-white text-sm font-bold px-2 py-1 rounded-md">4.5 ★</div>
                    </div>

                    <p class="text-gray-600 text-sm mt-3">
                        Elegant venue ideal for weddings, engagements, and seminars. Capacity: 300 guests.
                    </p>

                    <div class="flex justify-between items-center mt-4">
                        <span class="text-lg font-bold text-indigo-600">₹12,000 /day</span>
                        <a href="#"
                            class="bg-indigo-600 text-white text-sm px-4 py-2 rounded-lg hover:bg-indigo-700 transition">
                            View Details
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection