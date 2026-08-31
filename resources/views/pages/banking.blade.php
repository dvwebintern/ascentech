@extends('layouts.app')
@section('title', 'Banking Solutions')

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
                <h1 class="hero-title">Banking Solutions</h1>
                <p class="hero-subtitle">IFSC, Finance, Banking Solution</p>
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
             <div class="hero-float-buttons">
                <a href="{{ route('products.nagarkaryavali') }}" class="btn btn-accent">View Products</a>
                <a href="{{ route('contact') }}" class="btn btn-outline-white">Contact us →</a>
            </div>
        </div>
    </div>

</section>
{{-- REVENUE LEAKAGE INTRO --}}
<section class="bnk-intro-section">
    <div class="bnk-container">
        <div class="nag-section-heading">
            <h2>Traditional Methods Can Lead To <span>Revenue Leakage</span></h2>
            <p>Inefficiencies lead to delays and non-compliance</p>
        </div>

        <div class="bnk-intro-card">
            <div class="bnk-intro-image">
                <img src="{{ asset('images/banking solutions/dummy-mockup.webp') }}" alt="Debt Collection Platform">
            </div>
            <div class="bnk-intro-content">
                <h3>Debt Collection Platform</h3>
                <p>Our Debt Collection Platform is a complete solution, based on technology that helps organise and optimise the entire collections lifecycle. It is made for efficiency, compliance and scalability and empowers the organisations to recover outstanding dues and maintain strong customer relationships. It can be easily integrated through standard web-based APIs with any CRM, CBS or Big Data lake. The platform has evolved over the years, starting from Symbian phones to AI-powered, through actual learning in the field across various domains, as the collection ecosystem has changed over time. The platform also takes care of all regulatory requirements.</p>
                <p>Our solution is ideal for Banks, NBFCs, Fintech Companies, Telecom Providers, Digital Media and any organisation managing high volumes of receivables.</p>
            </div>
        </div>
    </div>
</section>

{{-- PLATFORM HIGHLIGHTS --}}
<section class="bnk-highlights-section">
    <div class="bnk-container">
        <div class="nag-section-heading">
            <h2>Platform <span>Highlights</span></h2>
            <p>Faster collection and easier payments</p>
        </div>

        <div class="bnk-highlights-grid">
            <div class="bnk-highlight-card">
                <div class="bnk-highlight-icon">
                    <img
                        src="{{ asset('images/banking solutions/Intelligent Case Management.svg') }}"
                        alt="">
                </div>
                <h3>Intelligent Case Management</h3>
                <p>Easily track, manage and prioritise accounts with a centralised dashboard. Automate workflows and assign cases based on predefined rules to improve productivity.</p>
            </div>
            <div class="bnk-highlight-card">
                <div class="bnk-highlight-icon">
                    <img
                        src="{{ asset('images/banking solutions/Automated Communication.svg') }}"
                        alt="">
                </div>
                <h3>Automated Communication</h3>
                <p>Engage customers through Multi-Channel Communication, which includes SMS, Email and Voice Reminders. Schedule and Personalise Outreach to Increase Response Rates.</p>
            </div>
            <div class="bnk-highlight-card">
                <div class="bnk-highlight-icon">
                    <img
                        src="{{ asset('images/banking solutions/Real-Time Analytics & Reporting.svg') }}"
                        alt="">
                </div>
                <h3>Real-Time Analytics & Reporting</h3>
                <p>Gain Actionable Insights with Detailed Reports and Performance Dashboards. Monitor Recovery Rates, Agent Productivity and Collection Trends in Real Time.</p>
            </div>
            <div class="bnk-highlight-card">
                <div class="bnk-highlight-icon">
                    <img
                        src="{{ asset('images/banking solutions/Secure and compliant collection processes according to industry needs.svg') }}"
                        alt="">
                </div>
                <h3>Compliance & Security</h3>
                <p>Align with Regulatory Requirements with Built-In Compliance Checks, Audit Trails and Secure Data Handling Protocols.</p>
            </div>
            <div class="bnk-highlight-card">
                <div class="bnk-highlight-icon">
                    <img
                        src="{{ asset('images/banking solutions/Payment Integration.svg') }}"
                        alt="">
                </div>
                <h3>Payment Integration</h3>
                <p>Offer Uninterrupted Payment Options through Integrated Payment Gateways to Make it Easy for Customers to Settle Dues Quickly.</p>
            </div>
            <div class="bnk-highlight-card">
                <div class="bnk-highlight-icon">
                    <img
                        src="{{ asset('images/banking solutions/AI-Powered Insights.svg') }}"
                        alt="">
                </div>
                <h3>AI-Powered Insights</h3>
                <p>Utilise Advanced Analytics and Predictive Models to Prioritise High-Value Accounts and Improve Recovery Strategies.</p>
            </div>
        </div>
    </div>
