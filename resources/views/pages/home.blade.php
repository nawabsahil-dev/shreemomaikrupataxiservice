@extends('layouts.app')

@section('title', 'Home - Shree Momai Krupa Taxi Service')
@section('meta_description', 'Reliable taxi service in Jamnagar with quick booking, premium fleet, and tailored routes across Gujarat.')

@section('extra_css')
<link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
@endsection

@section('content')
<!-- Hero Section: Route Map Theme -->
<section class="hero-section home-hero with-bg-image" style="--hero-bg-image: url('{{ asset('images/tours/coastal-drive.jpg') }}');">
    <div class="hero-map-overlay"></div>
    <div class="hero-glow hero-glow-left"></div>
    <div class="hero-glow hero-glow-right"></div>

    <div class="container-max hero-grid">
        <div class="hero-content home-hero-content">
            <div class="hero-badge" data-aos="fade-right">
                <span class="badge-dot"></span>
                Jamnagar Premium Taxi Network
            </div>

            <h1 class="home-hero-title" data-aos="fade-right" data-aos-delay="100">
                Move Through Gujarat
                <span class="home-hero-title-accent">With Routes That Feel Personal</span>
            </h1>

            <p class="home-hero-subtitle" data-aos="fade-right" data-aos-delay="200">
                City rides, temple visits, airport runs, and custom tours. We design the fastest, most comfortable route for every journey.
            </p>

            <div class="hero-chip-row" data-aos="fade-up" data-aos-delay="300">
                <div class="hero-chip">24/7 Dispatch</div>
                <div class="hero-chip">Verified Drivers</div>
                <div class="hero-chip">Live Trip Updates</div>
            </div>

            <div class="hero-cta" data-aos="fade-up" data-aos-delay="400">
                <a href="/booking" class="btn-primary">Book a Ride</a>
                <a href="#signature-routes" class="btn-outline">View Signature Routes</a>
            </div>

            <div class="hero-stats" data-aos="fade-up" data-aos-delay="500">
                <div class="hero-stat">
                    <div class="stat-value"><span class="counter" data-target="12">0</span>+</div>
                    <div class="stat-label">Years Driving Gujarat</div>
                </div>
                <div class="hero-stat">
                    <div class="stat-value"><span class="counter" data-target="50">0</span>+</div>
                    <div class="stat-label">Fleet Options</div>
                </div>
                <div class="hero-stat">
                    <div class="stat-value"><span class="counter" data-target="480">0</span>+</div>
                    <div class="stat-label">Monthly Trips</div>
                </div>
            </div>
        </div>

        <div class="hero-panel" data-aos="zoom-in" data-aos-delay="200">
            <div class="hero-panel-header">
                <h2>Quick Route Planner</h2>
                <p>Share pickup and drop, get an instant confirmation.</p>
            </div>

            <form id="quickBookingForm" class="hero-form">
                <div class="form-group">
                    <label for="fromLocation">Pickup Location</label>
                    <select id="fromLocation" name="fromLocation" required>
                        <option value="" disabled selected>Select pickup city</option>
                        <option>Ahmedabad</option>
                        <option>Amreli</option>
                        <option>Anand</option>
                        <option>Ankleshwar</option>
                        <option>Bhavnagar</option>
                        <option>Bhuj</option>
                        <option>Botad</option>
                        <option>Chhota Udaipur</option>
                        <option>Deesa</option>
                        <option>Dahod</option>
                        <option>Dwarka</option>
                        <option>Gandhidham</option>
                        <option>Gandhinagar</option>
                        <option>Gir Somnath</option>
                        <option>Godhra</option>
                        <option>Gondal</option>
                        <option>Himmatnagar</option>
                        <option>Jamnagar</option>
                        <option>Jetpur</option>
                        <option>Junagadh</option>
                        <option>Kalol</option>
                        <option>Keshod</option>
                        <option>Khambhalia</option>
                        <option>Mahesana</option>
                        <option>Morbi</option>
                        <option>Nadiad</option>
                        <option>Navsari</option>
                        <option>Palanpur</option>
                        <option>Porbandar</option>
                        <option>Rajkot</option>
                        <option>Surat</option>
                        <option>Surendranagar</option>
                        <option>Vadodara</option>
                        <option>Valsad</option>
                        <option>Veraval</option>
                        <option>Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="toLocation">Destination</label>
                    <select id="toLocation" name="toLocation" required>
                        <option value="" disabled selected>Select destination city</option>
                        <option>Ahmedabad</option>
                        <option>Amreli</option>
                        <option>Anand</option>
                        <option>Ankleshwar</option>
                        <option>Bhavnagar</option>
                        <option>Bhuj</option>
                        <option>Botad</option>
                        <option>Chhota Udaipur</option>
                        <option>Deesa</option>
                        <option>Dahod</option>
                        <option>Dwarka</option>
                        <option>Gandhidham</option>
                        <option>Gandhinagar</option>
                        <option>Gir Somnath</option>
                        <option>Godhra</option>
                        <option>Gondal</option>
                        <option>Himmatnagar</option>
                        <option>Jamnagar</option>
                        <option>Jetpur</option>
                        <option>Junagadh</option>
                        <option>Kalol</option>
                        <option>Keshod</option>
                        <option>Khambhalia</option>
                        <option>Mahesana</option>
                        <option>Morbi</option>
                        <option>Nadiad</option>
                        <option>Navsari</option>
                        <option>Palanpur</option>
                        <option>Porbandar</option>
                        <option>Rajkot</option>
                        <option>Surat</option>
                        <option>Surendranagar</option>
                        <option>Vadodara</option>
                        <option>Valsad</option>
                        <option>Veraval</option>
                        <option>Other</option>
                    </select>
                </div>
                <div class="form-grid">
                    <div class="form-group">
                        <label for="travelDate">Date</label>
                        <input id="travelDate" name="travelDate" type="date" required>
                    </div>
                    <div class="form-group">
                        <label for="travelTime">Time</label>
                        <input id="travelTime" name="travelTime" type="time">
                    </div>
                </div>
                <button type="submit" class="btn-accent full-width">Check Availability</button>
            </form>

            <div class="route-preview">
                <div class="route-map">
                    <svg viewBox="0 0 260 120" aria-hidden="true">
                        <path d="M15 95 C60 20, 120 140, 180 30 S240 40, 245 95" fill="none" stroke="rgba(255, 193, 7, 0.9)" stroke-width="3" stroke-linecap="round" stroke-dasharray="6 8" />
                        <circle cx="20" cy="95" r="6" fill="#ffffff" />
                        <circle cx="245" cy="95" r="6" fill="#FFC107" />
                    </svg>
                </div>
                <div class="route-legend">
                    <span>Fastest Route Updated Live</span>
                    <span class="legend-dot"></span>
                </div>
            </div>
        </div>
    </div>

    <div class="scroll-indicator" aria-hidden="true">
        <span></span>
    </div>
