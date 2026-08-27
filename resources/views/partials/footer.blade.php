<!-- =========================================================
     ASCENTECH FOOTER
========================================================= -->

<footer class="ascentech-footer">

    <div class="ascentech-footer-container">

        <!-- =================================================
             FOLLOW US
        ================================================== -->

        <div class="footer-column footer-social-column">

            <h3>Follow Us</h3>

            <div class="footer-social-links">

                <a href="#"
                   class="footer-social-icon instagram"
                   aria-label="Instagram"
                   target="_blank">
                    <i class="fa-brands fa-instagram"></i>
                </a>

                <a href="#"
                   class="footer-social-icon facebook"
                   aria-label="Facebook"
                   target="_blank">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>

                <a href="#"
                   class="footer-social-icon linkedin"
                   aria-label="LinkedIn"
                   target="_blank">
                    <i class="fa-brands fa-linkedin-in"></i>
                </a>

                <a href="#"
                   class="footer-social-icon x-social"
                   aria-label="X"
                   target="_blank">
                    <i class="fa-brands fa-x-twitter"></i>
                </a>

                <a href="#"
                   class="footer-social-icon youtube"
                   aria-label="YouTube"
                   target="_blank">
                    <i class="fa-brands fa-youtube"></i>
                </a>

            </div>

        </div>


        <!-- =================================================
             QUICK LINKS
        ================================================== -->

        <div class="footer-column footer-links-column">

            <h3>Quick Links</h3>

            <div class="footer-quick-links">

                <div class="footer-links-group">

                    <a href="{{ url('/') }}">
                        Home
                    </a>

                    <a href="{{ url('/products') }}">
                        Products
                    </a>

                    <a href="{{ url('/awards') }}">
                        Awards
                    </a>

                    <a href="{{ url('/news-media') }}">
                        News &amp; Media
                    </a>

                    <a href="{{ url('/events') }}">
                        Events
                    </a>

                </div>


                <div class="footer-links-group">

                    <a href="{{ url('/careers') }}">
                        Careers
                    </a>

                    <a href="{{ url('/about-us') }}">
                        About Us
                    </a>

                    <a href="{{ url('/contact-us') }}">
                        Contact Us
                    </a>

                </div>

            </div>

        </div>


        <!-- =================================================
             GET IN TOUCH
        ================================================== -->

        <div class="footer-column footer-contact-column">

            <h3>Get In Touch</h3>


            <!-- PHONE 1 -->

            <a href="tel:+918657953083"
               class="footer-contact-item">

                <span class="footer-contact-icon">

                    <i class="fa-solid fa-phone"></i>

                </span>

                <span>
                    +91 86579 53083
                </span>

            </a>


            <!-- PHONE 2 -->

            <a href="tel:+919967791198"
               class="footer-contact-item">

                <span class="footer-contact-icon">

                    <i class="fa-solid fa-phone"></i>

                </span>

                <span>
                    +91 99677 91198
                </span>

            </a>


            <!-- EMAIL -->

            <a href="mailto:management@ascentechindia.com"
               class="footer-contact-item">

                <span class="footer-contact-icon">

                    <i class="fa-regular fa-envelope"></i>

                </span>

                <span>
                    management@ascentechindia.com
                </span>

            </a>

        </div>


        <!-- =================================================
             ADDRESS
        ================================================== -->

        <div class="footer-column footer-address-column">

            <h3>Address</h3>


            <!-- CORPORATE OFFICE -->

            <div class="footer-address-item">

                <div class="footer-address-icon">

                    <i class="fa-regular fa-location-dot"></i>

                </div>


                <div class="footer-address-content">

                    <strong>
                        Corporate Office
                    </strong>

                    <p>
                        Unit no. 202, Chirag Infotech, Ambika Nagar,
                        Wagle Industrial Estate, Thane (West) – 400604
                    </p>

                </div>

            </div>


            <!-- DIVIDER -->

            <div class="footer-address-divider"></div>


            <!-- DEVELOPMENT CENTRE -->

            <div class="footer-address-item">

                <div class="footer-address-icon">

                    <i class="fa-regular fa-location-dot"></i>

                </div>


                <div class="footer-address-content">

                    <strong>
                        Development Centre
                    </strong>

                    <p>
                        101, Yashwant Darshan P. P. Marg,
                        Virat Nagar, Virar (West) Palghar – 401303
                    </p>

                </div>

            </div>

        </div>


        <!-- =================================================
             COPYRIGHT
        ================================================== -->

        <div class="footer-copyright">

            <p>
                © {{ date('Y') }} ASCENTech Information Technology Pvt. Ltd.
                All rights reserved.
            </p>

        </div>

    </div>

