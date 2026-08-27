@extends('layouts.app')
@section('title', 'Events')

@section('content')

{{-- HERO --}}
<section class="hero-section" x-data="{ scrolled: false }" x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 500 })">

    <div class="hero-bg">
        @include('partials.header')

        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-title">Events And Milestones
</h1>
                <p class="hero-subtitle">Celebrating growth and teamwork

</p>
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

        <div class="year-tabs">

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


        {{-- =====================================================
             FESTIVAL / EVENT TABS
             2022 AND NEWER ONLY
        ====================================================== --}}

        <template x-if="showEventTabs">

            <div class="festival-tabs">

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


@media (max-width: 900px) {

    .events-wrap {
        max-width: 100%;
    }

    .year-tabs {
        gap: 8px;
    }

    .year-tab {
        height: 52px;
        padding: 0 8px;
        font-size: 15px;
    }

    .festival-tabs {
        gap: 8px;
    }

    .festival-tab {
        height: 50px;
        padding: 0 8px;
        font-size: 14px;
    }

    .gallery {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }

    .gallery-image {
        height: 250px;
    }
}

/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 600px) {

    .events-section {
        padding: 40px 12px 60px;
    }

    .year-tabs {
        justify-content: flex-start;

        flex-wrap: nowrap;

        overflow-x: auto;

        margin-bottom: 35px;

        padding:
            5px 2px 12px;
    }

    .year-tab {
        flex: 0 0 auto;

        min-width: 90px;
        height: 46px;
    }

    .festival-tabs {
        display: flex;

        justify-content: flex-start;

        flex-wrap: nowrap;

        overflow-x: auto;

        margin:
            0 0 35px;

        padding:
            5px 2px 12px;
    }

    .festival-tab {
        flex: 0 0 auto;

        min-width: 180px;
    }

    .gallery-container {
        padding: 12px;
    }

    .gallery {
        grid-template-columns: 1fr;
    }

    .gallery-image {
        height: 270px;
    }

    .gallery-arrow {
        width: 34px;
        height: 34px;
    }

    .gallery-arrow span {
        font-size: 25px;
    }

    .gallery-prev {
        left: 3px;
    }

    .gallery-next {
        right: 3px;
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

            return this.currentImages.length > 3;

        },


        /* =====================================================
           VISIBLE IMAGES
           
           Desktop = 3 images
        ===================================================== */

        get visibleImages() {

            const images = this.currentImages;

            /*
             * 3 or fewer images
             * Just show them normally.
             */

            if (images.length <= 3) {

                return images;

            }


            /*
             * More than 3 images
             * Create a sliding 3-image window.
             */

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