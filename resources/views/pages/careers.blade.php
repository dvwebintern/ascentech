@extends('layouts.app')
@section('title', 'Careers')

@section('content')
{{-- =========================================================
     MOBILE STICKY HEADER
     MOBILE ONLY — DOES NOT AFFECT DESKTOP
========================================================= --}}

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
               <h1 class="hero-title">Welcome to Careers at ASCENTech
</h1>
                <p class="hero-subtitle">Find out a great career opportunity and let’s grow together
</p>
            </div>
            <div class="hero-graphic">
                <img src="{{ asset('images/career/person 1000x1000 (1).png') }}" alt="" class="hero-graphic-img">
            </div>
        </div>
    </div>

    {{-- Floating nav + CTA row --}}
<div class="hero-float-row" x-show="!scrolled" x-transition.opacity>
        <div class="hero-float-inner">
            <div class="hero-float-nav">
                @include('partials.nav-links')
            </div>
            <div class="hero-float-buttons">
                <a href="{{ route('contact') }}" class="btn btn-outline-white">Contact us →</a>
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
     SECTION 1 — WE ARE HIRING
========================================================= --}}

<section class="careers-hiring-section">

    <div class="careers-main-container">

        <h2 class="careers-main-title">
            We Are <span>Hiring!</span>
        </h2>

        <div class="careers-jobs-grid">

            {{-- JOB 1 --}}
            <div class="career-job-card">

                <div class="career-job-content">
                    <h3>ASP .Net C# (WebForms)</h3>
                    <p class="career-location">Virar</p>
                </div>

                <div class="career-job-bottom">
                    <div class="career-job-type">
                        <span class="clock-icon">◷</span>
                        Full Time
                    </div>

                    <a href="#apply" class="career-apply-btn" data-career-apply>
                        Apply Now <span>↗</span>
                    </a>
                </div>

            </div>


            {{-- JOB 2 --}}
            <div class="career-job-card">

                <div class="career-job-content">
                    <h3>Marketing Executive</h3>
                    <p class="career-location">Thane</p>
                </div>

                <div class="career-job-bottom">
                    <div class="career-job-type">
                        <span class="clock-icon">◷</span>
                        Full Time
                    </div>

                    <a href="#apply" class="career-apply-btn" data-career-apply>
                        Apply Now <span>↗</span>
                    </a>
                </div>

            </div>


            {{-- JOB 3 --}}
            <div class="career-job-card">

                <div class="career-job-content">
                    <h3>Accounts Executive</h3>
                    <p class="career-location">Virar</p>
                </div>

                <div class="career-job-bottom">
                    <div class="career-job-type">
                        <span class="clock-icon">◷</span>
                        Full Time
                    </div>

                    <a href="#apply" class="career-apply-btn" data-career-apply>
                        Apply Now <span>↗</span>
                    </a>
                </div>

            </div>


            {{-- JOB 4 --}}
            <div class="career-job-card">

                <div class="career-job-content">
                    <h3>React Js Developer</h3>
                    <p class="career-location">Thane</p>
                </div>

                <div class="career-job-bottom">
                    <div class="career-job-type">
                        <span class="clock-icon">◷</span>
                        Full Time
                    </div>

                    <a href="#apply" class="career-apply-btn" data-career-apply>
                        Apply Now <span>↗</span>
                    </a>
                </div>

            </div>


            {{-- JOB 5 --}}
            <div class="career-job-card">

                <div class="career-job-content">
                    <h3>Implementation Executive</h3>
                    <p class="career-location">Thane</p>
                </div>

                <div class="career-job-bottom">
                    <div class="career-job-type">
                        <span class="clock-icon">◷</span>
                        Full Time
                    </div>
                    <a href="#apply" class="career-apply-btn" data-career-apply>
                        Apply Now <span>↗</span>
                    </a>
                </div>

            </div>


            {{-- JOB 6 --}}
            <div class="career-job-card">

                <div class="career-job-content">
                    <h3>PostgreSQL Developer</h3>
                    <p class="career-location">Virar</p>
                </div>

                <div class="career-job-bottom">
                    <div class="career-job-type">
                        <span class="clock-icon">◷</span>
                        Full Time
                    </div>

                    <a href="#apply" class="career-apply-btn" data-career-apply>
                        Apply Now <span>↗</span>
                    </a>
                </div>

            </div>


            {{-- JOB 7 --}}
            <div class="career-job-card">

                <div class="career-job-content">
                    <h3>Administrative Assistant</h3>
                    <p class="career-location">Virar</p>
                </div>

                <div class="career-job-bottom">
                    <div class="career-job-type">
                        <span class="clock-icon">◷</span>
                        Full Time
                    </div>

                    <a href="#apply" class="career-apply-btn" data-career-apply>
                        Apply Now <span>↗</span>
                    </a>
                </div>

            </div>


            {{-- JOB 8 --}}
            <div class="career-job-card">

                <div class="career-job-content">
                    <h3>Software Tester</h3>
                    <p class="career-location">Thane</p>
                </div>

                <div class="career-job-bottom">
                    <div class="career-job-type">
                        <span class="clock-icon">◷</span>
                        Full Time
                    </div>

                    <a href="#apply" class="career-apply-btn" data-career-apply>
                        Apply Now <span>↗</span>
                    </a>
                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     SECTION 2 — WHY WORK AT ASCENTECH
