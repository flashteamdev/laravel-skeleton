<?php
$categories = \App\Models\Blog\Category::getAllFromCache();
?>
<!-- Start Navbar -->
<nav id="topnav" class="defaultscroll is-sticky">
    <div class="container relative">
        <!-- Logo container-->
        <a class="logo" href="/">
            <span class="inline-block dark:hidden">
                <img src="/logo.svg" class="h-10 l-dark" height="24" alt="">
                <img src="/logo.svg" class="h-10 l-light" height="24" alt="">
            </span>
            <img src="/logo.svg" height="24" class="hidden dark:inline-block" alt="">
            <span>{{ config('app.name') }}</span>
        </a>

        <!-- End Logo container-->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

        <!--Login button Start-->
        <ul class="buy-button list-none mb-0">
            <li class="inline mb-0">
                <a href="">
                    <span class="login-btn-primary">
                        <span
                            class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-indigo-600/5 hover:bg-indigo-600 border border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white">
                            <iconify-icon icon="feather:settings" class="size-4 iconify-icon"></iconify-icon>
                        </span>
                    </span>
                    <span class="login-btn-light">
                        <span
                            class="size-9 inline-flex items-center justify-center tracking-wide border border-gray-50 align-middle duration-500 text-base text-center rounded-full bg-gray-50 hover:bg-gray-200 dark:bg-slate-900 dark:hover:bg-gray-700 hover:border-gray-100 dark:border-gray-800 dark:hover:border-gray-700">
                            <iconify-icon icon="feather:settings" class="size-4 iconify-icon"></iconify-icon>
                        </span>
                    </span>
                </a>
            </li>

            <li class="inline ps-1 mb-0">
                <a href="https://1.envato.market/techwind" target="_blank">
                    <div class="login-btn-primary">
                        <span
                            class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border border-indigo-600 hover:border-indigo-700 text-white">
                            <iconify-icon icon="feather:shopping-cart" class="size-4"></iconify-icon>
                        </span>
                    </div>
                    <div class="login-btn-light">
                        <span
                            class="size-9 inline-flex items-center justify-center tracking-wide border border-gray-50 align-middle duration-500 text-base text-center rounded-full bg-gray-50 hover:bg-gray-200 dark:bg-slate-900 dark:hover:bg-gray-700 hover:border-gray-100 dark:border-gray-800 dark:hover:border-gray-700">
                            <iconify-icon icon="feather:shopping-cart" class="size-4"></iconify-icon>
                        </span>
                    </div>
                </a>
            </li>
        </ul>
        <!--Login button End-->

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu nav-light">
                <li><a href="index.html" class="sub-menu-item">Home</a></li>

                <li class="has-submenu parent-menu-item">
                    <a href="javascript:void(0)">Danh mục</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        @foreach ($categories as $category)
                            <li><a href="/category/{{ $category->slug }}" class="sub-menu-item">{{ $category->name }}
                                </a></li>
                        @endforeach
                    </ul>
                </li>

                <li><a href="contact-one.html" class="sub-menu-item">Contact</a></li>
            </ul><!--end navigation menu-->
        </div><!--end navigation-->
    </div><!--end container-->
</nav><!--end header-->
<!-- End Navbar -->
