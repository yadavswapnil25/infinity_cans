/**
 * Infinity Cans - Main JavaScript File
 */

// Wait for DOM to be fully loaded
document.addEventListener('DOMContentLoaded', function () {
    // Initialize components
    initNavigation();
    initScrollAnimations();
    initServiceCardHover();
    initCounterAnimation();
    initAOS();
    initCursorEffects();
    initParallaxEffects();
    initHeroAnimation();
    initSmoothScroll();
    initTextSplitting();
    enhancedParticles();
    initIndustryCards();
    initProductCards();
});

/**
 * Navigation functionality
 */
function initNavigation() {
    // Mobile menu toggle
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const hamburger = document.querySelector('.hamburger');
    const mobileMenu = document.getElementById('mobile-menu');
    const overlay = document.getElementById('overlay');
    const closeMobileMenu = document.getElementById('close-mobile-menu');

    if (mobileMenuButton && mobileMenu && overlay) {
        mobileMenuButton.addEventListener('click', function () {
            hamburger.classList.toggle('open');
            mobileMenu.classList.toggle('show');
            overlay.classList.toggle('show');

            // Add body scroll lock when menu is open
            if (mobileMenu.classList.contains('show')) {
                document.body.style.overflow = 'hidden';
            } else {
                document.body.style.overflow = '';
            }
        });

        // Close menu when clicking on the close button
        if (closeMobileMenu) {
            closeMobileMenu.addEventListener('click', function () {
                hamburger.classList.remove('open');
                mobileMenu.classList.remove('show');
                overlay.classList.remove('show');
                document.body.style.overflow = '';
            });
        }

        // Close menu when clicking on overlay
        overlay.addEventListener('click', function () {
            hamburger.classList.remove('open');
            mobileMenu.classList.remove('show');
            overlay.classList.remove('show');
            document.body.style.overflow = '';
        });

        // Close menu when clicking a link that navigates to a section
        const mobileLinks = document.querySelectorAll('.mobile-menu .nav-link');
        mobileLinks.forEach(link => {
            if (link.getAttribute('href') && link.getAttribute('href').startsWith('#')) {
                link.addEventListener('click', function () {
                    hamburger.classList.remove('open');
                    mobileMenu.classList.remove('show');
                    overlay.classList.remove('show');
                    document.body.style.overflow = '';
                });
            }
        });

        // Handle clicks outside the menu to close it
        document.addEventListener('click', function (event) {
            if (mobileMenu.classList.contains('show') &&
                !mobileMenu.contains(event.target) &&
                !mobileMenuButton.contains(event.target)) {
                hamburger.classList.remove('open');
                mobileMenu.classList.remove('show');
                overlay.classList.remove('show');
                document.body.style.overflow = '';
            }
        });
    }

    // Mobile dropdown toggles
    const mobileDropdowns = document.querySelectorAll('.mobile-dropdown-toggle');

    mobileDropdowns.forEach(dropdown => {
        dropdown.addEventListener('click', function (e) {
            e.preventDefault();
            e.stopPropagation();

            const dropdownContent = this.nextElementSibling;

            // Toggle active class for styling
            this.classList.toggle('active');

            // Toggle dropdown visibility with animation
            if (dropdownContent.style.display === 'block') {
                this.classList.remove('active');
                // Animate out
                dropdownContent.style.opacity = '0';
                dropdownContent.style.transform = 'translateY(-10px)';

                setTimeout(() => {
                    dropdownContent.style.display = 'none';
                }, 300);
            } else {
                // Close all other open dropdowns
                document.querySelectorAll('.mobile-dropdown-content').forEach(content => {
                    if (content !== dropdownContent && content.style.display === 'block') {
                        content.style.opacity = '0';
                        content.style.transform = 'translateY(-10px)';

                        setTimeout(() => {
                            content.style.display = 'none';
                        }, 300);

                        content.previousElementSibling.classList.remove('active');
                    }
                });

                // Open this dropdown with animation
                this.classList.add('active');
                dropdownContent.style.display = 'block';
                dropdownContent.style.opacity = '0';
                dropdownContent.style.transform = 'translateY(-10px)';

                setTimeout(() => {
                    dropdownContent.style.opacity = '1';
                    dropdownContent.style.transform = 'translateY(0)';
                }, 10);
            }
        });
    });

    // Enhanced magnetic effect for nav links
    const navLinks = document.querySelectorAll('.nav-desktop .nav-link');
    navLinks.forEach(link => {
        link.addEventListener('mouseenter', function () {
            this.style.transform = 'translateY(-3px)';
            this.style.color = 'var(--secondary)';
        });

        link.addEventListener('mouseleave', function () {
            this.style.transform = '';
            this.style.color = '';
        });
    });

    // Animate navbar on scroll
    window.addEventListener('scroll', function () {
        const header = document.querySelector('header');
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });

    // Initialize navbar state on page load
    if (window.scrollY > 50) {
        const header = document.querySelector('header');
        header.classList.add('scrolled');
    }
}

