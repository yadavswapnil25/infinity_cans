@extends('layouts.app1')
@section('title', 'Infinity Cans | Digital Printing for Aluminum Cans & Bottles')
@section('meta_description', "Infinity Cans offers premium digital printing services for aluminum cans and bottles.")
@section('content')
   <section class="faq-hero-section">
        <div class="container">
            <div class="faq-hero-content" data-aos="fade-up">
                <h1 class="faq-hero-title">
                    Frequently Asked <span class="faq-highlight">Questions</span>
                </h1>
                <p class="faq-hero-subtitle">
                    Find quick answers to common questions about our aluminum packaging 
                    and digital printing services.
                </p>
                <div class="faq-search-wrapper">
                    <div class="faq-search-box">
                        <i class="fas fa-search"></i>
                        <input type="text" id="faqSearch" placeholder="Search for answers..." class="faq-search-input">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Categories -->
    <section class="faq-categories-section">
        <div class="container">
            <div class="faq-category-tabs" data-aos="fade-up">
                <button class="faq-tab-btn active" data-category="all">All Questions</button>
                <button class="faq-tab-btn" data-category="general">General</button>
                <button class="faq-tab-btn" data-category="printing">Printing</button>
                <button class="faq-tab-btn" data-category="pricing">Pricing</button>
                <button class="faq-tab-btn" data-category="shipping">Shipping</button>
                <button class="faq-tab-btn" data-category="design">Design</button>
            </div>
        </div>
    </section>

    <!-- FAQ Content -->
    <section class="faq-content-section">
        <div class="container">
            <div class="faq-list">
                <!-- General Questions -->
                <div class="faq-item general" data-aos="fade-up" data-aos-delay="100">
                    <div class="faq-question">
                        <h3>What is Infinity Cans?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Infinity Cans is a leading provider of premium digital printing services for aluminum cans and bottles. We specialize in custom packaging solutions that help brands stand out with high-quality, eco-friendly aluminum packaging.</p>
                    </div>
                </div>

                <div class="faq-item general" data-aos="fade-up" data-aos-delay="150">
                    <div class="faq-question">
                        <h3>What makes aluminum packaging better than plastic?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Aluminum packaging is 100% recyclable, lightweight, and provides superior protection against light and oxygen. It's more sustainable than plastic and offers a premium feel that enhances brand perception.</p>
                    </div>
                </div>

                <!-- Printing Questions -->
                <div class="faq-item printing" data-aos="fade-up" data-aos-delay="200">
                    <div class="faq-question">
                        <h3>What is digital printing on aluminum cans?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Digital printing allows us to print high-resolution, full-color designs directly onto aluminum cans without the need for traditional printing plates. This enables shorter runs, faster turnaround, and more design flexibility.</p>
                    </div>
                </div>

                <div class="faq-item printing" data-aos="fade-up" data-aos-delay="250">
                    <div class="faq-question">
                        <h3>What's your minimum order quantity?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We have no minimum order quantity for digital printing! Whether you need 1 can for prototyping or 10,000 for production, we can accommodate your needs.</p>
                    </div>
                </div>

                <div class="faq-item printing" data-aos="fade-up" data-aos-delay="300">
                    <div class="faq-question">
                        <h3>What file formats do you accept?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We accept AI, EPS, PDF, PNG, and high-resolution JPEG files. Vector formats (AI, EPS, PDF) are preferred for the best print quality. We also provide design templates for different can sizes.</p>
                    </div>
                </div>

                <!-- Pricing Questions -->
                <div class="faq-item pricing" data-aos="fade-up" data-aos-delay="350">
                    <div class="faq-question">
                        <h3>How is pricing calculated?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Pricing depends on factors like quantity, can size, design complexity, and finishing options. We offer competitive rates with volume discounts. Contact us for a personalized quote.</p>
                    </div>
                </div>

                <div class="faq-item pricing" data-aos="fade-up" data-aos-delay="400">
                    <div class="faq-question">
                        <h3>Do you offer volume discounts?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes! We offer attractive volume discounts for larger orders. The more you order, the better the price per unit. Contact our sales team for detailed pricing tiers.</p>
                    </div>
                </div>

                <!-- Shipping Questions -->
                <div class="faq-item shipping" data-aos="fade-up" data-aos-delay="450">
                    <div class="faq-question">
                        <h3>How long does production take?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Standard production time is 5-7 business days after design approval. Rush orders can be completed in 24-48 hours for an additional fee. Shipping time depends on your location and chosen method.</p>
                    </div>
                </div>

                <div class="faq-item shipping" data-aos="fade-up" data-aos-delay="500">
                    <div class="faq-question">
                        <h3>Do you ship internationally?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, we ship worldwide! International shipping rates and delivery times vary by destination. We work with reliable carriers to ensure your products arrive safely and on time.</p>
                    </div>
                </div>

                <!-- Design Questions -->
                <div class="faq-item design" data-aos="fade-up" data-aos-delay="550">
                    <div class="faq-question">
                        <h3>Do you provide design services?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes! Our expert design team can help create stunning graphics that perfectly represent your brand. We offer everything from concept development to final artwork preparation.</p>
                    </div>
                </div>

                <div class="faq-item design" data-aos="fade-up" data-aos-delay="600">
                    <div class="faq-question">
                        <h3>Can I see a proof before production?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Absolutely! We provide digital proofs for all orders, and physical proofs are available upon request. We won't proceed with production until you approve the final design.</p>
                    </div>
                </div>

                <div class="faq-item general" data-aos="fade-up" data-aos-delay="650">
                    <div class="faq-question">
                        <h3>Are your products food-safe?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, all our aluminum cans and printing materials are food-safe and comply with FDA regulations. We use food-grade inks and coatings that are safe for direct food contact.</p>
                    </div>
                </div>

                <div class="faq-item general" data-aos="fade-up" data-aos-delay="700">
                    <div class="faq-question">
                        <h3>How do I get started with an order?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Getting started is easy! Contact us with your project details, and we'll provide a quote and timeline. Once approved, send us your artwork or let our design team create something amazing for you.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Still Have Questions Section -->
    <section class="faq-contact-section">
        <div class="container">
            <div class="faq-contact-content" data-aos="fade-up">
                <h2 class="faq-contact-title">Still Have Questions?</h2>
                <p class="faq-contact-desc">
                    Can't find what you're looking for? Our expert team is here to help 
                    with personalized answers to your specific needs.
                </p>
                <div class="faq-contact-actions">
                    <a href="/contact.html" class="faq-contact-btn primary">
                        <i class="fas fa-envelope"></i>
                        Contact Us
                    </a>
                    <a href="tel:+1555123456" class="faq-contact-btn secondary">
                        <i class="fas fa-phone"></i>
                        Call Now
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection