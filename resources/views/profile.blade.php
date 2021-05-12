@extends('layouts.app')

@section('content')

<header>
    @include('layouts.header')
</header>

<div class="w-full relative overflow-hidden">
    <div class="top h-72 w-full bg-blue-600 overflow-hidden relative" >
      <img src="https://images.unsplash.com/photo-1503264116251-35a269479413?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="" class="bg w-full h-full object-cover object-center absolute z-0">
      <div class="flex flex-col justify-center items-center relative h-full bg-black bg-opacity-50 text-white">
        <img src="{{ asset('storage/Profile/'.Auth::user()->image) }}" class="mt-4 h-24 w-24 object-cover rounded-full">
        <h1 class="text-2xl font-semibold">{{ Auth::user()->name }}</h1>
        <h4 class="text-sm font-semibold">Joined Since {{ Carbon\Carbon::parse(Auth::user()->created_at)->year }}</h4>
      </div>
    </div>
    <div class="grid grid-cols-12 bg-white ">
  
      <div class="col-span-12 w-full px-3 py-6 justify-center flex space-x-4 border-b border-solid md:space-x-0 md:space-y-4 md:flex-col md:col-span-2 md:justify-start ">
  
        <button type="button" class="text-sm p-2 bg-gray-900 text-white text-center rounded font-bold" id="account" onclick="switchAccount('accounttab','buckettab','account','bucket')">Account Information</button>
  
        <button type="button" class="text-sm p-2 bg-gray-200 text-center rounded font-semibold hover:bg-gray-900 hover:text-gray-200" id="bucket" onclick="switchBucket('accounttab','buckettab','account','bucket')">Bucket List</button>
  
      </div>
  
      <div class="col-span-12 md:border-solid md:border-l md:border-black md:border-opacity-25 h-full pb-12 md:col-span-10" id="accounttab" style="display:block">
        <div class="px-4 pt-4">
          <form action="/profile/{{ Auth::user()->id }}" class="flex flex-col space-y-8" method='POST'>
            @csrf
            @method('PUT')
            <div>
              <h3 class="inline-block text-2xl font-semibold">Account Information</h3>
              <button type="button" class="float-right inline-block text-gray-700 text-sm px-5 hover:text-red-600" onclick="editProfile('biography','fullname','name','email','submit','passworddiv','password')" >Edit Profile</button>
              <hr>
            </div>
  
            <div class="form-item">
              <label class="text-xl ">Full Name</label>
              <input type="text" id="fullname" name="fullname" value="{{ Auth::user()->fullname }}" class="w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2  mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200" disabled>
            </div>
  
            <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:space-x-4">
  
              <div class="form-item w-full">
                <label class="text-xl ">Username</label>
                <input type="text" id="name" name="name" value="{{ Auth::user()->name }}" class="w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200 text-opacity-25 " disabled>
              </div>
  
              <div class="form-item w-full">
                <label class="text-xl ">Email</label>
                <input type="text" id="email" name="email" value="{{ Auth::user()->email }}" class="w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200 text-opacity-25 " disabled>
              </div>
            </div>

            <div class="form-item" id="passworddiv" style="visibility:hidden">
              <label class="text-xl ">Password</label>
              <input type="password" id="password" name="password" value="{{ Auth::user()->password }}" class="w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2  mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200" disabled>
            </div>
  
            <div>
              <h3 class="text-2xl font-semibold ">More About Me</h3>
              <hr>
            </div>
  
            <div class="form-item w-full">
              <label class="text-xl ">Biography</label>
              <textarea cols="30" rows="10" id="biography" name="biography" class="w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200 text-opacity-25 " disabled>{{ Auth::user()->biography }}</textarea>
            </div>
            
            <div class="flex justify-center">
              <button type="submit" name="submit" id="submit" class="w-64 text-white text-sm py-2.5 px-5 rounded-md bg-gray-700 hover:bg-gray-900 hover:shadow-lg" style="visibility:hidden">Save Changes</button>
            </div>
            
          </form>
        </div>
      </div>

      <div class="col-span-12 md:border-solid md:border-l md:border-black md:border-opacity-25 h-full pb-12 md:col-span-10" id="buckettab" style="display:none">
      
        <h1 class="text-4xl text-black flex justify-center">
            <strong>Accomodations</strong>
        </h1>
        
        <div class="p-20 ml-6">
        @foreach ($bucketacc as $bucket)
                      <div class="relative inline-block w-72 rounded overflow-hidden shadow-lg" style="height:30rem">
                          <img class="w-full h-52" src="{{ asset('storage/Accomodation/'.$bucket->accImage) }}" alt="Mountain">
                          <div class="px-6 py-4">
                              <div class="font-bold text-xl mb-2">{{ $bucket->bucketName }}</div>
                              <p class="text-gray-700 text-base">
                                  <strong>Contact: </strong>{{ $bucket->accContact }}<br>
                                  <strong>Email: </strong>{{ $bucket->accEmail }}<br>
                                  <strong>Website: </strong>{{ $bucket->accWebsite }}
                              </p>
                          </div>
                          @foreach ($bucketuseracc as $buser)
                            @if ($buser->item === $bucket->accID)
                            <form action="/profile/{{ $buser->bucketID }}" method="POST">
                            @endif
                          @endforeach
                          @csrf
                          @method('delete')
                          <div class="absolute bottom-0 container pb-8 flex justify-center">
                              <button type="submit" class="text-white text-sm py-2.5 px-5 rounded-md bg-gray-700 hover:bg-gray-900 hover:shadow-lg">Delete</button>
                          </div>
                          </form>
                      </div>
        @endforeach
        
        </div>

        <h1 class="text-4xl text-black flex justify-center">
          <strong>Adventures</strong>
      </h1>
      
      <div class="p-20 ml-6">
      @foreach ($bucketadv as $bucket)
                    <div class="relative inline-block w-72 rounded overflow-hidden shadow-lg" style="height:30rem">
                        <img class="w-full h-52" src="{{ asset('storage/Adventure/'.$bucket->advImage) }}" alt="Mountain">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">{{ $bucket->bucketName }}</div>
                            <p class="text-gray-700 text-base">
                              <strong>Contact: </strong>{{ $bucket->advContact }}<br>
                              <strong>Email: </strong>{{ $bucket->advEmail }}<br>
                              <strong>Website: </strong>{{ $bucket->advWebsite }}
                            </p>
                        </div>
                        @foreach ($bucketuseradv as $buser)
                          @if ($buser->item === $bucket->accID)
                          <form action="/profile/{{ $buser->bucketID }}" method="POST">
                          @endif
                        @endforeach
                        @csrf
                        @method('delete')
                        <div class="absolute bottom-0 container pb-8 flex justify-center">
                            <button type="submit" class="text-white text-sm py-2.5 px-5 rounded-md bg-gray-700 hover:bg-gray-900 hover:shadow-lg">Delete</button>
                        </div>
                        </form>
                    </div>
      @endforeach
      
      </div>

      <h1 class="text-4xl text-black flex justify-center">
        <strong>Food Trips</strong>
    </h1>
    
    <div class="p-20 ml-6">
    @foreach ($bucketfood as $bucket)
                  <div class="relative inline-block w-72 rounded overflow-hidden shadow-lg" style="height:30rem">
                      <img class="w-full h-52" src="{{ asset('storage/Foods/'.$bucket->foodImage) }}" alt="Mountain">
                      <div class="px-6 py-4">
                          <div class="font-bold text-xl mb-2">{{ $bucket->bucketName }}</div>
                          <p class="text-gray-700 text-base">
                            <strong>Contact: </strong>{{ $bucket->foodContact }}<br>
                            <strong>Email: </strong>{{ $bucket->foodEmail }}<br>
                            <strong>Website: </strong>{{ $bucket->foodWebsite }}
                          </p>
                      </div>
                      @foreach ($bucketuserfood as $buser)
                        @if ($buser->item === $bucket->accID)
                        <form action="/profile/{{ $buser->bucketID }}" method="POST">
                        @endif
                      @endforeach
                      @csrf
                      @method('delete')
                      <div class="absolute bottom-0 container pb-8 flex justify-center">
                          <button type="submit" class="text-white text-sm py-2.5 px-5 rounded-md bg-gray-700 hover:bg-gray-900 hover:shadow-lg">Delete</button>
                      </div>
                      </form>
                  </div>
    @endforeach
    
    </div>

    <h1 class="text-4xl text-black flex justify-center">
      <strong>Historical Sites</strong>
  </h1>
  
  <div class="p-20 ml-6">
  @foreach ($buckethis as $bucket)
                <div class="relative inline-block w-72 rounded overflow-hidden shadow-lg" style="height:30rem">
                    <img class="w-full h-52" src="{{ asset('storage/Historic/'.$bucket->hisImage) }}" alt="Mountain">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">{{ $bucket->bucketName }}</div>
                        <p class="text-gray-700 text-base">
                          <strong>Contact: </strong>{{ $bucket->hisContact }}<br>
                          <strong>Email: </strong>{{ $bucket->hisEmail }}<br>
                          <strong>Website: </strong>{{ $bucket->hisWebsite }}
                        </p>
                    </div>
                    @foreach ($bucketuserhis as $buser)
                      @if ($buser->item === $bucket->accID)
                      <form action="/profile/{{ $buser->bucketID }}" method="POST">
                      @endif
                    @endforeach
                    @csrf
                    @method('delete')
                    <div class="absolute bottom-0 container pb-8 flex justify-center">
                        <button type="submit" class="text-white text-sm py-2.5 px-5 rounded-md bg-gray-700 hover:bg-gray-900 hover:shadow-lg">Delete</button>
                    </div>
                    </form>
                </div>
  @endforeach
  
  </div>

      </div>
  
  
    </div>
  </div>

  <script>
    function editProfile($id1,$id2,$id3,$id4,$id5,$id6,$id7){
      document.getElementById($id1).disabled = false;
      document.getElementById($id2).disabled = false;
      document.getElementById($id3).disabled = false;
      document.getElementById($id4).disabled = false;
      document.getElementById($id5).style.visibility = "visible";
      document.getElementById($id6).style.visibility = "visible";
      document.getElementById($id7).disabled = false;
    }

    function switchBucket($id1,$id2,$id3,$id4){
      if(document.getElementById($id2).style.display === 'none'){
        document.getElementById($id1).style.display = "none";
        document.getElementById($id2).style.display = "block";
        document.getElementById($id4).className = "text-sm p-2 bg-gray-900 text-white text-center rounded font-bold";
        document.getElementById($id3).className="text-sm p-2 bg-gray-200 text-center rounded font-semibold hover:bg-gray-900 hover:text-gray-200";
      }
    }

    function switchAccount($id1,$id2,$id3,$id4){
      if (document.getElementById($id1).style.display === 'none'){
        document.getElementById($id2).style.display = "none";
        document.getElementById($id1).style.display = "block";
        document.getElementById($id3).className = "text-sm p-2 bg-gray-900 text-white text-center rounded font-bold";
        document.getElementById($id4).className="text-sm p-2 bg-gray-200 text-center rounded font-semibold hover:bg-gray-900 hover:text-gray-200";
      }
    }
  </script>

<footer>
    @include('layouts.footer')
</footer>

@endsection