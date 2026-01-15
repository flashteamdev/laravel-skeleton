<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  {!! SEO::generate() !!}

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">

  <!-- Dark Mode Detection (Immediate execution to prevent flicker) -->
  <script>
    if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia(
        '(prefers-color-scheme: dark)').matches)) {
      document.documentElement.classList.add('dark');
    } else {
      document.documentElement.classList.remove('dark');
    }
  </script>

  <!-- Styles -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white font-sans text-gray-900 antialiased transition-colors duration-300 selection:bg-indigo-500 selection:text-white dark:bg-gray-950 dark:text-gray-100">
  <div class="flex min-h-screen flex-col">
    @include('partials.navbar')

    <main class="grow">
      @yield('content')
    </main>

    @include('partials.footer')
  </div>

  <!-- Scroll to top button -->
  <button id="scrollToTop" class="fixed bottom-8 right-8 z-50 translate-y-10 rounded-full bg-indigo-600 p-3 text-white opacity-0 shadow-lg transition-all duration-300 hover:bg-indigo-700 focus:outline-none dark:bg-indigo-500 dark:hover:bg-indigo-600">
    <x-icon-arrow-up class="size-6" width="24" height="24" />
  </button>

  <script>
    const scrollBtn = document.getElementById('scrollToTop');
    window.addEventListener('scroll', () => {
      if (window.scrollY > 300) {
        scrollBtn.classList.remove('opacity-0', 'translate-y-10');
      } else {
        scrollBtn.classList.add('opacity-0', 'translate-y-10');
      }
    });
    scrollBtn.addEventListener('click', () => {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });
  </script>
</body>

</html>
