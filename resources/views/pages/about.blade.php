@extends('layouts.app')
@section('title', 'About Us')

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
                <h1 class="hero-title">Urban Corporations To
Global Companies,
We Are There</h1>
                <p class="hero-subtitle">Over a decade, we have turned challenges into solutions
<br>
Trusted by over 16+ Municipal Corporations</p>
            </div>
            <div class="hero-graphic">
                <img src="{{ asset('images/graphic-1000x1000-4.webp') }}" alt="" class="hero-graphic-img">
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
     ABOUT US CONTENT
========================================================= --}}

<section class="about-company-section">

    {{-- =====================================================
         COMPANY INTRODUCTION
    ====================================================== --}}
    <div class="about-intro-card">

        <div class="about-intro-content">

            <span class="about-small-label">About ASCENTech</span>

            <h2>
                Redefining The Future Of
                <span>Software Development</span>
            </h2>

            <p>
                Founded in 2016, ASCENTech Information Technology Private Limited
                is a startup company run by industry experts with 25+ years of
                experience. Our expertise lies in turnkey projects and we develop
                customer-centric, scalable and innovative technology platforms.
                Through our focus is on the government sector, we also develop
                projects for the private sector, implemented across India.
            </p>

            <p>
                We have received 3 national-level awards and our products are
                already being utilised by 16+ municipal corporations across
                Maharashtra. We also serve 4 leading private sector companies.
            </p>

            <ul class="about-intro-list">
                <li>
                    <span>✓</span>
                    Pioneer in SaaS-based ERP systems for E-Governance in India
                </li>

                <li>
                    <span>✓</span>
                    Expertise in mobility solutions
                </li>

                <li>
                    <span>✓</span>
                    IT infrastructure and cloud-based solutions
                </li>

                <li>
                    <span>✓</span>
                    Banking and financial technology solutions
                </li>
            </ul>

        </div>


        <div class="about-intro-visual">

            <img
                src="{{ asset('images/about/Future Of Software Development image 1- 800x600.jpg') }}"
                alt="ASCENTech Leadership"
                class="about-main-image"
            >

            <div class="about-client-logos">

                <div class="about-logo-box">
                    <img
                        src="{{ asset('images/nagarkaryawali/Nagarkaryavali Logo 1000x300.png') }}"
                        alt="E-Governance ERP"
                    >
                </div>

                <div class="about-logo-box">
                    <img
                        src="{{ asset('images/about/Banking Solution icon 500x500.svg') }}"
                        alt="Banking Solution"
                    >
                </div>

            </div>

        </div>

    </div>


    {{-- =====================================================
         TECHNOLOGY IMAGES
    ====================================================== --}}
    <div class="about-tech-images">

        <div class="about-tech-image tech-image-large">
            <img
                src="{{ asset('images/about/Future Of Software Development image 2- 800x600.jpg') }}"
                alt="ASCENTech Technology"
            >
        </div>

        <div class="about-tech-image tech-image-small">
            <img
                src="{{ asset('images/about/Future Of Software Development image 3 - 500x300 (1).jpg') }}"
                alt="ASCENTech Technology Team"
            >
        </div>

    </div>


    {{-- =====================================================
         TECHNOLOGICAL STRENGTHS
    ====================================================== --}}
    <div class="about-section-heading">
        <h2>
            Our <span>Technological Strengths</span>
        </h2>

        <p>The key technical areas of ASCENTech</p>
    </div>


    <div class="technology-strengths">

        <div class="strength-card">

            <div class="strength-icon">
                <img
                        src="{{ asset('images/about/Platforms.svg') }}"
                        alt="">
            </div>

            <div>
                <h3>Platforms</h3>

                <p>
                    SaaS, Cloud-Based and Turnkey Solutions.
                </p>
            </div>

        </div>


        <div class="strength-card">

            <div class="strength-icon">
                <img
                        src="{{ asset('images/about/Capabilities.svg') }}"
                        alt="">
            </div>

            <div>
                <h3>Capabilities</h3>

                <p>
                    Real-Time Secure Systems, Third-Party Data Migration
                    and System Integration.
                </p>
            </div>

        </div>


        <div class="strength-card">

            <div class="strength-icon">
                <img
                        src="{{ asset('images/about/Architecture (1).svg') }}"
                        alt="">
            </div>

            <div>
                <h3>Architecture</h3>

                <p>
                    Scalable, Flexible and Robust Technology Frameworks.
                </p>
            </div>

        </div>

    </div>

{{-- STATS --}}
<section class="stats-section">
    <div class="stats-wrap">
        <div class="stats-grid">
            @foreach ($stats as $stat)
                <div class="stat-item">
                    <div class="stat-value">{{ $stat['value'] }}{{ $stat['suffix'] }}</div>
                    <div class="stat-label">{{ $stat['label'] }}</div>
                </div>
            @endforeach
        </div>
    </div>
