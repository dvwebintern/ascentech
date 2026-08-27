@extends('layouts.app')
@section('title', 'Home')

@section('content')

{{-- HERO --}}
<section class="hero-section" x-data="{ scrolled: false }" x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 500 })">

    <div class="hero-bg">
        @include('partials.header')

        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-title">Simplifying Tech Solutions Since 2016</h1>
                <p class="hero-subtitle">Advanced ERP and E-Governance systems for Urban Local Bodies</p>
                <p class="hero-trust">Trusted by over 16+ Municipal Corporations</p>
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

{{-- ABOUT --}}
<section class="about-section">
    <div class="about-wrap">
        <div class="about-grid">

            <div class="about-images">
                <div class="about-img-top">
                    <img src="{{ asset('images/About-ASCENTec-image-1.webp') }}" alt="ASCENTech team" class="about-img">
                </div>
                <div class="about-img-bottom">
                    <img src="{{ asset('images/About-ASCENTec-image-2.webp') }}" alt="ASCENTech technology" class="about-img">
                </div>
            </div>

            <div class="about-content">
                <p class="about-eyebrow">Management Team With 25+ Years of Experience</p>
                <h2 class="about-title">
                    Providing Scalable Solutions For
                    <span class="about-title-highlight">Govt. Authorities And Enterprises</span>
                </h2>
                <p class="about-desc">ASCENTech is a leading tech solutions provider and a Three National Award winner including prestigious SKOCH award and award for best E-governance implementation for the Urban Local Bodies.</p>

                <div class="about-features">
                    <div class="about-feature">
                        <span class="about-check">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M5 12l4 4L19 6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </span>
                        <span>Pioneer in SaaS-based ERP systems for E-Governance in India</span>
                    </div>
                    <div class="about-feature">
                        <span class="about-check">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M5 12l4 4L19 6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </span>
                        <span>Expertise in Mobility Solutions</span>
                    </div>
                    <div class="about-feature">
                        <span class="about-check">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M5 12l4 4L19 6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </span>
                        <span>IT Infrastructure and Cloud-based solutions</span>
                    </div>
                    <div class="about-feature">
                        <span class="about-check">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M5 12l4 4L19 6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </span>
                        <span>Banking and Financial Technology solutions</span>
                    </div>
                </div>

                <div class="about-cards">
                    <div class="about-card">
                        <div class="about-card-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M6 3h9l3 3v15H6z"/><path d="M15 3v4h3"/><path d="M9 11h6"/><path d="M9 14h6"/><circle cx="14" cy="18" r="2"/></svg>
                        </div>
                        <div>
                            <h3 class="about-card-title">Certified Company</h3>
                            <p class="about-card-desc">Certified for security, quality and service excellence.</p>
                        </div>
                    </div>
                    <div class="about-card">
                        <div class="about-card-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M12 3l2.2 5 5.3.5-4 3.5 1.2 5.2-4.7-2.7-4.7 2.7 1.2-5.2-4-3.5 5.3-.5z"/></svg>
                        </div>
                        <div>
                            <h3 class="about-card-title">Proven Excellence</h3>
                            <p class="about-card-desc">Honoured for e-Governance excellence and innovation.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- STATS --}}
<section class="stats-section">
    <div class="stats-wrap">
        <div class="stats-grid">
            @foreach ($stats as $stat)
                <div class="stat-item">
                    <div class="stat-value">{{ $stat['value'] }}{{ $stat['suffix'] }}</div>
                    <div class="stat-label">{{ $stat['label'] }}</div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<section>
     <div class="stats-certs">
            @foreach ($certifications as $cert)
                <img src="{{ asset('images/'.$cert) }}" alt="Certification" class="stats-cert-img">
            @endforeach
        </div></section>
{{-- PRODUCTS --}}
<section class="products-section">
    <div class="products-wrap">
        <div class="section-header">
            <p class="section-eyebrow">Our Products</p>
            <h2 class="section-title">Smart Platforms For <span class="section-title-highlight">E-Governance</span></h2>
            <p class="section-subtitle">Unifying all operations for better control</p>
        </div>

        <div class="products-grid">
            @foreach ($products as $product)
                <a href="{{ $product['url'] }}" class="product-card">
                    <img src="{{ asset('images/'.$product['image']) }}" alt="{{ $product['name'] }}" class="product-img">
                    <div class="product-overlay"></div>
                    <div class="product-content">
                        <h3 class="product-title">{{ $product['name'] }}</h3>
                        <div class="product-tags">
                            @foreach ($product['points'] as $point)
                                <span class="product-tag">{{ $point }}</span>
                            @endforeach
                        </div>
                    </div>
                    <div class="product-arrow">↗</div>
                </a>
            @endforeach
        </div>
    </div>
