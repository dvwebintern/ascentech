@extends('layouts.app')

@section('title', 'Services')

@section('content')

{{-- HERO --}}

<section class="hero-section"
    x-data="{ scrolled: false }"
    x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 500 })">

    <div class="hero-bg">

        @include('partials.header')

        <div class="hero-content">

            <div class="hero-text">

                <h1 class="hero-title">Experts In IT Services And E-Governance
</h1>

                <p class="hero-subtitle">
Services that make everything manageable together
                </p>



            </div>

            <div class="hero-graphic">

                <img
                    src="{{ asset('images/services/graphic 1000x1000 blue.png') }}"
                    alt=""
                    class="hero-graphic-img">

            </div>

        </div>

    </div>

    {{-- Floating nav + CTA row --}}

    <div class="hero-float-row"
        x-show="!scrolled"
        x-transition.opacity>

        <div class="hero-float-inner">

            <div class="hero-float-nav">

                @include('partials.nav-links')

            </div>

            <div class="hero-float-buttons">

                <a href="{{ route('products.nagarkaryavali') }}"
                    class="btn btn-accent">
                    View Products
                </a>

                <a href="{{ route('contact') }}"
                    class="btn btn-outline-white">
                    Contact us →
                </a>

            </div>

        </div>

    </div>

    {{-- Sticky cloned bar on scroll --}}

    <div class="hero-sticky-bar"
        x-show="scrolled"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 -translate-y-4"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-cloak>

        <div class="hero-sticky-inner">

            <a href="{{ route('home') }}">

                <img
                    src="{{ asset('images/logo.svg') }}"
                    alt="ASCENTech"
                    class="hero-sticky-logo">

            </a>

            <div class="hero-sticky-nav">

                @include('partials.nav-links')

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     SERVICES PAGE CONTENT
     Place this AFTER your existing HERO section
========================================================= --}}

{{-- =========================================================
     SERVICES WE PROVIDE
========================================================= --}}

