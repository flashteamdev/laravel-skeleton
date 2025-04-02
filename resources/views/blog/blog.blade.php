@extends('layouts.app')

@section('title', 'Blog')
@section('description', 'Bài đăng trên blog mới nhất và tin tức')

@section('hero-title', 'Blogs & News')
@section('hero-subtitle', 'Blogs')

@section('hero')
    @include('layouts.partials.hero2')
@endsection

<?php
$categories = \App\Models\Blog\Category::getAllFromCache();
?>

@section('content')
    <div class="relative">
        <div
            class="shape absolute sm:-bottom-px -bottom-[2px] start-0 end-0 overflow-hidden z-1 text-white dark:text-slate-900">
            <svg class="w-full h-auto scale-[2.0] origin-top" viewBox="0 0 2880 48" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!-- End -->

    <!-- Start -->
    <!-- FEATURES START -->
    <section class="relative md:py-24 py-16">
        <div class="container relative">
            <div class="grid grid-cols-1 justify-center">
                <div class="relative z-2 duration-500 sm:-mt-[220px] -mt-[200px] m-0">
                    <div class="filters-group-wrap">
                        <div class="filters-group">
                            <ul class="mb-0 list-none container-filter-white filter-options space-x-3 text-center">
                                <li class="inline-block text-lg font-semibold mb-3 cursor-pointer relative border-b border-transparent text-white/70 duration-500 active"
                                    data-group="all">All</li>

                                @foreach ($categories as $category)
                                    <li class="inline-block text-lg font-semibold mb-3 cursor-pointer relative border-b border-transparent text-white/70 duration-500"
                                        data-group="{{ $category->slug }}">{{ $category->name }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div id="grid" class="md:flex justify-center mx-auto mt-4">
                        @each('blog.post-item-card', $posts, 'post', 'view.empty')
                    </div>
                </div>
            </div><!--end grid-->
        </div><!--end container-->

        {{-- <div class="container relative mt-16">
            <div
                class="relative bg-white dark:bg-slate-900 lg:px-8 px-6 py-10 rounded-xl shadow-sm dark:shadow-gray-800 overflow-hidden">
                <div class="grid md:grid-cols-2 grid-cols-1 items-center gap-[30px]">
                    <div class="md:text-start text-center z-1">
                        <h3 class="md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Subscribe to
                            Newsletter!</h3>
                        <p class="text-slate-400 max-w-xl mx-auto mt-2">Subscribe to get latest updates and information.
                        </p>
                    </div>

                    <div class="subcribe-form z-1">
                        <form class="relative max-w-xl">
                            <input type="email" id="subcribe" name="email"
                                class="py-4 pe-40 ps-6 w-full h-[50px] outline-none text-slate-900 dark:text-white rounded-full bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-800"
                                placeholder="Your Email Address :">
                            <button type="submit"
                                class="py-2 px-5 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center absolute top-[2px] end-[3px] h-[46px] bg-indigo-600 hover:bg-indigo-700 border border-indigo-600 hover:border-indigo-700 text-white rounded-full">Subscribe</button>
                        </form><!--end form-->
                    </div>
                </div>

                <div class="absolute -top-5 -start-5">
                    <div class="uil uil-envelope lg:text-[150px] text-7xl text-slate-900/5 dark:text-white/5 -rotate-45">
                    </div>
                </div>

                <div class="absolute -bottom-5 -end-5">
                    <div class="uil uil-pen lg:text-[150px] text-7xl text-slate-900/5 dark:text-white/5"></div>
                </div>
            </div>
        </div> --}}

        <div class="container relative mt-16">
            <div class="grid md:grid-cols-12 grid-cols-1 pb-8 items-end">
                <div class="lg:col-span-8 md:col-span-6 md:text-start text-center">
                    <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Our Featured News
                        Post</h3>
                    <p class="text-slate-400 max-w-xl">Search your future opportunity with our categories</p>
                </div>

                <div class="lg:col-span-4 md:col-span-6 md:text-end hidden md:block">
                    <a href=""
                        class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-slate-400 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">All
                        Categories <iconify-icon icon="uil:arrow-right align-middle"></iconify-icon></a>
                </div>
            </div><!--end grid-->

            <div class="grid md:grid-cols-12 grid-cols-1 mt-8 gap-[30px]">
                <div class="lg:col-span-8 md:col-span-6">
                    <div class="grid grid-cols-1 gap-[30px]">
                        @each('blog.post-item-row', $posts, 'post', 'view.empty')
                    </div>
                </div>

                @include('blog.blog-right')
            </div><!--end grid-->
        </div><!--end container-->

        <div class="container relative md:mt-24 mt-16">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Recent Posts</h3>
                <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you
                    need to generate awareness, drive traffic, connect.</p>
            </div><!--end grid-->

            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
                @each('blog.post-item-recent-bottom', $posts, 'post', 'view.empty')
            </div>
        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->

@endsection
