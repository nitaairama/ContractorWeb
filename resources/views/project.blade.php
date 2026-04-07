<!DOCTYPE html>
<html lang="en">
@include('partials.head')
<title>Orbit - Projects</title>

<body>
    @include('partials.header')
    <main>
        <!-- Projects Section -->
        <section id="portfolio" class="portfolio section">
            <div class="container section-title" data-aos="fade-up">
                <h2>Projects</h2>
            </div>

            <!-- Container -->
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="isotope-layout" data-default-filter="*" data-layout="fitRows" data-sort="original-order">
                    <!-- Filter -->
                    <div class="filters-wrapper" data-aos="fade-up" data-aos-delay="100">
                        <ul class="portfolio-filters isotope-filters">
                            <li data-filter="*" class="filter-active">All Projects</li>
                            <li data-filter=".filter-web">Web Design</li>
                            <li data-filter=".filter-mobile">Mobile Apps</li>
                            <li data-filter=".filter-branding">Branding</li>
                            <li data-filter=".filter-ui">UI/UX</li>
                        </ul>
                    </div>
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
                                            <a href="assets/img/portfolio/portfolio-2.webp" class="glightbox action-btn"
                                                data-gallery="portfolio">
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
                                            <a href="assets/img/portfolio/portfolio-4.webp" class="glightbox action-btn"
                                                data-gallery="portfolio">
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
                                            <a href="assets/img/portfolio/portfolio-6.webp" class="glightbox action-btn"
                                                data-gallery="portfolio">
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
                        <!-- Item 4 -->
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-ui">
                            <div class="project-card">
                                <div class="image-wrapper">
                                    <img src="assets/img/portfolio/portfolio-8.webp" alt="Project showcase"
                                        class="img-fluid" loading="lazy">
                                    <div class="hover-overlay">
                                        <div class="overlay-actions">
                                            <a href="assets/img/portfolio/portfolio-8.webp" class="glightbox action-btn"
                                                data-gallery="portfolio">
                                                <i class="bi bi-eye"></i>
                                            </a>
                                            <a href="#" class="action-btn">
                                                <i class="bi bi-link-45deg"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <span class="category-badge">UI/UX</span>
                                </div>
                                <div class="project-info">
                                    <h3>E-Learning Platform Design</h3>
                                    <p>Aenean leo ligula porttitor eu consequat vitae.</p>
                                    <div class="project-meta">
                                        <div class="tech-tags">
                                            <span>Figma</span>
                                            <span>Principle</span>
                                        </div>
                                        <span class="year">2024</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Item 5 -->
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-web">
                            <div class="project-card">
                                <div class="image-wrapper">
                                    <img src="assets/img/portfolio/portfolio-1.webp" alt="Project showcase"
                                        class="img-fluid" loading="lazy">
                                    <div class="hover-overlay">
                                        <div class="overlay-actions">
                                            <a href="assets/img/portfolio/portfolio-1.webp"
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
                                    <h3>Social Media Platform</h3>
                                    <p>Vivamus elementum semper nisi quisque rutrum.</p>
                                    <div class="project-meta">
                                        <div class="tech-tags">
                                            <span>React</span>
                                            <span>MongoDB</span>
                                        </div>
                                        <span class="year">2023</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Item 6 -->
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-mobile">
                            <div class="project-card">
                                <div class="image-wrapper">
                                    <img src="assets/img/portfolio/portfolio-3.webp" alt="Project showcase"
                                        class="img-fluid" loading="lazy">
                                    <div class="hover-overlay">
                                        <div class="overlay-actions">
                                            <a href="assets/img/portfolio/portfolio-3.webp"
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
                                    <h3>Health Monitoring App</h3>
                                    <p>Nullam quis ante etiam sit amet orci eget.</p>
                                    <div class="project-meta">
                                        <div class="tech-tags">
                                            <span>Flutter</span>
                                            <span>AWS</span>
                                        </div>
                                        <span class="year">2024</span>
                                    </div>
                                </div>
                            </div>
                        </div>
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
