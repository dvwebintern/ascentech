@extends('layouts.app')
@section('title', 'Events')

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
               <h1 class="hero-title">Events And Milestones
</h1>
                <p class="hero-subtitle">Celebrating growth and teamwork

</p>
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
     EVENTS
========================================================= --}}

<section
    class="events-section"
    x-data="eventsGallery(@js($events))"
    x-init="init()"
>
    <div class="events-wrap">

        {{-- =====================================================
             YEAR TABS
        ====================================================== --}}
<div class="year-tabs-wrap">

    <div class="year-tabs" x-ref="yearTabs">

        @foreach ($events as $year => $yearData)

            <button
                type="button"
                class="year-tab"
                :class="{ active: activeYear === '{{ $year }}' }"
                @click="selectYear('{{ $year }}')"
            >
                {{ $year }}
            </button>

        @endforeach

    </div>

    {{-- MOBILE SCROLL ARROW --}}
    <button
        type="button"
        class="tabs-scroll-arrow tabs-scroll-next"
        @click="scrollTabs('yearTabs', 180)"
        aria-label="Show more years"
    >
        ›
    </button>

</div>


        {{-- =====================================================
             FESTIVAL / EVENT TABS
             2022 AND NEWER ONLY
        ====================================================== --}}

        <template x-if="showEventTabs">

    <div class="festival-tabs-wrap">

        <div class="festival-tabs" x-ref="eventTabs">

            <template
                x-for="event in currentYearEvents"
                :key="event.title"
            >

                <button
                    type="button"
                    class="festival-tab"
                    :class="{ active: activeEvent === event.title }"
                    @click="selectEvent(event.title)"
                    x-text="event.title"
                ></button>

            </template>

        </div>

        {{-- MOBILE SCROLL ARROW --}}
        <button
            type="button"
            class="tabs-scroll-arrow tabs-scroll-next"
            @click="scrollTabs('eventTabs', 180)"
            aria-label="Show more events"
        >
            ›
        </button>

    </div>

</template>


        {{-- =====================================================
             GALLERY
        ====================================================== --}}

        <div class="gallery-container">

            {{-- =================================================
                 2022+
                 FESTIVAL / EVENT GALLERY
            ================================================== --}}

            <template x-if="showEventTabs">

                <div class="gallery-section">

                    <div
                        class="gallery"
                        :class="{
                            'single-image': currentImages.length === 1
                        }"
                    >

                        <template
                            x-for="image in visibleImages"
                            :key="image"
                        >

                            <div class="gallery-image">

                                <img
                                    :src="'{{ asset('images') }}/' + image"
                                    alt=""
                                >

                            </div>

                        </template>

                    </div>


                    {{-- PREVIOUS --}}

                    <button
                        type="button"
                        class="gallery-arrow gallery-prev"
                        x-show="hasCarousel"
                        @click="previous()"
                        aria-label="Previous images"
                    >
                        <span>‹</span>
                    </button>


                    {{-- NEXT --}}

                    <button
                        type="button"
                        class="gallery-arrow gallery-next"
                        x-show="hasCarousel"
                        @click="next()"
                        aria-label="Next images"
                    >
                        <span>›</span>
                    </button>


                    {{-- DOTS --}}

                    <div
                        class="gallery-dots"
                        x-show="hasCarousel"
                    >

                        <template
                            x-for="(image, index) in currentImages"
                            :key="index"
                        >

                            <button
                                type="button"
                                class="gallery-dot"
                                :class="{
                                    active: index === currentIndex
                                }"
                                @click="goTo(index)"
                                :aria-label="'Go to image ' + (index + 1)"
                            ></button>

                        </template>

                    </div>

                </div>

            </template>


            {{-- =================================================
                 BEFORE 2022
                 NO FESTIVAL TABS
            ================================================== --}}

            <template x-if="!showEventTabs">

                <div class="gallery-section">

                    <div
                        class="gallery"
                        :class="{
                            'single-image': currentImages.length === 1
                        }"
                    >

                        <template
                            x-for="image in visibleImages"
                            :key="image"
                        >

                            <div class="gallery-image">

                                <img
                                    :src="'{{ asset('images') }}/' + image"
                                    alt=""
                                >

                            </div>

                        </template>

                    </div>


                    {{-- PREVIOUS --}}

                    <button
                        type="button"
                        class="gallery-arrow gallery-prev"
                        x-show="hasCarousel"
                        @click="previous()"
                        aria-label="Previous images"
                    >
                        <span>‹</span>
                    </button>


                    {{-- NEXT --}}

                    <button
                        type="button"
                        class="gallery-arrow gallery-next"
                        x-show="hasCarousel"
                        @click="next()"
                        aria-label="Next images"
                    >
                        <span>›</span>
                    </button>


                    {{-- DOTS --}}

                    <div
                        class="gallery-dots"
                        x-show="hasCarousel"
                    >

                        <template
                            x-for="(image, index) in currentImages"
                            :key="index"
                        >

                            <button
                                type="button"
                                class="gallery-dot"
                                :class="{
                                    active: index === currentIndex
                                }"
                                @click="goTo(index)"
                                :aria-label="'Go to image ' + (index + 1)"
                            ></button>

                        </template>

                    </div>

                </div>

            </template>

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
    background-image: url('{{ asset('images/Website Banner 1200x500 Event page blue.png') }}');
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
   EVENTS
