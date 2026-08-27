<header class="site-header">
    <div class="header-inner">
        <div class="header-row">
            <a href="{{ route('home') }}" class="logo-link">
                <img src="{{ asset('images/logo-white.svg') }}" alt="ASCENTech" class="logo-img">
            </a>
        </div>
    </div>
</header>

<style>
.site-header {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 30;
}
.header-inner {
    max-width: 1200px;
    margin: 0 auto;
    padding: 28px 24px;
}
.header-row {
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.logo-img {
    height: 56px !important;
    width: auto;
}
@media (min-width: 768px) {
    .logo-img { height: 40px; }
}
</style>