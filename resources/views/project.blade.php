<!DOCTYPE html>
<html lang="en">
@include('partials.head')
<title>Archiflow - Projects</title>

<body>
    @include('partials.header')
    <main>
        <!-- Projects Section -->
        <section id="portfolio" class="portfolio section">
            <!-- Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Projects</h2>
            </div>

            <!-- Container -->
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="isotope-layout" data-default-filter="*" data-layout="fitRows" data-sort="original-order">
                    <!-- Filter -->
                    <div class="filters-wrapper" data-aos="fade-up" data-aos-delay="100">
                        <ul class="portfolio-filters isotope-filters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-residential">Residential</li>
                            <li data-filter=".filter-commercial">Commercial</li>
                            <li data-filter=".filter-renovation">Renovation</li>
                            <li data-filter=".filter-infrastructure">Infrastructure</li>
                            <li data-filter=".filter-management">Management</li>
                        </ul>
                    </div>
                    
                    <!-- Project Cards -->
                    <div class="row g-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                        @forelse($data as $item)
                            <div
                                class="col-lg-4 col-md-6 portfolio-item isotope-item filter-{{ strtolower(str_replace(' ', '-', $item->category)) }}">
                                <div class="project-card">
                                    <div class="image-wrapper">
                                        <img src="{{ asset('images/' . $item->image) }}" alt="Project showcase"
                                            class="img-fluid" loading="lazy">
                                        <div class="hover-overlay">
                                            <div class="overlay-actions">
                                                <!-- View -->
                                                <a href="{{ asset('images/' . $item->image) }}"
                                                    class="glightbox action-btn" data-gallery="portfolio">
                                                    <i class="bi bi-eye"></i>
                                                </a>
                                                <!-- Project Details -->
                                                <a href="{{ route('project.detail', $item->id) }}" class="action-btn">
                                                    <i class="bi bi-link-45deg"></i>
                                                </a>

                                            </div>
                                        </div>
                                        <!-- Category Badge -->
                                        <span class="category-badge">
                                            {{ $item->category }}
                                        </span>
                                    </div>

                                    <!-- Project Info -->
                                    <div class="project-info">
                                        <!-- Title -->
                                        <h3>{{ $item->title }}</h3>
                                        <!-- Description -->
                                        <p>
                                            {{ \Illuminate\Support\Str::limit($item->description, 80) }}
                                        </p>
                                        <!-- META -->
                                        <div class="project-meta">
                                            <div class="d-flex align-items-center gap-3 flex-wrap small text-muted">
                                                <!-- Location -->
                                                <span class="d-inline-flex align-items-center gap-1 px-3 py-2 rounded-5"
                                                    style="background: #1ea0af; color: white;">
                                                    <i class="bi bi-geo-alt"></i>
                                                    {{ $item->location ?? '-' }}
                                                </span>
                                                @if ($item->end_date)
                                                    <!-- Date (If Finished) -->
                                                    <span class="d-inline-flex align-items-center gap-2">
                                                        <i class="bi bi-calendar3"></i>
                                                        {{ \Carbon\Carbon::parse($item->end_date)->format('d F Y') }}
                                                    </span>
                                                @else
                                                    <!-- Ongoing -->
                                                    <span
                                                        class="d-inline-flex align-items-center gap-1 px-3 py-2 rounded-5"
                                                        style="background: rgba(30, 160, 175, 0.1); color: #1ea0af;">
                                                        <i class="bi bi-hourglass-split"></i>
                                                        Ongoing
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @empty
                        @endforelse
                    </div>
                </div>
            </div>
        </section>
    </main>

    @include('partials.footer')

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    @include('partials.scripts')
</body>
</html>