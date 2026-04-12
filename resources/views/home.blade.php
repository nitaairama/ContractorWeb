<!DOCTYPE html>
<html lang="en">
@include('partials.head')
<title>Archiflow</title>

<body class="index-page">
    @include('partials.header')
    <main class="main">
        <!-- Hero Section -->
        <section id="hero" class="hero section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row align-items-center gy-5">
                    <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
                        <div class="hero-content">
                            <div class="hero-tag" data-aos="fade-up" data-aos-delay="250">
                                <span class="tag-dot"></span>
                                <span class="tag-text">Trusted Construction Partner</span>
                            </div>
                            <h1 class="hero-headline" data-aos="fade-up" data-aos-delay="300">Building Tommorow's
                                Infrastructure Today</h1>
                            <p class="hero-text" data-aos="fade-up" data-aos-delay="350">Blending advanced engineering
                                with sustainable practices to create resilient structures. Transform complex blueprints into
                                iconic landmarks that stand the test of time.
                            </p>
                            <div class="hero-cta" data-aos="fade-up" data-aos-delay="400">
                                <a href="{{ route('project.index') }}" class="cta-button">
                                    <span>Explore Our Projects</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <!-- About Section -->
        <section id="about" class="about section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-5 align-items-center">
                    <!-- Left Side -->
                    <div class="col-xl-6 aos-init aos-animate" data-aos="fade-right" data-aos-delay="200">
                        <div class="about-images-wrapper">
                            <div class="image-main">
                                <img src="assets/img/about/about-5.webp" alt="Business meeting" class="img-fluid">
                            </div>
                            <div class="image-offset">
                                <img src="assets/img/about/about-square-3.webp" alt="Detail shot" class="img-fluid">
                            </div>
                            <div class="experience-badge">
                                <span class="years purecounter" data-purecounter-start="0" data-purecounter-end="10"
                                    data-purecounter-duration="1">10</span>
                                <span class="text">Years of<br>Excellence</span>
                            </div>
                            <div class="shape-pattern"></div>
                        </div>
                    </div>

                    <!-- Right Side -->
                    <div class="col-xl-6 aos-init aos-animate" data-aos="fade-left" data-aos-delay="300">
                        <div class="about-content">
                            <div class="section-subtitle">Who We Are</div>
                            <h2>We Build With Precision, Passion, and Purpose</h2>
                            <p class="lead-text">
                                With over a decade of experience, we specialize in delivering world-class engineering
                                and architectural solutions.
                            </p>
                            <p class="mb-4 description">
                                Our commitment goes beyond structures, we focus on building lasting relationships
                                through transparency and excellence.
                            </p>
                            <!-- Features Grid -->
                            <div class="features-grid">
                                <div class="feature-card">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <span>Fast Delivery</span>
                                </div>
                                <div class="feature-card">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <span>Quality Assured</span>
                                </div>
                                <div class="feature-card">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <span>Expert Team</span>
                                </div>
                                <div class="feature-card">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <span>24/7 Support</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section id="services" class="services section">
            <!-- Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Our Services</h2>
                <p>Delivering top-tier construction solutions tailored to meet modern architectural</p>
            </div>

            <!-- Service Card -->
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row g-4">
                    <!-- Service Card 1 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-card">
                            <div class="icon-wrapper">
                                <i class="fa-solid fa-house"></i>
                            </div>
                            <h3>Residential Building</h3>
                            <p>Crafting high-quality homes designed for comfort, durability, and living standards.</p>
                            <a href="" class="service-link">
                                <span>Discover More</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- Service Card 2 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-card">
                            <div class="icon-wrapper">
                                <i class="fa-solid fa-building"></i>
                            </div>
                            <h3>Commercial Building</h3>
                            <p>Developing functional and iconic business spaces that drive professional success.</p>
                            <a href="" class="service-link">
                                <span>Discover More</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- Service Card 3 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-card">
                            <div class="icon-wrapper">
                                <i class="fa-solid fa-paint-roller"></i>
                            </div>
                            <h3>Renovation & Remodeling</h3>
                            <p>Transforming existing structures with innovative upgrades while maintaining structural integrity.</p>
                            <a href="" class="service-link">
                                <span>Discover More</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- Service Card 4 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-card">
                            <div class="icon-wrapper">
                                <i class="fa-solid fa-road-bridge"></i>
                            </div>
                            <h3>Road & Infrastructure</h3>
                            <p>Building backbone connectivity with precision engineering and sustainable materials.</p>
                            <a href="" class="service-link">
                                <span>Discover More</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- Service Card 5 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-card">
                            <div class="icon-wrapper">
                                <i class="fa-solid fa-clipboard-list"></i>
                            </div>
                            <h3>Project Management</h3>
                            <p>Ensuring seamless execution from planning to handover through expert coordinations.</p>
                            <a href="" class="service-link">
                                <span>Discover More</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- Service Card 6 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-card">
                            <div class="icon-wrapper">
                                <i class="fa-solid fa-pen-ruler"></i>
                            </div>
                            <h3>Architecture & Design</h3>
                            <p>Blending aesthetics and functionality to create visionary blueprints for the bright future.</p>
                            <a href="" class="service-link">
                                <span>Discover More</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Stats Row -->
                <div class="stats-row" data-aos="fade-up" data-aos-delay="400">
                    <div class="row g-4 justify-content-center">
                        <div class="col-6 col-md-3">
                            <div class="stat-item">
                                <span class="stat-number">250+</span>
                                <span class="stat-label">Projects Delivered</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="stat-item">
                                <span class="stat-number">98%</span>
                                <span class="stat-label">Client Satisfaction</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="stat-item">
                                <span class="stat-number">10+</span>
                                <span class="stat-label">Years Experience</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="stat-item">
                                <span class="stat-number">50+</span>
                                <span class="stat-label">Team Experts</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Projects Section -->
        <section id="portfolio" class="portfolio section">
            <!-- Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Projects</h2>
                <p>A showcase of our commitment to excellence, built with precision and modern design</p>
            </div>

            <!-- Container -->
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="isotope-layout" data-default-filter="*" data-layout="fitRows" data-sort="original-order">
                    <!-- Portfolio Items -->
                    <div class="row g-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                        @forelse($data as $item)
                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-{{ strtolower($item->category) }}">
                                <div class="project-card">
                                    <div class="image-wrapper">
                                        <!-- Photo Source -->
                                        <img src="{{ asset('images/' . $item->image) }}" alt="Project showcase" class="img-fluid" loading="lazy">
                                        <div class="hover-overlay">
                                            <div class="overlay-actions">
                                                <!-- View Photo -->
                                                <a href="{{ asset('images/' . $item->image) }}" class="glightbox action-btn" data-gallery="portfolio">
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
                                                <!-- Location Tag -->
                                                <span
                                                    class="d-inline-flex align-items-center gap-1 px-3 py-2 rounded-5"
                                                    style="background: #0ea5e9; color: white;">
                                                    <i class="bi bi-geo-alt"></i>
                                                    {{ $item->location ?? '-' }}
                                                </span>
                                                @if ($item->end_date)
                                                    <!-- Date (If Finished) -->
                                                    <span class="d-inline-flex align-items-center gap-2"">
                                                        <i class="bi bi-calendar3"></i>
                                                        {{ \Carbon\Carbon::parse($item->end_date)->format('d F Y') }}
                                                    </span>
                                                @else
                                                    <!-- Ongoing -->
                                                    <span
                                                        class="d-inline-flex align-items-center gap-1 px-3 py-2 rounded-5"
                                                        style="background: rgba(14,165,233,0.1); color: #0ea5e9;">
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
                            <!-- Empty State -->
                            <div class="col-12 text-center">
                                <p>No projects found</p>
                            </div>
                        @endforelse
                    </div>
                </div>

                <!-- CTA Section -->
                <div class="cta-section" data-aos="zoom-in" data-aos-delay="300">
                    <div class="cta-content">
                        <span class="cta-label"><i class="bi bi-lightning-charge-fill"></i> Ready to Start?</span>
                        <h3>Let's Create Something Amazing Together</h3>
                        <p>Whether you're planning a project, our team is ready to bring your vision to life with precision and excellence.</p>
                        <div class="cta-buttons">
                            <a href="{{ url('/project') }}" class="btn-cta-primary">See All Projects <i class="bi bi-arrow-right"></i></a>
                            <a href="{{ url('/') }}" class="btn-cta-secondary"><i class="bi bi-play-circle"></i> Explore Services</a>
                        </div>
                    </div>
                    <div class="cta-decoration">
                        <div class="floating-shape shape-1"></div>
                        <div class="floating-shape shape-2"></div>
                        <div class="floating-shape shape-3"></div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    @include('partials.footer')

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    @include('partials.scripts')
</body>
</html>