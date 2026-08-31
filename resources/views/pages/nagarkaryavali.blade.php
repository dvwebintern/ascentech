@extends('layouts.app')
@section('title', 'Nagarkaryawali')

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
        
            <div class="hero-graphic">
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
     NAGARKARYAVALI PAGE CONTENT
     Place this AFTER YOUR EXISTING HERO
========================================================= --}}


{{-- =========================================================
     SECTION 1
     HOW DELAYS AFFECT OPERATIONS IN ULBs
========================================================= --}}

<section class="nag-intro-section">

    <div class="nag-container">

        <div class="nag-intro-heading">

            <div class="nag-intro-brand">
                <img
                    src="{{ asset('images/nagarkaryawali/Nagarkaryavali Logo 1000x300.png') }}"
                    alt="Nagarkaryavali">
            </div>

            <h2>
                How <span>Delays </span>Affect Operations in ULBs
            </h2>

        </div>


        <div class="nag-intro-card">

            <div class="nag-intro-image">
                <img
                    src="{{ asset('images/nagarkaryawali/erp(1).png') }}"
                    alt="Enterprise Resource Planning for Urban Local Bodies">
            </div>


            <div class="nag-intro-content">

                <h3>
                    Enterprise Resource Planning (ERP)
                    <span>For Urban Local Bodies</span>
                </h3>

                <p>
                    An Enterprise Resource Planning (ERP) system is a unified
                    technology platform that enables organisations to efficiently
                    manage, automate and integrate their core business processes.
                    By bringing all departments and functions together into a
                    single, centralised system, ERP improves operational efficiency,
                    improves data accuracy and supports informed decision-making.
                </p>

                <p>
                    Nagarkaryavali is ASCENTech's comprehensive ERP solution,
                    purpose-built for Urban Local Bodies (ULBs). The platform
                    comprises 30+ fully integrated modules designed to digitise
                    and streamline municipal administration, service delivery
                    and citizen engagement.
                </p>

                <p>
                    Each module can be independently deployed and is interoperable
                    with departmental requirements or deployed as part of a fully
                    integrated ERP ecosystem. This ensures seamless data flow,
                    enhanced collaboration and improved governance across the
                    organisation.
                </p>

                <p>
                    With its scalable architecture, user-friendly interface and
                    robust security, Nagarkaryavali empowers municipalities to
                    improve operational efficiency, deliver transparent citizen
                    services and achieve better digital governance outcomes.
                </p>

            </div>

        </div>

    </div>

</section>



{{-- =========================================================
     SECTION 2
     CHALLENGES
========================================================= --}}

<section class="nag-challenges-section">

    <div class="nag-container">

        <div class="nag-section-heading">

            <h2>
                Challenges In The <span>Traditional Systems</span>
            </h2>

            <p>
                Which impact the system's efficient
            </p>

        </div>


        <div class="nag-challenges-grid">

            {{-- CARD 1 --}}

            <div class="nag-challenge-card">

                <div class="nag-challenge-icon">
                    <img
                        src="{{ asset('images/nagarkaryawali/Slow Decisions.svg') }}"
                        alt="">
                </div>

                <h3>Slow Decisions</h3>

                <p>
                    Absence of real-time data can lead to
                    inefficient and slow decision-making.
                </p>

            </div>


            {{-- CARD 2 --}}

            <div class="nag-challenge-card">

                <div class="nag-challenge-icon">
                    <img
                        src="{{ asset('images/nagarkaryawali/Lack Of Data Visibility.svg') }}"
                        alt="">
                </div>

                <h3>Lack Of Data Visibility</h3>

                <p>
                    Fragmented and scattered data causes
                    delays and affects the decision process.
                </p>

            </div>


            {{-- CARD 3 --}}

            <div class="nag-challenge-card">

                <div class="nag-challenge-icon">
                    <img
                        src="{{ asset('images/nagarkaryawali/Human Dependency.svg') }}"
                        alt="">
                </div>

                <h3>Human Dependency</h3>

                <p>
                    Manual processes can cause delays,
                    inconsistencies and dependency.
                </p>

            </div>


            {{-- CARD 4 --}}

            <div class="nag-challenge-card">

                <div class="nag-challenge-icon">
                    <img
                        src="{{ asset('images/nagarkaryawali/Infrastructure Costs.svg') }}"
                        alt="">
                </div>

                <h3>Infrastructure Costs</h3>

                <p>
                    Outdated systems and infrastructure
                    can result in significant costs.
                </p>

            </div>

        </div>

    </div>

</section>



{{-- =========================================================
     SECTION 3
     INTRODUCING NAGARKARYAVALI
========================================================= --}}

<section class="nag-introducing-section">

    <div class="nag-container">

        <div class="nag-introducing-heading">

            <span>Introducing</span>

            <img
                    src="{{ asset('images/nagarkaryawali/Nagarkaryavali Logo 1000x300.png') }}"
                alt="Nagarkaryavali">

            <p>
                Advanced Cloud ERP for Urban Local Bodies
            </p>

        </div>


        <div class="nag-introducing-grid">

            <div class="nag-feature-box">

                <h3>Online Solutions</h3>

                <p>
                    Handling all revenue-related processes
                    for better revenue collection.
                </p>

            </div>


            <div class="nag-feature-box">

                <h3>Mobile-Based Dashboards</h3>

                <p>
                    Don't wait for printed reports. Make quick
                    decisions with mobile-based dashboards.
                </p>

            </div>


            <div class="nag-feature-box">

                <h3>Tax Collection On-Field With A Spot Receipt</h3>

                <p>
                    Reduce delays and errors with easy tax
                    collection and instant receipt generation.
                </p>

            </div>


            <div class="nag-feature-box">

                <h3>AI-Enabled Features</h3>

                <p>
                    AI-powered capabilities provide actionable
                    data for faster decisions, better performance
                    and productivity.
                </p>

            </div>

        </div>

    </div>

</section>



{{-- =========================================================
     SECTION 4
     VISUAL PREVIEW
========================================================= --}}

