@extends('layouts.app')

@section('content')

<header>
    @include('layouts.header')
</header>


<div style="height:100vh;">
  <div class="absolute mt-16 ml-4">
    <div class="container bg-black bg-opacity-50 py-44">
      <h1 class="text-5xl text-white">
        <strong>Foods</strong>
      </h1>
        <p class="text-white w-1/2">Cebu is one of the most popular destinations in the Philippines. Because it has an international airport, many people touchdown in Cebu from overseas and this is their first destination for their Philippines adventure. There are so many things to do on Cebu that unfortunately, most tourists do one or two and then head to another island. This is a big mistake as you can have an adventure-packed week or more on Cebu alone! These are all of the places I have personally visited in Cebu so far and you can click the links throughout the article to visit the individual blog posts about each location.</p>
    </div>
</div>
    <img class="block h-full w-full" src="{{ asset('storage/Foods/intro.jpg') }}">
</div>

<!--Container-->
<div class="bg-white h-auto">
    <div class="container mx-auto pt-24 md:pt-16 px-6">
        <div class="flex justify-center">
            <div class="p-20 ml-14">
                @foreach ($foods as $food)
                    <div class="relative inline-block max-w-xs rounded overflow-hidden shadow-lg" style="height:40rem">
                        <img class="w-full h-64" src="{{ asset('storage/Foods/'.$food->foodImage) }}" alt="Mountain">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">{{ $food->foodName }}</div>
                            <p class="text-gray-700 text-base">
                                {{ $food->foodDesc }}
                            </p>
                        </div>
                        <div class="absolute bottom-0 container pb-8 flex justify-center">
                            <button type="button" class="text-white text-sm py-2.5 px-5 rounded-md bg-gray-700 hover:bg-gray-900 hover:shadow-lg" onclick="toggleModal('modal-id{{ $food->foodID }}')">Add to Bucketlist</button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@foreach ($foods as $food)
<div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="modal-id{{ $food->foodID }}">
  <div class="relative w-auto my-6 mx-auto max-w-2xl">
    <!--content-->
    <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
      <!--header-->
      <form action="/services/foods" method="POST">
        @csrf
      <div class="flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t">
        <h3 class="text-3xl font-semibold">
          <input type="text" name="id" value="{{ Auth::user()->id }}" hidden>
          <input type="text" name="foodID" value="{{ $food->foodID }}" hidden>
          {{ $food->foodName }} <input type="text" name="foodName" value="{{ $food->foodName }}" hidden>
        </h3>
      </div>
      <!--body-->
      <div class="relative p-6 flex-auto">
        <img class="w-full h-96" src="{{ asset('storage/Foods/'.$food->foodImage) }}" alt="Mountain"> <input type="text" name="foodImage" value="{{ $food->foodImage }}" hidden>
        <p class="my-4 text-blueGray-500 text-lg leading-relaxed">
          {{ $food->foodDesc }} <input type="text" name="foodDesc" value="{{ $food->foodDesc }}" hidden>
        </p>
        <p class="my-4 text-blueGray-500 text-lg leading-relaxed">
          <strong>Location:</strong> {{ $food->foodCity }}<input type="text" name="foodCity" value="{{ $food->foodCity }}" hidden>
        </p>
        <p class="my-4 text-blueGray-500 text-lg leading-relaxed">
          <strong>Contacts:</strong> {{ $food->foodContact }}<input type="text" name="foodContact" value="{{ $food->foodContact }}" hidden>
        </p>
        <p class="my-4 text-blueGray-500 text-lg leading-relaxed">
          <strong>Email:</strong> {{ $food->foodEmail }}<input type="text" name="foodEmail" value="{{ $food->foodEmail }}" hidden>
        </p>
        <p class="my-4 text-blueGray-500 text-lg leading-relaxed">
          <strong>Website:</strong> {{ $food->foodSite }}<input type="text" name="foodSite" value="{{ $food->foodSite }}" hidden>
        </p>
        <input type="text" name="foodPrice" value="{{ $food->foodPrice }}" hidden>
      </div>
      <!--footer-->
      <div class="flex items-center justify-end p-6 border-t border-solid border-blueGray-200 rounded-b">
        <button class="text-gray-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('modal-id{{ $food->foodID }}')">
          Close
        </button>
        <button type="submit" class="text-white text-sm py-2.5 px-5 rounded-md bg-gray-700 hover:bg-gray-900 hover:shadow-lg">
          Add to Bucketlist
        </button>
      </form>
      </div>
    </div>
  </div>
</div>
<div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-id-backdrop"></div>
@endforeach

<script type="text/javascript">
  function toggleModal(modalID){
    document.getElementById(modalID).classList.toggle("hidden");
    document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
    document.getElementById(modalID).classList.toggle("flex");
    document.getElementById(modalID + "-backdrop").classList.toggle("flex");
  }
</script>

<footer>
    @include('layouts.footer')
</footer>

@endsection