========================================================= --}}

<section class="careers-why-section">

    <div class="careers-why-container">

        <h2 class="careers-main-title">
            Why Work At <span>ASCENTech</span>
        </h2>


        <div class="careers-why-grid">

            {{-- LEARN --}}
            <div class="career-reason">

                <div class="career-reason-icon">
                    <img src="{{ asset('images/career/Learn.svg') }}" alt="">
                </div>

                <div class="career-reason-content">
                    <h3>Learn</h3>

                    <p>
                        If you are ready to work with our skilled professionals
                        and share your ideas, this is for you.
                    </p>
                </div>

            </div>


            {{-- GROW --}}
            <div class="career-reason">

                <div class="career-reason-icon">
                    <img src="{{ asset('images/career/Grow.svg') }}" alt="">
                </div>

                <div class="career-reason-content">
                    <h3>Grow</h3>

                    <p>
                        Be a part of big projects to solve real-world challenges
                        and grow with the company every day.
                    </p>
                </div>

            </div>


            {{-- MAKE AN IMPACT --}}
            <div class="career-reason">

                <div class="career-reason-icon">
                    <img src="{{ asset('images/career/Make An Impact.svg') }}" alt="">
                </div>

                <div class="career-reason-content">
                    <h3>Make An Impact</h3>

                    <p>
                        Contribute to projects that simplify the operations
                        for the government as well as the citizens.
                    </p>
                </div>

            </div>


            {{-- CULTURE --}}
            <div class="career-reason">

                <div class="career-reason-icon">
                    <img src="{{ asset('images/career/Culture.svg') }}" alt="">
                </div>

                <div class="career-reason-content">
                    <h3>Culture</h3>

                    <p>
                        No Two people are the same. We have an inclusive culture
                        where we value ideas, diversity and teamwork.
                    </p>
                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     SECTION 3 — LIFE AT ASCENTECH
========================================================= --}}

<section class="careers-life-section">

    <div class="careers-life-container">

        <div class="careers-life-image">
            <img
                src="{{ asset('images/career/Life at ascentech 800x600.png') }}"
                alt="Life At ASCENTech">
        </div>


        <div class="careers-life-content">

            <h2>
                Life At <span>ASCENTech</span>
            </h2>

            <p>
                Our responsibility goes beyond just software development as
                our products play an important role in the operations of the
                Urban Local Bodies, besides other sectors. Thus, we always
                focus on accuracy and development according to the diverse
                needs. We also value every idea brought by our employees,
                as it helps us grow continuously. Overall, it is how ASCENTech
                has positioned itself as a prominent software development
                company in India.
            </p>


            <ul class="careers-life-list">

                <li>
                    <span>✓</span>
                    Gain real-world industry knowledge
                </li>

                <li>
                    <span>✓</span>
                    Have a work-life balance
                </li>

                <li>
                    <span>✓</span>
                    Get expert guidance and mentorship
                </li>

                <li>
                    <span>✓</span>
                    Work on projects that make a global impact
                </li>

                <li>
                    <span>✓</span>
                    Learn new skills and adapt
                </li>

                <li>
                    <span>✓</span>
                    Stay updated with the latest technologies
                </li>

            </ul>

        </div>

    </div>

</section>


<style>
/* ===================== GLOBAL HELPERS ===================== */
.text-center { text-align: center; }
.mb-12 { margin-bottom: 48px; }

