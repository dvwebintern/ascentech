@extends('layouts.app')
@section('title', 'Careers')

@section('content')

{{-- HERO --}}
<section class="hero-section" x-data="{ scrolled: false }" x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 500 })">

    <div class="hero-bg">
        @include('partials.header')

        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-title">Welcome to Careers at ASCENTech
</h1>
                <p class="hero-subtitle">Find out a great career opportunity and let’s grow together
</p>
            </div>
            <div class="hero-graphic">
                <img src="{{ asset('images/career/person 1000x1000.png') }}" alt="" class="hero-graphic-img">
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
     SECTION 1 — WE ARE HIRING
========================================================= --}}

<section class="careers-hiring-section">

    <div class="careers-main-container">

        <h2 class="careers-main-title">
            We Are <span>Hiring!</span>
        </h2>

        <div class="careers-jobs-grid">

            {{-- JOB 1 --}}
            <div class="career-job-card">

                <div class="career-job-content">
                    <h3>ASP .Net C# (WebForms)</h3>
                    <p class="career-location">Virar</p>
                </div>

                <div class="career-job-bottom">
                    <div class="career-job-type">
                        <span class="clock-icon">◷</span>
                        Full Time
                    </div>

                    <a href="#apply" class="career-apply-btn">
                        Apply Now <span>↗</span>
                    </a>
                </div>

            </div>


            {{-- JOB 2 --}}
            <div class="career-job-card">

                <div class="career-job-content">
                    <h3>Marketing Executive</h3>
                    <p class="career-location">Thane</p>
                </div>

                <div class="career-job-bottom">
                    <div class="career-job-type">
                        <span class="clock-icon">◷</span>
                        Full Time
                    </div>

                    <a href="#apply" class="career-apply-btn">
                        Apply Now <span>↗</span>
                    </a>
                </div>

            </div>


            {{-- JOB 3 --}}
            <div class="career-job-card">

                <div class="career-job-content">
                    <h3>Accounts Executive</h3>
                    <p class="career-location">Virar</p>
                </div>

                <div class="career-job-bottom">
                    <div class="career-job-type">
                        <span class="clock-icon">◷</span>
                        Full Time
                    </div>

                    <a href="#apply" class="career-apply-btn">
                        Apply Now <span>↗</span>
                    </a>
                </div>

            </div>


            {{-- JOB 4 --}}
            <div class="career-job-card">

                <div class="career-job-content">
                    <h3>React Js Developer</h3>
                    <p class="career-location">Thane</p>
                </div>

                <div class="career-job-bottom">
                    <div class="career-job-type">
                        <span class="clock-icon">◷</span>
                        Full Time
                    </div>

                    <a href="#apply" class="career-apply-btn">
                        Apply Now <span>↗</span>
                    </a>
                </div>

            </div>


            {{-- JOB 5 --}}
            <div class="career-job-card">

                <div class="career-job-content">
                    <h3>Implementation Executive</h3>
                    <p class="career-location">Thane</p>
                </div>

                <div class="career-job-bottom">
                    <div class="career-job-type">
                        <span class="clock-icon">◷</span>
                        Full Time
                    </div>

                    <a href="#apply" class="career-apply-btn">
                        Apply Now <span>↗</span>
                    </a>
                </div>

            </div>


            {{-- JOB 6 --}}
            <div class="career-job-card">

                <div class="career-job-content">
                    <h3>PostgreSQL Developer</h3>
                    <p class="career-location">Virar</p>
                </div>

                <div class="career-job-bottom">
                    <div class="career-job-type">
                        <span class="clock-icon">◷</span>
                        Full Time
                    </div>

                    <a href="#apply" class="career-apply-btn">
                        Apply Now <span>↗</span>
                    </a>
                </div>

            </div>


            {{-- JOB 7 --}}
            <div class="career-job-card">

                <div class="career-job-content">
                    <h3>Administrative Assistant</h3>
                    <p class="career-location">Virar</p>
                </div>

                <div class="career-job-bottom">
                    <div class="career-job-type">
                        <span class="clock-icon">◷</span>
                        Full Time
                    </div>

                    <a href="#apply" class="career-apply-btn">
                        Apply Now <span>↗</span>
                    </a>
                </div>

            </div>


            {{-- JOB 8 --}}
            <div class="career-job-card">

                <div class="career-job-content">
                    <h3>Software Tester</h3>
                    <p class="career-location">Thane</p>
                </div>

                <div class="career-job-bottom">
                    <div class="career-job-type">
                        <span class="clock-icon">◷</span>
                        Full Time
                    </div>

                    <a href="#apply" class="career-apply-btn">
                        Apply Now <span>↗</span>
                    </a>
                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     SECTION 2 — WHY WORK AT ASCENTECH
