@extends('layouts.app1')
@section('title', 'Infinity Cans | Digital Printing for Aluminum Cans & Bottles')
@section('meta_description', "Infinity Cans offers premium digital printing services for aluminum cans and bottles.")
@section('content')

    <!-- Custom Cursor -->
    <div class="cursor"></div>
    <div class="cursor-follower"></div>



    <!-- Hero Section -->
    <section class="infinity-hero-section" data-theme="0">
        <div class="infinity-hero-bg"></div>

        <!-- Top Right Feature Badges -->
        <div class="infinity-hero-badges">
            <!-- <div class="infinity-badge" data-theme="0">
                <i class="fas fa-wine-bottle"></i>
                <span>330ml cans</span>
            </div>
            <div class="infinity-badge" data-theme="0">
                <i class="fas fa-certificate"></i>
                <span>BPANI</span>
            </div>
            <div class="infinity-badge" data-theme="0">
                <i class="fas fa-circle"></i>
                <span>Full matte</span>
            </div> -->
        </div>

        <div class="infinity-hero-container">
            <!-- Left Content -->
            <div class="infinity-hero-content">
                <div class="infinity-hero-text ">
                    <p class="infinity-hero-tagline">From Blank to Branded — We've Got You Covered</p>
                    <h1 class="infinity-hero-title">
                        <span class="infinity-title-line">MAKE EVERY CAN
                        </span>
                        <span class="infinity-title-line">UNFORGETTABLE</span>
                    </h1>


                    <p class="infinity-hero-below">We Transform Blank Cans Into Powerful Brand Stories Your product
                        deserves more than a label. At Infinity Cans, we digitally print directly on aluminum cans and
                        bottles—making your brand impossible to ignore on shelves or in hands</p>
                    <div class="infinity-hero-cta">
                        <a href="#services" class="infinity-cta-btn">
                            Learn More
                        </a>
                    </div>
                </div>

                <!-- Feature Points -->
                <!-- <div class="infinity-feature-points">
                    <div class="infinity-feature-item">
                        <div class="infinity-feature-icon">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <span>High quality beverage cans with no minimum order quantity</span>
                    </div>
                    
                    <div class="infinity-feature-item">
                        <div class="infinity-feature-icon">
                            <i class="fas fa-palette"></i>
                        </div>
                        <span>High quality and flexible solutions for your can design</span>
                    </div>
                    
                    <div class="infinity-feature-item">
                        <div class="infinity-feature-icon">
                            <i class="fas fa-cog"></i>
                        </div>
                        <span>Easy process for can customization</span>
                    </div>
                </div> -->


            </div>

            <!-- Right Visual Content -->
            <div class="infinity-hero-visual">
                <!-- Theme 1: Red Background -->
                <div class="infinity-theme-container active" data-theme="0">
                    <div class="infinity-product-group">
                        <img src="./assets/g3.jpg" alt="Premium Red Can" class="infinity-can single-can" />
                    </div>
                </div>

                <!-- Theme 2: Blue Background -->
                <div class="infinity-theme-container" data-theme="1">
                    <div class="infinity-product-group">
                        <img src="./assets/prod1.jpeg" alt="Premium Blue Can" class="infinity-can single-can" />
                    </div>
                </div>

                <!-- Theme 3: Orange Background -->
                <div class="infinity-theme-container" data-theme="2">
                    <div class="infinity-product-group">
                        <img src="./assets/miss2.jpg" alt="Premium Orange Can" class="infinity-can single-can" />
                    </div>
                </div>

                <!-- Theme 4: Green Background -->
                <div class="infinity-theme-container" data-theme="3">
                    <div class="infinity-product-group">
                        <img src="./assets/g5.jpg" alt="Premium White Can" class="infinity-can single-can" />
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Services Section -->
    <section id="services" class="section section-light">
        <div class="container">
            <div data-aos="fade-up" data-aos-duration="800">
                <h2 class="section-title split-text-center">Our Premium Services</h2>
                <p class="section-subtitle">Delivering exceptional quality and innovative solutions for all your
                    aluminium packaging needs.</p>
            </div>

            <div class="services-grid">
                <!-- Service 1 -->
                <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                    <img src="./assets/digitalprint.jpg"
                        alt="Digital Printing" class="service-image">
                    <div class="service-content">
                        <h3 class="service-title">Digital Can Printing</h3>
                        <p class="service-text">High-resolution, full-color digital printing directly on aluminium cans
                            with no minimum order quantities.</p>
                        <a href="#" class="service-link">
                            Learn More <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                    <img src="https://i.ytimg.com/vi/_XO7isCfXBY/hq720.jpg?sqp=-oaymwE7CK4FEIIDSFryq4qpAy0IARUAAAAAGAElAADIQj0AgKJD8AEB-AHUBoAC4AOKAgwIABABGGYgZihmMA8=&rs=AOn4CLDEt6VaXSPwvZStwYvI6Lki0TFIHA">
                    <div class="service-content">
                        <h3 class="service-title">Aluminium Bottle Printing</h3>
                        <p class="service-text">Custom designs printed on premium aluminium bottles, perfect for
                            spirits, beverages, and specialty drinks.</p>
                        <a href="#" class="service-link">
                            Learn More <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="service-card" data-aos="fade-up" data-aos-delay="300">
                    <img src="https://image.made-in-china.com/318f0j00cTEUIrqtUlYQ/4-mp4.webp"
                        alt="Wholesale Supply" class="service-image">
                    <div class="service-content">
                        <h3 class="service-title">Wholesale Supply</h3>
                        <p class="service-text">Bulk orders of blank aluminium cans, bottles, and lids for businesses of
                            all sizes.</p>
                        <a href="#" class="service-link">
                            Learn More <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="section">
        <div class="container">
            <div data-aos="fade-up">
                <h2 class="section-title split-text-center">Why Choose Infinity Cans?</h2>
                <p class="section-subtitle reveal-on-scroll">We combine cutting-edge technology with exceptional service
                    to deliver premium packaging solutions.</p>
            </div>

            <div class="features-grid">
                <!-- Feature 1 -->
                <div class="feature-item" data-aos="zoom-in" data-aos-delay="100">
                    <div class="feature-icon">
                        <i class="fas fa-leaf text-3xl"></i>
                    </div>
                    <h3 class="feature-title">Eco-Friendly</h3>
                    <p class="feature-text">No more plastic. Our aluminium packaging is 100% recyclable and
                        environmentally responsible.</p>
                </div>

                <!-- Feature 2 -->
                <div class="feature-item" data-aos="zoom-in" data-aos-delay="200">
                    <div class="feature-icon">
                        <i class="fas fa-palette text-3xl"></i>
                    </div>
                    <h3 class="feature-title">Design Flexibility</h3>
                    <p class="feature-text">Unlimited colors, textures, and finishes to make your brand stand out.</p>
                </div>

                <!-- Feature 3 -->
                <div class="feature-item" data-aos="zoom-in" data-aos-delay="300">
                    <div class="feature-icon">
                        <i class="fas fa-bolt text-3xl"></i>
                    </div>
                    <h3 class="feature-title">Quick Turnaround</h3>
                    <p class="feature-text">Fast production times to get your products to market quickly.</p>
                </div>

                <!-- Feature 4 -->
                <div class="feature-item" data-aos="zoom-in" data-aos-delay="400">
                    <div class="feature-icon">
                        <i class="fas fa-chart-line text-3xl"></i>
                    </div>
                    <h3 class="feature-title">Low Minimums</h3>
                    <p class="feature-text">Perfect for limited editions, seasonal releases, and market testing.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Aluminium Section -->
    <section class="section section-light">
        <div class="container">
            <div class="split-section">
                <div class="split-image" data-aos="fade-right">
                    <img src="./assets/al-cans.jpg"
                        alt="Aluminium Cans" class="parallax" data-speed="0.2">
                </div>
                <div class="split-content" data-aos="fade-left">
                    <h2 class="section-title split-text" >Why Aluminium?</h2>
                    <p class="text-lg reveal-on-scroll">No more plastic. Aluminium is the sustainable choice for modern
                        brands that care about their environmental impact.</p>

                    <ul class="benefit-list">
                        <li class="benefit-item" data-aos="fade-up" data-aos-delay="100">
                            <i class="fas fa-check-circle benefit-icon"></i>
                            <div>
                                <h4 class="benefit-title">100% Recyclable</h4>
                                <p class="benefit-text">Aluminium can be recycled indefinitely without losing quality.
                                </p>
                            </div>
                        </li>
                        <li class="benefit-item" data-aos="fade-up" data-aos-delay="200">
                            <i class="fas fa-check-circle benefit-icon"></i>
                            <div>
                                <h4 class="benefit-title">Superior Protection</h4>
                                <p class="benefit-text">Provides excellent barrier properties against light, oxygen, and
                                    moisture.</p>
                            </div>
                        </li>
                        <li class="benefit-item" data-aos="fade-up" data-aos-delay="300">
                            <i class="fas fa-check-circle benefit-icon"></i>
                            <div>
                                <h4 class="benefit-title">Lightweight & Durable</h4>
                                <p class="benefit-text">Reduces shipping costs while maintaining product integrity.</p>
                            </div>
                        </li>
                        <li class="benefit-item" data-aos="fade-up" data-aos-delay="400">
                            <i class="fas fa-check-circle benefit-icon"></i>
                            <div>
                                <h4 class="benefit-title">Premium Appearance</h4>
                                <p class="benefit-text">Creates a high-end look and feel for your products.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Industries We Serve -->
 <section class="section">
        <div class="container">
            <div data-aos="fade-up">
                <h2 class="section-title split-text-center">Industries We Serve</h2>
                <p class="section-subtitle reveal-on-scroll">Tailored premium packaging solutions that elevate brands
                    across diverse business sectors</p>
            </div>

            <div class="industries-grid">
                <!-- Industry 1 -->
                <div class="industry-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="industry-icon">
                        <i class="fas fa-wine-bottle"></i>
                    </div>
                    <h3 class="industry-title">Spirits & Wines</h3>
                    <p class="industry-text">Elevate your brand with premium aluminium packaging that conveys luxury and
                        quality for spirits and fine wines.</p>
                    <a href="#" class="industry-link">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>

                <!-- Industry 2 -->
                <div class="industry-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="industry-icon">
                        <i class="fas fa-beer"></i>
                    </div>
                    <h3 class="industry-title">Craft Beverages</h3>
                    <p class="industry-text">Stand out on crowded shelves with eye-catching designs that tell your craft
                        beverage's unique story.</p>
                    <a href="#" class="industry-link">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>

                <!-- Industry 3 -->
                <div class="industry-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="industry-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3 class="industry-title">Energy Drinks</h3>
                    <p class="industry-text">Create dynamic packaging with vibrant designs and premium finishes that
                        match the energy of your product.</p>
                    <a href="#" class="industry-link">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>

                <!-- Industry 4 -->
                <div class="industry-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="industry-icon">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <h3 class="industry-title">Food & Specialty</h3>
                    <p class="industry-text">Innovative, food-safe packaging solutions for specialty products that
                        preserve freshness and enhance shelf appeal.</p>
                    <a href="#" class="industry-link">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>


    <!-- CTA Section -->
    <section id="contact" class="cta-section">
        <div class="container">
            <div class="cta-content" data-aos="zoom-in">
                <h2 class="cta-title split-text">Ready to Transform Your </h2>
                <h2 class="cta-title split-text">Packaging?</h2>
                <p class="cta-text reveal-on-scroll">From concept to completion, we'll help you create packaging that
                    tells your brand's story.</p>
                <div class="btn-group">
                    <a href="#" class="btn btn-outline">Contact Us</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
  

    <!-- Lightbox for Gallery -->
    <div id="lightbox" class="lightbox">
        <span class="close-lightbox" onclick="closeLightbox()">&times;</span>
        <img id="lightbox-img" class="lightbox-content">
        <div id="lightbox-caption" class="lightbox-caption"></div>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>

    <!-- Custom JavaScript -->
    <script src="index.js"></script>
@endsection
