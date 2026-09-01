<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'ASCENTech')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
    rel="stylesheet"
>
    {{-- Alpine.js --}}
    <script
        defer
        src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js">
    </script>
    
</head>

<body class="text-gray-800 antialiased">
    
    <main>
        @yield('content')
    </main>

    {{-- Schedule Call Popup --}}
    @include('partials.schedule-call-modal')

    @include('partials.career-apply-modal')

    {{-- Footer --}}
    @include('partials.footer')


    {{-- =====================================================
         ALPINE + SCHEDULE CALL
    ====================================================== --}}

    <script>
        document.addEventListener('alpine:init', () => {

            Alpine.store('scheduleModal', {
                open: false
            });

        });
    </script>

    <script>
        document.addEventListener('click', function (event) {

            const button = event.target.closest('[data-schedule-call]');

            if (!button) {
                return;
            }

            event.preventDefault();

            console.log('Schedule Call clicked');

            if (window.Alpine) {

                Alpine.store('scheduleModal').open = true;

                console.log('Popup opened');

            } else {

                console.log('Alpine is NOT loaded');

            }

        });
    </script>

</body>

</html>