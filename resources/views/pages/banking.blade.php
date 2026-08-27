@extends('layouts.app')
@section('title', 'Banking Solutions')

@section('content')

{{-- HERO --}}
<section class="hero-section" x-data="{ scrolled: false }" x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 500 })">

    <div class="hero-bg">
        @include('partials.header')

        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-title">Banking Solutions</h1>
                <p class="hero-subtitle">Platform for Banks, NBFCs, Fintech Companies and more</p>
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
        </div>
    </div>

</section>
{{-- REVENUE LEAKAGE INTRO --}}
<section class="bnk-intro-section">
    <div class="bnk-container">
        <div class="nag-section-heading">
            <h2>Traditional Methods Can Lead To <span>Revenue Leakage</span></h2>
            <p>Inefficiencies lead to delays and non-compliance</p>
        </div>

        <div class="bnk-intro-card">
            <div class="bnk-intro-image">
                <img src="{{ asset('images/banking solutions/dummy-mockup.webp') }}" alt="Debt Collection Platform">
            </div>
            <div class="bnk-intro-content">
                <h3>Debt Collection Platform</h3>
                <p>Our Debt Collection Platform is a complete solution, based on technology that helps organise and optimise the entire collections lifecycle. It is made for efficiency, compliance and scalability and empowers the organisations to recover outstanding dues and maintain strong customer relationships. It can be easily integrated through standard web-based APIs with any CRM, CBS or Big Data lake. The platform has evolved over the years, starting from Symbian phones to AI-powered, through actual learning in the field across various domains, as the collection ecosystem has changed over time. The platform also takes care of all regulatory requirements.</p>
                <p>Our solution is ideal for Banks, NBFCs, Fintech Companies, Telecom Providers, Digital Media and any organisation managing high volumes of receivables.</p>
            </div>
        </div>
    </div>
</section>

{{-- PLATFORM HIGHLIGHTS --}}
<section class="bnk-highlights-section">
    <div class="bnk-container">
        <div class="nag-section-heading">
            <h2>Platform <span>Highlights</span></h2>
            <p>Faster collection and easier payments</p>
        </div>

        <div class="bnk-highlights-grid">
            <div class="bnk-highlight-card">
                <div class="bnk-highlight-icon">
                    <img
                        src="{{ asset('images/banking solutions/Intelligent Case Management.svg') }}"
                        alt="">
                </div>
                <h3>Intelligent Case Management</h3>
                <p>Easily track, manage and prioritise accounts with a centralised dashboard. Automate workflows and assign cases based on predefined rules to improve productivity.</p>
            </div>
            <div class="bnk-highlight-card">
                <div class="bnk-highlight-icon">
                    <img
                        src="{{ asset('images/banking solutions/Automated Communication.svg') }}"
                        alt="">
                </div>
                <h3>Automated Communication</h3>
                <p>Engage customers through Multi-Channel Communication, which includes SMS, Email and Voice Reminders. Schedule and Personalise Outreach to Increase Response Rates.</p>
            </div>
            <div class="bnk-highlight-card">
                <div class="bnk-highlight-icon">
                    <img
                        src="{{ asset('images/banking solutions/Real-Time Analytics & Reporting.svg') }}"
                        alt="">
                </div>
                <h3>Real-Time Analytics & Reporting</h3>
                <p>Gain Actionable Insights with Detailed Reports and Performance Dashboards. Monitor Recovery Rates, Agent Productivity and Collection Trends in Real Time.</p>
            </div>
            <div class="bnk-highlight-card">
                <div class="bnk-highlight-icon">
                    <img
                        src="{{ asset('images/banking solutions/Secure and compliant collection processes according to industry needs.svg') }}"
                        alt="">
                </div>
                <h3>Compliance & Security</h3>
                <p>Align with Regulatory Requirements with Built-In Compliance Checks, Audit Trails and Secure Data Handling Protocols.</p>
            </div>
            <div class="bnk-highlight-card">
                <div class="bnk-highlight-icon">
                    <img
                        src="{{ asset('images/banking solutions/Payment Integration.svg') }}"
                        alt="">
                </div>
                <h3>Payment Integration</h3>
                <p>Offer Uninterrupted Payment Options through Integrated Payment Gateways to Make it Easy for Customers to Settle Dues Quickly.</p>
            </div>
            <div class="bnk-highlight-card">
                <div class="bnk-highlight-icon">
                    <img
                        src="{{ asset('images/banking solutions/AI-Powered Insights.svg') }}"
                        alt="">
                </div>
                <h3>AI-Powered Insights</h3>
                <p>Utilise Advanced Analytics and Predictive Models to Prioritise High-Value Accounts and Improve Recovery Strategies.</p>
            </div>
        </div>
    </div>
</section>

