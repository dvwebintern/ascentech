@extends('layouts.app')

@section('title', 'Services')

@section('content')

<div
    class="mobile-site-header"
    x-data="{ mobileMenuOpen: false }"
>
    <div class="mobile-site-header-inner">
 
        <a href="{{ route('home') }}" class="mobile-site-logo">
            <img src="{{ asset('images/logo.svg') }}" alt="ASCENTech">
        </a>
 
       <button
    type="button"
    class="mobile-menu-toggle"
    @click="mobileMenuOpen = !mobileMenuOpen"
    :class="{ 'menu-open': mobileMenuOpen }"
    :aria-label="mobileMenuOpen ? 'Close Menu' : 'Open Menu'"
>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
</button>
 
    </div>
 
    {{-- MOBILE MENU --}}
    <div
        class="mobile-menu-panel"
        x-show="mobileMenuOpen"
        x-cloak
        x-data="{ productsOpen: false, insightsOpen: false }"
    >
        <div class="mobile-menu-panel-inner">
 
            <a
                href="{{ route('home') }}"
                class="mobile-menu-link {{ request()->routeIs('home') ? 'mobile-menu-active' : '' }}"
            >
                Home
            </a>
 
            <a
                href="{{ route('about') }}"
                class="mobile-menu-link {{ request()->routeIs('about') ? 'mobile-menu-active' : '' }}"
            >
                About Us
            </a>
 
            <div class="mobile-menu-dropdown">
                <button
                    type="button"
                    class="mobile-menu-link mobile-menu-dropdown-toggle"
@click="productsOpen = !productsOpen; insightsOpen = false"                >
                    <span>Products</span>
                    <svg
                        class="mobile-menu-chevron"
                        :class="{ 'mobile-menu-chevron-open': productsOpen }"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                    >
                        <path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <div class="mobile-menu-submenu" x-show="productsOpen" x-collapse x-cloak>
                    <a href="{{ route('products.nagarkaryavali') }}">Nagarkaryavali</a>
                    <a href="{{ route('products.banking') }}">Banking Solutions</a>
                </div>
            </div>
 
            <a
                href="{{ route('services') }}"
                class="mobile-menu-link {{ request()->routeIs('services') ? 'mobile-menu-active' : '' }}"
            >
                Services
            </a>
 
            <div class="mobile-menu-dropdown">
                <button
                    type="button"
                    class="mobile-menu-link mobile-menu-dropdown-toggle"
@click="insightsOpen = !insightsOpen; productsOpen = false"                >
                    <span>Insights</span>
                    <svg
                        class="mobile-menu-chevron"
                        :class="{ 'mobile-menu-chevron-open': insightsOpen }"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                    >
                        <path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <div class="mobile-menu-submenu" x-show="insightsOpen" x-collapse x-cloak>
                    <a href="{{ route('awards') }}">Award and Certification</a>
                    <a href="{{ route('events') }}">Events</a>
                    <a href="{{ route('news') }}">News &amp; Media</a>
                </div>
            </div>
 
            <a
                href="{{ route('careers') }}"
                class="mobile-menu-link {{ request()->routeIs('careers') ? 'mobile-menu-active' : '' }}"
            >
                Careers
            </a>
 
            <a
                href="{{ route('contact') }}"
                class="mobile-menu-link {{ request()->routeIs('contact') ? 'mobile-menu-active' : '' }}"
            >
                Contact Us
            </a>
 
        </div>
    </div>
</div>

    {{-- =========================================================
     MOBILE BOTTOM NAVIGATION
     MOBILE ONLY
========================================================= --}}
<nav class="mobile-bottom-nav">

    <a href="{{ route('home') }}" class="mobile-bottom-item active">
        <span class="mobile-bottom-icon">
            <i class="fa-solid fa-house"></i>
        </span>
        <span>Home</span>
    </a>

    <a href="{{ route('about') }}" class="mobile-bottom-item">
        <span class="mobile-bottom-icon">
            <i class="fa-solid fa-building"></i>
        </span>
        <span>About Us</span>
    </a>

    <a href="{{ route('products.nagarkaryavali') }}" class="mobile-bottom-item">
        <span class="mobile-bottom-icon">
            <i class="fa-solid fa-display"></i>
        </span>
        <span>Products</span>
    </a>

    <a href="{{ route('services') }}" class="mobile-bottom-item">
        <span class="mobile-bottom-icon">
            <i class="fa-solid fa-gear"></i>
        </span>
        <span>Services</span>
    </a>

    <a href="tel:+918657953083" class="mobile-bottom-item">
        <span class="mobile-bottom-icon">
            <i class="fa-solid fa-phone"></i>
        </span>
        <span>Call Us</span>
    </a>

    <a href="https://wa.me/918657953083"
       class="mobile-bottom-item"
       target="_blank"
       rel="noopener">

        <span class="mobile-bottom-icon">
            <i class="fa-brands fa-whatsapp"></i>
        </span>

        <span>WhatsApp</span>
    </a>

</nav>

{{-- HERO --}}

<section
    class="hero-section"
    x-data="{ scrolled: false }"
    x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 500 })"
>

    <div class="hero-bg">

        {{-- DESKTOP HEADER ONLY --}}
        <div class="desktop-hero-header">
            @include('partials.header')
        </div>
        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-title">Experts In IT Services And E-Governance
</h1>

                <p class="hero-subtitle">
Services that make everything manageable together
                </p>
            </div>
            <div class="hero-graphic">
                <img src="{{ asset('images/services/graphic 1000x1000 blue.png') }}" alt="" class="hero-graphic-img">
            </div>
        </div>
    </div>
    
    {{-- Floating nav + CTA row --}}
<div class="hero-float-row" x-show="!scrolled" x-transition.opacity>
        <div class="hero-float-inner">
            <div class="hero-float-nav">
                @include('partials.nav-links')
            </div>
        </div>
    </div>

    {{-- Sticky cloned bar on scroll --}}
    <div class="hero-sticky-bar" x-show="scrolled"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 -translate-y-4"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-cloak>
        <div class="hero-sticky-inner">
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/logo.svg') }}" alt="ASCENTech" class="hero-sticky-logo">
            </a>
            <div class="hero-sticky-nav">
                @include('partials.nav-links')
            </div>
        </div>
    </div>

</section>
{{-- =========================================================
     SERVICES PAGE CONTENT
     Place this AFTER your existing HERO section
========================================================= --}}

