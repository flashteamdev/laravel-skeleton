@extends('layouts.app')

@section('title', 'Blog - Techwind Tailwind CSS Multipurpose Template')
@section('description', 'Latest blog posts and news from Techwind')

@section('hero-title', 'Blogs & News')
@section('hero-subtitle', 'Blogs')

{{-- @section('hero')
    @include('layouts.partials.hero')
@endsection --}}

@section('content')
    <!-- Start Section-->
    <section class="relative md:py-24 py-16">
        <div class="container relative">
            <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
                <div class="lg:col-span-8 md:col-span-6">
                    <div class="p-6 rounded-md shadow-sm dark:shadow-gray-800">

                        <h1 class="text-3xl font-bold mb-6">{{ $post->title }}</h1>

                        <img src="/assets/images/blog/slide02.jpg" class="rounded-md" alt="">

                        <div class="mt-6">
                            @if ($post->content_type == 'html')
                                {!! $post->content !!}
                            @elseif ($post->content_type == 'markdown')
                                {!! str($post->content)->markdown()->sanitizeHtml() !!}
                            @endif
                        </div>
                    </div>

                    @if ($comments ?? false)
                        <div class="p-6 rounded-md shadow-sm dark:shadow-gray-800 mt-8">
                            <h5 class="text-lg font-semibold">Comments:</h5>

                            @each('blog.comment-row', $comments ?? [], 'comment')
                        </div>
                    @endif

                    <div class="p-6 rounded-md shadow-sm dark:shadow-gray-800 mt-8">
                        <h5 class="text-lg font-semibold">Leave A Comment:</h5>

                        <form class="mt-8">
                            <div class="grid lg:grid-cols-12 lg:gap-6">
                                <div class="lg:col-span-6 mb-5">
                                    <div class="text-start">
                                        <label for="name" class="font-semibold">Your Name:</label>
                                        <div class="form-icon relative mt-2">
                                            <iconify-icon icon="feather:user"
                                                class="size-4 absolute top-3 start-4"></iconify-icon>
                                            <input name="name" id="name" type="text"
                                                class="form-input ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                                placeholder="Name :">
                                        </div>
                                    </div>
                                </div>

                                <div class="lg:col-span-6 mb-5">
                                    <div class="text-start">
                                        <label for="email" class="font-semibold">Your Email:</label>
                                        <div class="form-icon relative mt-2">
                                            <iconify-icon icon="feather:mail"
                                                class="size-4 absolute top-3 start-4"></iconify-icon>
                                            <input name="email" id="email" type="email"
                                                class="form-input ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                                placeholder="Email :">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="grid grid-cols-1">
                                <div class="mb-5">
                                    <div class="text-start">
                                        <label for="comments" class="font-semibold">Your Comment:</label>
                                        <div class="form-icon relative mt-2">
                                            <iconify-icon icon="feather:message-circle"
                                                class="size-4 absolute top-3 start-4"></iconify-icon>
                                            <textarea name="comments" id="comments"
                                                class="form-input ps-11 w-full py-2 px-3 h-28 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                                placeholder="Message :"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" id="submit" name="send"
                                class="py-2 px-5 inline-block tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md w-full">Send
                                Message</button>
                        </form>
                    </div>
                </div>

                @include('blog.blog-right', [
                    'author' => $post->author,
                ])
            </div><!--end grid-->
        </div><!--end container-->

        <div class="container relative md:mt-24 mt-16">
            <div class="md:flex justify-center">
                <div class="lg:w-2/3 text-center">
                    <h3 class="md:text-3xl text-2xl md:leading-normal leading-normal font-semibold mb-6">Subscribe our
                        weekly subscription</h3>

                    <p class="text-slate-400 max-w-xl mx-auto">Add some text to explain benefits of subscripton on your
                        services. We'll send you the best of our blog just once a weekly.</p>

                    <div class="mt-8">
                        <div class="text-center subcribe-form">
                            <form class="relative mx-auto max-w-xl">
                                <input type="email" id="subemail" name="name"
                                    class="py-4 pe-40 ps-6 w-full h-[50px] outline-none text-slate-900 dark:text-white rounded-full bg-white/70 dark:bg-slate-900/70 border border-gray-100 dark:border-gray-800"
                                    placeholder="Enter your email id..">
                                <button type="submit"
                                    class="py-2 px-5 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center absolute top-[2px] end-[3px] h-[46px] bg-indigo-600 hover:bg-indigo-700 border border-indigo-600 hover:border-indigo-700 text-white rounded-full">Subcribe
                                    Now</button>
                            </form><!--end form-->
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->
@endsection