<section class="services-page-section">

    <div class="services-page-container">

        <div class="services-page-heading">

            <h2>Services <span style="color:#11199b;">We Provide</span></h2>

            <p>Best fit for Urban Local Bodies and businesses</p>

        </div>


        <div class="services-list">


            {{-- =================================================
                 SERVICE 1
            ================================================== --}}

            <div class="service-row">

                <div class="service-image">

                    <img
                        src="{{ asset('images/AI-Solutions.webp') }}"
                        alt="AI Solutions">

                </div>

                <div class="service-content">

                    <h3>AI Solutions</h3>

                    <p>
                        ASCENTech delivers advanced AI solutions designed to
                        automate processes, enhance decision-making and drive
                        business efficiency. From intelligent data analysis
                        and machine learning models to AI-powered chatbots
                        and predictive systems, AI solutions are built for
                        seamless integration with existing infrastructure.
                    </p>

                    <ul>

                        <li>Smart, data-driven solutions</li>
                        <li>Real-time data synchronization</li>
                        <li>Deep integration and tracking</li>
                        <li>AI-powered automation</li>
                        <li>Support for vast data storage</li>

                    </ul>

                    <a href="#" class="service-enquire-btn">
                        Enquire Now <span>›</span>
                    </a>

                </div>

            </div>


            {{-- =================================================
                 SERVICE 2
            ================================================== --}}

            <div class="service-row service-row-reverse">

                <div class="service-image">

                    <img
                        src="{{ asset('images/Software-Development.webp') }}"
                        alt="Software Development">

                </div>

                <div class="service-content">

                    <h3>Software Development</h3>

                    <p>
                        Comprehensive ERP solutions for Urban Local Bodies
                        (ULBs). ERP solutions improve day-to-day digital
                        operations and streamline organisational workflows.
                    </p>

                    <ul>

                        <li>Single integrated solution</li>
                        <li>Tech-savvy system architecture</li>
                        <li>Cloud-based applications</li>
                        <li>Ongoing maintenance & support</li>

                    </ul>

                    <a href="#" class="service-enquire-btn">
                        Enquire Now <span>›</span>
                    </a>

                </div>

            </div>


            {{-- =================================================
                 SERVICE 3
            ================================================== --}}

            <div class="service-row">

                <div class="service-image">

                    <img
                        src="{{ asset('images/services/Data Analyst.jpg') }}"
                        alt="Data Analysis">

                </div>

                <div class="service-content">

                    <h3>Data Analysis</h3>

                    <p>
                        Regardless of size, big or little, the important
                        information gets collected and often becomes confusing.
                        With our professional data analytics service, we
                        accurately analyse key information with reports from
                        the past up to determine what to do next.
                    </p>

                    <ul>

                        <li>Make informed decisions</li>
                        <li>Provide a better experience to the users</li>
                        <li>Get detailed reports</li>
                        <li>Get supported with forecasting</li>
                        <li>Control the government expenses</li>

                    </ul>

                    <a href="#" class="service-enquire-btn">
                        Enquire Now <span>›</span>
                    </a>

                </div>

            </div>


            {{-- =================================================
                 SERVICE 4
            ================================================== --}}

            <div class="service-row service-row-reverse">

                <div class="service-image">

                    <img
                        src="{{ asset('images/Technical-Consultancy.webp') }}"
                        alt="Technical Consultancy">

                </div>

                <div class="service-content">

                    <h3>Technical Consultancy</h3>

                    <p>
                        Technological advancements benefit, but only when
                        handled carefully. At ASCENTech, technical consultation
                        is about understanding your current digital maturity,
                        identifying system vulnerabilities, improving your
                        cybersecurity and helping you with compliance.
                    </p>

                    <ul>

                        <li>Advanced cybersecurity solutions</li>
                        <li>Help with simplifying legacy audits</li>
                        <li>Assistance in upgrading applications</li>
                        <li>
                            Guidance on integrating multiple management systems
                        </li>
                        <li>Solutions to reduce infrastructure costs</li>

                    </ul>

                    <a href="#" class="service-enquire-btn">
                        Enquire Now <span>›</span>
                    </a>

                </div>

            </div>


            {{-- =================================================
                 SERVICE 5
            ================================================== --}}

            <div class="service-row">

                <div class="service-image">

                    <img
                        src="{{ asset('images/System-Integration-2.webp') }}"
                        alt="System Integration">

                </div>

                <div class="service-content">

                    <h3>System Integration</h3>

                    <p>
                        An E-Governance system has to overcome location,
                        working, HR and employee records, citizen complaints
                        and more. With our system integration service, you get
                        streamlined access, mobile applications and complete
                        integration.
                    </p>

                    <ul>

                        <li>Operational costs become predictable</li>
                        <li>Get immediate access to important business data</li>
                        <li>Manage integrations easily</li>
                        <li>Trace data in real-time</li>
                        <li>New data sources can be added easily</li>

                    </ul>

                    <a href="#" class="service-enquire-btn">
                        Enquire Now <span>›</span>
                    </a>

                </div>

            </div>


            {{-- =================================================
                 SERVICE 6
            ================================================== --}}

            <div class="service-row service-row-reverse">

                <div class="service-image">

                    <img
                        src="{{ asset('images/services/Web Development.jpg') }}"
                        alt="Web Development">

                </div>

                <div class="service-content">

                    <h3>Web Development</h3>

                    <p>
                        A website works as a modern business card. It helps
                        clients conduct research about an organisation.
                        Our web development services create user-friendly
                        websites that help businesses grow.
                    </p>

                    <ul>

                        <li>Highly secured and simplified systems</li>
                        <li>Timely enhancements</li>
                        <li>Custom features according to requirements</li>
                        <li>Focus on scalability</li>
                        <li>Citizen-centric platforms</li>

                    </ul>

                    <a href="#" class="service-enquire-btn">
                        Enquire Now <span>›</span>
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     TRUSTED PARTNER
========================================================= --}}