{{-- =========================================================
     SERVICES WE PROVIDE
========================================================= --}}

<section class="services-page-section">

    <div class="services-page-container">

        <div class="services-page-heading">

            <h2>Services <span style="color:#11199b;">We Provide</span></h2>

            <p>Best fit for Urban Local Bodies and businesses</p>

        </div>


        <div class="services-list">


            {{-- =================================================
                 SERVICE 1
            ================================================== --}}

            <div class="service-row">

                <div class="service-image">

                    <img
                        src="{{ asset('images/AI-Solutions.webp') }}"
                        alt="AI Solutions">

                </div>

                <div class="service-content">

                    <h3>AI Solutions</h3>

                    <p>
                        ASCENTech delivers advanced AI solutions designed to
                        automate processes, enhance decision-making and drive
                        business efficiency. From intelligent data analysis
                        and machine learning models to AI-powered chatbots
                        and predictive systems, AI solutions are built for
                        seamless integration with existing infrastructure.
                    </p>

                    <ul>

                        <li>Smart, data-driven solutions</li>
                        <li>Real-time data synchronization</li>
                        <li>Deep integration and tracking</li>
                        <li>AI-powered automation</li>
                        <li>Support for vast data storage</li>

                    </ul>

                    <a href="{{ route('contact') }}" class="service-enquire-btn">
                        Enquire Now <span>›</span>
                    </a>

                </div>

            </div>


            {{-- =================================================
                 SERVICE 2
            ================================================== --}}

            <div class="service-row service-row-reverse">

                <div class="service-image">

                    <img
                        src="{{ asset('images/Software-Development.webp') }}"
                        alt="Software Development">

                </div>

                <div class="service-content">

                    <h3>Software Development</h3>

                    <p>
                        Comprehensive ERP solutions for Urban Local Bodies
                        (ULBs). ERP solutions improve day-to-day digital
                        operations and streamline organisational workflows.
                    </p>

                    <ul>

                        <li>Single integrated solution</li>
                        <li>Tech-savvy system architecture</li>
                        <li>Cloud-based applications</li>
                        <li>Ongoing maintenance & support</li>

                    </ul>

                    <a href="{{ route('contact') }}" class="service-enquire-btn">
                        Enquire Now <span>›</span>
                    </a>

                </div>

            </div>


            {{-- =================================================
                 SERVICE 3
            ================================================== --}}

            <div class="service-row">

                <div class="service-image">

                    <img
                        src="{{ asset('images/services/Data Analyst.jpg') }}"
                        alt="Data Analysis">

                </div>

                <div class="service-content">

                    <h3>Data Analysis</h3>

                    <p>
                        Regardless of size, big or little, the important
                        information gets collected and often becomes confusing.
                        With our professional data analytics service, we
                        accurately analyse key information with reports from
                        the past up to determine what to do next.
                    </p>

                    <ul>

                        <li>Make informed decisions</li>
                        <li>Provide a better experience to the users</li>
                        <li>Get detailed reports</li>
                        <li>Get supported with forecasting</li>
                        <li>Control the government expenses</li>

                    </ul>

                    <a href="{{ route('contact') }}" class="service-enquire-btn">
                        Enquire Now <span>›</span>
                    </a>

                </div>

            </div>


            {{-- =================================================
                 SERVICE 4
            ================================================== --}}

            <div class="service-row service-row-reverse">

                <div class="service-image">

                    <img
                        src="{{ asset('images/Technical-Consultancy.webp') }}"
                        alt="Technical Consultancy">

                </div>

                <div class="service-content">

                    <h3>Technical Consultancy</h3>

                    <p>
                        Technological advancements benefit, but only when
                        handled carefully. At ASCENTech, technical consultation
                        is about understanding your current digital maturity,
                        identifying system vulnerabilities, improving your
                        cybersecurity and helping you with compliance.
                    </p>

                    <ul>

                        <li>Advanced cybersecurity solutions</li>
                        <li>Help with simplifying legacy audits</li>
                        <li>Assistance in upgrading applications</li>
                        <li>
                            Guidance on integrating multiple management systems
                        </li>
                        <li>Solutions to reduce infrastructure costs</li>

                    </ul>

                    <a href="{{ route('contact') }}" class="service-enquire-btn">
                        Enquire Now <span>›</span>
                    </a>

                </div>

            </div>


            {{-- =================================================
                 SERVICE 5
            ================================================== --}}

            <div class="service-row">

                <div class="service-image">

                    <img
                        src="{{ asset('images/System-Integration-2.webp') }}"
                        alt="System Integration">

                </div>

                <div class="service-content">

                    <h3>System Integration</h3>

                    <p>
                        An E-Governance system has to overcome location,
                        working, HR and employee records, citizen complaints
                        and more. With our system integration service, you get
                        streamlined access, mobile applications and complete
                        integration.
                    </p>

                    <ul>

                        <li>Operational costs become predictable</li>
                        <li>Get immediate access to important business data</li>
                        <li>Manage integrations easily</li>
                        <li>Trace data in real-time</li>
                        <li>New data sources can be added easily</li>

                    </ul>

                    <a href="{{ route('contact') }}" class="service-enquire-btn">
                        Enquire Now <span>›</span>
                    </a>

                </div>

            </div>


            {{-- =================================================
                 SERVICE 6
            ================================================== --}}

            <div class="service-row service-row-reverse">

                <div class="service-image">

                    <img
                        src="{{ asset('images/services/Web Development.jpg') }}"
                        alt="Web Development">

                </div>

                <div class="service-content">

                    <h3>Web Development</h3>

                    <p>
                        A website works as a modern business card. It helps
                        clients conduct research about an organisation.
                        Our web development services create user-friendly
                        websites that help businesses grow.
                    </p>

                    <ul>

                        <li>Highly secured and simplified systems</li>
                        <li>Timely enhancements</li>
                        <li>Custom features according to requirements</li>
                        <li>Focus on scalability</li>
                        <li>Citizen-centric platforms</li>

                    </ul>

                    <a href="{{ route('contact') }}" class="service-enquire-btn">
                        Enquire Now <span>›</span>
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     TRUSTED PARTNER
========================================================= --}}