/* ===================== HERO ===================== */
.hero-section { position: relative; }
.hero-bg {
    width: calc(100% - 30px);
    background-image: url('{{ asset('images/Website-Banner-1200x500-service-page-blue-1.webp') }}');
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
    margin-top:-130px;
    margin-bottom: 24px;
    max-width: 750px;
    font-family: "Inter Tight", sans-serif;
    font-size: clamp(32px, 3.5vw, 53px);
    font-weight: 600;
    line-height: 1.2em;
}
.hero-subtitle { font-size: 18px; color: #e5e7eb; margin-bottom: 0px; max-width: 550px; }
.hero-trust { font-size: 18px; color: #e5e7eb; margin-bottom: 40px; max-width: 750px; }
.hero-graphic { display: flex; justify-content: bottom center; margin-top: 20px;
margin-bottom:-50px; }
.hero-graphic-img { width: 100%; max-width: 390px; margin-right: clamp(14px, 6vw, -20px); }
@media (min-width: 1024px) {
    .hero-content { grid-template-columns: 1fr 1fr; }
    .hero-graphic { justify-content: flex-end; }
}
.hero-float-row { max-width: 1600px; margin: -80px auto 0; position: relative; z-index: 10; padding: 0 8px; }
.hero-float-inner { display: flex; flex-wrap: nowrap; align-items: center; justify-content: space-between; gap: 24px; padding: 0 56px 24px; overflow-x: auto; }
.hero-float-nav { display: none; margin-left: 35px; }
@media (min-width: 1024px) { .hero-float-nav { display: block; } }

.btn { display: inline-flex; align-items: center; gap: 8px; padding: 9px 26px; border-radius: 999px; font-size: 17px; font-weight: 500; text-decoration: none; transition: background 0.2s ease, color 0.2s ease; white-space: nowrap; }
.btn-outline-white { border: 1px solid #fff; color: #1a1a1a;
background-color:white; }
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
   CAREERS PAGE
========================================================= */

.careers-main-container {
    width: min(1350px, calc(100% - 40px));
    margin: 0 auto;
}


/* =========================================================
   SECTION 1 — WE ARE HIRING
========================================================= */

.careers-hiring-section {
    padding: 75px 0 70px;
    background: #ffffff;
}

.careers-main-title {
    margin: 0 0 50px;
    text-align: center;
    font-family: "Inter Tight", sans-serif;
    font-size: clamp(40px, 4vw, 45px);
    line-height: 1.1;
    font-weight: 600;
    color: #171717;
}

.careers-main-title span {
    color: #080c91;
}


/* JOB GRID */

.careers-jobs-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 18px;
}


/* JOB CARD */

.career-job-card {
    min-height: 200px;
    padding: 30px 25px 25px;
    border: 1px solid #dedede;
    border-radius: 13px;
    background: #fff;

    display: flex;
    flex-direction: column;
    justify-content: space-between;

    box-sizing: border-box;
    transition: all .25s ease;
}

.career-job-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 30px rgba(0, 0, 0, .07);
}


/* JOB TITLE */

.career-job-content h3 {
    margin: 0 0 15px;
    font-family: "Inter Tight", sans-serif;
    font-size: 22px;
    line-height: 1.2;
    font-weight: 600;
    color: #111111;
}

.career-location {
    margin: 0;
    font-size: 16px;
    color: #171717;
}


/* DIVIDER */

.career-job-content {
    padding-bottom: 15px;
    border-bottom: 1px solid #e4e4f5;
}


/* BOTTOM */

.career-job-bottom {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 10px;
    padding-top: 10px;
}

.career-job-type {
    display: flex;
    align-items: center;
    gap: 7px;
    font-size: 16px;
    color: #111;
    white-space: nowrap;
}

.clock-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;

    width: 19px;
    height: 19px;

    font-size: 20px;
    line-height: 1;
    color: #080c91;
}


/* APPLY BUTTON */

.career-apply-btn {
    display: inline-flex;
    align-items: center;
    gap: 7px;

    padding: 6px 17px;

    border-radius: 30px;
    background: #34349b;
    color: #fff;

    font-size: 16px;
    font-weight: 400;
    text-decoration: none;

    white-space: nowrap;

    transition: all .25s ease;
}

.career-apply-btn:hover {
    background: #080c91;
    color: #fff;
}

.career-apply-btn span {
    font-size: 18px;
}


/* =========================================================
   SECTION 2 — WHY WORK AT ASCENTECH
========================================================= */