========================================================= --}}

<section class="careers-why-section">

    <div class="careers-why-container">

        <h2 class="careers-main-title">
            Why Work At <span>ASCENTech</span>
        </h2>


        <div class="careers-why-grid">

            {{-- LEARN --}}
            <div class="career-reason">

                <div class="career-reason-icon">
                    <img src="{{ asset('images/career/Learn.svg') }}" alt="">
                </div>

                <div class="career-reason-content">
                    <h3>Learn</h3>

                    <p>
                        If you are ready to work with our skilled professionals
                        and share your ideas, this is for you.
                    </p>
                </div>

            </div>


            {{-- GROW --}}
            <div class="career-reason">

                <div class="career-reason-icon">
                    <img src="{{ asset('images/career/Grow.svg') }}" alt="">
                </div>

                <div class="career-reason-content">
                    <h3>Grow</h3>

                    <p>
                        Be a part of big projects to solve real-world challenges
                        and grow with the company every day.
                    </p>
                </div>

            </div>


            {{-- MAKE AN IMPACT --}}
            <div class="career-reason">

                <div class="career-reason-icon">
                    <img src="{{ asset('images/career/Make An Impact.svg') }}" alt="">
                </div>

                <div class="career-reason-content">
                    <h3>Make An Impact</h3>

                    <p>
                        Contribute to projects that simplify the operations
                        for the government as well as the citizens.
                    </p>
                </div>

            </div>


            {{-- CULTURE --}}
            <div class="career-reason">

                <div class="career-reason-icon">
                    <img src="{{ asset('images/career/Culture.svg') }}" alt="">
                </div>

                <div class="career-reason-content">
                    <h3>Culture</h3>

                    <p>
                        No Two people are the same. We have an inclusive culture
                        where we value ideas, diversity and teamwork.
                    </p>
                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     SECTION 3 — LIFE AT ASCENTECH
========================================================= --}}

<section class="careers-life-section">

    <div class="careers-life-container">

        <div class="careers-life-image">
            <img
                src="{{ asset('images/career/Life at ascentech 800x600.png') }}"
                alt="Life At ASCENTech">
        </div>


        <div class="careers-life-content">

            <h2>
                Life At <span>ASCENTech</span>
            </h2>

            <p>
                Our responsibility goes beyond just software development as
                our products play an important role in the operations of the
                Urban Local Bodies, besides other sectors. Thus, we always
                focus on accuracy and development according to the diverse
                needs. We also value every idea brought by our employees,
                as it helps us grow continuously. Overall, it is how ASCENTech
                has positioned itself as a prominent software development
                company in India.
            </p>


            <ul class="careers-life-list">

                <li>
                    <span>✓</span>
                    Gain real-world industry knowledge
                </li>

                <li>
                    <span>✓</span>
                    Have a work-life balance
                </li>

                <li>
                    <span>✓</span>
                    Get expert guidance and mentorship
                </li>

                <li>
                    <span>✓</span>
                    Work on projects that make a global impact
                </li>

                <li>
                    <span>✓</span>
                    Learn new skills and adapt
                </li>

                <li>
                    <span>✓</span>
                    Stay updated with the latest technologies
                </li>

            </ul>

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
    margin-top:-130px;
    margin-bottom: 24px;
    max-width: 750px;
    font-family: "Inter Tight", sans-serif;
    font-size: clamp(32px, 3.5vw, 53px);
    font-weight: 600;
    line-height: 1.2em;
}
.hero-subtitle { font-size: 18px; color: #e5e7eb; margin-bottom: 0px; max-width: 550px; }
.hero-trust { font-size: 18px; color: #e5e7eb; margin-bottom: 40px; max-width: 750px; }
.hero-graphic { display: flex; justify-content: bottom center; margin-top: 20px;
margin-bottom:-50px; }
.hero-graphic-img { width: 100%; max-width: 600px; margin-right: clamp(14px, 6vw, -20px); }
@media (min-width: 1024px) {
    .hero-content { grid-template-columns: 1fr 1fr; }
    .hero-graphic { justify-content: flex-end; }
}
.hero-float-row { max-width: 1600px; margin: -80px auto 0; position: relative; z-index: 10; padding: 0 8px; }
.hero-float-inner { display: flex; flex-wrap: nowrap; align-items: center; justify-content: space-between; gap: 24px; padding: 0 56px 24px; overflow-x: auto; }
.hero-float-nav { display: none; margin-left: 35px; }
@media (min-width: 1024px) { .hero-float-nav { display: block; } }

.btn { display: inline-flex; align-items: center; gap: 8px; padding: 9px 26px; border-radius: 999px; font-size: 17px; font-weight: 500; text-decoration: none; transition: background 0.2s ease, color 0.2s ease; white-space: nowrap; }
.btn-outline-white { border: 1px solid #fff; color: #1a1a1a;
background-color:white; }
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
   CAREERS PAGE
========================================================= */

.careers-main-container {
    width: min(1350px, calc(100% - 40px));
    margin: 0 auto;
}


/* =========================================================
   SECTION 1 — WE ARE HIRING
========================================================= */

.careers-hiring-section {
    padding: 75px 0 70px;
    background: #ffffff;
}

.careers-main-title {
    margin: 0 0 50px;
    text-align: center;
    font-family: "Inter Tight", sans-serif;
    font-size: clamp(40px, 4vw, 45px);
    line-height: 1.1;
    font-weight: 600;
    color: #171717;
}

.careers-main-title span {
    color: #080c91;
}


/* JOB GRID */

.careers-jobs-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 18px;
}


/* JOB CARD */

.career-job-card {
    min-height: 200px;
    padding: 30px 25px 25px;
    border: 1px solid #dedede;
    border-radius: 13px;
    background: #fff;

    display: flex;
    flex-direction: column;
    justify-content: space-between;

    box-sizing: border-box;
    transition: all .25s ease;
}

.career-job-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 30px rgba(0, 0, 0, .07);
}


