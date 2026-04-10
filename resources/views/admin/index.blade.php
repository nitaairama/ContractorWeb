<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
    <title>Orbit - Admin Dashboard</title>
</head>

<body>

    <!-- Header -->
    <header id="header" class="header d-flex align-items-center sticky-top py-4">
        <div class="container position-relative d-flex align-items-center justify-content-between">
            <a href="" class="logo d-flex align-items-center me-auto me-xl-0">
                <h1 class="sitename">Orbit Admin</h1><span>.</span>
            </a>

            <!-- Navigation Bar -->
            <nav id="navmenu" class="navmenu">
                <ul>
                    <div>
                        <a class="btn-getstarted" href="{{ url('/admin/create') }}">Create Project</a>
                    </div>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </header>

    <main>

        <section id="portfolio" class="portfolio section">

            <div class="container section-title">
                <h2>Manage Projects</h2>
            </div>

            <div class="container">

                <!-- PROJECT LIST -->
                <div class="row g-4">

                    @forelse($data as $item)
                        <div class="col-lg-4 col-md-6">

                            <div class="project-card">

                                <!-- IMAGE -->
                                <div class="image-wrapper">

                                    <img src="{{ asset('images/' . $item->image) }}" class="img-fluid"
                                        alt="{{ $item->title }}">

                                    <div class="hover-overlay">
                                        <div class="overlay-actions">

                                            <a href="{{ asset('images/' . $item->image) }}" class="glightbox action-btn">
                                                <i class="bi bi-eye"></i>
                                            </a>

                                        </div>
                                    </div>

                                    <span class="category-badge">
                                        {{ $item->category }}
                                    </span>

                                </div>

                                <!-- CONTENT -->
                                <div class="project-info">

                                    <h3>{{ $item->title }}</h3>

                                    <p class="small text-muted">
                                        {{ $item->location }}
                                    </p>

                                    <p>
                                        {{ Str::limit($item->description, 80) }}
                                    </p>

                                    <!-- ACTION -->
                                    <div class="mt-3 d-flex gap-2">

                                        <a href="/admin/edit/{{ $item->id }}" class="btn btn-warning btn-sm">
                                            Edit
                                        </a>

                                        <form action="/admin/delete/{{ $item->id }}" method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <button onclick="return confirm('Yakin hapus project ini?')"
                                                class="btn btn-danger btn-sm">
                                                Delete
                                            </button>
                                        </form>

                                    </div>

                                </div>

                            </div>

                        </div>

                    @empty

                        <!-- BONUS FIX -->
                        <div class="col-12 text-center">
                            <p>No projects found</p>
                        </div>
                    @endforelse

                </div>

            </div>

        </section>

    </main>


    @include('partials.scripts')
</body>

</html>
