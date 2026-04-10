<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
    <title>Edit Project</title>
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
                        <a href="/admin" class="btn-getstarted">Back</a>
                    </div>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </header>

    <main class="container py-5">

        <div class="section-title mb-4">
            <h2>Edit Project</h2>
            <p>Update data project</p>
        </div>

        <form action="/admin/update/{{ $data->id }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row g-4">

                <!-- Title -->
                <div class="col-md-6">
                    <label>Title</label>
                    <input type="text" name="title" value="{{ $data->title }}" class="form-control" required>
                </div>

                <!-- Category -->
                <div class="col-md-6">
                    <label>Category</label>
                    <input type="text" name="category" value="{{ $data->category }}" class="form-control" required>
                </div>

                <!-- Client -->
                <div class="col-md-6">
                    <label>Client</label>
                    <input type="text" name="client" value="{{ $data->client }}" class="form-control">
                </div>

                <!-- Location -->
                <div class="col-md-6">
                    <label>Location</label>
                    <input type="text" name="location" value="{{ $data->location }}" class="form-control">
                </div>

                <!-- Start Date -->
                <div class="col-md-6">
                    <label>Start Date</label>
                    <input type="date" name="start_date" value="{{ $data->start_date }}" class="form-control">
                </div>

                <!-- End Date -->
                <div class="col-md-6">
                    <label>End Date</label>
                    <input type="date" name="end_date" value="{{ $data->end_date }}" class="form-control">
                </div>

                <!-- Description -->
                <div class="col-12">
                    <label>Description</label>
                    <textarea name="description" rows="4" class="form-control">{{ $data->description }}</textarea>
                </div>

                <!-- Image -->
                <div class="col-12">
                    <label>Image (optional)</label>
                    <input type="file" name="image" class="form-control">

                    <div class="mt-3">
                        <img src="{{ asset('images/' . $data->image) }}" width="150">
                    </div>
                </div>

            </div>

            <button class="btn btn-warning mt-4">Update Project</button>

        </form>

    </main>

    <!-- Preloader -->
    <div id="preloader"></div>

    @include('partials.scripts')
</body>

</html>