</section>

    {{-- =====================================================
         LEADERSHIP
    ====================================================== --}}
    <div class="about-section-heading leadership-heading">

        <h2>Leadership</h2>

        <p>Our pillars of Growth</p>

    </div>


    <div class="leadership-card">

        <div class="leadership-content">

            <p>
                Mr. Ashutosh Samant is a veteran technology strategist having
                more than 25 years of experience in software development and
                E-Governance Software Solution. As a CEO and Managing Director
                he leads ASCENTech's product vision, including the flagship
                Nagarkaryawali platform, widely adopted by major Municipal
                Corporations in Maharashtra.
            </p>

            <p>
                His leadership has helped ASCENTech expand into a comprehensive
                technology solutions provider that delivers services in Data
                Analytics, System Integration, Technical Consultancy, IT
                Infrastructure, Web Development and Hardware Solutions.
            </p>

            <h3>Mr. Ashutosh Samant</h3>
            <span>CEO and Managing Director</span>

        </div>

        <div class="leadership-image">
            <img
                src="{{ asset('images/about/Leadership image Mr. Ashutosh Samant (500x500).jpg') }}"
                alt="CEO and Managing Director"
            >
        </div>

    </div>


    <div class="leadership-card leadership-card-reverse">

        <div class="leadership-image">

            <img
                src="{{ asset('images/about/Mr. Waman Breed Director.jpg') }}"
                alt="COO and Director"
            >

        </div>

        <div class="leadership-content">

            <p>
                Mr. Waman Breed has over 20 years of experience in operations
                and administration and has significantly contributed to the
                growth of ASCENTech. He also has expertise in handling finance
                and operations, his qualities of understanding clients' needs
                helps in providing the right solution.
            </p>

            <h3>Mr. Waman Breed</h3>
            <span>COO and Director</span>

        </div>

    </div>


    {{-- =====================================================
         MANAGEMENT TEAM
    ====================================================== --}}
    <div class="about-section-heading management-heading">

        <h2>
            Our <span>Management Team</span>
        </h2>

        <p>Minds behind ASCENTech</p>

    </div>


    <div class="management-team">

        <div class="management-row management-row-top">

            <div class="team-member">
                <img
                    src="{{ asset('images/about/Mr. Sachin Kakirde.jpg') }}"
                    alt="Mr. Sachin Kakirde"
                >

                <div class="team-member-info">
                    <strong>Mr. Sachin Kakirde</strong>
                    <span>Chief Product Officer</span>
                </div>
            </div>


            <div class="team-member">
                <img
                    src="{{ asset('images/about/Mr. Madhusudan Phadke - COO.jpg') }}"
                    alt="Mr. Madhusudhan Phadke"
                >

                <div class="team-member-info">
                    <strong>Mr. Madhusudhan Phadke</strong>
                    <span>Chief Revenue Officer</span>
                </div>
            </div>

        </div>


        <div class="management-row management-row-bottom">

            <div class="team-member">
                <img
                    src="{{ asset('images/about/Mr. Ashish Potdar.jpg') }}"
                    alt="Mr. Ashish Potdar"
                >

                <div class="team-member-info">
                    <strong>Mr. Ashish Potdar</strong>
                    <span>Head - Projects</span>
                </div>
            </div>


            <div class="team-member">
                <img
                    src="{{ asset('images/about/Mr. Sandeep Bhandarkar.jpg') }}"
                    alt="Mr. Sandip Bhandarkar"
                >

                <div class="team-member-info">
                    <strong>Mr. Sandip Bhandarkar</strong>
                    <span>Project Manager</span>
                </div>
            </div>


            <div class="team-member">
                <img
                    src="{{ asset('images/about/Mr. Pratik Sir.jpg') }}"
                    alt="Mr. Pratik Shaha"
                >

                <div class="team-member-info">
                    <strong>Mr. Pratik Shaha</strong>
                    <span>Project Manager</span>
                </div>
            </div>

        </div>

    </div>


    {{-- =====================================================
         GUIDING PRINCIPLES
    ====================================================== --}}
    <div class="about-section-heading principles-heading">

        <h2>
            Our <span>Guiding Principles</span>
        </h2>

        <p>Innovating today with a focus on tomorrow</p>

    </div>


    <div class="principles-grid">

        <div class="principle-card">

            <div class="principle-content">

                <h3>OUR VISION</h3>

                <p>
                    To deliver simplified, secure, next-generation and
                    cost-effective technology platforms providing comprehensive
                    end-to-end solutions.
                </p>

            </div>

            <img
                src="{{ asset('images/about/our-vision-1.webp') }}"
                alt="Our Vision"
            >

        </div>


        <div class="principle-card">

            <img
                src="{{ asset('images/about/our-mission.webp') }}"
                alt="Our Mission"
            >

            <div class="principle-content">

                <h3>OUR MISSION</h3>

                <p>
                    To provide precise solutions focused on results with
                    integrity, accuracy and timely execution, upholding the
                    highest quality standards.
                </p>

            </div>

        </div>

    </div>


    {{-- =====================================================
         COMPLIANCE
    ====================================================== --}}
    <section class="compliance-section">

        <div class="about-section-heading">

            <h2>Compliance And Standards</h2>

            <p>High security and quality standards</p>

        </div>
     <div class="stats-certs">
            @foreach ($certifications as $cert)
                <img src="{{ asset('images/'.$cert) }}" alt="Certification" class="stats-cert-img">
            @endforeach
        </div>

    </section>


    {{-- =====================================================
         ASSOCIATIONS + EMPANELMENTS
    ====================================================== --}}
    <div class="association-section">

        <div class="association-box">

            <h2>Associations</h2>

            <div class="association-grid">

                <div class="association-logo">
                    <img
                        src="{{ asset('images/about/Nasscom.jpg') }}"
                        alt="NASSCOM"
                    >
                </div>

                <div class="association-logo">
                    <img
                        src="{{ asset('images/about/SME Chamber of India.jpg') }}"
                        alt="SME Chamber of India"
                    >
                </div>

                <div class="association-logo">
                    <img
                        src="{{ asset('images/about/DPIIT Startup India.jpg') }}"
                        alt="DPIIT"
                    >
                </div>

            </div>

        </div>


        <div class="association-box">

            <h2>Empanelments</h2>

            <div class="association-grid">

                <div class="association-logo">
                    <img
                        src="{{ asset('images/about/upyog.png') }}"
                        alt="UPYOG"
                    >
                </div>

                <div class="association-logo">
                    <img
                        src="{{ asset('images/about/Bank Of Maharashtra.png') }}"
                        alt="Bank of Maharashtra"
                    >
                </div>

                <div class="association-logo">
                    <img
                        src="{{ asset('images/about/bank of baroda.png') }}"
                        alt="Bank of Baroda"
                    >
                </div>

                <div class="association-logo">
                    <img
                        src="{{ asset('images/about/HDFC Bank.png') }}"
                        alt="HDFC Bank"
                    >
                </div>

                <div class="association-logo">
                    <img
                        src="{{ asset('images/about/Axis Bank.png') }}"
                        alt="Axis Bank"
                    >
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
    .stats-certs { display: flex; flex-wrap: wrap; margin-top:70px;justify-content: center; align-items: center; gap: 100px; opacity: 1; }