.careers-why-section {
    padding: 50px 0 65px;
    background: #f5f5fa;
}

.careers-why-container {
    width: min(1080px, calc(100% - 40px));
    margin: 0 auto;
}

.careers-why-section .careers-main-title {
    margin-bottom: 32px;
    font-size:45px;
}


/* 2 x 2 GRID */

.careers-why-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
}


/* EACH REASON */

.career-reason {
    min-height: 155px;

    display: grid;
    grid-template-columns: 80px 1fr;
    gap: 20px;

    align-items: start;

    padding: 28px 25px;
    box-sizing: border-box;
}


/* VERTICAL DIVIDER */

.career-reason:nth-child(odd) {
    border-right: 1px solid #dedee5;
}


/* HORIZONTAL DIVIDER */

.career-reason:nth-child(n+3) {
    border-top: 1px solid #dedee5;
}


/* ICON */

.career-reason-icon {
    width: 55px;
    height: 55px;

    display: flex;
    align-items: center;
    justify-content: center;
}

.career-reason-icon img {
    width: 62px;
    height: 62px;
    object-fit: contain;
}


/* TEXT */

.career-reason-content h3 {
    margin: 0 0 7px;

    font-family: "Inter Tight", sans-serif;
    font-size: 20px;
    line-height: 1.1;
    font-weight: 600;

    color: #111;
}

.career-reason-content p {
    margin: 0;

    max-width: 500px;

    font-size: 15px;
    line-height: 1.65;

    color: #30384a;
}


/* =========================================================
   SECTION 3 — LIFE AT ASCENTECH
========================================================= */

.careers-life-section {
    padding: 50px 0;
    background: #fff;
}

.careers-life-container {
    width: min(1350px, calc(100% - 40px));
    margin: 0 auto;

    display: grid;
    grid-template-columns: 1fr 1fr;

    gap: 25px;

    padding: 12px;

    border: 1px solid #dedede;
    border-radius: 15px;

    box-sizing: border-box;
}


/* IMAGE */

.careers-life-image {
    height: 445px;
    overflow: hidden;
    border-radius: 14px;
}

.careers-life-image img {
    width: 100%;
    height: 100%;
    display: block;

    object-fit: cover;
}


/* CONTENT */

.careers-life-content {
    padding: 15px 25px 15px 0;

    display: flex;
    flex-direction: column;
    justify-content: center;
}

.careers-life-content h2 {
    margin: 0 0 25px;

    font-family: "Inter Tight", sans-serif;
    font-size: clamp(40px, 4vw, 45px);
    line-height: 1.1;
    font-weight: 600;

    color: #171717;
}

.careers-life-content h2 span {
    color: #080c91;
}


.careers-life-content > p {
    margin: 0 0 10px;

    font-size: 16px;
    line-height: 1.65;

    color: #111;
}


/* LIST */

.careers-life-list {
    padding: 0;
    margin: 0;

    list-style: none;
}

.careers-life-list li {
    display: flex;
    align-items: center;
    gap: 7px;

    margin-bottom: 8px;

    font-size: 16px;
    color: #111;
}

