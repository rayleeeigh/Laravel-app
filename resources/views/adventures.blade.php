@extends('layouts.app')

@section('content')

<header>
    @include('layouts.header')
</header>


<div style="height:100vh;">
    <img class="block h-full w-full" src="{{ asset('storage/Adventure/intro.jpg') }}">
</div>

<!--Container-->
<div class="bg-white h-auto">
    <div class="container mx-auto pt-24 md:pt-16 px-6">
        <div class="flex justify-center">
            <div class="p-20 ml-14">
                @foreach ($adventures as $adventure)
                    <div class="relative inline-block max-w-xs rounded overflow-hidden shadow-lg" style="height:40rem">
                        <img class="w-full h-64" src="{{ asset($adventure->advImage) }}" alt="Mountain">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">{{ $adventure->advName }}</div>
                            <p class="text-gray-700 text-base">
                                {{ $adventure->advDesc }}
                            </p>
                        </div>
                        <div class="absolute bottom-0 container pb-8 flex justify-center">
                            <button type="button" class="text-white text-sm py-2.5 px-5 rounded-md bg-gray-700 hover:bg-gray-900 hover:shadow-lg" onclick="toggleModal('modal-id{{ $adventure->advID }}')">Add to Bucketlist</button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@foreach ($adventures as $adventure)
<div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="modal-id{{ $adventure->advID }}">
  <div class="relative w-auto my-6 mx-auto max-w-2xl">
    <!--content-->
    <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
      <!--header-->
      <form action="/services/adventures" method="POST">
        @csrf
      <div class="flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t">
        <h3 class="text-3xl font-semibold">
          <input type="text" name="advID" value="{{ Auth::user()->id }}" hidden>
          {{ $adventure->advName }} <input type="text" name="advName" value="{{ $adventure->advName }}" hidden>
        </h3>
      </div>
      <!--body-->
      <div class="relative p-6 flex-auto">
        <img class="w-full h-96" src="{{ asset($adventure->advImage) }}" alt="Mountain"> <input type="text" name="advImage" value="{{ $adventure->advImage }}" hidden>
        <p class="my-4 text-blueGray-500 text-lg leading-relaxed">
          {{ $adventure->advDesc }} <input type="text" name="advDesc" value="{{ $adventure->advDesc }}" hidden>
        </p>
        <p class="my-4 text-blueGray-500 text-lg leading-relaxed">
          <strong>Location:</strong> {{ $adventure->advCity }}<input type="text" name="advCity" value="{{ $adventure->advCity }}" hidden>
        </p>
        <p class="my-4 text-blueGray-500 text-lg leading-relaxed">
          <strong>Contacts:</strong> {{ $adventure->advContact }}<input type="text" name="advContact" value="{{ $adventure->advContact }}" hidden>
        </p>
        <p class="my-4 text-blueGray-500 text-lg leading-relaxed">
          <strong>Email:</strong> {{ $adventure->advEmail }}<input type="text" name="advEmail" value="{{ $adventure->advEmail }}" hidden>
        </p>
        <p class="my-4 text-blueGray-500 text-lg leading-relaxed">
          <strong>Website:</strong> {{ $adventure->advSite }}<input type="text" name="advSite" value="{{ $adventure->advSite }}" hidden>
        </p>
        <input type="text" name="advPrice" value="{{ $adventure->advPrice }}" hidden>
      </div>
      <!--footer-->
      <div class="flex items-center justify-end p-6 border-t border-solid border-blueGray-200 rounded-b">
        <button class="text-gray-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('modal-id{{ $adventure->advID }}')">
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