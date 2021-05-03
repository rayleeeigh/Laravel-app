@extends('layouts.app')

@section('content')

<header>
    @include('layouts.header')
</header>

<div class="bg-gray-800 font-sans leading-normal tracking-normal pt-16">

    <div class="flex flex-col md:flex-row">

        <div class="bg-gray-800 shadow-xl h-10 fixed bottom-0 mt-16 md:relative w-full md:w-48" style="height:81.6vh">

            <div class="md:mt-12 md:w-48 md:fixed md:left-0 md:top-0 content-center md:content-start text-left justify-between">
                <ul class="list-reset flex flex-row md:flex-col py-0 md:py-3 px-1 md:px-2 text-center md:text-left">
                    <li class="mr-3 flex-1">
                        <a href="#accomodations" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-pink-500">
                            <i class="fas fa-tasks pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Accomodations</span>
                        </a>
                    </li>
                    <li class="mr-3 flex-1">
                        <a href="#adventures" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-purple-500">
                            <i class="fa fa-envelope pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Adventures</span>
                        </a>
                    </li>
                    <li class="mr-3 flex-1">
                        <a href="#foods" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-blue-500">
                            <i class="fas fa-chart-area pr-0 md:pr-3 text-blue-600"></i><span class="pb-pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Food Trips</span>
                        </a>
                    </li>
                    <li class="mr-3 flex-1">
                        <a href="#historics" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-red-500">
                            <i class="fa fa-wallet pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Historical Sites</span>
                        </a>
                    </li>
                </ul>
            </div>


        </div>

        <div class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">
      
                <div class="ml-40 p-20 ml-14">
                    <h2 id="accomodations" class="font-bold text-xl">Accomodations</h2>
                    @foreach ($accomodations as $accomodation)
                                <div class="relative inline-block w-1/4 rounded overflow-hidden shadow-lg" style="height:22rem">
                                    <img class="w-full h-52" src="{{ asset($accomodation->accImage) }}" alt="Mountain">
                                    <div class="px-6 py-4">
                                        <div class="font-bold text-sm mb-2">{{ $accomodation->accName }}</div>
                                    </div>
                                    <form action="/admin/{{ $accomodation->accID }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <div class="absolute bottom-0 container pb-8 flex justify-center">
                                            <button type="submit" class="text-white text-sm py-2.5 px-5 rounded-md bg-gray-700 hover:bg-gray-900 hover:shadow-lg mr-2">Delete</button>
                                        </form>
                                            <button type="submit" class="text-white text-sm py-2.5 px-5 rounded-md bg-gray-700 hover:bg-gray-900 hover:shadow-lg">Update</button>
                                        </div>
                                </div>
                    @endforeach
                    <div class="flex justify-center mr-48">
                        <button type="button" class="text-white text-sm py-2.5 px-5 rounded-md bg-gray-700 hover:bg-gray-900 hover:shadow-lg">Add Data</button>
                    </div>
                </div>

            
      
                <div class="ml-40 p-20 ml-14">
                    <h2 id="adventures" class="font-bold text-xl">Adventures</h2>
                    @foreach ($adventures as $adventure)
                                <div class="relative inline-block w-1/4 rounded overflow-hidden shadow-lg" style="height:22rem">
                                    <img class="w-full h-52" src="{{ asset($adventure->advImage) }}" alt="Mountain">
                                    <div class="px-6 py-4">
                                        <div class="font-bold text-sm mb-2">{{ $adventure->advName }}</div>
                                    </div>
                                    <form action="/admin/{{ $adventure->advID }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <div class="absolute bottom-0 container pb-8 flex justify-center">
                                            <button type="submit" class="text-white text-sm py-2.5 px-5 rounded-md bg-gray-700 hover:bg-gray-900 hover:shadow-lg mr-2">Delete</button>
                                        </form>
                                            <button type="submit" class="text-white text-sm py-2.5 px-5 rounded-md bg-gray-700 hover:bg-gray-900 hover:shadow-lg">Update</button>
                                        </div>
                                </div>
                    @endforeach
                    <div class="flex justify-center mr-48">
                        <button type="button" class="text-white text-sm py-2.5 px-5 rounded-md bg-gray-700 hover:bg-gray-900 hover:shadow-lg">Add Data</button>
                    </div>
                </div>

                <div class="ml-40 p-20 ml-14">
                    <h2 id="foods" class="font-bold text-xl">Food Trips</h2>
                    @foreach ($foods as $food)
                                <div class="relative inline-block w-1/4 rounded overflow-hidden shadow-lg" style="height:22rem">
                                    <img class="w-full h-52" src="{{ asset($food->advImage) }}" alt="Mountain">
                                    <div class="px-6 py-4">
                                        <div class="font-bold text-sm mb-2">{{ $food->advName }}</div>
                                    </div>
                                    <form action="/admin/{{ $food->advID }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <div class="absolute bottom-0 container pb-8 flex justify-center">
                                            <button type="submit" class="text-white text-sm py-2.5 px-5 rounded-md bg-gray-700 hover:bg-gray-900 hover:shadow-lg mr-2">Delete</button>
                                        </form>
                                            <button type="submit" class="text-white text-sm py-2.5 px-5 rounded-md bg-gray-700 hover:bg-gray-900 hover:shadow-lg">Update</button>
                                        </div>
                                </div>
                    @endforeach
                    <div class="flex justify-center mr-48">
                        <button type="button" class="text-white text-sm py-2.5 px-5 rounded-md bg-gray-700 hover:bg-gray-900 hover:shadow-lg">Add Data</button>
                    </div>
                </div>

                <div class="ml-40 p-20 ml-14">
                    <h2 id="historics" class="font-bold text-xl">Historical Sites</h2>
                    @foreach ($historics as $historic)
                                <div class="relative inline-block w-1/4 rounded overflow-hidden shadow-lg" style="height:22rem">
                                    <img class="w-full h-52" src="{{ asset($historic->advImage) }}" alt="Mountain">
                                    <div class="px-6 py-4">
                                        <div class="font-bold text-sm mb-2">{{ $historic->advName }}</div>
                                    </div>
                                    <form action="/admin/{{ $historic->advID }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <div class="absolute bottom-0 container pb-8 flex justify-center">
                                            <button type="submit" class="text-white text-sm py-2.5 px-5 rounded-md bg-gray-700 hover:bg-gray-900 hover:shadow-lg mr-2">Delete</button>
                                        </form>
                                            <button type="submit" class="text-white text-sm py-2.5 px-5 rounded-md bg-gray-700 hover:bg-gray-900 hover:shadow-lg">Update</button>
                                        </div>
                                </div>
                    @endforeach
                    <div class="flex justify-center mr-48">
                        <button type="button" class="text-white text-sm py-2.5 px-5 rounded-md bg-gray-700 hover:bg-gray-900 hover:shadow-lg">Add Data</button>
                    </div>
                </div>
            


            
        </div>
    </div>
</div>
@endsection