<nav x-data="theme" class="sticky top-0 z-50 border-b border-gray-100 bg-white/80 backdrop-blur-md transition-colors duration-300 dark:border-gray-800 dark:bg-gray-950/80">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="flex h-20 justify-between">
      <div class="flex items-center">
        <!-- Logo -->
        <a href="{{ route('home') }}" class="flex items-center space-x-2">
          <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-indigo-600 shadow-lg shadow-indigo-200">
            <x-icon-bolt class="size-6 text-white" width="24" height="24" />
          </div>
          <span class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">Laravel<span class="text-indigo-600">Skeleton</span></span>
        </a>
      </div>

      <!-- Desktop Menu -->
      <div class="hidden items-center space-x-8 md:flex">
        <a href="#features" class="text-sm font-medium text-gray-600 transition-colors hover:text-indigo-600 dark:text-gray-400 dark:hover:text-indigo-400">Features</a>
        <a href="#testimonials" class="text-sm font-medium text-gray-600 transition-colors hover:text-indigo-600 dark:text-gray-400 dark:hover:text-indigo-400">Testimonials</a>

        <!-- Theme Toggle -->
        <button @click="toggle()" class="rounded-full p-2 text-gray-500 transition-colors hover:bg-gray-100 focus:outline-none dark:text-gray-400 dark:hover:bg-gray-900">
          <x-icon-sun x-show="!darkMode" x-cloak class="size-5" width="20" height="20" />
          <x-icon-moon x-show="darkMode" x-cloak class="size-5" width="20" height="20" />
        </button>

        <a href="/login" class="text-sm font-medium text-gray-600 transition-colors hover:text-indigo-600 dark:text-gray-400 dark:hover:text-indigo-400">Log in</a>
        <a href="/register" class="inline-flex items-center rounded-full border border-transparent bg-indigo-600 px-5 py-2.5 text-sm font-medium text-white shadow-sm transition-all duration-200 hover:bg-indigo-700 focus:outline-none"> Get Started </a>
      </div>

      <!-- Mobile menu button -->
      <div class="flex items-center space-x-2 md:hidden">
        <!-- Theme Toggle Mobile -->
        <button @click="toggle()" class="rounded-full p-2 text-gray-500 transition-colors hover:bg-gray-100 focus:outline-none dark:text-gray-400 dark:hover:bg-gray-900">
          <x-icon-sun x-show="!darkMode" x-cloak class="size-5" width="20" height="20" />
          <x-icon-moon x-show="darkMode" x-cloak class="size-5" width="20" height="20" />
        </button>

        <button @click="open = !open" class="text-gray-500 hover:text-gray-600 focus:outline-none dark:text-gray-400 dark:hover:text-gray-300">
          <x-icon-menu x-show="!open" x-cloak stroke-linecap="round" stroke-linejoin="round" stroke-width="2" width="24" height="24" />
          <x-icon-x x-show="open" x-cloak stroke-linecap="round" stroke-linejoin="round" stroke-width="2" width="24" height="24" />
        </button>
      </div>
    </div>
  </div>

  <!-- Mobile Menu -->
  <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-100" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="border-t border-gray-100 bg-white md:hidden dark:border-gray-800 dark:bg-gray-950">
    <div class="space-y-1 px-2 pb-3 pt-2">
      <a href="#features" class="block rounded-lg px-3 py-4 text-base font-medium text-gray-700 hover:bg-gray-50 dark:text-gray-300 dark:hover:bg-gray-900">Features</a>
      <a href="#testimonials" class="block rounded-lg px-3 py-4 text-base font-medium text-gray-700 hover:bg-gray-50 dark:text-gray-300 dark:hover:bg-gray-900">Testimonials</a>

      <div class="border-t border-gray-100 pb-1 pt-4 dark:border-gray-800">
        <a href="/login" class="block rounded-lg px-3 py-4 text-base font-medium text-gray-700 hover:bg-gray-50 dark:text-gray-300 dark:hover:bg-gray-900">Log in</a>
        <a href="/register" class="block px-3 py-4 text-base font-semibold text-indigo-600 dark:text-indigo-400">Get Started</a>
      </div>
    </div>
  </div>
</nav>