<section class="nag-preview-section">

    <div class="nag-container">

        <div class="nag-section-heading">

            <h2>
                Visual Preview On<span> Different Screens</span>
            </h2>

            <p>
                Consistent performance across various devices
            </p>

        </div>


        <div class="nag-preview-grid">

            <div class="nag-preview-image">
                <img
                    src="{{ asset('images/nagarkaryawali/Water (1).jpg') }}"
                    alt="Nagarkaryavali dashboard">
            </div>

            <div class="nag-preview-image">
                <img
                    src="{{ asset('images/nagarkaryawali/property.jpg') }}"
                    alt="Nagarkaryavali dashboard">
            </div>

            <div class="nag-preview-image">
                <img
                    src="{{ asset('images/nagarkaryawali/Inward Outward.jpg') }}"
                    alt="Nagarkaryavali dashboard">
            </div>

            <div class="nag-preview-image">
                <img
                    src="{{ asset('images/nagarkaryawali/Fire (1).jpg') }}"
                    alt="Nagarkaryavali dashboard">
            </div>

            <div class="nag-preview-image">
                <img
                    src="{{ asset('images/nagarkaryawali/CRM (1).jpg') }}"
                    alt="Nagarkaryavali dashboard">
            </div>

            <div class="nag-preview-image">
                <img
                    src="{{ asset('images/nagarkaryawali/Accounts.jpg') }}"
                    alt="Nagarkaryavali dashboard">
            </div>

        </div>

    </div>

</section>



{{-- =========================================================
     SECTION 5
     END TO END SOLUTION
========================================================= --}}

<section class="nag-end-section">

    <div class="nag-container">

        <div class="nag-section-heading">

            <h2>
                End-To-End Solution For
                <span>Better Operations</span>
            </h2>

            <p>
                Multiple modules connected through a single ERP
            </p>

        </div>


        <div class="nag-end-grid">

            {{-- PLATFORM SERVICES --}}

            <div class="nag-dashed-box">

                <h3>Platform Services</h3>

                <ol>

                    <li>
                        Services through the Government-Led
                        Data Centre
                    </li>

                    <li>
                        Centralised data management
                    </li>

                    <li>
                        Software integration
                    </li>

                    <li>
                        Online transaction reconciliation
                    </li>

                    <li>
                        Team for preparing MIS and other reports
                    </li>

                    <li>
                        Call centre support team
                    </li>

                </ol>

            </div>


            {{-- PROJECT HIGHLIGHTS --}}

            <div class="nag-dashed-box">

                <h3>Project Highlights</h3>

                <ol>

                    <li>
                        Dual factor authentication
                    </li>

                    <li>
                        Digital Signature
                    </li>

                    <li>
                        Mobile-based dashboard
                    </li>

                    <li>
                        Integrated with advanced features like
                        SMS, Email, HTTPS, etc.
                    </li>

                </ol>

            </div>

        </div>

    </div>

</section>



{{-- =========================================================
     SECTION 6
     MUNICIPAL REVENUE
========================================================= --}}

<section class="nag-revenue-section">

    <div class="nag-container">

        <div class="nag-section-heading">

            <h2>
                Municipal Revenue and Asset-Related <span>Solutions</span>
            </h2>

            <p>
                Applicable to Taxes, Finance, RTS and more
            </p>

        </div>


        <div class="nag-revenue-grid">


            {{-- BILLING --}}

            <div class="nag-revenue-card">

                <div class="nag-card-title">
                    Billing Solutions
                </div>

                <p>
                    Handling all revenue-related processes
                    for better billing, collection and accounting.
                </p>

                <ul>
                    <li>Property Tax</li>
                    <li>Water Tax</li>
                    <li>Fire Department</li>
                    <li>Market and Trade Department</li>
                    <li>Advertisement</li>
                    <li>Care Management</li>
                    <li>Water Management</li>
                </ul>

            </div>


            {{-- FINANCIAL --}}

            <div class="nag-revenue-card">

                <div class="nag-card-title">
                    Financial Modules
                </div>

                <p>
                    Core financial management modules for
                    accounting, controlling and reporting.
                </p>

                <ul>
                    <li>Double Entry Accounting</li>
                    <li>Establishment & HR</li>
                    <li>Pension Management</li>
                    <li>Budget Management</li>
                </ul>

            </div>


            {{-- ASSET --}}

            <div class="nag-revenue-card">

                <div class="nag-card-title">
                    Asset Management
                </div>

                <p>
                    Tracking, managing and optimising assets
                    for proper use and transparency.
                </p>

                <ul>
                    <li>Property Management</li>
                    <li>Hospital Management</li>
                    <li>Asset Inventory</li>
                    <li>Medical Inventory</li>
                </ul>

            </div>


            {{-- ONLINE --}}

            <div class="nag-revenue-card">

                <div class="nag-card-title">
                    Online Solutions
                </div>

                <p>
                    Simplifying the interaction between the
                    Urban Local Bodies and citizens.
                </p>

                <ul>
                    <li>Online Tax Collection</li>
                    <li>Online Services</li>
                    <li>Water Management</li>
                    <li>Smart Parking</li>
                    <li>Grievance Management</li>
                    <li>Citizen Participation</li>
                </ul>

            </div>

        </div>

    </div>

</section>



{{-- =========================================================
     SECTION 7
     PROJECT MODULES
========================================================= --}}

<section class="nag-modules-section">

    <div class="nag-container">

        <div class="nag-section-heading">

            <h2>
                Project<span> Modules</span>
            </h2>

            <p>
                Building a self-sufficient system
            </p>

        </div>


        <div class="nag-modules-image">

            <img
                src="{{ asset('images/nagarkaryawali/Key Modules for Nagarkaryavali 2400x500.png') }}"
                alt="Nagarkaryavali Project Modules">

        </div>

    </div>

</section>



{{-- =========================================================
     SECTION 8
     PROJECT FEATURES
========================================================= --}}
<div class="nag-section-heading">

            <h2>
                Project <span>Features</span>
            </h2>

            <p>
