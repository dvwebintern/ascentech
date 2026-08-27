@extends('layouts.app')
@section('title', 'Awards')

@section('content')

{{-- HERO --}}
<section class="hero-section" x-data="{ scrolled: false }" x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 500 })">

    <div class="hero-bg">
        @include('partials.header')

        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-title">Awards For Excellence In Technology</h1>
                <p class="hero-subtitle">Recognised for IT and E-Governance Solutions</p>
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
   TABLET
========================================================= */

@media (max-width: 768px) {

    .recognition-section {
        padding: 25px 15px 50px;
    }

    .recognition-wrap {
        padding: 18px 10px 20px;
    }

    .recognition-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .recognition-image-box {
        height: 220px;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 480px) {

    .recognition-section {
        padding: 20px 10px 40px;
    }

    .recognition-wrap {
        padding: 14px 8px 18px;
        border-radius: 8px;
    }

    .recognition-tabs {
        gap: 7px;
        margin-bottom: 24px;
    }

    .recognition-tab {
        height: 38px;
        font-size: 12px;
        border-radius: 8px;
    }

    .recognition-content {
        padding: 10px 6px;
    }

    .recognition-grid {
        grid-template-columns: 1fr;
        gap: 12px;
    }

    .recognition-image-box {
        height: 250px;
    }

    .recognition-title {
        font-size: 14px;
    }

}
</style>

@endsection