</section>

<!-- Route Ribbon -->
<section class="route-ribbon" aria-label="Quick service highlights">
    <div class="container-max ribbon-grid">
        <div class="ribbon-card" data-aos="fade-up">
            <div class="ribbon-icon">
                <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2a10 10 0 100 20 10 10 0 000-20zm1 5v5h4v2h-6V7h2z"/></svg>
            </div>
            <div>
                <h4>On-Time Routing</h4>
                <p>Smart ETAs with live traffic updates.</p>
            </div>
        </div>
        <div class="ribbon-card" data-aos="fade-up" data-aos-delay="80">
            <div class="ribbon-icon">
                <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 1a5 5 0 015 5v2h1a2 2 0 012 2v10a2 2 0 01-2 2H6a2 2 0 01-2-2V10a2 2 0 012-2h1V6a5 5 0 015-5zm3 7V6a3 3 0 00-6 0v2h6z"/></svg>
            </div>
            <div>
                <h4>Verified Drivers</h4>
                <p>Background-checked, locally trusted.</p>
            </div>
        </div>
        <div class="ribbon-card" data-aos="fade-up" data-aos-delay="160">
            <div class="ribbon-icon">
                <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M3 7a2 2 0 012-2h10a2 2 0 012 2v2h2.5A1.5 1.5 0 0121 10.5v6a2 2 0 01-2 2h-1a2 2 0 01-4 0H10a2 2 0 01-4 0H5a2 2 0 01-2-2V7zm4 11a1 1 0 100 2 1 1 0 000-2zm10 0a1 1 0 100 2 1 1 0 000-2z"/></svg>
            </div>
            <div>
                <h4>Premium Fleet</h4>
                <p>Clean, AC vehicles for every trip.</p>
            </div>
        </div>
        <div class="ribbon-card" data-aos="fade-up" data-aos-delay="240">
            <div class="ribbon-icon">
                <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 3a9 9 0 019 9c0 4.97-4.03 9-9 9S3 16.97 3 12a9 9 0 019-9zm0 2a7 7 0 00-7 7c0 3.86 3.14 7 7 7s7-3.14 7-7a7 7 0 00-7-7zm-1 2h2v5h4v2h-6V7z"/></svg>
            </div>
            <div>
                <h4>24/7 Dispatch</h4>
                <p>Always ready for late-night rides.</p>
            </div>
        </div>
    </div>
</section>

