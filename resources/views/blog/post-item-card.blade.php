<div class="lg:w-1/3 md:w-1/2 p-3 picture-item" data-groups='["{{ $post->category->slug }}"]'>
    <div class="blog relative rounded-md shadow-sm dark:shadow-gray-800 overflow-hidden">
        <img src="assets/images/blog/01.jpg" alt="">

        <div class="content p-6">
            <a href="{{ route('posts.show', $post) }}"
                class="title h5 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">{{ $post->title }}</a>
            <p class="text-slate-400 mt-3">{{ $post->seo_description }}</p>

            <div class="mt-4">
                <a href="{{ route('posts.show', $post) }}"
                    class="relative inline-block tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 font-normal hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read
                    More <iconify-icon class="" icon="uil:arrow-right"></iconify-icon></a>
            </div>
        </div>
    </div>
</div><!--end content-->