========================================================= */

.events-section {
    width: 100%;
    padding: 55px 20px 90px;
    background: #fff;
}

.events-wrap {
    width: 100%;
    max-width: 1400px;
    margin: 0 auto;
}


/* =========================================================
   YEAR TABS
   ALL YEARS IN ONE LINE
========================================================= */

.year-tabs {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: nowrap;
    gap: 14px;
    margin-bottom: 46px;
}

.year-tab {
    position: relative;

    /* Equal width for every year */
    flex: 1 1 0;
    min-width: 0;

    height: 48px;
    padding: 0 15px;

    border: 1px solid #d5d5dc;
    border-radius: 15px;

    background: #f1f1f5;
    color: #2e3192;

    font-size: 16px;
    font-weight: 600;

    cursor: pointer;
    transition: all .25s ease;

    white-space: nowrap;
}

.year-tab:hover {
    background: #e7e7ed;
}

.year-tab.active {
    background: #2e3192;
    border-color: #2e3192;
    color: #fff;
}

.year-tab.active::after {
    content: "";

    position: absolute;
    bottom: -11px;
    left: 50%;

    transform: translateX(-50%);

    border-left: 11px solid transparent;
    border-right: 11px solid transparent;
    border-top: 11px solid #2e3192;
}

/* =========================================================
   FESTIVAL TABS
========================================================= */
/* =========================================================
   FESTIVAL / EVENT TABS
   ALL EVENTS IN ONE LINE
========================================================= */

.festival-tabs {
    width: 100%;
    display: flex;
    align-items: center;
    gap: 12px;

    margin: 0 0 62px;
}

.festival-tab {
    position: relative;

    flex: 1 1 0;
    min-width: 0;

    height: 44px;
    padding: 0 18px;

    border: 1px solid #d5d5dc;
    border-radius: 14px;

    background: #f1f1f5;
    color: #2e3192;

    font-size: 15px;
    font-weight: 600;

    cursor: pointer;
    transition: all .25s ease;

    white-space: nowrap;
    text-align: center;
}

.festival-tab:hover {
    background: #e7e7ed;
}

.festival-tab.active {
    background: #2e3192;
    border-color: #2e3192;
    color: #fff;
}

.festival-tab.active::after {
    content: "";

    position: absolute;
    bottom: -10px;
    left: 50%;

    transform: translateX(-50%);

    border-left: 10px solid transparent;
    border-right: 10px solid transparent;
    border-top: 10px solid #2e3192;
}

/* =========================================================
   GALLERY CONTAINER
========================================================= */

.gallery-container {
    position: relative;

    width: 100%;

    padding: 20px 12px;

    background: #f8f8f9;

    border: 1px solid #dedee5;

    border-radius: 14px;
}


/* =========================================================
   GALLERY
========================================================= */

.gallery {
    display: grid;

    grid-template-columns:
        repeat(3, minmax(0, 1fr));

    gap: 20px;

    overflow: hidden;
}


/* =========================================================
   GALLERY IMAGE
========================================================= */

.gallery-image {
    width: 100%;
    height: 305px;

    overflow: hidden;

    border-radius: 14px;

    background: #fff;
}

