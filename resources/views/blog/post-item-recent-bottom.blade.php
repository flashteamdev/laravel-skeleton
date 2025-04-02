<div class="flex items-center">
    <img src="assets/images/blog/01.jpg" class="lg:h-20 h-16 rounded-md shadow-sm dark:shadow-gray-800"
        alt="{{ $post->title }}">

    <div class="ms-3">
        <a href="" class="font-semibold hover:text-indigo-600">{{ $post->title }}</a>
        <p class="text-sm text-slate-400 mt-1">{{ $post->updated_at->format('Y-m-d') }}</p>
    </div>
</div>
