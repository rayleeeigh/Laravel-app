<nav class="bg-gray-800 bg-opacity-50 p-2 mt-0 fixed w-full z-10 top-0">
    <div class="container mx-auto flex flex-wrap items-center">
        <div class="flex w-full md:w-1/2 justify-center md:justify-start text-white font-extrabold">
            <a class="text-white no-underline hover:text-white hover:no-underline" href="/">
                <span class="text-2xl pl-2"><i class="em em-grinning"></i> Suroy-Suroy Sugbo</span>
            </a>
        </div>
        <div class="flex w-full pt-2 content-center justify-between md:w-1/2 md:justify-end">
            <ul class="list-reset flex justify-between flex-1 md:flex-none items-center">

              @guest
                <li class="mr-3">
                        <a class="{{ request()->is('login')?'inline-block py-2 px-4 text-white no-underline':'inline-block text-black no-underline hover:text-gray-200 hover:text-underline py-2 px-4' }}" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                    @if (Route::has('register'))
                        <li class="mr-3">
                            <a class="{{ request()->is('register')?'inline-block py-2 px-4 text-white no-underline':'inline-block text-black no-underline hover:text-gray-200 hover:text-underline py-2 px-4' }}" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="mr-3">
                        <a class="{{ request()->is('/')?'inline-block py-2 px-4 text-white no-underline':'inline-block text-black no-underline hover:text-gray-200 hover:text-underline py-2 px-4' }}" href="/">Home</a>
                    </li>
                    <li class="mr-3">
                        <div class="relative">
                            <input type="checkbox" id="sortbox" class="hidden absolute">
                            <label for="sortbox" class="flex items-center space-x-1 cursor-pointer">
                                <span class="{{ request()->is('services/*')?'inline-block py-2 px-4 text-white no-underline':'inline-block text-black no-underline hover:text-gray-200 hover:text-underline py-2 px-4' }}">Services</span>
                            </label>
                        
                            <div id="sortboxmenu" class="absolute mt-1 right-1 top-full min-w-max shadow rounded opacity-0 bg-gray-800 bg-opacity-50 transition delay-75 ease-in-out z-10">
                                <ul class="block text-right text-gray-900">
                                    <li><a href="/services/accomodations" class="{{ request()->is('services/accomodations')?'inline-block py-2 px-4 text-white no-underline':'inline-block text-black no-underline hover:text-gray-200 hover:text-underline py-2 px-4' }}">Accomodations</a></li>
                                    <li><a href="/services/adventures" class="{{ request()->is('services/adventures')?'inline-block py-2 px-4 text-white no-underline':'inline-block text-black no-underline hover:text-gray-200 hover:text-underline py-2 px-4' }}">Adventures</a></li>
                                    <li><a href="/services/foods" class="{{ request()->is('services/foods')?'inline-block py-2 px-4 text-white no-underline':'inline-block text-black no-underline hover:text-gray-200 hover:text-underline py-2 px-4' }}">Food Tours</a></li>
                                    <li><a href="/services/historics" class="{{ request()->is('services/historics')?'inline-block py-2 px-4 text-white no-underline':'inline-block text-black no-underline hover:text-gray-200 hover:text-underline py-2 px-4' }}">Historical Tours</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="mr-3">
                        <a class="{{ request()->is('map')?'inline-block py-2 px-4 text-white no-underline':'inline-block text-black no-underline hover:text-gray-200 hover:text-underline py-2 px-4' }}" href="/map">Map of Cebu</a>
                    </li>
                    
                    <li class="mr-3">
                        <a class="inline-block py-2 px-4 text-white no-underline" href="/profile">Welcome, {{ Auth::user()->name }}</a>
                    </li>

                    <a href="{{ route('logout') }}"
                       class="inline-block text-black no-underline hover:text-gray-200 hover:text-underline py-2 px-4"
                       onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        {{ csrf_field() }}
                    </form>
                @endguest

            </ul>
        </div>
    </div>
</nav>