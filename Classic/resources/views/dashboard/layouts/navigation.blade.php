@if (Route::has('login'))
    @auth
        <li class="nav-item"><a class="nav-link" href="{{ route('classic') }}"> <i class="fas fa-user me-1 text-gray fw-normal"></i>Classic</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}"> <i class="fas fa-user me-1 text-gray fw-normal"></i>Log out</a></li>
    @else
        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}"> <i class="fas fa-user me-1 text-gray fw-normal"></i>Login</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}"> <i class="fas fa-user me-1 text-gray fw-normal"></i>Register</a></li>
    @endauth
@endif