/**
 * Scroll animations
 */
function initScrollAnimations() {
    // Header scroll effect
    const header = document.querySelector('header');

    if (header) {
        window.addEventListener('scroll', function () {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Trigger once on page load
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        }
    }

    // Smooth scroll for anchor links
    const anchorLinks = document.querySelectorAll('a[href^="#"]:not([href="#"])');

    anchorLinks.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();

            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);

            if (targetElement) {
                const offsetTop = targetElement.offsetTop - 100; // Adjust for header height

                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });

                // Close mobile menu if open
                const mobileMenu = document.getElementById('mobile-menu');
                if (mobileMenu && mobileMenu.classList.contains('show')) {
                    mobileMenu.classList.remove('show');

                    const menuButton = document.getElementById('mobile-menu-button');
                    if (menuButton) {
                        const icon = menuButton.querySelector('i');
                        if (icon.classList.contains('fa-times')) {
                            icon.classList.remove('fa-times');
                            icon.classList.add('fa-bars');
                        }
                    }
                }
            }
        });
    });

    // Reveal elements on scroll
    const revealElements = document.querySelectorAll('.reveal-on-scroll');

    if (revealElements.length > 0) {
        const revealOptions = {
            threshold: 0.15,
            rootMargin: '0px 0px -100px 0px'
        };

        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('revealed');
                    revealObserver.unobserve(entry.target);
                }
            });
        }, revealOptions);

        revealElements.forEach(el => {
            revealObserver.observe(el);
            // Add initial state class
            el.classList.add('reveal-hidden');
        });
    }
}

/**
 * Service card hover effects
 */