Solution for Modern Governance
            </p>

        </div>
<div class="nag-feature-gallery">
 
    {{-- 1. PROPERTY TAX --}}
    <div class="nag-feature-image">
        <img  src="{{ asset('images/nagarkaryawali/Property Tax.jpg') }}"   alt="Property Tax">

        <div class="nag-feature-hover">
            <h3>Property Tax</h3>
            <ol>
                <li>Property Assessment</li>
                <li>Property Tax Collection</li>
                <li>Online Payment Facility</li>
                <li>Demand & Collection Tracking</li>
                <li>Real-Time Reports</li>
            </ol>
        </div>

        <span>Property Tax</span>
    </div>


    {{-- 2. WATER --}}
    <div class="nag-feature-image">
        <img  src="{{ asset('images/nagarkaryawali/water.jpg') }}"   alt="Property Tax">

        <div class="nag-feature-hover">
            <h3>Water</h3>
            <ol>
                <li>Water Connection Management</li>
                <li>Water Billing</li>
                <li>Meter Reading</li>
                <li>Online Water Bill Payment</li>
                <li>Collection Tracking</li>
            </ol>
        </div>

        <span>Water</span>
    </div>


    {{-- 3. ONLINE ENTRY - ACCOUNTS --}}
    <div class="nag-feature-image">
        <img  src="{{ asset('images/nagarkaryawali/Accounts.jpg') }}"   alt="Property Tax">

        <div class="nag-feature-hover">
            <h3>Online Entry - Accounts</h3>
            <ol>
                <li>Integrated Payment Platform</li>
                <li>Centralised Revenue Management</li>
                <li>Configuration & Customisation</li>
                <li>Real-Time Monitoring</li>
                <li>Data Security</li>
            </ol>
        </div>

        <span>Online Entry - Accounts</span>
    </div>


    {{-- 4. ESTABLISHMENT & HR --}}
    <div class="nag-feature-image">
        <img  src="{{ asset('images/nagarkaryawali/Establishment & HR.jpg') }}"   alt="Property Tax">

        <div class="nag-feature-hover">
            <h3>Establishment & HR</h3>
            <ol>
                <li>Employee Management</li>
                <li>Payroll Management</li>
                <li>Attendance Management</li>
                <li>Leave Management</li>
                <li>Employee Records</li>
            </ol>
        </div>

        <span>Establishment & HR</span>
    </div>


    {{-- 5. ESTIMATION --}}
    <div class="nag-feature-image">
        <img  src="{{ asset('images/nagarkaryawali/Estimation.jpg') }}"   alt="Property Tax">

        <div class="nag-feature-hover">
            <h3>Estimation</h3>
            <ol>
                <li>Project Management with Estimation</li>
                <li>Creation of Document for Tender Process</li>
                <li>Work Geo Boundary Allocation</li>
                <li>Project Status Tracking</li>
                <li>Upload the Photo and Critical Observation</li>
            </ol>
        </div>

        <span>Estimation</span>
    </div>


    {{-- 6. RTS --}}
    <div class="nag-feature-image">
        <img  src="{{ asset('images/nagarkaryawali/RTS - Right to Service.jpg') }}"   alt="Property Tax">

        <div class="nag-feature-hover">
            <h3>RTS - Right to Service</h3>
            <ol>
                <li>Online Service Requests</li>
                <li>Application Tracking</li>
                <li>Department-wise Processing</li>
                <li>Time-bound Service Delivery</li>
                <li>Status Notifications</li>
            </ol>
        </div>

        <span>RTS - Right to Service</span>
    </div>


    {{-- 7. INWARD OUTWARD --}}
    <div class="nag-feature-image">
        <img  src="{{ asset('images/nagarkaryawali/Inward-Outward.jpg') }}"   alt="Property Tax">

        <div class="nag-feature-hover">
            <h3>Inward-Outward</h3>
            <ol>
                <li>Document Registration</li>
                <li>Inward & Outward Tracking</li>
                <li>Document Movement</li>
                <li>Department Allocation</li>
                <li>Digital Records</li>
            </ol>
        </div>

        <span>Inward-Outward</span>
    </div>


    {{-- 8. CRM --}}
    <div class="nag-feature-image">
        <img  src="{{ asset('images/nagarkaryawali/CRM.jpg') }}"   alt="Property Tax">

        <div class="nag-feature-hover">
            <h3>CRM</h3>
            <ol>
                <li>Citizen Registration</li>
                <li>Complaint Management</li>
                <li>Service Requests</li>
                <li>Communication Tracking</li>
                <li>Citizen History</li>
            </ol>
        </div>

        <span>CRM</span>
    </div>


    {{-- 9. FIRE --}}
    <div class="nag-feature-image">
        <img  src="{{ asset('images/nagarkaryawali/Fire.jpg') }}"   alt="Property Tax">

        <div class="nag-feature-hover">
            <h3>Fire</h3>
            <ol>
                <li>Fire NOC Management</li>
                <li>Application Processing</li>
                <li>Inspection Management</li>
                <li>Certificate Generation</li>
                <li>Renewal Tracking</li>
            </ol>
        </div>

        <span>Fire</span>
    </div>


    {{-- 10. MARRIAGE --}}
    <div class="nag-feature-image">
        <img  src="{{ asset('images/nagarkaryawali/Marriage.jpg') }}"   alt="Property Tax">

        <div class="nag-feature-hover">
            <h3>Marriage</h3>
            <ol>
                <li>Marriage Registration</li>
                <li>Application Management</li>
                <li>Document Verification</li>
                <li>Certificate Generation</li>
                <li>Online Application Tracking</li>
            </ol>
        </div>

        <span>Marriage</span>
    </div>


    {{-- 11. LEGAL --}}
    <div class="nag-feature-image">
        <img  src="{{ asset('images/nagarkaryawali/Legal.jpg') }}"   alt="Property Tax">

        <div class="nag-feature-hover">
            <h3>Legal</h3>
            <ol>
                <li>Case Management</li>
                <li>Legal Notice Tracking</li>
                <li>Court Case Records</li>
                <li>Document Management</li>
                <li>Status Monitoring</li>
            </ol>
        </div>

        <span>Legal</span>
    </div>


    {{-- 12. BIRTH & DEATH --}}
    <div class="nag-feature-image">
        <img  src="{{ asset('images/nagarkaryawali/Birth & Death.jpg') }}"   alt="Property Tax">

        <div class="nag-feature-hover">
            <h3>Birth & Death</h3>
            <ol>
                <li>Birth Registration</li>
                <li>Death Registration</li>
                <li>Certificate Generation</li>
                <li>Application Tracking</li>
                <li>Digital Records</li>
            </ol>
        </div>

        <span>Birth & Death</span>
    </div>


    {{-- 13. MARKET --}}
    <div class="nag-feature-image">
        <img  src="{{ asset('images/nagarkaryawali/Market.jpg') }}"   alt="Property Tax">

        <div class="nag-feature-hover">
            <h3>Market</h3>
            <ol>
                <li>Market Management</li>
                <li>Shop Allocation</li>
                <li>License Management</li>
                <li>Rent Collection</li>
                <li>Market Revenue Tracking</li>
            </ol>
        </div>

        <span>Market</span>
    </div>


    {{-- 14. CFC --}}
    <div class="nag-feature-image">
        <img  src="{{ asset('images/nagarkaryawali/CFC - Citizen Facilitation Centres.jpg') }}"   alt="Property Tax">

        <div class="nag-feature-hover">
            <h3>CFC - Citizen Facilitation Centre</h3>
            <ol>
                <li>Citizen Service Requests</li>
                <li>Application Processing</li>
                <li>Document Verification</li>
                <li>Payment Collection</li>
                <li>Application Status Tracking</li>
            </ol>
        </div>

        <span>CFC - Citizen Facilitation Centre</span>
    </div>


    {{-- 15. ESTATE --}}
    <div class="nag-feature-image">
        <img  src="{{ asset('images/nagarkaryawali/Estate.jpg') }}"   alt="Property Tax">

        <div class="nag-feature-hover">
            <h3>Estate</h3>
            <ol>
                <li>Municipal Property Management</li>
                <li>Property Allocation</li>
                <li>Lease Management</li>
                <li>Rent Collection</li>
                <li>Property Records</li>
            </ol>
        </div>

        <span>Estate</span>
    </div>


    {{-- 16. DASHBOARD --}}
    <div class="nag-feature-image">
        <img  src="{{ asset('images/nagarkaryawali/HO Module.jpg') }}"   alt="Property Tax">

        <div class="nag-feature-hover">
            <h3>Dashboard</h3>
            <ol>
                <li>Real-Time Data Visualisation</li>
                <li>Department-wise Reports</li>
                <li>Performance Monitoring</li>
                <li>Revenue Analytics</li>
                <li>Management Insights</li>
            </ol>
        </div>

        <span>Dashboard</span>
    </div>

