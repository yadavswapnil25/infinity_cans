@extends('layouts.app1')
@section('title', 'Infinity Cans | Digital Printing for Aluminum Cans & Bottles')
@section('meta_description', "Infinity Cans offers premium digital printing services for aluminum cans and bottles.")
@section('content')
<!-- Blog Hero Section -->
<section class="blog-hero-section">
    <div class="blog-hero-bg"></div>
    <div class="blog-hero-overlay"></div>

    <div class="container">
        <div class="blog-hero-content" data-aos="fade-up">
            <h1 class="blog-hero-title">
                <span class="blog-title-line">Industry</span>
                <span class="blog-highlight">Insights</span>
                <span class="blog-title-line">& News</span>
            </h1>
            <p class="blog-hero-subtitle">
                Stay ahead with the latest trends in aluminum packaging, digital printing innovations,
                and industry best practices from the experts at Infinity Cans.
            </p>
            <div class="blog-hero-stats">
                <div class="blog-stat-item" data-aos="fade-up" data-aos-delay="100">
                    <span class="blog-stat-number">150+</span>
                    <span class="blog-stat-label">Articles Published</span>
                </div>
                <div class="blog-stat-item" data-aos="fade-up" data-aos-delay="200">
                    <span class="blog-stat-number">50K+</span>
                    <span class="blog-stat-label">Monthly Readers</span>
                </div>
                <div class="blog-stat-item" data-aos="fade-up" data-aos-delay="300">
                    <span class="blog-stat-number">12</span>
                    <span class="blog-stat-label">Industry Awards</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Blog Categories Filter -->
<section class="blog-filter-section">
    <div class="container">
        <div class="blog-filter-wrapper" data-aos="fade-up">
            <h2 class="blog-filter-title">Explore Our Content</h2>

        </div>
    </div>
</section>

<!-- Featured Article -->
<section class="blog-featured-section">
    <div class="container">
        <div class="blog-featured-card" data-aos="fade-up">
            <div class="blog-featured-image">
                <img src="{{ asset('storage/bookletsQuestions/' . $blogs->image) }}" alt="Featured Article">
                <div class="blog-featured-badge">Featured</div>
            </div>
            <div class="blog-featured-content">
                <div class="blog-featured-meta">
                    <span class="blog-category technology">{{$blogs->booklet->name}}</span>
                    <span class="blog-date">{{date('F j, Y', strtotime($blogs->created_at))}}</span>
                </div>
                <h2 class="blog-featured-title">{{$blogs->name}}</h2>
                <p class="blog-featured-excerpt">
                   {!! $blogs->answer !!}
                </p>
                <!-- <div class="blog-featured-author">
                    <div class="blog-author-avatar">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" alt="John Smith">
                    </div>
                    <div class="blog-author-info">
                        <span class="blog-author-name">John Smith</span>
                        <span class="blog-author-title">Technology Director</span>
                    </div>
                </div> -->
                <a href="#" class="blog-read-btn">
                    Read Full Article <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Blog Grid -->
