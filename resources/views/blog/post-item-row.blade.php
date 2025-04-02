<div class="blog relative rounded-md shadow-sm dark:shadow-gray-800 overflow-hidden">
    <div class="lg:flex relative">
        <div class="relative md:shrink-0">
            <img class="h-full w-full object-cover lg:w-52 lg:h-56" src="assets/images/blog/02.jpg" alt="">
        </div>
        <div class="p-6 flex flex-col lg:h-56 justify-center">
            <a href="{{ route('posts.show', $post) }}"
                class="title h5 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">{{ $post->title }}</a>
            <div class="my-auto">
                <p class="text-slate-400 mt-3">{{ $post->seo_description }}</p>
            </div>

            <div class="mt-4">
                <a href="{{ route('posts.show', $post) }}"
                    class="relative inline-block tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 font-normal hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read
                    More <iconify-icon icon="uil:arrow-right"></iconify-icon></a>
            </div>
        </div>
    </div>
</div><!--end content-->