<!-- How It Works -->
<section class="home-section how-it-works-section">
    <div class="container-max">
        <div class="section-header" data-aos="fade-up">
            <span class="section-tag">Simple & Fast</span>
            <h2 class="section-title">Book Your Ride in 3 Easy Steps</h2>
            <p class="section-subtitle">Getting on the road with us is quick and hassle-free.</p>
        </div>

        <div class="steps-grid">
            <div class="step-card" data-aos="fade-up">
                <div class="step-number">01</div>
                <div class="step-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                    </svg>
                </div>
                <h3>Choose Your Destination</h3>
                <p>Enter your pickup and drop location. Select from Gujarat cities or enter custom address.</p>
            </div>

            <div class="step-card" data-aos="fade-up" data-aos-delay="100">
                <div class="step-number">02</div>
                <div class="step-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor">
                        <path d="M9 11H7v2h2v-2zm4 0h-2v2h2v-2zm4 0h-2v2h2v-2zm2-7h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V9h14v11z"/>
                    </svg>
                </div>
                <h3>Pick Date & Time</h3>
                <p>Schedule your ride for now or later. We offer 24/7 availability for your convenience.</p>
            </div>

            <div class="step-card" data-aos="fade-up" data-aos-delay="200">
                <div class="step-number">03</div>
                <div class="step-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor">
                        <path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/>
                    </svg>
                </div>
                <h3>Confirm & Ride</h3>
                <p>Get instant confirmation with driver details. Track your ride in real-time and enjoy the journey.</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="home-section home-contrast">
    <div class="container-max">
        <div class="section-header" data-aos="fade-up">
            <span class="section-tag">Our Services</span>
            <h2 class="section-title">Complete Taxi Solutions for Every Journey</h2>
            <p class="section-subtitle">From airport transfers to custom tours, we've got you covered.</p>
        </div>

        <div class="services-grid">
            <article class="service-box" data-aos="fade-up">
                <div class="service-box-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor">
                        <path d="M21 16v-2l-8-5V3.5c0-.83-.67-1.5-1.5-1.5S10 2.67 10 3.5V9l-8 5v2l8-2.5V19l-2 1.5V22l3.5-1 3.5 1v-1.5L13 19v-5.5l8 2.5z"/>
                    </svg>
                </div>
                <h3>Airport Transfer</h3>
                <p>Reliable pickup and drop services to all major airports with flight tracking.</p>
                <ul class="service-features">
                    <li>Flight delay monitoring</li>
                    <li>Meet & greet service</li>
                    <li>Luggage assistance</li>
                </ul>
                <a href="/booking" class="service-box-link">Book Now →</a>
            </article>

            <article class="service-box" data-aos="fade-up" data-aos-delay="100">
                <div class="service-box-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                    </svg>
                </div>
                <h3>City Rides</h3>
                <p>Quick and comfortable rides within Jamnagar and nearby cities.</p>
                <ul class="service-features">
                    <li>Instant booking</li>
                    <li>Affordable rates</li>
                    <li>Clean AC vehicles</li>
                </ul>
                <a href="/booking" class="service-box-link">Book Now →</a>
            </article>

            <article class="service-box" data-aos="fade-up" data-aos-delay="200">
                <div class="service-box-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2c-4.2 0-8 3.22-8 8.2 0 3.32 2.67 7.25 8 11.8 5.33-4.55 8-8.48 8-11.8C20 5.22 16.2 2 12 2zm0 10c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z"/>
                    </svg>
                </div>
                <h3>Outstation Trips</h3>
                <p>Explore Gujarat with our comfortable outstation taxi services.</p>
                <ul class="service-features">
                    <li>Flexible packages</li>
                    <li>Experienced drivers</li>
                    <li>Custom itineraries</li>
                </ul>
                <a href="/tours" class="service-box-link">View Tours →</a>
            </article>

            <article class="service-box" data-aos="fade-up" data-aos-delay="300">
                <div class="service-box-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor">
                        <path d="M14 6l-3.75 5 2.85 3.8-1.6 1.2C9.81 13.75 7 10 7 10l-6 8h22L14 6z"/>
                    </svg>
                </div>
                <h3>Temple Tours</h3>
                <p>Spiritual journeys to famous temples across Gujarat with guided assistance.</p>
                <ul class="service-features">
                    <li>Temple circuit routes</li>
                    <li>Darshan planning</li>
                    <li>Parking & guidance</li>
                </ul>
                <a href="/tours" class="service-box-link">Explore →</a>
            </article>

            <article class="service-box" data-aos="fade-up" data-aos-delay="400">
                <div class="service-box-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor">
                        <path d="M20 6h-4V4c0-1.11-.89-2-2-2h-4c-1.11 0-2 .89-2 2v2H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-6 0h-4V4h4v2z"/>
                    </svg>
                </div>
                <h3>Corporate Travel</h3>
                <p>Professional transportation solutions for business meetings and events.</p>
                <ul class="service-features">
                    <li>Executive vehicles</li>
                    <li>Monthly packages</li>
                    <li>Billing support</li>
                </ul>
                <a href="/services" class="service-box-link">Learn More →</a>
            </article>

            <article class="service-box" data-aos="fade-up" data-aos-delay="500">
                <div class="service-box-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor">
                        <path d="M17 12h-5v5h5v-5zM16 1v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2h-1V1h-2zm3 18H5V8h14v11z"/>
                    </svg>
                </div>
                <h3>Event Transport</h3>
                <p>Group transportation for weddings, parties, and special occasions.</p>
                <ul class="service-features">
                    <li>Multiple vehicles</li>
                    <li>Coordination service</li>
                    <li>Group discounts</li>
                </ul>
                <a href="/contact" class="service-box-link">Get Quote →</a>
            </article>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="home-section why-choose-section">
    <div class="container-max">
        <div class="section-header" data-aos="fade-up">
            <span class="section-tag">Why Choose Us</span>
            <h2 class="section-title">Your Trusted Travel Partner in Gujarat</h2>
            <p class="section-subtitle">Experience the difference with our premium services and customer-first approach.</p>
        </div>

        <div class="why-grid">
            <div class="why-card" data-aos="fade-up">
                <div class="why-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                    </svg>
                </div>
                <h3>12+ Years Experience</h3>
                <p>Over a decade of reliable taxi service across Gujarat with thousands of satisfied customers.</p>
            </div>

            <div class="why-card" data-aos="fade-up" data-aos-delay="100">
                <div class="why-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor">
                        <path d="M18.92 6.01C18.72 5.42 18.16 5 17.5 5h-11c-.66 0-1.21.42-1.42 1.01L3 12v8c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1h12v1c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-8l-2.08-5.99zM6.5 16c-.83 0-1.5-.67-1.5-1.5S5.67 13 6.5 13s1.5.67 1.5 1.5S7.33 16 6.5 16zm11 0c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM5 11l1.5-4.5h11L19 11H5z"/>
                    </svg>
                </div>
                <h3>Modern Fleet</h3>
                <p>Well-maintained, clean AC vehicles with GPS tracking and safety features.</p>
            </div>

            <div class="why-card" data-aos="fade-up" data-aos-delay="200">
                <div class="why-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor">
                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3>Verified Drivers</h3>
                <p>All drivers are background-checked, licensed, and trained for professional service.</p>
            </div>

            <div class="why-card" data-aos="fade-up" data-aos-delay="300">
                <div class="why-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor">
                        <path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/>
                    </svg>
                </div>
                <h3>24/7 Availability</h3>
                <p>Round-the-clock service for all your travel needs, any day of the year.</p>
            </div>

            <div class="why-card" data-aos="fade-up" data-aos-delay="400">
                <div class="why-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/>
                    </svg>
                </div>
                <h3>Local Expertise</h3>
                <p>Deep knowledge of Gujarat routes, shortcuts, and best travel times.</p>
            </div>

            <div class="why-card" data-aos="fade-up" data-aos-delay="500">
                <div class="why-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor">
                        <path d="M11.8 10.9c-2.27-.59-3-1.2-3-2.15 0-1.09 1.01-1.85 2.7-1.85 1.78 0 2.44.85 2.5 2.1h2.21c-.07-1.72-1.12-3.3-3.21-3.81V3h-3v2.16c-1.94.42-3.5 1.68-3.5 3.61 0 2.31 1.91 3.46 4.7 4.13 2.5.6 3 1.48 3 2.41 0 .69-.49 1.79-2.7 1.79-2.06 0-2.87-.92-2.98-2.1h-2.2c.12 2.19 1.76 3.42 3.68 3.83V21h3v-2.15c1.95-.37 3.5-1.5 3.5-3.55 0-2.84-2.43-3.81-4.7-4.4z"/>
                    </svg>
                </div>
                <h3>Transparent Pricing</h3>
                <p>No hidden charges. Get upfront fare estimates before you book.</p>
            </div>
        </div>
    </div>
