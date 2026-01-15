@extends('layouts.app')



@section('content')
  {{-- Hero Section --}}
  <section class="relative overflow-hidden bg-white pb-24 pt-16 transition-colors duration-300 sm:pb-32 sm:pt-24 lg:pt-32 dark:bg-gray-950">
    <!-- Decorative background elements -->
    <div class="w-7xl absolute left-1/2 top-0 -z-10 -translate-x-1/2 blur-3xl xl:-top-6" aria-hidden="true">
      <div class="aspect-1155/678 bg-linear-to-tr from-indigo-200 to-indigo-400 opacity-20 dark:from-indigo-900 dark:to-indigo-700" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
      </div>
    </div>

    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="lg:grid lg:grid-cols-2 lg:items-center lg:gap-x-8">
        <div class="mx-auto max-w-2xl text-center lg:mx-0 lg:text-left">
          <div class="mb-8">
            <span class="inline-flex items-center rounded-full border border-indigo-100 bg-indigo-50 px-4 py-1.5 text-sm font-semibold uppercase tracking-wide text-indigo-700 dark:border-indigo-800 dark:bg-indigo-900/30 dark:text-indigo-300">
              New v2.0 is out
            </span>
          </div>
          <h1 class="text-5xl font-extrabold tracking-tight text-gray-900 sm:text-7xl dark:text-white">
            Build your next idea <span class="text-indigo-600 dark:text-indigo-400">faster</span> than ever.
          </h1>
          <p class="mt-8 text-lg leading-8 text-gray-600 sm:text-xl dark:text-gray-400">
            Laravel Skeleton is a premium starter kit with everything you need to build modern web applications.
            From authentication to team management, we've got you covered.
          </p>
          <div class="mt-10 flex flex-col items-center justify-center gap-4 sm:flex-row lg:justify-start">
            <a href="#" class="inline-flex w-full transform items-center justify-center rounded-full border border-transparent bg-indigo-600 px-8 py-4 text-lg font-semibold text-white shadow-lg shadow-indigo-200 transition-all duration-200 hover:scale-105 hover:bg-indigo-700 sm:w-auto">
              Get started for free
            </a>
            <a href="#" class="inline-flex w-full items-center justify-center rounded-full border border-gray-200 bg-white px-8 py-4 text-lg font-semibold text-gray-700 transition-all duration-200 hover:bg-gray-50 sm:w-auto dark:border-gray-800 dark:bg-gray-900 dark:text-gray-300 dark:hover:bg-gray-800">
              View Demo
              <x-icon-arrow-right class="ml-2 size-5" width="20" height="20" />
            </a>
          </div>
          <div class="mt-10 flex items-center justify-center space-x-4 opacity-60 grayscale lg:justify-start">
            <span class="text-sm font-medium text-gray-500">Trusted by:</span>
            <div class="flex space-x-4">
              <!-- Placeholder for partner logos -->
              <span class="font-bold text-gray-400 dark:text-gray-600">TECH</span>
              <span class="font-bold text-gray-400 dark:text-gray-600">FLOW</span>
              <span class="font-bold text-gray-400 dark:text-gray-600">PULSE</span>
            </div>
          </div>
        </div>
        <div class="relative mt-16 sm:mt-24 lg:mt-0">
          <div class="relative mx-auto w-full max-w-lg lg:max-w-none">
            <div class="bg-linear-to-br relative block w-full transform overflow-hidden rounded-3xl border border-white from-indigo-100 to-white p-4 shadow-2xl lg:rotate-2 dark:border-gray-800 dark:from-indigo-950 dark:to-gray-900">
              <img class="w-full rounded-2xl border border-gray-100 shadow-sm dark:border-gray-800" src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" alt="App screenshot">
            </div>
            <!-- Accent elements -->
            <div class="absolute -right-6 -top-6 h-24 w-24 rounded-full bg-indigo-400/10 blur-2xl"></div>
            <div class="absolute -bottom-6 -left-6 h-32 w-32 rounded-full bg-indigo-600/10 blur-2xl"></div>
          </div>
        </div>
      </div>
    </div>
  </section>


  {{-- Features Section --}}
  <section id="features" class="overflow-hidden bg-gray-50 py-24 transition-colors duration-300 dark:bg-gray-900/50">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="mx-auto mb-20 max-w-3xl text-center">
        <h2 class="text-base font-semibold uppercase leading-7 tracking-wide text-indigo-600 dark:text-indigo-400">
          Superior Performance
        </h2>
        <p class="mt-2 text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl dark:text-white">Everything you
          need to succeed
        </p>
        <p class="mt-6 text-lg leading-8 text-gray-600 dark:text-gray-400">
          Our starter kit comes packed with features that help you ship high-quality applications in record time.
        </p>
      </div>

      <div class="grid grid-cols-1 gap-12 md:grid-cols-2 lg:grid-cols-3">
        <!-- Feature 1 -->
        <div class="group relative rounded-3xl border border-gray-100 bg-white p-8 shadow-sm transition-all duration-300 hover:-translate-y-2 hover:shadow-xl dark:border-gray-700 dark:bg-gray-800 dark:hover:shadow-indigo-900/20">
          <div class="absolute -top-6 left-8">
            <div class="flex h-14 w-14 transform items-center justify-center rounded-2xl bg-indigo-600 shadow-lg shadow-indigo-100 transition-transform group-hover:rotate-12 dark:bg-indigo-500 dark:shadow-none">
              <x-icon-lock class="size-8 text-white" width="32" height="32" />
            </div>
          </div>
          <h3 class="mt-4 text-xl font-bold text-gray-900 dark:text-white">Secure Auth</h3>
          <p class="mt-4 leading-relaxed text-gray-600 dark:text-gray-400">
            Pre-configured authentication with social login support and multi-factor security out of the box.
          </p>
        </div>

        <!-- Feature 2 -->
        <div class="group relative rounded-3xl border border-gray-100 bg-white p-8 shadow-sm transition-all duration-300 hover:-translate-y-2 hover:shadow-xl dark:border-gray-700 dark:bg-gray-800 dark:hover:shadow-indigo-900/20">
          <div class="absolute -top-6 left-8">
            <div class="flex h-14 w-14 transform items-center justify-center rounded-2xl bg-indigo-600 shadow-lg shadow-indigo-100 transition-transform group-hover:rotate-12 dark:bg-indigo-500 dark:shadow-none">
              <x-icon-users class="size-8 text-white" width="32" height="32" />
            </div>
          </div>
          <h3 class="mt-4 text-xl font-bold text-gray-900 dark:text-white">Team Collaboration</h3>
          <p class="mt-4 leading-relaxed text-gray-600 dark:text-gray-400">
            Powerful team management features including roles, permissions, and invitation systems.
          </p>
        </div>

        <!-- Feature 3 -->
        <div class="group relative rounded-3xl border border-gray-100 bg-white p-8 shadow-sm transition-all duration-300 hover:-translate-y-2 hover:shadow-xl dark:border-gray-700 dark:bg-gray-800 dark:hover:shadow-indigo-900/20">
          <div class="absolute -top-6 left-8">
            <div class="flex h-14 w-14 transform items-center justify-center rounded-2xl bg-indigo-600 shadow-lg shadow-indigo-100 transition-transform group-hover:rotate-12 dark:bg-indigo-500 dark:shadow-none">
              <x-icon-bolt class="size-8 text-white" width="32" height="32" />
            </div>
          </div>
          <h3 class="mt-4 text-xl font-bold text-gray-900 dark:text-white">High Performance</h3>
          <p class="mt-4 leading-relaxed text-gray-600 dark:text-gray-400">
            Built for speed with native support for caching, background jobs, and optimized assets delivery.
          </p>
        </div>
      </div>
    </div>
  </section>


  {{-- Call to Action Section --}}
  <section class="overflow-hidden bg-white py-24 transition-colors duration-300 dark:bg-gray-950">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="relative isolate overflow-hidden rounded-3xl bg-indigo-600 px-6 py-24 shadow-2xl sm:px-24 xl:py-32 dark:bg-indigo-700">
        <h2 class="mx-auto max-w-2xl text-center text-3xl font-bold tracking-tight text-white sm:text-4xl">
          Ready to transform your development workflow?
        </h2>
        <p class="mx-auto mt-6 max-w-xl text-center text-lg leading-8 text-indigo-100">
          Join over 1,000+ developers building amazing things with our skeleton. Start your 14-day free trial
          today.
        </p>
        <div class="mt-10 flex items-center justify-center gap-x-6">
          <a href="#" class="rounded-full bg-white px-8 py-4 text-lg font-semibold text-indigo-600 shadow-sm transition-all duration-200 hover:bg-indigo-50">
            Get started now
          </a>
          <a href="#" class="text-lg font-semibold leading-6 text-white transition-colors hover:text-indigo-100">
            Learn more <span aria-hidden="true">→</span>
          </a>
        </div>
        <!-- Background effects -->
        <svg viewBox="0 0 1024 1024" class="h-256 w-5xl mask-[radial-gradient(closest-side,white,transparent)] absolute left-1/2 top-1/2 -z-10 -translate-x-1/2" aria-hidden="true">
          <circle cx="512" cy="512" r="512" fill="url(#circle-gradient)" fill-opacity="0.15" />
          <defs>
            <radialGradient id="circle-gradient">
              <stop stop-color="white" />
              <stop offset="1" stop-color="white" />
            </radialGradient>
          </defs>
        </svg>
      </div>
    </div>
  </section>


  {{-- Testimonials Section --}}
  <section id="testimonials" class="bg-white py-24 transition-colors duration-300 dark:bg-gray-950">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="mx-auto mb-16 max-w-3xl text-center">
        <h2 class="text-base font-semibold uppercase leading-7 tracking-wide text-indigo-600 dark:text-indigo-400">
          Real Results</h2>
        <p class="mt-2 text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl dark:text-white">Loved by
          developers everywhere
        </p>
      </div>

      <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
        @foreach ($testimonials as $testimonial)
          <div class="flex flex-col justify-between rounded-3xl border border-gray-100 bg-gray-50 p-8 transition-colors hover:border-indigo-100 dark:border-gray-800 dark:bg-gray-900 dark:hover:border-indigo-900">
            <div>
              <div class="mb-4 flex items-center space-x-1">
                @for ($i = 0; $i < ($testimonial['star'] ?? 5); $i++)
                  <x-icon-star class="size-5 text-yellow-400" width="20" height="20" />
                @endfor
              </div>
              <p class="italic leading-relaxed text-gray-700 dark:text-gray-300">
                "{{ $testimonial['testimonial'] }}"
              </p>
            </div>
            <div class="mt-8 flex items-center space-x-4">
              <img class="h-12 w-12 rounded-full border-2 border-white object-cover shadow-sm dark:border-gray-800" src="{{ $testimonial['image'] }}" alt="{{ $testimonial['name'] }}">
              <div>
                <p class="text-sm font-bold text-gray-900 dark:text-white">{{ $testimonial['name'] }}</p>
                <p class="text-xs text-gray-500 dark:text-gray-400">{{ $testimonial['position'] }}</p>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
@endsection
