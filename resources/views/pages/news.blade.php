@extends('layouts.app')

@section('title', 'News & Media')

@section('content')

{{-- =========================================================
     HERO
========================================================= --}}

<section class="hero-section"
    x-data="{ scrolled: false }"
    x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 500 })">

    <div class="hero-bg">

        @include('partials.header')

        <div class="hero-content">

            <div class="hero-text">

                <h1 class="hero-title">
                    Our News And Media Presence
                </h1>

                <p class="hero-subtitle">
                    Featured across leading media platforms
                </p>

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
</style>

@endsection