</section>

{{-- KEY OUTCOMES --}}
<section class="bnk-outcomes-section">
    <div class="bnk-container">
        <div class="nag-section-heading">
            <h2>Key <span>Outcomes</span></h2>
            <p>Simplified processes with low costs</p>
        </div>

        <div class="bnk-outcomes-list">
            <div class="bnk-outcome-item"><span>✓</span> Improved recovery rates through data-driven strategies</div>
            <div class="bnk-outcome-item"><span>✓</span> Reduced operational costs via automation</div>
            <div class="bnk-outcome-item"><span>✓</span> Improved customer experience with personalised engagement</div>
            <div class="bnk-outcome-item"><span>✓</span> Scalable architecture to support business growth</div>
            <div class="bnk-outcome-item"><span>✓</span> Full visibility and control over collection processes</div>
        </div>
    </div>
</section>

{{-- OUR IMPACT --}}
<section class="bnk-impact-section">
    <div class="bnk-container">
        <div class="bnk-impact-grid">
            <div class="bnk-impact-content">
                <h2>Our <span>Impact</span></h2>
                <p class="bnk-impact-subtitle">One platform that solves many challenges</p>
                <p>Our Debt Collection Platform is trusted by a growing network of organisations across financial services, digital media and related industries. We have successfully partnered with Banks, NBFCs, Fintech companies, Service Providers, Telcos, Cable TV and Broadband companies to organise their collections and improve recovery outcomes.</p>
                <p>With a strong focus on performance and reliability, our platform currently supports:</p>
            </div>

            <div class="bnk-impact-points">
                <div class="bnk-impact-point">
                    <div class="bnk-impact-icon">
                        <img
                        src="{{ asset('images/banking solutions/A diverse portfolio of enterprise and mid-sized clients.svg') }}"
                        alt="">
                    </div>
                    <p>A diverse portfolio of enterprise and mid-sized clients</p>
                </div>
                <div class="bnk-impact-point">
                    <div class="bnk-impact-icon">
                        <img
                        src="{{ asset('images/banking solutions/High-volume debt recovery operations across multiple regions.svg') }}"
                        alt="">
                    </div>
                    <p>High-volume debt recovery operations across multiple regions</p>
                </div>
                <div class="bnk-impact-point">
                    <div class="bnk-impact-icon">
                        <img
                        src="{{ asset('images/banking solutions/Secure and compliant collection processes according to industry needs.svg') }}"
                        alt="">
                    </div>
                    <p>Secure and compliant collection processes according to industry needs</p>
                </div>
            </div>
        </div>

        <div class="bnk-impact-note">
            <div class="bnk-impact-icon iconbox">
                        <img
                        src="{{ asset('images/banking solutions/We maintain the highest..svg') }}"
                        alt="">
                    </div>
            <p>We maintain the highest standards of confidentiality and data security so that every client relationship is built on trust and long-term value.</p>
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

    /* ===================== BANKING SOLUTIONS CONTENT ===================== */
.bnk-container { width: min(1200px, calc(100% - 48px)); margin: 0 auto; }

