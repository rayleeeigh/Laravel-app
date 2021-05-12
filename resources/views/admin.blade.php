@extends('layouts.app')

@section('content')

<header>
    @include('layouts.header')
</header>

<div class="bg-gray-800 font-sans leading-normal tracking-normal pt-16">

    <div class="flex flex-col md:flex-row">

        <div class="bg-gray-800 h-10 fixed bottom-0 mt-16 md:relative w-full md:w-48" style="height:81.6vh">

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
                                    <img class="w-full h-52" src="{{ asset('storage/Accomodation/'.$accomodation->accImage) }}" alt="Mountain">
                                    <div class="px-6 py-4">
                                        <div class="font-bold text-sm mb-2">{{ $accomodation->accName }}</div>
                                    </div>
                                    <form action="/admin/{{ $accomodation->accID }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <div class="absolute bottom-0 container pb-8 flex justify-center">
                                            <button type="submit" class="text-white text-sm py-2.5 px-5 rounded-md bg-gray-700 hover:bg-gray-900 hover:shadow-lg mr-2">Delete</button>
                                        </form>
                                        <button type="button" class="text-white text-sm py-2.5 px-5 rounded-md bg-gray-700 hover:bg-gray-900 hover:shadow-lg" onclick="toggleModal('updateaccomodation')">Update</button>
                                        </div>
                                </div>
                    @endforeach
                    <div class="flex justify-center mr-48">
                        <button type="button" class="text-white text-sm py-2.5 px-5 rounded-md bg-gray-700 hover:bg-gray-900 hover:shadow-lg" onclick="toggleModal('createaccomodation')">Add Data</button>
                    </div>
                </div>

            
      
                <div class="ml-40 p-20 ml-14">
                    <h2 id="adventures" class="font-bold text-xl">Adventures</h2>
                    @foreach ($adventures as $adventure)
                                <div class="relative inline-block w-1/4 rounded overflow-hidden shadow-lg" style="height:22rem">
                                    <img class="w-full h-52" src="{{ asset('storage/Adventure/'.$adventure->advImage) }}" alt="Mountain">
                                    <div class="px-6 py-4">
                                        <div class="font-bold text-sm mb-2">{{ $adventure->advName }}</div>
                                    </div>
                                    <form action="/admin/{{ $adventure->advID }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <div class="absolute bottom-0 container pb-8 flex justify-center">
                                            <button type="submit" class="text-white text-sm py-2.5 px-5 rounded-md bg-gray-700 hover:bg-gray-900 hover:shadow-lg mr-2">Delete</button>
                                        </form>
                                            <button type="button" class="text-white text-sm py-2.5 px-5 rounded-md bg-gray-700 hover:bg-gray-900 hover:shadow-lg" onclick="toggleModal('updateadventure')">Update</button>
                                        </div>
                                </div>
                    @endforeach
                    <div class="flex justify-center mr-48">
                        <button type="button" class="text-white text-sm py-2.5 px-5 rounded-md bg-gray-700 hover:bg-gray-900 hover:shadow-lg" onclick="toggleModal('createadventure')">Add Data</button>
                    </div>
                </div>

                <div class="ml-40 p-20 ml-14">
                    <h2 id="foods" class="font-bold text-xl">Food Trips</h2>
                    @foreach ($foods as $food)
                                <div class="relative inline-block w-1/4 rounded overflow-hidden shadow-lg" style="height:22rem">
                                    <img class="w-full h-52" src="{{ asset('storage/Foods/'.$food->foodImage) }}" alt="Mountain">
                                    <div class="px-6 py-4">
                                        <div class="font-bold text-sm mb-2">{{ $food->foodName }}</div>
                                    </div>
                                    <form action="/admin/{{ $food->foodID }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <div class="absolute bottom-0 container pb-8 flex justify-center">
                                            <button type="submit" class="text-white text-sm py-2.5 px-5 rounded-md bg-gray-700 hover:bg-gray-900 hover:shadow-lg mr-2">Delete</button>
                                        </form>
                                            <button type="button" class="text-white text-sm py-2.5 px-5 rounded-md bg-gray-700 hover:bg-gray-900 hover:shadow-lg" onclick="toggleModal('updatefood')">Update</button>
                                        </div>
                                </div>
                    @endforeach
                    <div class="flex justify-center mr-48">
                        <button type="button" class="text-white text-sm py-2.5 px-5 rounded-md bg-gray-700 hover:bg-gray-900 hover:shadow-lg" onclick="toggleModal('createfood')">Add Data</button>
                    </div>
                </div>

                <div class="ml-40 p-20 ml-14">
                    <h2 id="historics" class="font-bold text-xl">Historical Sites</h2>
                    @foreach ($historics as $historic)
                                <div class="relative inline-block w-1/4 rounded overflow-hidden shadow-lg" style="height:22rem">
                                    <img class="w-full h-52" src="{{ asset('storage/Historic/'.$historic->hisImage) }}" alt="Mountain">
                                    <div class="px-6 py-4">
                                        <div class="font-bold text-sm mb-2">{{ $historic->hisName }}</div>
                                    </div>
                                    <form action="/admin/{{ $historic->hisID }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <div class="absolute bottom-0 container pb-8 flex justify-center">
                                            <button type="submit" class="text-white text-sm py-2.5 px-5 rounded-md bg-gray-700 hover:bg-gray-900 hover:shadow-lg mr-2">Delete</button>
                                        </form>
                                            <button type="button" class="text-white text-sm py-2.5 px-5 rounded-md bg-gray-700 hover:bg-gray-900 hover:shadow-lg" onclick="toggleModal('updatehistoric')">Update</button>
                                        </div>
                                </div>
                    @endforeach
                    <div class="flex justify-center mr-48">
                        <button type="button" class="text-white text-sm py-2.5 px-5 rounded-md bg-gray-700 hover:bg-gray-900 hover:shadow-lg" onclick="toggleModal('createhistoric')">Add Data</button>
                    </div>
                </div>
        </div>
    </div>