</div>

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
.text-center { text-align: center; }
.mb-12 { margin-bottom: 48px; }

/* ===================== HERO ===================== */
.hero-section { position: relative; }
.hero-bg {
    width: calc(100% - 30px);
    background-image: url('{{ asset('images/nagarkaryawali/Nagarkaryavali Banner 1200x500 product page.png') }}');
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
   NAGARKARYAVALI PAGE
========================================================= */

.nag-container {
    width: min(1200px, calc(100% - 50px));
    margin: 0 auto;
}


/* =========================================================
   COMMON SECTION HEADING
========================================================= */

.nag-section-heading {
    text-align: center;
    margin-bottom: 30px;
}

.nag-section-heading h2 {
    margin: 0;

    font-family: "Inter Tight", sans-serif;
    font-size: 40px;
    line-height: 1.2;
    font-weight: 600;

    color: #111;
}

.nag-section-heading h2 span {
    color: #11199b;
}

.nag-section-heading p {
    margin: 5px 0 0;

    font-size: 16px;
    color: #777;
}


/* =========================================================
   INTRO
========================================================= */

.nag-intro-section {
    padding: 55px 0 45px;
    background: #fff;
}

.nag-intro-heading {
    display: flex;
    align-items: center;
    justify-content: center;

    gap: 12px;

    margin-bottom: 22px;
}

.nag-intro-brand img {
    width: 250px;
    height: 100%;
}

.nag-intro-heading h2 {
    margin: 0;

    font-family: "Inter Tight", sans-serif;
    font-size: 40px;
    font-weight: 600;

    color: #111;
}


.nag-intro-card {
    display: grid;
    grid-template-columns: 46% 54%;

    border: 1px solid #ddd;
    border-radius: 8px;

    overflow: hidden;

    background: #fff;
}

.nag-intro-image {
    min-height: 360px;
}

.nag-intro-image img {
    width: 100%;
    height: 100%;

    display: block;

    object-fit: cover;
}


.nag-intro-content {
    padding: 24px 35px;
}

.nag-intro-content h3 {
    margin: 0 0 12px;

    font-size: 25px;
    line-height: 1.25;
    font-weight: 600;

    color: #111;
}

.nag-intro-content h3 span {
    color: #11199b;
}

.nag-intro-content p {
    margin: 0 0 11px;

    font-size: 16px;
    line-height: 1.55;

    color: #333;
}


/* =========================================================
   CHALLENGES
========================================================= */

.nag-challenges-section {
    padding: 25px 0 55px;
}

.nag-challenges-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 10px;
}

.nag-challenge-card {
    min-height: 155px;

    border: 1px solid #ddd;
    border-radius: 8px;

    padding: 20px 15px;

    text-align: center;

    background: #fff;
}

.nag-challenge-icon {
    width: 50px;
    height: 50px;

    margin: 0 auto 12px;

    display: flex;
    align-items: center;
    justify-content: center;
}

.nag-challenge-icon img {
    width: 100%;
    height: 100%;
    object-fit: contain;
}

