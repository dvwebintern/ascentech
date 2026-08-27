@extends('layouts.app')
@section('title', 'Contact Us')

@section('content')

{{-- HERO --}}
<section class="hero-section" x-data="{ scrolled: false }" x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 500 })">

    <div class="hero-bg">
        @include('partials.header')

        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-title">Connect With Our Experts</h1>
                <p class="hero-subtitle">Reach out for a demo, quotation, discussion and more</p>
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
</style>

@endsection