function initServiceCardHover() {
    const serviceCards = document.querySelectorAll('.service-card');

    serviceCards.forEach(card => {
        card.addEventListener('mouseenter', function (e) {
            this.classList.add('hover');

            // Create ripple effect
            const ripple = document.createElement('div');
            ripple.classList.add('card-ripple');
            this.appendChild(ripple);

            const rect = this.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;

            ripple.style.left = `${x}px`;
            ripple.style.top = `${y}px`;

            setTimeout(() => {
                ripple.remove();
            }, 1000);

            // Enhanced 3D tilt effect
            card.addEventListener('mousemove', handleCardTilt);

            // Add glowing border effect
            this.style.boxShadow = '0 25px 50px rgba(0, 0, 0, 0.15), 0 0 30px rgba(255, 78, 80, 0.2)';
            this.style.borderColor = 'rgba(255, 78, 80, 0.3)';

            // Enhance image
            const image = this.querySelector('.service-image');
            if (image) {
                image.style.transform = 'scale(1.1)';
                image.style.filter = 'brightness(1.2) contrast(1.2) saturate(1.3)';
            }

            // Enhance service link
            const link = this.querySelector('.service-link');
            if (link) {
                // Animation for just the icon without changing the button background/color
                const icon = link.querySelector('i');
                if (icon) {
                    icon.style.transform = 'translateX(5px)';
                }
            }

            // Add shine effect
            const shine = document.createElement('div');
            shine.style.position = 'absolute';
            shine.style.top = '0';
            shine.style.left = '0';
            shine.style.width = '100%';
            shine.style.height = '100%';
            shine.style.background = 'linear-gradient(135deg, rgba(255,255,255,0) 0%, rgba(255,255,255,0.1) 50%, rgba(255,255,255,0) 100%)';
            shine.style.transform = 'translateX(-100%)';
            shine.style.animation = 'shineEffect 2s ease-in-out infinite';
            shine.style.zIndex = '1';
            shine.style.pointerEvents = 'none';
            shine.classList.add('card-shine');

            // Add shine animation keyframes if not already added
            if (!document.getElementById('shine-keyframes')) {
                const styleSheet = document.createElement('style');
                styleSheet.id = 'shine-keyframes';
                styleSheet.textContent =
                    "@keyframes shineEffect {" +
                    "0% { transform: translateX(-100%); }" +
                    "100% { transform: translateX(100%); }" +
                    "}";
                document.head.appendChild(styleSheet);
            }

            // Only add if not already added
            if (!this.querySelector('.card-shine')) {
                this.appendChild(shine);
            }
        });

        card.addEventListener('mouseleave', function () {
            this.classList.remove('hover');
            card.removeEventListener('mousemove', handleCardTilt);
            card.style.transform = 'perspective(1000px) rotateX(0) rotateY(0)';

            // Reset styles
            this.style.boxShadow = '';
            this.style.borderColor = '';

            const image = this.querySelector('.service-image');
            if (image) {
                image.style.transform = '';
                image.style.filter = '';
            }

            const link = this.querySelector('.service-link');
            if (link) {
                // Animation for just the icon without changing the button background/color
                const icon = link.querySelector('i');
                if (icon) {
                    icon.style.transform = '';
                }
            }

            // Remove shine effect
            const shine = this.querySelector('.card-shine');
            if (shine) {
                shine.remove();
            }
        });
    });

    function handleCardTilt(e) {
        const card = this;
        const rect = card.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;

        const centerX = rect.width / 2;
        const centerY = rect.height / 2;

        const rotateY = ((x - centerX) / centerX) * 10;
        const rotateX = -((y - centerY) / centerY) * 10;

        card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale3d(1.05, 1.05, 1.05)`;
    }
}

/**
 * Counter animation for statistics
 */
function initCounterAnimation() {
    const counters = document.querySelectorAll('.counter');

    if (counters.length > 0) {
        const options = {
            threshold: 0.5
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counter = entry.target;
                    const target = parseInt(counter.getAttribute('data-target'));
                    const duration = 2000; // ms
                    const step = target / (duration / 16); // 60fps

                    let current = 0;
                    const updateCounter = () => {
                        current += step;
                        if (current < target) {
                            counter.textContent = Math.floor(current);
                            requestAnimationFrame(updateCounter);
                        } else {
                            counter.textContent = target;
                        }
                    };

                    updateCounter();
                    observer.unobserve(counter);
                }
            });
        }, options);

        counters.forEach(counter => {
            observer.observe(counter);
        });
    }
}

/**
 * Initialize AOS (Animate On Scroll) library if available
 */
function initAOS() {
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 1000,
            easing: 'cubic-bezier(0.16, 1, 0.3, 1)',
            once: true,
            offset: 100,
            delay: 100,
            mirror: true
        });
    }
}

/**
 * Cursor effects
 */
function initCursorEffects() {
    const cursor = document.querySelector('.cursor');
    const cursorFollower = document.querySelector('.cursor-follower');

    if (!cursor || !cursorFollower) return;

    document.addEventListener('mousemove', (e) => {
        cursor.style.left = e.clientX + 'px';
        cursor.style.top = e.clientY + 'px';

        // Add slight delay to follower
        setTimeout(() => {
            cursorFollower.style.left = e.clientX + 'px';
            cursorFollower.style.top = e.clientY + 'px';
        }, 50);
    });

    // Interactive elements
    const interactiveElements = document.querySelectorAll('a, button, .service-card, .feature-item, .industry-card, .btn, input, textarea');

    interactiveElements.forEach(el => {
        el.addEventListener('mouseenter', () => {
            cursor.classList.add('link-hover');
            cursorFollower.classList.add('link-hover');
        });

        el.addEventListener('mouseleave', () => {
            cursor.classList.remove('link-hover');
            cursorFollower.classList.remove('link-hover');
        });

        el.addEventListener('mousedown', () => {
            cursor.style.transform = 'translate(-50%, -50%) scale(0.8)';
            cursorFollower.style.transform = 'translate(-50%, -50%) scale(0.8)';
        });

        el.addEventListener('mouseup', () => {
            cursor.style.transform = 'translate(-50%, -50%) scale(1)';
            cursorFollower.style.transform = 'translate(-50%, -50%) scale(1)';
        });
    });

    // Show cursor only when mouse moves
    let cursorVisible = false;

    function showCursor() {
        if (!cursorVisible) {
            cursor.style.opacity = '0.7';
            cursorFollower.style.opacity = '0.5';
            cursorVisible = true;
        }
    }

    document.addEventListener('mousemove', showCursor);

    // Hide cursor when leaving window
    document.addEventListener('mouseout', (e) => {
        if (e.relatedTarget === null || e.relatedTarget.nodeName === 'HTML') {
            cursor.style.opacity = '0';
            cursorFollower.style.opacity = '0';
            cursorVisible = false;
        }
    });
}

/**
 * Advanced parallax effects
 */
function initParallaxEffects() {
    const parallaxElements = document.querySelectorAll('.parallax');

    if (parallaxElements.length > 0) {
        window.addEventListener('scroll', () => {
            const scrollTop = window.pageYOffset;

            parallaxElements.forEach(element => {
                const speed = element.dataset.speed || 0.2;
                const offset = element.offsetTop;
                const height = element.offsetHeight;

                // Calculate parallax position
                if (offset + height > scrollTop && offset < scrollTop + window.innerHeight) {
                    const yPos = (scrollTop - offset) * speed;
                    element.style.transform = `translate3d(0, ${yPos}px, 0)`;
                }
            });
        });
    }

    // Mouse parallax for hero section
    const heroSection = document.querySelector('.hero-section');
    const floatingElements = document.querySelectorAll('.floating-can');

    if (heroSection && floatingElements.length > 0) {
        heroSection.addEventListener('mousemove', (e) => {
            const mouseX = e.clientX / window.innerWidth - 0.5;
            const mouseY = e.clientY / window.innerHeight - 0.5;

            floatingElements.forEach((element, index) => {
                const depth = 0.05 + (index * 0.02);
                const moveX = mouseX * depth * 100;
                const moveY = mouseY * depth * 100;

                element.style.transform = `translate3d(${moveX}px, ${moveY}px, 0)`;
            });
        });
    }
}

/**
 * Hero animation
 */
function initHeroAnimation() {
    const heroSection = document.querySelector('.hero-section');
    const heroContent = document.querySelector('.hero-content');

    if (heroSection && heroContent) {
        // Add animation class to trigger animations
        setTimeout(() => {
            heroContent.classList.add('animated');

            // Create and animate the particles
            generateParticles(document.getElementById('particles'));
        }, 100);
    }

    // Text split animation for hero title
    const heroTitle = document.querySelector('.hero-title');
    if (heroTitle) {
        splitTextAnimation(heroTitle);
    }

    // Main tagline animation with special handling
    const mainTagline = document.querySelector('.main-tagline');
    const mainTaglineWrapper = document.querySelector('.main-tagline-wrapper');

    if (mainTagline && mainTaglineWrapper) {
        // Special animation for main tagline to ensure visibility
        mainTaglineWrapper.style.opacity = '0';
        mainTaglineWrapper.style.transform = 'translateY(30px)';

        setTimeout(() => {
            mainTaglineWrapper.style.transition = 'all 1s cubic-bezier(0.16, 1, 0.3, 1)';
            mainTaglineWrapper.style.opacity = '1';
            mainTaglineWrapper.style.transform = 'translateY(0)';

            // Add spotlight effect to make tagline stand out
            const spotlight = document.createElement('div');
            spotlight.style.position = 'absolute';
            spotlight.style.top = '-10px';
            spotlight.style.left = '-10px';
            spotlight.style.right = '-10px';
            spotlight.style.bottom = '-10px';
            spotlight.style.background = 'radial-gradient(circle at center, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 70%)';
            spotlight.style.borderRadius = '10px';
            spotlight.style.zIndex = '-1';
            spotlight.style.animation = 'pulse 3s infinite';

            mainTaglineWrapper.appendChild(spotlight);

            // Add keyframes for pulse if not already added
            if (!document.querySelector('#pulse-keyframes')) {
                const style = document.createElement('style');
                style.id = 'pulse-keyframes';
                style.textContent = `
                    @keyframes pulse {
                        0%, 100% { opacity: 0.3; }
                        50% { opacity: 0.7; }
                    }
                `;
                document.head.appendChild(style);
            }
        }, 600);
    }

    // Secondary tagline animation
    const tagline = document.querySelector('.tagline');
    if (tagline) {
        tagline.style.opacity = '0';
        tagline.style.transform = 'translateY(30px)';

        setTimeout(() => {
            tagline.style.transition = 'all 1s cubic-bezier(0.16, 1, 0.3, 1)';
            tagline.style.opacity = '1';
            tagline.style.transform = 'translateY(0)';

            // Add glow effect to make secondary tagline stand out
            const glow = document.createElement('div');
            glow.style.position = 'absolute';
            glow.style.top = '-5px';
            glow.style.left = '-5px';
            glow.style.right = '-5px';
            glow.style.bottom = '-5px';
            glow.style.background = 'linear-gradient(to right, rgba(255,78,80,0.1), rgba(249,212,35,0.1))';
            glow.style.filter = 'blur(8px)';
            glow.style.borderRadius = '10px';
            glow.style.zIndex = '-1';
            glow.style.animation = 'glowPulse 4s infinite alternate';

            tagline.appendChild(glow);

            // Add keyframes for glow pulse if not already added
            if (!document.querySelector('#glow-pulse-keyframes')) {
                const style = document.createElement('style');
                style.id = 'glow-pulse-keyframes';
                style.textContent = `
                    @keyframes glowPulse {
                        0% { opacity: 0.4; filter: blur(8px); }
                        100% { opacity: 0.8; filter: blur(12px); }
                    }
                `;
                document.head.appendChild(style);
            }
        }, 1000);
    }
}

/**
 * Generate particles for hero section
 */
function generateParticles(container) {
    if (!container) return;

    // Clear container
    container.innerHTML = '';

    // Create particles
    const particleCount = 30;

    for (let i = 0; i < particleCount; i++) {
        const particle = document.createElement('div');
        particle.classList.add('particle');

        // Random position
        const posX = Math.random() * 100;
        const posY = Math.random() * 100;

        // Random size
        const size = Math.random() * 4 + 2;

        // Random opacity
        const opacity = Math.random() * 0.6 + 0.2;

        // Set styles
        particle.style.left = `${posX}%`;
        particle.style.top = `${posY}%`;
        particle.style.width = `${size}px`;
        particle.style.height = `${size}px`;
        particle.style.opacity = opacity;

        // Random animation duration and delay
        const duration = Math.random() * 15 + 10;
        const delay = Math.random() * 5;

        particle.style.animationDuration = `${duration}s`;
        particle.style.animationDelay = `${delay}s`;

        // Append to container
        container.appendChild(particle);
    }
}

/**
 * Smooth scroll functionality
 */
function initSmoothScroll() {
    const anchorLinks = document.querySelectorAll('a[href^="#"]:not([href="#"])');

    anchorLinks.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();

            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);

            if (targetElement) {
                // Account for fixed header
                const headerHeight = document.querySelector('header').offsetHeight;
                const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - headerHeight;

                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
}

/**
 * Text splitting animation
 */
function initTextSplitting() {
    const elements = document.querySelectorAll('.split-text');

    elements.forEach(element => {
        splitTextAnimation(element);
    });
}

/**
 * Split text into individual spans for animation
 */
function splitTextAnimation(element) {
    if (!element) return;

    const text = element.textContent.trim();
    element.textContent = '';
    element.classList.add('text-split-ready');

    // Split by words to maintain proper spacing
    const words = text.split(' ');
    let totalCharIndex = 0;

    words.forEach((word, wordIndex) => {
        // Create a wrapper for each word to maintain spacing
        const wordWrapper = document.createElement('span');
        wordWrapper.style.display = 'inline-block';
        wordWrapper.style.marginRight = wordIndex < words.length - 1 ? '0.3em' : '0';

        // Split word into characters
        for (let i = 0; i < word.length; i++) {
            const span = document.createElement('span');
            span.textContent = word[i];
            span.style.display = 'inline-block';
            span.style.animationDelay = `${totalCharIndex * 0.05}s`;
            wordWrapper.appendChild(span);
            totalCharIndex++;
        }

        element.appendChild(wordWrapper);
        totalCharIndex++; // Account for space
    });
}

/**
 * Enhanced particles effect
 */
function enhancedParticles() {
    // Implementation of enhanced particles effect
}

/**
 * Enhanced Industry Cards
 */
function initIndustryCards() {
    const industryCards = document.querySelectorAll('.industry-card');

    industryCards.forEach(card => {
        // Add shine effect on load
        addShineEffect(card);

        // Handle hover interaction
        card.addEventListener('mouseenter', function (e) {
            // Add pop-up effect
            this.style.transform = 'translateY(-15px) scale(1.03)';
            this.style.boxShadow = '0 20px 40px rgba(0, 0, 0, 0.12), 0 0 30px rgba(255, 78, 80, 0.15)';

            // Enhance icon
            const icon = this.querySelector('.industry-icon');
            if (icon) {
                icon.style.transform = 'scale(1.1) rotateY(10deg)';
                icon.style.boxShadow = '0 15px 30px rgba(255, 78, 80, 0.3)';
            }

            // Highlight title
            const title = this.querySelector('.industry-title');
            if (title) {
                title.style.color = 'var(--secondary)';
            }

            // Enhance button
            const link = this.querySelector('.industry-link');
            if (link) {
                link.style.background = 'var(--main-gradient)';
                link.style.color = 'white';
                link.style.boxShadow = '0 5px 15px rgba(255, 78, 80, 0.2)';

                // Animate the arrow icon
                const icon = link.querySelector('i');
                if (icon) {
                    icon.style.transform = 'translateX(5px)';
                }
            }

            // Add tilt effect
            addTiltEffect(this);
        });

        card.addEventListener('mouseleave', function () {
            // Reset styles
            this.style.transform = 'translateY(0) scale(1)';
            this.style.boxShadow = '0 10px 30px rgba(0, 0, 0, 0.05)';

            // Reset icon
            const icon = this.querySelector('.industry-icon');
            if (icon) {
                icon.style.transform = '';
                icon.style.boxShadow = '';
            }

            // Reset title
            const title = this.querySelector('.industry-title');
            if (title) {
                title.style.color = '';
            }

            // Reset button
            const link = this.querySelector('.industry-link');
            if (link) {
                link.style.background = '';
                link.style.color = '';
                link.style.boxShadow = '';

                // Reset arrow icon
                const icon = link.querySelector('i');
                if (icon) {
                    icon.style.transform = '';
                }
            }

            // Remove tilt effect
            removeTiltEffect(this);
        });
    });

    // Add subtle animation to industry cards when they come into view
    const observerOptions = {
        threshold: 0.2,
        rootMargin: '0px 0px -100px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }, index * 100); // Staggered animation
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Set initial styles and observe
    industryCards.forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px)';
        card.style.transition = 'all 0.6s cubic-bezier(0.16, 1, 0.3, 1)';
        observer.observe(card);
    });
}

/**
 * Add shine effect to cards
 */
function addShineEffect(element) {
    // Create shine element if it doesn't exist
    if (!element.querySelector('.card-shine')) {
        const shine = document.createElement('div');
        shine.classList.add('card-shine');
        shine.style.position = 'absolute';
        shine.style.top = '0';
        shine.style.left = '-100%';
        shine.style.width = '100%';
        shine.style.height = '100%';
        shine.style.background = 'linear-gradient(90deg, rgba(255,255,255,0) 0%, rgba(255,255,255,0.2) 50%, rgba(255,255,255,0) 100%)';
        shine.style.transform = 'skewX(-15deg)';
        shine.style.zIndex = '1';
        shine.style.pointerEvents = 'none';
        shine.style.opacity = '0.7';

        // Add animation
        shine.style.animation = 'shineEffect 3s infinite';

        // Add keyframes if not already added
        if (!document.getElementById('shine-keyframes')) {
            const styleSheet = document.createElement('style');
            styleSheet.id = 'shine-keyframes';
            styleSheet.textContent =
                "@keyframes shineEffect {" +
                "0% { left: -100%; }" +
                "20%, 100% { left: 100%; }" +
                "}";
            document.head.appendChild(styleSheet);
        }

        element.appendChild(shine);
    }
}

/**
 * Add tilt effect to element
 */
function addTiltEffect(element) {
    element.addEventListener('mousemove', handleTilt);
}

/**
 * Remove tilt effect from element
 */
function removeTiltEffect(element) {
    element.removeEventListener('mousemove', handleTilt);
    element.style.transform = '';
}

/**
 * Handle tilt effect on mousemove
 */
function handleTilt(e) {
    const card = this;
    const rect = card.getBoundingClientRect();
    const x = e.clientX - rect.left;
    const y = e.clientY - rect.top;

    const centerX = rect.width / 2;
    const centerY = rect.height / 2;

    const rotateY = ((x - centerX) / centerX) * 5; // Reduced tilt amount
    const rotateX = -((y - centerY) / centerY) * 5;

    card.style.transform = `translateY(-15px) scale(1.03) rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
}

/**
 * Initialize Product Cards
 */
function initProductCards() {
    const productCards = document.querySelectorAll('.product-card');

    productCards.forEach(card => {
        // Add initial state
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px)';
        card.style.transition = 'all 0.6s cubic-bezier(0.16, 1, 0.3, 1)';

        // Intersection Observer for fade-in animation
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }, 100);
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.2,
            rootMargin: '0px 0px -100px 0px'
        });

        observer.observe(card);

        card.addEventListener('mouseenter', function (e) {
            // Add hover effect
            this.style.transform = 'translateY(-10px)';
            this.style.boxShadow = '0 20px 40px rgba(0, 0, 0, 0.1)';

            // Enhance image
            const image = this.querySelector('.product-image img');
            if (image) {
                image.style.transform = 'scale(1.05)';
                image.style.transition = 'all 0.6s cubic-bezier(0.16, 1, 0.3, 1)';
            }

            // Highlight features
            const features = this.querySelectorAll('.product-features li');
            features.forEach((feature, index) => {
                feature.style.transform = 'translateX(10px)';
                feature.style.transition = `all 0.3s cubic-bezier(0.16, 1, 0.3, 1) ${index * 0.05}s`;
            });

            // Add shine effect
            addShineEffect(this);

            // Add tilt effect
            this.addEventListener('mousemove', handleTilt);
        });

        card.addEventListener('mouseleave', function () {
            // Reset styles
            this.style.transform = 'translateY(0)';
            this.style.boxShadow = '';

            // Reset image
            const image = this.querySelector('.product-image img');
            if (image) {
                image.style.transform = '';
            }

            // Reset features
            const features = this.querySelectorAll('.product-features li');
            features.forEach(feature => {
                feature.style.transform = '';
            });

            // Remove shine effect
            const shine = this.querySelector('.card-shine');
            if (shine) {
                shine.remove();
            }

            // Remove tilt effect
            this.removeEventListener('mousemove', handleTilt);
        });
    });

    // Initialize printing features
    const printingFeatures = document.querySelectorAll('.printing-feature');
    printingFeatures.forEach((feature, index) => {
        feature.style.opacity = '0';
        feature.style.transform = 'translateY(30px)';
        feature.style.transition = 'all 0.6s cubic-bezier(0.16, 1, 0.3, 1)';

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }, index * 100);
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.2,
            rootMargin: '0px 0px -100px 0px'
        });

        observer.observe(feature);

        feature.addEventListener('mouseenter', function () {
            this.style.transform = 'translateY(-10px)';
            const icon = this.querySelector('.feature-icon');
            if (icon) {
                icon.style.transform = 'scale(1.1) rotateY(10deg)';
                icon.style.color = 'var(--secondary)';
            }
        });

        feature.addEventListener('mouseleave', function () {
            this.style.transform = 'translateY(0)';
            const icon = this.querySelector('.feature-icon');
            if (icon) {
                icon.style.transform = '';
                icon.style.color = '';
            }
        });
    });
}