</footer>



<!-- =========================================================
     STICKY PAGE NAVIGATION
========================================================= -->

<div class="ascentech-sticky-navigation">

    <!-- BACK -->

    <button
        type="button"
        class="ascentech-nav-button"
        id="ascentechBackButton"
        aria-label="Go back"
        title="Go Back">

        <i class="fa-solid fa-arrow-left"></i>

    </button>


    <!-- TOP -->

    <button
        type="button"
        class="ascentech-nav-button"
        id="ascentechTopButton"
        aria-label="Go to top"
        title="Go To Top">

        <i class="fa-solid fa-arrow-up"></i>

    </button>


    <!-- DOWN -->

    <button
        type="button"
        class="ascentech-nav-button"
        id="ascentechDownButton"
        aria-label="Scroll down"
        title="Scroll Down">

        <i class="fa-solid fa-arrow-down"></i>

    </button>


    <!-- HOME -->

    <a
        href="{{ url('/') }}"
        class="ascentech-nav-button ascentech-home-button"
        aria-label="Home"
        title="Home">

        <i class="fa-solid fa-house"></i>

    </a>

</div>



<!-- =========================================================
     FOOTER CSS
========================================================= -->

<style>

/* =========================================================
   FOOTER BASE
========================================================= */

.ascentech-footer {
    width: 100%;
    padding: 65px 0 35px;
    background: #ffffff;
}


.ascentech-footer-container {

    width: calc(100% - 12%);
    max-width: 1525px;

    margin: 0 auto;

    padding: 28px 28px 22px 28px ;

    display: grid;

    grid-template-columns:
        155px
        350px
        360px
        minmax(300px, 1fr);

    column-gap: 25px;
    row-gap: 20px;

    background: #f9f8f8;

    border: 1px solid #e3e3e3;

    border-radius: 38px;

    box-sizing: border-box;
}


/* =========================================================
   FOOTER HEADINGS
========================================================= */

.ascentech-footer .footer-column h3 {

    margin: 0 0 18px;

    font-family: 'Inter', sans-serif;

    font-size: 22px;

    line-height: 1.2;

    font-weight: 700;

    color: #1d1d1f;

}


/* =========================================================
   SOCIAL ICONS
========================================================= */

.footer-social-links {

    display: flex;

    flex-direction: column;

    gap: 9px;

    padding-left: 6px;

}


.footer-social-icon {

    width: 38px;
    height: 38px;

    display: flex;

    align-items: center;
    justify-content: center;

    border-radius: 50%;

    text-decoration: none;

    font-size: 18px;

    transition:
        transform .25s ease,
        opacity .25s ease;

}


.footer-social-icon:hover {

    transform: translateY(-3px);

    opacity: .8;

}


/* INSTAGRAM */

.footer-social-icon.instagram {

    color: #e1306c;

    background: #fceaf2;

}


/* FACEBOOK */

.footer-social-icon.facebook {

    color: #243f91;

    background: #eef0f8;

}


/* LINKEDIN */

.footer-social-icon.linkedin {

    color: #1267a8;

    background: #eaf3fa;

}


/* X */

.footer-social-icon.x-social {

    color: #111111;

    background: #eeeeee;

}


/* YOUTUBE */

.footer-social-icon.youtube {

    color: #ff0000;

    background: #ffecec;

}


/* =========================================================
   QUICK LINKS
========================================================= */

.footer-quick-links {

    display: grid;

    grid-template-columns: 1fr 1fr;

    column-gap: 35px;

}


