/**
 * HEADER.JS - Header Navigation Management
 * Handles mobile menu, active link tracking, and header interactions
 */

class HeaderManager {
    constructor() {
        this.mobileMenuBtn = document.getElementById('mobile-menu-btn');
        this.mobileNav = document.getElementById('mobile-nav');
        this.navMenu = document.getElementById('nav-menu');
        this.header = document.querySelector('header');
        this.lastScrollPosition = 0;
        this.isScrollingDown = false;
        
        // Debug log
        console.log('HeaderManager initialized:', {
            mobileMenuBtn: !!this.mobileMenuBtn,
            mobileNav: !!this.mobileNav,
            navMenu: !!this.navMenu,
            header: !!this.header
        });
        
        this.init();
    }

    /**
     * Initialize header functionality
     */
    init() {
        this.setupMobileMenu();
        this.setupActiveLinks();
        this.setupScrollBehavior();
        this.setupSmoothScroll();
        this.updateBodyPadding();
        // Recompute header height when window resizes or when layout changes
        window.addEventListener('resize', () => this.updateBodyPadding());
    }

    /**
     * Setup mobile menu toggle
     */
    setupMobileMenu() {
        if (!this.mobileMenuBtn || !this.mobileNav) return;

        // Toggle menu on button click
        this.mobileMenuBtn.addEventListener('click', (e) => {
            e.preventDefault();
            e.stopPropagation();
            this.toggleMobileMenu();
        });

        // Close menu when link is clicked
        const mobileLinks = this.mobileNav.querySelectorAll('a');
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                this.closeMobileMenu();
            });
        });

        // Close menu when clicking outside header
        document.addEventListener('click', (e) => {
            const isClickInsideHeader = this.header.contains(e.target);
            const isClickOnButton = this.mobileMenuBtn.contains(e.target);
            const isClickInMenu = this.mobileNav.contains(e.target);
            
            // Only close if click is outside header, button, AND menu
            if (!isClickInsideHeader && !isClickOnButton && !isClickInMenu) {
                this.closeMobileMenu();
            }
        });

        // Close menu on Escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                this.closeMobileMenu();
            }
        });
    }

    /**
     * Toggle mobile menu visibility
     */
    toggleMobileMenu() {
        if (!this.mobileNav) {
            console.error('Mobile nav element not found');
            return;
        }
        
        const isActive = this.mobileNav.classList.contains('active');
        console.log('toggleMobileMenu called. Current state:', { isActive });
        
        if (isActive) {
            this.closeMobileMenu();
        } else {
            this.openMobileMenu();
        }
    }

    /**
     * Open mobile menu with animation
     */
    openMobileMenu() {
        this.mobileNav.classList.add('active');
        this.mobileNav.classList.remove('hidden');
        
        // Add aria attributes for accessibility
        this.mobileMenuBtn.setAttribute('aria-expanded', 'true');
        this.mobileMenuBtn.setAttribute('aria-label', 'Close navigation menu');
        
        // Prevent body scroll when menu is open - fix layout shift
        const scrollbarWidth = window.innerWidth - document.documentElement.clientWidth;
        document.body.style.overflow = 'hidden';
        document.body.style.paddingRight = scrollbarWidth + 'px';
        this.header.style.paddingRight = scrollbarWidth + 'px';
    }

    /**
     * Close mobile menu
     */
    closeMobileMenu() {
        this.mobileNav.classList.remove('active');
        this.mobileNav.classList.add('hidden');
        
        // Add aria attributes for accessibility
        this.mobileMenuBtn.setAttribute('aria-expanded', 'false');
        this.mobileMenuBtn.setAttribute('aria-label', 'Open navigation menu');
        
        // Restore body scroll and remove padding
        document.body.style.overflow = '';
        document.body.style.paddingRight = '';
        this.header.style.paddingRight = '';
    }

    /**
     * Setup active link tracking based on current page
     */
    setupActiveLinks() {
        this.updateActiveLinks();
        
        // Update active links when URL changes (for SPA)
        window.addEventListener('popstate', () => {
            this.updateActiveLinks();
        });
    }

    /**
     * Update active state for navigation links
     */
    updateActiveLinks() {
        const currentPath = window.location.pathname;
        
        // Desktop menu links
        if (this.navMenu) {
            const navLinks = this.navMenu.querySelectorAll('.nav-link');
            navLinks.forEach(link => {
                this.setLinkActive(link, currentPath);
            });
        }
        
        // Mobile menu links
        const mobileLinks = this.mobileNav?.querySelectorAll('.mobile-nav-link') || [];
        mobileLinks.forEach(link => {
            const href = link.getAttribute('href');
            if (this.isActivePath(href, currentPath)) {
                link.classList.add('active');
            } else {
                link.classList.remove('active');
            }
        });
    }

    /**
     * Set active class on link if it matches current path
     */
    setLinkActive(link, currentPath) {
        const href = link.getAttribute('href');
        if (this.isActivePath(href, currentPath)) {
            link.classList.add('active');
        } else {
            link.classList.remove('active');
        }
    }

    /**
     * Check if path matches current location
     */
    isActivePath(href, currentPath) {
        if (href === '/' && currentPath === '/') {
            return true;
        } else if (href !== '/' && currentPath.startsWith(href)) {
            return true;
        }
        return false;
    }

    /**
     * Setup smooth scroll behavior on page load and hash navigation
     */
    setupSmoothScroll() {
        // Handle hash links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', (e) => {
                const href = anchor.getAttribute('href');
                if (href === '#') return;

                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    const headerHeight = this.header ? this.header.offsetHeight : 0;
                    const targetTop = target.getBoundingClientRect().top + window.pageYOffset - headerHeight - 8;
                    window.scrollTo({ top: targetTop, behavior: 'smooth' });

                    // Close mobile menu if open
                    this.closeMobileMenu();
                }
            });
        });
        
        // Handle scroll to hash on page load
        if (window.location.hash) {
            setTimeout(() => {
                const target = document.querySelector(window.location.hash);
                if (target) {
                    const headerHeight = this.header ? this.header.offsetHeight : 0;
                    const targetTop = target.getBoundingClientRect().top + window.pageYOffset - headerHeight - 8;
                    window.scrollTo({ top: targetTop, behavior: 'smooth' });
                }
            }, 100);
        }
    }

    /**
     * Setup header scroll behavior (professional sticky header - always visible)
     */
    setupScrollBehavior() {
        if (!this.header) return;

        let ticking = false;

        const onScroll = () => {
            if (!ticking) {
                window.requestAnimationFrame(() => {
                    const currentScrollPosition = window.pageYOffset || 0;
                    
                    // Add scrolled class when scrolled past 100px for visual enhancement
                    if (currentScrollPosition > 100) {
                        this.header.classList.add('scrolled');
                        this.header.classList.add('header-scroll-visible');
                        this.header.classList.remove('header-scroll-hidden');
                    } else {
                        this.header.classList.remove('scrolled');
                        this.header.classList.add('header-scroll-visible');
                        this.header.classList.remove('header-scroll-hidden');
                    }

                    ticking = false;
                });
                ticking = true;
            }
        };

        // Initialize on page load
        if (window.pageYOffset > 100) {
            this.header.classList.add('scrolled');
        }
        this.header.classList.add('header-scroll-visible');

        window.addEventListener('scroll', onScroll, { passive: true });
    }

    /**
     * Hide header
     */
    hideHeader() {
        if (this.header) {
            this.header.classList.remove('header-scroll-visible');
            this.header.classList.add('header-scroll-hidden');
        }
    }

    /**
     * Show header
     */
    showHeader() {
        if (this.header) {
            this.header.classList.remove('header-scroll-hidden');
            this.header.classList.add('header-scroll-visible');
        }
    }

    /**
     * Ensure page content is pushed below fixed header so hero doesn't merge with header
     */
    updateBodyPadding() {
        if (this.header) {
            const h = this.header.offsetHeight;
            // store css var and apply body padding
            document.documentElement.style.setProperty('--header-height', `${h}px`);
            document.body.style.paddingTop = `${h}px`;
        }
    }
}

/**
 * Initialize header when DOM is ready
 */
document.addEventListener('DOMContentLoaded', () => {
    new HeaderManager();
});

/**
 * Fallback for dynamic content loading
 */
window.initializeHeader = function() {
    new HeaderManager();
};