<section class="trusted-partner-section">

    <div class="trusted-partner-container">

        <div class="trusted-heading">

            <h2>
                Your Trusted Partner for
                <span>IT Solutions</span>
            </h2>

            <p>
                Combining experience and compliance
            </p>

        </div>


        <div class="trusted-features">

            <div class="trusted-feature">

                <div class="trusted-icon">

                    <img
                        src="{{ asset('images/services/Consultation by experts.svg') }}"
                        alt="">

                </div>

                <div>

                    <h3>Consultation by</h3>

                    <p>experts</p>

                </div>

            </div>


            <div class="trusted-feature">

                <div class="trusted-icon">

                    <img
                        src="{{ asset('images/services/End-to-end solutions.svg') }}"
                        alt="">

                </div>

                <div>

                    <h3>End-to-end</h3>

                    <p>solutions</p>

                </div>

            </div>


            <div class="trusted-feature">

                <div class="trusted-icon">

                    <img
                        src="{{ asset('images/services/Cost-effective implementation.svg') }}"
                        alt="">

                </div>

                <div>

                    <h3>Cost-effective</h3>

                    <p>implementation</p>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     FAQ
========================================================= --}}

<section class="services-faq-section">

    <div class="services-faq-container">

        <div class="services-faq-heading">

            <h2>FAQs</h2>

        </div>


        <div class="services-faq-list" x-data="{ open: null }">


            <div class="service-faq-item">

                <button
                    type="button"
                    class="service-faq-question"
                    @click="open = open === 1 ? null : 1">

                    <span>What is the ERP?</span>

                    <span
                        class="faq-plus"
                        :class="{ 'faq-open': open === 1 }">
                        +
                    </span>

                </button>

                <div
                    class="service-faq-answer"
                    x-show="open === 1"
                    x-collapse>

                    <p>
                        ERP is an integrated system that helps organisations
                        manage and streamline their business operations,
                        data and processes through a single platform.
                    </p>

                </div>

            </div>


            <div class="service-faq-item">

                <button
                    type="button"
                    class="service-faq-question"
                    @click="open = open === 2 ? null : 2">

                    <span>
                        What are the benefits of the ERP system?
                    </span>

                    <span
                        class="faq-plus"
                        :class="{ 'faq-open': open === 2 }">
                        +
                    </span>

                </button>

                <div
                    class="service-faq-answer"
                    x-show="open === 2"
                    x-collapse>

                    <p>
                        ERP systems help improve efficiency, centralise
                        information, simplify workflows, improve reporting
                        and support better decision-making.
                    </p>

                </div>

            </div>


            <div class="service-faq-item">

                <button
                    type="button"
                    class="service-faq-question"
                    @click="open = open === 3 ? null : 3">

                    <span>
                        Is the ERP system customisable for different industries?
                    </span>

                    <span
                        class="faq-plus"
                        :class="{ 'faq-open': open === 3 }">
                        +
                    </span>

                </button>

                <div
                    class="service-faq-answer"
                    x-show="open === 3"
                    x-collapse>

                    <p>
                        Yes. ERP solutions can be configured according to
                        the specific workflows, requirements and processes
                        of different organisations.
                    </p>

                </div>

            </div>


            <div class="service-faq-item">

                <button
                    type="button"
                    class="service-faq-question"
                    @click="open = open === 4 ? null : 4">

                    <span>
                        Can the ERP system integrate with existing software?
                    </span>

                    <span
                        class="faq-plus"
                        :class="{ 'faq-open': open === 4 }">
                        +
                    </span>

                </button>

                <div
                    class="service-faq-answer"
                    x-show="open === 4"
                    x-collapse>

                    <p>
                        Yes. ERP systems can integrate with existing
                        applications and databases to create a connected
                        technology ecosystem.
                    </p>

                </div>

            </div>


            <div class="service-faq-item">

                <button
                    type="button"
                    class="service-faq-question"
                    @click="open = open === 5 ? null : 5">

                    <span>
                        Is cloud-based ERP secure?
                    </span>

                    <span
                        class="faq-plus"
                        :class="{ 'faq-open': open === 5 }">
                        +
                    </span>

                </button>

                <div
                    class="service-faq-answer"
                    x-show="open === 5"
                    x-collapse>

                    <p>
                        Cloud-based ERP can provide strong security through
                        access controls, authentication, backups and
                        continuous monitoring when implemented correctly.
                    </p>

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

/* ===================== GLOBAL HELPERS ===================== */

.text-center {
    text-align: center;
}

.mb-12 {
    margin-bottom: 48px;
}


/* ===================== HERO ===================== */

.hero-section {
    position: relative;
}

