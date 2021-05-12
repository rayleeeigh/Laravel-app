@extends('layouts.app')

@section('content')

<header>
    @include('layouts.header')
</header>


<div style="height:100vh;">
  <div class="absolute mt-16 ml-4">
    <div class="container bg-black bg-opacity-50 py-48">
      <h1 class="text-5xl text-white">
        <strong>Accomodations</strong>
      </h1>
        <p class="text-white w-1/2">While most travellers arrive via the airport on neighbouring Mactan – where five-star spa resorts have exclusive beaches and dive sites teeming with life – many then head for neighbouring Cebu, home to Cebu City, an economic hub peppered with grand colonial architecture, or Moalboal on the island’s west side, which delivers high-adrenaline canyoneering and deep-diving thrills, and Zaragosa with its postcard-perfect beaches. Here’s our pick of the best hotels on this vibrant island in the Philippines.</p>
    </div>
</div>
    <img class="block h-full w-full" src="{{ asset('storage/Accomodation/intro.jpg') }}">
</div>

<!--Container-->
<div class="bg-white h-auto">
    <div class="container mx-auto pt-24 md:pt-16 px-6">
        <div class="flex justify-center">
            <div class="p-20 ml-14">
                @foreach ($accomodations as $accomodation)
                    <div class="relative inline-block max-w-xs rounded overflow-hidden shadow-lg" style="height:40rem">
                        <img class="w-full h-64" src="{{ asset('storage/Accomodation/'.$accomodation->accImage) }}" alt="Mountain">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">{{ $accomodation->accName }}</div>
                            <p class="text-gray-700 text-base">
                                {{ $accomodation->accDesc }}
                            </p>
                        </div>
                        <div class="absolute bottom-0 container pb-8 flex justify-center">
                            <button type="button" class="text-white text-sm py-2.5 px-5 rounded-md bg-gray-700 hover:bg-gray-900 hover:shadow-lg" onclick="toggleModal('modal-id{{ $accomodation->accID }}')">Add to Bucketlist</button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@foreach ($accomodations as $accomodation)
<div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="modal-id{{ $accomodation->accID }}">
  <div class="relative w-auto my-6 mx-auto max-w-2xl">
    <!--content-->
    <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
      <!--header-->
      <form action="/services/accomodations" method="POST">
        @csrf
      <div class="flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t">
        <h3 class="text-3xl font-semibold">
          <input type="text" name="id" value="{{ Auth::user()->id }}" hidden>
          <input type="text" name="accID" value="{{ $accomodation->accID }}" hidden>
          {{ $accomodation->accName }} <input type="text" name="accName" value="{{ $accomodation->accName }}" hidden>
        </h3>
      </div>
      <!--body-->
      <div class="relative p-6 flex-auto">
        <img class="w-full h-96" src="{{ asset('storage/Accomodation/'.$accomodation->accImage) }}" alt="Mountain"> <input type="text" name="accImage" value="{{ $accomodation->accImage }}" hidden>
        <p class="my-4 text-blueGray-500 text-lg leading-relaxed">
          {{ $accomodation->accDesc }} <input type="text" name="accDesc" value="{{ $accomodation->accDesc }}" hidden>
        </p>
        <p class="my-4 text-blueGray-500 text-lg leading-relaxed">
          <strong>Location:</strong> {{ $accomodation->accCity }}<input type="text" name="accCity" value="{{ $accomodation->accCity }}" hidden>
        </p>
        <p class="my-4 text-blueGray-500 text-lg leading-relaxed">
          <strong>Contacts:</strong> {{ $accomodation->accContact }}<input type="text" name="accContact" value="{{ $accomodation->accContact }}" hidden>
        </p>
        <p class="my-4 text-blueGray-500 text-lg leading-relaxed">
          <strong>Email:</strong> {{ $accomodation->accEmail }}<input type="text" name="accEmail" value="{{ $accomodation->accEmail }}" hidden>
        </p>
        <p class="my-4 text-blueGray-500 text-lg leading-relaxed">
          <strong>Website:</strong> {{ $accomodation->accSite }}<input type="text" name="accSite" value="{{ $accomodation->accSite }}" hidden>
        </p>
        <input type="text" name="accPrice" value="{{ $accomodation->accPrice }}" hidden>
      </div>
      <!--footer-->
      <div class="flex items-center justify-end p-6 border-t border-solid border-blueGray-200 rounded-b">
        <button class="text-gray-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('modal-id{{ $accomodation->accID }}')">
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