</section>

<!-- Special Offers Section -->
<section class="py-20 md:py-28 bg-gradient-to-br from-[#1a3a52] via-[#0f2537] to-[#1a3a52] relative overflow-hidden">
    <!-- Animated Background -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-0 left-0 w-full h-full" style="background-image: url('data:image/svg+xml,%3Csvg width=&quot;100&quot; height=&quot;100&quot; viewBox=&quot;0 0 100 100&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;%3E%3Cpath d=&quot;M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z&quot; fill=&quot;%23ffffff&quot; fill-opacity=&quot;1&quot; fill-rule=&quot;evenodd&quot;/%3E%3C/svg%3E');"></div>
    </div>

    <!-- Floating Orbs -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-20 left-20 w-64 h-64 bg-yellow-400/20 rounded-full blur-3xl animate-float"></div>
        <div class="absolute bottom-20 right-20 w-80 h-80 bg-blue-400/15 rounded-full blur-3xl animate-float-delayed"></div>
    </div>

    <div class="container-max relative z-10">
        <div class="text-center mb-16">
            <div class="inline-flex items-center gap-2 px-5 py-2.5 bg-gradient-to-r from-yellow-400/30 to-orange-500/20 backdrop-blur-sm rounded-full mb-6 border border-yellow-400/30 animate-pulse">
                <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                </svg>
                <span class="text-sm font-bold text-yellow-400">Limited Time Offers</span>
            </div>
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white mb-4">
                Exclusive Deals This Month
            </h2>
            <p class="text-xl text-white/90 max-w-2xl mx-auto">
                Book these special packages and save up to 30% on your Gujarat adventure
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Offer 1 -->
            <div class="relative bg-white/10 backdrop-blur-md rounded-3xl p-8 border border-white/20 hover:border-yellow-400/50 transition-all duration-500 group hover:shadow-2xl hover:shadow-yellow-400/20 hover:-translate-y-2">
                <div class="absolute -top-4 -right-4 w-20 h-20 bg-gradient-to-br from-red-500 to-orange-500 rounded-full flex items-center justify-center shadow-lg animate-bounce-slow">
                    <span class="text-white font-black text-sm">-25%</span>
                </div>
                
                <div class="mb-6">
                    <div class="w-16 h-16 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-2xl flex items-center justify-center mb-4 group-hover:rotate-12 transition-transform duration-500">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-2">Weekend Special</h3>
                    <p class="text-white/80 leading-relaxed mb-4">2-day Gujarat coast tour with hotel stay</p>
                    <div class="flex items-baseline gap-2">
                        <span class="text-3xl font-extrabold text-yellow-400">₹5,999</span>
                        <span class="text-lg text-white/60 line-through">₹7,999</span>
                    </div>
                </div>
                
                <ul class="space-y-2 mb-6">
                    <li class="flex items-center gap-2 text-white/90">
                        <svg class="w-5 h-5 text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-sm">Dwarka + Somnath + Gir</span>
                    </li>
                    <li class="flex items-center gap-2 text-white/90">
                        <svg class="w-5 h-5 text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-sm">All meals included</span>
                    </li>
                    <li class="flex items-center gap-2 text-white/90">
                        <svg class="w-5 h-5 text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-sm">Hotel accommodation</span>
                    </li>
                </ul>
                
                <a href="/booking?tour=weekend-offer" class="block w-full text-center px-6 py-3.5 bg-gradient-to-r from-yellow-400 to-orange-500 text-[#1a3a52] font-bold rounded-xl hover:shadow-xl hover:shadow-yellow-400/30 transition-all duration-300 hover:scale-105">
                    Book Now & Save
                </a>
                
                <div class="mt-4 text-center">
                    <span class="text-xs text-white/70">⏰ Valid until Mar 31, 2026</span>
                </div>
            </div>

            <!-- Offer 2 -->
            <div class="relative bg-white/10 backdrop-blur-md rounded-3xl p-8 border border-white/20 hover:border-yellow-400/50 transition-all duration-500 group hover:shadow-2xl hover:shadow-yellow-400/20 hover:-translate-y-2">
                <div class="absolute -top-4 -right-4 w-20 h-20 bg-gradient-to-br from-green-500 to-teal-500 rounded-full flex items-center justify-center shadow-lg animate-bounce-slow" style="animation-delay: 0.5s;">
                    <span class="text-white font-black text-sm">-20%</span>
                </div>
                
                <div class="mb-6">
                    <div class="w-16 h-16 bg-gradient-to-br from-green-400 to-teal-500 rounded-2xl flex items-center justify-center mb-4 group-hover:rotate-12 transition-transform duration-500">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-2">Group Discount</h3>
                    <p class="text-white/80 leading-relaxed mb-4">Family package for 6+ people</p>
                    <div class="flex items-baseline gap-2">
                        <span class="text-3xl font-extrabold text-yellow-400">₹2,000</span>
                        <span class="text-lg text-white/60 line-through">₹2,500</span>
                        <span class="text-sm text-white/70">/person</span>
                    </div>
                </div>
                
                <ul class="space-y-2 mb-6">
                    <li class="flex items-center gap-2 text-white/90">
                        <svg class="w-5 h-5 text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-sm">Customizable itinerary</span>
                    </li>
                    <li class="flex items-center gap-2 text-white/90">
                        <svg class="w-5 h-5 text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-sm">Large vehicle provided</span>
                    </li>
                    <li class="flex items-center gap-2 text-white/90">
                        <svg class="w-5 h-5 text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-sm">Free photography</span>
                    </li>
                </ul>
                
                <a href="/booking?tour=group-offer" class="block w-full text-center px-6 py-3.5 bg-gradient-to-r from-green-400 to-teal-500 text-white font-bold rounded-xl hover:shadow-xl hover:shadow-green-400/30 transition-all duration-300 hover:scale-105">
                    Book for Group
                </a>
                
                <div class="mt-4 text-center">
                    <span class="text-xs text-white/70">⏰ Valid until Mar 31, 2026</span>
                </div>
            </div>

            <!-- Offer 3 -->
            <div class="relative bg-white/10 backdrop-blur-md rounded-3xl p-8 border border-white/20 hover:border-yellow-400/50 transition-all duration-500 group hover:shadow-2xl hover:shadow-yellow-400/20 hover:-translate-y-2">
                <div class="absolute -top-4 -right-4 w-20 h-20 bg-gradient-to-br from-purple-500 to-pink-500 rounded-full flex items-center justify-center shadow-lg animate-bounce-slow" style="animation-delay: 1s;">
                    <span class="text-white font-black text-sm">-30%</span>
                </div>
                
                <div class="mb-6">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-400 to-pink-500 rounded-2xl flex items-center justify-center mb-4 group-hover:rotate-12 transition-transform duration-500">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-2">Early Bird Special</h3>
                    <p class="text-white/80 leading-relaxed mb-4">Book 7+ days in advance</p>
                    <div class="flex items-baseline gap-2">
                        <span class="text-3xl font-extrabold text-yellow-400">₹1,750</span>
                        <span class="text-lg text-white/60 line-through">₹2,500</span>
                    </div>
                </div>
                
                <ul class="space-y-2 mb-6">
                    <li class="flex items-center gap-2 text-white/90">
                        <svg class="w-5 h-5 text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-sm">Any single-day tour</span>
                    </li>
                    <li class="flex items-center gap-2 text-white/90">
                        <svg class="w-5 h-5 text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-sm">Priority booking</span>
                    </li>
                    <li class="flex items-center gap-2 text-white/90">
                        <svg class="w-5 h-5 text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-sm">Free cancellation</span>
                    </li>
                </ul>
                
                <a href="/booking?tour=earlybird-offer" class="block w-full text-center px-6 py-3.5 bg-gradient-to-r from-purple-400 to-pink-500 text-white font-bold rounded-xl hover:shadow-xl hover:shadow-purple-400/30 transition-all duration-300 hover:scale-105">
                    Book Early & Save
                </a>
                
                <div class="mt-4 text-center">
                    <span class="text-xs text-white/70">⏰ Valid until Mar 31, 2026</span>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="mt-16 text-center">
            <p class="text-white/90 text-lg mb-6">
                🎉 Don't miss out! These exclusive offers are available for a limited time only.
            </p>
            <a href="/contact" class="inline-flex items-center gap-3 px-8 py-4 bg-white text-[#1a3a52] font-bold text-lg rounded-xl shadow-lg hover:shadow-2xl transform hover:scale-105 transition-all duration-300">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z"/>
                    <path d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z"/>
                </svg>
                <span>Have Questions? Contact Us</span>
            </a>
        </div>
    </div>
