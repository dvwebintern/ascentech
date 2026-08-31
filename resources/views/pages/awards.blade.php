@extends('layouts.app')
@section('title', 'Awards')

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
                <h1 class="hero-title">Awards For Excellence In Technology</h1>
                <p class="hero-subtitle">Recognised for IT and E-Governance Solutions</p>
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
            <div class="hero-float-buttons">
                <a href="{{ route('products.nagarkaryavali') }}" class="btn btn-accent">View Products</a>
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
     AWARDS & CERTIFICATES
========================================================= --}}

<section class="recognition-section" x-data="{ activeTab: 'awards' }">
    <div class="recognition-wrap">

        {{-- TABS --}}
        <div class="recognition-tabs">

            <button
                type="button"
                class="recognition-tab"
                :class="{ 'active': activeTab === 'awards' }"
                @click="activeTab = 'awards'"
            >
                Awards
            </button>

            <button
                type="button"
                class="recognition-tab"
                :class="{ 'active': activeTab === 'certificates' }"
                @click="activeTab = 'certificates'"
            >
                Certificates
            </button>

        </div>


        {{-- CONTENT --}}
        <div class="recognition-content">

            {{-- AWARDS --}}
            <div
                class="recognition-panel"
                x-show="activeTab === 'awards'"
                x-transition.opacity
            >

                <div class="recognition-grid">

                    @foreach ($awards as $award)

                        <div class="recognition-card">

                            <div class="recognition-image-box">
                                <img
                                    src="{{ asset('images/' . $award['image']) }}"
                                    alt="{{ $award['title'] }}"
                                    class="recognition-image"
                                >
                            </div>

                            <div class="recognition-title">
                                {{ $award['title'] }}
                            </div>

                        </div>

                    @endforeach

                </div>

            </div>


            {{-- CERTIFICATES --}}
            <div
                class="recognition-panel"
                x-show="activeTab === 'certificates'"
                x-transition.opacity
            >

                <div class="recognition-grid">

                    @foreach ($certificates as $certificate)

                        <div class="recognition-card">

                            <div class="recognition-image-box">
                                <img
                                    src="{{ asset('images/' . $certificate['image']) }}"
                                    alt="{{ $certificate['title'] }}"
                                    class="recognition-image"
                                >
                            </div>

                            <div class="recognition-title">
                                {{ $certificate['title'] }}
                            </div>

                        </div>

                    @endforeach

                </div>

            </div>

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
    background-image: url('{{ asset('images/award page banner.png') }}');
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
    max-width: 1250px;
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
   AWARDS & CERTIFICATES
========================================================= */

.recognition-section {
    width: 100%;
    padding: 30px 20px 70px;
    background: #fff;
}

.recognition-wrap {
    width: 100%;
    max-width: 1000px;
    margin: 0 auto;
    padding: 22px 14px 26px;
    background: #f8f8f9;
    border: 1px solid #dcdcdc;
    border-radius: 10px;
}


/* =========================================================
   TABS
========================================================= */

.recognition-tabs {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 10px;
    margin-bottom: 30px;
}

.recognition-tab {
    position: relative;
    height: 40px;
    border: 1px solid #d0d0d5;
    border-radius: 10px;
    background: #e9e9ee;
    color: #171c73;
    font-size: 14px;
    font-weight: 700;
    cursor: pointer;
    transition: all 0.25s ease;
}


/* ACTIVE TAB */

.recognition-tab.active {
    background: #36379a;
    border-color: #36379a;
    color: #fff;
}


/* TRIANGLE UNDER ACTIVE TAB */

.recognition-tab.active::after {
    content: "";
    position: absolute;
    left: 50%;
    bottom: -9px;
    transform: translateX(-50%);

    width: 0;
    height: 0;

    border-left: 9px solid transparent;
    border-right: 9px solid transparent;
    border-top: 9px solid #36379a;
}


/* =========================================================
   CONTENT CONTAINER
========================================================= */

.recognition-content {
    padding: 16px 8px;
    border: 1px solid #dedede;
    border-radius: 10px;
    background: #f8f8f9;
}

.recognition-panel {
    width: 100%;
}


/* =========================================================
   GRID
========================================================= */

.recognition-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 12px;
}


/* =========================================================
   CARD
========================================================= */

