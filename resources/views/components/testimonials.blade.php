@props(['testimonials' => []])

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
