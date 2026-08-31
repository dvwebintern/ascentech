@extends('layouts.app')
@section('title', 'Contact Us')

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
              <h1 class="hero-title">Connect With Our Experts</h1>
                <p class="hero-subtitle">Reach out for a demo, quotation, discussion and more</p>
            </div>
            <div class="hero-graphic">
                <img src="{{ asset('images/contact page.png') }}" alt="" class="hero-graphic-img">
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
            </div>
        </div>
    </div>

</section>

{{-- CONTACT CONTENT --}}
<section class="ct-section">
    <div class="ct-container">

        {{-- TOP: REACH OUT + FORM --}}
        <div class="ct-top-grid">

            {{-- LEFT PANEL --}}
            <div class="ct-reach-panel">
                <h2>Reach Out To Us</h2>
                <div class="ct-divider-dashed"></div>

                <div class="ct-reach-card">
                    <div class="ct-reach-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.5.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.5 21 3 13.5 3 4.9 3 4.4 3.4 4 4 4h3.4c.6 0 1 .4 1 1 0 1.2.2 2.4.6 3.5.1.4 0 .8-.2 1l-2.2 2.3z"/></svg>
                    </div>
                    <div>
                        <p class="ct-reach-title">Call Us</p>
                        <a href="tel:+918657953083" class="ct-reach-line">+91 86579 53083</a>
                        <a href="tel:+919967791198" class="ct-reach-line">+91 99677 91198</a>
                    </div>
                </div>

                <div class="ct-reach-card">
                    <div class="ct-reach-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M4 4h16v16H4z"/><path d="M4 6l8 7 8-7"/></svg>
                    </div>
                    <div>
                        <p class="ct-reach-title">Email Address</p>
                        <a href="mailto:management@ascentechindia.com" class="ct-reach-line">management@ascentechindia.com</a>
                    </div>
                </div>

                <div class="ct-reach-card ct-reach-social">
                    <p class="ct-reach-title">Follow Us On:</p>
                    <div class="ct-social-icons">
                        <a href="https://www.instagram.com/ascentechtechnology2" target="_blank" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://www.facebook.com/ASCENTech-Information-Technology-Private-Limited-101502025310995" target="_blank" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="https://www.linkedin.com/company/ascentech-information-technology-pvt-ltd/about/" target="_blank" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="http://www.youtube.com/@ascentechinformationtechno8611" target="_blank" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>
            </div>

            {{-- RIGHT PANEL: FORM --}}
            <div class="ct-form-panel">
                <h2>Request A Callback</h2>
                <div class="ct-divider-dashed"></div>
@if(session('success'))
    <div class="ct-success-message">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="ct-error-message">
        {{ session('error') }}
    </div>
@endif
                <form action="{{ route('contact.submit') }}" method="POST" class="ct-form">
                    @csrf

                    <div class="ct-form-row">
                        <div class="ct-form-group">
                            <label>Name</label>
                            <input type="text" name="name" placeholder="Name" required>
                        </div>
                    </div>

                    <div class="ct-form-row ct-form-row-2">
                        <div class="ct-form-group">
                            <label>Mobile Number</label>
                            <input type="tel" name="mobile" placeholder="Mobile Number" required>
                        </div>
                        <div class="ct-form-group">
                            <label>Email</label>
                            <input type="email" name="email" placeholder="Email Address" required>
                        </div>
                    </div>

                    <div class="ct-form-row ct-form-row-2">
                        <div class="ct-form-group">
                            <label>Position</label>
                            <input type="text" name="position" placeholder="Position">
                        </div>
                        <div class="ct-form-group">
                            <label>Organisation's Name</label>
                            <input type="text" name="organisation" placeholder="Organisation's Name">
                        </div>
                    </div>

                    <div class="ct-form-row">
                        <div class="ct-form-group">
                            <label>Requirements</label>
                            <textarea name="requirements" rows="4" placeholder="Enter your requirements"></textarea>
                        </div>
                    </div>

                    <div class="ct-form-submit">
                        <button type="submit" class="ct-submit-btn">Submit</button>
                    </div>
                </form>
                
            </div>

        </div>

        {{-- MAPS --}}
        <div class="ct-map-card">
            <div class="ct-map-embed">
                <iframe
                    src="https://www.google.com/maps?q=Chirag+Infotech,+Ambika+Nagar,+Wagle+Industrial+Estate,+Thane&output=embed"
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            <div class="ct-map-info">
                <h3>Corporate Office</h3>
                <p>Office no. 202, Chirag Infotech, Ambika Nagar, Wagle Industrial Estate, Thane (West) – 400604</p>
                <a href="https://www.google.com/maps/dir/?api=1&destination=Chirag+Infotech,+Ambika+Nagar,+Wagle+Industrial+Estate,+Thane" target="_blank" class="ct-direction-btn">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 2L2 22l10-5 10 5z"/></svg>
                    Get Direction
                </a>
            </div>
        </div>

        <div class="ct-map-card">
            <div class="ct-map-embed">
                <iframe
                    src="https://www.google.com/maps?q=Yashwant+Darshan,+Virat+Nagar,+Virar+West,+Palghar&output=embed"
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            <div class="ct-map-info">
                <h3>Development Centre</h3>
                <p>101, Yashwant Darshan P. P. Marg, Virat Nagar, Virar (West), Maharashtra, 401303</p>
                <a href="https://www.google.com/maps/dir/?api=1&destination=Yashwant+Darshan,+Virat+Nagar,+Virar+West,+Palghar" target="_blank" class="ct-direction-btn">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 2L2 22l10-5 10 5z"/></svg>
                    Get Direction
                </a>
            </div>
        </div>

    </div>