<section class="trusted-partner-section">

    <div class="trusted-partner-container">

        <div class="trusted-heading">

            <h2>
                Your Trusted Partner for
                <span>IT Solutions</span>
            </h2>

            <p>
                Combining experience and compliance
            </p>

        </div>


        <div class="trusted-features">

            <div class="trusted-feature">

                <div class="trusted-icon">

                    <img
                        src="{{ asset('images/services/Consultation by experts.svg') }}"
                        alt="">

                </div>

                <div>

                    <h3>Consultation by</h3>

                    <p>experts</p>

                </div>

            </div>


            <div class="trusted-feature">

                <div class="trusted-icon">

                    <img
                        src="{{ asset('images/services/End-to-end solutions.svg') }}"
                        alt="">

                </div>

                <div>

                    <h3>End-to-end</h3>

                    <p>solutions</p>

                </div>

            </div>


            <div class="trusted-feature">

                <div class="trusted-icon">

                    <img
                        src="{{ asset('images/services/Cost-effective implementation.svg') }}"
                        alt="">

                </div>

                <div>

                    <h3>Cost-effective</h3>

                    <p>implementation</p>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     FAQ
========================================================= --}}

<section class="services-faq-section">

    <div class="services-faq-container">

        <div class="services-faq-heading">

            <h2>FAQs</h2>

        </div>


        <div class="services-faq-list" x-data="{ open: null }">


            <div class="service-faq-item">

                <button
                    type="button"
                    class="service-faq-question"
                    @click="open = open === 1 ? null : 1">

                    <span>What is the ERP?</span>

                    <span
                        class="faq-plus"
                        :class="{ 'faq-open': open === 1 }">
                        +
                    </span>

                </button>

                <div
                    class="service-faq-answer"
                    x-show="open === 1"
                    x-collapse>

                    <p>
                        ERP is an integrated system that helps organisations
                        manage and streamline their business operations,
                        data and processes through a single platform.
                    </p>

                </div>

            </div>


            <div class="service-faq-item">

                <button
                    type="button"
                    class="service-faq-question"
                    @click="open = open === 2 ? null : 2">

                    <span>
                        What are the benefits of the ERP system?
                    </span>

                    <span
                        class="faq-plus"
                        :class="{ 'faq-open': open === 2 }">
                        +
                    </span>

                </button>

                <div
                    class="service-faq-answer"
                    x-show="open === 2"
                    x-collapse>

                    <p>
                        ERP systems help improve efficiency, centralise
                        information, simplify workflows, improve reporting
                        and support better decision-making.
                    </p>

                </div>

            </div>


            <div class="service-faq-item">

                <button
                    type="button"
                    class="service-faq-question"
                    @click="open = open === 3 ? null : 3">

                    <span>
                        Is the ERP system customisable for different industries?
                    </span>

                    <span
                        class="faq-plus"
                        :class="{ 'faq-open': open === 3 }">
                        +
                    </span>

                </button>

                <div
                    class="service-faq-answer"
                    x-show="open === 3"
                    x-collapse>

                    <p>
                        Yes. ERP solutions can be configured according to
                        the specific workflows, requirements and processes
                        of different organisations.
                    </p>

                </div>

            </div>


            <div class="service-faq-item">

                <button
                    type="button"
                    class="service-faq-question"
                    @click="open = open === 4 ? null : 4">

                    <span>
                        Can the ERP system integrate with existing software?
                    </span>

                    <span
                        class="faq-plus"
                        :class="{ 'faq-open': open === 4 }">
                        +
                    </span>

                </button>

                <div
                    class="service-faq-answer"
                    x-show="open === 4"
                    x-collapse>

                    <p>
                        Yes. ERP systems can integrate with existing
                        applications and databases to create a connected
                        technology ecosystem.
                    </p>

                </div>

            </div>


            <div class="service-faq-item">

                <button
                    type="button"
                    class="service-faq-question"
                    @click="open = open === 5 ? null : 5">

                    <span>
                        Is cloud-based ERP secure?
                    </span>

                    <span
                        class="faq-plus"
                        :class="{ 'faq-open': open === 5 }">
                        +
                    </span>

                </button>

                <div
                    class="service-faq-answer"
                    x-show="open === 5"
                    x-collapse>

                    <p>
                        Cloud-based ERP can provide strong security through
                        access controls, authentication, backups and
                        continuous monitoring when implemented correctly.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<section class="services-bottom-cta">
    <div class="services-bottom-cta-inner">
        <div class="services-cta-content">
            <h2>Upgrade To A <span>Smarter Governance System</span></h2>
            <p>Discuss your project requirements with our team</p>
            <a href="{{ route('contact') }}" class="services-cta-btn">Contact Us <span>↗</span></a>
        </div>
        <div class="services-cta-image">
            <img src="{{ asset('images/nagarkaryawali/CTA nagarkaryavali.png') }}" alt="ASCENTech IT Services">
        </div>
    </div>
</section>

<style>

/* ===================== GLOBAL HELPERS ===================== */

.text-center {
    text-align: center;
}

.mb-12 {
    margin-bottom: 48px;
}


/* ===================== HERO ===================== */

.hero-section {
    position: relative;
}

.hero-bg {
    width: calc(100% - 30px);
    background-image: url('{{ asset('images/services/Services Page Banner 1200x500px.png') }}');
    background-size: cover;
    background-position: center center;
    aspect-ratio: 1600 / 500;
    border-radius: 20px;
    min-height: 600px;
    margin: 15px auto;
    color: #fff;
    position: relative;
    overflow: hidden;
}

.hero-content {
    max-width: 1600px;
    margin: 0 auto;
    padding: 8px 60px 112px;
    display: grid;
    grid-template-columns: 1fr;
    gap: 32px;
    align-items: center;
}

.hero-text {
    padding-left: clamp(24px, 6vw, 110px);
    padding-top: clamp(60px, 12vw, 170px);
}

.hero-title {
    margin-top:-60px;
    margin-bottom: 24px;
    max-width: 750px;
    font-family: "Inter Tight", sans-serif;
    font-size: clamp(32px, 3.5vw, 53px);
    font-weight: 600;
    line-height: 1.2em;
}

.hero-subtitle {
    font-size: 18px;
    color: #e5e7eb;
    margin-bottom: 0px;
    max-width: 550px;
}

.hero-trust {
    font-size: 18px;
    color: #e5e7eb;
    margin-bottom: 40px;
    max-width: 750px;
}

.hero-graphic {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}

.hero-graphic-img {
    width: 100%;
    max-width: 450px;
    margin-right: clamp(24px, 6vw, 110px);
}

