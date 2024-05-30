<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="{{ route('classic') }}">
            <img src="{{ asset('dashboard/images/icon/logo.png') }}" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="{{ Request::routeIs('classic*') ? 'active' : '' }}">
                    <a href="{{ route('classic') }}">
                        <i class="fas fa-tachometer-alt"></i>Dashboard
                    </a>
                </li>

                 <li class="{{ Request::routeIs('manage-blog*') ? 'active' : '' }}">
                    <a href="{{ route('manage-blog') }}">
                        <i class="fas fa-tachometer-alt"></i>Blog Management
                    </a>
                </li>
                <li class="has-sub {{ Request::routeIs(['login*', 'register*', 'forget*']) ? 'active' : '' }}">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-copy"></i>Pages</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li class="{{ Request::routeIs('login*') ? 'active' : '' }}">
                            <a href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="{{ Request::routeIs('register*') ? 'active' : '' }}">
                            <a href="{{ route('register') }}">Register</a>
                        </li>
                        <li class="{{ Request::routeIs('forget*') ? 'active' : '' }}">
                            <a href="{{ route('forget') }}">Forget Password</a>
                        </li>
                    </ul>
                </li>

                {{-- <li class="{{ Request::routeIs('classic*') ? 'active' : '' }}">
                    <a href="{{ route('classic') }}">
                        <i class="fas fa-tachometer-alt"></i>Dashboard
                    </a>
                </li>
                <li class="{{ Request::routeIs('charts*') ? 'active' : '' }}">
                    <a href="{{ route('charts') }}">
                        <i class="fas fa-chart-bar"></i>Charts
                    </a>
                </li>
                <li class="{{ Request::routeIs('tables*') ? 'active' : '' }}">
                    <a href="{{ route('tables') }}">
                        <i class="fas fa-table"></i>Tables
                    </a>
                </li>
                <li class="{{ Request::routeIs('forms*') ? 'active' : '' }}">
                    <a href="{{ route('forms') }}">
                        <i class="far fa-check-square"></i>Forms
                    </a>
                </li>
                <li class="{{ Request::routeIs('calendar*') ? 'active' : '' }}">
                    <a href="{{ route('calendar') }}">
                        <i class="fas fa-calendar-alt"></i>Calendar
                    </a>
                </li>
                <li class="{{ Request::routeIs('maps*') ? 'active' : '' }}">
                    <a href="{{ route('maps') }}">
                        <i class="fas fa-map-marker-alt"></i>Maps
                    </a>
                </li>
                <li class="has-sub {{ Request::routeIs(['login*', 'register*', 'forget*']) ? 'active' : '' }}">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-copy"></i>Pages</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li class="{{ Request::routeIs('login*') ? 'active' : '' }}">
                            <a href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="{{ Request::routeIs('register*') ? 'active' : '' }}">
                            <a href="{{ route('register') }}">Register</a>
                        </li>
                        <li class="{{ Request::routeIs('forget*') ? 'active' : '' }}">
                            <a href="{{ route('forget') }}">Forget Password</a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub {{ Request::routeIs(['buttons*', 'badges*', 'tabs*', 'cards*', 'alerts*', 'progress*', 'modal*', 'switch*', 'grid*', 'font*', 'typo*']) ? 'active' : '' }}">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-desktop"></i>UI Elements</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li class="{{ Request::routeIs('buttons*') ? 'active' : '' }}">
                            <a href="{{ route('buttons') }}">Button</a>
                        </li>
                        <li class="{{ Request::routeIs('badges*') ? 'active' : '' }}">
                            <a href="{{ route('badges') }}">Badges</a>
                        </li>
                        <li class="{{ Request::routeIs('tabs*') ? 'active' : '' }}">
                            <a href="{{ route('tabs') }}">Tabs</a>
                        </li>
                        <li class="{{ Request::routeIs('cards*') ? 'active' : '' }}">
                            <a href="{{ route('cards') }}">Cards</a>
                        </li>
                        <li class="{{ Request::routeIs('alerts*') ? 'active' : '' }}">
                            <a href="{{ route('alerts') }}">Alerts</a>
                        </li>
                        <li class="{{ Request::routeIs('progress*') ? 'active' : '' }}">
                            <a href="{{ route('progress') }}">Progress Bars</a>
                        </li>
                        <li class="{{ Request::routeIs('modal*') ? 'active' : '' }}">
                            <a href="{{ route('modal') }}">Modals</a>
                        </li>
                        <li class="{{ Request::routeIs('switch*') ? 'active' : '' }}">
                            <a href="{{ route('switch') }}">Switchs</a>
                        </li>
                        <li class="{{ Request::routeIs('grid*') ? 'active' : '' }}">
                            <a href="{{ route('grid') }}">Grids</a>
                        </li>
                        <li class="{{ Request::routeIs('font*') ? 'active' : '' }}">
                            <a href="{{ route('font') }}">Fontawesome Icon</a>
                        </li>
                        <li class="{{ Request::routeIs('typo*') ? 'active' : '' }}">
                            <a href="{{ route('typo') }}">Typography</a>
                        </li>
                    </ul>
                </li> --}}
            </ul>
        </nav>
    </div>
</aside>