.nag-challenge-card h3 {
    margin: 0 0 8px;

    font-size: 17px;
    font-weight: 600;

    color: #111;
}

.nag-challenge-card p {
    margin: 0;

    font-size: 15px;
    line-height: 1.5;

    color: #555;
}


/* =========================================================
   INTRODUCING
========================================================= */

.nag-introducing-section {
    padding: 45px 0 55px;

    background: #edf4ff;
}

.nag-introducing-heading {
    text-align: center;
    margin-bottom: 28px;
}

.nag-introducing-heading span {
    display: block;

    margin-bottom: 5px;

    font-size: 22px;
    font-style: italic;

    color: #555;
}

.nag-introducing-heading img {
    width: 365px;
    max-height: 102px;
    margin: 0px 410px;
    object-fit: contain;
}

.nag-introducing-heading p {
    margin: 3px 0 0;

    font-size: 17px;
    color: #777;
}


.nag-introducing-grid {
    width: min(800px, 100%);
    margin: 0 auto;

    display: grid;
    grid-template-columns: 1fr 1fr;

    gap: 12px;
}

.nag-feature-box {
    min-height: 105px;

    padding: 18px;

    border: 1px dashed #11199b;
    border-radius: 7px;

    background: rgba(255,255,255,.35);
}

.nag-feature-box h3 {
    margin: 0 0 7px;

    font-size: 17px;
    font-weight: 600;

    color: #111;
}

.nag-feature-box p {
    margin: 0;

    font-size: 15px;
    line-height: 1.5;

    color: #333;
}


/* =========================================================
   PREVIEW
========================================================= */

.nag-preview-section {
    padding: 55px 0;
    background: #fff;
}

.nag-preview-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;

    gap: 8px;

    width: min(1050px, 100%);
    margin: 0 auto;
}

.nag-preview-image {
    height: 400px;
    overflow: hidden;
}

.nag-preview-image img {
    width: 100%;
    height: 100%;

    display: block;

    object-fit: cover;
}


/* =========================================================
   END TO END
========================================================= */

.nag-end-section {
    padding: 20px 0 55px;
}

.nag-end-grid {
    width: min(800px, 100%);
    margin: 0 auto;

    display: grid;
    grid-template-columns: 1fr 1fr;

    gap: 12px;
}

.nag-dashed-box {
    padding: 18px;

    border: 1px dashed #11199b;
    border-radius: 8px;
}

.nag-dashed-box h3 {
    margin: 0 0 10px;

    font-size: 18px;
    font-weight: 600;
}

.nag-dashed-box ol {
    margin: 0;
    padding-left: 18px;
    list-style-type:i;
}

.nag-dashed-box li {
    margin-bottom: 4px;

    font-size: 16px;
    line-height: 1.4;
}


/* =========================================================
   REVENUE
========================================================= */

.nag-revenue-section {
    padding: 45px 0 55px;

    background: #f2f4fa;
}

.nag-revenue-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);

    gap: 6px;
}

.nag-revenue-card {
    background: #fff;

    border: 1px solid #ddd;
    border-radius: 7px;

    overflow: hidden;

    padding-bottom: 15px;
}

.nag-card-title {
    padding: 9px 8px;

    background: #252b91;

    text-align: center;

    color: #fff;

    font-size: 18px;
    font-weight: 600;
}

.nag-revenue-card p {
    margin: 12px 10px 7px;

    font-size: 16px;
    line-height: 1.45;

    color: #444;
}

.nag-revenue-card ul {
    margin: 0;
    padding: 0 10px 0 23px;
}

.nag-revenue-card li {
    margin-bottom: 7px;
list-style-type:i;
    font-size: 15px;
    line-height: 1.35;
}


/* =========================================================
   PROJECT MODULES
========================================================= */

.nag-modules-section {
    padding: 50px 0 60px;
}

.nag-modules-image {
    width: min(1200px, 100%);
    margin: 0 auto;

    text-align: center;
}

.nag-modules-image img {
    width: 100%;
    max-width: 1200px;

    display: block;
    margin: 0 auto;

    object-fit: contain;
}

/* =========================================================
   PROJECT FEATURE CARDS
========================================================= */

.nag-feature-gallery {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 8px;

    width: min(1200px, 100%);
    margin: 0 auto;
}

.nag-feature-image {
    position: relative;
    height: 340px;

    overflow: hidden;
    border-radius: 5px;

    cursor: pointer;
}

.nag-feature-image > img {
    width: 100%;
    height: 100%;

    display: block;

    object-fit: cover;

    transition: transform .4s ease;
}


/* DARK OVERLAY */

.nag-feature-image::after {
    content: "";

    position: absolute;
    inset: 0;

    background: linear-gradient(
        to top,
        rgba(0, 0, 0, .78),
        rgba(0, 0, 0, .08) 70%
    );

    z-index: 1;

    transition: background .3s ease;
}


/* =========================================================
   NORMAL TITLE
========================================================= */

.nag-feature-image > span {
    position: absolute;

    left: 15px;
    bottom: 15px;

    z-index: 3;

    color: #fff;

    font-size: 18px;
    font-weight: 600;

    text-shadow: 0 1px 4px rgba(0,0,0,.7);

    transition: opacity .25s ease;
}


/* =========================================================
   HOVER CONTENT
========================================================= */

.nag-feature-hover {
    position: absolute;

    left: 0;
    right: 0;
    bottom: 0;

    z-index: 4;

    padding: 18px;

    color: #fff;

    opacity: 0;
    transform: translateY(15px);

    transition:
        opacity .3s ease,
        transform .3s ease;
}

.nag-feature-hover h3 {
    margin: 0 0 10px;

    color: #fff;

    font-size: 18px;
    font-weight: 600;
    line-height: 1.2;
}

.nag-feature-hover ol {
    margin: 0;
    padding-left: 18px;
    list-style-type:i;
}

.nag-feature-hover li {
    margin-bottom: 4px;

    color: #fff;

    font-size: 16px;
    line-height: 1.3;
}