.recognition-card {
    background: #f9f9f9;
    border: 1px solid #eeeeee;
    overflow: hidden;
    text-align: center;
}


/* =========================================================
   IMAGE
========================================================= */

.recognition-image-box {
    height: 230px;
    padding: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #fff;
    border-radius: 8px;
}

.recognition-image {
    width: 100%;
    height: 100%;
    object-fit: contain;
    display: block;
}


/* =========================================================
   TITLE
========================================================= */

.recognition-title {
    min-height: 42px;
    display: flex;
    align-items: center;
    justify-content: center;

    padding: 8px 10px;

    color: #111;
    font-size: 14px;
    font-weight: 500;
    line-height: 1.3;
}

/* =========================================================
   AWARDS & CERTIFICATES SECTION
   ========================================================= */

.recognition-section {
    width: 100%;
    padding: 40px 120px 40px 120px;
    background: #ffffff;
    box-sizing: border-box;
}

.recognition-wrap {
    width: 100%;
    max-width: 1100px;
    margin: 0 auto;
    padding: 24px;
    background: #f8f8f9;
    border: 1px solid #dedede;
    border-radius: 14px;
    box-sizing: border-box;
}


/* =========================================================
   TABS
   ========================================================= */

.recognition-tabs {
    width: 100%;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 12px;
    margin: 0 0 32px;
    box-sizing: border-box;
}

.recognition-tab {
    position: relative;
    width: 100%;
    height: 46px;

    padding: 0 20px;

    border: 1px solid #d0d0d5;
    border-radius: 10px;

    background: #e9e9ee;
    color: #171c73;

    font-family: inherit;
    font-size: 15px;
    font-weight: 700;

    line-height: 1;
    text-align: center;

    cursor: pointer;

    transition:
        background 0.25s ease,
        border-color 0.25s ease,
        color 0.25s ease,
        transform 0.2s ease;

    box-sizing: border-box;
}

.recognition-tab:hover {
    background: #dedee6;
    border-color: #c5c5cd;
}

.recognition-tab:focus {
    outline: none;
}

.recognition-tab:focus-visible {
    outline: 2px solid #36379a;
    outline-offset: 2px;
}


/* =========================================================
   ACTIVE TAB
   ========================================================= */

.recognition-tab.active {
    background: #36379a;
    border-color: #36379a;
    color: #ffffff;
}

.recognition-tab.active:hover {
    background: #36379a;
    border-color: #36379a;
}


/* =========================================================
   ACTIVE TAB TRIANGLE
   ========================================================= */

.recognition-tab.active::after {
    content: "";

    position: absolute;
    left: 50%;
    bottom: -10px;

    width: 0;
    height: 0;

    transform: translateX(-50%);

    border-left: 10px solid transparent;
    border-right: 10px solid transparent;
    border-top: 10px solid #36379a;

    z-index: 2;
}


/* =========================================================
   CONTENT CONTAINER
   ========================================================= */

.recognition-content {
    width: 100%;

    padding: 18px;

    border: 1px solid #dedede;
    border-radius: 12px;

    background: #f8f8f9;

    box-sizing: border-box;
}

.recognition-panel {
    width: 100%;
    box-sizing: border-box;
}


/* =========================================================
   GRID
   ========================================================= */

.recognition-grid {
    width: 100%;

    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));

    gap: 18px;

    box-sizing: border-box;
}


/* =========================================================
   CARD
   ========================================================= */

.recognition-card {
    width: 100%;
    min-width: 0;

    display: flex;
    flex-direction: column;

    background: #ffffff;

    border: 1px solid #e5e5e5;
    border-radius: 10px;

    overflow: hidden;

    text-align: center;

    box-sizing: border-box;

    transition:
        transform 0.25s ease,
        box-shadow 0.25s ease,
        border-color 0.25s ease;
}

.recognition-card:hover {
    transform: translateY(-3px);

    border-color: #d8d8d8;

    box-shadow:
        0 8px 24px rgba(0, 0, 0, 0.08);
}


/* =========================================================
   IMAGE BOX
   ========================================================= */

.recognition-image-box {
    width: 100%;
    height: 260px;

    padding: 14px;

    display: flex;
    align-items: center;
    justify-content: center;

    background: #ffffff;

    box-sizing: border-box;
}


/* =========================================================
   IMAGE
   ========================================================= */

