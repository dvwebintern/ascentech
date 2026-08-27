<header class="simple-header">
    <div class="simple-header-inner">
        <a href="{{ route('home') }}">
            <img src="{{ asset('images/logo.svg') }}" alt="ASCENTech" class="simple-header-logo">
        </a>
        <div class="simple-header-nav">
            @include('partials.nav-links')
        </div>
        <a href="tel:+918657953083" class="simple-header-call">Schedule Call</a>
    </div>
</header>

<style>
.simple-header {
    background: #2E3192;
    color: #fff;
    position: sticky;
    top: 0;
    z-index: 50;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
}
.simple-header-inner {
    max-width: 1200px;
    margin: 0 auto;
    padding: 16px 24px;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.simple-header-logo {
    height: 36px;
}
.simple-header-nav {
    display: none;
}
.simple-header-nav .main-nav { color: #fff; }
.simple-header-nav .main-nav .nav-link:hover { color: #A58D32; }
.simple-header-call {
    display: none;
    align-items: center;
    gap: 8px;
    border: 1px solid rgba(255,255,255,0.4);
    border-radius: 999px;
    padding: 10px 20px;
    color: #fff;
    text-decoration: none;
    font-size: 14px;
    font-weight: 500;
    transition: background 0.2s ease, color 0.2s ease;
}
.simple-header-call:hover {
    background: #fff;
    color: #2E3192;
}
@media (min-width: 1024px) {
    .simple-header-nav { display: block; }
    .simple-header-call { display: inline-flex; }
}
</style>