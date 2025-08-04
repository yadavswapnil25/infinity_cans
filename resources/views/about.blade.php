@extends('layouts.app1')
@section('title', 'Infinity Cans | Digital Printing for Aluminum Cans & Bottles')
@section('meta_description', "Infinity Cans offers premium digital printing services for aluminum cans and bottles.")
@section('content')

<section class="about-hero-section">

    <div class="about-hero-bg"></div>
    <div class="about-hero-overlay"></div>
    <div class="container">
        <div class="about-hero-content">
            <div class="about-hero-text" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                <h1 class="about-main-title">
                    <span class="about-title-line">About</span>
                    <span class="about-title-highlight">Infinity Cans</span>
                </h1>
                <div class="about-subtitle-wrapper">
                    <h2 class="about-hero-subtitle">Crafting a Sustainable Future in Aluminum Packaging</h2>
                    <p class="about-hero-description">Leading the revolution in eco-friendly packaging with cutting-edge
                        digital printing on aluminum cans and bottles. Our state-of-the-art facility combines
                        innovation with sustainability to deliver premium packaging solutions.</p>
                </div>
                <div class="about-hero-highlights">
                    <div class="about-highlight-item" data-aos="fade-up" data-aos-delay="400">
                        <i class="fas fa-recycle"></i>
                        <span>100% Recyclable Aluminum</span>
                    </div>
                    <div class="about-highlight-item" data-aos="fade-up" data-aos-delay="500">
                        <i class="fas fa-industry"></i>
                        <span>Advanced Manufacturing</span>
                    </div>
                    <div class="about-highlight-item" data-aos="fade-up" data-aos-delay="600">
                        <i class="fas fa-paint-brush"></i>
                        <span>Custom Digital Printing</span>
                    </div>
                </div>
            </div>
            <div class="about-hero-visual" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="300">
                <div class="about-hero-image">
                    <img src="./assets/about.png"
                        alt="Premium Aluminum Cans Production">
                </div>
                <div class="about-floating-elements">
                    <div class="about-float-item about-float-1">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <div class="about-float-item about-float-2">
                        <i class="fas fa-recycle"></i>
                    </div>
                    <div class="about-float-item about-float-3">
                        <i class="fas fa-industry"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission Section -->
<section class="about-mission-section">
    <div class="container">
        <div class="about-mission-grid">
            <div class="about-mission-images" data-aos="fade-right" data-aos-duration="800">
                <div class="about-image-stack">
                    <div class="about-image-primary" data-aos="fade-down-right" data-aos-delay="200">
                        <img src="/assets/miss1.jpg"
                            alt="Aluminum Can Production">
                    </div>
                    <div class="about-image-secondary" data-aos="fade-up-left" data-aos-delay="400">
                        <img src="/assets/miss2.jpg"
                            alt="Digital Printing Process">
                    </div>
                </div>
            </div>
            <div class="about-mission-content" data-aos="fade-left" data-aos-duration="800">
                <h2 class="about-section-title">Our Mission</h2>
                <div class="about-mission-text-wrapper">
                    <p class="about-mission-text">At Infinity Cans, we're revolutionizing the beverage packaging industry
                        through sustainable innovation. Our mission is to eliminate plastic waste by providing
                        premium, digitally printed aluminum packaging solutions that are both environmentally
                        responsible and visually stunning.</p>
                    <div class="about-mission-quote">
                        <blockquote>"From Blank to Branded—We've Got You Covered, Sustainably"</blockquote>
                    </div>
                </div>
                <div class="about-stats-grid">
                    <div class="about-stat-item" data-aos="fade-up" data-aos-delay="200">
                        <div class="about-stat-icon"><i class="fas fa-sync-alt"></i></div>
                        <span class="about-stat-number counter" data-target="95">0</span>
                        <span class="about-stat-label">% Recycling Rate</span>
                    </div>
                    <div class="about-stat-item" data-aos="fade-up" data-aos-delay="300">
                        <div class="about-stat-icon"><i class="fas fa-clock"></i></div>
                        <span class="about-stat-number counter" data-target="60">0</span>
                        <span class="about-stat-label">Days Recycling Time</span>
                    </div>
                    <div class="about-stat-item" data-aos="fade-up" data-aos-delay="400">
                        <div class="about-stat-icon"><i class="fas fa-infinity"></i></div>
                        <span class="about-stat-number counter" data-target="100">0</span>
                        <span class="about-stat-label">% Recyclable</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Story Timeline Section -->
