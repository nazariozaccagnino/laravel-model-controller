<header>
    <div id="main-menu">
        <nav class="navbar-nav container">
            <div class="text-center"><h1>Movie Database</h1></div>
            <ul class="list-unstyled d-flex justify-content-center gap-2 text-uppercase">
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}"
                        href="{{route('home')}}">
                        Home
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>