.careers-life-list li span {
    width: 18px;
    height: 18px;

    display: inline-flex;
    align-items: center;
    justify-content: center;

    border: 1px solid #111;
    border-radius: 50%;

    font-size: 11px;
    line-height: 1;
    flex-shrink: 0;
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
.hero-content {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 25px 15px 0;
    gap: 0;
}.hero-text {
    width: 100%;
    text-align: center;
    padding: 0;
    position: relative;
    z-index: 3;
}

.hero-title {
    margin: 0 auto 12px;
    max-width: 330px;
    font-size: 25px;
    line-height: 1.1;
    color: #fff;
}

.hero-subtitle {
    margin: 0 auto;
    max-width: 300px;
    font-size: 12px;
    line-height: 1.35;
    color: #fff;
}

.hero-graphic {
    width: 100%;
    height: 350px;
    display: flex;
    justify-content: center;
    align-items: flex-end;
    margin:0;
    padding: 0;
    overflow: hidden;
}

.hero-graphic-img {
    width: 67%;
    max-width: 340px;
    height: auto;
    display: block;
    margin: 0 auto;
    position: relative;
    bottom: -5px;
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

/* =========================================================
   CAREERS — MOBILE VIEW ONLY
   HEADER + HERO NOT INCLUDED
========================================================= */

@media (max-width: 767px) {

    /* =====================================================
       GLOBAL MOBILE FIX
    ===================================================== */

    .careers-hiring-section,
    .careers-why-section,
    .careers-life-section {
        width: 100%;
        box-sizing: border-box;
        overflow: hidden;
    }

    .careers-main-container,
    .careers-why-container,
    .careers-life-container {
        width: calc(100% - 30px);
        max-width: none;
        margin-left: auto;
        margin-right: auto;
        box-sizing: border-box;
    }


    /* =====================================================
       SECTION 1 — WE ARE HIRING
    ===================================================== */

    .careers-hiring-section {
        padding: 48px 0 45px;
        background: #fff;
    }

    .careers-main-title {
        margin: 0 0 28px;
        padding: 0;
        font-family: "Inter Tight", sans-serif;
        font-size: 32px;
        line-height: 1.15;
        font-weight: 600;
        text-align: center;
        color: #171717;
    }

    .careers-main-title span {
        color: #080c91;
    }


    /* JOB GRID */

    .careers-jobs-grid {
        display: flex;
        flex-direction: column;
        gap: 14px;
        width: 100%;
    }


    /* JOB CARD */

    .career-job-card {
        width: 100%;
        min-height: 0;
        padding: 22px 18px 18px;
        border: 1px solid #dedede;
        border-radius: 14px;
        background: #fff;
        box-sizing: border-box;

        display: flex;
        flex-direction: column;
        justify-content: space-between;

        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.03);
    }

    .career-job-card:hover {
        transform: none;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.03);
    }


    /* JOB CONTENT */

    .career-job-content {
        padding-bottom: 15px;
        border-bottom: 1px solid #e4e4f5;
    }

    .career-job-content h3 {
        margin: 0 0 9px;
        font-family: "Inter Tight", sans-serif;
        font-size: 19px;
        line-height: 1.25;
        font-weight: 600;
        color: #111;
    }

    .career-location {
        margin: 0;
        font-size: 14px;
        line-height: 1.4;
        color: #171717;
    }


    /* JOB BOTTOM */

    .career-job-bottom {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 10px;
        padding-top: 15px;
        box-sizing: border-box;
    }

    .career-job-type {
        display: flex;
        align-items: center;
        gap: 6px;

        font-size: 14px;
        line-height: 1.2;
        color: #111;
        white-space: nowrap;
    }

    .clock-icon {
        width: 18px;
        height: 18px;
        font-size: 19px;
        color: #080c91;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }


    /* APPLY BUTTON */

    .career-apply-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 6px;

        padding: 8px 14px;
        border-radius: 30px;

        background: #34349b;
        color: #fff;

        font-size: 14px;
        line-height: 1;
        font-weight: 400;

        text-decoration: none;
        white-space: nowrap;
    }

    .career-apply-btn:hover {
        background: #34349b;
        color: #fff;
    }

    .career-apply-btn span {
        font-size: 16px;
    }


    /* =====================================================
       SECTION 2 — WHY WORK AT ASCENTECH
    ===================================================== */

    .careers-why-section {
        padding: 48px 0 50px;
        background: #f5f5fa;
    }

    .careers-why-container {
        width: calc(100% - 30px);
    }

    .careers-why-section .careers-main-title {
        margin-bottom: 25px;
        font-size: 32px;
        line-height: 1.15;
    }


    /* WHY GRID */

    .careers-why-grid {
        display: flex;
        flex-direction: column;
        width: 100%;
    }


    /* REASON */

    .career-reason {
        width: 100%;
        min-height: 0;

        display: grid;
        grid-template-columns: 55px 1fr;
        gap: 14px;

        padding: 22px 5px;
        box-sizing: border-box;
    }


    /* Remove desktop vertical divider */

    .career-reason:nth-child(odd) {
        border-right: 0;
    }


    /* Add divider between items */

    .career-reason:nth-child(n + 2) {
        border-top: 1px solid #dedee5;
    }


    /* ICON */

    .career-reason-icon {
        width: 50px;
        height: 50px;

        display: flex;
        align-items: center;
        justify-content: center;
    }

    .career-reason-icon img {
        width: 48px;
        height: 48px;
        object-fit: contain;
        display: block;
    }


    /* TEXT */

    .career-reason-content {
        min-width: 0;
    }

    .career-reason-content h3 {
        margin: 0 0 6px;

        font-family: "Inter Tight", sans-serif;
        font-size: 20px;
        line-height: 1.2;
        font-weight: 600;

        color: #111;
    }

    .career-reason-content p {
        margin: 0;

        max-width: none;

        font-size: 14px;
        line-height: 1.55;

        color: #30384a;
    }


    /* =====================================================
       SECTION 3 — LIFE AT ASCENTECH
    ===================================================== */

    .careers-life-section {
        padding: 48px 0 50px;
        background: #fff;
    }

    .careers-life-container {
        width: calc(100% - 30px);

        display: flex;
        flex-direction: column;

        gap: 0;

        padding: 8px;

        border: 1px solid #dedede;
        border-radius: 15px;

        box-sizing: border-box;
        background: #fff;
    }


    /* IMAGE */

    .careers-life-image {
        width: 100%;
        height: 270px;

        overflow: hidden;
        border-radius: 11px;

        flex-shrink: 0;
    }

    .careers-life-image img {
        width: 100%;
        height: 100%;

        display: block;

        object-fit: cover;
        object-position: center center;
    }


    /* CONTENT */

    .careers-life-content {
        width: 100%;

        padding: 24px 10px 18px;

        display: flex;
        flex-direction: column;
        justify-content: flex-start;

        box-sizing: border-box;
    }

    .careers-life-content h2 {
        margin: 0 0 17px;

        font-family: "Inter Tight", sans-serif;
        font-size: 32px;
        line-height: 1.15;
        font-weight: 600;

        color: #171717;
    }

    .careers-life-content h2 span {
        color: #080c91;
    }


    /* PARAGRAPH */

    .careers-life-content > p {
        margin: 0 0 18px;

        font-size: 14px;
        line-height: 1.6;

        color: #111;
    }


    /* LIST */

    .careers-life-list {
        width: 100%;

        margin: 0;
        padding: 0;

        list-style: none;
    }

    .careers-life-list li {
        display: flex;
        align-items: flex-start;

        gap: 8px;

        margin-bottom: 10px;

        font-size: 14px;
        line-height: 1.45;

        color: #111;
    }

    .careers-life-list li:last-child {
        margin-bottom: 0;
    }

    .careers-life-list li span {
        width: 18px;
        height: 18px;

        display: inline-flex;
        align-items: center;
        justify-content: center;

        border: 1px solid #111;
        border-radius: 50%;

        font-size: 10px;
        line-height: 1;

        flex-shrink: 0;
        margin-top: 1px;
    }
}