.footer-links-group a {

    display: block;

    margin-bottom: 10px;

    color: #222222;

    text-decoration: none;

    font-family: 'Inter', sans-serif;

    font-size: 16px;

    line-height: 1.2;

    transition:
        color .2s ease,
        transform .2s ease;

}


.footer-links-group a:hover {

    color: #2e3192;

    transform: translateX(3px);

}


/* =========================================================
   CONTACT
========================================================= */

.footer-contact-item {

    display: flex;

    align-items: center;

    gap: 13px;

    margin-bottom: 14px;

    color: #272727;

    text-decoration: none;

    font-family: 'Inter', sans-serif;

     font-size: 16px;

    line-height: 1.2;

}


.footer-contact-item:hover {

    color: #2e3192;

}


.footer-contact-icon {

    width: 22px;

    flex-shrink: 0;

    font-size: 20px;

    color: #333333;

}


/* =========================================================
   ADDRESS
========================================================= */

.footer-address-item {

    display: flex;

    align-items: flex-start;

    gap: 14px;

}


.footer-address-icon {

    flex-shrink: 0;

    width: 22px;

    font-size: 21px;

    color: #333333;

}


.footer-address-content strong {

    display: block;

    margin-bottom: 5px;

    font-family: 'Inter', sans-serif;

    font-size: 16px;

    font-weight: 700;

    color: #202020;

}


.footer-address-content p {

    margin: 0;

    font-family: 'Inter', sans-serif;
 font-size: 16px;

    line-height: 1.4;

    color: #282828;

}


.footer-address-divider {

    height: 1px;

    margin: 18px 0;

    background: #dddddd;

}


/* =========================================================
   COPYRIGHT
========================================================= */

.footer-copyright {

    grid-column: 1 / -1;

    margin-top: 5px;

    padding-top: 18px;

    border-top: 1px solid #dddddd;

    text-align: center;

}


.footer-copyright p {

    margin: 0;

    font-family: 'Inter', sans-serif;

    font-size: 16px;

    color: #999999;

}


/* =========================================================
   STICKY NAVIGATION
========================================================= */

.ascentech-sticky-navigation {

    position: fixed;

    right: 28px;

    bottom: 22px;

    z-index: 999999;

    display: flex;

    flex-direction: column;

    gap: 10px;

}

.ascentech-sticky-navigation {
    opacity: 0;
    visibility: hidden;
    transform: translateY(12px);
    transition: opacity 0.3s ease, transform 0.3s ease, visibility 0.3s ease;
}
.ascentech-sticky-navigation.nav-visible {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}
.ascentech-nav-disabled {
    opacity: 0.35 !important;
    cursor: not-allowed !important;
    pointer-events: none;
}
/* =========================================================
   NAV BUTTON
========================================================= */

.ascentech-nav-button {

    width: 52px;

    height: 52px;

    padding: 0;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 50%;

    border: 1px solid #d6e1ef;

    background: #ffffff;

    color: #0055b8;

    font-size: 20px;

    text-decoration: none;

    cursor: pointer;

    box-sizing: border-box;

    box-shadow:
        0 2px 8px rgba(0, 0, 0, .03);

    transition:
        background .25s ease,
        color .25s ease,
        transform .25s ease,
        box-shadow .25s ease;

}


.ascentech-nav-button:hover {

    background: #f4f8fd;

    color: #0055b8;

    transform: translateY(-2px);

    box-shadow:
        0 5px 15px rgba(0, 0, 0, .08);

}


/* =========================================================
   HOME BUTTON
========================================================= */

.ascentech-home-button {

    background: #0755a8;

    border-color: #0755a8;

    color: #ffffff;

}


.ascentech-home-button:hover {

    background: #06478d;

    border-color: #06478d;

    color: #ffffff;

}


/* =========================================================
   TABLET
========================================================= */

