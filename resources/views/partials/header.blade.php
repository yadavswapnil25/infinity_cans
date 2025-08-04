    <header>
        <div class="header-container">
            <a href="/" class="logo">
                <!-- <span class="logo-text">Infinity Cans</span> -->
                <img src="assets/logo.png" alt="Infinity Cans" class="logo-image" width="150px" height="100px">
            </a>

            <!-- Desktop Navigation -->
            <nav class="nav-desktop">
                <a href="{{url('/')}}" class="nav-link active">Home</a>
                <a href="{{url('/about')}}" class="nav-link">About Us</a>
                <a href="{{url('/products')}}" class="nav-link">Products</a>
                <a href="{{url('/gallery')}}" class="nav-link">Gallery</a>
                <a href="{{url('/blogs')}}" class="nav-link">Blog</a>  
                <a href="{{url('/contact')}}" class="nav-link">Contact Us</a>
                <div class="dropdown">
                    <button class="nav-link">
                        More <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="{{url('/faq')}}" class="dropdown-link">FAQ</a>
                        <a href="{{url('/terms-and-conditions')}}" class="dropdown-link">Terms & Conditions</a>
                        <a href="{{url('/privacy-policy')}}" class="dropdown-link">Privacy Policy</a>
                        <a href="{{url('/food-and-safety-policy')}}" class="dropdown-link">Food & Safety Policy</a>
                        <a href="{{url('/disclaimers')}}" class="dropdown-link">Disclaimers</a>
                    </div>
                </div>
            </nav>

            <!-- Mobile Navigation Button -->
            <div id="mobile-menu-button" class="mobile-menu-button">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation Menu -->
        <div id="mobile-menu" class="mobile-menu">
            <div id="close-mobile-menu" class="close-mobile-menu">
                <i class="fas fa-times"></i>
            </div>
            <a href="{{url('/')}}" class="nav-link active">Home</a>
            <a href="{{url('/about')}}" class="nav-link">About Us</a>
            <a href="{{url('/products')}}" class="nav-link">Products</a>
            <a href="{{url('/gallery')}}" class="nav-link">Gallery</a>
            <a href="{{url('/blogs')}}" class="nav-link">Blog</a>
            <a href="{{url('/contact')}}" class="nav-link">Contact Us</a>
            <div class="mobile-dropdown">
                <button class="mobile-dropdown-toggle">
                    More <i class="fas fa-chevron-down"></i>
                </button>
                <div class="mobile-dropdown-content">
                    <a href="{{url('/faq')}}">FAQ</a>
                    <a href="{{url('/terms-and-conditions')}}">Terms & Conditions</a>
                    <a href="{{url('/privacy-policy')}}">Privacy Policy</a>
                    <a href="{{url('/food-and-safety-policy')}}">Food & Safety Policy</a>
                    <a href="">Disclaimers</a>
                </div>
            </div>
        </div>

        <!-- Overlay for Mobile Menu -->
        <div id="overlay" class="overlay"></div>
    </header>