</div>

{{-- CREATE ACCOMODATION --}}
<div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="createaccomodation">
    <div class="relative w-auto my-6 mx-auto max-w-2xl">
      <!--content-->
      <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
        <!--header-->
        <form action="/admin" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t">
          <h3 class="text-3xl font-semibold">
            CREATE
          </h3>
        </div>
        <!--body-->
        <div class="relative p-6 flex-auto">
            <strong>Name: </strong><input type="text" name="accName" placeholder="Input Name..."><br>
            <strong>Image: </strong><input type="file" name="accImage"/>
            <strong>Price:</strong> <input type="text" name="accPrice" placeholder="Input Price...">
          <p class="my-4 text-blueGray-500 text-lg leading-relaxed">
            <p class="inline-block align-top"><strong>Description: </strong><textarea cols="30" rows="10" id="accDesc" name="accDesc" placeholder="Insert Description..."></textarea></p>
          </p>
          <p class="my-4 text-blueGray-500 text-lg leading-relaxed">
            <strong>Location:</strong> <input type="text" name="accCity" placeholder="Input Address...">
          </p>
          <p class="my-4 text-blueGray-500 text-lg leading-relaxed">
            <strong>Contacts:</strong> <input type="text" name="accContact" placeholder="Input Contact...">
          </p>
          <p class="my-4 text-blueGray-500 text-lg leading-relaxed">
            <strong>Email:</strong> <input type="text" name="accEmail" placeholder="Input Email...">
          </p>
          <p class="my-4 text-blueGray-500 text-lg leading-relaxed">
            <strong>Website:</strong> <input type="text" name="accSite" placeholder="Input Website...">
          </p>
        </div>
        <!--footer-->
        <div class="flex items-center justify-end p-6 border-t border-solid border-blueGray-200 rounded-b">
          <button class="text-gray-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('createaccomodation')">
            Close
          </button>
          <button type="submit" class="text-white text-sm py-2.5 px-5 rounded-md bg-gray-700 hover:bg-gray-900 hover:shadow-lg">
            Create
          </button>
        </form>
        </div>
      </div>
    </div>