</section>
{{-- EXPERTISE --}}
<section class="expertise-section">
    <div class="expertise-wrap">
        <div class="section-header">
            <p class="section-eyebrow">Our Expertise</p>
            <h2 class="section-title">Simple Solutions For <span class="section-title-highlight">Complex Requirements</span></h2>
            <p class="section-subtitle">Professional services across several domains</p>
        </div>

        <div class="expertise-grid">
            @foreach ($expertise as $item)
                <div class="expertise-card">
                    <div class="expertise-image">
                        <img src="{{ asset('images/'.$item['image']) }}" alt="{{ $item['title'] }}">
                    </div>
                    <div class="mybadge">{{ $item['title'] }}</div>
                    <div class="expertise-description">
                        <p>{{ $item['desc'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- SECTORS --}}
<section class="sectors-section">
    <div class="sectors-wrap">
       <div class="section-header">
            <h2 class="section-title">Sector <span class="section-title-highlight">We Serve</span></h2>
            <p class="section-subtitle">Empowering authorities across India</p>
        </div>

        <div class="sectors-grid">
            @foreach ($sectors as $sector)
                <div class="sector-card">
                    <img src="{{ asset('images/'.$sector['image']) }}" alt="{{ $sector['title'] }}">
                    <div class="sector-overlay">
                        <h3>{{ $sector['title'] }}</h3>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
{{-- TESTIMONIALS --}}
<section class="testimonials-section">
    <div class="testimonials-wrap">

        <div class="testimonials-heading">
            <h2>
                Feedback From <span>Our Clients</span>
            </h2>
            <p>Hear from the clients who saw the difference</p>
        </div>

        <div class="testimonials-grid">
            @foreach ($testimonials as $t)
                <div class="testimonial-card">

                    <div class="testimonial-top">
                        <div>
                            <p class="testimonial-name">{{ $t['name'] }}</p>
                            <p class="testimonial-role">{{ $t['role'] }}</p>
                        </div>

                        <svg class="testimonial-quote"
                             viewBox="0 0 32 32"
                             fill="currentColor">
                            <path d="M15.3 10.7c0-4.2-3.4-7.6-7.6-7.6S0 6.5 0 10.7s3.4 7.6 7.6 7.6c.5 0 1-.05 1.5-.15C8.2 22 6.3 25.3 5.3 27.1c-.3.5-.5.9-.6 1.2-.1.3-.4.8 0 1.2.1.1.3.2.4.2.3 0 .7-.2 1-.4.4-.3 1-.7 2-1.4l.04-.04c1.8-1.6 3.2-3.4 4.4-5.5.9-1.7 1.6-3.5 2.1-5.4.7-3.1.7-5.5.6-6.2z"/>
                        </svg>
                    </div>

                    <div class="testimonial-stars">★★★★★</div>

                    <p class="testimonial-text">
                        {{ $t['quote'] }}
                    </p>

                </div>
            @endforeach
        </div>

    </div>
</section>

{{-- CLIENTS --}}
<section class="clients-section">

    <div class="clients-heading">
        <h2>
            Trusted Across <span>All Sectors</span>
        </h2>
        <p>Deployed in the top organisations in Maharashtra and beyond</p>
    </div>

    <div class="clients-marquee-row">
        <div class="clients-track clients-track-left">
            @foreach ($clients as $client)
                <div class="client-logo-wrap">
                    <img src="{{ asset('images/'.$client) }}" alt="Client logo" class="client-logo">
                </div>
            @endforeach
            @foreach ($clients as $client)
                <div class="client-logo-wrap">
                    <img src="{{ asset('images/'.$client) }}" alt="Client logo" class="client-logo">
                </div>
            @endforeach
        </div>
    </div>

    <div class="clients-marquee-row">
        <div class="clients-track clients-track-right">
            @foreach ($clients as $client)
                <div class="client-logo-wrap">
                    <img src="{{ asset('images/'.$client) }}" alt="Client logo" class="client-logo">
                </div>
            @endforeach
            @foreach ($clients as $client)
                <div class="client-logo-wrap">
                    <img src="{{ asset('images/'.$client) }}" alt="Client logo" class="client-logo">
                </div>
            @endforeach
        </div>
    </div>

</section>
{{-- FAQ --}}
<section class="faq-section">

    <div class="faq-inner">

        <div class="faq-heading">
            FAQs
        </div>

        <div class="faq-columns">

            {{-- FAQ LIST --}}
            <div class="faq-list" x-data="{ open: 0 }">

                @foreach ($faqs as $i => $faq)

                    <div
                        class="faq-item"
                        :class="{ 'faq-active': open === {{ $i }} }"
                    >

                        <button
                            type="button"
                            class="faq-question"
                            @click="open = open === {{ $i }} ? null : {{ $i }}"
                        >

                            <span class="faq-question-text">
                                {{ $faq['q'] }}
                            </span>

                            <span class="faq-icon">
                                <span x-show="open !== {{ $i }}">+</span>
                                <span x-show="open === {{ $i }}" x-cloak>−</span>
                            </span>

                        </button>

                        <div
                            class="faq-answer"
                            x-show="open === {{ $i }}"
                            x-collapse
                            x-cloak
                        >
                            <p>{{ $faq['a'] }}</p>
                        </div>

                    </div>

                @endforeach

            </div>


            {{-- FAQ RIGHT SIDE --}}
            <div class="faq-side">

                <div class="faq-cta-card">

                    <svg
                        class="faq-cta-icon"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.5"
                    >
                        <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"/>
                    </svg>

                    <p class="faq-cta-title">
                        You have a different question?
                    </p>

                    <p class="faq-cta-desc">
                        Security, simplicity and support for better control through our product
                    </p>

                    <a
                        href="{{ route('contact') }}"
                        class="faq-cta-btn"
                    >
                        Contact Us →
                    </a>

                </div>


                <div class="faq-contact-card">

                    <svg
                        class="faq-contact-icon"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.5"
                    >
                        <path d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.5.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.5 21 3 13.5 3 4.9 3 4.4 3.4 4 4 4h3.4c.6 0 1 .4 1 1 0 1.2.2 2.4.6 3.5.1.4 0 .8-.2 1l-2.2 2.3z"/>
                    </svg>

                    <div>
                        <p class="faq-contact-title">
                            Contact Us
                        </p>

                        <a
                            href="tel:+918657953083"
                            class="faq-contact-number"
                        >
                            +91 86579 53083
                        </a>
                    </div>

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

/* ===================== ABOUT ===================== */
.about-section { background: #fff; padding: 100px 24px; }
.about-wrap { max-width: 1400px; margin: 0 auto; }
.about-grid { display: grid; grid-template-columns: 1fr; gap: 56px; align-items: center; }
@media (min-width: 1024px) { .about-grid { grid-template-columns: 0.9fr 1.1fr; gap: 80px; } }

.about-images { position: relative; height: 500px; width: 600px; max-width: 560px; margin: 0 auto; }
.about-img-top { position: absolute; top: 0; left: 0; width: 72%; z-index: 1; }
.about-img-bottom { position: absolute; top: 190px; right: 0; width: 78%; z-index: 2; }
.about-img { width: 100%; height: 300px; object-fit: cover; border-radius: 16px; }
.about-img-bottom .about-img { height: 330px;}

.about-eyebrow { color: #2E3192; font-weight: 500; font-size: 16px; margin-bottom: 16px; }
.about-title { font-size: 41px !important; line-height: 1.1; font-weight: 500; letter-spacing: -0.02em; color: #111827; margin-bottom: 28px; }
.about-title-highlight { display: block; color: #2E3192; }
@media (min-width: 768px) { .about-title { font-size: 48px; } }
.about-desc { color: #374151; font-size: 17px; line-height: 1.9; max-width: 760px; margin-bottom: 10px !important; }

.about-features { display: flex; flex-direction: column; gap: 14px; margin-bottom: 20px; }
.about-feature { display: flex; align-items: center; gap: 2px; color: #1f2937; font-size: 16px; font-weight:400px !important;}
.about-check { width: 15px; height: 15px; flex-shrink: 0; 
margin-bottom:0px;border-radius: 50%; border: 0px solid #1f2937; display: flex; align-items: center; justify-content: center; }
.about-check svg { width: 15px; height: 15px; }

.about-cards { display: grid; grid-template-columns: 1fr; gap: 10px !important; }
@media (min-width: 640px) { .about-cards { grid-template-columns: 1fr 1fr; } }
.about-card { border: 1px solid #c9cce8; border-radius: 20px; padding: 14px 16px; display: flex; align-items: center; gap: 16px; min-height: 104px; }
.about-card-icon { width: 50px; height: 50px; flex-shrink: 0; border-radius: 50%; background: #f1f2f8; display: flex; align-items: center; justify-content: center; }
.about-card-icon svg { width: 38px; height: 38px; color: #2E3192; }
.about-card-title { color: #2E3192; font-size: 19px; font-weight: 600; margin-bottom: 4px; }
.about-card-desc { color: #4b5563; font-size: 14px; line-height: 1.4; }

/* ===================== STATS ===================== */

.stats-section {
    background: #f9fafb;
    background-image: url('{{ asset('images/Website-Banner-1200x500-service-page-blue-1.webp') }}');
    background-size: cover;
    background-position: center center;
    aspect-ratio: 1000 / 150;
    border-radius: 30px;
    margin: 15px 120px;
    color: #fff;
    position: relative;
    overflow: hidden;
}

.stats-wrap {
    max-width: 1200px;
    margin: 0 auto;
    height: 100%;
}

.stats-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    height: 100%;
    min-height: 100%;
    padding: 0 24px;
    text-align: center;
}

/* Full-height dividers */
.stats-grid .stat-item {
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.stats-grid .stat-item:nth-child(-n+3)::after {
    content: "";
    position: absolute;
    top: 0;
    bottom: 0;
    right: 0;
    width: 1px;
    background: #fff;
}

/* Stat content */
.stat-value {
    font-size: 56px;
    font-weight: 700;
    color: #d9daec;
}

.stat-label {
    color: #eff0f4;
    margin-top: 0;
    font-size: 16px;
}

/* Mobile */
@media (max-width: 767px) {

    .stats-section {
        margin: 15px 20px;
        aspect-ratio: auto;
    }

    .stats-grid {
        grid-template-columns: repeat(2, 1fr);
        padding: 30px 10px;
    }

    /* Remove desktop dividers */
    .stats-grid .stat-item:nth-child(-n+3)::after {
        display: none;
    }

    /* Vertical dividers between columns */
    .stats-grid .stat-item:nth-child(odd)::after {
        display: block;
        top: 0;
        bottom: 0;
        right: 0;
    }

    .stat-value {
        font-size: 40px;
    }
}
.stats-certs { display: flex; flex-wrap: wrap; margin-top:70px;justify-content: center; align-items: center; gap: 100px; opacity: 1; }
.stats-cert-img { height: 120px; object-fit: contain; }

/* ===================== SHARED SECTION HEADER ===================== */
.section-header { text-align: center; margin-bottom: 48px; }
.section-eyebrow { color: #040f77; font-size: 16px; font-weight: 500; margin-bottom: 12px; }
.section-title { color: #111827; font-size: 34px; font-weight: 500; line-height: 1.2; letter-spacing: -0.01em; }
.section-title-highlight { color: #2E3192; }
.section-subtitle { color: #6b7280; font-size: 17px; margin-top: 12px; }
@media (min-width: 768px) { .section-title { font-size: 44px; } }

/* ===================== PRODUCTS ===================== */
.products-section { background: #fff; padding: 80px 24px; }
.products-wrap { max-width: 1200px; margin: 0 auto; }
.products-grid { display: grid; grid-template-columns: 1fr; gap: 24px; border:1px solid #cbcbcb;
padding:10px; border-radius:20px;}
@media (min-width: 768px) { .products-grid { grid-template-columns: 1fr 1fr; gap: 32px; } }
.product-card { position: relative; display: block; height: 400px !important; border-radius: 20px; overflow: hidden; text-decoration: none; }
@media (min-width: 768px) { .product-card { height: 520px; } }
.product-img { position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease; }
.product-card:hover .product-img { transform: scale(1.03); }
.product-overlay { position: absolute; inset: 0; background: linear-gradient(to top, rgba(0,0,0,0.7), rgba(0,0,0,0.2), transparent); }
.product-content { position: absolute; inset-inline: 0; bottom: 0; padding: 28px; color: #fff; }
.product-title { font-size: 28px; font-weight: 700; line-height: 1.2; margin-bottom: 16px; }
.product-tags { display: flex; flex-wrap: wrap; gap: 8px; padding-right: 50px; }
.product-tag { display: inline-flex; align-items: center; border: 2px solid rgba(255,255,255); background: rgba(0,0,0,0.1); color: #fff; padding: 7px 14px; border-radius: 999px; font-size: 16px; font-weight:700px; }
.product-arrow { position: absolute; right: 24px; bottom: 24px; width: 54px; height: 54px; border-radius: 50%; background: #2E3192; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 30px; font-weight: 300; transition: transform 0.3s ease; }
.product-card:hover .product-arrow { transform: translate(4px, -4px); }
/* ===================== EXPERTISE ===================== */
.expertise-section { background: #fff; padding: 40px 24px; }
.expertise-wrap { max-width: 1200px; margin: 0 auto; }
.expertise-grid { display: grid; grid-template-columns: 1fr; gap: 32px; }
@media (min-width: 768px) { .expertise-grid { grid-template-columns: 1fr 1fr; } }
@media (min-width: 1024px) { .expertise-grid { grid-template-columns: 1fr 1fr 1fr; } }
.expertise-card { background: #fff; border-radius: 14px; position: relative; }
.expertise-card {
    background: #fff;
    border-radius: 14px;
    position: relative;
    border: 2px solid transparent;
    transition: border-color 0.25s ease, box-shadow 0.25s ease;
}
.expertise-card:hover {
    border-color: #2E3192;
    border:1px 1px 4px 1px;
    
}
.mybadge {
    position: absolute;
    bottom: 95px;
    left: -1px;
    width: fit-content;
    background: linear-gradient(135deg, #4f7be8, #072361);
    color: #fff;
    padding: 10px 24px;
    font-size: 15px;
    font-weight: 600;
    border-top-right-radius: 20px;
    border-bottom-right-radius: 20px;
    z-index: 2;
}
.mybadge::before {
    content: "";
    position: absolute;
    left: 0;
    bottom: -6px;
    width: 0;
    height: 0;
    border-top: 6px solid #1f3d86;
    border-right: 10px solid transparent;
}
.expertise-image { position: relative; width: 100%; height: 280px; overflow: hidden; border-radius: 14px 14px 0 0; }
.expertise-image img { width: 100%; height: 100%; object-fit: cover; }
.expertise-description { padding: 28px; border: 1px solid #e5e7eb; border-top: none; border-radius: 0 0 14px 14px; }
.expertise-description p { color: #5f7394; font-size: 17px; line-height: 1.55; }

/* ===================== SECTORS ===================== */
.sectors-section { background: #ffffff; color: #fff; padding: 80px 24px; }
.sectors-wrap { max-width: 1200px; margin: 0 auto; }
.sectors-title { font-size: 32px; font-weight: 700; color: black; text-align: center; margin-bottom: 8px; }
.sectors-subtitle { color: #d1d5db; text-align: center; margin-bottom: 48px; }
.sectors-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 24px; }
@media (min-width: 768px) { .sectors-grid { grid-template-columns: repeat(4, 1fr); } }
.sector-card { position: relative; border-radius: 12px; overflow: hidden; }
.sector-card img { width: 100%; height: 350px; object-fit: cover; }
.sector-overlay {
    position: absolute;
    inset: 0;
    display: flex;
    align-items: flex-end;
    padding: 16px;
    background: linear-gradient(to top, rgba(2,21,131,1) 0%, rgba(2,21,131,0.1) 25%, rgba(2,21,131,0.2) 50%, transparent 100%);
}
.sector-overlay h3 { font-weight: 600; color: #fff; }

/* =========================================================
   TESTIMONIALS
========================================================= */

.testimonials-section {
    width: 100%;
    max-width: none;
    margin: 0;
    background: #06143d;
    color: #fff;
    padding: 24px 30px 30px;
}

.testimonials-wrap {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
}

.testimonials-heading {
    text-align: center;
    margin-bottom: 16px;
}

.testimonials-heading h2 {
    margin: 0;
    color: #fff;
    font-size: 36px;
    line-height: 1.2;
    font-weight: 600;
}

.testimonials-heading h2 span {
    color: #ffc400;
}

.testimonials-heading p {
    margin: 3px 0 0;
    color: #fff;
    font-size: 16px;
    line-height: 1.3;
}

.testimonials-grid {
    width: 100%;
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 8px;
}

.testimonial-card {
    position: relative;
    min-height: 300px;
    background: #273454;
    border: 1px solid rgba(255, 255, 255, 0.8);
    border-radius: 7px;
    padding: 12px 11px;
    overflow: hidden;
}

.testimonial-top {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    gap: 8px;
    margin-bottom: 3px;
}

.testimonial-name {
    margin: 0;
    color: #fff;
    font-size: 18px;
    font-weight: 700;
    line-height: 1.2;
}

.testimonial-role {
    margin: 2px 0 0;
    color: #fff;
    font-size: 13px;
    line-height: 1.25;
}

.testimonial-quote {
    width: 23px;
    height: 23px;
    flex-shrink: 0;
    color: rgba(255, 255, 255, 0.75);
}

.testimonial-stars {
    margin: 4px 0 8px;
    color: #ffc400;
    font-size: 17px;
    letter-spacing: 1px;
    line-height: 1;
}

.testimonial-text {
    margin: 0;
    color: #f0f2f8;
    font-size: 16px;
    line-height: 1.55;
}

/* =========================================================
   CLIENTS / TRUSTED ACROSS ALL SECTORS
========================================================= */

.clients-section {
    width: 100%;
    max-width:auto;
    margin: 60px 0px;
    background: #fff;
    padding: 18px 0 20px;
    overflow: hidden;
}

.clients-heading {
    text-align: center;
    margin-bottom: 24px;
    padding: 0 30px;
}

.clients-heading h2 {
    margin: 0;
    color: #111;
    font-size: 38px;
    line-height: 1.2;
    font-weight: 500;
}

.clients-heading h2 span {
    color: #2e3192;
}

.clients-heading p {
    margin: 3px 0 0;
    color: #999;
    font-size: 16px;
    line-height: 1.3;
}

.clients-marquee-row {
    width: 100%;
    overflow: hidden;
    margin-bottom: 24px;
    mask-image: linear-gradient(to right, transparent, #000 8%, #000 92%, transparent);
    -webkit-mask-image: linear-gradient(to right, transparent, #000 8%, #000 92%, transparent);
}
.clients-marquee-row:last-child { margin-bottom: 0; }

.clients-track {
    display: flex;
    align-items: center;
    gap: 40px;
    width: max-content;
}

.clients-track-left {
    animation: clients-scroll-left 35s linear infinite;
}
.clients-track-right {
    animation: clients-scroll-right 35s linear infinite;
}

@keyframes clients-scroll-left {
    from { transform: translateX(0); }
    to { transform: translateX(-50%); }
}
@keyframes clients-scroll-right {
    from { transform: translateX(-50%); }
    to { transform: translateX(0); }
}

.client-logo-wrap {
    flex-shrink: 0;
    height: 90px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.client-logo {
    display: block;
    width: auto;
    height: 120px;
    object-fit: contain;
    opacity: 0.85;
    transition: opacity 0.2s ease;
}
.client-logo:hover {
    opacity: 1;
}

/* =========================================================
   FAQ
========================================================= */

.faq-section {
    width: 100%;
    max-width: none;
    margin: 0;
    background: #f5f5f5;
    padding: 22px 30px 28px;
}

.faq-inner {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
}

.faq-heading {
    margin-bottom: 20px;
    color: #111;
    font-size: 38px;
    font-weight: 500;
    line-height: 1.2;
}

.faq-columns {
    width: 100%;
    display: grid;
    grid-template-columns: 1.65fr 0.75fr;
    gap: 20px;
    align-items: start;
}

.faq-list {
    display: flex;
    flex-direction: column;
    gap: 6px;
}

.faq-item {
    width: 100%;
    background: #fff;
    border: 0;
    border-radius: 5px;
    margin: 0;
    overflow: hidden;
    transition: all 0.2s ease;
}

.faq-item.faq-active {
    border: 0;
}

.faq-question {
    width: 100%;
    min-height: 30px;
    padding: 8px 10px;
    border: 0;
    background: #fff;
    display: flex;
    align-items: center;
    justify-content: space-between;
    cursor: pointer;
    text-align: left;
}

.faq-question-text {
    color: #111;
    font-size: 16px;
    font-weight: 600;
    line-height: 1.3;
    padding-right: 10px;
}

.faq-icon {
    width: 20px;
    height: 20px;
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    background: transparent;
    color: #555;
    font-size: 11px;
    font-weight: 400;
}

.faq-active .faq-icon {
    background: transparent;
    color: #555;
}

.faq-answer {
    padding: 0 10px 9px;
    background: #fff;
}

.faq-answer p {
    margin: 0;
    color: #666;
    font-size: 15px;
    line-height: 1.5;
}


/* =========================================================
   FAQ RIGHT SIDE
========================================================= */

.faq-side {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.faq-cta-card {
    min-height: 180px;
    background: #3633a0;
    border-radius: 9px;
    padding: 14px 12px;
    color: #fff;
    text-align: center;
}

.faq-cta-icon {
    display: block;
    width: 27px;
    height: 27px;
    margin: 0 auto 8px;
    color: #fff;
}

.faq-cta-title {
    margin: 0 0 5px;
    color: #fff;
    font-size: 18px;
    font-weight: 700;
    line-height: 1.25;
}

.faq-cta-desc {
    margin: 0 auto 10px;
    max-width: 280px;
    color: #d9d9f2;
    font-size: 15px;
    line-height: 1.45;
}

.faq-cta-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 3px;
    background: #fff;
    color: #3633a0;
    padding: 6px 11px;
    border-radius: 999px;
    font-size: 16px;
    font-weight: 600;
    text-decoration: none;
}

.faq-contact-card {
    min-height: 73px;
    background: #fff;
    border: 0;
    border-radius: 9px;
    padding: 9px 11px;
    display: flex;
    align-items: center;
    gap: 8px;
}

.faq-contact-icon {
    width: 23px;
    height: 23px;
    color: #3633a0;
    flex-shrink: 0;
}

.faq-contact-title {
    margin: 0 0 2px;
    color: #111;
    font-size: 16px;
    font-weight: 700;
    line-height: 1.2;
}

.faq-contact-number {
    display: block;
    color: #777;
    font-size: 16px;
    line-height: 1.2;
    text-decoration: none;
}


/* =========================================================
   TABLET
========================================================= */

@media (max-width: 900px) {

    .testimonials-section,
    .clients-section,
    .faq-section {
        padding-left: 20px;
        padding-right: 20px;
    }

    .clients-grid {
        grid-template-columns: repeat(6, 1fr);
    }

    .faq-columns {
        grid-template-columns: 1.5fr 0.8fr;
        gap: 15px;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 767px) {

    .testimonials-section {
        padding: 20px 15px 25px;
    }

    .testimonials-heading h2,
    .clients-heading h2 {
        font-size: 18px;
    }

    .testimonials-heading p,
    .clients-heading p {
        font-size: 7px;
    }

    .testimonials-grid {
        grid-template-columns: 1fr;
        gap: 8px;
    }

    .testimonial-card {
        min-height: 145px;
    }


    /* CLIENT LOGOS */

    .clients-section {
        padding: 18px 15px 20px;
    }

   .clients-track { gap: 24px; }
.client-logo-wrap { height: 50px; }
.client-logo { height: 50px; }


    /* FAQ */

    .faq-section {
        padding: 20px 15px 25px;
    }

    .faq-columns {
        grid-template-columns: 1fr;
        gap: 12px;
    }

    .faq-side {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 10px;
    }

    .faq-cta-card {
        min-height: 125px;
    }

}
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
}</style>

@endsection