/* JOB TITLE */

.career-job-content h3 {
    margin: 0 0 15px;
    font-family: "Inter Tight", sans-serif;
    font-size: 22px;
    line-height: 1.2;
    font-weight: 600;
    color: #111111;
}

.career-location {
    margin: 0;
    font-size: 16px;
    color: #171717;
}


/* DIVIDER */

.career-job-content {
    padding-bottom: 15px;
    border-bottom: 1px solid #e4e4f5;
}


/* BOTTOM */

.career-job-bottom {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 10px;
    padding-top: 10px;
}

.career-job-type {
    display: flex;
    align-items: center;
    gap: 7px;
    font-size: 16px;
    color: #111;
    white-space: nowrap;
}

.clock-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;

    width: 19px;
    height: 19px;

    font-size: 20px;
    line-height: 1;
    color: #080c91;
}


/* APPLY BUTTON */

.career-apply-btn {
    display: inline-flex;
    align-items: center;
    gap: 7px;

    padding: 6px 17px;

    border-radius: 30px;
    background: #34349b;
    color: #fff;

    font-size: 16px;
    font-weight: 400;
    text-decoration: none;

    white-space: nowrap;

    transition: all .25s ease;
}

.career-apply-btn:hover {
    background: #080c91;
    color: #fff;
}

.career-apply-btn span {
    font-size: 18px;
}


/* =========================================================
   SECTION 2 — WHY WORK AT ASCENTECH
========================================================= */

.careers-why-section {
    padding: 50px 0 65px;
    background: #f5f5fa;
}

.careers-why-container {
    width: min(1080px, calc(100% - 40px));
    margin: 0 auto;
}

.careers-why-section .careers-main-title {
    margin-bottom: 32px;
    font-size:45px;
}


/* 2 x 2 GRID */

.careers-why-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
}


/* EACH REASON */

.career-reason {
    min-height: 155px;

    display: grid;
    grid-template-columns: 80px 1fr;
    gap: 20px;

    align-items: start;

    padding: 28px 25px;
    box-sizing: border-box;
}


/* VERTICAL DIVIDER */

.career-reason:nth-child(odd) {
    border-right: 1px solid #dedee5;
}


/* HORIZONTAL DIVIDER */

.career-reason:nth-child(n+3) {
    border-top: 1px solid #dedee5;
}


/* ICON */

.career-reason-icon {
    width: 55px;
    height: 55px;

    display: flex;
    align-items: center;
    justify-content: center;
}

.career-reason-icon img {
    width: 62px;
    height: 62px;
    object-fit: contain;
}