</div>
{{-- UPDATE ACCOMODATION --}}
@foreach ($accomodations as $accomodation)
<div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="updateaccomodation">
  <div class="relative w-auto my-6 mx-auto max-w-2xl">
    <!--content-->
    <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
      <!--header-->
      <form action="/admin/{{ $accomodation->accID }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT');
      <div class="flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t">
        <h3 class="text-3xl font-semibold">
          EDIT
        </h3>
      </div>
      <!--body-->
      <div class="relative p-6 flex-auto">
          <strong>Name: </strong><input type="text" name="accName" placeholder="Input Name..."><br>
          <strong>Image: </strong><input type="file" name="accImage"/>
        <p class="my-4 text-blueGray-500 text-lg leading-relaxed">
          <p class="inline-block align-top"><strong>Description:</strong> </p><textarea cols="30" rows="10" id="accDesc" name="accDesc" placeholder="Insert Description..."></textarea>
        </p>
        <p class="my-4 text-blueGray-500 text-lg leading-relaxed">
          <strong>Location:</strong> <input type="text" name="accCity" placeholder="Input Address...">
        </p>
        <p class="my-4 text-blueGray-500 text-lg leading-relaxed">
          <strong>Contacts:</strong> <input type="text" name="accContact" placeholder="Input Contact...">
        </p>
        <p class="my-4 text-blueGray-500 text-lg leading-relaxed">
          <strong>Email:</strong> <input type="text" name="accEmail" placeholder="Input Email...">
        </p>
        <p class="my-4 text-blueGray-500 text-lg leading-relaxed">
          <strong>Website:</strong> <input type="text" name="accSite" placeholder="Input Website...">
        </p>
      </div>
      <!--footer-->
      <div class="flex items-center justify-end p-6 border-t border-solid border-blueGray-200 rounded-b">
        <button class="text-gray-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('updateaccomodation')">
          Close
        </button>
        <button type="submit" class="text-white text-sm py-2.5 px-5 rounded-md bg-gray-700 hover:bg-gray-900 hover:shadow-lg">
          UPDATE
        </button>
      </form>
      </div>
    </div>
  </div>
</div>  
@endforeach

{{-- CREATE ADVENTURE --}}
<div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="createadventure">
    <div class="relative w-auto my-6 mx-auto max-w-2xl">
      <!--content-->
      <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
        <!--header-->
        <form action="/admin" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t">
          <h3 class="text-3xl font-semibold">
            CREATE
          </h3>
        </div>
        <!--body-->
        <div class="relative p-6 flex-auto">
            <strong>Name: </strong><input type="text" name="advName" placeholder="Input Name..."><br>
            <strong>Image: </strong><input type="file" name="advImage"/><br>
            <strong>Price:</strong> <input type="text" name="advPrice" placeholder="Input Price...">
          <p class="my-4 text-blueGray-500 text-lg leading-relaxed">
            <p class="inline-block align-top"><strong>Description: </strong><textarea cols="30" rows="10" id="advDesc" name="advDesc" placeholder="Insert Description..."></textarea></p>
          </p>
          <p class="my-4 text-blueGray-500 text-lg leading-relaxed">
            <strong>Location:</strong> <input type="text" name="advCity" placeholder="Input Address...">
          </p>
          <p class="my-4 text-blueGray-500 text-lg leading-relaxed">
            <strong>Contacts:</strong> <input type="text" name="advContact" placeholder="Input Contact...">
          </p>
          <p class="my-4 text-blueGray-500 text-lg leading-relaxed">
            <strong>Email:</strong> <input type="text" name="advEmail" placeholder="Input Email...">
          </p>
          <p class="my-4 text-blueGray-500 text-lg leading-relaxed">
            <strong>Website:</strong> <input type="text" name="advSite" placeholder="Input Website...">
          </p>
        </div>
        <!--footer-->
        <div class="flex items-center justify-end p-6 border-t border-solid border-blueGray-200 rounded-b">
          <button class="text-gray-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('createadventure')">
            Close
          </button>
          <button type="submit" class="text-white text-sm py-2.5 px-5 rounded-md bg-gray-700 hover:bg-gray-900 hover:shadow-lg">
            Create
          </button>
        </form>
        </div>
      </div>
    </div>