.stats-cert-img { height: 120px; object-fit: contain; }
/* ===================== GLOBAL HELPERS ===================== */
.text-center { text-align: center; }
.mb-12 { margin-bottom: 48px; }

/* ===================== HERO ===================== */
.hero-section { position: relative; }
.hero-bg {
    width: calc(100% - 30px);
    background-image: url('{{ asset('images/about/About Us Banner 2400x1000 new gradient.png') }}');
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
    margin-bottom: 24px;
    max-width: 750px;
    font-family: "Inter Tight", sans-serif;
    font-size: clamp(32px, 3.5vw, 53px);
    font-weight: 600;
    line-height: 1.2em;
}
.hero-subtitle { font-size: 18px; color: #e5e7eb; margin-bottom: 0px; max-width: 550px; }
.hero-trust { font-size: 18px; color: #e5e7eb; margin-bottom: 40px; max-width: 750px; }
.hero-graphic { display: flex; justify-content: center; margin-top: 20px; }
.hero-graphic-img { width: 100%; max-width: 450px; margin-right: clamp(24px, 6vw, 110px); }
@media (min-width: 1024px) {
    .hero-content { grid-template-columns: 1fr 1fr; }
    .hero-graphic { justify-content: flex-end; }
}
.hero-float-row { max-width: 1600px; margin: -80px auto 0; position: relative; z-index: 10; padding: 0 8px; }
.hero-float-inner { display: flex; flex-wrap: nowrap; align-items: center; justify-content: space-between; gap: 24px; padding: 0 56px 24px; overflow-x: auto; }
.hero-float-nav { display: none; margin-left: 35px; }
.hero-float-buttons { display: flex; gap: 16px; flex-shrink: 0; }
@media (min-width: 1024px) { .hero-float-nav { display: block; } }

.btn { display: inline-flex; align-items: center; gap: 8px; padding: 9px 26px; border-radius: 999px; font-size: 17px; font-weight: 500; text-decoration: none; transition: background 0.2s ease, color 0.2s ease; white-space: nowrap; }
.btn-accent { background: #1990c9; color: #fff; }
.btn-accent:hover { background: #1990c9; }
.btn-outline-white { border: 1px solid #fff; color: #fff; }
.btn-outline-white:hover { background: rgba(255,255,255,0.1); }
.btn-outline-primary { border: 1px solid #2E3192; color: #2E3192; }
.btn-outline-primary:hover { background: #f3f4f6; }

.hero-sticky-bar { position: fixed; top: 0; left: 0; right: 0; z-index: 50; padding: 12px 16px 0; }
.hero-sticky-inner { max-width: 1200px; margin: 0 auto; background: #fff; border-radius: 16px; box-shadow: 0 10px 25px rgba(0,0,0,0.15); padding: 12px 24px; display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 16px; color: #2E3192; }
.hero-sticky-logo { height: 32px; }
.hero-sticky-nav { display: none; }
.hero-sticky-buttons { display: flex; align-items: center; gap: 12px; }
.hero-sticky-call { display: none; }
@media (min-width: 1024px) { .hero-sticky-nav { display: block; } }
@media (min-width: 1280px) { .hero-sticky-call { display: inline-flex; } }
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
   ABOUT COMPANY SECTION
========================================================= */

.about-company-section {
    width: 100%;
    padding: 20px 20px 0;
    background: #fff;
    color: #111;
}

.about-company-section * {
    box-sizing: border-box;
}


/* =========================================================
   COMPANY INTRO
========================================================= */

.about-intro-card {
    width: min(1300px, 100%);
    margin: 0 auto 22px;
    padding: 14px 30px 10px 30px ;
    border: 1px solid #dedede;
    border-radius: 7px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
    background: #fff;
}

.about-intro-content {
    padding: 4px 0 0;
}

.about-small-label {
    display: inline-block;
    padding: 3px 7px;
    border-radius: 3px;
    background: #eef2ff;
    color: #2e3192;
    font-size: 17px;
    margin-bottom: 5px;
}

.about-intro-content h2 {
    margin: 0 0 8px;
    font-family: "Inter Tight", sans-serif;
    font-size: 37px;
    line-height: 1.08;
    font-weight: 600;
    color: #111;
}

.about-intro-content h2 span {
    color: #2e3192;
}

.about-intro-content p {
    margin: 0 0 7px;
    font-size: 16px;
    line-height: 1.45;
    color: #333;
}

.about-intro-list {
    list-style: none;
    padding: 0;
    margin: 6px 0 0;
}

.about-intro-list li {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    margin-bottom: 8px;
    font-size: 16px;
    line-height: 1.3;
}

.about-intro-list li span {
    color: #111;
    font-weight: 700;
}


/* =========================================================
   INTRO IMAGE
========================================================= */

.about-intro-visual {
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
}

.about-main-image {
    width: 100%;
    height: 330px;
    object-fit: cover;
    border-radius: 5px;
}

.about-client-logos {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 8px;
    margin-top: 9px;
}

.about-logo-box {
    height: 105px;
    border: 1px dashed #d5d5d5;
    border-radius: 5px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #fff;
    padding: 7px;
}

.about-logo-box img {
    max-width: 90%;
    max-height: 100px;
    object-fit: contain;
}


/* =========================================================
   TECHNOLOGY IMAGES
========================================================= */

.about-tech-images {
    width: min(1000px, 100%);
    margin: 60px auto 18px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 0;
    align-items: center;
}

.about-tech-image {
    height: 320px;
    z-index:10;
    overflow: hidden;
    border-radius: 10px;
    border: 6px solid #ddd;
}

.about-tech-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

.tech-image-large {
    height:360px;
    border: 6px solid #2e3192;
    position: relative;
    z-index: 2;
    width: calc(100% + 45px);
}

/* =========================================================
   SECTION HEADINGS
========================================================= */

.about-section-heading {
    text-align: center;
    margin: 70px auto 13px;
}

.about-section-heading h2 {
    margin: 0;
    font-family: "Inter Tight", sans-serif;
    font-size: 37px;
    line-height: 1.1;
    font-weight: 600;
    color: #111;
}

.about-section-heading h2 span {
    color: #2e3192;
}

.about-section-heading p {
    margin: 3px 0 0;
    color: #777;
    font-size: 16px;
}


/* =========================================================
   TECHNOLOGY STRENGTHS
========================================================= */

.technology-strengths {
    width: min(1200px, 100%);
    margin: 0 auto 42px;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 9px;
}

.strength-card {
    min-height: 100px;
    border: 1px dashed #d5d5d5;
    border-radius: 5px;
    padding: 8px;
    display: flex;
    align-items: center;
    gap: 18px;
    background: linear-gradient(
        135deg,
        #fff 0%,
        #f8f8fb 100%
    );
}

.strength-icon {
    width:70px;
    height: 70px;
    flex: 0 0 30px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 53px;
    color: #555;
}
.strength-icon img{
    width:70px;
    height: 70px;
 object-fit: contain;}

.strength-card h3 {
    margin: 0 0 2px;
    font-size: 20px;
    font-weight: 500;
}

.strength-card p {
    margin: 0;
    font-size: 15px;
    line-height: 1.35;
    color: #555;
}

/* ===================== STATS ===================== */

.stats-section {
    background: #f9fafb;
    background-image: url('{{ asset('images/Scroll Banner 1200x500.jpg') }}');
    background-size: cover;
    background-position: center center;
    aspect-ratio: 1000 / 150;
    border-radius: 30px;
    margin: 15px 120px;
    color: #fff;
    position: relative;
    overflow: hidden;
}
@media (max-width: 1023px) {
    .stats-section {
        margin: 15px 40px;
    }
}

.stats-wrap {
    max-width: 1200px;
    margin: 0 auto;
    height: 100%;
}

.stats-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    height: 100%;
    min-height: 100%;
    padding: 0 24px;
    text-align: center;
}

/* Full-height dividers */
.stats-grid .stat-item {
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.stats-grid .stat-item:nth-child(-n+3)::after {
    content: "";
    position: absolute;
    top: 0;
    bottom: 0;
    right: 0;
    width: 1px;
    background: #fff;
}

/* Stat content */
.stat-value {
    font-size: 56px;
    font-weight: 700;
    color: #d9daec;
}

.stat-label {
    color: #eff0f4;
    margin-top: 0;
    font-size: 16px;
}

/* Mobile */
@media (max-width: 767px) {

    .stats-section {
        margin: 15px 20px;
        aspect-ratio: auto;
    }

    .stats-grid {
        grid-template-columns: repeat(2, 1fr);
        padding: 30px 10px;
    }

    /* Remove desktop dividers */
    .stats-grid .stat-item:nth-child(-n+3)::after {
        display: none;
    }

    /* Vertical divider between columns */
    .stats-grid .stat-item:nth-child(odd)::after {
        display: block;
        top: 0;
        bottom: 0;
        right: 0;
    }

    /* Horizontal divider between rows (was missing) */
    .stats-grid .stat-item:nth-child(-n+2) {
        border-bottom: 1px solid #fff;
        padding-bottom: 16px;
    }
    .stats-grid .stat-item:nth-child(n+3) {
        padding-top: 16px;
    }

    .stat-value {
        font-size: 40px;
    }
}
.stats-certs { display: flex; flex-wrap: wrap; margin-top:70px;justify-content: center; align-items: center; gap: 100px; opacity: 1; }
.stats-cert-img { height: 120px; object-fit: contain; }
/* =========================================================
   LEADERSHIP
========================================================= */

.leadership-heading {
    margin-top: 68px;
    margin-bottom: 14px;
}

.leadership-card {
    width: min(1200px, 100%);
    min-height:auto;
    margin: 0 auto 10px;
    padding: 12px;
    border: 1px solid #dedede;
    border-radius: 7px;
    display: grid;
    grid-template-columns: 1fr 300px;
    gap: 15px;
    align-items: center;
}

.leadership-card-reverse {
    grid-template-columns: 300px 1fr;
}

.leadership-content {
    padding: 0 5px;
}

.leadership-content p {
    margin: 0 0 6px;
    font-size: 16px;
    line-height: 1.4;
    color: #333;
}

.leadership-content h3 {
    margin: 0px 0 0;
    font-size: 25px;
    font-weight: 600;
    color: #111;
}

.leadership-content > span {
    font-size: 15px;
    color: #777;
}

.leadership-image {
    height: 300px;
    overflow: hidden;
}

.leadership-image img {
    width: 300px;
    height: 300px;
    border-radius:10px;
    object-fit: contain;
    display: block;
}


/* =========================================================
   MANAGEMENT
========================================================= */

.management-heading {
    margin-top: 20px;
    margin-bottom: 15px;
}

.management-team {
    width: min(1300px, 100%);
    margin: 0 auto 42px;
}

.management-row {
    display: flex;
    justify-content: center;
    gap: 10px;
}

.management-row-bottom {
    margin-top: 12px;
}

.team-member {
    width: 300px;
    height: 300px;
    position: relative;
    border-radius: 7px;
    overflow: hidden;
    background: #eaf0ff;
}

.team-member img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

.team-member-info {
    position: absolute;
    bottom: 5px;
    left: 5px;
    right: 5px;
    min-height: 27px;
    border-radius: 6px;
    background: rgba(255,255,255,.96);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding: 3px;
}

.team-member-info strong {
    font-size: 17px;
    line-height: 1.1;
}

.team-member-info span {
    font-size: 15px;
    color: #777;
    margin-top: 2px;
}


/* =========================================================
   GUIDING PRINCIPLES
========================================================= */

.principles-heading {
    margin-top: 64px;
    margin-bottom: 12px;
}

.principles-grid {
    width: min(850px, 100%);
    margin: 0 auto 25px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 15px;
}

.principle-card {
    min-height: 270px;
    border: 1px solid #dedede;
    border-radius: 25px;
    overflow: hidden;
    background: #f8f8f8;
    display: flex;
    flex-direction: column;
}

.principle-content {
    flex: 1;
    padding: 13px 18px;
}

.principle-content h3 {
    margin: 0 0 9px;
    text-align: center;
    font-size: 18px;
    font-weight: 600;
}

.principle-content p {
    margin: 0;
    font-size: 16px;
    line-height: 1.5;
    color: #333;
}

.principle-card img {
    width: 100%;
    height: 130px;
    object-fit: cover;
    display: block;
}


/* =========================================================
   COMPLIANCE
========================================================= */

.compliance-section {
    width: calc(100% + 40px);
    margin-left: -20px;
    margin-top:70px;
    padding: 20px 20px 25px;
    background: #fafafa;
}

.compliance-section .about-section-heading {
    margin-bottom: -50px;
}

@media (max-width: 767px) {

    .stats-section {
        margin: 15px 0px;
        border-radius: 20px;
    }

    .stats-grid {
        grid-template-columns: repeat(2, 1fr);
        padding: 20px 8px;
        min-height: 210px;
    }

    .stat-value {
        font-size: 34px;
    }

    .stat-label {
        font-size: 10px;
        line-height: 1.3;
    }

    .stats-certs {
        margin-top: 35px;
        gap: 25px;
        padding: 0 15px;
    }

    .stats-cert-img {
        height: 65px;
        max-width: 120px;
    }
}

/* =========================================================
   ASSOCIATIONS / EMPANELMENTS
========================================================= */

.association-section {
    width: min(1000px, 100%);
    margin: 72px auto 0;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 10px;
}

.association-box {
    min-height: 300px;
    border: 1px solid #ddd;
    border-radius: 7px;
    padding: 10px 8px;
    background: #fff;
}

.association-box h2 {
    margin: 0 0 9px;
    text-align: center;
    font-size: 25px;
    font-weight: 500;
}

.association-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 8px;
}

.association-logo {
    height: 80px;
    border: 1px solid #e4e4e4;
    border-radius: 4px;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 5px 10px;
}

.association-logo img {
    max-width: 100%;
    max-height: 80px;
    padding:10px;
    object-fit: contain;
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
/* Hide hero graphic on desktop and tablet */
.hero-graphic {
    display: none;
}

/* Show hero graphic only on mobile */
@media (max-width: 600px) {
    .hero-graphic {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 25px;
    }

    .hero-graphic-img {
        display: block;
        width: 75%;
        max-width: 280px;
        height: auto;
        margin: 0 auto;
    }
}
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
/* =========================================================
   ABOUT US PAGE — RESPONSIVE CSS ONLY
   EXCLUDES:
   - Header
   - Hero
   - CTA
========================================================= */


/* =========================================================
   TABLET — 601px TO 1023px
========================================================= */

@media (min-width: 601px) and (max-width: 1023px) {

    .about-company-section {
        width: 100%;
        padding: 25px 24px 0;
    }

    /* -----------------------------------------------------
       COMPANY INTRO
    ----------------------------------------------------- */

    .about-intro-card {
        width: 100%;
        grid-template-columns: 1fr 1fr;
        gap: 25px;
        padding: 20px;
        border-radius: 12px;
    }

    .about-intro-content {
        padding: 0;
    }

    .about-small-label {
        font-size: 15px;
    }

    .about-intro-content h2 {
        font-size: 30px;
        line-height: 1.1;
    }

    .about-intro-content p {
        font-size: 14px;
        line-height: 1.5;
    }

    .about-intro-list li {
        font-size: 14px;
        gap: 8px;
    }

    .about-main-image {
        width: 100%;
        height: 300px;
        object-fit: cover;
    }

    .about-client-logos {
        gap: 8px;
        margin-top: 10px;
    }

    .about-logo-box {
        height: 85px;
    }

    .about-logo-box img {
        max-height: 70px;
    }


    /* -----------------------------------------------------
       TECHNOLOGY IMAGES
    ----------------------------------------------------- */

    .about-tech-images {
        width: 100%;
        grid-template-columns: 1fr 1fr;
        gap: 0;
        margin: 45px auto 20px;
    }

    .about-tech-image {
        height: 260px;
    }

    .tech-image-large {
        height: 290px;
        width: calc(100% + 25px);
    }


    /* -----------------------------------------------------
       SECTION HEADINGS
    ----------------------------------------------------- */

    .about-section-heading {
        margin: 55px auto 20px;
    }

    .about-section-heading h2 {
        font-size: 30px;
    }

    .about-section-heading p {
        font-size: 15px;
    }


    /* -----------------------------------------------------
       TECHNOLOGICAL STRENGTHS
    ----------------------------------------------------- */

    .technology-strengths {
        width: 100%;
        grid-template-columns: repeat(3, 1fr);
        gap: 10px;
        margin-bottom: 35px;
    }

    .strength-card {
        min-height: 150px;
        padding: 15px;
        flex-direction: column;
        text-align: center;
        justify-content: center;
        gap: 10px;
    }

    .strength-icon {
        width: 60px;
        height: 60px;
        flex: 0 0 60px;
    }

    .strength-icon img {
        width: 60px;
        height: 60px;
    }

    .strength-card h3 {
        font-size: 18px;
    }

    .strength-card p {
        font-size: 13px;
        line-height: 1.4;
    }


    /* -----------------------------------------------------
       STATS
    ----------------------------------------------------- */

    .about-stats {
        width: 100%;
        min-height: 140px;
        grid-template-columns: repeat(4, 1fr);
        border-radius: 14px;
    }

    .about-stat {
        padding: 12px 8px;
    }

    .about-stat strong {
        font-size: 30px;
    }

    .about-stat span {
        font-size: 13px;
        line-height: 1.3;
    }


    /* -----------------------------------------------------
       LEADERSHIP
    ----------------------------------------------------- */

    .leadership-heading {
        margin-top: 55px;
    }

    .leadership-card,
    .leadership-card-reverse {
        width: 100%;
        grid-template-columns: 1fr 240px;
        gap: 20px;
        padding: 15px;
        border-radius: 12px;
    }

    .leadership-card-reverse {
        grid-template-columns: 240px 1fr;
    }

    .leadership-content {
        padding: 0;
    }

    .leadership-content p {
        font-size: 14px;
        line-height: 1.5;
    }

    .leadership-content h3 {
        font-size: 21px;
    }

    .leadership-content > span {
        font-size: 14px;
    }

    .leadership-image {
        height: 240px;
    }

    .leadership-image img {
        width: 240px;
        height: 240px;
        object-fit: contain;
    }


    /* -----------------------------------------------------
       MANAGEMENT TEAM
    ----------------------------------------------------- */

    .management-heading {
        margin-top: 50px;
    }

    .management-team {
        width: 100%;
    }

    .management-row {
        gap: 12px;
    }

    .management-row-bottom {
        margin-top: 12px;
    }

    .team-member {
        width: 240px;
        height: 240px;
    }

    .team-member-info {
        left: 6px;
        right: 6px;
        bottom: 6px;
        min-height: 42px;
        padding: 5px;
    }

    .team-member-info strong {
        font-size: 15px;
    }

    .team-member-info span {
        font-size: 13px;
    }


    /* -----------------------------------------------------
       GUIDING PRINCIPLES
    ----------------------------------------------------- */

    .principles-heading {
        margin-top: 55px;
    }

    .principles-grid {
        width: 100%;
        grid-template-columns: 1fr 1fr;
        gap: 15px;
    }

    .principle-card {
        min-height: 300px;
        border-radius: 18px;
    }

    .principle-content {
        padding: 18px;
    }

    .principle-content h3 {
        font-size: 17px;
    }

    .principle-content p {
        font-size: 14px;
        line-height: 1.5;
    }

    .principle-card img {
        height: 140px;
    }


    /* -----------------------------------------------------
       COMPLIANCE
    ----------------------------------------------------- */

    .compliance-section {
        width: calc(100% + 48px);
        margin-left: -24px;
        margin-top: 60px;
        padding: 25px 24px 35px;
    }

    .compliance-section .about-section-heading {
        margin-bottom: 25px;
    }

    .stats-certs {
        margin-top: 25px;
        gap: 40px;
    }

    .stats-cert-img {
        height: 90px;
        max-width: 160px;
    }


    /* -----------------------------------------------------
       ASSOCIATIONS
    ----------------------------------------------------- */

    .association-section {
        width: 100%;
        grid-template-columns: 1fr 1fr;
        gap: 15px;
        margin-top: 55px;
    }

    .association-box {
        min-height: 280px;
        padding: 15px;
        border-radius: 12px;
    }

    .association-box h2 {
        font-size: 22px;
        margin-bottom: 15px;
    }

    .association-grid {
        grid-template-columns: 1fr 1fr;
        gap: 10px;
    }

    .association-logo {
        height: 85px;
    }

    .association-logo img {
        max-height: 70px;
        padding: 7px;
    }
}


/* =========================================================
   MOBILE — UP TO 600px
========================================================= */

@media (max-width: 600px) {

    /* -----------------------------------------------------
       MAIN ABOUT CONTAINER
    ----------------------------------------------------- */

    .about-company-section {
        width: 100%;
        padding: 15px 12px 0;
        overflow: hidden;
    }


    /* -----------------------------------------------------
       COMPANY INTRODUCTION
    ----------------------------------------------------- */

    .about-intro-card {
        width: 100%;
        display: flex;
        flex-direction: column;
        gap: 18px;
        margin: 0 auto 25px;
        padding: 12px;
        border-radius: 12px;
    }

    /*
       Image comes first on mobile
    */
    .about-intro-visual {
        order: -1;
        width: 100%;
    }

    .about-intro-content {
        width: 100%;
        padding: 0;
    }

    .about-small-label {
        font-size: 13px;
        padding: 4px 8px;
        margin-bottom: 8px;
        border-radius: 4px;
    }

    .about-intro-content h2 {
        font-size: 26px !important;
        line-height: 1.12;
        margin-bottom: 12px;
    }

    .about-intro-content p {
        font-size: 14px;
        line-height: 1.55;
        margin-bottom: 10px;
    }

    .about-intro-list {
        margin-top: 12px;
    }

    .about-intro-list li {
        gap: 8px;
        margin-bottom: 9px;
        font-size: 13.5px;
        line-height: 1.4;
    }

    .about-intro-list li span {
        flex: 0 0 auto;
    }


    /* -----------------------------------------------------
       MAIN INTRO IMAGE
    ----------------------------------------------------- */

    .about-main-image {
        width: 100%;
        height: 215px;
        border-radius: 9px;
        object-fit: cover;
    }


    /* -----------------------------------------------------
       CLIENT LOGOS
    ----------------------------------------------------- */

    .about-client-logos {
        width: 100%;
        grid-template-columns: 1fr 1fr;
        gap: 8px;
        margin-top: 8px;
    }

    .about-logo-box {
        width: 100%;
        height: 78px;
        padding: 6px;
        border-radius: 6px;
    }

    .about-logo-box img {
        max-width: 92%;
        max-height: 65px;
    }


    /* -----------------------------------------------------
       TECHNOLOGY IMAGES
    ----------------------------------------------------- */

    .about-tech-images {
        width: 100%;
        display: flex;
        flex-direction: column;
        gap: 12px;
        margin: 35px auto 15px;
    }

    .about-tech-image,
    .tech-image-large {
        width: 100%;
        height: 210px;
        border-radius: 10px;
        border-width: 4px;
    }

    .tech-image-large {
        height: 225px;
    }


    /* -----------------------------------------------------
       SECTION HEADINGS
    ----------------------------------------------------- */

    .about-section-heading {
        width: 100%;
        margin: 48px auto 18px;
        padding: 0 5px;
    }

    .about-section-heading h2 {
        font-size: 25px !important;
        line-height: 1.15;
    }

    .about-section-heading p {
        font-size: 13px;
        line-height: 1.4;
        margin-top: 5px;
    }


    /* -----------------------------------------------------
       TECHNOLOGICAL STRENGTHS
    ----------------------------------------------------- */

    .technology-strengths {
        width: 100%;
        display: flex;
        flex-direction: column;
        gap: 10px;
        margin: 0 auto 30px;
    }

    .strength-card {
        width: 100%;
        min-height: 100px;
        padding: 12px;
        display: flex;
        flex-direction: row;
        align-items: center;
        gap: 14px;
        border-radius: 9px;
    }

    .strength-icon {
        width: 55px;
        height: 55px;
        flex: 0 0 55px;
    }

    .strength-icon img {
        width: 55px;
        height: 55px;
    }

    .strength-card h3 {
        font-size: 17px;
        margin-bottom: 3px;
    }

    .strength-card p {
        font-size: 13px;
        line-height: 1.4;
    }


    /* -----------------------------------------------------
       COMPANY STATS
    ----------------------------------------------------- */

    .about-stats {
        width: 100%;
        min-height: auto;
        grid-template-columns: 1fr 1fr;
        border-radius: 13px;
        margin-bottom: 30px;
    }

    .about-stat {
        min-height: 100px;
        padding: 12px 8px;
    }

    .about-stat strong {
        font-size: 27px;
        margin-bottom: 5px;
    }

    .about-stat span {
        font-size: 12px;
        line-height: 1.3;
        max-width: 120px;
    }

    .about-stat:nth-child(2) {
        border-right: 0;
    }

    .about-stat:nth-child(1),
    .about-stat:nth-child(2) {
        border-bottom: 1px solid rgba(255,255,255,.7);
    }


    /* -----------------------------------------------------
       LEADERSHIP HEADING
    ----------------------------------------------------- */

    .leadership-heading {
        margin-top: 45px;
        margin-bottom: 18px;
    }


    /* -----------------------------------------------------
       LEADERSHIP CARDS
    ----------------------------------------------------- */

    .leadership-card,
    .leadership-card-reverse {
        width: 100%;
        display: flex;
        flex-direction: column;
        gap: 15px;
        padding: 12px;
        margin-bottom: 15px;
        border-radius: 12px;
    }

    /*
       Image always appears first
    */
    .leadership-image {
        order: -1;
        width: 100%;
        height: 250px;
    }

    .leadership-image img {
        width: 100%;
        height: 250px;
        object-fit: contain;
        border-radius: 9px;
    }

    .leadership-content {
        width: 100%;
        padding: 0 2px 5px;
    }

    .leadership-content p {
        font-size: 13.5px;
        line-height: 1.55;
        margin-bottom: 10px;
    }

    .leadership-content h3 {
        font-size: 20px;
        margin-top: 8px;
    }

    .leadership-content > span {
        font-size: 13px;
    }


    /* -----------------------------------------------------
       MANAGEMENT TEAM
    ----------------------------------------------------- */

    .management-heading {
        margin-top: 45px;
        margin-bottom: 18px;
    }

    .management-team {
        width: 100%;
        margin-bottom: 30px;
    }

    .management-row {
        width: 100%;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 9px;
    }

    .management-row-bottom {
        margin-top: 9px;
    }

    .team-member,
    .management-row-bottom .team-member,
    .management-row-bottom .team-member:last-child {
        width: 100%;
        height: 175px;
        border-radius: 9px;
    }

    .team-member img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .team-member-info {
        left: 4px;
        right: 4px;
        bottom: 4px;
        min-height: 39px;
        padding: 4px 3px;
        border-radius: 6px;
    }

    .team-member-info strong {
        font-size: 13px;
        line-height: 1.15;
    }

    .team-member-info span {
        font-size: 11px;
        line-height: 1.2;
        margin-top: 2px;
    }


    /* -----------------------------------------------------
       GUIDING PRINCIPLES
    ----------------------------------------------------- */

    .principles-heading {
        margin-top: 48px;
        margin-bottom: 18px;
    }

    .principles-grid {
        width: 100%;
        display: flex;
        flex-direction: column;
        gap: 14px;
        margin-bottom: 25px;
    }

    .principle-card {
        width: 100%;
        min-height: auto;
        border-radius: 17px;
    }

    .principle-content {
        padding: 17px 15px;
    }

    .principle-content h3 {
        font-size: 16px;
        margin-bottom: 8px;
    }

    .principle-content p {
        font-size: 13.5px;
        line-height: 1.55;
        text-align: center;
    }

    .principle-card img {
        width: 100%;
        height: 155px;
        object-fit: cover;
    }


    /* -----------------------------------------------------
       COMPLIANCE
    ----------------------------------------------------- */

    .compliance-section {
        width: calc(100% + 24px);
        margin-left: -12px;
        margin-top: 50px;
        padding: 25px 12px 30px;
    }

    .compliance-section .about-section-heading {
        margin-top: 0;
        margin-bottom: 20px;
    }

    .stats-certs {
        width: 100%;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        justify-items: center;
        align-items: center;
        gap: 18px;
        margin-top: 20px;
    }

    .stats-cert-img {
        width: 100%;
        max-width: 130px;
        height: 80px;
        object-fit: contain;
    }


    /* -----------------------------------------------------
       ASSOCIATIONS + EMPANELMENTS
    ----------------------------------------------------- */

    .association-section {
        width: 100%;
        display: flex;
        flex-direction: column;
        gap: 14px;
        margin-top: 45px;
    }

    .association-box {
        width: 100%;
        min-height: auto;
        padding: 13px 10px;
        border-radius: 10px;
    }

    .association-box h2 {
        font-size: 21px;
        margin-bottom: 12px;
    }

    .association-grid {
        width: 100%;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 8px;
    }

    .association-logo {
        width: 100%;
        height: 75px;
        border-radius: 6px;
        padding: 5px;
    }

    .association-logo img {
        max-width: 95%;
        max-height: 65px;
        padding: 5px;
        object-fit: contain;
    }
}


/* =========================================================
   SMALL MOBILE — UP TO 420px
========================================================= */

@media (max-width: 420px) {

    .about-company-section {
        padding-left: 10px;
        padding-right: 10px;
    }

    /* Intro */

    .about-intro-card {
        padding: 10px;
    }

    .about-intro-content h2 {
        font-size: 24px !important;
    }

    .about-intro-content p {
        font-size: 13px;
    }

    .about-intro-list li {
        font-size: 12.5px;
    }

    .about-main-image {
        height: 195px;
    }


    /* Technology images */

    .about-tech-image {
        height: 180px;
    }

    .tech-image-large {
        height: 195px;
        width:260px;
        margin-left:-90px;
    }

.tech-image-small{
 height: 195px;
        width:260px;
        margin-top:-80px;
        margin-right:-90px;
}

    /* Section headings */

    .about-section-heading h2 {
        font-size: 23px !important;
    }


    /* Strength cards */

    .strength-card {
        min-height: 92px;
        padding: 10px;
        gap: 11px;
    }

    .strength-icon,
    .strength-icon img {
        width: 48px;
        height: 48px;
    }

    .strength-icon {
        flex-basis: 48px;
    }

    .strength-card h3 {
        font-size: 16px;
    }

    .strength-card p {
        font-size: 12px;
    }


    /* Stats */

    .about-stat {
        min-height: 90px;
    }

    .about-stat strong {
        font-size: 24px;
    }

    .about-stat span {
        font-size: 11px;
    }


    /* Leadership */

    .leadership-image,
    .leadership-image img {
        height: 250px;
        width:100%;
    }

    .leadership-content p {
        font-size: 13px;
    }

    .leadership-content h3 {
        font-size: 18px;
    }


    /* Management */

    .management-row {
        grid-template-columns: 1fr 1fr;
        gap: 7px;
    }

    .team-member,
    .management-row-bottom .team-member,
    .management-row-bottom .team-member:last-child {
        height: 155px;
    }

    .team-member-info strong {
        font-size: 11.5px;
    }

    .team-member-info span {
        font-size: 11px;
    }


    /* Principles */

    .principle-content {
        padding: 15px 12px;
    }

    .principle-content h3 {
        font-size: 15px;
    }

    .principle-content p {
        font-size: 12.5px;
    }

    .principle-card img {
        height: 135px;
    }


    /* Certifications */

    .stats-certs {
        gap: 10px;
    }

    .stats-cert-img {
        max-width: 115px;
        height: 70px;
    }


    /* Associations */

    .association-box h2 {
        font-size: 19px;
    }

    .association-logo {
        height: 68px;
    }

    .association-logo img {
        max-height: 58px;
    }
}
/* =========================================================
   MOBILE FINAL OVERRIDES
   Team + Vision/Mission
========================================================= */

@media (max-width: 600px) {

    /* =====================================================
       VISION + MISSION
       IMAGE FIRST
       CONTENT SECOND
    ===================================================== */

    .principles-grid {
        display: flex;
        flex-direction: column;
        width: 100%;
        gap: 16px;
    }

    .principle-card {
        width: 100%;
        display: flex;
        flex-direction: column;
        min-height: auto;
        border-radius: 17px;
        overflow: hidden;
    }

    /* Force image to always appear first */
    .principle-card img {
        order: -1;
        width: 100%;
        height: 180px;
        object-fit: cover;
        display: block;
    }

    /* Content below image */
    .principle-content {
        order: 2;
        width: 100%;
        padding: 18px 15px 20px;
        text-align: center;
    }

    .principle-content h3 {
        margin: 0 0 9px;
        font-size: 17px;
        font-weight: 600;
        text-align: center;
    }

    .principle-content p {
        margin: 0;
        font-size: 13.5px;
        line-height: 1.55;
        text-align: center;
    }
}


/* =========================================================
   VERY SMALL MOBILE
========================================================= */

@media (max-width: 420px) {

    /* Team members remain one per row */

    .team-member,
    .management-row-bottom .team-member,
    .management-row-bottom .team-member:last-child {
        width: 100% !important;
        height: 240px;
    }

    /* Vision / Mission */

    .principle-card img {
        height: 160px;
    }

    .principle-content {
        padding: 16px 13px 18px;
    }

    .principle-content h3 {
        font-size: 16px;
    }

    .principle-content p {
        font-size: 13px;
    }
}
@media (max-width: 600px) {

    /* =====================================================
       COMPLIANCE & STANDARDS
       ALL LOGOS IN ONE ROW
    ===================================================== */

    .stats-certs {
        width: 100%;
        display: flex;
        flex-wrap: nowrap;
        justify-content: center;
        align-items: center;
        gap: 8px;
        margin-top: 20px;
    }

    .stats-cert-img {
        width: auto;
        height: 55px;
        max-width: 22%;
        object-fit: contain;
        flex: 1 1 0;
    }
}
</style>

@endsection