/* =========================================================
   HOVER
========================================================= */

.nag-feature-image:hover > img {
    transform: scale(1.06);
}

.nag-feature-image:hover::after {
    background: rgba(0, 0, 0, .72);
}

.nag-feature-image:hover > span {
    opacity: 0;
}

.nag-feature-image:hover .nag-feature-hover {
    opacity: 1;
    transform: translateY(0);
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
   MOBILE
========================================================= */

@media (max-width: 900px) {

    .nag-feature-gallery {
        grid-template-columns: repeat(2, 1fr);
    }

    .nag-feature-image {
        height: 180px;
    }

}


@media (max-width: 600px) {

    .nag-feature-gallery {
        grid-template-columns: 1fr;
    }

    .nag-feature-image {
        height: 210px;
    }

    .nag-feature-hover {
        padding: 20px;
    }

    .nag-feature-hover h3 {
        font-size: 16px;
    }

    .nag-feature-hover li {
        font-size: 11px;
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
    background-image: url('{{ asset('images/nagarkaryawali/1231.png') }}');

        min-height: 200px;

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

   MOBILE CTA — HORIZONTAL LAYOUT

   Reference: text LEFT + image RIGHT

========================================================= */

@media (max-width: 767px) {

    .services-bottom-cta {

        margin-top: 25px;

        padding: 20px 0 90px;

        background: #fff;

    }

    .services-bottom-cta-inner {

        width: calc(100% - 24px);

        min-height: 135px;

        margin: 0 auto;

        display: flex;

        flex-direction: row;

        align-items: stretch;

        justify-content: space-between;

        position: relative;

        overflow: hidden;

        border-radius: 17px;

        background: linear-gradient(

            90deg,

            #2E3192 0%,

            #2E3192 55%,

            rgba(46,49,146,0.65) 78%,

            rgba(46,49,146,0.15) 100%

        );

    }

    /* =====================================================

       LEFT SIDE — CONTENT

    ===================================================== */

    .services-cta-content {

        width: 62%;

        max-width: none;

        padding: 22px 0 20px 18px;

        position: relative;

        z-index: 3;

        text-align: left;

    }

    .services-cta-content h2 {

        margin: 0 0 8px;

        font-family: "Inter Tight", sans-serif;

        font-size: 18px;

        line-height: 1.15;

        font-weight: 700;

        color: #fff;

    }

    .services-cta-content h2 span {

        color: #fff;

    }

    .services-cta-content p {

        margin: 0 0 13px;

        font-size: 10px;

        line-height: 1.35;

        color: #e5e7eb;

    }

    .services-cta-btn {

        display: inline-flex;

        align-items: center;

        justify-content: center;

        gap: 5px;

        padding: 7px 13px;

        border-radius: 999px;

        background: #fff;

        color: #111;

        font-size: 10px;

        line-height: 1;

        font-weight: 600;

        text-decoration: none;

    }

    .services-cta-btn span {

        font-size: 13px;

    }

    /* =====================================================

       RIGHT SIDE — IMAGE

    ===================================================== */

    .services-cta-image {

        width: 43%;

        height: 100%;

        margin: 0;

        display: flex;

        align-items: flex-end;

        justify-content: flex-end;

        position: absolute;

        right: 0;

        bottom: 0;

        z-index: 2;

    }

    .services-cta-image img {

        width: 100%;

        max-width: none;

        height: auto;

        max-height: 180px;

        object-fit: contain;

        object-position: bottom right;

        display: block;

    }

}
/* =========================================================
   NAGARKARYAVALI
   MOBILE RESPONSIVE CONTENT ONLY
   HEADER / HERO / CTA NOT INCLUDED
========================================================= */


/* =========================================================
   TABLET — 768px TO 1023px
========================================================= */

@media (min-width: 768px) and (max-width: 1023px) {

    .nag-container {
        width: calc(100% - 40px);
        max-width: 900px;
    }

    /* -------------------------
       COMMON HEADINGS
    ------------------------- */

    .nag-section-heading {
        margin-bottom: 28px;
    }

    .nag-section-heading h2 {
        font-size: 32px;
        line-height: 1.2;
    }

    .nag-section-heading p {
        font-size: 15px;
    }


    /* =====================================================
       SECTION 1 — INTRO
    ===================================================== */

    .nag-intro-section {
        padding: 45px 0 40px;
    }

    .nag-intro-heading {
        gap: 10px;
        margin-bottom: 20px;
    }

    .nag-intro-brand img {
        width: 210px;
    }

    .nag-intro-heading h2 {
        font-size: 32px;
    }

    .nag-intro-card {
        grid-template-columns: 1fr 1fr;
    }

    .nag-intro-image {
        min-height: 350px;
    }

    .nag-intro-content {
        padding: 25px;
    }

    .nag-intro-content h3 {
        font-size: 22px;
    }

    .nag-intro-content p {
        font-size: 14px;
        line-height: 1.55;
    }


    /* =====================================================
       SECTION 2 — CHALLENGES
    ===================================================== */

    .nag-challenges-section {
        padding: 25px 0 45px;
    }

    .nag-challenges-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 12px;
    }

    .nag-challenge-card {
        min-height: 160px;
        padding: 20px;
    }


    /* =====================================================
       SECTION 3 — INTRODUCING
    ===================================================== */

    .nag-introducing-section {
        padding: 45px 0 50px;
    }

    .nag-introducing-heading img {
        width: 300px;
        max-height: 85px;
        margin: 0 auto;
    }

    .nag-introducing-grid {
        width: 100%;
        max-width: 700px;
        grid-template-columns: 1fr 1fr;
        gap: 12px;
    }


    /* =====================================================
       SECTION 4 — PREVIEW
    ===================================================== */

    .nag-preview-section {
        padding: 45px 0;
    }

    .nag-preview-grid {
        width: 100%;
        grid-template-columns: 1fr 1fr;
        gap: 8px;
    }

    .nag-preview-image {
        height: 300px;
    }


    /* =====================================================
       SECTION 5 — END TO END
    ===================================================== */

    .nag-end-section {
        padding: 20px 0 45px;
    }

    .nag-end-grid {
        width: 100%;
        max-width: 700px;
        grid-template-columns: 1fr 1fr;
    }

    .nag-dashed-box {
        padding: 20px;
    }


    /* =====================================================
       SECTION 6 — REVENUE
    ===================================================== */

    .nag-revenue-section {
        padding: 45px 0 50px;
    }

    .nag-revenue-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 12px;
    }

    .nag-revenue-card {
        min-height: 250px;
    }


    /* =====================================================
       SECTION 7 — PROJECT MODULES
    ===================================================== */

    .nag-modules-section {
        padding: 45px 0 50px;
    }

    .nag-modules-image {
        width: 100%;
        overflow-x: auto;
    }

    .nag-modules-image img {
        width: 100%;
        min-width: 700px;
    }


    /* =====================================================
       SECTION 8 — FEATURE GALLERY
    ===================================================== */

    .nag-feature-gallery {
        width: calc(100% - 40px);
        grid-template-columns: repeat(2, 1fr);
        gap: 10px;
    }

    .nag-feature-image {
        height: 260px;
    }

    .nag-feature-hover {
        padding: 16px;
    }

    .nag-feature-hover h3 {
        font-size: 17px;
    }

    .nag-feature-hover li {
        font-size: 13px;
    }
}


/* =========================================================
   MOBILE — UP TO 767px
========================================================= */

@media (max-width: 767px) {


    /* =====================================================
       GLOBAL
    ===================================================== */

    .nag-container {
        width: calc(100% - 30px);
        max-width: none;
    }

    /* Prevent accidental horizontal overflow */

    .nag-intro-section,
    .nag-challenges-section,
    .nag-introducing-section,
    .nag-preview-section,
    .nag-end-section,
    .nag-revenue-section,
    .nag-modules-section {
        width: 100%;
        overflow: hidden;
    }


    /* =====================================================
       COMMON SECTION HEADING
    ===================================================== */

    .nag-section-heading {
        margin-bottom: 24px;
        padding: 0 5px;
    }

    .nag-section-heading h2 {
        font-size: 27px;
        line-height: 1.2;
        font-weight: 600;
    }

    .nag-section-heading p {
        margin-top: 7px;
        font-size: 13px;
        line-height: 1.45;
    }


    /* =====================================================
       SECTION 1
       HOW DELAYS AFFECT OPERATIONS
    ===================================================== */

    .nag-intro-section {
        padding: 38px 0 35px;
        background: #fff;
    }

    .nag-intro-heading {
        display: flex;
        flex-direction: column;
        gap: 8px;
        margin-bottom: 20px;
        text-align: center;
    }

    .nag-intro-brand img {
        display: block;
        width: 190px;
        height: auto;
        margin: 0 auto;
    }

    .nag-intro-heading h2 {
        font-size: 27px;
        line-height: 1.2;
        text-align: center;
    }

    .nag-intro-card {
        display: flex;
        flex-direction: column;
        width: 100%;
        border-radius: 12px;
    }

    .nag-intro-image {
        width: 100%;
        min-height: 0;
        height: 220px;
    }

    .nag-intro-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .nag-intro-content {
        padding: 22px 18px 20px;
    }

    .nag-intro-content h3 {
        margin-bottom: 12px;
        font-size: 20px;
        line-height: 1.3;
    }

    .nag-intro-content h3 span {
        display: block;
    }

    .nag-intro-content p {
        margin-bottom: 12px;
        font-size: 14px;
        line-height: 1.6;
        color: #444;
    }


    /* =====================================================
       SECTION 2
       CHALLENGES
    ===================================================== */

    .nag-challenges-section {
        padding: 20px 0 40px;
    }

    .nag-challenges-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 9px;
    }

    .nag-challenge-card {
        min-height: 0;
        padding: 17px 10px 16px;
        border-radius: 10px;
    }

    .nag-challenge-icon {
        width: 42px;
        height: 42px;
        margin-bottom: 10px;
    }

    .nag-challenge-card h3 {
        margin-bottom: 7px;
        font-size: 15px;
        line-height: 1.25;
    }

    .nag-challenge-card p {
        font-size: 12px;
        line-height: 1.45;
    }


    /* =====================================================
       SECTION 3
       INTRODUCING NAGARKARYAVALI
    ===================================================== */

    .nag-introducing-section {
        padding: 38px 0 42px;
        background: #edf4ff;
    }

    .nag-introducing-heading {
        margin-bottom: 23px;
    }

    .nag-introducing-heading span {
        margin-bottom: 4px;
        font-size: 18px;
    }

    .nag-introducing-heading img {
        display: block;
        width: 245px;
        max-width: 80%;
        height: auto;
        max-height: none;
        margin: 0 auto;
        object-fit: contain;
    }

    .nag-introducing-heading p {
        margin-top: 5px;
        font-size: 14px;
        line-height: 1.45;
    }

    .nag-introducing-grid {
        width: 100%;
        grid-template-columns: 1fr;
        gap: 9px;
    }

    .nag-feature-box {
        min-height: 0;
        padding: 16px 15px;
        border-radius: 9px;
    }

    .nag-feature-box h3 {
        margin-bottom: 6px;
        font-size: 15px;
        line-height: 1.3;
    }

    .nag-feature-box p {
        font-size: 13px;
        line-height: 1.5;
    }


    /* =====================================================
       SECTION 4
       VISUAL PREVIEW
    ===================================================== */

    .nag-preview-section {
        padding: 40px 0;
        background: #fff;
    }

    .nag-preview-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 8px;
        width: 100%;
    }

    .nag-preview-image {
        width: 100%;
        height: 230px;
        border-radius: 7px;
        overflow: hidden;
    }

    .nag-preview-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }


    /* =====================================================
       SECTION 5
       END TO END SOLUTION
    ===================================================== */

    .nag-end-section {
        padding: 18px 0 42px;
    }

    .nag-end-grid {
        width: 100%;
        display: grid;
        grid-template-columns: 1fr;
        gap: 10px;
    }

    .nag-dashed-box {
        padding: 18px 16px;
        border-radius: 9px;
    }

    .nag-dashed-box h3 {
        margin-bottom: 10px;
        font-size: 17px;
    }

    .nag-dashed-box ol {
        padding-left: 18px;
    }

    .nag-dashed-box li {
        margin-bottom: 6px;
        font-size: 13px;
        line-height: 1.45;
    }


    /* =====================================================
       SECTION 6
       MUNICIPAL REVENUE
    ===================================================== */

    .nag-revenue-section {
        padding: 40px 0 45px;
        background: #f2f4fa;
    }

    .nag-revenue-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 10px;
    }

    .nag-revenue-card {
        width: 100%;
        min-height: 0;
        border-radius: 9px;
        padding-bottom: 15px;
    }

    .nag-card-title {
        padding: 10px 8px;
        font-size: 17px;
        line-height: 1.3;
    }

    .nag-revenue-card p {
        margin: 13px 14px 9px;
        font-size: 13px;
        line-height: 1.5;
    }

    .nag-revenue-card ul {
        margin: 0;
        padding: 0 15px 0 30px;
    }

    .nag-revenue-card li {
        margin-bottom: 6px;
        font-size: 13px;
        line-height: 1.4;
    }


    /* =====================================================
       SECTION 7
       PROJECT MODULES
    ===================================================== */

    .nag-modules-section {
        padding: 40px 0 45px;
        background: #fff;
    }

    .nag-modules-image {
        width: 100%;
        overflow-x: auto;
        overflow-y: hidden;
        -webkit-overflow-scrolling: touch;
        scrollbar-width: none;
    }

    .nag-modules-image::-webkit-scrollbar {
        display: none;
    }

    .nag-modules-image img {
        display: block;
        width: auto;
        min-width:100%;
        max-width: none;
        height: 100px;
        margin: 0;
    }


    /* =====================================================
       SECTION 8
       PROJECT FEATURES HEADING
    ===================================================== */

    .nag-section-heading + .nag-feature-gallery {
        margin-top: 0;
    }

    /*
       Your Project Features heading currently sits
       outside .nag-container.

       Give it proper mobile spacing.
    */

    .nag-feature-gallery {
        width: calc(100% - 30px);
        display: grid;
        grid-template-columns: 1fr;
        gap: 9px;
        margin-left: auto;
        margin-right: auto;
    }

    .nag-feature-gallery + * {
        margin-top: 0;
    }


    /* =====================================================
       FEATURE CARDS
    ===================================================== */

    .nag-feature-image {
        width: 100%;
        height: 250px;
        border-radius: 9px;
        overflow: hidden;
    }

    .nag-feature-image > img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }


    /* =====================================================
       FEATURE CARD TITLE
    ===================================================== */

    .nag-feature-image > span {
        left: 14px;
        bottom: 13px;
        right: 14px;
        font-size: 16px;
        line-height: 1.25;
    }


    /* =====================================================
       FEATURE HOVER CONTENT
       
       IMPORTANT:
       On mobile there is no real hover.
       Keep the information visible so users
       don't need to hover.
    ===================================================== */

    .nag-feature-hover {
        left: 0;
        right: 0;
        bottom: 0;
        padding: 16px;
        opacity: 0;
        transform: translateY(10px);
    }

    .nag-feature-hover h3 {
        margin-bottom: 7px;
        font-size: 16px;
        line-height: 1.25;
    }

    .nag-feature-hover ol {
        margin: 0;
        padding-left: 18px;
    }

    .nag-feature-hover li {
        margin-bottom: 3px;
        font-size: 12px;
        line-height: 1.3;
    }


    /*
       Tap/hover behavior.

       On touch devices, :hover can remain active after
       tapping. This allows the existing interaction
       to continue working.
    */

    .nag-feature-image:hover > img {
        transform: scale(1.03);
    }

    .nag-feature-image:hover > span {
        opacity: 0;
    }

    .nag-feature-image:hover .nag-feature-hover {
        opacity: 1;
        transform: translateY(0);
    }


    /* =====================================================
       EXTRA SMALL PHONES — 360px / 375px
    ===================================================== */

    @media (max-width: 390px) {

        .nag-container {
            width: calc(100% - 24px);
        }

        .nag-section-heading h2 {
            font-size: 24px;
        }

        .nag-section-heading p {
            font-size: 12px;
        }

        .nag-intro-brand img {
            width: 175px;
        }

        .nag-intro-heading h2 {
            font-size: 24px;
        }

        .nag-intro-image {
            height: 195px;
        }

        .nag-intro-content {
            padding: 19px 15px;
        }

        .nag-intro-content h3 {
            font-size: 18px;
        }

        .nag-intro-content p {
            font-size: 13px;
        }

        .nag-challenges-grid {
            gap: 7px;
        }

        .nag-challenge-card {
            padding: 14px 8px;
        }

        .nag-challenge-icon {
            width: 38px;
            height: 38px;
        }

        .nag-challenge-card h3 {
            font-size: 14px;
        }

        .nag-challenge-card p {
            font-size: 11px;
        }

        .nag-introducing-heading img {
            width: 220px;
        }

        .nag-preview-image {
            height: 205px;
        }

        .nag-feature-image {
            height: 225px;
        }

        .nag-feature-hover {
            padding: 14px;
        }

        .nag-feature-hover h3 {
            font-size: 15px;
        }

        .nag-feature-hover li {
            font-size: 11px;
        }

        .nag-revenue-card p,
        .nag-revenue-card li {
            font-size: 12px;
        }
    }
}


/* =========================================================
   TOUCH DEVICES
   REMOVE HOVER ZOOM EFFECT
========================================================= */

@media (hover: none) and (pointer: coarse) {

    .nag-feature-image:hover > img {
        transform: none;
    }

}

</style>

@endsection