</div>
{{-- UPDATE ADVENTURE --}}
@foreach ($adventures as $adventure)
<div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="updateadventure">
  <div class="relative w-auto my-6 mx-auto max-w-2xl">
    <!--content-->
    <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
      <!--header-->
      <form action="/admin/{{ $adventure->advID }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT');
      <div class="flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t">
        <h3 class="text-3xl font-semibold">
          EDIT
        </h3>
      </div>
      <!--body-->
      <div class="relative p-6 flex-auto">
          <strong>Name: </strong><input type="text" name="advName" placeholder="Input Name..."><br>
          <strong>Image: </strong><input type="file" name="advImage"/><br>
          <strong>Price:</strong> <input type="text" name="advPrice" placeholder="Input Price...">
        <p class="my-4 text-blueGray-500 text-lg leading-relaxed">
          <p class="inline-block align-top"><strong>Description:</strong> </p><textarea cols="30" rows="10" id="advDesc" name="advDesc" placeholder="Insert Description..."></textarea>
        </p>
        <p class="my-4 text-blueGray-500 text-lg leading-relaxed">
          <strong>Location:</strong> <input type="text" name="advCity" placeholder="Input Address...">
        </p>
        <p class="my-4 text-blueGray-500 text-lg leading-relaxed">
          <strong>Contacts:</strong> <input type="text" name="advContact" placeholder="Input Contact...">
        </p>
        <p class="my-4 text-blueGray-500 text-lg leading-relaxed">
          <strong>Email:</strong> <input type="text" name="advEmail" placeholder="Input Email...">
        </p>
        <p class="my-4 text-blueGray-500 text-lg leading-relaxed">
          <strong>Website:</strong> <input type="text" name="advSite" placeholder="Input Website...">
        </p>
      </div>
      <!--footer-->
      <div class="flex items-center justify-end p-6 border-t border-solid border-blueGray-200 rounded-b">
        <button class="text-gray-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('updateadventure')">
          Close
        </button>
        <button type="submit" class="text-white text-sm py-2.5 px-5 rounded-md bg-gray-700 hover:bg-gray-900 hover:shadow-lg">
          UPDATE
        </button>
      </form>
      </div>
    </div>
  </div>
</div>
@endforeach

{{-- CREATE FOOD --}}
<div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="createfood">
    <div class="relative w-auto my-6 mx-auto max-w-2xl">
      <!--content-->
      <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
        <!--header-->
        <form action="/admin" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t">
          <h3 class="text-3xl font-semibold">
            CREATE
          </h3>
        </div>
        <!--body-->
        <div class="relative p-6 flex-auto">
            <strong>Name: </strong><input type="text" name="foodName" placeholder="Input Name..."><br>
            <strong>Image: </strong><input type="file" name="foodImage"/><br>
            <strong>Price:</strong> <input type="text" name="foodPrice" placeholder="Input Price...">
          <p class="my-4 text-blueGray-500 text-lg leading-relaxed">
            <p class="inline-block align-top"><strong>Description: </strong><textarea cols="30" rows="10" id="foodDesc" name="foodDesc" placeholder="Insert Description..."></textarea></p>
          </p>
          <p class="my-4 text-blueGray-500 text-lg leading-relaxed">
            <strong>Location:</strong> <input type="text" name="foodCity" placeholder="Input Address...">
          </p>
          <p class="my-4 text-blueGray-500 text-lg leading-relaxed">
            <strong>Contacts:</strong> <input type="text" name="foodContact" placeholder="Input Contact...">
          </p>
          <p class="my-4 text-blueGray-500 text-lg leading-relaxed">
            <strong>Email:</strong> <input type="text" name="foodEmail" placeholder="Input Email...">
          </p>
          <p class="my-4 text-blueGray-500 text-lg leading-relaxed">
            <strong>Website:</strong> <input type="text" name="foodSite" placeholder="Input Website...">
          </p>
        </div>
        <!--footer-->
        <div class="flex items-center justify-end p-6 border-t border-solid border-blueGray-200 rounded-b">
          <button class="text-gray-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('createfood')">
            Close
          </button>
          <button type="submit" class="text-white text-sm py-2.5 px-5 rounded-md bg-gray-700 hover:bg-gray-900 hover:shadow-lg">
            Create
          </button>
        </form>
        </div>
      </div>
    </div>