{{-- KEY OUTCOMES --}}
<section class="bnk-outcomes-section">
    <div class="bnk-container">
        <div class="nag-section-heading">
            <h2>Key <span>Outcomes</span></h2>
            <p>Simplified processes with low costs</p>
        </div>

        <div class="bnk-outcomes-list">
            <div class="bnk-outcome-item"><span>✓</span> Improved recovery rates through data-driven strategies</div>
            <div class="bnk-outcome-item"><span>✓</span> Reduced operational costs via automation</div>
            <div class="bnk-outcome-item"><span>✓</span> Improved customer experience with personalised engagement</div>
            <div class="bnk-outcome-item"><span>✓</span> Scalable architecture to support business growth</div>
            <div class="bnk-outcome-item"><span>✓</span> Full visibility and control over collection processes</div>
        </div>
    </div>
</section>

{{-- OUR IMPACT --}}
<section class="bnk-impact-section">
    <div class="bnk-container">
        <div class="bnk-impact-grid">
            <div class="bnk-impact-content">
                <h2>Our <span>Impact</span></h2>
                <p class="bnk-impact-subtitle">One platform that solves many challenges</p>
                <p>Our Debt Collection Platform is trusted by a growing network of organisations across financial services, digital media and related industries. We have successfully partnered with Banks, NBFCs, Fintech companies, Service Providers, Telcos, Cable TV and Broadband companies to organise their collections and improve recovery outcomes.</p>
                <p>With a strong focus on performance and reliability, our platform currently supports:</p>
            </div>

            <div class="bnk-impact-points">
                <div class="bnk-impact-point">
                    <div class="bnk-impact-icon">
                        <img
                        src="{{ asset('images/banking solutions/A diverse portfolio of enterprise and mid-sized clients.svg') }}"
                        alt="">
                    </div>
                    <p>A diverse portfolio of enterprise and mid-sized clients</p>
                </div>
                <div class="bnk-impact-point">
                    <div class="bnk-impact-icon">
                        <img
                        src="{{ asset('images/banking solutions/High-volume debt recovery operations across multiple regions.svg') }}"
                        alt="">
                    </div>
                    <p>High-volume debt recovery operations across multiple regions</p>
                </div>
                <div class="bnk-impact-point">
                    <div class="bnk-impact-icon">
                        <img
                        src="{{ asset('images/banking solutions/Secure and compliant collection processes according to industry needs.svg') }}"
                        alt="">
                    </div>
                    <p>Secure and compliant collection processes according to industry needs</p>
                </div>
            </div>
        </div>

        <div class="bnk-impact-note">
            <div class="bnk-impact-icon iconbox">
                        <img
                        src="{{ asset('images/banking solutions/We maintain the highest..svg') }}"
                        alt="">
                    </div>
            <p>We maintain the highest standards of confidentiality and data security so that every client relationship is built on trust and long-term value.</p>
        </div>
    </div>
</section>

<section class="services-bottom-cta">
    <div class="services-bottom-cta-inner">
        <div class="services-cta-content">
            <h2>Upgrade To A <span>Smarter Governance System</span></h2>
            <p>Discuss your project requirements with our team</p>
            <a href="{{ route('contact') }}" class="services-cta-btn">Contact Us <span>↗</span></a>
        </div>
        <div class="services-cta-image">
            <img src="{{ asset('images/nagarkaryawali/CTA nagarkaryavali.png') }}" alt="ASCENTech IT Services">
        </div>
    </div>
</section>

<style>

    /* ===================== BANKING SOLUTIONS CONTENT ===================== */
.bnk-container { width: min(1200px, calc(100% - 48px)); margin: 0 auto; }

