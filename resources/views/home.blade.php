@extends('layouts.app')



@section('content')
<header>
    @include('layouts.header')
</header>

<div class="w-full sm:px-6">
    @if (session('status'))
        <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
            {{ session('status') }}
        </div>
    @endif
</div>
<div class="carousel relative shadow-2xl bg-white">
    <div class="carousel-inner relative overflow-hidden w-full">
      <!--Slide 1-->
        <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
        <div class="carousel-item absolute opacity-0" style="height:100vh;">
            <div class="absolute mt-40 ml-4">
                <div class="container bg-black bg-opacity-50 py-40 ml-8">
                    <p class="text-center text-5xl text-white w-full"><strong>Wanna know how Cebu became what it is right now?</strong></p>
                </div>
            </div>
            <img class="block h-full w-full" src="{{ asset('storage/historic.jpg') }}">
        </div>
        <label for="carousel-3" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
        <label for="carousel-2" class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
        
        <!--Slide 2-->
        <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
        <div class="carousel-item absolute opacity-0" style="height:100vh;">
            <div class="absolute mt-40 ml-4">
                <div class="container bg-black bg-opacity-50 py-40 ml-20">
                    <p class="text-center text-5xl text-white w-full"><strong>Enjoy the vibes and fresh sea breeze in Cebu?</strong></p>
                </div>
            </div>
            <img class="block h-full w-full" src="{{ asset('storage/water.jpg') }}">
        </div>
        <label for="carousel-1" class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black  hover:leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
        <label for="carousel-3" class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black  hover:leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label> 
        
        <!--Slide 3-->
        <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
        <div class="carousel-item absolute opacity-0" style="height:100vh;">
            <div class="absolute mt-40 ml-4">
                <div class="container bg-black bg-opacity-50 py-40">
                    <p class="text-center text-5xl text-white w-full"><strong>Be amused and feel mesmerized by watching the citylights of busy infrastructures in Cebu!</strong></p>
                </div>
            </div>
            <img class="block h-full w-full" src="{{ asset('storage/citylights.jpg') }}">
        </div>
        <label for="carousel-2" class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover: leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
        <label for="carousel-4" class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover: leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
        
        <!--Slide 4-->
        <input class="carousel-open" type="radio" id="carousel-4" name="carousel" aria-hidden="true" hidden="">
        <div class="carousel-item absolute opacity-0" style="height:100vh;">
            <div class="absolute mt-40 ml-4">
                <div class="container bg-black bg-opacity-50 py-40">
                    <p class="text-center text-5xl text-white w-full"><strong>Thinking of good souvenirs and gifts for your loved ones?</strong></p>
                </div>
            </div>
            <img class="block h-full w-full" src="{{ asset('storage/pasalubong.jpg') }}">
        </div>
        <label for="carousel-3" class="prev control-4 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover: leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
        <label for="carousel-5" class="next control-4 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover: leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
        
        <!--Slide 5-->
        <input class="carousel-open" type="radio" id="carousel-5" name="carousel" aria-hidden="true" hidden="">
        <div class="carousel-item absolute opacity-0" style="height:100vh;">
            <div class="absolute mt-40 ml-4">
                <div class="container bg-black bg-opacity-50 py-40 ml-4">
                    <p class="text-center text-4xl text-white w-full"><strong>Suroy-suroy Sugbo is the best website you could ever look for.</strong></p>
                    <p class="text-center text-2xl text-white w-full">With lots of services and information for us to ensure that tourists wouldn't leave Cebu with a bad experience</p>
                </div>
            </div>
            <img class="block h-full w-full" src="{{ asset('storage/logo1.png') }}">
        </div>
        <label for="carousel-4" class="prev control-5 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover: leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
        <label for="carousel-1" class="next control-5 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover: leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

        <!-- Add additional indicators for each slide-->
        <ol class="carousel-indicators">
            <li class="inline-block mr-3">
                <label for="carousel-1" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-800">•</label>
            </li>
            <li class="inline-block mr-3">
                <label for="carousel-2" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-800">•</label>
            </li>
            <li class="inline-block mr-3">
                <label for="carousel-3" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-800">•</label>
            </li>
            <li class="inline-block mr-3">
                <label for="carousel-4" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-800">•</label>
            </li>
            <li class="inline-block mr-3">
                <label for="carousel-5" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-800">•</label>
            </li>
        </ol>
    </div>
</div>

<!--Container-->
<div class="bg-white h-screen">
    <div class="container mx-auto pt-24 md:pt-16 px-6">

        <div class="container mt-20 block h-96">
            <div class="inline-block float-left ml-28">
                <h1 class="text-5xl text-black">
                    <strong>Mangaon ta bai!</strong>
                </h1>
                <p class="w-96">While the other pieces in my “Origins of Foods We Love” series feature specific dishes, this one will spotlight an entire country’s food. That’s because the influences on Filipino food as we know it today spans both time and place.The Philippines comprises more than 7,107 islands tucked between the South China Sea and the Philippine Sea; its location placed the Philippines within the path of migration and trade for thousands and thousands of years. And with migrating humans come new ingredients, dishes, and traditions.</p>
            </div>

            <div class="inline-block float-right mr-32">
                <img class="block h-80 w-80 rounded-full" src="{{ asset('storage/ngaon.jpg') }}">
            </div>
        </div>
        
        <div class="container mt-20 block h-96">
            <div class="inline-block float-left ml-28">
                <img class="block h-80 w-80 rounded-full" src="{{ asset('storage/laag.jpg') }}">
            </div>

            <div class="inline-block float-right mr-32">
                <h1 class="text-5xl text-black">
                    <strong>Manlaag ta bai!</strong>
                </h1>
                <p class="w-96">Where to go in an archipelagic country of over 7,600 islands? Here are my top picks for travelers who want to discover beautiful destinations in the Philippines. Let’s start off with the top destinations that are both exceptionally beautiful and easy to reach, perfect for first-time visitors. Next, I’m going to share some spots that truly stand out from the other destinations in the country.</p>
            </div>
        </div>

        <div class="container mt-20 block h-96">
            <div class="inline-block float-left ml-28">
                <h1 class="text-5xl text-black">
                    <strong>Mopahuway ta bai!</strong>
                </h1>
                <p class="w-96">When it comes to hanging out, everyone has their own go-to places – cafes, board game cafes, bars, and pubs. Whether you’re looking for a change in environment or just a place to add to your list of hangout places, these restaurants are perfect for you and your friends to spend some time catching up during your free time this holiday season!</p>
            </div>

            <div class="inline-block float-right mr-32">
                <img class="block h-80 w-80 rounded-full" src="{{ asset('storage/pahuway.jpg') }}">
            </div>
        </div>

    </div>
</div>

<footer>
    @include('layouts.footer')
</footer>
@endsection