</div>
{{-- UPDATE FOOD --}}
@foreach ($foods as $food)
<div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="updatefood">
  <div class="relative w-auto my-6 mx-auto max-w-2xl">
    <!--content-->
    <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
      <!--header-->
      <form action="/admin/{{ $food->foodID }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT');
      <div class="flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t">
        <h3 class="text-3xl font-semibold">
          EDIT
        </h3>
      </div>
      <!--body-->
      <div class="relative p-6 flex-auto">
          <strong>Name: </strong><input type="text" name="foodName" placeholder="Input Name..."><br>
          <strong>Image: </strong><input type="file" name="foodImage"/><br>
          <strong>Price:</strong> <input type="text" name="foodPrice" placeholder="Input Price...">
        <p class="my-4 text-blueGray-500 text-lg leading-relaxed">
          <p class="inline-block align-top"><strong>Description:</strong> </p><textarea cols="30" rows="10" id="foodDesc" name="foodDesc" placeholder="Insert Description..."></textarea>
        </p>
        <p class="my-4 text-blueGray-500 text-lg leading-relaxed">
          <strong>Location:</strong> <input type="text" name="foodCity" placeholder="Input Address...">
        </p>
        <p class="my-4 text-blueGray-500 text-lg leading-relaxed">
          <strong>Contacts:</strong> <input type="text" name="foodContact" placeholder="Input Contact...">
        </p>
        <p class="my-4 text-blueGray-500 text-lg leading-relaxed">
          <strong>Email:</strong> <input type="text" name="foodEmail" placeholder="Input Email...">
        </p>
        <p class="my-4 text-blueGray-500 text-lg leading-relaxed">
          <strong>Website:</strong> <input type="text" name="foodSite" placeholder="Input Website...">
        </p>
      </div>
      <!--footer-->
      <div class="flex items-center justify-end p-6 border-t border-solid border-blueGray-200 rounded-b">
        <button class="text-gray-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('updatefood')">
          Close
        </button>
        <button type="submit" class="text-white text-sm py-2.5 px-5 rounded-md bg-gray-700 hover:bg-gray-900 hover:shadow-lg">
          UPDATE
        </button>
      </form>
      </div>
    </div>
  </div>
</div>
@endforeach