.nag-section-heading { text-align: center; margin-bottom: 40px; }
.nag-section-heading h2 { font-family: "Inter Tight", sans-serif; font-size: 40px; font-weight: 700; color: #111; margin-bottom: 8px; }
.nag-section-heading h2 span { color: #2E3192; }
.nag-section-heading p { font-size: 16px; color: #888; margin: 0; }

/* INTRO CARD */
.bnk-intro-section { padding: 40px 0 40px; background: #fff; }
.bnk-intro-card { display: grid; grid-template-columns: 1fr; gap: 0; border: 1px solid #e5e7eb; border-radius: 14px; overflow: hidden; }
@media (min-width: 900px) { .bnk-intro-card { grid-template-columns: 45% 55%; } }
.bnk-intro-image { background: #f7f8fb; display: flex; align-items: center; justify-content: center; padding: 10px; }
.bnk-intro-image img { width: 100%; height: 300px; object-fit: cover; }
.bnk-intro-content { padding: 28px 32px; }
.bnk-intro-content h3 { font-size: 26px; font-weight: 700; color: #111; margin-bottom: 14px; }
.bnk-intro-content p { font-size: 16px; line-height: 1.7; color: #555; margin-bottom: 14px; }

/* HIGHLIGHTS */
.bnk-highlights-section { padding: 50px 0; background: #fff; }
.bnk-highlights-grid { display: grid; grid-template-columns: 1fr; gap: 16px; }
@media (min-width: 700px) { .bnk-highlights-grid { grid-template-columns: 1fr 1fr; } }
@media (min-width: 1000px) { .bnk-highlights-grid { grid-template-columns: repeat(3, 1fr); } }
.bnk-highlight-card { border: 1px solid #e5e7eb; border-radius: 12px; padding: 24px; text-align: center; }
.bnk-highlight-icon { width: 60px; height: 60px; margin: 0 auto 14px; border-radius: 50%; background: #eef0fa; display: flex; align-items: center; justify-content: center; font-size: 22px; }
.bnk-highlight-card h3 { font-size: 18px; font-weight: 700; color: #2E3192; margin-bottom: 10px; }
.bnk-highlight-card p { font-size: 16px; line-height: 1.6; color: #666; margin: 0; }

/* KEY OUTCOMES */
.bnk-outcomes-section { padding: 50px 0; background: #f4f5fa; }
.bnk-outcomes-list { max-width: 450px; margin: 0 auto; display: flex; flex-direction: column; gap: 14px; }
.bnk-outcome-item { font-size: 17px; color: #333; display: flex; gap: 10px; align-items: flex-start; }
.bnk-outcome-item span { color: #2E3192; font-weight: 700; flex-shrink: 0; }

/* IMPACT */
.bnk-impact-section { padding: 60px 0; background: #fff; }
.bnk-impact-grid { display: grid; grid-template-columns: 1fr; gap: 40px; margin-bottom: 32px; }
@media (min-width: 900px) { .bnk-impact-grid { grid-template-columns: 1fr 1fr; } }
.bnk-impact-content h2 { font-family: "Inter Tight", sans-serif; font-size: 40px; font-weight: 700; color: #111; margin-bottom: 4px; }
.bnk-impact-content h2 span { color: #2E3192; }
.bnk-impact-subtitle { font-size: 16px; color: #888; margin-bottom: 16px; }
.bnk-impact-content p { font-size: 16px; line-height: 1.7; color: #555; margin-bottom: 12px; }

.bnk-impact-points { display: flex; flex-direction: column; gap: 20px; justify-content: center; }
.bnk-impact-point { display: flex; align-items: center; gap: 14px; }
.bnk-impact-icon { width: 44px; height: 44px; flex-shrink: 0; border-radius: 50%; background: #eef0fa; display: flex; align-items: center; justify-content: center; font-size: 18px; }
.bnk-impact-point p { font-size: 16px; color: #333; margin: 0; }
.bnk-impact-note { background: #f4f5fa; border-radius: 14px; padding: 24px 32px; text-align: center; }
.bnk-impact-note p { font-size: 14px; color: #555;  margin-top: -35px; line-height: 1.6; }
/* ===================== GLOBAL HELPERS ===================== */
.text-center { text-align: center; }
.mb-12 { margin-bottom: 48px; }

/* ===================== HERO ===================== */
.hero-section { position: relative; }
.hero-bg {
    width: calc(100% - 30px);
    background-image: url('{{ asset('images/banking solutions/Banking Solutions Banner 1200x500 product page.png') }}');
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
   BOTTOM CTA
========================================================= */

.services-bottom-cta {
    margin-top: 60px;
    padding: 40px 24px;
    background: #fff;
}

.services-bottom-cta-inner {
    width: min(1000px, 100%);
    min-height: 200px;
    margin: 0 auto;
    position: relative;
    display: flex;
    align-items: flex-end;
    justify-content: space-between;
    overflow: hidden;
    border-radius: 24px;
    background: linear-gradient(90deg, #2E3192 0%, #2E3192 45%, rgba(46,49,146,0.4) 75%, rgba(46,49,146,0) 100%);
}

/* CTA CONTENT */
.services-cta-content {
    padding: 40px 20px 40px 56px;
    max-width: 820px;
    position: relative;
    z-index: 2;
}

.services-cta-content h2 {
    margin: 0 0 16px;
    font-family: "Inter Tight", sans-serif;
    font-size: 40px;
    line-height: 1.15;
    font-weight: 700;
    color: #fff;
}

.services-cta-content p {
    margin: 0 0 28px;
    font-size: 17px;
    color: #e5e7eb;
}

.services-cta-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 12px 28px;
    border-radius: 999px;
    background: #fff;
    color: #111;
    font-size: 16px;
    text-decoration: none;
    font-weight: 600;
    transition: background 0.2s ease;
}
.services-cta-btn:hover { background: #eee; color: #111; }

/* CTA IMAGE */
.services-cta-image {
    align-self: flex-end;
    width: 38%;
    max-width: 400px;
    display: flex;
    align-items: flex-end;
    justify-content: center;
    position: relative;
    z-index: 1;
}

.services-cta-image img {
    width: 100%;
    height: auto;
    max-height: 340px;
    object-fit: contain;
    object-position: bottom center;
}

@media (max-width: 900px) {
    .services-bottom-cta-inner {
        flex-direction: column;
        min-height: auto;
        padding-bottom: 0;
    }
    .services-cta-content {
        padding: 32px 24px;
        max-width: 100%;
        text-align: left;
    }
    .services-cta-content h2 { font-size: 28px; }
    .services-cta-image {
        width: 60%;
        margin-top: -20px;
    }
}
/* =========================================================
   TABLET
========================================================= */

@media (max-width: 900px) {

    .services-page-container {
        width: calc(100% - 30px);
    }

    .service-content p {
        font-size: 8px;
    }

    .service-content li {
        font-size: 7.5px;
    }

}

</style>

@endsection