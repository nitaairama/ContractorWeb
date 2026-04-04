<!-- Header -->
<header id="header" class="header d-flex align-items-center fixed-top" style="background-color: #37517e !important;">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto">
        <h1 class="sitename" style="color: #ffffff !important;">Arsha</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}" style="color: rgba(255, 255, 255, 0.8) !important;">Home</a></li>
          <li><a href="{{ url('/about') }}" class="{{ request()->is('about') ? 'active' : '' }}" style="color: rgba(255, 255, 255, 0.8) !important;">About</a></li>
          <li><a href="{{ url('/portofolio') }}" class="{{ request()->is('portofolio') ? 'active' : '' }}" style="color: rgba(255, 255, 255, 0.8) !important;">Portfolio</a></li>
          <li><a href="{{ url('/contact') }}" class="{{ request()->is('contact') ? 'active' : '' }}" style="color: rgba(255, 255, 255, 0.8) !important;">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list" style="color: #ffffff !important;"></i>
      </nav>

      <a class="btn-getstarted" href="{{ url('/about') }}" style="background: #47b2e4; color: #ffffff; border: none;">Get Started</a>

    </div>
</header>

<style>
    /* Tambahan agar saat di-hover warna link berubah jadi putih terang */
    .navmenu a:hover {
        color: #ffffff !important;
    }
    /* Agar menu yang aktif warnanya putih terang */
    .navmenu a.active {
        color: #ffffff !important;
    }
</style>