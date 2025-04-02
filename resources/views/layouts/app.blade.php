<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', config('app.name'))</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="@yield('description', '...')">
    {{-- <meta name="keywords" content=""> --}}
    <meta name="author" content="{{ config('app.name') }}">
    <meta name="website" content="{{ config('app.url') }}">
    <meta name="email" content="{{ config('app.admin_email') }}">
    <meta name="version" content="3.0.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- favicon -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico">

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css'])
    @endif

    @stack('styles')
</head>

<body class="font-nunito text-base text-slate-900 dark:text-white dark:bg-slate-900">
    <!-- Loader Start -->
    {{-- <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div> --}}
    <!-- Loader End -->

    @include('layouts.partials.navbar')

    {{-- @yield('hero') --}}
    @include('layouts.partials.hero2')

    <!-- Main Content -->
    @yield('content')
    <!-- End Main Content -->

    @include('layouts.partials.footer')

    <!-- Back to top -->
    <a href="#" onclick="topFunction()" id="back-to-top"
        class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 end-5 size-9 text-center bg-indigo-600 text-white justify-center items-center">
        <i class="uil uil-arrow-up"></i>
    </a>
    <!-- Back to top -->


    <!-- Switcher -->
    <div class="fixed top-[30%] -right-2 z-50">
        <span class="relative inline-block rotate-90">
            <input type="checkbox" class="checkbox opacity-0 absolute" id="chk" />
            <label
                class="label bg-slate-900 dark:bg-white shadow-sm dark:shadow-gray-800 cursor-pointer rounded-full flex justify-between items-center p-1 w-14 h-8"
                for="chk">
                <i class="uil uil-moon text-[20px] text-yellow-500"></i>
                <i class="uil uil-sun text-[20px] text-yellow-500"></i>
                <span class="ball bg-white dark:bg-slate-900 rounded-full absolute top-[2px] left-[2px] size-7"></span>
            </label>
        </span>
    </div>
    <!-- Switcher -->

    <!-- JAVASCRIPTS -->
    <script src="/assets/libs/jarallax/jarallax.min.js"></script>
    <script src="/assets/libs/shufflejs/shuffle.min.js"></script>
    {{-- <script src="/assets/libs/tobii/js/tobii.min.js"></script> --}}
    {{-- <script src="/assets/libs/tiny-slider/min/tiny-slider.js"></script> --}}

    <script src="/assets/js/plugins.init.js"></script>
    <script src="/assets/js/app.js"></script>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/js/app.js'])
    @endif
    <!-- JAVASCRIPTS -->

    @stack('scripts')
</body>

</html>
