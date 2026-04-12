<!DOCTYPE html>
<html lang="en">
@include('partials.head')
<title>Archiflow - Create Project</title>

<body>
    <!-- Header -->
    <header id="header" class="header d-flex align-items-center sticky-top py-4">
        <div class="container position-relative d-flex align-items-center justify-content-between">
            <a href="" class="logo d-flex align-items-center me-auto me-xl-0 gap-1">
                <img src="{{ asset('assets/img/favicon.png') }}" alt="Archiflow Logo" class="img-fluid me-2">
                <h1 class="sitename">Admin</h1>
            </a>
            <!-- Navigation Bar -->
            <nav id="navmenu" class="navmenu">
                <ul>
                    <div>
                        <a class="btn-getstarted" href="{{ url('/admin/') }}">Back</a>
                    </div>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </header>

    <main class="container portofolio section">
        <!-- Title -->
        <div class="container section-title">
            <h2>Create Project</h2>
        </div>
        <!-- Create Form -->
        <div class="form-card">
            <form id="projectForm" action="/admin/store" method="POST" enctype="multipart/form-data" autocomplete="off"
                novalidate>
                @csrf
                <div class="row g-4">
                    <!-- Title -->
                    <div class="col-md-6">
                        <label class="form-label">Title<span class="required">*</span></label>
                        <input type="text" name="title" value="{{ old('title') }}" class="form-control" required>
                        @error('title')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <!-- Category -->
                    <div class="col-md-6">
                        <label class="form-label">Category<span class="required">*</span></label>
                        <input type="text" name="category" value="{{ old('category') }}" class="form-control"
                            required>
                        @error('category')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <!-- Client -->
                    <div class="col-md-6">
                        <label class="form-label">Client<span class="required">*</span></label>
                        <input type="text" name="client" value="{{ old('client') }}" class="form-control" required>
                        @error('client')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <!-- Location -->
                    <div class="col-md-6">
                        <label class="form-label">Location<span class="required">*</span></label>
                        <input type="text" name="location" value="{{ old('location') }}" class="form-control"
                            required>
                        @error('location')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <!-- Start Date -->
                    <div class="col-md-6">
                        <label class="form-label">Start Date<span class="required">*</span></label>
                        <input type="date" name="start_date" value="{{ old('start_date') }}" class="form-control"
                            required>
                        @error('start_date')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <!-- End Date -->
                    <div class="col-md-6">
                        <label class="form-label">End Date</label>
                        <input type="date" name="end_date" value="{{ old('end_date') }}" class="form-control">
                        @error('end_date')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <!-- Description -->
                    <div class="col-12">
                        <label class="form-label">Description<span class="required">*</span></label>
                        <textarea name="description" rows="4" class="form-control" required>{{ old('description') }}</textarea>
                        @error('description')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <!-- Image -->
                    <div class="col-12">
                        <label class="form-label">Image<span class="required">*</span></label>
                        <input type="file" name="image" class="form-control" accept="image/*" required>
                        @error('image')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                        <!-- Preview Image -->
                        <div class="mt-3">
                            <img id="previewImage" src="" class="img-fluid rounded"
                                style="max-height:200px; display:none;">
                        </div>
                    </div>
                </div>
                <button class="btn btn-submit mt-4">Save Project</button>
            </form>
        </div>
    </main>

    @include('partials.scripts')
</body>
</html>