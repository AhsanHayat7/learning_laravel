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
                        <li class="nav-item {{ Route::currentRouteName() == 'classic' ? 'active' : '' }}">
                            <a href="{{ route('classic') }}" class="nav-link">Home</a>
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
                        <li class="nav-item {{ Route::currentRouteName() == 'login' ? 'active' : '' }}">
                            <a href="{{ route('login') }}" class="nav-link">Login</a>
                        </li>
                        <li class="nav-item {{ Route::currentRouteName() == 'register' ? 'active' : '' }}">
                            <a href="{{ route('register') }}" class="nav-link">Register</a>
                        </li>
                        <li class="nav-item {{ Route::currentRouteName() == 'logout' ? 'active' : '' }}">
                            <a href="{{ route('logout') }}" class="nav-link">Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