@media (min-width: 1024px) {

    .hero-content {
        grid-template-columns: 1fr 1fr;
    }

    .hero-graphic {
        justify-content: flex-end;
    }

}

.hero-float-row {
    max-width: 1600px;
    margin: -80px auto 0;
    position: relative;
    z-index: 10;
    padding: 0 8px;
}

.hero-float-inner {
    display: flex;
    flex-wrap: nowrap;
    align-items: center;
    justify-content: space-between;
    gap: 24px;
    padding: 0 56px 24px;
    overflow-x: auto;
}

.hero-float-nav {
    display: none;
    margin-left: 35px;
}

.hero-float-buttons {
    display: flex;
    gap: 16px;
    flex-shrink: 0;
}

@media (min-width: 1024px) {

    .hero-float-nav {
        display: block;
    }

}

.btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 9px 26px;
    border-radius: 999px;
    font-size: 17px;
    font-weight: 500;
    text-decoration: none;
    transition: background 0.2s ease, color 0.2s ease;
    white-space: nowrap;
}

.btn-accent {
    background: #1990c9;
    color: #fff;
}

.btn-accent:hover {
    background: #1990c9;
}

.btn-outline-white {
    border: 1px solid #fff;
    color: #fff;
}

.btn-outline-white:hover {
    background: rgba(255,255,255,0.1);
}

.btn-outline-primary {
    border: 1px solid #2E3192;
    color: #2E3192;
}

.btn-outline-primary:hover {
    background: #f3f4f6;
}

.hero-sticky-bar {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 50;
    padding: 12px 16px 0;
}

.hero-sticky-inner {
    max-width: 1200px;
    margin: 0 auto;
    background: #fff;
    border-radius: 16px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    padding: 12px 24px;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
    gap: 16px;
    color: #2E3192;
}

.hero-sticky-logo {
    height: 32px;
}

.hero-sticky-nav {
    display: none;
}

.hero-sticky-buttons {
    display: flex;
    align-items: center;
    gap: 12px;
}

.hero-sticky-call {
    display: none;
}

@media (min-width: 1024px) {

    .hero-sticky-nav {
        display: block;
    }

}

@media (min-width: 1280px) {

    .hero-sticky-call {
        display: inline-flex;
    }

}


/* =========================================================
   DROPDOWN FIX
========================================================= */

/* Floating header must allow dropdowns to escape */

.hero-float-row,
.hero-float-inner,
.hero-float-nav {
    overflow: visible !important;
}

.hero-float-row {
    z-index: 1000 !important;
}

.hero-float-inner {
    position: relative;
}


/* Sticky header */

.hero-sticky-bar {
    z-index: 99999 !important;
    overflow: visible !important;
}

.hero-sticky-inner {
    position: relative;
    overflow: visible !important;
    z-index: 99999 !important;
}

.hero-sticky-nav {
    position: relative;
    z-index: 100000 !important;
    overflow: visible !important;
}


/* =========================================================
   NAV DROPDOWN
========================================================= */

/* Allow all parent elements to show dropdown */

.hero-float-nav *,
.hero-sticky-nav * {
    overflow: visible;
}


/* Dropdown itself */

.hero-float-nav ul ul,
.hero-sticky-nav ul ul,
.hero-float-nav .sub-menu,
.hero-sticky-nav .sub-menu {
    z-index: 999999 !important;
}


/* Make sure dropdown stays above the hero/content */

.hero-float-nav,
.hero-sticky-nav {
    isolation: auto;
}


/* =========================================================
   IMPORTANT:
   REMOVE HORIZONTAL SCROLL FROM FLOATING HEADER
========================================================= */

.hero-float-inner {
    overflow-x: visible !important;
    overflow-y: visible !important;
}


/* =========================================================
   DESKTOP ONLY
========================================================= */

@media (min-width: 1024px) {

    .hero-float-nav,
    .hero-sticky-nav {
        display: block;
        position: relative;
    }

    .hero-float-row {
        overflow: visible !important;
    }

    .hero-float-inner {
        overflow: visible !important;
    }

}


/* =========================================================
   SERVICES PAGE
========================================================= */

.services-page-section {
    padding: 45px 0 25px;
    background: #fff;
}

.services-page-container {
    width: min(1200px, calc(100% - 40px));
    margin: 0 auto;
}


/* =========================================================
   HEADING
========================================================= */

.services-page-heading {
    text-align: center;
    margin-bottom: 20px;
}

.services-page-heading h2 {
    margin: 0;
    font-family: "Inter Tight", sans-serif;
    font-size: 40px;
    line-height: 1.1;
    font-weight: 600;
    color: #111;
}

.services-page-heading p {
    margin: 3px 0 0;
    font-size: 16px;
    color: #777;
}


/* =========================================================
   SERVICES LIST
========================================================= */

.services-list {
    display: flex;
    flex-direction: column;
    gap: 8px;
}


/* =========================================================
   SERVICE ROW
========================================================= */

.service-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    min-height: 145px;
    border: 1px solid #dedede;
    margin-bottom:20px;
    border-radius: 15px;
    padding:15px;
    overflow: hidden;
    background: #fff;
}


/* IMAGE */

.service-image {
    min-height: 145px;
    overflow: hidden;
}

.service-image img {
    width: 100%;
    height: 420px;
    display: block;
    object-fit: cover;
    border-radius:10px;
    transition: transform .3s ease;
}

.service-row:hover .service-image img {
    transform: scale(1.025);
    border-radius:10px;
}


/* ALTERNATING */

.service-row-reverse .service-image {
    order: 2;
}

.service-row-reverse .service-content {
    order: 1;
}


/* =========================================================
   SERVICE CONTENT
========================================================= */

