<!-- Footer Start -->
<footer class="relative bg-slate-900 dark:bg-slate-800 text-gray-200 dark:text-gray-200">
    <div class="container relative">
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <div class="py-[60px] px-0">
                    <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
                        <div class="lg:col-span-4 md:col-span-12">
                            <a href="#" class="text-[22px] focus:outline-none flex gap-2 items-center">
                                <img src="/logo.svg" alt="{{ config('app.name') }} Logo">
                                <span>{{ config('app.name') }}</span>
                            </a>
                            <p class="mt-6 text-gray-300">Cẩm nang toàn diện về cuộc sống tại Nhật Bản</p>
                            {{-- <ul class="list-none mt-6">
                                <li class="inline"><a href="https://1.envato.market/techwind" target="_blank"
                                        class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i
                                            class="uil uil-shopping-cart align-middle" title="Buy Now"></i></a></li>
                            </ul><!--end icon--> --}}
                        </div><!--end col-->

                        <div class="lg:col-span-2 md:col-span-4">
                            <h5 class="tracking-[1px] text-gray-100 font-semibold">Company</h5>
                            <ul class="list-none footer-list mt-6">
                                <li><a href="#"
                                        class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i
                                            class="uil uil-angle-right-b me-1"></i> About us</a></li>
                                <li class="mt-[10px]"><a href="#"
                                        class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i
                                            class="uil uil-angle-right-b me-1"></i> Blog</a></li>
                            </ul>
                        </div><!--end col-->

                        <div class="lg:col-span-3 md:col-span-4">
                            <h5 class="tracking-[1px] text-gray-100 font-semibold">Usefull Links</h5>
                            <ul class="list-none footer-list mt-6">
                                <li><a href="#"
                                        class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i
                                            class="uil uil-angle-right-b me-1"></i> Terms of Services</a></li>
                                <li class="mt-[10px]"><a href="#"
                                        class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i
                                            class="uil uil-angle-right-b me-1"></i> Privacy Policy</a></li>
                            </ul>
                        </div><!--end col-->

                        <div class="lg:col-span-3 md:col-span-4">
                            <h5 class="tracking-[1px] text-gray-100 font-semibold">Newsletter</h5>
                            <p class="mt-6">Sign up and receive the latest tips via email.</p>
                            <form>
                                <div class="grid grid-cols-1">
                                    <div class="foot-subscribe my-3">
                                        <label class="form-label">Write your email <span
                                                class="text-red-600">*</span></label>
                                        <div class="form-icon relative mt-2">
                                            <iconify-icon icon="feather:mail"
                                                class="w-4 h-4 absolute top-3 start-4"></iconify-icon>
                                            <input type="email"
                                                class="form-input ps-12 rounded w-full py-2 px-3 h-10 bg-gray-800 border-0 text-gray-100 focus:shadow-none focus:ring-0"
                                                placeholder="Email" name="email" required="">
                                        </div>
                                    </div>

                                    <button type="submit" id="submitsubscribe" name="send"
                                        class="py-2 px-5 inline-block tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Subscribe</button>
                                </div>
                            </form>
                        </div><!--end col-->
                    </div><!--end grid-->
                </div><!--end col-->
            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="py-[30px] px-0 border-t border-slate-800">
        <div class="container relative text-center">
            <div class="grid md:grid-cols-2 items-center">
                <div class="md:text-start text-center">
                    <p class="mb-0">©
                        <script>
                            document.write(new Date().getFullYear())
                        </script> {{ config('app.name') }} with <i
                            class="mdi mdi-heart text-red-600"></i>
                    </p>
                </div>

                {{-- <ul class="list-none md:text-end text-center mt-6 md:mt-0">
                    <li class="inline"><a href=""><img src="assets/images/payments/american-ex.png"
                                class="max-h-6 inline" title="American Express" alt=""></a></li>
                    <li class="inline"><a href=""><img src="assets/images/payments/discover.png"
                                class="max-h-6 inline" title="Discover" alt=""></a></li>
                    <li class="inline"><a href=""><img src="assets/images/payments/master-card.png"
                                class="max-h-6 inline" title="Master Card" alt=""></a></li>
                    <li class="inline"><a href=""><img src="assets/images/payments/paypal.png"
                                class="max-h-6 inline" title="Paypal" alt=""></a></li>
                    <li class="inline"><a href=""><img src="assets/images/payments/visa.png"
                                class="max-h-6 inline" title="Visa" alt=""></a></li>
                </ul> --}}
            </div><!--end grid-->
        </div><!--end container-->
    </div>
</footer><!--end footer-->
<!-- Footer End -->
