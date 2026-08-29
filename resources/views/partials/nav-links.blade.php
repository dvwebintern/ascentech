<nav class="main-nav" x-data="{ productsOpen: false, insightsOpen: false }">
    <a href="{{ route('home') }}" class="nav-link">Home</a>
    <a href="{{ route('about') }}" class="nav-link">About Us</a>

    <div class="nav-dropdown" @mouseenter="productsOpen = true" @mouseleave="productsOpen = false">
        <button class="nav-link nav-dropdown-btn">
            Products
            <svg class="nav-caret" viewBox="0 0 12 12" fill="none"><path d="M2 4l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </button>
        <div class="nav-dropdown-menu" x-show="productsOpen" x-cloak>
            <a href="{{ route('products.nagarkaryavali') }}" class="nav-dropdown-item">Nagarkaryavali</a>
            <a href="{{ route('products.banking') }}" class="nav-dropdown-item">Banking Solutions</a>
        </div>
    </div>

    <a href="{{ route('services') }}" class="nav-link">Services</a>

    <div class="nav-dropdown" @mouseenter="insightsOpen = true" @mouseleave="insightsOpen = false">
        <button class="nav-link nav-dropdown-btn">
            Insights
            <svg class="nav-caret" viewBox="0 0 12 12" fill="none"><path d="M2 4l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </button>
        <div class="nav-dropdown-menu" x-show="insightsOpen" x-cloak>
            <a href="{{ route('events') }}" class="nav-dropdown-item">Events</a>
            <a href="{{ route('awards') }}" class="nav-dropdown-item">Award and Certification</a>
            <a href="{{ route('news') }}" class="nav-dropdown-item">News & Media</a>
        </div>
    </div>

    <a href="{{ route('careers') }}" class="nav-link">Careers</a>
    <a href="{{ route('contact') }}" class="nav-link">Contact Us</a>
<button type="button" class="schedule" @click="$store.scheduleModal.open = true">
    <svg class="schedule-icon" viewBox="0 0 24 24" fill="none">
        <path d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.5.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.5 21 3 13.5 3 4.9 3 4.4 3.4 4 4 4h3.4c.6 0 1 .4 1 1 0 1.2.2 2.4.6 3.5.1.4 0 .8-.2 1l-2.2 2.3z" stroke="currentColor" stroke-width="1.5"/>
    </svg>
    Schedule Call
</button></nav>

<style>
   .schedule {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    border-radius: 999px;
    border: 1px solid #000;
    padding: 10px 20px;
    font-family: "Inter Tight", sans-serif;
    font-size: 15px;
    font-weight: 500;
    color: #000;
    text-decoration: none;
    transition: background 0.2s ease, color 0.2s ease;
}
.schedule:hover {
    background: #000;
    color: #fff;
}
.schedule-icon {
    width: 16px;
    height: 16px;
    flex-shrink: 0;
}
.main-nav {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 32px;
    font-size: 14px;
    font-weight: 500;
    color: #2E3192;
}
.nav-link {
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 2px;
    background: none;
    border: none;
    font-family: "Inter Tight", sans-serif;
    font-size: 17px;
    font-weight: 400;
    color: rgb(0, 0, 0);
    border-style: none;
    padding: 0px 10px 0px 0px;
    cursor: pointer;
    transition: color 0.2s ease;
}
.nav-link:hover {
    color: #868686;
}
.nav-link:active {
    color: #868686;
}
.nav-caret {
    width: 12px;
    height: 12px;
    margin-top: 2px;
}
.nav-dropdown {
    position: relative;
}
.nav-dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    background: #fff;
    color: #2E3192;
    box-shadow: 0 10px 25px rgba(0,0,0,0.12);
    border-radius: 8px;
    margin-top: 0px;
    width: 224px;
    padding: 8px 0;
    z-index: 50;
}
.nav-dropdown-item {
    display: block;
    padding: 8px 16px;
    color: inherit;
    text-decoration: none;
}
.nav-dropdown-item:hover {
    background: #f3f4f6;
}
</style>