// Initialize Theme Rotation for Infinity Hero Section
const heroSection = document.querySelector('.infinity-hero-section');
const themeContainers = document.querySelectorAll('.infinity-theme-container');
const badges = document.querySelectorAll('.infinity-badge');
let currentThemeIndex = 0;

// Badge content for each theme
const badgeContent = [
    // Theme 0: Red
    [
        { icon: 'fas fa-wine-bottle', text: '330ml cans' },
        { icon: 'fas fa-certificate', text: 'BPANI' },
        { icon: 'fas fa-circle', text: 'Full matte' }
    ],
    // Theme 1: Purple  
    [
        { icon: 'fas fa-wine-bottle', text: '330ml cans' },
        { icon: 'fas fa-certificate', text: 'BPANI' },
        { icon: 'fas fa-circle', text: 'Full matte' },
        { icon: 'fas fa-star', text: 'Premium finish' }
    ],
    // Theme 2: Orange
    [
        { icon: 'fas fa-wine-bottle', text: '330ml cans' },
        { icon: 'fas fa-certificate', text: 'BPANI' },
        { icon: 'fas fa-circle', text: 'Full matte & Full glossy' },
        { icon: 'fas fa-camera', text: 'Photorealistic picture' }
    ],
    // Theme 3: Green
    [
        { icon: 'fas fa-wine-bottle', text: '440ml + 330ml cans' },
        { icon: 'fas fa-certificate', text: 'BPANI' },
        { icon: 'fas fa-circle', text: 'Full matte + Full glossy' }
    ]
];

