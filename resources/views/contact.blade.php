<!DOCTYPE html>
<html lang="en">
@include('partials.head')
<title>Archiflow - Contact</title>

<body>
    @include('partials.header')
    <main>
        <!-- Contact Section -->
        <section id="contact" class="contact section">
            <!-- Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contact Info</h2>
            </div>
            <!-- Container -->
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <!-- Contact Info -->
                <div class="row gy-5 align-items-stretch">
                    <!-- Left Panel -->
                    <div class="col-lg-5" data-aos="fade-right" data-aos-delay="200">
                        <div class="info-panel">
                            <div class="panel-header">
                                <span class="section-badge">
                                    <i class="bi bi-chat-dots-fill"></i>
                                    Get In Touch
                                </span>
                                <h3>Let's Bring Your Vision to Life</h3>
                                <p>
                                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                    consequuntur magni dolores.
                                </p>
                            </div>
                            <!-- Contact Methods -->
                            <div class="contact-methods">
                                <!-- Method Item 1 -->
                                <div class="method-item">
                                    <div class="method-icon">
                                        <i class="bi bi-envelope-paper-fill"></i>
                                    </div>
                                    <div class="method-details">
                                        <span class="method-label">Email Us</span>
                                        <a href="mailto:support@example.com">support@example.com</a>
                                    </div>
                                </div>
                                <!-- Method Item 2 -->
                                <div class="method-item">
                                    <div class="method-icon">
                                        <i class="bi bi-headset"></i>
                                    </div>
                                    <div class="method-details">
                                        <span class="method-label">Call Us</span>
                                        <a href="tel:+15558901234">+1 (555) 890-1234</a>
                                    </div>
                                </div>
                                <!-- Method Item 3 -->
                                <div class="method-item">
                                    <div class="method-icon">
                                        <i class="bi bi-pin-map-fill"></i>
                                    </div>
                                    <div class="method-details">
                                        <span class="method-label">Visit Us</span>
                                        <span>1847 Oak Avenue, Portland, OR 97201</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Stats Strip -->
                            <div class="stats-strip">
                                <div class="stat-item">
                                    <span class="stat-number">98%</span>
                                    <span class="stat-text">Satisfaction</span>
                                </div>
                                <div class="stat-item">
                                    <span class="stat-number">24/7</span>
                                    <span class="stat-text">Support</span>
                                </div>
                                <div class="stat-item">
                                    <span class="stat-number">3.2k</span>
                                    <span class="stat-text">Projects</span>
                                </div>
                            </div>

                            <!-- Social Connect -->
                            <div class="social-connect">
                                <span>Follow Us</span>
                                <div class="social-icons">
                                    <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                                    <a href="#" aria-label="Twitter"><i class="bi bi-twitter-x"></i></a>
                                    <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                                    <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Panel -->
                    <div class="col-lg-7" data-aos="fade-left" data-aos-delay="300">
                        <div class="form-card">
                            <div class="form-card-header">
                                <div class="header-icon">
                                    <i class="bi bi-send-fill"></i>
                                </div>
                                <div class="header-text">
                                    <h4>Send Us a Message</h4>
                                    <p>Fill out the form and our team will respond within 24 hours.</p>
                                </div>
                            </div>
                            <!-- Message Form -->
                            <form method="post" class="php-email-form" autocomplete="off">
                                <div class="row g-4">
                                    <!-- Name -->
                                    <div class="col-md-6">
                                        <div class="input-group-custom">
                                            <label>Your Name</label>
                                            <div class="input-wrapper">
                                                <i class="bi bi-person"></i>
                                                <input type="text" name="name" placeholder="John Doe">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Email -->
                                    <div class="col-md-6">
                                        <div class="input-group-custom">
                                            <label>Email Address</label>
                                            <div class="input-wrapper">
                                                <i class="bi bi-envelope"></i>
                                                <input type="email" name="email" placeholder="john@example.com">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Subject -->
                                    <div class="col-12">
                                        <div class="input-group-custom">
                                            <label>Subject</label>
                                            <div class="input-wrapper">
                                                <i class="bi bi-chat-square-text"></i>
                                                <input type="text" name="subject" placeholder="How can we help?">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Message -->
                                    <div class="col-12">
                                        <div class="input-group-custom">
                                            <label>Your Message</label>
                                            <div class="input-wrapper textarea-wrapper">
                                                <i class="bi bi-pencil-square"></i>
                                                <textarea name="message" rows="5" placeholder="Tell us about your project..."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Form Actions -->
                                <div class="form-actions">
                                    <!-- Button -->
                                    <button class="btn-submit">
                                        <span>Send Message</span>
                                        <i class="bi bi-arrow-right-circle-fill"></i>
                                    </button>
                                    <!-- Secure Note -->
                                    <div class="secure-note">
                                        <i class="bi bi-lock-fill"></i>
                                        <span>Your data is encrypted and secure</span>
                                    </div>
                                </div>
                            </form>
                        </div>
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