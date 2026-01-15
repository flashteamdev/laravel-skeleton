<footer class="bg-gray-900 text-gray-300 transition-colors duration-300 dark:bg-gray-950">
  <div class="mx-auto max-w-7xl px-4 py-12 sm:px-6 lg:px-8 lg:py-16">
    <div class="xl:grid xl:grid-cols-3 xl:gap-8">
      <div class="space-y-8 xl:col-span-1">
        <a href="{{ route('home') }}" class="flex items-center space-x-2">
          <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-indigo-500">
            <x-icon-bolt class="size-5 text-white" width="20" height="20" />
          </div>
          <span class="text-xl font-bold tracking-tight text-white">Laravel Skeleton</span>
        </a>
        <p class="text-base text-gray-400">
          Making the world a better place through elegant code and powerful applications. Start your journey
          today.
        </p>
        <div class="flex space-x-6">
          <a href="#" class="text-gray-400 transition-colors hover:text-white">
            <span class="sr-only">Twitter</span>
            <x-icon-twitter class="size-6" width="24" height="24" />
          </a>
          <a href="#" class="text-gray-400 transition-colors hover:text-white">
            <span class="sr-only">GitHub</span>
            <x-icon-github class="size-6" width="24" height="24" />
          </a>
        </div>
      </div>
      <div class="mt-12 grid grid-cols-2 gap-8 xl:col-span-2 xl:mt-0">
        <div class="md:grid md:grid-cols-2 md:gap-8">
          <div>
            <h3 class="text-sm font-semibold uppercase tracking-wider text-white">Product</h3>
            <ul class="mt-4 space-y-4">
              <li><a href="#" class="text-base text-gray-400 hover:text-white">Features</a></li>
              <li><a href="#" class="text-base text-gray-400 hover:text-white">Integrations</a></li>
              <li><a href="#" class="text-base text-gray-400 hover:text-white">Pricing</a></li>
            </ul>
          </div>
          <div class="mt-12 md:mt-0">
            <h3 class="text-sm font-semibold uppercase tracking-wider text-white">Support</h3>
            <ul class="mt-4 space-y-4">
              <li><a href="#" class="text-base text-gray-400 hover:text-white">Documentation</a>
              </li>
              <li><a href="#" class="text-base text-gray-400 hover:text-white">Guides</a></li>
              <li><a href="#" class="text-base text-gray-400 hover:text-white">API Reference</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="md:grid md:grid-cols-2 md:gap-8">
          <div>
            <h3 class="text-sm font-semibold uppercase tracking-wider text-white">Company</h3>
            <ul class="mt-4 space-y-4">
              <li><a href="#" class="text-base text-gray-400 hover:text-white">About</a></li>
              <li><a href="#" class="text-base text-gray-400 hover:text-white">Blog</a></li>
              <li><a href="#" class="text-base text-gray-400 hover:text-white">Jobs</a></li>
            </ul>
          </div>
          <div class="mt-12 md:mt-0">
            <h3 class="text-sm font-semibold uppercase tracking-wider text-white">Legal</h3>
            <ul class="mt-4 space-y-4">
              <li><a href="#" class="text-base text-gray-400 hover:text-white">Privacy</a></li>
              <li><a href="#" class="text-base text-gray-400 hover:text-white">Terms</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="mt-12 border-t border-gray-800 pt-8">
      <p class="text-base text-gray-400 xl:text-center">
        &copy; {{ date('Y') }} Laravel Skeleton, Inc. All rights reserved.
      </p>
    </div>
  </div>
</footer>
