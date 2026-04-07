<!-- Header -->
<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto me-xl-0">
            <h1 class="sitename">Orbit</h1><span>.</span>
        </a>

        <!-- Navigation Bar -->
        <nav id="navmenu" class="navmenu">
            <ul>
                <li>
                    <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a>
                </li>
                <li>
                    <a href="{{ url('/about') }}" class="{{ request()->is('about') ? 'active' : '' }}">About</a>
                </li>
                <li>
                    <a href="{{ url('/project') }}" class="{{ request()->is('project*') ? 'active' : '' }}">Projects</a>
                </li>
                <li>
                    <a href="{{ url('/contact') }}" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a>
                </li>
                <div>
                    <a class="btn-getstarted" href="{{ url('/') }}">Get Started</a>
                </div>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
    </div>
</header>
