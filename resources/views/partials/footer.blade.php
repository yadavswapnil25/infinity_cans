  <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <!-- Company Info -->
                <div data-aos="fade-up" data-aos-delay="100">
                    <h3 class="footer-title">Infinity Cans</h3>
                    <p class="mb-4">From Blank to Branded—We've Got You Covered</p>
                    <div class="social-links">
                        <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div data-aos="fade-up" data-aos-delay="200">
                    <h3 class="footer-title">Quick Links</h3>
                    <ul class="footer-links">
                        <li class="footer-link"><a href="{{ url('/') }}">Home</a></li>
                        <li class="footer-link"><a href="{{ url('/about') }}">About Us</a></li>
                        <li class="footer-link"><a href="{{ url('/services') }}">Services</a></li>
                        <li class="footer-link"><a href="{{ url('/gallery') }}">Gallery</a></li>
                        <li class="footer-link"><a href="{{ url('/blogs') }}">Blog</a></li>
                        <li class="footer-link"><a href="{{ url('/contact') }}">Contact Us</a></li>
                    </ul>
                </div>

                <!-- Products -->
                <div data-aos="fade-up" data-aos-delay="300">
                    <h3 class="footer-title">Products</h3>
                    <ul class="footer-links">
                        <li class="footer-link"><a href="#">Aluminium Cans</a></li>
                        <li class="footer-link"><a href="#">Aluminium Bottles</a></li>
                        <li class="footer-link"><a href="#">Custom Printing</a></li>
                        <li class="footer-link"><a href="#">Wholesale Supply</a></li>
                        <li class="footer-link"><a href="#">Accessories</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div data-aos="fade-up" data-aos-delay="400">
                    <h3 class="footer-title">Contact Us</h3>
                    <ul class="footer-links">
                        <li class="contact-item">
                            <i class="fas fa-map-marker-alt contact-icon"></i>
                            <span>123 Business Avenue, Industrial Park, CA 90001</span>
                        </li>
                        <li class="contact-item">
                            <i class="fas fa-phone-alt contact-icon"></i>
                            <span>+1 (555) 123-4567</span>
                        </li>
                        <li class="contact-item">
                            <i class="fas fa-envelope contact-icon"></i>
                            <span>info@infinitycans.com</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Footer -->
            <div class="footer-bottom">
                <p>&copy; {{ now()->year }} Infinity Cans. All rights reserved.</p>
                <div class="footer-bottom-links">
                    <a href="{{ url('/privacy-policy') }}" class="footer-bottom-link">Privacy Policy</a>
                    <a href="{{ url('/terms-and-conditions') }}" class="footer-bottom-link">Terms & Conditions</a>
                    <a href="{{ url('/food-and-safety-policy') }}" class="footer-bottom-link">Food & Safety Policy</a>
                </div>
            </div>
        </div>
    </footer>