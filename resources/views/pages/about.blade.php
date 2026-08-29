@extends('layouts.app')
@section('title', 'About Us')

@section('content')

{{-- HERO --}}
<section class="hero-section" x-data="{ scrolled: false }" x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 500 })">

    <div class="hero-bg">
        @include('partials.header')

        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-title">Urban Corporations To
Global Companies,
We Are There</h1>
                <p class="hero-subtitle">Over a decade, we have turned challenges into solutions
<br>
Trusted by over 16+ Municipal Corporations</p>
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
{{-- =========================================================
     ABOUT US CONTENT
========================================================= --}}

<section class="about-company-section">

    {{-- =====================================================
         COMPANY INTRODUCTION
    ====================================================== --}}
    <div class="about-intro-card">

        <div class="about-intro-content">

            <span class="about-small-label">About ASCENTech</span>

            <h2>
                Redefining The Future Of
                <span>Software Development</span>
            </h2>

            <p>
                Founded in 2016, ASCENTech Information Technology Private Limited
                is a startup company run by industry experts with 25+ years of
                experience. Our expertise lies in turnkey projects and we develop
                customer-centric, scalable and innovative technology platforms.
                Through our focus is on the government sector, we also develop
                projects for the private sector, implemented across India.
            </p>

            <p>
                We have received 3 national-level awards and our products are
                already being utilised by 16+ municipal corporations across
                Maharashtra. We also serve 4 leading private sector companies.
            </p>

            <ul class="about-intro-list">
                <li>
                    <span>✓</span>
                    Pioneer in SaaS-based ERP systems for E-Governance in India
                </li>

                <li>
                    <span>✓</span>
                    Expertise in mobility solutions
                </li>

                <li>
                    <span>✓</span>
                    IT infrastructure and cloud-based solutions
                </li>

                <li>
                    <span>✓</span>
                    Banking and financial technology solutions
                </li>
            </ul>

        </div>


        <div class="about-intro-visual">

            <img
                src="{{ asset('images/about/Future Of Software Development image 1- 800x600.jpg') }}"
                alt="ASCENTech Leadership"
                class="about-main-image"
            >

            <div class="about-client-logos">

                <div class="about-logo-box">
                    <img
                        src="{{ asset('images/nagarkaryawali/Nagarkaryavali Logo 1000x300.png') }}"
                        alt="E-Governance ERP"
                    >
                </div>

                <div class="about-logo-box">
                    <img
                        src="{{ asset('images/about/Banking Solution icon 500x500.svg') }}"
                        alt="Banking Solution"
                    >
                </div>

            </div>

        </div>

    </div>


    {{-- =====================================================
         TECHNOLOGY IMAGES
    ====================================================== --}}
    <div class="about-tech-images">

        <div class="about-tech-image tech-image-large">
            <img
                src="{{ asset('images/about/Future Of Software Development image 2- 800x600.jpg') }}"
                alt="ASCENTech Technology"
            >
        </div>

        <div class="about-tech-image">
            <img
                src="{{ asset('images/about/Future Of Software Development image 3 - 500x300 (1).jpg') }}"
                alt="ASCENTech Technology Team"
            >
        </div>

    </div>


    {{-- =====================================================
         TECHNOLOGICAL STRENGTHS
    ====================================================== --}}
    <div class="about-section-heading">
        <h2>
            Our <span>Technological Strengths</span>
        </h2>

        <p>The key technical areas of ASCENTech</p>
    </div>


    <div class="technology-strengths">

        <div class="strength-card">

            <div class="strength-icon">
                <img
                        src="{{ asset('images/about/Platforms.svg') }}"
                        alt="">
            </div>

            <div>
                <h3>Platforms</h3>

                <p>
                    SaaS, Cloud-Based and Turnkey Solutions.
                </p>
            </div>

        </div>


        <div class="strength-card">

            <div class="strength-icon">
                <img
                        src="{{ asset('images/about/Capabilities.svg') }}"
                        alt="">
            </div>

            <div>
                <h3>Capabilities</h3>

                <p>
                    Real-Time Secure Systems, Third-Party Data Migration
                    and System Integration.
                </p>
            </div>

        </div>


        <div class="strength-card">

            <div class="strength-icon">
                <img
                        src="{{ asset('images/about/Architecture (1).svg') }}"
                        alt="">
            </div>

            <div>
                <h3>Architecture</h3>

                <p>
                    Scalable, Flexible and Robust Technology Frameworks.
                </p>
            </div>

        </div>

    </div>


    {{-- =====================================================
         COMPANY STATS
    ====================================================== --}}
    <div class="about-stats">

        <div class="about-stat">
            <strong>3M+</strong>
            <span>Property Services Handled Last Year</span>
        </div>

        <div class="about-stat">
            <strong>16+</strong>
            <span>Municipal Corporations</span>
        </div>

        <div class="about-stat">
            <strong>30+</strong>
            <span>Software Modules</span>
        </div>

        <div class="about-stat">
            <strong>175+</strong>
            <span>Skilled Employees</span>
        </div>

    </div>


    {{-- =====================================================
         LEADERSHIP
    ====================================================== --}}
    <div class="about-section-heading leadership-heading">

        <h2>Leadership</h2>

        <p>Our pillars of Growth</p>

    </div>


    <div class="leadership-card">

        <div class="leadership-content">

            <p>
                Mr. Ashutosh Samant is a veteran technology strategist having
                more than 25 years of experience in software development and
                E-Governance Software Solution. As a CEO and Managing Director
                he leads ASCENTech's product vision, including the flagship
                Nagarkaryawali platform, widely adopted by major Municipal
                Corporations in Maharashtra.
            </p>

            <p>
                His leadership has helped ASCENTech expand into a comprehensive
                technology solutions provider that delivers services in Data
                Analytics, System Integration, Technical Consultancy, IT
                Infrastructure, Web Development and Hardware Solutions.
            </p>

            <h3>Mr. Ashutosh Samant</h3>
            <span>CEO and Managing Director</span>

        </div>

        <div class="leadership-image">
            <img
                src="{{ asset('images/about/Leadership image Mr. Ashutosh Samant (500x500).jpg') }}"
                alt="CEO and Managing Director"
            >
        </div>

    </div>


    <div class="leadership-card leadership-card-reverse">

        <div class="leadership-image">

            <img
                src="{{ asset('images/about/Mr. Waman Breed Director.jpg') }}"
                alt="COO and Director"
            >

        </div>

        <div class="leadership-content">

            <p>
                Mr. Waman Breed has over 20 years of experience in operations
                and administration and has significantly contributed to the
                growth of ASCENTech. He also has expertise in handling finance
                and operations, his qualities of understanding clients' needs
                helps in providing the right solution.
            </p>

            <h3>Mr. Waman Breed</h3>
            <span>COO and Director</span>

        </div>

    </div>


    {{-- =====================================================
         MANAGEMENT TEAM
    ====================================================== --}}
    <div class="about-section-heading management-heading">

        <h2>
            Our <span>Management Team</span>
        </h2>

        <p>Minds behind ASCENTech</p>

    </div>


    <div class="management-team">

        <div class="management-row management-row-top">

            <div class="team-member">
                <img
                    src="{{ asset('images/about/Mr. Sachin Kakirde.jpg') }}"
                    alt="Mr. Sachin Kakirde"
                >

                <div class="team-member-info">
                    <strong>Mr. Sachin Kakirde</strong>
                    <span>Chief Product Officer</span>
                </div>
            </div>


            <div class="team-member">
                <img
                    src="{{ asset('images/about/Mr. Madhusudan Phadke - COO.jpg') }}"
                    alt="Mr. Madhusudhan Phadke"
                >

                <div class="team-member-info">
                    <strong>Mr. Madhusudhan Phadke</strong>
                    <span>Chief Revenue Officer</span>
                </div>
            </div>

        </div>


        <div class="management-row management-row-bottom">

            <div class="team-member">
                <img
                    src="{{ asset('images/about/Mr. Ashish Potdar.jpg') }}"
                    alt="Mr. Ashish Potdar"
                >

                <div class="team-member-info">
                    <strong>Mr. Ashish Potdar</strong>
                    <span>Head - Projects</span>
                </div>
            </div>


            <div class="team-member">
                <img
                    src="{{ asset('images/about/Mr. Sandeep Bhandarkar.jpg') }}"
                    alt="Mr. Sandip Bhandarkar"
                >

                <div class="team-member-info">
                    <strong>Mr. Sandip Bhandarkar</strong>
                    <span>Project Manager</span>
                </div>
            </div>


            <div class="team-member">
                <img
                    src="{{ asset('images/about/Mr. Pratik Sir.jpg') }}"
                    alt="Mr. Pratik Shaha"
                >

                <div class="team-member-info">
                    <strong>Mr. Pratik Shaha</strong>
                    <span>Project Manager</span>
                </div>
            </div>

        </div>

    </div>


    {{-- =====================================================
         GUIDING PRINCIPLES
    ====================================================== --}}
    <div class="about-section-heading principles-heading">

        <h2>
            Our <span>Guiding Principles</span>
        </h2>

        <p>Innovating today with a focus on tomorrow</p>

    </div>


    <div class="principles-grid">

        <div class="principle-card">

            <div class="principle-content">

                <h3>OUR VISION</h3>

                <p>
                    To deliver simplified, secure, next-generation and
                    cost-effective technology platforms providing comprehensive
                    end-to-end solutions.
                </p>

            </div>

            <img
                src="{{ asset('images/about/our-vision-1.webp') }}"
                alt="Our Vision"
            >

        </div>


        <div class="principle-card">

            <img
                src="{{ asset('images/about/our-mission.webp') }}"
                alt="Our Mission"
            >

            <div class="principle-content">

                <h3>OUR MISSION</h3>

                <p>
                    To provide precise solutions focused on results with
                    integrity, accuracy and timely execution, upholding the
                    highest quality standards.
                </p>

            </div>

        </div>

    </div>


    {{-- =====================================================
         COMPLIANCE
    ====================================================== --}}
    <section class="compliance-section">

        <div class="about-section-heading">

            <h2>Compliance And Standards</h2>

            <p>High security and quality standards</p>

        </div>
     <div class="stats-certs">
            @foreach ($certifications as $cert)
                <img src="{{ asset('images/'.$cert) }}" alt="Certification" class="stats-cert-img">
            @endforeach
        </div>

    </section>


    {{-- =====================================================
         ASSOCIATIONS + EMPANELMENTS
    ====================================================== --}}
    <div class="association-section">

        <div class="association-box">

            <h2>Associations</h2>

            <div class="association-grid">

                <div class="association-logo">
                    <img
                        src="{{ asset('images/about/Nasscom.jpg') }}"
                        alt="NASSCOM"
                    >
                </div>

                <div class="association-logo">
                    <img
                        src="{{ asset('images/about/SME Chamber of India.jpg') }}"
                        alt="SME Chamber of India"
                    >
                </div>

                <div class="association-logo">
                    <img
                        src="{{ asset('images/about/DPIIT Startup India.jpg') }}"
                        alt="DPIIT"
                    >
                </div>

            </div>

        </div>


        <div class="association-box">

            <h2>Empanelments</h2>

            <div class="association-grid">

                <div class="association-logo">
                    <img
                        src="{{ asset('images/about/upyog.png') }}"
                        alt="UPYOG"
                    >
                </div>

                <div class="association-logo">
                    <img
                        src="{{ asset('images/about/Bank Of Maharashtra.png') }}"
                        alt="Bank of Maharashtra"
                    >
                </div>

                <div class="association-logo">
                    <img
                        src="{{ asset('images/about/bank of baroda.png') }}"
                        alt="Bank of Baroda"
                    >
                </div>

                <div class="association-logo">
                    <img
                        src="{{ asset('images/about/HDFC Bank.png') }}"
                        alt="HDFC Bank"
                    >
                </div>

                <div class="association-logo">
                    <img
                        src="{{ asset('images/about/Axis Bank.png') }}"
                        alt="Axis Bank"
                    >
                </div>

            </div>

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
    .stats-certs { display: flex; flex-wrap: wrap; margin-top:70px;justify-content: center; align-items: center; gap: 100px; opacity: 1; }
