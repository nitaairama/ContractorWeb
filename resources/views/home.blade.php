<!DOCTYPE html>
<html lang="en">
@include('partials.head')
<title>Orbit - Homepage</title>

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
                                <span class="tag-text">Premium Digital Solutions</span>
                            </div>
                            <h1 class="hero-headline" data-aos="fade-up" data-aos-delay="300">Crafting Exceptional
                                Digital Experiences</h1>
                            <p class="hero-text" data-aos="fade-up" data-aos-delay="350">Pellentesque habitant morbi
                                tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor
                                quam, feugiat vitae ultricies eget.</p>
                            <div class="hero-cta" data-aos="fade-up" data-aos-delay="400">
                                <a href="#services" class="cta-button">
                                    <span>Explore Services</span>
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
                            <h2>Innovating for Your Success Through Technology</h2>
                            <p class="lead-text">
                                Voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                                inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                            </p>
                            <p class="mb-4 description">
                                Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro
                                quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci.
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
            <div class="container section-title" data-aos="fade-up">
                <h2>Services</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div>

            <!-- Service Card -->
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row g-4">
                    <!-- Service Card 1 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-card">
                            <div class="icon-wrapper">
                                <i class="bi bi-lightbulb"></i>
                            </div>
                            <h3>Strategic Consulting</h3>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                egestas.</p>
                            <a href="service-details.html" class="service-link">
                                <span>Discover More</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- Service Card 2 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-card">
                            <div class="icon-wrapper">
                                <i class="bi bi-graph-up-arrow"></i>
                            </div>
                            <h3>Growth Analytics</h3>
                            <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae.
                            </p>
                            <a href="service-details.html" class="service-link">
                                <span>Discover More</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- Service Card 3 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-card">
                            <div class="icon-wrapper">
                                <i class="bi bi-palette"></i>
                            </div>
                            <h3>Creative Design</h3>
                            <p>Praesent commodo cursus magna vel scelerisque nisl consectetur et vivamus sagittis.</p>
                            <a href="service-details.html" class="service-link">
                                <span>Discover More</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- Service Card 4 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-card">
                            <div class="icon-wrapper">
                                <i class="bi bi-code-slash"></i>
                            </div>
                            <h3>Web Development</h3>
                            <p>Cras mattis consectetur purus sit amet fermentum aenean lacinia bibendum nulla sed.</p>
                            <a href="service-details.html" class="service-link">
                                <span>Discover More</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- Service Card 5 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-card">
                            <div class="icon-wrapper">
                                <i class="bi bi-megaphone"></i>
                            </div>
                            <h3>Digital Marketing</h3>
                            <p>Donec ullamcorper nulla non metus auctor fringilla vestibulum id ligula porta felis.</p>
                            <a href="service-details.html" class="service-link">
                                <span>Discover More</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- Service Card 6 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-card">
                            <div class="icon-wrapper">
                                <i class="bi bi-shield-check"></i>
                            </div>
                            <h3>Security Solutions</h3>
                            <p>Maecenas sed diam eget risus varius blandit sit amet non magna integer posuere erat.</p>
                            <a href="service-details.html" class="service-link">
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
                                <span class="stat-number">15+</span>
                                <span class="stat-label">Years Experience</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="stat-item">
                                <span class="stat-number">40+</span>
                                <span class="stat-label">Team Experts</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Projects Section -->
        <section id="portfolio" class="portfolio section">
            <div class="container section-title" data-aos="fade-up">
                <h2>Projects</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div>

            <!-- Container -->
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="isotope-layout" data-default-filter="*" data-layout="fitRows"
                    data-sort="original-order">
                    <!-- Portfolio Items -->
                    <div class="row g-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                        <!-- Item 1 -->
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-web">
                            <div class="project-card">
                                <div class="image-wrapper">
                                    <img src="assets/img/portfolio/portfolio-2.webp" alt="Project showcase"
                                        class="img-fluid" loading="lazy">
                                    <div class="hover-overlay">
                                        <div class="overlay-actions">
                                            <a href="assets/img/portfolio/portfolio-2.webp"
                                                class="glightbox action-btn" data-gallery="portfolio">
                                                <i class="bi bi-eye"></i>
                                            </a>
                                            <a href="#" class="action-btn">
                                                <i class="bi bi-link-45deg"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <span class="category-badge">Web Design</span>
                                </div>
                                <div class="project-info">
                                    <h3>Corporate Dashboard System</h3>
                                    <p>Pellentesque habitant morbi tristique senectus et netus.</p>
                                    <div class="project-meta">
                                        <div class="tech-tags">
                                            <span>Angular</span>
                                            <span>Python</span>
                                        </div>
                                        <span class="year">2024</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Item 2 -->
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-mobile">
                            <div class="project-card">
                                <div class="image-wrapper">
                                    <img src="assets/img/portfolio/portfolio-4.webp" alt="Project showcase"
                                        class="img-fluid" loading="lazy">
                                    <div class="hover-overlay">
                                        <div class="overlay-actions">
                                            <a href="assets/img/portfolio/portfolio-4.webp"
                                                class="glightbox action-btn" data-gallery="portfolio">
                                                <i class="bi bi-eye"></i>
                                            </a>
                                            <a href="#" class="action-btn">
                                                <i class="bi bi-link-45deg"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <span class="category-badge">Mobile Apps</span>
                                </div>
                                <div class="project-info">
                                    <h3>Smart Finance Application</h3>
                                    <p>Maecenas tempus tellus eget condimentum rhoncus.</p>
                                    <div class="project-meta">
                                        <div class="tech-tags">
                                            <span>Swift</span>
                                            <span>Kotlin</span>
                                        </div>
                                        <span class="year">2024</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Item 3 -->
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                            <div class="project-card">
                                <div class="image-wrapper">
                                    <img src="assets/img/portfolio/portfolio-6.webp" alt="Project showcase"
                                        class="img-fluid" loading="lazy">
                                    <div class="hover-overlay">
                                        <div class="overlay-actions">
                                            <a href="assets/img/portfolio/portfolio-6.webp"
                                                class="glightbox action-btn" data-gallery="portfolio">
                                                <i class="bi bi-eye"></i>
                                            </a>
                                            <a href="#" class="action-btn">
                                                <i class="bi bi-link-45deg"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <span class="category-badge">Branding</span>
                                </div>
                                <div class="project-info">
                                    <h3>Fashion Label Identity</h3>
                                    <p>Donec quam felis ultricies nec pellentesque pretium.</p>
                                    <div class="project-meta">
                                        <div class="tech-tags">
                                            <span>Photoshop</span>
                                            <span>Illustrator</span>
                                        </div>
                                        <span class="year">2023</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CTA Section -->
                <div class="cta-section" data-aos="zoom-in" data-aos-delay="300">
                    <div class="cta-content">
                        <span class="cta-label"><i class="bi bi-lightning-charge-fill"></i> Ready to Start?</span>
                        <h3>Let's Create Something Amazing Together</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium totam rem aperiam.</p>
                        <div class="cta-buttons">
                            <a href="{{ url('/project') }}" class="btn-cta-primary">See All Projects <i
                                    class="bi bi-arrow-right"></i></a>
                            <a href="#services" class="btn-cta-secondary"><i class="bi bi-play-circle"></i> Explore
                                Services</a>
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

        @include('partials.footer')
    </main>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    @include('partials.scripts')
</body>

</html>