.hero-bg {
    width: calc(100% - 30px);
    background-image: url('{{ asset('images/services/Services Page Banner 1200x500px.png') }}');
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
    margin-top:-60px;
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
    margin-bottom: 0px;
    max-width: 550px;
}

.hero-trust {
    font-size: 18px;
    color: #e5e7eb;
    margin-bottom: 40px;
    max-width: 750px;
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

.btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 9px 26px;
    border-radius: 999px;
    font-size: 17px;
    font-weight: 500;
    text-decoration: none;
    transition: background 0.2s ease, color 0.2s ease;
    white-space: nowrap;
}

.btn-accent {
    background: #1990c9;
    color: #fff;
}

.btn-accent:hover {
    background: #1990c9;
}

.btn-outline-white {
    border: 1px solid #fff;
    color: #fff;
}

.btn-outline-white:hover {
    background: rgba(255,255,255,0.1);
}

.btn-outline-primary {
    border: 1px solid #2E3192;
    color: #2E3192;
}

.btn-outline-primary:hover {
    background: #f3f4f6;
}

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
    box-shadow: 0 10px 25px rgba(0,0,0,0.15);
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

.hero-sticky-buttons {
    display: flex;
    align-items: center;
    gap: 12px;
}

.hero-sticky-call {
    display: none;
}

@media (min-width: 1024px) {

    .hero-sticky-nav {
        display: block;
    }

}

@media (min-width: 1280px) {

    .hero-sticky-call {
        display: inline-flex;
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

}


/* =========================================================
   SERVICES PAGE
========================================================= */

.services-page-section {
    padding: 45px 0 25px;
    background: #fff;
}

.services-page-container {
    width: min(1200px, calc(100% - 40px));
    margin: 0 auto;
}


/* =========================================================
   HEADING
========================================================= */

.services-page-heading {
    text-align: center;
    margin-bottom: 20px;
}

.services-page-heading h2 {
    margin: 0;
    font-family: "Inter Tight", sans-serif;
    font-size: 40px;
    line-height: 1.1;
    font-weight: 600;
    color: #111;
}

.services-page-heading p {
    margin: 3px 0 0;
    font-size: 16px;
    color: #777;
}


/* =========================================================
   SERVICES LIST
========================================================= */

.services-list {
    display: flex;
    flex-direction: column;
    gap: 8px;
}


/* =========================================================
   SERVICE ROW
========================================================= */

.service-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    min-height: 145px;
    border: 1px solid #dedede;
    margin-bottom:20px;
    border-radius: 15px;
    padding:15px;
    overflow: hidden;
    background: #fff;
}


/* IMAGE */

.service-image {
    min-height: 145px;
    overflow: hidden;
}

.service-image img {
    width: 100%;
    height: 420px;
    display: block;
    object-fit: cover;
    border-radius:10px;
    transition: transform .3s ease;
}

.service-row:hover .service-image img {
    transform: scale(1.025);
    border-radius:10px;
}


/* ALTERNATING */

.service-row-reverse .service-image {
    order: 2;
}

.service-row-reverse .service-content {
    order: 1;
}


/* =========================================================
   SERVICE CONTENT
========================================================= */