.recognition-image {
    display: block;

    width: 100%;
    height: 100%;

    max-width: 100%;
    max-height: 100%;

    object-fit: contain;

    margin: 0 auto;
}


/* =========================================================
   TITLE
   ========================================================= */

.recognition-title {
    width: 100%;
    min-height: 52px;

    display: flex;
    align-items: center;
    justify-content: center;

    padding: 10px 12px;

    background: #ffffff;

    color: #111111;

    font-family: inherit;
    font-size: 14px;
    font-weight: 500;

    line-height: 1.4;

    text-align: center;

    box-sizing: border-box;
}


/* =========================================================
   TABLET
   769px - 1023px
   ========================================================= */

@media (max-width: 1023px) {

    .recognition-section {
        padding: 35px 18px 65px;
    }

    .recognition-wrap {
        max-width: 900px;
        padding: 20px;
    }

    .recognition-content {
        padding: 15px;
    }

    .recognition-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 16px;
    }

    .recognition-image-box {
        height: 240px;
    }

    .recognition-title {
        font-size: 14px;
    }
}


/* =========================================================
   MOBILE
   481px - 768px
   ========================================================= */

@media (max-width: 768px) {

    .recognition-section {
        padding: 28px 15px 55px;
    }

    .recognition-wrap {
        padding: 16px;
        border-radius: 12px;
    }

    .recognition-tabs {
        gap: 8px;
        margin-bottom: 28px;
    }

    .recognition-tab {
        height: 42px;
        padding: 0 12px;
        font-size: 14px;
        border-radius: 9px;
    }

    .recognition-tab.active::after {
        bottom: -9px;

        border-left-width: 9px;
        border-right-width: 9px;
        border-top-width: 9px;
    }

    .recognition-content {
        padding: 12px;
        border-radius: 10px;
    }

    .recognition-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 12px;
    }

    .recognition-card {
        border-radius: 9px;
    }

    .recognition-image-box {
        height: 220px;
        padding: 10px;
    }

    .recognition-title {
        min-height: 48px;
        padding: 8px 8px;
        font-size: 13px;
        line-height: 1.35;
    }
}


/* =========================================================
   SMALL MOBILE
   480px AND BELOW
   ========================================================= */

@media (max-width: 480px) {

    .recognition-section {
        padding: 22px 10px 45px;
    }

    .recognition-wrap {
        width: 100%;
        padding: 12px 8px 15px;
        border-radius: 10px;
    }

    .recognition-tabs {
        gap: 7px;
        margin-bottom: 25px;
    }

    .recognition-tab {
        height: 40px;
        padding: 0 8px;

        font-size: 12px;
        font-weight: 700;

        border-radius: 8px;
    }

    .recognition-tab.active::after {
        bottom: -8px;

        border-left-width: 8px;
        border-right-width: 8px;
        border-top-width: 8px;
    }

    .recognition-content {
        padding: 8px 6px;
        border-radius: 8px;
    }

    .recognition-grid {
        grid-template-columns: 1fr;
        gap: 14px;
    }

    .recognition-card {
        width: 100%;
        border-radius: 8px;
    }

    .recognition-image-box {
        width: 100%;
        height: 250px;
        padding: 12px;
    }

    .recognition-image {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }

    .recognition-title {
        min-height: 46px;

        padding: 9px 10px;

        font-size: 14px;
        line-height: 1.35;
    }
}


/* =========================================================
   VERY SMALL PHONES
   360px AND BELOW
   ========================================================= */

@media (max-width: 360px) {

    .recognition-section {
        padding-left: 8px;
        padding-right: 8px;
    }

    .recognition-wrap {
        padding: 10px 6px 13px;
    }

    .recognition-tabs {
        gap: 6px;
    }

    .recognition-tab {
        height: 38px;
        font-size: 11px;
    }

    .recognition-content {
        padding: 6px;
    }

    .recognition-grid {
        gap: 10px;
    }

    .recognition-image-box {
        height: 220px;
        padding: 10px;
    }

    .recognition-title {
        font-size: 13px;
        padding: 8px;
    }
}


/* =========================================================
   PREVENT HORIZONTAL OVERFLOW
   ========================================================= */

.recognition-section,
.recognition-wrap,
.recognition-content,
.recognition-panel,
.recognition-grid,
.recognition-card {
    max-width: 100%;
    box-sizing: border-box;
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