.gallery-image img {
    width: 100%;
    height: 100%;

    display: block;

    object-fit: cover;

    transition: transform .35s ease;
}

.gallery-image:hover img {
    transform: scale(1.03);
}


/* =========================================================
   SINGLE IMAGE
========================================================= */

.gallery.single-image {
    display: flex;
    justify-content: center;
}

.gallery.single-image .gallery-image {
    width: 100%;
    max-width: 500px;
}


/* =========================================================
   ARROWS
========================================================= */

.gallery-arrow {
    position: absolute;

    top: 50%;

    transform: translateY(-50%);

    width: 42px;
    height: 42px;

    border: none;
    border-radius: 50%;

    background: #2e3192;
    color: #fff;

    display: flex;
    align-items: center;
    justify-content: center;

    cursor: pointer;

    z-index: 10;

    box-shadow:
        0 4px 12px rgba(0, 0, 0, .18);

    transition: all .2s ease;
}

.gallery-arrow:hover {
    background: #242678;

    transform:
        translateY(-50%)
        scale(1.06);
}

.gallery-arrow span {
    font-size: 30px;
    line-height: 1;

    margin-top: -3px;
}

.gallery-prev {
    left: 0;
}

.gallery-next {
    right: 0;
}


/* =========================================================
   DOTS
========================================================= */

.gallery-dots {
    display: flex;

    justify-content: center;
    align-items: center;

    gap: 7px;

    margin-top: 18px;
}

.gallery-dot {
    width: 7px;
    height: 7px;

    padding: 0;

    border: none;
    border-radius: 50%;

    background: #c7c7ce;

    cursor: pointer;

    transition: all .2s ease;
}

