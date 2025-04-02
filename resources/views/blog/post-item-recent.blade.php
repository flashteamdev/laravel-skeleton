<div class="flex items-center mt-4">
    <img src="/assets/images/blog/08.jpg" class="h-16 rounded-md shadow-sm dark:shadow-gray-800" alt="{{ $post->title }}">

    <div class="ms-3">
        <a href="{{ route('posts.show', $post) }}" class="font-semibold hover:text-indigo-600">{{ $post->title }}</a>
        <p class="text-sm text-slate-400">{{ $post->updated_at->format('Y-m-d') }}</p>
    </div>
</div>