@media (max-width: 1200px) {

    .ascentech-footer-container {

        grid-template-columns:
            140px
            1fr
            1fr;

    }


    .footer-address-column {

        grid-column: 2 / 4;

    }

}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 767px) {

    .ascentech-footer {

        padding: 40px 0 25px;

    }


    .ascentech-footer-container {

        width: calc(100% - 30px);

        grid-template-columns: 1fr;

        padding: 30px 22px 20px;

        border-radius: 26px;

        row-gap: 30px;

    }


    .footer-address-column {

        grid-column: auto;

    }


    .ascentech-footer .footer-column h3 {

        font-size: 24px;

    }


    .footer-social-links {

        flex-direction: row;

        flex-wrap: wrap;

        padding-left: 0;

    }


    .footer-quick-links {

        column-gap: 20px;

    }


    .footer-links-group a {

        font-size: 17px;

    }


    .footer-contact-item {

        font-size: 16px;

    }


    .footer-address-content p {

        font-size: 16px;

    }


    .footer-copyright p {

        font-size: 14px;

        line-height: 1.5;

    }


    /* STICKY BUTTONS */

    .ascentech-sticky-navigation {

        right: 12px;

        bottom: 15px;

        gap: 7px;

    }


    .ascentech-nav-button {

        width: 44px;

        height: 44px;

        font-size: 17px;

    }

}

</style>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const stickyNav = document.querySelector('.ascentech-sticky-navigation');
    const backButton = document.getElementById('ascentechBackButton');
    const topButton = document.getElementById('ascentechTopButton');
    const downButton = document.getElementById('ascentechDownButton');

    const isHomePage = window.location.pathname === '/' || window.location.pathname === '';
    const siteOrigin = window.location.origin;
    const referrerIsInternal = document.referrer && document.referrer.startsWith(siteOrigin);

    /* =====================================================
       SHOW/HIDE STICKY NAV BASED ON SCROLL PAST HERO
    ===================================================== */

    function updateStickyNavVisibility() {
        if (!stickyNav) return;

        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        const heroSection = document.querySelector('.hero-section, .hero-bg');
        const threshold = heroSection ? heroSection.offsetHeight - 100 : 500;

        if (scrollTop > threshold) {
            stickyNav.classList.add('nav-visible');
        } else {
            stickyNav.classList.remove('nav-visible');
        }
    }

    window.addEventListener('scroll', updateStickyNavVisibility, { passive: true });
    updateStickyNavVisibility();

    /* =====================================================
       BACK BUTTON
       - Home page: faded, disabled, no action
       - Other pages: go back only if referrer is internal,
         otherwise fall back to home (never leaves the site)
    ===================================================== */

    if (backButton) {
        if (isHomePage) {
            backButton.classList.add('ascentech-nav-disabled');
            backButton.setAttribute('aria-disabled', 'true');
            backButton.setAttribute('tabindex', '-1');
        } else {
            backButton.addEventListener('click', function () {
                if (referrerIsInternal && window.history.length > 1) {
                    window.history.back();
                } else {
                    window.location.href = "{{ route('home') }}";
                }
            });
        }
    }

    /* =====================================================
       TOP BUTTON
    ===================================================== */

    if (topButton) {
        topButton.addEventListener('click', function () {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    /* =====================================================
       DOWN BUTTON
    ===================================================== */

    if (downButton) {
        downButton.addEventListener('click', function () {
            window.scrollBy({ top: window.innerHeight * 0.75, behavior: 'smooth' });
        });
    }

    /* =====================================================
       TOP/DOWN BUTTON FADE STATE
    ===================================================== */

    function updateTopDownButtons() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        const documentHeight = document.documentElement.scrollHeight;
        const windowHeight = window.innerHeight;

        if (topButton) {
            if (scrollTop <= 20) {
                topButton.style.opacity = '0.45';
                topButton.style.pointerEvents = 'none';
            } else {
                topButton.style.opacity = '1';
                topButton.style.pointerEvents = 'auto';
            }
        }

        if (downButton) {
            const reachedBottom = scrollTop + windowHeight >= documentHeight - 20;
            if (reachedBottom) {
                downButton.style.opacity = '0.45';
                downButton.style.pointerEvents = 'none';
            } else {
                downButton.style.opacity = '1';
                downButton.style.pointerEvents = 'auto';
            }
        }
    }

    window.addEventListener('scroll', updateTopDownButtons, { passive: true });
    updateTopDownButtons();

});
</script>