</section>

<!-- Fleet Experience -->
<section class="home-section home-contrast">
    <div class="container-max">
        <div class="experience-grid">
            <div class="experience-copy" data-aos="fade-right">
                <span class="section-tag">Fleet Experience</span>
                <h2 class="section-title">Quiet cabins, smooth routing, and dependable arrivals</h2>
                <p class="section-subtitle">Our fleet is tuned for comfort and tracked for real-time availability. Expect clean interiors, calm drivers, and consistent ETAs.</p>
                <div class="experience-points">
                    <div class="point">
                        <span class="point-number">01</span>
                        <div>
                            <h4>AC Comfort</h4>
                            <p>Every ride is climate controlled with hygiene checks.</p>
                        </div>
                    </div>
                    <div class="point">
                        <span class="point-number">02</span>
                        <div>
                            <h4>Live Support</h4>
                            <p>24/7 dispatch to adjust your route instantly.</p>
                        </div>
                    </div>
                    <div class="point">
                        <span class="point-number">03</span>
                        <div>
                            <h4>Trusted Local Drivers</h4>
                            <p>Experienced drivers who know Jamnagar roads deeply.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="experience-panel" data-aos="fade-left">
                <div class="experience-card">
                    <h3>Route Reliability</h3>
                    <div class="experience-meter">
                        <div class="meter-bar" style="width: 92%;"></div>
                    </div>
                    <div class="meter-labels">
                        <span>On-time</span>
                        <span>92%</span>
                    </div>
                </div>
                <div class="experience-card">
                    <h3>Cabin Comfort</h3>
                    <div class="experience-meter">
                        <div class="meter-bar" style="width: 95%;"></div>
                    </div>
                    <div class="meter-labels">
                        <span>Ratings</span>
                        <span>4.9/5</span>
                    </div>
                </div>
                <div class="experience-card highlight">
                    <h3>Instant Booking</h3>
                    <p>Average confirmation in under 90 seconds.</p>
                    <a href="/booking" class="btn-accent">Reserve Now</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Popular Destinations Section -->