/* =========================================================
   SMALL PHONES — 480px AND BELOW
========================================================= */

@media (max-width: 480px) {

    /* CONTAINERS */

    .careers-main-container,
    .careers-why-container,
    .careers-life-container {
        width: calc(100% - 24px);
    }


    /* SECTION TITLES */

    .careers-main-title,
    .careers-why-section .careers-main-title {
        font-size: 29px;
        line-height: 1.12;
    }


    /* JOB CARD */

    .career-job-card {
        padding: 20px 16px 16px;
        border-radius: 13px;
    }

    .career-job-content h3 {
        font-size: 18px;
    }

    .career-location {
        font-size: 13px;
    }

    .career-job-bottom {
        padding-top: 13px;
    }

    .career-job-type {
        font-size: 13px;
    }

    .career-apply-btn {
        padding: 8px 12px;
        font-size: 13px;
    }


    /* WHY */

    .career-reason {
        grid-template-columns: 48px 1fr;
        gap: 12px;
        padding: 20px 12px;
    }

    .career-reason-icon {
        width: 45px;
        height: 45px;
    }

    .career-reason-icon img {
        width: 44px;
        height: 44px;
    }

    .career-reason-content h3 {
        font-size: 19px;
    }

    .career-reason-content p {
        font-size: 13.5px;
        line-height: 1.55;
    }


    /* LIFE */

    .careers-life-container {
        padding: 7px;
    }

    .careers-life-image {
        height: 250px;
        border-radius: 10px;
    }

    .careers-life-content {
        padding: 22px 9px 16px;
    }

    .careers-life-content h2 {
        font-size: 29px;
        margin-bottom: 15px;
    }

    .careers-life-content > p {
        font-size: 13.5px;
        line-height: 1.58;
        margin-bottom: 17px;
    }

    .careers-life-list li {
        font-size: 13.5px;
        line-height: 1.45;
        margin-bottom: 9px;
    }
}
</style>

@endsection