</section>

<style>
    .ct-success-message {
    background: #eaf8ef;
    color: #176b36;
    border: 1px solid #b8e5c5;
    padding: 12px 16px;
    border-radius: 8px;
    margin-bottom: 20px;
    font-size: 15px;
    font-weight: 600;
}

.ct-error-message {
    background: #fff1f1;
    color: #b42318;
    border: 1px solid #f3b5b5;
    padding: 12px 16px;
    border-radius: 8px;
    margin-bottom: 20px;
    font-size: 15px;
    font-weight: 600;
}
.ct-section { padding: 60px 24px; background: #fff; }
.ct-container { width: min(1200px, 100%); margin: 0 auto; }

.ct-top-grid { display: grid; grid-template-columns: 1fr; gap: 24px; margin-bottom: 32px; }
@media (min-width: 900px) { .ct-top-grid { grid-template-columns: 420px 1fr; } }

.ct-reach-panel { background: #2E3192; border-radius: 20px; padding: 32px 24px; color: #fff; }
.ct-reach-panel h2 { font-size: 26px; font-weight: 700; margin-bottom: 12px; }
.ct-divider-dashed { border-top: 2px dashed rgba(255,255,255,0.25); margin-bottom: 20px; }
.ct-form-panel .ct-divider-dashed { border-top: 2px dashed #e5e7eb; }

.ct-reach-card { background: #fff; border-radius: 14px; padding: 16px; display: flex; align-items: flex-start; gap: 12px; margin-bottom: 14px; }
.ct-reach-icon { width: 38px; height: 38px; flex-shrink: 0; border-radius: 50%; background: #eef0fa; display: flex; align-items: center; justify-content: center; }
.ct-reach-icon svg { width: 18px; height: 18px; color: #2E3192; }
.ct-reach-title { font-size: 18px; font-weight: 700; color: #111; margin-bottom: 4px; }
.ct-reach-line { display: block; font-size: 17px; color: #1b1b1b; text-decoration: none; }

.ct-reach-social { display: block; }
.ct-social-icons { display: flex; gap: 10px; margin-top: 10px; }
.ct-social-icons a { width: 42px; height: 42px; border-radius: 50%; background: #f2f3f8; display: flex; align-items: center; justify-content: center; color: #2E3192; text-decoration: none; font-size: 17px; }

.ct-form-panel { background: #fff; border: 1px solid #e5e7eb; border-radius: 20px; padding: 32px; }
.ct-form-panel h2 { font-size: 26px; font-weight: 700; margin-bottom: 12px; color: #111; }

.ct-form-row { margin-bottom: 18px; }
.ct-form-row-2 { display: grid; grid-template-columns: 1fr; gap: 18px; }
@media (min-width: 600px) { .ct-form-row-2 { grid-template-columns: 1fr 1fr; } }

.ct-form-group label { display: block; font-size: 16px; font-weight: 600; color: #333; margin-bottom: 6px; }
.ct-form-group input, .ct-form-group textarea {
    width: 100%; border: 1px solid #d8dbe3; border-radius: 8px; padding: 10px 12px; font-size: 14px; font-family: inherit; color: #111;
}
.ct-form-group input:focus, .ct-form-group textarea:focus { outline: none; border-color: #2E3192; }
.ct-form-group textarea { resize: vertical; }

.ct-form-submit { display: flex; justify-content: flex-end; }
.ct-submit-btn { background: #2E3192; color: #fff; border: none; padding: 12px 32px; border-radius: 8px; font-size: 15px; font-weight: 600; cursor: pointer; transition: background 0.2s ease; }
.ct-submit-btn:hover { background: #232677; }

.ct-map-card { display: grid; grid-template-columns: 1fr; gap: 0; border: 1px solid #e5e7eb; border-radius: 16px; overflow: hidden; margin-bottom: 24px; }
@media (min-width: 700px) { .ct-map-card { grid-template-columns: 1fr 1fr; } }
.ct-map-embed { min-height: 270px; }
.ct-map-embed iframe { width: 100%; height: 100%; min-height: 220px; border: 0; display: block; }
.ct-map-info { padding: 24px; display: flex; flex-direction: column; justify-content: center; }
.ct-map-info h3 { font-size: 22px; font-weight: 700; color: #111; margin-bottom: 8px; }
.ct-map-info p { font-size: 17px; color: #555; line-height: 1.6; margin-bottom: 16px; }
.ct-direction-btn { display: inline-flex; align-items: center; gap: 6px; align-self: flex-start; border: 1px solid #2E3192; color: #2E3192; padding: 8px 16px; border-radius: 8px; font-size: 16px; font-weight: 600; text-decoration: none; transition: background 0.2s ease; }
.ct-direction-btn svg { width: 14px; height: 14px; }
.ct-direction-btn:hover { background: #eef0fa; }

/* ===================== GLOBAL HELPERS ===================== */
.text-center { text-align: center; }
.mb-12 { margin-bottom: 48px; }

/* ===================== HERO ===================== */
.hero-section { position: relative; }
.hero-bg {
    width: calc(100% - 30px);
    background-image: url('{{ asset('images/Website Banner 1200x500 contact page blue.png') }}');
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
   MOBILE / PHONE VIEW ONLY
   Desktop CSS remains unchanged
========================================================= */

@media (max-width: 767px) {

    /* ---------- CONTACT SECTION ---------- */

    .ct-section {
        padding: 30px 14px;
    }

    .ct-container {
        width: 100%;
    }

    .ct-top-grid {
        display: flex;
        flex-direction: column;
        gap: 18px;
        margin-bottom: 22px;
    }

    /* ---------- REACH OUT PANEL ---------- */

    .ct-reach-panel {
        border-radius: 18px;
        padding: 22px 16px;
    }

    .ct-reach-panel h2 {
        font-size: 22px;
        margin-bottom: 10px;
    }

    .ct-divider-dashed {
        margin-bottom: 15px;
    }

    .ct-reach-card {
        padding: 13px;
        border-radius: 12px;
        gap: 10px;
        margin-bottom: 10px;
    }

    .ct-reach-icon {
        width: 34px;
        height: 34px;
    }

    .ct-reach-icon svg {
        width: 16px;
        height: 16px;
    }

    .ct-reach-title {
        font-size: 15px;
        margin-bottom: 3px;
    }

    .ct-reach-line {
        font-size: 14px;
    }

    .ct-social-icons {
        gap: 8px;
        margin-top: 8px;
    }

    .ct-social-icons a {
        width: 36px;
        height: 36px;
        font-size: 15px;
    }

    /* ---------- FORM ---------- */

    .ct-form-panel {
        border-radius: 18px;
        padding: 22px 16px;
    }

    .ct-form-panel h2 {
        font-size: 22px;
        margin-bottom: 10px;
    }

    .ct-form-row {
        margin-bottom: 14px;
    }

    .ct-form-row-2 {
        display: grid;
        grid-template-columns: 1fr;
        gap: 14px;
    }

    .ct-form-group label {
        font-size: 14px;
        margin-bottom: 5px;
    }

    .ct-form-group input,
    .ct-form-group textarea {
        width: 100%;
        box-sizing: border-box;
        padding: 10px 11px;
        font-size: 14px;
        border-radius: 8px;
    }

    .ct-form-group textarea {
        min-height: 100px;
    }

    .ct-form-submit {
        justify-content: stretch;
    }

    .ct-submit-btn {
        width: 100%;
        padding: 11px 20px;
        font-size: 14px;
    }

    /* ---------- MAP ---------- */

    .ct-map-card {
        display: flex;
        flex-direction: column;
        border-radius: 14px;
        margin-bottom: 18px;
    }

    .ct-map-embed {
        min-height: 210px;
    }

    .ct-map-embed iframe {
        min-height: 210px;
    }

    .ct-map-info {
        padding: 18px 16px;
    }

    .ct-map-info h3 {
        font-size: 19px;
        margin-bottom: 6px;
    }

    .ct-map-info p {
        font-size: 14px;
        line-height: 1.5;
        margin-bottom: 13px;
    }

    .ct-direction-btn {
        font-size: 14px;
        padding: 8px 13px;
    }



    /* ---------- SUCCESS / ERROR ---------- */

    .ct-success-message,
    .ct-error-message {
        padding: 10px 12px;
        font-size: 13px;
        margin-bottom: 15px;
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
    width: 100%;
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


    /* -----------------------------------------------------
       PREVENT CONTENT FROM HIDING BEHIND BOTTOM NAV
    ----------------------------------------------------- */

    body {
        padding-bottom: 76px;
    }
</style>

@endsection