{{-- CREATE HISTORIC --}}
<div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="createhistoric">
    <div class="relative w-auto my-6 mx-auto max-w-2xl">
      <!--content-->
      <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
        <!--header-->
        <form action="/admin" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t">
          <h3 class="text-3xl font-semibold">
            CREATE
          </h3>
        </div>
        <!--body-->
        <div class="relative p-6 flex-auto">
            <strong>Name: </strong><input type="text" name="hisName" placeholder="Input Name..."><br>
            <strong>Image: </strong><input type="file" name="hisImage"/><br>
            <strong>Price:</strong> <input type="text" name="hisPrice" placeholder="Input Price...">
          <p class="my-4 text-blueGray-500 text-lg leading-relaxed">
            <p class="inline-block align-top"><strong>Description: </strong><textarea cols="30" rows="10" id="hisDesc" name="hisDesc" placeholder="Insert Description..."></textarea></p>
          </p>
          <p class="my-4 text-blueGray-500 text-lg leading-relaxed">
            <strong>Location:</strong> <input type="text" name="hisCity" placeholder="Input Address...">
          </p>
          <p class="my-4 text-blueGray-500 text-lg leading-relaxed">
            <strong>Contacts:</strong> <input type="text" name="hisContact" placeholder="Input Contact...">
          </p>
          <p class="my-4 text-blueGray-500 text-lg leading-relaxed">
            <strong>Email:</strong> <input type="text" name="hisEmail" placeholder="Input Email...">
          </p>
          <p class="my-4 text-blueGray-500 text-lg leading-relaxed">
            <strong>Website:</strong> <input type="text" name="hisSite" placeholder="Input Website...">
          </p>
        </div>
        <!--footer-->
        <div class="flex items-center justify-end p-6 border-t border-solid border-blueGray-200 rounded-b">
          <button class="text-gray-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('createhistoric')">
            Close
          </button>
          <button type="submit" class="text-white text-sm py-2.5 px-5 rounded-md bg-gray-700 hover:bg-gray-900 hover:shadow-lg">
            Create
          </button>
        </form>
        </div>
      </div>
    </div>
</div>
{{-- UPDATE HISTORIC --}}
@foreach ($historics as $historic)
<div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="updatehistoric">
  <div class="relative w-auto my-6 mx-auto max-w-2xl">
    <!--content-->
    <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
      <!--header-->
      <form action="/admin/{{ $historic->hisID }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT');
      <div class="flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t">
        <h3 class="text-3xl font-semibold">
          EDIT
        </h3>
      </div>
      <!--body-->
      <div class="relative p-6 flex-auto">
          <strong>Name: </strong><input type="text" name="hisName" placeholder="Input Name..."><br>
          <strong>Image: </strong><input type="file" name="hisImage"/><br>
          <strong>Price:</strong> <input type="text" name="hisPrice" placeholder="Input Price...">
        <p class="my-4 text-blueGray-500 text-lg leading-relaxed">
          <p class="inline-block align-top"><strong>Description:</strong> </p><textarea cols="30" rows="10" id="hisDesc" name="hisDesc" placeholder="Insert Description..."></textarea>
        </p>
        <p class="my-4 text-blueGray-500 text-lg leading-relaxed">
          <strong>Location:</strong> <input type="text" name="hisCity" placeholder="Input Address...">
        </p>
        <p class="my-4 text-blueGray-500 text-lg leading-relaxed">
          <strong>Contacts:</strong> <input type="text" name="hisContact" placeholder="Input Contact...">
        </p>
        <p class="my-4 text-blueGray-500 text-lg leading-relaxed">
          <strong>Email:</strong> <input type="text" name="hisEmail" placeholder="Input Email...">
        </p>
        <p class="my-4 text-blueGray-500 text-lg leading-relaxed">
          <strong>Website:</strong> <input type="text" name="hisSite" placeholder="Input Website...">
        </p>
      </div>
      <!--footer-->
      <div class="flex items-center justify-end p-6 border-t border-solid border-blueGray-200 rounded-b">
        <button class="text-gray-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('updatehistoric')">
          Close
        </button>
        <button type="submit" class="text-white text-sm py-2.5 px-5 rounded-md bg-gray-700 hover:bg-gray-900 hover:shadow-lg">
          UPDATE
        </button>
      </form>
      </div>
    </div>
  </div>
</div>
@endforeach

    <script type="text/javascript">
        function toggleModal(modalID){
          document.getElementById(modalID).classList.toggle("hidden");
          document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
          document.getElementById(modalID).classList.toggle("flex");
          document.getElementById(modalID + "-backdrop").classList.toggle("flex");
        }
      </script>

@endsection