.stats-cert-img { height: 120px; object-fit: contain; }
/* ===================== GLOBAL HELPERS ===================== */
.text-center { text-align: center; }
.mb-12 { margin-bottom: 48px; }

/* ===================== HERO ===================== */
.hero-section { position: relative; }
.hero-bg {
    width: calc(100% - 30px);
    background-image: url('{{ asset('images/about/About Us Banner 2400x1000 new gradient.png') }}');
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
   ABOUT COMPANY SECTION
========================================================= */

.about-company-section {
    width: 100%;
    padding: 20px 20px 0;
    background: #fff;
    color: #111;
}

.about-company-section * {
    box-sizing: border-box;
}


/* =========================================================
   COMPANY INTRO
========================================================= */

.about-intro-card {
    width: min(1300px, 100%);
    margin: 0 auto 22px;
    padding: 14px 30px 10px 30px ;
    border: 1px solid #dedede;
    border-radius: 7px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
    background: #fff;
}

.about-intro-content {
    padding: 4px 0 0;
}

.about-small-label {
    display: inline-block;
    padding: 3px 7px;
    border-radius: 3px;
    background: #eef2ff;
    color: #2e3192;
    font-size: 17px;
    margin-bottom: 5px;
}

.about-intro-content h2 {
    margin: 0 0 8px;
    font-family: "Inter Tight", sans-serif;
    font-size: 37px;
    line-height: 1.08;
    font-weight: 600;
    color: #111;
}

.about-intro-content h2 span {
    color: #2e3192;
}

.about-intro-content p {
    margin: 0 0 7px;
    font-size: 16px;
    line-height: 1.45;
    color: #333;
}

.about-intro-list {
    list-style: none;
    padding: 0;
    margin: 6px 0 0;
}

.about-intro-list li {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    margin-bottom: 8px;
    font-size: 16px;
    line-height: 1.3;
}

.about-intro-list li span {
    color: #111;
    font-weight: 700;
}


/* =========================================================
   INTRO IMAGE
========================================================= */

.about-intro-visual {
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
}

.about-main-image {
    width: 100%;
    height: 330px;
    object-fit: cover;
    border-radius: 5px;
}

.about-client-logos {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 8px;
    margin-top: 9px;
}

.about-logo-box {
    height: 105px;
    border: 1px dashed #d5d5d5;
    border-radius: 5px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #fff;
    padding: 7px;
}

.about-logo-box img {
    max-width: 90%;
    max-height: 100px;
    object-fit: contain;
}


/* =========================================================
   TECHNOLOGY IMAGES
========================================================= */

.about-tech-images {
    width: min(1000px, 100%);
    margin: 60px auto 18px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 0;
    align-items: center;
}

.about-tech-image {
    height: 320px;
    z-index:10;
    overflow: hidden;
    border-radius: 10px;
    border: 6px solid #ddd;
}

.about-tech-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

.tech-image-large {
    height:360px;
    border: 6px solid #2e3192;
    position: relative;
    z-index: 2;
    width: calc(100% + 45px);
}


/* =========================================================
   SECTION HEADINGS
========================================================= */

.about-section-heading {
    text-align: center;
    margin: 70px auto 13px;
}

.about-section-heading h2 {
    margin: 0;
    font-family: "Inter Tight", sans-serif;
    font-size: 37px;
    line-height: 1.1;
    font-weight: 600;
    color: #111;
}

.about-section-heading h2 span {
    color: #2e3192;
}

.about-section-heading p {
    margin: 3px 0 0;
    color: #777;
    font-size: 16px;
}


/* =========================================================
   TECHNOLOGY STRENGTHS
========================================================= */

.technology-strengths {
    width: min(1200px, 100%);
    margin: 0 auto 42px;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 9px;
}

.strength-card {
    min-height: 100px;
    border: 1px dashed #d5d5d5;
    border-radius: 5px;
    padding: 8px;
    display: flex;
    align-items: center;
    gap: 18px;
    background: linear-gradient(
        135deg,
        #fff 0%,
        #f8f8fb 100%
    );
}

.strength-icon {
    width:70px;
    height: 70px;
    flex: 0 0 30px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 53px;
    color: #555;
}
.strength-icon img{
    width:70px;
    height: 70px;
 object-fit: contain;}

.strength-card h3 {
    margin: 0 0 2px;
    font-size: 20px;
    font-weight: 500;
}

.strength-card p {
    margin: 0;
    font-size: 15px;
    line-height: 1.35;
    color: #555;
}


/* =========================================================
   STATS
========================================================= */

.about-stats {
    width: min(1200px, 100%);
    margin: 0 auto 34px;
    min-height: 134px;
    border-radius: 17px;
    overflow: hidden;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    background: #071a42;
}

.about-stat {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 10px;
    border-right: 1px solid rgba(255,255,255,.7);
}

.about-stat:last-child {
    border-right: 0;
}

.about-stat strong {
    color: #fff;
    font-size: 41px;
    line-height: 1;
    font-weight: 700;
    margin-bottom: 6px;
}

.about-stat span {
    color: #fff;
    font-size: 16px;
    line-height: 1.25;
}


/* =========================================================
   LEADERSHIP
========================================================= */

.leadership-heading {
    margin-top: 68px;
    margin-bottom: 14px;
}

.leadership-card {
    width: min(1200px, 100%);
    min-height:auto;
    margin: 0 auto 10px;
    padding: 12px;
    border: 1px solid #dedede;
    border-radius: 7px;
    display: grid;
    grid-template-columns: 1fr 300px;
    gap: 15px;
    align-items: center;
}

.leadership-card-reverse {
    grid-template-columns: 300px 1fr;
}

.leadership-content {
    padding: 0 5px;
}

.leadership-content p {
    margin: 0 0 6px;
    font-size: 16px;
    line-height: 1.4;
    color: #333;
}

.leadership-content h3 {
    margin: 0px 0 0;
    font-size: 25px;
    font-weight: 600;
    color: #111;
}

.leadership-content > span {
    font-size: 15px;
    color: #777;
}

.leadership-image {
    height: 300px;
    overflow: hidden;
}

.leadership-image img {
    width: 300px;
    height: 300px;
    border-radius:10px;
    object-fit: contain;
    display: block;
}


/* =========================================================
   MANAGEMENT
========================================================= */

.management-heading {
    margin-top: 20px;
    margin-bottom: 15px;
}

.management-team {
    width: min(1300px, 100%);
    margin: 0 auto 42px;
}

.management-row {
    display: flex;
    justify-content: center;
    gap: 10px;
}

.management-row-bottom {
    margin-top: 12px;
}

.team-member {
    width: 300px;
    height: 300px;
    position: relative;
    border-radius: 7px;
    overflow: hidden;
    background: #eaf0ff;
}

.team-member img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

.team-member-info {
    position: absolute;
    bottom: 5px;
    left: 5px;
    right: 5px;
    min-height: 27px;
    border-radius: 6px;
    background: rgba(255,255,255,.96);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding: 3px;
}

.team-member-info strong {
    font-size: 17px;
    line-height: 1.1;
}

.team-member-info span {
    font-size: 15px;
    color: #777;
    margin-top: 2px;
}


/* =========================================================
   GUIDING PRINCIPLES
========================================================= */

.principles-heading {
    margin-top: 64px;
    margin-bottom: 12px;
}

.principles-grid {
    width: min(850px, 100%);
    margin: 0 auto 25px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 15px;
}

.principle-card {
    min-height: 270px;
    border: 1px solid #dedede;
    border-radius: 25px;
    overflow: hidden;
    background: #f8f8f8;
    display: flex;
    flex-direction: column;
}

.principle-content {
    flex: 1;
    padding: 13px 18px;
}

.principle-content h3 {
    margin: 0 0 9px;
    text-align: center;
    font-size: 18px;
    font-weight: 600;
}

.principle-content p {
    margin: 0;
    font-size: 16px;
    line-height: 1.5;
    color: #333;
}

.principle-card img {
    width: 100%;
    height: 130px;
    object-fit: cover;
    display: block;
}


/* =========================================================
   COMPLIANCE
========================================================= */

.compliance-section {
    width: calc(100% + 40px);
    margin-left: -20px;
    margin-top:70px;
    padding: 20px 20px 25px;
    background: #fafafa;
}

.compliance-section .about-section-heading {
    margin-bottom: -50px;
}

.certifications {
    display: flex;
    
    justify-content: center;
    align-items: center;
    gap: 30px;
}

.certificate {
    width: 62px;
    height: 62px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.certificate img {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
}


/* =========================================================
   ASSOCIATIONS / EMPANELMENTS
========================================================= */

.association-section {
    width: min(1000px, 100%);
    margin: 72px auto 0;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 10px;
}

.association-box {
    min-height: 300px;
    border: 1px solid #ddd;
    border-radius: 7px;
    padding: 10px 8px;
    background: #fff;
}

.association-box h2 {
    margin: 0 0 9px;
    text-align: center;
    font-size: 25px;
    font-weight: 500;
}

.association-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 8px;
}

.association-logo {
    height: 80px;
    border: 1px solid #e4e4e4;
    border-radius: 4px;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 5px 10px;
}

.association-logo img {
    max-width: 100%;
    max-height: 80px;
    padding:10px;
    object-fit: contain;
}


/* =========================================================
   TABLET
========================================================= */

@media (max-width: 900px) {

    .about-company-section {
        padding-left: 15px;
        padding-right: 15px;
    }

    .about-intro-card {
        grid-template-columns: 1fr;
    }

    .about-intro-visual {
        order: -1;
    }

    .about-main-image {
        height: 250px;
    }

    .about-tech-images {
        grid-template-columns: 1fr;
    }

    .tech-image-large {
        width: 100%;
    }

    .technology-strengths {
        grid-template-columns: 1fr;
    }

    .about-stats {
        grid-template-columns: repeat(2, 1fr);
    }

    .about-stat:nth-child(2) {
        border-right: 0;
    }

    .about-stat:nth-child(-n+2) {
        border-bottom: 1px solid rgba(255,255,255,.7);
    }

    .leadership-card,
    .leadership-card-reverse {
        grid-template-columns: 1fr;
    }

    .leadership-image {
        order: -1;
        height: 240px;
    }

    .principles-grid {
        grid-template-columns: 1fr;
    }

    .association-section {
        grid-template-columns: 1fr;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 600px) {

    .about-intro-content h2 {
        font-size: 27px;
    }

    .about-main-image {
        height: 220px;
    }

    .about-tech-image {
        height: 190px;
    }

    .about-section-heading h2 {
        font-size: 24px;
    }

    .about-stats {
        border-radius: 12px;
    }

    .about-stat {
        min-height: 85px;
    }

    .about-stat strong {
        font-size: 22px;
    }

    .management-row {
        flex-wrap: wrap;
    }

    .management-row-bottom {
        margin-top: 10px;
    }

    .team-member {
        width: calc(50% - 5px);
        height: 190px;
    }

    .management-row-bottom .team-member {
        width: calc(50% - 5px);
    }

    .management-row-bottom .team-member:last-child {
        width: 50%;
    }

    .certifications {
        gap: 15px;
        flex-wrap: wrap;
    }

    .certificate {
        width: 65px;
        height: 65px;
    }

    .association-grid {
        grid-template-columns: 1fr 1fr;
    }

}


/* =========================================================
   VERY SMALL MOBILE
========================================================= */

@media (max-width: 420px) {

    .team-member,
    .management-row-bottom .team-member,
    .management-row-bottom .team-member:last-child {
        width: 100%;
    }

    .about-stats {
        grid-template-columns: 1fr 1fr;
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