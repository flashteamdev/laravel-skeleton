<div class="lg:col-span-4 md:col-span-6">
    <div class="sticky top-20">
        @if ($author ?? false)
            <div class="mb-8">
                <h5
                    class="text-lg font-semibold bg-gray-50 dark:bg-slate-800 shadow-sm dark:shadow-gray-800 rounded-md p-2 text-center">
                    Tác giả</h5>
                <div class="text-center mt-8">
                    <img src="/assets/images/client/05.jpg" class="size-24 mx-auto rounded-full shadow-sm mb-4"
                        alt="">

                    <a href="#"
                        class="text-lg font-semibold hover:text-indigo-600 duration-500">{{ $author->name }}</a>
                    <p class="text-slate-400">Content Writer</p>
                </div>
            </div>
        @endif

        <h5
            class="text-lg font-semibold bg-gray-50 dark:bg-slate-800 shadow-sm dark:shadow-gray-800 rounded-md p-2 text-center">
            Bài viết gần đây</h5>

        @each('blog.post-item-recent', $posts ?? [], 'post')


        <h5
            class="text-lg font-semibold bg-gray-50 dark:bg-slate-800 shadow-sm dark:shadow-gray-800 rounded-md p-2 text-center mt-8">
            Mạng xã hội</h5>
        <ul class="list-none text-center mt-8">
            <li class="inline">
                <a href=""
                    class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-indigo-600 hover:text-white hover:bg-indigo-600">
                    <iconify-icon icon="feather:facebook" class="size-4"></iconify-icon>
                </a>
            </li>
        </ul><!--end icon-->

        <h5
            class="text-lg font-semibold bg-gray-50 dark:bg-slate-800 shadow-sm dark:shadow-gray-800 rounded-md p-2 text-center mt-8">
            Thẻ</h5>
        <ul class="list-none text-center mt-8">
            @include('blog.tag-item')
        </ul>
    </div>
</div>
