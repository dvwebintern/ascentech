@extends('layouts.app')
@section('title', 'Nagarkaryawali')

@section('content')

{{-- HERO --}}
<section class="hero-section" x-data="{ scrolled: false }" x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 500 })">

    <div class="hero-bg">
        @include('partials.header')

        
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
</style>

@endsection