.gallery-dot.active {
    width: 22px;

    border-radius: 10px;

    background: #2e3192;
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
   EVENTS PAGE — PHONE VIEW ONLY
========================================================= */

@media (max-width: 767px) {

    /* -----------------------------------------------------
       EVENTS SECTION
    ----------------------------------------------------- */

    .events-section {
        width: 100%;
        padding: 18px 10px 70px;
        background: #fff;
        overflow: hidden;
        box-sizing: border-box;
    }

    .events-wrap {
        width: 100%;
        max-width: none;
        margin: 0;
    }


    /* =====================================================
       TAB WRAPPERS
    ===================================================== */

    .year-tabs-wrap,
    .festival-tabs-wrap {
        position: relative;
        width: 100%;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }


    /* =====================================================
       YEAR TABS
    ===================================================== */

    .year-tabs {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: flex-start;

        gap: 8px;

        margin: 0 0 27px;
        padding: 3px 0 10px;

        flex-wrap: nowrap;

        overflow-x: auto;
        overflow-y: hidden;

        scrollbar-width: none;
        -webkit-overflow-scrolling: touch;
        scroll-behavior: smooth;

        box-sizing: border-box;
    }

    .year-tabs::-webkit-scrollbar {
        display: none;
    }

    .year-tab {
        position: relative;

        flex: 0 0 auto;

        min-width: 60px;
        width: auto;

        height: 38px;

        padding: 0 15px;

        border: 1px solid #dedee5;
        border-radius: 11px;

        background: #f5f5f7;
        color: #2e3192;

        font-size: 12px;
        font-weight: 600;

        white-space: nowrap;
        text-align: center;

        cursor: pointer;
        box-sizing: border-box;

        -webkit-tap-highlight-color: transparent;
    }

    .year-tab.active {
        background: #2e3192;
        border-color: #2e3192;
        color: #fff;

        box-shadow: 0 4px 10px rgba(46, 49, 146, .18);
    }

    .year-tab.active::after {
        content: "";

        position: absolute;
        left: 50%;
        bottom: -6px;

        transform: translateX(-50%);

        border-left: 6px solid transparent;
        border-right: 6px solid transparent;
        border-top: 6px solid #2e3192;
    }


    /* =====================================================
       FESTIVAL / EVENT TABS
    ===================================================== */

    .festival-tabs {
        width: 100%;

        display: flex;
        align-items: center;
        justify-content: flex-start;

        gap: 8px;

        margin: 0 0 27px;
        padding: 3px 0 10px;

        flex-wrap: nowrap;

        overflow-x: auto;
        overflow-y: hidden;

        scrollbar-width: none;
        -webkit-overflow-scrolling: touch;
        scroll-behavior: smooth;

        box-sizing: border-box;
    }

    .festival-tabs::-webkit-scrollbar {
        display: none;
    }

    .festival-tab {
        position: relative;

        flex: 0 0 auto;

        width: auto;
        min-width: max-content;

        height: 38px;

        padding: 0 15px;

        border: 1px solid #dedee5;
        border-radius: 11px;

        background: #f5f5f7;
        color: #2e3192;

        font-size: 12px;
        font-weight: 600;

        white-space: nowrap;
        text-align: center;

        cursor: pointer;
        box-sizing: border-box;

        -webkit-tap-highlight-color: transparent;
    }

    .festival-tab.active {
        background: #2e3192;
        border-color: #2e3192;
        color: #fff;

        box-shadow: 0 4px 10px rgba(46, 49, 146, .18);
    }

    .festival-tab.active::after {
        content: "";

        position: absolute;
        left: 50%;
        bottom: -6px;

        transform: translateX(-50%);

        border-left: 6px solid transparent;
        border-right: 6px solid transparent;
        border-top: 6px solid #2e3192;
    }


    /* =====================================================
       TAB SCROLL ARROWS
       IMPORTANT:
       These are REAL clickable buttons.
       They do NOT take extra layout space.
    ===================================================== */

    .tabs-scroll-arrow {
        position: absolute;

        right: 0;
        top: 3px;

        width: 30px;
        height: 38px;

        padding: 0;

        display: flex;
        align-items: center;
        justify-content: center;

        border: 1px solid #dedee5;
        border-radius: 10px;

        background: rgba(255, 255, 255, 0.96);
        color: #2e3192;

        font-size: 26px;
        font-weight: 400;
        line-height: 1;

        cursor: pointer;

        z-index: 100;

        box-shadow: -6px 0 12px rgba(255, 255, 255, .95);

        -webkit-tap-highlight-color: transparent;
    }

    .tabs-scroll-arrow:hover {
        background: #f5f5f7;
    }

    .tabs-scroll-arrow:active {
        transform: scale(.94);
    }


    /* =====================================================
       GALLERY
    ===================================================== */

    .gallery-container {
        position: relative;

        width: 100%;

        margin: 0;

        padding: 8px;

        background: #f8f8fa;

        border: 1px solid #e0e0e6;

        border-radius: 16px;

        box-sizing: border-box;
    }

    .gallery {
        display: block;

        width: 100%;

        overflow: hidden;
    }

    .gallery-image {
        width: 100%;

        height: auto;

        aspect-ratio: 4 / 3;

        border-radius: 11px;

        overflow: hidden;

        background: #fff;
    }

    .gallery-image img {
        display: block;

        width: 100%;
        height: 100%;

        object-fit: cover;
    }

    .gallery-image:hover img {
        transform: none;
    }


    /* =====================================================
       GALLERY ARROWS
    ===================================================== */

    .gallery-arrow {
        position: absolute;

        top: 50%;

        width: 36px;
        height: 36px;

        padding: 0;

        display: flex;
        align-items: center;
        justify-content: center;

        border: 0;
        border-radius: 50%;

        background: #2e3192;
        color: #fff;

        transform: translateY(-50%);

        z-index: 20;

        cursor: pointer;

        box-shadow: 0 4px 12px rgba(0, 0, 0, .22);
    }

    .gallery-arrow span {
        font-size: 25px;
        line-height: 1;
    }

    .gallery-prev {
        left: 14px;
    }

    .gallery-next {
        right: 14px;
    }


    /* =====================================================
       GALLERY DOTS
    ===================================================== */

    .gallery-dots {
        display: flex;

        align-items: center;
        justify-content: center;

        gap: 5px;

        margin-top: 12px;

        min-height: 7px;
    }

    .gallery-dot {
        width: 6px;
        height: 6px;

        padding: 0;

        border: 0;
        border-radius: 50%;

        background: #c9c9d0;

        cursor: pointer;
    }

    .gallery-dot.active {
        width: 18px;

        border-radius: 10px;

        background: #2e3192;
    }
}


/* =========================================================
   VERY SMALL PHONES
========================================================= */

@media (max-width: 380px) {

    .events-section {
        padding-left: 8px;
        padding-right: 8px;
    }

    .year-tab,
    .festival-tab {
        height: 36px;
        padding: 0 13px;
        font-size: 11px;
    }

    .tabs-scroll-arrow {
        width: 28px;
        height: 36px;

        font-size: 24px;
    }

    .gallery-container {
        padding: 7px;
    }

    .gallery-arrow {
        width: 34px;
        height: 34px;
    }

    .gallery-prev {
        left: 12px;
    }

    .gallery-next {
        right: 12px;
    }
}
</style>
<script>

function eventsGallery(events) {

    return {

        events: events,

        activeYear: null,

        activeEvent: null,

        currentIndex: 0,


        /* =====================================================
           INITIALIZE
        ===================================================== */

        init() {

            const years = Object.keys(this.events);

            /*
             * Start with 2022 if it exists,
             * otherwise use the first available year.
             */

            this.activeYear =
                years.includes('2026')
                    ? '2026'
                    : years[0];

            this.setDefaultEvent();
        },
scrollTabs(refName, amount) {

    const container = this.$refs[refName];

    if (!container) {
        return;
    }

    container.scrollBy({
        left: amount,
        behavior: 'smooth'
    });

},

        /* =====================================================
           CURRENT YEAR DATA
        ===================================================== */

        get currentYearData() {

            return this.events[this.activeYear];

        },


        /* =====================================================
           2022 AND NEWER
        ===================================================== */

        get showEventTabs() {

            return parseInt(this.activeYear) >= 2022;

        },


        /* =====================================================
           CURRENT FESTIVALS / EVENTS
        ===================================================== */

        get currentYearEvents() {

            if (!this.showEventTabs) {
                return [];
            }

            return this.currentYearData || [];

        },


        /* =====================================================
           CURRENT IMAGES
        ===================================================== */

        get currentImages() {

            /*
             * 2022+
             * Get images from selected festival/event
             */

            if (this.showEventTabs) {

                const event =
                    this.currentYearEvents.find(
                        item => item.title === this.activeEvent
                    );

                return event?.images || [];
            }


            /*
             * BEFORE 2022
             * Get images directly from year
             */

            return this.currentYearData?.images || [];

        },


        /* =====================================================
           CAROUSEL?
        ===================================================== */

      get hasCarousel() {
    return this.currentImages.length > 1;
},

        /* =====================================================
           VISIBLE IMAGES
           
           Desktop = 3 images
        ===================================================== */

       get visibleImages() {

    const images = this.currentImages;

    if (!images.length) {
        return [];
    }

    /* PHONE:
       Show exactly ONE image */
    if (window.innerWidth <= 767) {
        return [
            images[this.currentIndex % images.length]
        ];
    }

    /* DESKTOP:
       Show THREE images */
    if (images.length <= 3) {
        return images;
    }

    const visible = [];

    for (let i = 0; i < 3; i++) {

        const index =
            (this.currentIndex + i)
            % images.length;

        visible.push(images[index]);
    }

    return visible;
},

        /* =====================================================
           SET DEFAULT EVENT
        ===================================================== */

        setDefaultEvent() {

            if (this.showEventTabs) {

                this.activeEvent =
                    this.currentYearEvents[0]?.title || null;

            } else {

                this.activeEvent = null;

            }

            this.currentIndex = 0;

        },


        /* =====================================================
           CHANGE YEAR
        ===================================================== */

        selectYear(year) {

            this.activeYear = year;

            this.currentIndex = 0;

            this.setDefaultEvent();

        },


        /* =====================================================
           CHANGE FESTIVAL
        ===================================================== */

        selectEvent(event) {

            this.activeEvent = event;

            this.currentIndex = 0;

        },


        /* =====================================================
           NEXT
        ===================================================== */

        next() {

            if (!this.hasCarousel) {
                return;
            }

            this.currentIndex =
                (
                    this.currentIndex + 1
                )
                % this.currentImages.length;

        },


        /* =====================================================
           PREVIOUS
        ===================================================== */

        previous() {

            if (!this.hasCarousel) {
                return;
            }

            this.currentIndex =
                (
                    this.currentIndex -
                    1 +
                    this.currentImages.length
                )
                % this.currentImages.length;

        },


        /* =====================================================
           DOT
        ===================================================== */

        goTo(index) {

            if (!this.hasCarousel) {
                return;
            }

            this.currentIndex = index;

        }

    }

}

</script>
@endsection