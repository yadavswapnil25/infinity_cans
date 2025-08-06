@extends('layouts.app1')
@section('title', 'Infinity Cans | Digital Printing for Aluminum Cans & Bottles')
@section('meta_description', "Infinity Cans offers premium digital printing services for aluminum cans and bottles.")
@section('content')

 <section class="contact-hero-section">
        <div class="contact-hero-bg"></div>
        
        <div class="container">
            <div class="contact-hero-content" data-aos="fade-up">
                <h1 class="contact-hero-title">
                    <span class="contact-title-line">Get In</span>
                    <span class="contact-title-line">Touch</span>
                </h1>
                <p class="contact-hero-subtitle">
                    Ready to transform your packaging? Let's discuss your project and 
                    bring your vision to life with our premium aluminum solutions.
                </p>
                <div class="contact-hero-features">
                    <div class="contact-feature-item" data-aos="fade-up" data-aos-delay="100">
                        <i class="fas fa-clock"></i>
                        <span>24/7 Support</span>
                    </div>
                    <div class="contact-feature-item" data-aos="fade-up" data-aos-delay="200">
                        <i class="fas fa-shipping-fast"></i>
                        <span>Fast Response</span>
                    </div>
                    <div class="contact-feature-item" data-aos="fade-up" data-aos-delay="300">
                        <i class="fas fa-award"></i>
                        <span>Expert Consultation</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Information Section -->
    <section class="contact-info-section">
        <div class="container" id="newpad" >
            <div class="contact-info-grid">
                <!-- Contact Form -->
                <div class="contact-form-wrapper" data-aos="fade-right">
                    <div class="contact-form-header">
                        <h2 class="contact-form-title">Send Us a Message</h2>
                        <p class="contact-form-desc">
                            Fill out the form below and our team will get back to you within 24 hours.
                        </p>
                    </div>
                    
                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="contact-form-row">
                            <div class="contact-input-group">
                                <label for="firstName" class="contact-label">First Name *</label>
                                <input type="text" id="firstName" name="first_name" class="contact-input" required>
                            </div>
                            <div class="contact-input-group">
                                <label for="lastName" class="contact-label">Last Name *</label>
                                <input type="text" id="lastName" name="last_name" class="contact-input" required>
                            </div>
                        </div>
                        
                        <div class="contact-form-row">
                            <div class="contact-input-group">
                                <label for="email" class="contact-label">Email Address *</label>
                                <input type="email" id="email" name="email" class="contact-input" required>
                            </div>
                            <div class="contact-input-group">
                                <label for="phone" class="contact-label">Phone Number</label>
                                <input type="tel" id="phone" name="phone" class="contact-input">
                            </div>
                        </div>
                        
                        <div class="contact-input-group">
                            <label for="company" class="contact-label">Company Name</label>
                            <input type="text" id="company" name="company_name" class="contact-input">
                        </div>
                        
                        <div class="contact-input-group">
                            <label for="service" class="contact-label">Service Interested In *</label>
                            <select id="service" name="service_interested" class="contact-select" required>
                                <option value="">Select a service</option>
                                <option value="digital-printing">Digital Can Printing</option>
                                <option value="bottle-printing">Aluminum Bottle Printing</option>
                                <option value="wholesale">Wholesale Supply</option>
                                <option value="custom-design">Custom Design Services</option>
                                <option value="consultation">Consultation</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        
                        <div class="contact-input-group">
                            <label for="budget" class="contact-label">Project Budget</label>
                            <select id="budget" name="project_budget" class="contact-select">
                                <option value="">Select budget range</option>
                                <option value="under-5k">Under $5,000</option>
                                <option value="5k-15k">$5,000 - $15,000</option>
                                <option value="15k-50k">$15,000 - $50,000</option>
                                <option value="50k-plus">$50,000+</option>
                            </select>
                        </div>
                        
                        <div class="contact-input-group">
                            <label for="message" class="contact-label">Message *</label>
                            <textarea id="message" name="message" class="contact-textarea" rows="5" 
                                placeholder="Tell us about your project requirements..." required></textarea>
                        </div>
                        
                        <div class="contact-checkbox-group">
                            <input type="checkbox" id="newsletter" name="subscribe_newsletter" class="contact-checkbox">
                            <label for="newsletter" class="contact-checkbox-label">
                                Subscribe to our newsletter for industry updates
                            </label>
                        </div>
                        
                        <button type="submit" class="contact-submit-btn">
                            Send Message <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>

                <!-- Contact Details -->
                <div class="contact-details-wrapper" data-aos="fade-left">
                    <div class="contact-details-header">
                        <h2 class="contact-details-title">Contact Information</h2>
                        <p class="contact-details-desc">
                            Reach out to us through any of these channels. We're here to help!
                        </p>
                    </div>
                    
                    <div class="contact-details-list">
                        <div class="contact-detail-item">
                            <div class="contact-detail-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-detail-content">
                                <h4 class="contact-detail-title">Our Location</h4>
                                <p class="contact-detail-text">
                                    123 Industrial Avenue<br>
                                    Manufacturing District<br>
                                    City, State 12345
                                </p>
                            </div>
                        </div>
                        
                        <div class="contact-detail-item">
                            <div class="contact-detail-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="contact-detail-content">
                                <h4 class="contact-detail-title">Phone Numbers</h4>
                                <p class="contact-detail-text">
                                    Main: +1 (555) 123-4567<br>
                                    Sales: +1 (555) 123-4568<br>
                                    Support: +1 (555) 123-4569
                                </p>
                            </div>
                        </div>
                        
                        <div class="contact-detail-item">
                            <div class="contact-detail-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="contact-detail-content">
                                <h4 class="contact-detail-title">Email Addresses</h4>
                                <p class="contact-detail-text">
                                    General: info@infinitycans.com<br>
                                    Sales: sales@infinitycans.com<br>
                                    Support: support@infinitycans.com
                                </p>
                            </div>
                        </div>
                        
                        <div class="contact-detail-item">
                            <div class="contact-detail-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="contact-detail-content">
                                <h4 class="contact-detail-title">Business Hours</h4>
                                <p class="contact-detail-text">
                                    Monday - Friday: 8:00 AM - 6:00 PM<br>
                                    Saturday: 9:00 AM - 4:00 PM<br>
                                    Sunday: Closed
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="contact-social-section">
                        <h4 class="contact-social-title">Follow Us</h4>
                        <div class="contact-social-links">
                            <a href="#" class="contact-social-link">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="contact-social-link">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="contact-social-link">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="contact-social-link">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection