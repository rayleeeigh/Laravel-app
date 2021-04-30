@extends('layouts.app')

<header>
    @include('layouts.header')
</header>

@section('content')
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
            <img class="block h-full w-full" src="{{ asset('storage/historic.jpg') }}">
        </div>
        <label for="carousel-3" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
        <label for="carousel-2" class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
        
        <!--Slide 2-->
        <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
        <div class="carousel-item absolute opacity-0" style="height:100vh;">
            <img class="block h-full w-full" src="{{ asset('storage/water.jpg') }}">
        </div>
        <label for="carousel-1" class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black  hover:leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
        <label for="carousel-3" class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black  hover:leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label> 
        
        <!--Slide 3-->
        <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
        <div class="carousel-item absolute opacity-0" style="height:100vh;">
            <img class="block h-full w-full" src="{{ asset('storage/citylights.jpg') }}">
        </div>
        <label for="carousel-2" class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover: leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
        <label for="carousel-4" class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover: leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
        
        <!--Slide 4-->
        <input class="carousel-open" type="radio" id="carousel-4" name="carousel" aria-hidden="true" hidden="">
        <div class="carousel-item absolute opacity-0" style="height:100vh;">
            <img class="block h-full w-full" src="{{ asset('storage/pasalubong.jpg') }}">
        </div>
        <label for="carousel-3" class="prev control-4 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover: leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
        <label for="carousel-5" class="next control-4 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover: leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
        
        <!--Slide 5-->
        <input class="carousel-open" type="radio" id="carousel-5" name="carousel" aria-hidden="true" hidden="">
        <div class="carousel-item absolute opacity-0" style="height:100vh;">
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

<footer>
    @include('layouts.footer')
</footer>
@endsection
