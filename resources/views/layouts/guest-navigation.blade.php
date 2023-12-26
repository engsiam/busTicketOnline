<nav class="fixed top-0 z-50 w-full bg-[#9ccc65]">
    <div class="px-2 mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="relative flex items-center justify-between h-16">
        <div class="flex items-center justify-center flex-1 sm:items-stretch sm:justify-start">
          <div class="flex items-center flex-shrink-0">
            <a href="{{ route('home') }}">
                <x-application-logo class="block w-auto text-white fill-current h-9" />
            </a>
          </div>
          <div class="hidden sm:ml-6 sm:block">
            <div class="flex space-x-6 items-center">
              <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'bg-teal-900' : ''}} text-white rounded-md px-3 py-2 text-sm font-medium">Book A Trip</a>

            </div>
          </div>
        </div>
        <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'bg-teal-900' : ''}} text-white rounded-md px-3 py-2 text-sm font-medium">Dashboard</a>
                    <form method="POST" action="{{ route('logout') }}">
                      @csrf
                    <a href="{{route('logout')}}"
                    onclick="event.preventDefault(); this.closest('form').submit()" class="{{ request()->routeIs('dashboard') ? 'bg-gray-900' : ''}} text-white rounded-md px-3 py-2 text-sm font-medium">Log Out</a>
                  </form>
                @else

                    <a href="{{ route('login') }}" class="{{ request()->routeIs('login') ? 'bg-gray-900' : ''}} text-white rounded-md px-3 py-2 text-sm font-medium">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="{{ request()->routeIs('register') ? 'bg-gray-900' : ''}} text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Register</a>
                    @endif
                @endauth
            @endif
        </div>
      </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden" id="mobile-menu">
      <div class="px-2 pt-2 pb-3 space-y-1">
        @if (Route::has('login'))
            @auth
                <a href="{{ url('/dashboard') }}" class="px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-md">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-md">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="px-3 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">Register</a>
                @endif
            @endauth
        @endif
      </div>
    </div>
</nav>
