
@if (Route::has('login'))
    {{-- <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block"> --}}
        @auth
            <li class="nav-item"><a class="nav-link" href="{{url('/home')}}"> <i class="fas fa-user me-1 text-gray fw-normal"></i>DashBoard</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}"> <i class="fas fa-user me-1 text-gray fw-normal"></i>Log out</a></li>

        @else
            <li class="nav-item"><a class="nav-link" href="{{url('/login')}}"> <i class="fas fa-user me-1 text-gray fw-normal"></i>Login</a></li>
            <li class="nav-item"><a class="nav-link" href="{{url('/register')}}"> <i class="fas fa-user me-1 text-gray fw-normal"></i>Register</a></li>
            {{-- <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
            @endif --}}
        @endauth
    {{-- </div> --}}
@endif