.service-content {
    padding: 9px 30px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.service-content h3 {
    margin: 0 0 5px;
    font-family: "Inter Tight", sans-serif;
    font-size: 28px;
    line-height: 1.15;
    font-weight: 600;
    color: #111;
}

.service-content p {
    margin: 0 0 12px;
    font-size: 16px;
    line-height: 1.35;
    color: #303030;
}

.service-content ul {
    margin: 0 0 4px;
    padding-left: 11px;
    list-style-type:dot;
}

.service-content li {
    margin-bottom: 11px;
    font-size: 16px;
    line-height: 1.25;
    color: #222;
}


/* =========================================================
   ENQUIRE BUTTON
========================================================= */

.service-enquire-btn {
    display: inline-flex;
    align-items: center;
    gap: 3px;
    width: fit-content;
    padding: 8px 20px;
    border: 1px solid #1717a0;
    border-radius: 30px;
    color: #1717a0;
    background: #fff;
    font-size: 16px;
    line-height: 1;
    text-decoration: none;
    transition: all .2s ease;
}

.service-enquire-btn span {
    font-size: 20px;
}

.service-enquire-btn:hover {
    background: #1717a0;
    color: #fff;
}


/* =========================================================
   TRUSTED PARTNER
========================================================= */

.trusted-partner-section {
    padding: 30px 0 25px;
    background: #fff;
}

.trusted-partner-container {
    width: min(850px, calc(100% - 40px));
    margin: 0 auto;
}

.trusted-heading {
    text-align: center;
    margin-bottom: 15px;
}

.trusted-heading h2 {
    margin: 0;
    font-family: "Inter Tight", sans-serif;
    font-size: 40px;
    font-weight: 600;
    color: #111;
}

.trusted-heading h2 span {
    color: #080c91;
}

.trusted-heading p {
    margin: 2px 0 0;
    font-size: 16px;
    color: #777;
}


/* FEATURES */

.trusted-features {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
}

.trusted-feature {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    min-height: 55px;
    border-right: 1px solid #ddd;
}

.trusted-feature:last-child {
    border-right: 0;
}

.trusted-icon {
    width: 60px;
    height: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.trusted-icon img {
    width: 60px;
    height: 60px;
    object-fit: contain;
}

.trusted-feature h3 {
    margin: 0;
    font-size: 18px;
    line-height: 1.2;
    font-weight: 400;
    color: #222;
}

.trusted-feature p {
    margin: 2px 0 0;
    font-size: 18px;
    line-height: 1;
    color: #333;
}


/* =========================================================
   FAQ
========================================================= */

.services-faq-section {
    padding: 20px 0 35px;
    background: #fff;
}

.services-faq-container {
    width: min(950px, calc(100% - 40px));
    margin: 0 auto;
}

.services-faq-heading {
    text-align: center;
    margin-bottom: 15px;
}

.services-faq-heading h2 {
    margin: 0;
    font-family: "Inter Tight", sans-serif;
    font-size: 40px;
    font-weight: 600;
    color: #111;
}


/* FAQ ITEM */

.service-faq-item {
    border-bottom: 1px solid #e7e7e7;
}

.service-faq-question {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 12px 4px;
    border: 0;
    background: transparent;
    cursor: pointer;
    text-align: left;
    font-family: inherit;
    font-size: 17px;
    color: #111;
}

.faq-plus {
    font-size: 16px;
    color: #999;
    transition: transform .2s ease;
}

.faq-open {
    transform: rotate(45deg);
}

.service-faq-answer {
    padding: 0 4px 9px;
}

.service-faq-answer p {
    margin: 0;
    max-width: 850px;
    font-size: 16px;
    line-height: 1.5;
    color: #555;
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


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 650px) {

    .services-page-section {
        padding-top: 40px;
    }

    .services-page-heading h2 {
        font-size: 28px;
    }


    /* STACK SERVICES */

    .service-row,
    .service-row-reverse {
        grid-template-columns: 1fr;
    }

    .service-row-reverse .service-image {
        order: 1;
    }

    .service-row-reverse .service-content {
        order: 2;
    }

    .service-image {
        min-height: 190px;
        height: 190px;
    }

    .service-content {
        padding: 16px;
    }

    .service-content h3 {
        font-size: 19px;
    }

    .service-content p {
        font-size: 12px;
        line-height: 1.5;
    }

    .service-content li {
        font-size: 11px;
        line-height: 1.4;
    }

    .service-enquire-btn {
        padding: 6px 12px;
        font-size: 11px;
    }


    /* TRUST */

    .trusted-features {
        grid-template-columns: 1fr;
        gap: 10px;
    }

    .trusted-feature {
        border-right: 0;
        border-bottom: 1px solid #ddd;
        padding: 10px;
    }

    .trusted-feature:last-child {
        border-bottom: 0;
    }


    /* FAQ */

    .service-faq-question {
        font-size: 11px;
        padding: 14px 3px;
    }

    .service-faq-answer p {
        font-size: 11px;
    }


    /* CTA */

    .services-bottom-cta-inner {
        width: calc(100% - 30px);
        min-height: 150px;
    }

    .services-cta-content {
        padding-left: 18px;
    }

    .services-cta-content h2 {
        font-size: 20px;
    }

    .services-cta-image {
        width: 43%;
    }

}

</style>

@endsection