<section class="py-12 sm:py-16 md:py-24 bg-white">
    <div class="container-max">
        <!-- Section Header -->
        <div class="text-center mb-8 sm:mb-12 px-4 sm:px-0">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-yellow-400/10 border border-yellow-400/30 rounded-full mb-4">
                <svg class="w-5 h-5 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                </svg>
                <span class="text-sm font-bold text-[#1a3a52]">Popular Destinations</span>
            </div>
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-extrabold text-[#1a3a52] mb-3 sm:mb-4">
                Explore Amazing Places
            </h2>
            <p class="text-sm sm:text-base md:text-lg text-gray-600 max-w-3xl mx-auto">
                Discover Gujarat's best cities and heritage sites
            </p>
        </div>

        <!-- Destinations Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 px-4 sm:px-0">
            
            <!-- Ahmedabad -->
            <div class="group relative bg-white rounded-2xl sm:rounded-3xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-500">
                <div class="relative h-48 sm:h-56 overflow-hidden">
                    <img src="{{ asset('images/tours/dwarka-temple-alt.jpg') }}" 
                         alt="Ahmedabad" 
                         class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute top-4 left-4 px-3 py-1.5 bg-orange-500 text-white text-xs font-bold rounded-full shadow-lg">
                        Heritage Hub
                    </div>
                </div>
                
                <div class="p-5">
                    <div class="flex items-center gap-2 text-gray-500 text-xs mb-2">
                        <svg class="w-4 h-4 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                        </svg>
                        <span class="font-semibold">290 km away</span>
                    </div>
                    
                    <h3 class="text-lg sm:text-xl font-bold text-[#1a3a52] mb-2 group-hover:text-yellow-600 transition-colors">Ahmedabad</h3>
                    <p class="text-sm text-gray-600 mb-3 sm:mb-4 line-clamp-2">UNESCO World Heritage City with Gandhi's Ashram and old city heritage</p>
                    
                    <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                        <div class="flex items-center gap-1 text-gray-700">
                            <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <span class="text-sm font-semibold">4.7 Rating</span>
                        </div>
                        <a href="/tours" class="inline-flex items-center gap-1 text-sm font-bold text-yellow-600 hover:text-yellow-700 transition-colors">
                            <span>View Tours</span>
                            <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Surat -->
            <div class="group relative bg-white rounded-2xl sm:rounded-3xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-500">
                <div class="relative h-48 sm:h-56 overflow-hidden">
                    <img src="{{ asset('images/tours/coastal-drive.jpg') }}" 
                         alt="Surat" 
                         class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute top-4 left-4 px-3 py-1.5 bg-green-500 text-white text-xs font-bold rounded-full shadow-lg">
                        Business City
                    </div>
                </div>
                
                <div class="p-5">
                    <div class="flex items-center gap-2 text-gray-500 text-xs mb-2">
                        <svg class="w-4 h-4 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                        </svg>
                        <span class="font-semibold">240 km away</span>
                    </div>
                    
                    <h3 class="text-xl font-bold text-[#1a3a52] mb-2 group-hover:text-yellow-600 transition-colors">Surat</h3>
                    <p class="text-sm text-gray-600 mb-4 line-clamp-2">Diamond city with textile heritage and modern attractions</p>
                    
                    <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                        <div class="flex items-center gap-1 text-gray-700">
                            <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <span class="text-sm font-semibold">4.6 Rating</span>
                        </div>
                        <a href="/tours" class="inline-flex items-center gap-1 text-sm font-bold text-yellow-600 hover:text-yellow-700 transition-colors">
                            <span>View Tours</span>
                            <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Vadodara -->
            <div class="group relative bg-white rounded-2xl sm:rounded-3xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-500">
                <div class="relative h-48 sm:h-56 overflow-hidden">
                    <img src="{{ asset('images/tours/statue-of-unity.jpg') }}" 
                         alt="Vadodara" 
                         class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute top-4 left-4 px-3 py-1.5 bg-purple-500 text-white text-xs font-bold rounded-full shadow-lg">
                        Cultural Hub
                    </div>
                </div>
                
                <div class="p-5">
                    <div class="flex items-center gap-2 text-gray-500 text-xs mb-2">
                        <svg class="w-4 h-4 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                        </svg>
                        <span class="font-semibold">365 km away</span>
                    </div>
                    
                    <h3 class="text-xl font-bold text-[#1a3a52] mb-2 group-hover:text-yellow-600 transition-colors">Vadodara</h3>
                    <p class="text-sm text-gray-600 mb-4 line-clamp-2">Royal city with palaces, museums and cultural heritage</p>
                    
                    <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                        <div class="flex items-center gap-1 text-gray-700">
                            <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <span class="text-sm font-semibold">4.8 Rating</span>
                        </div>
                        <a href="/tours" class="inline-flex items-center gap-1 text-sm font-bold text-yellow-600 hover:text-yellow-700 transition-colors">
                            <span>View Tours</span>
                            <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Kutch (Bhuj) -->
            <div class="group relative bg-white rounded-2xl sm:rounded-3xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-500">
                <div class="relative h-48 sm:h-56 overflow-hidden">
                    <img src="{{ asset('images/tours/kutch-desert.jpg') }}" 
                         alt="Kutch" 
                         class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute top-4 left-4 px-3 py-1.5 bg-rose-500 text-white text-xs font-bold rounded-full shadow-lg">
                        Desert Wonder
                    </div>
                </div>
                
                <div class="p-5">
                    <div class="flex items-center gap-2 text-gray-500 text-xs mb-2">
                        <svg class="w-4 h-4 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                        </svg>
                        <span class="font-semibold">340 km away</span>
                    </div>
                    
                    <h3 class="text-xl font-bold text-[#1a3a52] mb-2 group-hover:text-yellow-600 transition-colors">Kutch</h3>
                    <p class="text-sm text-gray-600 mb-4 line-clamp-2">White desert, vibrant culture and artisan heritage</p>
                    
                    <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                        <div class="flex items-center gap-1 text-gray-700">
                            <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <span class="text-sm font-semibold">4.9 Rating</span>
                        </div>
                        <a href="/tours" class="inline-flex items-center gap-1 text-sm font-bold text-yellow-600 hover:text-yellow-700 transition-colors">
                            <span>View Tours</span>
                            <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="home-section testimonials-section">
    <div class="container-max">
        <div class="section-header" data-aos="fade-up">
            <span class="section-tag">Testimonials</span>
            <h2 class="section-title">What Our Customers Say</h2>
            <p class="section-subtitle">Real experiences from people who trust us for their journeys.</p>
        </div>

        <div class="testimonials-grid">
            <div class="testimonial-card" data-aos="fade-up">
                <div class="rating">
                    <svg viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                </div>
                <p class="testimonial-text">"Excellent service! The driver was punctual, professional, and knew all the best routes. Made our Dwarka trip very comfortable and memorable."</p>
                <div class="testimonial-author">
                    <div class="author-avatar">RS</div>
                    <div>
                        <div class="author-name">Rajesh Shah</div>
                        <div class="author-location">Ahmedabad</div>
                    </div>
                </div>
            </div>

            <div class="testimonial-card" data-aos="fade-up" data-aos-delay="100">
                <div class="rating">
                    <svg viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                </div>
                <p class="testimonial-text">"Best taxi service in Jamnagar! Clean cars, reasonable prices, and friendly drivers. I use them for all my airport transfers. Highly recommended!"</p>
                <div class="testimonial-author">
                    <div class="author-avatar">PM</div>
                    <div>
                        <div class="author-name">Priya Mehta</div>
                        <div class="author-location">Jamnagar</div>
                    </div>
                </div>
            </div>

            <div class="testimonial-card" data-aos="fade-up" data-aos-delay="200">
                <div class="rating">
                    <svg viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                </div>
                <p class="testimonial-text">"Booked for our family trip to Somnath. The driver was extremely helpful and patient. Vehicle was spotless and we felt very safe throughout the journey."</p>
                <div class="testimonial-author">
                    <div class="author-avatar">AK</div>
                    <div>
                        <div class="author-name">Amit Kumar</div>
                        <div class="author-location">Rajkot</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="home-cta">
    <div class="container-max">
        <div class="cta-panel" data-aos="zoom-in">
            <div>
                <span class="section-tag">Ready To Roll</span>
                <h2 class="section-title">Reserve your next ride in minutes</h2>
                <p class="section-subtitle">Tell us your destination, we will handle the rest with a seamless pickup.</p>
            </div>
            <div class="cta-actions">
                <a href="/booking" class="btn-accent">Book Now</a>
                <a href="/contact" class="btn-outline">Talk to Dispatch</a>
            </div>
        </div>
    </div>
</section>
@endsection

@section('extra_js')
<script src="{{ asset('js/home.js') }}"></script>
@endsection
