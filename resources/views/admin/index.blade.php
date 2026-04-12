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
        <!-- Project Section -->
        <section id="portfolio" class="portfolio section">
            <!-- Section Title -->
            <div class="container section-title">
                <h2>Manage Projects</h2>
            </div>

            <!-- Container -->
            <div class="container">
                <!-- Project Cards -->
                <div class="row g-4">
                    @forelse($data as $item)
                        <div class="col-lg-4 col-md-6">
                            <div class="project-card">
                                <!-- Image -->
                                <div class="image-wrapper">
                                    <img src="{{ asset('images/' . ($item->images[0] ?? $item->image)) }}"
                                        class="img-fluid" alt="{{ $item->title }}">
                                    <div class="hover-overlay">
                                        <div class="overlay-actions">
                                            <a href="{{ asset('images/' . ($item->images[0] ?? $item->image)) }}"
                                                class="glightbox action-btn">
                                                <i class="bi bi-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Category -->
                                    <span class="category-badge">
                                        {{ $item->category }}
                                    </span>
                                </div>

                                <!-- Content -->
                                <div class="project-info">
                                    <h3>{{ $item->title }}</h3>
                                    <p>
                                        {{ Str::limit($item->description, 80) }}
                                    </p>
                                    <!-- Action Button -->
                                    <div class="mt-3 d-flex gap-2">
                                        <!-- Edit -->
                                        <a href="/admin/edit/{{ $item->id }}" class="btn btn-sm px-3 py-2 rounded-5"
                                            style="background: #facc15; color: #1e293b; border: none;">
                                            Edit
                                        </a>
                                        <!-- Delete -->
                                        <form id="delete-form-{{ $item->id }}"
                                            action="/admin/delete/{{ $item->id }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" onclick="confirmDelete({{ $item->id }})"
                                                class="btn btn-sm px-3 py-2 rounded-5"
                                                style="background: #ef4444; color: white; border: none;">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <!-- Empty State -->
                        <div class="col-12 text-center">
                            <p>No projects found</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </section>

    </main>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    @include('partials.scripts')

        <!-- Success Popup -->
    <script>
        @if (session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: '{{ session('success') }}',
                confirmButtonColor: '#0ea5e9'
            });
        @endif
    </script>
</body>

</html>
