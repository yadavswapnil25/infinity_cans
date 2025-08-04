@extends('layouts.app1')
@section('title', 'Infinity Cans | Digital Printing for Aluminum Cans & Bottles')
@section('meta_description', "Infinity Cans offers premium digital printing services for aluminum cans and bottles.")
@section('content')
 <section class="gal-hero-section">
        <div class="gal-hero-bg"></div>
        <!-- <div class="gal-hero-overlay"></div> -->
        <div class="container">
            <div class="gal-hero-content">
                <h1 class="gal-hero-title" data-aos="fade-up">
                    <span class="gal-title-line">Our</span>
                    <span class="gal-title-line gal-highlight">Gallery</span>
                </h1>
                <p class="gal-hero-subtitle" data-aos="fade-up" data-aos-delay="200">
                    Discover the artistry and innovation behind our premium aluminum packaging solutions
                </p>
                <div class="gal-hero-stats" data-aos="fade-up" data-aos-delay="300">
                    <div class="gal-stat-item">
                        <span class="gal-stat-number">500+</span>
                        <span class="gal-stat-label">Projects Completed</span>
                    </div>
                    <div class="gal-stat-item">
                        <span class="gal-stat-number">50+</span>
                        <span class="gal-stat-label">Happy Clients</span>
                    </div>
                    <div class="gal-stat-item">
                        <span class="gal-stat-number">100+</span>
                        <span class="gal-stat-label">Unique Designs</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Filter Controls -->
    <section class="gal-filter-section">
        <div class="container">
            <div class="gal-filter-wrapper" data-aos="fade-up">
                <h2 class="gal-filter-title">Browse by Category</h2>
                <div class="gal-filter-controls">
                    <button class="gal-filter-btn active" data-filter="all">All Projects</button>
                    <button class="gal-filter-btn" data-filter="cans">Aluminum Cans</button>
                    <button class="gal-filter-btn" data-filter="bottles">Bottles</button>
                    <button class="gal-filter-btn" data-filter="printing">Digital Printing</button>
                    <button class="gal-filter-btn" data-filter="custom">Custom Solutions</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Grid -->
    <section class="gal-showcase-section">
        <div class="container">
            <div class="gal-grid">
                <!-- Gallery Item 1 -->
                <div class="gal-item" data-category="cans" data-aos="fade-up" data-aos-delay="100">
                    <div class="gal-item-wrapper">
                        <img src="/assets/g1.jpg" 
                             alt="Premium Energy Drink Can" class="gal-item-image">
                        <div class="gal-item-overlay">
                            <div class="gal-item-content">
                                <h3 class="gal-item-title">Energy Burst</h3>
                                <p class="gal-item-desc">Premium energy drink with vibrant gradient design</p>
                                <div class="gal-item-actions">
                                    <button class="gal-view-btn" onclick="openLightbox(this)">
                                        <i class="fas fa-eye"></i> View
                                    </button>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 2 -->
                <div class="gal-item" data-category="bottles" data-aos="fade-up" data-aos-delay="200">
                    <div class="gal-item-wrapper">
                        <img src="/assets/g2.jpg" 
                             alt="Luxury Spirit Bottle" class="gal-item-image">
                        <div class="gal-item-overlay">
                            <div class="gal-item-content">
                                <h3 class="gal-item-title">Luxury Spirits</h3>
                                <p class="gal-item-desc">Elegant aluminum bottle with premium finish</p>
                                <div class="gal-item-actions">
                                    <button class="gal-view-btn" onclick="openLightbox(this)">
                                        <i class="fas fa-eye"></i> View
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 3 -->
                <div class="gal-item gal-featured" data-category="printing" data-aos="fade-up" data-aos-delay="300">
                    <div class="gal-item-wrapper">
                        <img src="/assets/g4.jpg" 
                             alt="Digital Printing Showcase" class="gal-item-image">
                        <div class="gal-item-overlay">
                            <div class="gal-item-content">
                                <h3 class="gal-item-title">Digital Artistry</h3>
                                <p class="gal-item-desc">Showcase of our advanced digital printing capabilities</p>
                                <div class="gal-item-actions">
                                    <button class="gal-view-btn" onclick="openLightbox(this)">
                                        <i class="fas fa-eye"></i> View
                                    </button>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 4 -->
                <div class="gal-item" data-category="cans" data-aos="fade-up" data-aos-delay="400">
                    <div class="gal-item-wrapper">
                        <img src="/assets/g5.jpg"
                             alt="Slim Can Design" class="gal-item-image">
                        <div class="gal-item-overlay">
                            <div class="gal-item-content">
                                <h3 class="gal-item-title">Slim Elegance</h3>
                                <p class="gal-item-desc">Minimalist design for premium beverages</p>
                                <div class="gal-item-actions">
                                    <button class="gal-view-btn" onclick="openLightbox(this)">
                                        <i class="fas fa-eye"></i> View
                                    </button>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 5 -->
                <div class="gal-item" data-category="custom" data-aos="fade-up" data-aos-delay="500">
                    <div class="gal-item-wrapper">
                        <img src="/assets/g3.jpg" 
                             alt="Custom Solution" class="gal-item-image">
                        <div class="gal-item-overlay">
                            <div class="gal-item-content">
                                <h3 class="gal-item-title">Custom Innovation</h3>
                                <p class="gal-item-desc">Bespoke packaging solution for unique brand requirements</p>
                                <div class="gal-item-actions">
                                    <button class="gal-view-btn" onclick="openLightbox(this)">
                                        <i class="fas fa-eye"></i> View
                                    </button>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 6 -->
                <div class="gal-item" data-category="bottles" data-aos="fade-up" data-aos-delay="600">
                    <div class="gal-item-wrapper">
                        <img src="/assets/g6.jpg" 
                             alt="Sports Bottle" class="gal-item-image">
                        <div class="gal-item-overlay">
                            <div class="gal-item-content">
                                <h3 class="gal-item-title">Active Lifestyle</h3>
                                <p class="gal-item-desc">Durable sports bottle with ergonomic design</p>
                                <div class="gal-item-actions">
                                    <button class="gal-view-btn" onclick="openLightbox(this)">
                                        <i class="fas fa-eye"></i> View
                                    </button>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 7 -->
                <div class="gal-item" data-category="printing" data-aos="fade-up" data-aos-delay="700">
                    <div class="gal-item-wrapper">
                        <img src="/assets/g7.jpg" 
                             alt="Colorful Design" class="gal-item-image">
                        <div class="gal-item-overlay">
                            <div class="gal-item-content">
                                <h3 class="gal-item-title">Vibrant Colors</h3>
                                <p class="gal-item-desc">High-resolution printing with stunning color accuracy</p>
                                <div class="gal-item-actions">
                                    <button class="gal-view-btn" onclick="openLightbox(this)">
                                        <i class="fas fa-eye"></i> View
                                    </button>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 8 -->
                <div class="gal-item" data-category="cans" data-aos="fade-up" data-aos-delay="800">
                    <div class="gal-item-wrapper">
                        <img src="/assets/g8.jpeg" 
                             alt="Craft Beer Can" class="gal-item-image">
                        <div class="gal-item-overlay">
                            <div class="gal-item-content">
                                <h3 class="gal-item-title">Craft Beer</h3>
                                <p class="gal-item-desc">Artisanal design for premium craft beverages</p>
                                <div class="gal-item-actions">
                                    <button class="gal-view-btn" onclick="openLightbox(this)">
                                        <i class="fas fa-eye"></i> View
                                    </button>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Load More Button -->
            <div class="gal-load-more" data-aos="fade-up">
                <button class="gal-load-btn">
                    <i class="fas fa-plus"></i> Load More Projects
                </button>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="gal-process-section">
        <div class="container">
            <div class="gal-process-header" data-aos="fade-up">
                <h2 class="gal-process-title">Our Creative Process</h2>
                <p class="gal-process-subtitle">From concept to completion, see how we bring your vision to life</p>
            </div>
            
            <div class="gal-process-steps">
                <div class="gal-step" data-aos="fade-up" data-aos-delay="100">
                    <div class="gal-step-number">01</div>
                    <div class="gal-step-content">
                        <h3 class="gal-step-title">Consultation</h3>
                        <p class="gal-step-desc">We start by understanding your brand, target audience, and packaging goals</p>
                    </div>
                </div>
                
                <div class="gal-step" data-aos="fade-up" data-aos-delay="200">
                    <div class="gal-step-number">02</div>
                    <div class="gal-step-content">
                        <h3 class="gal-step-title">Design</h3>
                        <p class="gal-step-desc">Our designers create stunning concepts that capture your brand essence</p>
                    </div>
                </div>
                
                <div class="gal-step" data-aos="fade-up" data-aos-delay="300">
                    <div class="gal-step-number">03</div>
                    <div class="gal-step-content">
                        <h3 class="gal-step-title">Production</h3>
                        <p class="gal-step-desc">State-of-the-art printing technology brings your design to life</p>
                    </div>
                </div>
                
                <div class="gal-step" data-aos="fade-up" data-aos-delay="400">
                    <div class="gal-step-number">04</div>
                    <div class="gal-step-content">
                        <h3 class="gal-step-title">Delivery</h3>
                        <p class="gal-step-desc">Premium packaging delivered on time and ready to impress</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="gal-cta-section">
        <div class="container">
            <div class="gal-cta-content" data-aos="zoom-in">
                <h2 class="gal-cta-title">Ready to Create Your Masterpiece?</h2>
                <p class="gal-cta-desc">Let's work together to create packaging that tells your brand's story and captivates your customers.</p>
                <div class="gal-cta-actions">
                    <a href="/contact.html" class="gal-cta-btn gal-btn-primary">Start Your Project</a>
                    <a href="/product.html" class="gal-cta-btn gal-btn-outline">View Products</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Lightbox Modal -->
    <div id="gallery-lightbox" class="gal-lightbox">
        <div class="gal-lightbox-overlay" onclick="closeLightbox()"></div>
        <div class="gal-lightbox-content">
            <button class="gal-lightbox-close" onclick="closeLightbox()">
                <i class="fas fa-times"></i>
            </button>
            <img id="gal-lightbox-image" src="" alt="" class="gal-lightbox-img">
            <div class="gal-lightbox-info">
                <h3 id="gal-lightbox-title" class="gal-lightbox-title"></h3>
                <p id="gal-lightbox-desc" class="gal-lightbox-desc"></p>
            </div>
        </div>
    </div>
@endsection