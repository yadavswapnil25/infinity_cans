@extends('layouts.app1')
@section('title', 'Infinity Cans | Digital Printing for Aluminum Cans & Bottles')
@section('meta_description', "Infinity Cans offers premium digital printing services for aluminum cans and bottles.")
@section('content')
<!-- Product Hero Banner -->
<section class="prod-hero-banner">
    <div class="prod-hero-bg-layer"></div>
    <div class="prod-hero-particles"></div>
    <div class="container">
        <div class="prod-hero-wrapper">
            <div class="prod-hero-content">
                <h1 class="prod-main-title">
                    <span class="prod-title-word" data-aos="fade-up" data-aos-delay="100">Revolutionary</span>
                    <span class="prod-title-word" data-aos="fade-up" data-aos-delay="200">Aluminum</span>
                    <span class="prod-title-word prod-highlight" data-aos="fade-up" data-aos-delay="300">Solutions</span>
                </h1>
                <p class="prod-hero-desc" data-aos="fade-up" data-aos-delay="400">Discover our innovative range of premium aluminum packaging designed to elevate your brand and protect the environment</p>
                <div class="prod-hero-actions" data-aos="fade-up" data-aos-delay="500">
                    <a href="#prod-catalog" class="prod-btn prod-btn-primary">Explore Catalog</a>
                    <a href="#prod-custom" class="prod-btn prod-btn-outline">Custom Solutions</a>
                </div>
            </div>
            <div class="prod-hero-visual">
                <div class="prod-floating-products">
                    <div class="prod-float-item prod-can-1" data-aos="fade-left" data-aos-delay="600">
                        <img src="./assets/prod2.jpeg" alt="Aluminum Can">
                    </div>
                    <div class="prod-float-item prod-can-2" data-aos="fade-left" data-aos-delay="700">
                        <img src="./assets/miss1.jpg" alt="Aluminum Bottle">
                    </div>
                    <div class="prod-float-item prod-can-3" data-aos="fade-left" data-aos-delay="800">
                        <img src="./assets/prod1.jpeg" alt="Custom Can">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Product Categories Grid -->
<section id="prod-catalog" class="prod-categories-section">
    <div class="container">
        <div class="prod-section-header" data-aos="fade-up">
            <h2 class="prod-section-title">Product Categories</h2>
            <p class="prod-section-subtitle">Choose from our comprehensive range of premium aluminum packaging solutions</p>
        </div>

        <div class="prod-categories-grid">
            <!-- Aluminum Cans Category -->
            <div class="prod-category-card" data-aos="zoom-in" data-aos-delay="100">
                <div class="prod-card-header">
                    <div class="prod-card-icon">
                        <i class="fa-solid fa-prescription-bottle"></i>
                    </div>
                    <h3 class="prod-card-title">Aluminum Cans</h3>
                </div>
                <div class="prod-card-image">
                    <img src="./assets/hero.png" alt="Aluminum Cans">
                    <div class="prod-card-overlay">
                        <span class="prod-overlay-text">View Products</span>
                    </div>
                </div>
                <div class="prod-card-content">
                    <p class="prod-card-desc">Premium quality cans for beverages, energy drinks, and more with superior protection and sustainability.</p>
                    <ul class="prod-card-features">
                        <li><i class="fas fa-check-circle"></i> 100% Recyclable</li>
                        <li><i class="fas fa-check-circle"></i> Multiple Sizes</li>
                        <li><i class="fas fa-check-circle"></i> Custom Printing</li>
                    </ul>
                    <a href="#cans-section" class="prod-card-btn">Explore Cans</a>
                </div>
            </div>

            <!-- Aluminum Bottles Category -->
            <div class="prod-category-card" data-aos="zoom-in" data-aos-delay="200">
                <div class="prod-card-header">
                    <div class="prod-card-icon">
                        <i class="fas fa-wine-bottle"></i>
                    </div>
                    <h3 class="prod-card-title">Aluminum Bottles</h3>
                </div>
                <div class="prod-card-image">
                    <img src="https://cdn.shopify.com/s/files/1/0092/9690/4250/files/Reusable_Aluminum_Is_the_Best_Alternative_to_Single-Use_and_Plastic_Water_Bottles_PATH_480x480.jpg?v=1668718483 alt=" Aluminum Bottles">
                    <div class="prod-card-overlay">
                        <span class="prod-overlay-text">View Products</span>
                    </div>
                </div>
                <div class="prod-card-content">
                    <p class="prod-card-desc">Elegant and durable bottles perfect for spirits, wines, and premium beverages with sophisticated appeal.</p>
                    <ul class="prod-card-features">
                        <li><i class="fas fa-check-circle"></i> Premium Finish</li>
                        <li><i class="fas fa-check-circle"></i> Lightweight Design</li>
                        <li><i class="fas fa-check-circle"></i> UV Protection</li>
                    </ul>
                    <a href="#bottles-section" class="prod-card-btn">Explore Bottles</a>
                </div>
            </div>

            <!-- Digital Printing Category -->
            <div class="prod-category-card" data-aos="zoom-in" data-aos-delay="300">
                <div class="prod-card-header">
                    <div class="prod-card-icon">
                        <i class="fas fa-palette"></i>
                    </div>
                    <h3 class="prod-card-title">Digital Printing</h3>
                </div>
                <div class="prod-card-image">
                    <img src="./assets/about.png" alt="Digital Printing">

                </div>
                <div class="prod-card-content">
                    <p class="prod-card-desc">High-resolution digital printing services to bring your brand vision to life with vibrant colors and crisp details.</p>
                    <ul class="prod-card-features">
                        <li><i class="fas fa-check-circle"></i> Full Color Printing</li>
                        <li><i class="fas fa-check-circle"></i> No Minimum Orders</li>
                        <li><i class="fas fa-check-circle"></i> Fast Turnaround</li>
                    </ul>
                    <a href="#printing-section" class="prod-card-btn">Explore Printing</a>
                </div>
            </div>

            <!-- Wholesale Solutions Category -->
            <div class="prod-category-card" data-aos="zoom-in" data-aos-delay="400">
                <div class="prod-card-header">
                    <div class="prod-card-icon">
                        <i class="fas fa-warehouse"></i>
                    </div>
                    <h3 class="prod-card-title">Wholesale Solutions</h3>
                </div>
                <div class="prod-card-image">
                    <img src="./assets/wholesale.jpg" alt="Wholesale Solutions">
                    <div class="prod-card-overlay">
                        <span class="prod-overlay-text">View Options</span>
                    </div>
                </div>
                <div class="prod-card-content">
                    <p class="prod-card-desc">Bulk packaging solutions with competitive pricing for businesses of all sizes, from startups to enterprises.</p>
                    <ul class="prod-card-features">
                        <li><i class="fas fa-check-circle"></i> Bulk Pricing</li>
                        <li><i class="fas fa-check-circle"></i> Custom Volumes</li>
                        <li><i class="fas fa-check-circle"></i> Global Shipping</li>
                    </ul>
                    <a href="#wholesale-section" class="prod-card-btn">Explore Wholesale</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Detailed Product Sections -->

<!-- Aluminum Cans Section -->
<section id="cans-section" class="prod-detail-section">
    <div class="container">
        <div class="prod-detail-header" data-aos="fade-up">
            <h2 class="prod-detail-title">Aluminum Cans Collection</h2>
            <p class="prod-detail-subtitle">From standard beverage cans to specialty sizes, find the perfect fit for your product</p>
        </div>

        <div class="prod-items-grid">
            <div class="prod-item-card" data-aos="fade-up" data-aos-delay="100">
                <div class="prod-item-badge">Best Seller</div>
                <div class="prod-item-image">
                    <img src="./assets/std.jpg" alt="Standard 12oz Can">
                    <div class="prod-item-hover">
                        <div class="prod-hover-content">
                            <h4>Standard 12oz Can</h4>
                            <p>Perfect for carbonated beverages</p>
                        </div>
                    </div>
                </div>
                <div class="prod-item-info">
                    <h3 class="prod-item-name">Standard Can</h3>
                    <div class="prod-item-specs">
                        <span class="prod-spec">12 oz (355ml)</span>
                        <span class="prod-spec">2.6" diameter</span>
                    </div>

                </div>
            </div>

            <div class="prod-item-card" data-aos="fade-up" data-aos-delay="200">
                <div class="prod-item-badge">Eco Choice</div>
                <div class="prod-item-image">
                    <img src="./assets/slim.jpg" alt="Slim Can">
                    <div class="prod-item-hover">
                        <div class="prod-hover-content">
                            <h4>Slim Can</h4>
                            <p>Elegant design for premium brands</p>
                        </div>
                    </div>
                </div>
                <div class="prod-item-info">
                    <h3 class="prod-item-name">Slim Can</h3>
                    <div class="prod-item-specs">
                        <span class="prod-spec">8.4 oz (250ml)</span>
                        <span class="prod-spec">2.1" diameter</span>
                    </div>

                </div>
            </div>

            <div class="prod-item-card" data-aos="fade-up" data-aos-delay="300">
                <div class="prod-item-badge">Premium</div>
                <div class="prod-item-image">
                    <img src="./assets/tall.jpg" alt="Tall Can">
                    <div class="prod-item-hover">
                        <div class="prod-hover-content">
                            <h4>Tall Can</h4>
                            <p>Extra space for impactful branding</p>
                        </div>
                    </div>
                </div>
                <div class="prod-item-info">
                    <h3 class="prod-item-name">Tall Can</h3>
                    <div class="prod-item-specs">
                        <span class="prod-spec">16 oz (473ml)</span>
                        <span class="prod-spec">2.6" diameter</span>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Aluminum Bottles Section -->
