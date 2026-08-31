@extends('layouts.app')

@section('title', 'News & Media')

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
 <h1 class="hero-title">
                    Our News And Media Presence
                </h1>

                <p class="hero-subtitle">
                    Featured across leading media platforms
                </p>
            </div>
            <div class="hero-graphic">
                <img src="{{ asset('images/graphic-1000x1000-4.webp') }}" alt="" class="hero-graphic-img">
            </div>
        </div>
    </div>

    {{-- =====================================================
         FLOATING NAV + CTA
    ====================================================== --}}

    <div
        class="hero-float-row"
        x-show="!scrolled"
        x-transition.opacity
    >

        <div class="hero-float-inner">

            <div class="hero-float-nav">

                @include('partials.nav-links')

            </div>


            <div class="hero-float-buttons">

                <a
                    href="{{ route('products.nagarkaryavali') }}"
                    class="btn btn-accent"
                >
                    View Products
                </a>

                <a
                    href="{{ route('contact') }}"
                    class="btn btn-outline-white"
                >
                    Contact us →
                </a>

            </div>

        </div>

    </div>


    {{-- =====================================================
         STICKY NAV ON SCROLL
    ====================================================== --}}

    <div
        class="hero-sticky-bar"
        x-show="scrolled"

        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 -translate-y-4"
        x-transition:enter-end="opacity-100 translate-y-0"

        x-cloak
    >

        <div class="hero-sticky-inner">

            <a href="{{ route('home') }}">

                <img
                    src="{{ asset('images/logo.svg') }}"
                    alt="ASCENTech"
                    class="hero-sticky-logo"
                >

            </a>

            <div class="hero-sticky-nav">

                @include('partials.nav-links')

            </div>

        </div>

    </div>

</section>
{{-- =========================================================
     NEWS & MEDIA IMAGE GALLERY
========================================================= --}}

<section class="news-media-gallery">

    <div class="news-media-gallery-grid">

        <div class="news-media-item">
            <img src="{{ asset('images/news-media-1.webp') }}" alt="News Media">
        </div>

        <div class="news-media-item">
            <img src="{{ asset('images/news-media-2.webp') }}" alt="News Media">
        </div>

        <div class="news-media-item">
            <img src="{{ asset('images/news-media-3.webp') }}" alt="News Media">
        </div>

        <div class="news-media-item">
            <img src="{{ asset('images/news-media-4.webp') }}" alt="News Media">
        </div>

        <div class="news-media-item">
            <img src="{{ asset('images/news-media-7.webp') }}" alt="News Media">
        </div>

        <div class="news-media-item">
            <img src="{{ asset('images/news-media-6.webp') }}" alt="News Media">
        </div>

        <div class="news-media-item">
            <img src="{{ asset('images/news-media-5.webp') }}" alt="News Media">
        </div>

        <div class="news-media-item">
            <img src="{{ asset('images/news-media-8.webp') }}" alt="News Media">
        </div>

        <div class="news-media-item">
            <img src="{{ asset('images/news-media-9.webp') }}" alt="News Media">
        </div>

    </div>

</section>

{{-- =========================================================
     CSS
========================================================= --}}

<style>

/* =========================================================
   HERO
========================================================= */

.hero-section {
    position: relative;
}

.hero-bg {

    width: calc(100% - 30px);

    background-image:
        url('{{ asset('images/news and media Page 1200x500 banner new .png') }}');

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


.hero-subtitle {

    font-size: 18px;

    color: #e5e7eb;

    margin-bottom: 0;

    max-width: 550px;
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


/* =========================================================
   FLOATING NAV
========================================================= */

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


/* =========================================================
   BUTTONS
========================================================= */

.btn {

    display: inline-flex;

    align-items: center;

    gap: 8px;

    padding: 9px 26px;

    border-radius: 999px;

    font-size: 17px;

    font-weight: 500;

    text-decoration: none;

    transition:
        background 0.2s ease,
        color 0.2s ease;

    white-space: nowrap;
}


.btn-accent {

    background: #1990c9;

    color: #fff;
}


.btn-accent:hover {

    background: #147baa;

}


.btn-outline-white {

    border: 1px solid #fff;

    color: #fff;
}


.btn-outline-white:hover {

    background: rgba(255,255,255,0.1);

}


/* =========================================================
   STICKY BAR
========================================================= */

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

    box-shadow:
        0 10px 25px rgba(0,0,0,0.15);

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


@media (min-width: 1024px) {

    .hero-sticky-nav {

        display: block;

    }

}


/* =========================================================
   NEWS & MEDIA SECTION
========================================================= */

.news-media-section {

    background: #fff;

    padding: 100px 24px 120px;

}


.news-media-container {

    width: 100%;

    max-width: 1200px;

    margin: 0 auto;

}


/* =========================================================
   HEADING
========================================================= */

.news-media-heading {

    text-align: center;

    margin-bottom: 60px;

}


.news-media-eyebrow {

    margin: 0 0 14px;

    color: #2E3192;

    font-size: 15px;

    font-weight: 600;

    letter-spacing: 1.5px;

    text-transform: uppercase;
}


.news-media-heading h2 {

    margin: 0;

    color: #111827;

    font-size: clamp(34px, 4vw, 52px);

    line-height: 1.15;

    font-weight: 500;

}


.news-media-heading h2 span {

    color: #2E3192;

}


.news-media-intro {

    margin: 16px 0 0;

    color: #6b7280;

    font-size: 18px;

    line-height: 1.5;

}

/* =========================================================
   NEWS & MEDIA IMAGE GALLERY
========================================================= */

.news-media-gallery {
    width: 100%;
    background: #fff;
    padding: 80px 30px 100px;
}

.news-media-gallery-grid {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;

    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
}

.news-media-item {
    width: 100%;
    overflow: hidden;
    border-radius: 16px;
}

.news-media-item img {
    width: 100%;
    height: auto;
    display: block;
    object-fit: cover;
    transition: transform 0.4s ease;
}

.news-media-item:hover img {
    transform: scale(1.04);
}


/* =========================================================
   TABLET
========================================================= */

@media (max-width: 900px) {

    .news-media-gallery {
        padding: 60px 20px 80px;
    }

    .news-media-gallery-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }
}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 767px) {

    .news-media-gallery {
        padding: 50px 15px 70px;
    }

    .news-media-gallery-grid {
        grid-template-columns: 1fr;
        gap: 18px;
    }

    .news-media-item {
        border-radius: 12px;
    }
}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 767px) {

    .hero-bg {

        min-height: 600px;

        width: calc(100% - 20px);

    }


    .hero-content {

        padding:

            10px
            25px
            100px;

    }


    .hero-text {

        padding-left: 10px;

        padding-top: 100px;

    }


    .hero-title {

        font-size: 34px;

    }


    .hero-subtitle {

        font-size: 16px;

    }


    .hero-graphic-img {

        max-width: 300px;

        margin-right: 0;

    }


    .hero-float-inner {

        padding:

            0
            20px
            20px;

    }


    .hero-float-buttons {

        width: 100%;

        justify-content: center;

    }


    .btn {

        font-size: 14px;

        padding: 8px 18px;

    }}
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


</style>

@endsection