<section class="blog-grid-section">
    <div class="container">
        <div class="blog-grid">
            <!-- Blog Post 1 -->
             @foreach ($blogsAll as $blog)
            <article class="blog-card technology" data-aos="fade-up" data-aos-delay="100">
                <div class="blog-card-image">
                    <img src="{{ asset('storage/bookletsQuestions/' . $blog->image) }}" alt="Sustainable Packaging">
                    <div class="blog-card-overlay">
                        <a href="#" class="blog-view-btn">Read More</a>
                    </div>
                </div>
                <div class="blog-card-content">
                    <div class="blog-card-meta">
                        <span class="blog-category sustainability">{{$blog->booklet->name}}</span>
                        <span class="blog-date">{{date('F j, Y', strtotime($blog->created_at))}}</span>
                    </div>
                    <h3 class="blog-card-title">{{$blog->name}}</h3>
                    <p class="blog-card-excerpt">
                        {{$blog->answer}}
                    </p>
                    <!-- <div class="blog-card-author">
                        <img src="https://images.unsplash.com/photo-1494790108755-2616b612b789?ixlib=rb-4.0.3&auto=format&fit=crop&w=50&q=80" alt="Sarah Johnson">
                        <span>Sarah Johnson</span>
                    </div> -->
                </div>
            </article>
            @endforeach

            <!-- Blog Post 2 -->
            <!-- <article class="blog-card design" data-aos="fade-up" data-aos-delay="200">
                <div class="blog-card-image">
                    <img src="./assets/blog2.jpg" alt="Design Trends">
                    <div class="blog-card-overlay">
                        <a href="#" class="blog-view-btn">Read More</a>
                    </div>
                </div>
                <div class="blog-card-content">
                    <div class="blog-card-meta">
                        <span class="blog-category design">Design</span>
                        <span class="blog-date">December 8, 2024</span>
                    </div>
                    <h3 class="blog-card-title">2025 Design Trends: Bold Colors and Minimalist Aesthetics</h3>
                    <p class="blog-card-excerpt">
                        Discover the design trends that will shape aluminum can aesthetics in the coming year...
                    </p>
                    <div class="blog-card-author">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=50&q=80" alt="Mike Chen">
                        <span>Mike Chen</span>
                    </div>
                </div>
            </article> -->

            <!-- Blog Post 3 -->
            <!-- <article class="blog-card industry" data-aos="fade-up" data-aos-delay="300">
                <div class="blog-card-image">
                    <img src="./assets/blog3.jpg" alt="Industry Growth">
                    <div class="blog-card-overlay">
                        <a href="#" class="blog-view-btn">Read More</a>
                    </div>
                </div>
                <div class="blog-card-content">
                    <div class="blog-card-meta">
                        <span class="blog-category industry">Industry News</span>
                        <span class="blog-date">December 5, 2024</span>
                    </div>
                    <h3 class="blog-card-title">Aluminum Packaging Market Set for 15% Growth in 2025</h3>
                    <p class="blog-card-excerpt">
                        Industry analysts predict significant growth in the aluminum packaging sector...
                    </p>
                    <div class="blog-card-author">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&auto=format&fit=crop&w=50&q=80" alt="Emily Davis">
                        <span>Emily Davis</span>
                    </div>
                </div>
            </article> -->

            <!-- Blog Post 4 -->
            <!-- <article class="blog-card tips" data-aos="fade-up" data-aos-delay="400">
                <div class="blog-card-image">
                    <img src="./assets/blog4.jpg" alt="Business Tips">
                    <div class="blog-card-overlay">
                        <a href="#" class="blog-view-btn">Read More</a>
                    </div>
                </div>
                <div class="blog-card-content">
                    <div class="blog-card-meta">
                        <span class="blog-category tips">Tips & Guides</span>
                        <span class="blog-date">December 3, 2024</span>
                    </div>
                    <h3 class="blog-card-title">Choosing the Right Aluminum Can Size for Your Brand</h3>
                    <p class="blog-card-excerpt">
                        A comprehensive guide to selecting the perfect can dimensions for your product...
                    </p>
                    <div class="blog-card-author">
                        <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?ixlib=rb-4.0.3&auto=format&fit=crop&w=50&q=80" alt="David Wilson">
                        <span>David Wilson</span>
                    </div>
                </div>
            </article> -->

            <!-- Blog Post 5 -->
            <!-- <article class="blog-card technology" data-aos="fade-up" data-aos-delay="500">
                <div class="blog-card-image">
                    <img src="./assets/blog5.jpg" alt="3D Printing">
                    <div class="blog-card-overlay">
                        <a href="#" class="blog-view-btn">Read More</a>
                    </div>
                </div>
                <div class="blog-card-content">
                    <div class="blog-card-meta">
                        <span class="blog-category technology">Technology</span>
                        <span class="blog-date">November 28, 2024</span>
                    </div>
                    <h3 class="blog-card-title">3D Textured Surfaces: Next-Gen Can Design Innovation</h3>
                    <p class="blog-card-excerpt">
                        Revolutionary texturing technology creates tactile experiences that enhance brand appeal...
                    </p>
                    <div class="blog-card-author">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=50&q=80" alt="Alex Thompson">
                        <span>Alex Thompson</span>
                    </div>
                </div>
            </article> -->

            <!-- Blog Post 6 -->
            <!-- <article class="blog-card sustainability" data-aos="fade-up" data-aos-delay="600">
                <div class="blog-card-image">
                    <img src="./assets/blog6.jpg" alt="Recycling">
                    <div class="blog-card-overlay">
                        <a href="#" class="blog-view-btn">Read More</a>
                    </div>
                </div>
                <div class="blog-card-content">
                    <div class="blog-card-meta">
                        <span class="blog-category sustainability">Sustainability</span>
                        <span class="blog-date">November 25, 2024</span>
                    </div>
                    <h3 class="blog-card-title">Circular Economy: How Aluminum Leads Sustainable Manufacturing</h3>
                    <p class="blog-card-excerpt">
                        Understanding aluminum's role in creating a sustainable circular economy...
                    </p>
                    <div class="blog-card-author">
                        <img src="https://www.alcircle.com/api/media/f2682342b94143bdbaac90802452fa81_0_0.jpg" alt="Lisa Anderson">
                        <span>Lisa Anderson</span>
                    </div>
                </div>
            </article> -->
        </div>


    </div>
</section>



@endsection