<section class="about-timeline-section">
    <div class="container">
        <h2 class="about-section-title about-center">Our Story</h2>
        <div class="about-timeline">
            <div class="about-timeline-item" data-aos="fade-right">
                <div class="about-timeline-content">
                    <span class="about-timeline-year">2018</span>
                    <h3 class="about-timeline-title">Digital Innovation Begins</h3>
                    <p class="about-timeline-text">Pioneered advanced digital printing technology specifically designed for aluminum cans,
                        setting new standards in beverage packaging customization.</p>
                    <div class="about-timeline-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                </div>
            </div>
            <div class="about-timeline-item" data-aos="fade-left">
                <div class="about-timeline-content">
                    <span class="about-timeline-year">2019</span>
                    <h3 class="about-timeline-title">Eco-Tech Revolution</h3>
                    <p class="about-timeline-text">Launched our proprietary eco-friendly printing process that reduces waste by 90% compared to
                        traditional methods while maintaining premium quality.</p>
                    <div class="about-timeline-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                </div>
            </div>
            <div class="about-timeline-item" data-aos="fade-right">
                <div class="about-timeline-content">
                    <span class="about-timeline-year">2020</span>
                    <h3 class="about-timeline-title">Aluminum Innovation</h3>
                    <p class="about-timeline-text">Expanded into aluminum bottle printing with our revolutionary 360° seamless printing
                        technology, perfect for premium beverages and specialty drinks.</p>
                    <div class="about-timeline-icon">
                        <i class="fas fa-wine-bottle"></i>
                    </div>
                </div>
            </div>
            <div class="about-timeline-item" data-aos="fade-left">
                <div class="about-timeline-content">
                    <span class="about-timeline-year">2023</span>
                    <h3 class="about-timeline-title">Sustainable Scale</h3>
                    <p class="about-timeline-text">Achieved nationwide coverage with our state-of-the-art facilities, processing over 1 million
                        sustainable aluminum packages monthly.</p>
                    <div class="about-timeline-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="about-values-section">
    <div class="container">
        <h2 class="about-section-title about-center">Our Core Values</h2>
        <div class="about-values-grid">
            <div class="about-value-card" data-aos="fade-up" data-aos-delay="100">
                <div class="about-value-icon">
                    <i class="fas fa-leaf"></i>
                </div>
                <h3 class="about-value-title">Sustainability</h3>
                <p class="about-value-text">Leading the industry in eco-friendly aluminum packaging with 100% recyclable materials and
                    zero-waste processes.</p>
            </div>
            <div class="about-value-card" data-aos="fade-up" data-aos-delay="200">
                <div class="about-value-icon">
                    <i class="fas fa-lightbulb"></i>
                </div>
                <h3 class="about-value-title">Innovation</h3>
                <p class="about-value-text">Pioneering advanced digital printing technologies for aluminum cans and bottles with
                    industry-leading precision.</p>
            </div>
            <div class="about-value-card" data-aos="fade-up" data-aos-delay="300">
                <div class="about-value-icon">
                    <i class="fas fa-handshake"></i>
                </div>
                <h3 class="about-value-title">Partnership</h3>
                <p class="about-value-text">Collaborating closely with beverage brands to create custom aluminum packaging solutions that
                    exceed expectations.</p>
            </div>
            <div class="about-value-card" data-aos="fade-up" data-aos-delay="400">
                <div class="about-value-icon">
                    <i class="fas fa-award"></i>
                </div>
                <h3 class="about-value-title">Excellence</h3>
                <p class="about-value-text">Maintaining the highest standards in aluminum can production with rigorous quality control and
                    food-grade certification.</p>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="about-team-section">
    <div class="container">
        <h2 class="about-section-title about-center">Meet Our Leadership</h2>
        <div class="about-team-grid">
            <div class="about-team-member" data-aos="fade-up" data-aos-delay="100">
                <div class="about-member-image">
                    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2344&q=80"
                        alt="CEO">
                </div>
                <div class="about-member-info">
                    <h3 class="about-member-name">John Anderson</h3>
                    <span class="about-member-position">CEO & Founder</span>
                    <p class="about-member-bio">Pioneer in aluminum packaging with 20+ years of experience in sustainable manufacturing
                        innovation.</p>
                    <div class="about-member-social">
                        <a href="#" class="about-social-link"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="about-social-link"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
            <div class="about-team-member" data-aos="fade-up" data-aos-delay="200">
                <div class="about-member-image">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2338&q=80"
                        alt="CTO">
                </div>
                <div class="about-member-info">
                    <h3 class="about-member-name">Sarah Chen</h3>
                    <span class="about-member-position">Chief Technology Officer</span>
                    <p class="about-member-bio">Digital printing innovator with expertise in precision aluminum can decoration technologies.
                    </p>
                    <div class="about-member-social">
                        <a href="#" class="about-social-link"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="about-social-link"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
            <div class="about-team-member" data-aos="fade-up" data-aos-delay="300">
                <div class="about-member-image">
                    <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2340&q=80"
                        alt="COO">
                </div>
                <div class="about-member-info">
                    <h3 class="about-member-name">Michael Roberts</h3>
                    <span class="about-member-position">Chief Operations Officer</span>
                    <p class="about-member-bio">Manufacturing expert specializing in high-volume aluminum can production and quality
                        assurance.</p>
                    <div class="about-member-social">
                        <a href="#" class="about-social-link"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="about-social-link"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sustainability Impact Section -->
<section class="about-impact-section">
    <div class="container">
        <div class="about-impact-content" data-aos="fade-up">
            <h2 class="about-section-title about-center">Our Environmental Impact</h2>
            <div class="about-impact-grid">
                <div class="about-impact-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="about-impact-number">10M+</div>
                    <p class="about-impact-label">Aluminum Cans Produced</p>
                    <div class="about-impact-icon">
                        <i class="fas fa-recycle"></i>
                    </div>
                </div>
                <div class="about-impact-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="about-impact-number">95%</div>
                    <p class="about-impact-label">Recycling Rate</p>
                    <div class="about-impact-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                </div>
                <div class="about-impact-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="about-impact-number">75%</div>
                    <p class="about-impact-label">Energy Savings vs. Plastic</p>
                    <div class="about-impact-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="about-cta-section">
    <div class="container">
        <div class="about-cta-content" data-aos="zoom-in">
            <h2 class="about-cta-title">
                <span class="about-cta-line">Join Us in Making a</span>
                <span class="about-cta-highlight">Difference</span>
            </h2>
            <p class="about-cta-text">Switch to sustainable aluminum packaging and be part of the solution.</p>
            <div class="about-btn-group">
                <a href="/contact.html" class="about-btn about-btn-primary">Get Started</a>
                <a href="/product.html" class="about-btn about-btn-outline">Learn More</a>
            </div>
        </div>
    </div>
</section>
@endsection