function rotateHeroTheme() {
    // Remove active class from current theme
    themeContainers[currentThemeIndex].classList.remove('active');

    // Move to next theme
    currentThemeIndex = (currentThemeIndex + 1) % themeContainers.length;

    // Update hero section theme attribute
    heroSection.setAttribute('data-theme', currentThemeIndex);

    // Add active class to new theme
    themeContainers[currentThemeIndex].classList.add('active');

    // Update badges content
    updateBadges(currentThemeIndex);

}

function updateBadges(themeIndex) {
    const badgeContainer = document.querySelector('.infinity-hero-badges');
    const currentBadges = badgeContent[themeIndex];

    // Clear existing badges
    badgeContainer.innerHTML = '';

    // Create new badges for current theme
    currentBadges.forEach((badge, index) => {
        const badgeElement = document.createElement('div');
        badgeElement.className = 'infinity-badge';
        badgeElement.setAttribute('data-theme', themeIndex);
        badgeElement.innerHTML = `
            <i class="${badge.icon}"></i>
            <span>${badge.text}</span>
        `;
        badgeContainer.appendChild(badgeElement);
    });
}

// Initialize hero theme rotation
function initHeroThemeRotation() {
    if (heroSection && themeContainers.length > 0) {
        // Start with theme 0
        updateBadges(0);

        // Rotate themes every 4 seconds
        setInterval(rotateHeroTheme, 4000);


    }
}

// Start the theme rotation when DOM is loaded
document.addEventListener('DOMContentLoaded', initHeroThemeRotation);