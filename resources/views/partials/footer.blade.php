<!-- Footer -->
<footer id="footer" class="footer light-background">
    <!-- Footer Top -->
    <div class="container footer-top">
        <div class="row gy-4 gx-5">
            <div class="col-lg-3 col-md-6 footer-info">
                <a href="{{ url('/') }}" class="logo d-flex align-items-center mb-4">
                    <span class="sitename">Archiflow</span><span style="color: #1ea0af">.</span>
                </a>
                <p>Transform visions into structural reality.
                </p>
                <div class="social-links d-flex mt-4">
                    <a href="#" aria-label="Twitter"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" aria-label="TikTok"><i class="bi bi-tiktok"></i></a>
                    <a href="#" aria-label="Pinterest"><i class="bi bi-pinterest"></i></a>
                </div>
            </div>
            <!-- Services -->
            <div class="col-lg-2 col-md-6 footer-links">
                <h4>Services</h4>
                <ul>
                    <li><a href="">Residential</a></li>
                    <li><a href="">Commercial</a></li>
                    <li><a href="">Renovation</a></li>
                </ul>
            </div>
            <!-- Customer Service -->
            <div class="col-lg-2 col-md-6 footer-links">
                <h4>Customer Service</h4>
                <ul>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                    <li><a href="">Questions</a></li>
                    <li><a href="">Careers</a></li>
                </ul>
            </div>
            <!-- Company -->
            <div class="col-lg-2 col-md-6 footer-links">
                <h4>Company</h4>
                <ul>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="">Order Guide</a></li>
                    <li><a href="{{ route('project.index') }}">Projects</a></li>
                </ul>
            </div>
            <!-- Newsletter -->
            <div class="col-lg-3 col-md-6">
                <div class="footer-newsletter">
                    <h4>Stay Updated</h4>
                    <p>Subscribe to our newsletter for professional tips and exclusive project previews.</p>
                    <form  method="post" class="php-email-form" autocomplete="off">
                        <div class="position-relative">
                            <input type="email" name="email" placeholder="Your Email">
                            <button  class="btn-subscribe"><i class="bi bi-arrow-right"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="container footer-bottom">
        <div class="row gy-3">
            <div class="col-md-6 order-2 order-md-1">
                <div class="copyright">
                    <p>© <span>Copyright</span> <strong class="sitename">Archiflow</strong><span style="color: #1ea0af">.</span> All Rights Reserved.</p>
                </div>
            </div>
            <div class="col-md-6 order-1 order-md-2">
                <div class="legal-links">
                    <a href="">Terms of Service</a>
                    <a href="">Privacy Policy</a>
                    <a href="">Cookies</a>
                </div>
            </div>
        </div>
    </div>
</footer>