/* TEXT */

.career-reason-content h3 {
    margin: 0 0 7px;

    font-family: "Inter Tight", sans-serif;
    font-size: 20px;
    line-height: 1.1;
    font-weight: 600;

    color: #111;
}

.career-reason-content p {
    margin: 0;

    max-width: 500px;

    font-size: 15px;
    line-height: 1.65;

    color: #30384a;
}


/* =========================================================
   SECTION 3 — LIFE AT ASCENTECH
========================================================= */

.careers-life-section {
    padding: 50px 0;
    background: #fff;
}

.careers-life-container {
    width: min(1350px, calc(100% - 40px));
    margin: 0 auto;

    display: grid;
    grid-template-columns: 1fr 1fr;

    gap: 25px;

    padding: 12px;

    border: 1px solid #dedede;
    border-radius: 15px;

    box-sizing: border-box;
}


/* IMAGE */

.careers-life-image {
    height: 445px;
    overflow: hidden;
    border-radius: 14px;
}

.careers-life-image img {
    width: 100%;
    height: 100%;
    display: block;

    object-fit: cover;
}


/* CONTENT */

.careers-life-content {
    padding: 15px 25px 15px 0;

    display: flex;
    flex-direction: column;
    justify-content: center;
}

.careers-life-content h2 {
    margin: 0 0 25px;

    font-family: "Inter Tight", sans-serif;
    font-size: clamp(40px, 4vw, 45px);
    line-height: 1.1;
    font-weight: 600;

    color: #171717;
}

.careers-life-content h2 span {
    color: #080c91;
}


.careers-life-content > p {
    margin: 0 0 10px;

    font-size: 16px;
    line-height: 1.65;

    color: #111;
}


/* LIST */

.careers-life-list {
    padding: 0;
    margin: 0;

    list-style: none;
}

.careers-life-list li {
    display: flex;
    align-items: center;
    gap: 7px;

    margin-bottom: 8px;

    font-size: 16px;
    color: #111;
}

.careers-life-list li span {
    width: 18px;
    height: 18px;

    display: inline-flex;
    align-items: center;
    justify-content: center;

    border: 1px solid #111;
    border-radius: 50%;

    font-size: 11px;
    line-height: 1;
    flex-shrink: 0;
}


/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 1100px) {

    .careers-jobs-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .careers-life-container {
        grid-template-columns: 1fr;
    }

    .careers-life-image {
        height: 450px;
    }

    .careers-life-content {
        padding: 25px;
    }
}


@media (max-width: 768px) {

    .careers-hiring-section,
    .careers-why-section,
    .careers-life-section {
        padding: 55px 0;
    }

    .careers-main-container,
    .careers-why-container,
    .careers-life-container {
        width: calc(100% - 30px);
    }

    .careers-main-title {
        font-size: 38px;
        margin-bottom: 35px;
    }


    /* JOBS */

    .careers-jobs-grid {
        grid-template-columns: 1fr;
        gap: 15px;
    }

    .career-job-card {
        min-height: 220px;
    }


    /* WHY */

    .careers-why-grid {
        grid-template-columns: 1fr;
    }

    .career-reason {
        grid-template-columns: 70px 1fr;
        padding: 25px 10px;
    }

    .career-reason:nth-child(odd) {
        border-right: 0;
    }

    .career-reason:nth-child(n+2) {
        border-top: 1px solid #dedee5;
    }

    .career-reason-content h3 {
        font-size: 25px;
    }

    .career-reason-content p {
        font-size: 15px;
    }


    /* LIFE */

    .careers-life-container {
        padding: 8px;
    }

    .careers-life-image {
        height: 320px;
    }

    .careers-life-content {
        padding: 20px 12px;
    }

    .careers-life-content h2 {
        font-size: 38px;
    }

    .careers-life-content > p {
        font-size: 15px;
    }

    .careers-life-list li {
        font-size: 15px;
    }
}


@media (max-width: 480px) {

    .career-job-bottom {
        align-items: flex-start;
    }

    .career-job-type {
        font-size: 15px;
    }

    .career-apply-btn {
        padding: 9px 14px;
        font-size: 15px;
    }

    .career-reason {
        grid-template-columns: 55px 1fr;
        gap: 12px;
    }

    .career-reason-icon {
        width: 50px;
        height: 50px;
    }

    .career-reason-icon img {
        width: 50px;
        height: 50px;
    }
}
</style>

@endsection