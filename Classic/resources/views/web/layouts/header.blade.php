<div class="tm-header">
    <div class="container-fluid">
        <div class="tm-header-inner">
            <a href="#" class="navbar-brand tm-site-name">Classic</a>

            <!-- navbar -->
            <nav class="navbar tm-main-nav">
                <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
                    &#9776;
                </button>

                <div class="collapse navbar-toggleable-sm" id="tmNavbar">
                    <ul class="nav navbar-nav">
                        <li class="nav-item {{ Route::currentRouteName() == 'web' ? 'active' : '' }}">
                            <a href="{{ route('web') }}" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item {{ Route::currentRouteName() == 'about' ? 'active' : '' }}">
                            <a href="{{ route('about') }}" class="nav-link">About</a>
                        </li>
                        <li class="nav-item {{ Route::currentRouteName() == 'blog' ? 'active' : '' }}">
                            <a href="{{ route('blog') }}" class="nav-link">Blog</a>
                        </li>
                        <li class="nav-item {{ Route::currentRouteName() == 'contact' ? 'active' : '' }}">
                            <a href="{{ route('contact') }}" class="nav-link">Contact</a>
                        </li>
                        @if (Route::has('login'))
                            @auth
                                <li class="nav-item"><a class="nav-link" href="{{url('/admin')}}"> <i class="fas fa-user me-1 text-gray fw-normal"></i>DashBoard</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}"> <i class="fas fa-user me-1 text-gray fw-normal"></i>Log out</a></li>
                            @else
                                <li class="nav-item"><a class="nav-link" href="{{url('/login')}}"> <i class="fas fa-user me-1 text-gray fw-normal"></i>Login</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('/register')}}"> <i class="fas fa-user me-1 text-gray fw-normal"></i>Register</a></li>
                            @endauth
                        @endif
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