.nag-section-heading { text-align: center; margin-bottom: 40px; }
.nag-section-heading h2 { font-family: "Inter Tight", sans-serif; font-size: 40px; font-weight: 700; color: #111; margin-bottom: 8px; }
.nag-section-heading h2 span { color: #2E3192; }
.nag-section-heading p { font-size: 16px; color: #888; margin: 0; }

/* INTRO CARD */
.bnk-intro-section { padding: 40px 0 40px; background: #fff; }
.bnk-intro-card { display: grid; grid-template-columns: 1fr; gap: 0; border: 1px solid #e5e7eb; border-radius: 14px; overflow: hidden; }
@media (min-width: 900px) { .bnk-intro-card { grid-template-columns: 45% 55%; } }
.bnk-intro-image { background: #f7f8fb; display: flex; align-items: center; justify-content: center; padding: 10px; }
.bnk-intro-image img { width: 100%; height: 300px; object-fit: cover; }
.bnk-intro-content { padding: 28px 32px; }
.bnk-intro-content h3 { font-size: 26px; font-weight: 700; color: #111; margin-bottom: 14px; }
.bnk-intro-content p { font-size: 16px; line-height: 1.7; color: #555; margin-bottom: 14px; }

/* HIGHLIGHTS */
.bnk-highlights-section { padding: 50px 0; background: #fff; }
.bnk-highlights-grid { display: grid; grid-template-columns: 1fr; gap: 16px; }
@media (min-width: 700px) { .bnk-highlights-grid { grid-template-columns: 1fr 1fr; } }
@media (min-width: 1000px) { .bnk-highlights-grid { grid-template-columns: repeat(3, 1fr); } }
.bnk-highlight-card { border: 1px solid #e5e7eb; border-radius: 12px; padding: 24px; text-align: center; }
.bnk-highlight-icon { width: 60px; height: 60px; margin: 0 auto 14px; border-radius: 50%; background: #eef0fa; display: flex; align-items: center; justify-content: center; font-size: 22px; }
.bnk-highlight-card h3 { font-size: 18px; font-weight: 700; color: #2E3192; margin-bottom: 10px; }
.bnk-highlight-card p { font-size: 16px; line-height: 1.6; color: #666; margin: 0; }

/* KEY OUTCOMES */
.bnk-outcomes-section { padding: 50px 0; background: #f4f5fa; }
.bnk-outcomes-list { max-width: 450px; margin: 0 auto; display: flex; flex-direction: column; gap: 14px; }
.bnk-outcome-item { font-size: 17px; color: #333; display: flex; gap: 10px; align-items: flex-start; }
.bnk-outcome-item span { color: #2E3192; font-weight: 700; flex-shrink: 0; }

/* IMPACT */
.bnk-impact-section { padding: 60px 0; background: #fff; }
.bnk-impact-grid { display: grid; grid-template-columns: 1fr; gap: 40px; margin-bottom: 32px; }
@media (min-width: 900px) { .bnk-impact-grid { grid-template-columns: 1fr 1fr; } }
.bnk-impact-content h2 { font-family: "Inter Tight", sans-serif; font-size: 40px; font-weight: 700; color: #111; margin-bottom: 4px; }
.bnk-impact-content h2 span { color: #2E3192; }
.bnk-impact-subtitle { font-size: 16px; color: #888; margin-bottom: 16px; }
.bnk-impact-content p { font-size: 16px; line-height: 1.7; color: #555; margin-bottom: 12px; }

.bnk-impact-points { display: flex; flex-direction: column; gap: 20px; justify-content: center; }
.bnk-impact-point { display: flex; align-items: center; gap: 14px; }
.bnk-impact-icon { width: 44px; height: 44px; flex-shrink: 0; border-radius: 50%; background: #eef0fa; display: flex; align-items: center; justify-content: center; font-size: 18px; }
.bnk-impact-point p { font-size: 16px; color: #333; margin: 0; }
.bnk-impact-note { background: #f4f5fa; border-radius: 14px; padding: 24px 32px; text-align: center; }
.bnk-impact-note p { font-size: 14px; color: #555;  margin-top: -35px; line-height: 1.6; }
/* ===================== GLOBAL HELPERS ===================== */
.text-center { text-align: center; }
.mb-12 { margin-bottom: 48px; }

/* ===================== HERO ===================== */
.hero-section { position: relative; }
.hero-bg {
    width: calc(100% - 30px);
    background-image: url('{{ asset('images/banking solutions/Banking Solutions Banner 1200x500 product page.png') }}');
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
   TABLET
========================================================= */

@media (max-width: 900px) {

    .services-page-container {
        width: calc(100% - 30px);
    }

    .service-content p {
        font-size: 8px;
    }

    .service-content li {
        font-size: 7.5px;
    }

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

   BANKING SOLUTIONS — PHONE VIEW ONLY

   Header + Hero CSS NOT INCLUDED

   ========================================================= */

@media (max-width: 767px) {

    /* -----------------------------------------------------

       GLOBAL CONTAINER

    ----------------------------------------------------- */

    .bnk-container {

        width: calc(100% - 30px);

        max-width: 100%;

        margin: 0 auto;

    }

    /* -----------------------------------------------------

       SECTION HEADINGS

    ----------------------------------------------------- */

    .nag-section-heading {

        text-align: center;

        margin-bottom: 24px;

        padding: 0 5px;

    }

    .nag-section-heading h2 {

        font-size: 27px;

        line-height: 1.15;

        margin: 0 0 8px;

    }

    .nag-section-heading p {

        font-size: 13px;

        line-height: 1.45;

        margin: 0;

    }

    /* =====================================================

       REVENUE LEAKAGE INTRO

       ===================================================== */

    .bnk-intro-section {

        padding: 38px 0 35px;

        background: #fff;

    }

    .bnk-intro-card {

        display: flex;

        flex-direction: column;

        width: 100%;

        border-radius: 14px;

        overflow: hidden;

    }

    .bnk-intro-image {

        width: 100%;

        padding: 0;

        background: #f7f8fb;

    }

    .bnk-intro-image img {

        display: block;

        width: 100%;

        height: 210px;

        object-fit: cover;

    }

    .bnk-intro-content {

        padding: 22px 18px 24px;

    }

    .bnk-intro-content h3 {

        font-size: 21px;

        line-height: 1.25;

        margin: 0 0 12px;

    }

    .bnk-intro-content p {

        font-size: 14px;

        line-height: 1.65;

        margin: 0 0 13px;

        color: #555;

    }

    .bnk-intro-content p:last-child {

        margin-bottom: 0;

    }

    /* =====================================================

       PLATFORM HIGHLIGHTS

       ===================================================== */

    .bnk-highlights-section {

        padding: 38px 0;

        background: #fff;

    }

    .bnk-highlights-grid {

        display: grid;

        grid-template-columns: 1fr;

        gap: 13px;

    }

    .bnk-highlight-card {

        width: 100%;

        padding: 22px 18px;

        border-radius: 13px;

        text-align: center;

    }

    .bnk-highlight-icon {

        width: 56px;

        height: 56px;

        margin: 0 auto 13px;

        border-radius: 50%;

    }

    .bnk-highlight-icon img {

        width: 30px;

        height: 30px;

        object-fit: contain;

    }

    .bnk-highlight-card h3 {

        font-size: 17px;

        line-height: 1.3;

        margin: 0 0 9px;

    }

    .bnk-highlight-card p {

        font-size: 13.5px;

        line-height: 1.6;

        margin: 0;

    }

    /* =====================================================

       KEY OUTCOMES

       ===================================================== */

    .bnk-outcomes-section {

        padding: 38px 0;

        background: #f4f5fa;

    }

    .bnk-outcomes-list {

        width: 100%;

        max-width: none;

        margin: 0;

        gap: 13px;

    }

    .bnk-outcome-item {

        width: 100%;

        font-size: 14px;

        line-height: 1.55;

        gap: 9px;

        align-items: flex-start;

    }

    .bnk-outcome-item span {

        font-size: 15px;

        line-height: 1.5;

    }

    /* =====================================================

       OUR IMPACT

       ===================================================== */

    .bnk-impact-section {

        padding: 42px 0;

        background: #fff;

    }

    .bnk-impact-grid {

        display: flex;

        flex-direction: column;

        gap: 28px;

        margin-bottom: 25px;

    }

    .bnk-impact-content h2 {

        font-size: 28px;

        line-height: 1.15;

        margin: 0 0 5px;

    }

    .bnk-impact-subtitle {

        font-size: 13px;

        line-height: 1.45;

        margin: 0 0 15px;

    }

    .bnk-impact-content p {

        font-size: 14px;

        line-height: 1.65;

        margin-bottom: 12px;

    }

    .bnk-impact-content p:last-child {

        margin-bottom: 0;

    }

    /* -----------------------------------------------------

       IMPACT POINTS

       ----------------------------------------------------- */

    .bnk-impact-points {

        display: flex;

        flex-direction: column;

        gap: 15px;

    }

    .bnk-impact-point {

        display: flex;

        align-items: center;

        gap: 12px;

    }

    .bnk-impact-icon {

        width: 43px;

        height: 43px;

        min-width: 43px;

        border-radius: 50%;

    }

    .bnk-impact-icon img {

        width: 24px;

        height: 24px;

        object-fit: contain;

    }

    .bnk-impact-point p {

        font-size: 13.5px;

        line-height: 1.5;

        margin: 0;

    }

    /* -----------------------------------------------------

       IMPACT NOTE

       ----------------------------------------------------- */

    .bnk-impact-note {

        display: flex;

        align-items: center;

        gap: 12px;

        padding: 17px 16px;

        border-radius: 13px;

        text-align: left;

    }

    .bnk-impact-note .iconbox {

        width: 42px;

        min-width: 42px;

        height: 42px;

    }

    .bnk-impact-note .iconbox img {

        width: 23px;

        height: 23px;

        object-fit: contain;

    }

    .bnk-impact-note p {

        margin: 0 !important;

        font-size: 12.5px;

        line-height: 1.55;

        color: #555;

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

    /* =====================================================

       SMALL PHONE — 360px AND BELOW

       ===================================================== */

    @media (max-width: 380px) {

        .bnk-container {

            width: calc(100% - 24px);

        }

        .nag-section-heading h2 {

            font-size: 24px;

        }

        .nag-section-heading p {

            font-size: 12px;

        }

        .bnk-intro-content {

            padding: 19px 15px 21px;

        }

        .bnk-intro-content h3 {

            font-size: 19px;

        }

        .bnk-intro-content p {

            font-size: 13px;

        }

        .bnk-highlight-card {

            padding: 19px 15px;

        }

        .bnk-highlight-card h3 {

            font-size: 16px;

        }

        .bnk-highlight-card p {

            font-size: 13px;

        }

        .bnk-outcome-item {

            font-size: 13px;

        }

        .bnk-impact-content h2 {

            font-size: 25px;

        }

        .bnk-impact-point p {

            font-size: 13px;

        }

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

}
</style>

@endsection