<section id="bottles-section" class="prod-detail-section prod-alt-bg">
    <div class="container">
        <div class="prod-detail-header" data-aos="fade-up">
            <h2 class="prod-detail-title">Aluminum Bottles Collection</h2>
            <p class="prod-detail-subtitle">Sophisticated packaging for premium beverages and spirits</p>
        </div>

        <div class="prod-items-grid">
            <div class="prod-item-card" data-aos="fade-up" data-aos-delay="100">
                <div class="prod-item-badge">Luxury</div>
                <div class="prod-item-image">
                    <img src="./assets/al-bottle.jpg" alt="Premium Bottle">
                    <div class="prod-item-hover">
                        <div class="prod-hover-content">
                            <h4>Premium Bottle</h4>
                            <p>Elegant design for spirits</p>
                        </div>
                    </div>
                </div>
                <div class="prod-item-info">
                    <h3 class="prod-item-name">Premium Bottle</h3>
                    <div class="prod-item-specs">
                        <span class="prod-spec">750ml capacity</span>
                        <span class="prod-spec">Screw-on closure</span>
                    </div>

                </div>
            </div>

            <div class="prod-item-card" data-aos="fade-up" data-aos-delay="200">
                <div class="prod-item-badge">Sustainable</div>
                <div class="prod-item-image">
                    <img src="https://m.media-amazon.com/images/I/41y-u87SSKS._AC_UF1000,1000_QL80_.jpg" alt="Sport Bottle">
                    <div class="prod-item-hover">
                        <div class="prod-hover-content">
                            <h4>Sport Bottle</h4>
                            <p>Durable for active lifestyles</p>
                        </div>
                    </div>
                </div>
                <div class="prod-item-info">
                    <h3 class="prod-item-name">Sport Bottle</h3>
                    <div class="prod-item-specs">
                        <span class="prod-spec">500ml capacity</span>
                        <span class="prod-spec">Leak-proof design</span>
                    </div>

                </div>
            </div>

            <div class="prod-item-card" data-aos="fade-up" data-aos-delay="300">
                <div class="prod-item-badge">Custom</div>
                <div class="prod-item-image">
                    <img src="./assets/custom-btl.jpg" alt="Custom Bottle">
                    <div class="prod-item-hover">
                        <div class="prod-hover-content">
                            <h4>Custom Bottle</h4>
                            <p>Tailored to your specifications</p>
                        </div>
                    </div>
                </div>
                <div class="prod-item-info">
                    <h3 class="prod-item-name">Custom Bottle</h3>
                    <div class="prod-item-specs">
                        <span class="prod-spec">Various sizes</span>
                        <span class="prod-spec">Bespoke design</span>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Digital Printing Services -->
<section id="printing-section" class="prod-services-section">
    <div class="container">
        <div class="prod-services-wrapper">
            <div class="prod-services-content" data-aos="fade-right">
                <h2 class="prod-services-title">Digital Printing Excellence</h2>
                <p class="prod-services-desc">Transform your packaging with our state-of-the-art digital printing technology. Create stunning, vibrant designs that make your brand stand out on the shelf.</p>

                <div class="prod-printing-features">
                    <div class="prod-feature-item">
                        <div class="prod-feature-icon">
                            <i class="fas fa-paint-brush"></i>
                        </div>
                        <div class="prod-feature-content">
                            <h4>Full Color Spectrum</h4>
                            <p>Unlimited colors and gradients for maximum visual impact</p>
                        </div>
                    </div>

                    <div class="prod-feature-item">
                        <div class="prod-feature-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="prod-feature-content">
                            <h4>Fast Turnaround</h4>
                            <p>From design to delivery in as little as 5-7 business days</p>
                        </div>
                    </div>

                    <div class="prod-feature-item">
                        <div class="prod-feature-icon">
                            <i class="fas fa-layer-group"></i>
                        </div>
                        <div class="prod-feature-content">
                            <h4>No Minimum Orders</h4>
                            <p>Perfect for prototypes, limited editions, and market testing</p>
                        </div>
                    </div>
                </div>

                <div class="prod-services-actions">
                    <a href="/contact.html" class="prod-btn prod-btn-primary">Start Your Project</a>
                    <a href="/gallery.html" class="prod-btn prod-btn-outline">View Gallery</a>
                </div>
            </div>

            <div class="prod-services-visual" data-aos="fade-left">
                <div class="prod-printing-showcase">
                    <div class="prod-showcase-grid">
                        <div class="prod-showcase-item">
                            <img src="./assets/digitalprint.jpg" alt="Printed Can 1">
                        </div>
                        <div class="prod-showcase-item">
                            <img src="./assets/dp2.jpg" alt="Printed Can 2">
                        </div>
                        <div class="prod-showcase-item">
                            <img src="./assets/dp3.png" alt="Printed Can 3">
                        </div>
                        <div class="prod-showcase-item">
                            <img src="./assets/prod2.jpeg" alt="Printed Can 4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="prod-cta-section">
    <div class="container">
        <div class="prod-cta-content" data-aos="zoom-in">
            <h2 class="prod-cta-title">Ready to Elevate Your Packaging?</h2>
            <p class="prod-cta-desc">Join hundreds of brands who trust Infinity Cans for their premium aluminum packaging needs. Let's create something amazing together.</p>
            <div class="prod-cta-actions">
                <a href="/gallery.html" class="prod-btn prod-btn-outline-white">View Our Work</a>
            </div>
        </div>
    </div>
</section>

@endsection