.service-content {
    padding: 9px 30px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.service-content h3 {
    margin: 0 0 5px;
    font-family: "Inter Tight", sans-serif;
    font-size: 28px;
    line-height: 1.15;
    font-weight: 600;
    color: #111;
}

.service-content p {
    margin: 0 0 12px;
    font-size: 16px;
    line-height: 1.35;
    color: #303030;
}

.service-content ul {
    margin: 0 0 4px;
    padding-left: 11px;
    list-style-type:dot;
}

.service-content li {
    margin-bottom: 11px;
    font-size: 16px;
    line-height: 1.25;
    color: #222;
}


/* =========================================================
   ENQUIRE BUTTON
========================================================= */

.service-enquire-btn {
    display: inline-flex;
    align-items: center;
    gap: 3px;
    width: fit-content;
    padding: 8px 20px;
    border: 1px solid #1717a0;
    border-radius: 30px;
    color: #1717a0;
    background: #fff;
    font-size: 16px;
    line-height: 1;
    text-decoration: none;
    transition: all .2s ease;
}

.service-enquire-btn span {
    font-size: 20px;
}

.service-enquire-btn:hover {
    background: #1717a0;
    color: #fff;
}


/* =========================================================
   TRUSTED PARTNER
========================================================= */

.trusted-partner-section {
    padding: 30px 0 25px;
    background: #fff;
}

.trusted-partner-container {
    width: min(850px, calc(100% - 40px));
    margin: 0 auto;
}

.trusted-heading {
    text-align: center;
    margin-bottom: 15px;
}

.trusted-heading h2 {
    margin: 0;
    font-family: "Inter Tight", sans-serif;
    font-size: 40px;
    font-weight: 600;
    color: #111;
}

.trusted-heading h2 span {
    color: #080c91;
}

.trusted-heading p {
    margin: 2px 0 0;
    font-size: 16px;
    color: #777;
}


/* FEATURES */

.trusted-features {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
}

.trusted-feature {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    min-height: 55px;
    border-right: 1px solid #ddd;
}

.trusted-feature:last-child {
    border-right: 0;
}

.trusted-icon {
    width: 60px;
    height: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.trusted-icon img {
    width: 60px;
    height: 60px;
    object-fit: contain;
}

.trusted-feature h3 {
    margin: 0;
    font-size: 18px;
    line-height: 1.2;
    font-weight: 400;
    color: #222;
}

.trusted-feature p {
    margin: 2px 0 0;
    font-size: 18px;
    line-height: 1;
    color: #333;
}


/* =========================================================
   FAQ
========================================================= */

.services-faq-section {
    padding: 20px 0 35px;
    background: #fff;
}

.services-faq-container {
    width: min(950px, calc(100% - 40px));
    margin: 0 auto;
}

.services-faq-heading {
    text-align: center;
    margin-bottom: 15px;
}

.services-faq-heading h2 {
    margin: 0;
    font-family: "Inter Tight", sans-serif;
    font-size: 40px;
    font-weight: 600;
    color: #111;
}


/* FAQ ITEM */

.service-faq-item {
    border-bottom: 1px solid #e7e7e7;
}

.service-faq-question {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 12px 4px;
    border: 0;
    background: transparent;
    cursor: pointer;
    text-align: left;
    font-family: inherit;
    font-size: 17px;
    color: #111;
}

.faq-plus {
    font-size: 16px;
    color: #999;
    transition: transform .2s ease;
}

.faq-open {
    transform: rotate(45deg);
}

.service-faq-answer {
    padding: 0 4px 9px;
}

.service-faq-answer p {
    margin: 0;
    max-width: 850px;
    font-size: 16px;
    line-height: 1.5;
    color: #555;
}


/* =========================================================
   MOBILE HEADER + MOBILE NAV
   DOES NOT CHANGE DESKTOP
========================================================= */

/* Hidden by default */
.mobile-site-header,
.mobile-bottom-nav {
    display: none;
}


/* =========================================================
   NAV SWAP — PHONE + TABLET
   Extended from 767px to 1023px so tablet-width screens
   (768–1023px) also get a working navigation menu, since
   the desktop float/sticky nav only appears at ≥1024px.
========================================================= */

@media (max-width: 1023px) {

    /* -----------------------------------------------------
       REMOVE DESKTOP HEADER ELEMENTS ON MOBILE/TABLET
    ----------------------------------------------------- */

    .desktop-hero-header {
        display: none !important;
    }

    .hero-float-row {
        display: none !important;
    }

    .hero-sticky-bar {
        display: none !important;
    }


    /* -----------------------------------------------------
       MOBILE/TABLET TOP HEADER
    ----------------------------------------------------- */

    .mobile-site-header {
        display: block;
        position: sticky;
        top: 8px;
        z-index: 999999;
        width: calc(100% - 20px);
        margin: 8px auto 10px;
    }

    .mobile-site-header-inner {
        width: 100%;
        height: 58px;
        background: #fff;
        border: 1px solid #e7e7e7;
        border-radius: 17px;
        box-shadow: 0 3px 12px rgba(0, 0, 0, 0.08);

        display: flex;
        align-items: center;
        justify-content: space-between;

        padding: 0 13px;
    }

    .mobile-site-logo {
        display: flex;
        align-items: center;
        text-decoration: none;
    }

    .mobile-site-logo img {
        display: block;
        width: auto;
        height: 34px;
        max-width: 145px;
        object-fit: contain;
    }
.mobile-menu-toggle {
    width: 50px;
    height: 50px;
    border: 0;
    background: transparent;

    display: grid;
    grid-template-columns: repeat(3, 5px);
    grid-template-rows: repeat(3, 5px);
    gap: 4px;

    align-content: center;
    justify-content: center;
    align-items: center;
    justify-items: center;

    padding: 0;
    margin: 0;
    cursor: pointer;
}

.mobile-menu-toggle span {
    display: block;
    width: 5px;
    height: 5px;
    background: #2E3192;
    border-radius: 50%;
}

/* OPEN — instantly become X */
.mobile-menu-toggle.menu-open {
    display: flex;
    align-items: center;
    justify-content: center;
}

.mobile-menu-toggle.menu-open span {
    position: absolute;
    width: 24px;
    height: 3px;
    border-radius: 3px;
    background: #2E3192;
}

/* X */
.mobile-menu-toggle.menu-open span:nth-child(1) {
    transform: rotate(45deg);
}

.mobile-menu-toggle.menu-open span:nth-child(2) {
    transform: rotate(-45deg);
}

/* Hide remaining dots */
.mobile-menu-toggle.menu-open span:nth-child(n+3) {
    display: none;
}
   /* -----------------------------------------------------
   MOBILE DROPDOWN MENU
----------------------------------------------------- */

.mobile-menu-panel {
    margin-top: 7px;
    background: #fff;
    border-radius: 16px;
    border: 1px solid #e5e7eb;
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.12);
    overflow: hidden;
}

.mobile-menu-panel-inner {
    display: flex;
    flex-direction: column;
    padding: 8px;
}

/* Main menu items */
.mobile-menu-panel-inner a {
    display: flex;
    align-items: center;
    justify-content: flex-start;

    width: 100%;
    min-height: 46px;

    padding: 11px 14px;

    color: #111827;
    font-size: 15px;
    font-weight: 500;
    text-decoration: none;

    border-radius: 10px;

    text-align: left;
}

/* Dropdown buttons - same alignment as links */
.mobile-menu-dropdown-toggle {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100%;
    min-height: 46px;
    padding: 11px 14px;
    margin: 0;
    border: 0;
    background: transparent;
    color: #111827;
    font-size: 15px;
    font-weight: 500;
    text-align: left;
    cursor: pointer;
}

.mobile-menu-dropdown-toggle > span {
    flex: 1;
    text-align: left;
}

.mobile-menu-chevron {
    width: 18px;
    height: 18px;
    margin-left: auto;
    flex-shrink: 0;
}
/* Submenu alignment */
.mobile-menu-submenu {
    padding-left: 10px;
}

.mobile-menu-submenu a {
    padding-left: 14px;
    min-height: 42px;
    text-align: left;
}

/* Pressed state */
.mobile-menu-panel-inner a:active {
    background: #f3f4f8;
}

/* Call button - keep centered */
.mobile-menu-panel-inner .mobile-menu-call {
    background: #2E3192;
    color: #fff;
    text-align: center;
    justify-content: center;
    margin-top: 5px;
}
}
/* =====================================================
   MENU VISUAL STYLING ONLY
   Does NOT change menu functionality
===================================================== */

/* Main menu box */
.mobile-menu-panel {
    background: #ffffff;
    border: 1px solid #e6e7ef;
    border-radius: 18px;
    box-shadow: 0 10px 28px rgba(30, 32, 80, 0.12);
}


/* Menu spacing */
.mobile-menu-panel-inner {
    padding: 10px;
}


/* =====================================================
   NORMAL MENU ITEMS
===================================================== */

.mobile-menu-panel-inner a {
    color: #202235;
    border-radius: 10px;

    transition:
        background-color 0.2s ease,
        color 0.2s ease;
}


/* Hover */
.mobile-menu-panel-inner a:hover {
    background: #f3f4fb;
    color: #2E3192;
}


/* Click / active */
.mobile-menu-panel-inner a:active {
    background: #e9ebfa;
    color: #2E3192;
}


/* =====================================================
   DROPDOWN BUTTON
===================================================== */

.mobile-menu-dropdown-toggle {
    color: #202235;
    border-radius: 10px;

    transition:
        background-color 0.2s ease,
        color 0.2s ease;
}


/* Hover */
.mobile-menu-dropdown-toggle:hover {
    background: #f3f4fb;
    color: #2E3192;
}


/* Open dropdown */
.mobile-menu-dropdown-toggle.dropdown-open {
    background: #eef0ff;
    color: #2E3192;
}


/* =====================================================
   ARROW
===================================================== */

.mobile-menu-chevron {
    color: #55586b;
}

.mobile-menu-dropdown-toggle:hover .mobile-menu-chevron {
    color: #2E3192;
}


/* =====================================================
   SUBMENU
===================================================== */

.mobile-menu-submenu {
    border-left: 2px solid #e8eaff;
}


/* Submenu links */
.mobile-menu-submenu a {
    color: #55586b;
    border-radius: 8px;
}


/* Submenu hover */
.mobile-menu-submenu a:hover {
    background: #f5f6fb;
    color: #2E3192;
}


/* =====================================================
   CALL BUTTON
===================================================== */

.mobile-menu-panel-inner .mobile-menu-call {
    background: #2E3192;
    color: #ffffff;

    border-radius: 10px;

    box-shadow: 0 5px 14px rgba(46, 49, 146, 0.18);

    transition:
        background-color 0.2s ease,
        box-shadow 0.2s ease;
}


/* Call button hover */
.mobile-menu-panel-inner .mobile-menu-call:hover {
    background: #25277d;
    color: #ffffff;

    box-shadow: 0 7px 18px rgba(46, 49, 146, 0.25);
}


/* =====================================================
   MENU ICON HOVER
===================================================== */

.mobile-menu-toggle:hover {
    background: #f3f4fb;
    border-radius: 12px;
}


/* Keep icon change instant */
.mobile-menu-toggle,
.mobile-menu-toggle span,
.mobile-menu-toggle.menu-open,
.mobile-menu-toggle.menu-open span {
    transition: none !important;
}
/* =========================================================
   MOBILE ONLY (≤767px) — everything else
========================================================= */

@media (max-width: 767px) {

    /* =====================================================
       MOBILE HERO
    ===================================================== */

    .hero-section {
        width: 100%;
        position: relative;
    }

    .hero-bg {
        width: calc(100% - 20px);
    background-image: url('{{ asset('images/Scroll Banner 1200x500.jpg') }}');

        min-height: 0;

        aspect-ratio: auto;

        margin: 0 auto;

        border-radius: 18px;

        background-position: center center;

        overflow: hidden;
    }

    .hero-content {
        width: 100%;
        max-width: none;

        display: flex;
        flex-direction: column;

        gap: 10px;

        padding: 28px 15px 32px;

        text-align: center;
    }

    .hero-text {
        width: 100%;

        padding: 0;

        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .hero-title {
        width: 100%;
        max-width: 340px;

        margin: 0 auto 12px;

        font-size: 28px !important;
        line-height: 1.08;

        font-weight: 600;

        text-align: center;
    }

    .hero-subtitle {
        width: 100%;
        max-width: 330px;

        margin: 0 auto 12px;

        color: #e5e7eb;

        font-size: 13px;
        line-height: 1.45;

        text-align: center;
    }

    .hero-trust {
        width: 100%;
        max-width: 320px;

        margin: 0 auto;

        color: #e5e7eb;

        font-size: 12px;
        line-height: 1.4;

        text-align: center;
    }


    /* -----------------------------------------------------
       MOBILE HERO GRAPHIC
    ----------------------------------------------------- */

    .hero-graphic {
        width: 100%;

        display: flex;
        justify-content: center;
        align-items: center;

        margin: 5px auto 0;
    }

    .hero-graphic-img {
        display: block;

        width: 88%;
        max-width: 310px;

        margin: 0 auto;

        object-fit: contain;
    }


    /* =====================================================
       MOBILE BOTTOM NAV
    ===================================================== */

    .mobile-bottom-nav {
        display: flex;

        position: fixed;

        left: 10px;
        right: 10px;
        bottom: 10px;

        height: 58px;

        z-index: 999999;

        background: rgba(255, 255, 255, 0.96);

        border-radius: 18px;

        box-shadow:
            0 4px 20px rgba(0, 0, 0, 0.15);

        border: 1px solid #e5e7eb;

        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);

        align-items: stretch;
        justify-content: space-around;

        padding: 4px 3px;
    }

    .mobile-bottom-item {
        flex: 1;

        min-width: 0;

        display: flex;
        flex-direction: column;

        align-items: center;
        justify-content: center;

        gap: 2px;

        color: #1f2937;

        text-decoration: none;

        font-size: 9px;
        font-weight: 500;

        line-height: 1;

        border-radius: 13px;

        -webkit-tap-highlight-color: transparent;
    }

    .mobile-bottom-item.active {
        color: #2E3192;
        font-weight: 600;
    }

    .mobile-bottom-icon {
        width: 23px;
        height: 23px;

        display: flex;
        align-items: center;
        justify-content: center;
    }

    .mobile-bottom-icon svg {
        width: 21px;
        height: 21px;
        display: block;
    }

    /* -----------------------------------------------------
       PREVENT CONTENT FROM HIDING BEHIND BOTTOM NAV
    ----------------------------------------------------- */

    body {
        padding-bottom: 76px;
    }
}
@media (max-width: 767px) {

    /* =====================================================
       SERVICES SECTION
    ===================================================== */

    .services-page-section {
        padding: 40px 0 25px;
        background: #fff;
    }

    .services-page-container {
        width: calc(100% - 24px);
        max-width: none;
        margin: 0 auto;
    }

    /* =====================================================
       SERVICES HEADING
    ===================================================== */

    .services-page-heading {
        text-align: center;
        margin-bottom: 24px;
    }

    .services-page-heading h2 {
        margin: 0;
        font-family: "Inter Tight", sans-serif;
        font-size: 28px;
        line-height: 1.15;
        font-weight: 600;
    }

    .services-page-heading p {
        margin: 6px 0 0;
        font-size: 13px;
        line-height: 1.4;
        color: #777;
    }

    /* =====================================================
       SERVICES LIST
    ===================================================== */

    .services-list {
        display: flex;
        flex-direction: column;
        gap: 18px;
    }

    /* =====================================================
       SERVICE CARD
    ===================================================== */

    .service-row,
    .service-row-reverse {
        display: flex;
        flex-direction: column;
        width: 100%;
        min-height: 0;
        margin: 0;
        padding: 10px;
        border: 1px solid #dedede;
        border-radius: 15px;
        overflow: hidden;
        background: #fff;
    }

    /* =====================================================
       SERVICE IMAGE
    ===================================================== */

    .service-row .service-image,
    .service-row-reverse .service-image {
        order: 1;
        width: 100%;
        height: 190px;
        min-height: 190px;
        overflow: hidden;
    }

    .service-image img {
        width: 100%;
        height: 190px;
        display: block;
        object-fit: cover;
        border-radius: 10px;
    }

    /* =====================================================
       SERVICE CONTENT
    ===================================================== */

    .service-row .service-content,
    .service-row-reverse .service-content {
        order: 2;
        width: 100%;
        padding: 17px 7px 8px;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
    }

    .service-content h3 {
        margin: 0 0 8px;
        font-family: "Inter Tight", sans-serif;
        font-size: 20px;
        line-height: 1.2;
        font-weight: 600;
        color: #111;
    }

    .service-content p {
        margin: 0 0 12px;
        font-size: 13px;
        line-height: 1.55;
        color: #303030;
    }

    /* =====================================================
       SERVICE BULLET LIST
    ===================================================== */

    .service-content ul {
        margin: 0 0 14px;
        padding-left: 18px;
        list-style-type: disc;
    }

    .service-content li {
        margin-bottom: 7px;
        font-size: 12px;
        line-height: 1.45;
        color: #222;
    }

    .service-content li:last-child {
        margin-bottom: 0;
    }

    /* =====================================================
       ENQUIRE BUTTON
    ===================================================== */

    .service-enquire-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        align-self: flex-start;
        gap: 3px;
        width: fit-content;
        padding: 8px 15px;
        border: 1px solid #1717a0;
        border-radius: 30px;
        color: #1717a0;
        background: #fff;
        font-size: 12px;
        line-height: 1;
        text-decoration: none;
    }

    .service-enquire-btn span {
        font-size: 17px;
        line-height: 1;
    }


    /* =====================================================
       TRUSTED PARTNER
    ===================================================== */

    .trusted-partner-section {
        padding: 30px 0 25px;
        background: #fff;
    }

    .trusted-partner-container {
        width: calc(100% - 24px);
        max-width: none;
        margin: 0 auto;
    }

    .trusted-heading {
        text-align: center;
        margin-bottom: 20px;
    }

    .trusted-heading h2 {
        margin: 0;
        font-family: "Inter Tight", sans-serif;
        font-size: 28px;
        line-height: 1.15;
        font-weight: 600;
        color: #111;
    }

    .trusted-heading p {
        margin: 5px 0 0;
        font-size: 13px;
        line-height: 1.4;
        color: #777;
    }

    /* =====================================================
       TRUSTED FEATURES
    ===================================================== */

    .trusted-features {
        display: flex;
        flex-direction: column;
        gap: 0;
    }

    .trusted-feature {
        display: flex;
        align-items: center;
        justify-content: flex-start;
        gap: 14px;
        width: 100%;
        min-height: 70px;
        padding: 10px 25px;
        border-right: 0;
        border-bottom: 1px solid #ddd;
    }

    .trusted-feature:last-child {
        border-bottom: 0;
    }

    .trusted-icon {
        width: 52px;
        height: 52px;
        flex-shrink: 0;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .trusted-icon img {
        width: 52px;
        height: 52px;
        object-fit: contain;
    }

    .trusted-feature h3 {
        margin: 0;
        font-size: 16px;
        line-height: 1.2;
        font-weight: 400;
        color: #222;
    }

    .trusted-feature p {
        margin: 3px 0 0;
        font-size: 15px;
        line-height: 1.2;
        color: #333;
    }


    /* =====================================================
       FAQ
    ===================================================== */

    .services-faq-section {
        padding: 20px;
        background: #fff;
    }

    .services-faq-container {
        width: calc(100% - 24px);
        max-width: none;
        margin: 0 auto;
    }

    .services-faq-heading {
        text-align: center;
        margin-bottom: 18px;
    }

    .services-faq-heading h2 {
        margin: 0;
        font-family: "Inter Tight", sans-serif;
        font-size: 28px;
        line-height: 1.15;
        font-weight: 600;
        color: #111;
    }

    /* =====================================================
       FAQ QUESTION
    ===================================================== */

    .service-faq-item {
        border-bottom: 1px solid #e7e7e7;
    }

    .service-faq-question {
        width: 100%;
        min-height: 48px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 15px;
        0px 10px 12px 10px
        border: 0;
        background: transparent;
        cursor: pointer;
        text-align: left;
        font-family: inherit;
        font-size: 13px;
        line-height: 1.4;
        color: #111;
    }

    .service-faq-question > span:first-child {
        flex: 1;
    }

    .faq-plus {
        flex-shrink: 0;
        font-size: 18px;
        line-height: 1;
        color: #999;
        transition: transform .2s ease;
    }

    .faq-open {
        transform: rotate(45deg);
    }

    /* =====================================================
       FAQ ANSWER
    ===================================================== */

    .service-faq-answer {
        padding: 0px 10px 12px 10px;
    }

    .service-faq-answer p {
        margin: 0;
        max-width: none;
        font-size: 12px;
        line-height: 1.55;
        color: #555;
    }

}

/* =========================================================
   BOTTOM CTA
========================================================= */

.services-bottom-cta {
    margin-top: 60px;
    padding: 40px 24px;
    background: #fff;
}

.services-bottom-cta-inner {
    width: min(1000px, 100%);
    min-height: 200px;
    margin: 0 auto;
    position: relative;
    display: flex;
    align-items: flex-end;
    justify-content: space-between;
    overflow: hidden;
    border-radius: 24px;
    background: linear-gradient(90deg, #2E3192 0%, #2E3192 45%, rgba(46,49,146,0.4) 75%, rgba(46,49,146,0) 100%);
}

/* CTA CONTENT */
.services-cta-content {
    padding: 40px 20px 40px 56px;
    max-width: 820px;
    position: relative;
    z-index: 2;
}

.services-cta-content h2 {
    margin: 0 0 16px;
    font-family: "Inter Tight", sans-serif;
    font-size: 40px;
    line-height: 1.15;
    font-weight: 700;
    color: #fff;
}

.services-cta-content p {
    margin: 0 0 28px;
    font-size: 17px;
    color: #e5e7eb;
}

.services-cta-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 12px 28px;
    border-radius: 999px;
    background: #fff;
    color: #111;
    font-size: 16px;
    text-decoration: none;
    font-weight: 600;
    transition: background 0.2s ease;
}
.services-cta-btn:hover { background: #eee; color: #111; }

/* CTA IMAGE */
.services-cta-image {
    align-self: flex-end;
    width: 38%;
    max-width: 400px;
    display: flex;
    align-items: flex-end;
    justify-content: center;
    position: relative;
    z-index: 1;
}

.services-cta-image img {
    width: 100%;
    height: auto;
    max-height: 340px;
    object-fit: contain;
    object-position: bottom center;
}

@media (max-width: 900px) {
    .services-bottom-cta-inner {
        flex-direction: column;
        min-height: auto;
        padding-bottom: 0;
    }
    .services-cta-content {
        padding: 32px 24px;
        max-width: 100%;
        text-align: left;
    }
    .services-cta-content h2 { font-size: 28px; }
    .services-cta-image {
        width: 60%;
        margin-top: -20px;
    }
}
  /* =========================================================

   MOBILE CTA — HORIZONTAL LAYOUT

   Reference: text LEFT + image RIGHT

========================================================= */

@media (max-width: 767px) {

    .services-bottom-cta {

        margin-top: 25px;

        padding: 20px 0 90px;

        background: #fff;

    }

    .services-bottom-cta-inner {

        width: calc(100% - 24px);

        min-height: 135px;

        margin: 0 auto;

        display: flex;

        flex-direction: row;

        align-items: stretch;

        justify-content: space-between;

        position: relative;

        overflow: hidden;

        border-radius: 17px;

        background: linear-gradient(

            90deg,

            #2E3192 0%,

            #2E3192 55%,

            rgba(46,49,146,0.65) 78%,

            rgba(46,49,146,0.15) 100%

        );

    }

    /* =====================================================

       LEFT SIDE — CONTENT

    ===================================================== */

    .services-cta-content {

        width: 62%;

        max-width: none;

        padding: 22px 0 20px 18px;

        position: relative;

        z-index: 3;

        text-align: left;

    }

    .services-cta-content h2 {

        margin: 0 0 8px;

        font-family: "Inter Tight", sans-serif;

        font-size: 18px;

        line-height: 1.15;

        font-weight: 700;

        color: #fff;

    }

    .services-cta-content h2 span {

        color: #fff;

    }

    .services-cta-content p {

        margin: 0 0 13px;

        font-size: 10px;

        line-height: 1.35;

        color: #e5e7eb;

    }

    .services-cta-btn {

        display: inline-flex;

        align-items: center;

        justify-content: center;

        gap: 5px;

        padding: 7px 13px;

        border-radius: 999px;

        background: #fff;

        color: #111;

        font-size: 10px;

        line-height: 1;

        font-weight: 600;

        text-decoration: none;

    }

    .services-cta-btn span {

        font-size: 13px;

    }

    /* =====================================================

       RIGHT SIDE — IMAGE

    ===================================================== */

    .services-cta-image {

        width: 43%;

        height: 100%;

        margin: 0;

        display: flex;

        align-items: flex-end;

        justify-content: flex-end;

        position: absolute;

        right: 0;

        bottom: 0;

        z-index: 2;

    }

    .services-cta-image img {

        width: 100%;

        max-width: none;

        height: auto;

        max-height: 180px;

        object-fit: contain;

        object-position: bottom right;

        display: block;

    }

}

    @media (max-width: 380px) {

        .services-cta-content {

            padding: 24px 18px 18px;

        }

        .services-cta-content h2 {

            font-size: 22px;

        }

        .services-cta-content p {

            font-size: 12px;

        }

        .services-cta-image {

            width: 80%;

        }

    }


</style>

@endsection