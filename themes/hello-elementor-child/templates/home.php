<?php

/**
 * Template Name: Home 2
 * 
 */
get_header();
?>
<main class="flex flex-col gap-[24px] mt-[20px]">
    <!-- box banner -->
    <div class="container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-[11px]">
            <!-- Box chứa ảnh lớn -->
            <div class="md:col-span-3">
                <div class="w-full h-[334px]">
                    <!-- Chiều cao cố định -->
                    <img
                        src="https://dummyimage.com/600x334/000/fff"
                        alt="Digital piano in home setting"
                        class="w-full h-full object-cover" />
                </div>
            </div>

            <!-- Box chứa hai ảnh nhỏ -->
            <div class="space-y-[11px]">
                <div class="w-full h-[161px]">
                    <!-- Chiều cao cố định -->
                    <img
                        src="https://dummyimage.com/300x161/000/fff"
                        alt="Digital piano view 1"
                        class="w-full h-full object-cover" />
                </div>
                <div class="w-full h-[161px]">
                    <!-- Chiều cao cố định -->
                    <img
                        src="https://dummyimage.com/300x161/000/fff"
                        alt="Digital piano view 2"
                        class="w-full h-full object-cover" />
                </div>
            </div>
        </div>

        <!-- Box chứa banner dưới cùng -->
        <div
            class="w-full h-[150px] bg-gray-800 overflow-hidden relative mt-[15px]">
            <img
                src="https://dummyimage.com/1200x150/555/aaa"
                alt="Piano hands banner"
                class="w-full h-full object-cover" />
            <div
                class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
                <div class="text-center">
                    <h2 class="text-white text-2xl font-bold mb-1">VP ART HOUSE</h2>
                    <p class="text-white text-xs">
                        Chuyên cung cấp nhạc cụ Brand New - Like New
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- box list product  -->
    <div class="container mx-auto max-w-custom-content">
        <div class="max-w-custom-content mx-auto px-[25px] py-[20px] bg-white">
            <div class="flex items-center mb-6 gap-[15px]">
                <svg
                    width="26"
                    height="43"
                    viewBox="0 0 26 43"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M24.2845 0.566406C20.1482 6.64811 16.0133 12.7311 11.877 18.8129L15.5926 15.8934L24.749 2.09247C24.5937 1.58423 24.4398 1.07465 24.2845 0.566406Z"
                        fill="#F9AD19" />
                    <path
                        d="M0 22.7275V23.9219L12.2085 24.0546L11.8104 22.7275H0Z"
                        fill="#F9AD19" />
                    <path
                        d="M24.9478 15.9597L25.6114 17.2867L5.70614 42.5L4.64453 41.8365L24.9478 15.9597Z"
                        fill="#F9AD19" />
                    <path
                        d="M10.6161 0.566351L0 22.7275H11.6777L4.5782 41.9028L25.0142 15.8934L14 15.628L24.3507 0.5L10.6161 0.566351Z"
                        fill="#F5E80D" />
                    <path
                        d="M11.2796 2.09229H21.4976L12.3412 16.1586C8.91357 17.9501 5.48456 19.7416 2.05688 21.533C5.13158 15.0532 8.20494 8.5721 11.2796 2.09229Z"
                        fill="url(#paint0_linear_275_1799)" />
                    <path
                        d="M4.77734 41.571L21.0996 19.6753L12.8721 21.6658L4.77734 41.571Z"
                        fill="url(#paint1_linear_275_1799)" />
                    <defs>
                        <linearGradient
                            id="paint0_linear_275_1799"
                            x1="11.7773"
                            y1="21.533"
                            x2="11.7773"
                            y2="2.09229"
                            gradientUnits="userSpaceOnUse">
                            <stop stop-color="#F6E80D" stop-opacity="0" />
                            <stop
                                offset="0.09"
                                stop-color="#F5E60D"
                                stop-opacity="0.04" />
                            <stop
                                offset="0.24"
                                stop-color="#F5E10E"
                                stop-opacity="0.15" />
                            <stop
                                offset="0.43"
                                stop-color="#F5D910"
                                stop-opacity="0.32" />
                            <stop
                                offset="0.65"
                                stop-color="#F4CE12"
                                stop-opacity="0.57" />
                            <stop offset="0.9" stop-color="#F3C015" stop-opacity="0.87" />
                            <stop offset="1" stop-color="#F3BB17" />
                        </linearGradient>
                        <linearGradient
                            id="paint1_linear_275_1799"
                            x1="12.9385"
                            y1="19.6753"
                            x2="12.9385"
                            y2="41.571"
                            gradientUnits="userSpaceOnUse">
                            <stop stop-color="#F6E80D" stop-opacity="0" />
                            <stop
                                offset="0.09"
                                stop-color="#F5E60D"
                                stop-opacity="0.04" />
                            <stop
                                offset="0.24"
                                stop-color="#F5E10E"
                                stop-opacity="0.15" />
                            <stop
                                offset="0.43"
                                stop-color="#F5D910"
                                stop-opacity="0.32" />
                            <stop
                                offset="0.65"
                                stop-color="#F4CE12"
                                stop-opacity="0.57" />
                            <stop offset="0.9" stop-color="#F3C015" stop-opacity="0.87" />
                            <stop offset="1" stop-color="#F3BB17" />
                        </linearGradient>
                    </defs>
                </svg>

                <h2
                    class="text-2xl leading-[42px] font-[800] text-primary italic shadow-flashsale">
                    FLASH SALE
                </h2>
            </div>

            <div class="grid grid-cols-3 md:grid-cols-6">
                <!-- Product 1 -->
                <div class="relative bg-white p-[15px] pt-[7px]">
                    <span
                        class="absolute top-2 left-2 bg-red-500 text-white text-sm font-semibold px-2 py-1">- 20%</span>
                    <div class="image-product mb-[5px]">
                        <img
                            width="183"
                            height="182"
                            src="uploads/2024/10/piano_img.png"
                            alt="YAMAHA CLP 675"
                            class="w-full object-contain" />
                    </div>
                    <div class="flex flex-col gap-[10px]">
                        <h3 class="product-title text-center">YAMAHA CLP 675</h3>
                        <div class="flex mb-2 justify-center">
                            <svg
                                class="w-5 h-5 text-third fill-current"
                                viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg
                                class="w-5 h-5 text-third fill-current"
                                viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg
                                class="w-5 h-5 text-third fill-current"
                                viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg
                                class="w-5 h-5 text-third fill-current"
                                viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg
                                class="w-5 h-5 text-third fill-current"
                                viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        </div>
                        <div class="flex justify-center flex-wrap xl:justify-between">
                            <span class="product-price">24.000.000đ</span>
                            <del class="product-price-del">28.370.000đ</del>
                        </div>
                    </div>
                </div>
                <!-- Product 1 -->
                <div class="relative bg-white p-[15px] pt-[7px]">
                    <span
                        class="absolute top-2 left-2 bg-red-500 text-white text-sm font-semibold px-2 py-1">- 20%</span>
                    <div class="image-product mb-[5px]">
                        <img
                            width="183"
                            height="182"
                            src="uploads/2024/10/piano_img.png"
                            alt="YAMAHA CLP 675"
                            class="w-full object-contain" />
                    </div>
                    <div class="flex flex-col gap-[10px]">
                        <h3 class="product-title text-center">YAMAHA CLP 675</h3>
                        <div class="flex mb-2 justify-center">
                            <svg
                                class="w-5 h-5 text-third fill-current"
                                viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg
                                class="w-5 h-5 text-third fill-current"
                                viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg
                                class="w-5 h-5 text-third fill-current"
                                viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg
                                class="w-5 h-5 text-third fill-current"
                                viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg
                                class="w-5 h-5 text-third fill-current"
                                viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        </div>
                        <div class="flex justify-center flex-wrap xl:justify-between">
                            <span class="product-price">24.000.000đ</span>
                            <del class="product-price-del">28.370.000đ</del>
                        </div>
                    </div>
                </div>
                <!-- Product 1 -->
                <div class="relative bg-white p-[15px] pt-[7px]">
                    <span
                        class="absolute top-2 left-2 bg-red-500 text-white text-sm font-semibold px-2 py-1">- 20%</span>
                    <div class="image-product mb-[5px]">
                        <img
                            width="183"
                            height="182"
                            src="uploads/2024/10/piano_img.png"
                            alt="YAMAHA CLP 675"
                            class="w-full object-contain" />
                    </div>
                    <div class="flex flex-col gap-[10px]">
                        <h3 class="product-title text-center">YAMAHA CLP 675</h3>
                        <div class="flex mb-2 justify-center">
                            <svg
                                class="w-5 h-5 text-third fill-current"
                                viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg
                                class="w-5 h-5 text-third fill-current"
                                viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg
                                class="w-5 h-5 text-third fill-current"
                                viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg
                                class="w-5 h-5 text-third fill-current"
                                viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg
                                class="w-5 h-5 text-third fill-current"
                                viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        </div>
                        <div class="flex justify-center flex-wrap xl:justify-between">
                            <span class="product-price">24.000.000đ</span>
                            <del class="product-price-del">28.370.000đ</del>
                        </div>
                    </div>
                </div>
                <!-- Product 1 -->
                <div class="relative bg-white p-[15px] pt-[7px]">
                    <span
                        class="absolute top-2 left-2 bg-red-500 text-white text-sm font-semibold px-2 py-1">- 20%</span>
                    <div class="image-product mb-[5px]">
                        <img
                            width="183"
                            height="182"
                            src="uploads/2024/10/piano_img.png"
                            alt="YAMAHA CLP 675"
                            class="w-full object-contain" />
                    </div>
                    <div class="flex flex-col gap-[10px]">
                        <h3 class="product-title text-center">YAMAHA CLP 675</h3>
                        <div class="flex mb-2 justify-center">
                            <svg
                                class="w-5 h-5 text-third fill-current"
                                viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg
                                class="w-5 h-5 text-third fill-current"
                                viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg
                                class="w-5 h-5 text-third fill-current"
                                viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg
                                class="w-5 h-5 text-third fill-current"
                                viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg
                                class="w-5 h-5 text-third fill-current"
                                viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        </div>
                        <div class="flex justify-center flex-wrap xl:justify-between">
                            <span class="product-price">24.000.000đ</span>
                            <del class="product-price-del">28.370.000đ</del>
                        </div>
                    </div>
                </div>
                <!-- Product 1 -->
                <div class="relative bg-white p-[15px] pt-[7px]">
                    <span
                        class="absolute top-2 left-2 bg-red-500 text-white text-sm font-semibold px-2 py-1">- 20%</span>
                    <div class="image-product mb-[5px]">
                        <img
                            width="183"
                            height="182"
                            src="uploads/2024/10/piano_img.png"
                            alt="YAMAHA CLP 675"
                            class="w-full object-contain" />
                    </div>
                    <div class="flex flex-col gap-[10px]">
                        <h3 class="product-title text-center">YAMAHA CLP 675</h3>
                        <div class="flex mb-2 justify-center">
                            <svg
                                class="w-5 h-5 text-third fill-current"
                                viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg
                                class="w-5 h-5 text-third fill-current"
                                viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg
                                class="w-5 h-5 text-third fill-current"
                                viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg
                                class="w-5 h-5 text-third fill-current"
                                viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg
                                class="w-5 h-5 text-third fill-current"
                                viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        </div>
                        <div class="flex justify-center flex-wrap xl:justify-between">
                            <span class="product-price">24.000.000đ</span>
                            <del class="product-price-del">28.370.000đ</del>
                        </div>
                    </div>
                </div>
                <!-- Product 1 -->
                <div class="relative bg-white p-[15px] pt-[7px]">
                    <span
                        class="absolute top-2 left-2 bg-red-500 text-white text-sm font-semibold px-2 py-1">- 20%</span>
                    <div class="image-product mb-[5px]">
                        <img
                            width="183"
                            height="182"
                            src="uploads/2024/10/piano_img.png"
                            alt="YAMAHA CLP 675"
                            class="w-full object-contain" />
                    </div>
                    <div class="flex flex-col gap-[10px]">
                        <h3 class="product-title text-center">YAMAHA CLP 675</h3>
                        <div class="flex mb-2 justify-center">
                            <svg
                                class="w-5 h-5 text-third fill-current"
                                viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg
                                class="w-5 h-5 text-third fill-current"
                                viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg
                                class="w-5 h-5 text-third fill-current"
                                viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg
                                class="w-5 h-5 text-third fill-current"
                                viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg
                                class="w-5 h-5 text-third fill-current"
                                viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        </div>
                        <div class="flex justify-center flex-wrap xl:justify-between">
                            <span class="product-price">24.000.000đ</span>
                            <del class="product-price-del">28.370.000đ</del>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- box banner 2 -->
    <div class="container mx-auto">
        <!-- Banner -->
        <div class="flex flex-col md:flex-row gap-[8px] min-h-[222px]">
            <div
                style="background-image: url('uploads/2024/10/banner_2.png')"
                class="banner1 flex-1 bg-primary_1 relative">
                <div
                    class="content flex flex-col gap-[20px] items-start pt-[44px] pl-[42px]">
                    <div
                        class="title text-white text-[18px] font-semibold leading-[27px]">
                        <p class="">MUA ĐÀN LIỀN TAY</p>
                        <p class="">NHẬN NGAY ƯU ĐÃI</p>
                    </div>
                    <button
                        class="mt-2 text-white px-[16px] py-[10px] border border-white">
                        Mua ngay
                    </button>
                </div>
            </div>
            <div
                style="background-image: url('uploads/2024/10/banner_2.png')"
                class="banner1 flex-1 bg-primary_1 relative">
                <div
                    class="content flex flex-col gap-[20px] items-start pt-[44px] pl-[42px]">
                    <div
                        class="title text-white text-[18px] font-semibold leading-[27px]">
                        <p class="">MUA ĐÀN LIỀN TAY</p>
                        <p class="">NHẬN NGAY ƯU ĐÃI</p>
                    </div>
                    <button
                        class="mt-2 text-white px-[16px] py-[10px] border border-white">
                        Mua ngay
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- box cate  -->
    <div class="container mx-auto">
        <!-- Product Categories -->
        <div class="bg-white">
            <h3 class="title-heading pt-4 px-[25px] mb-[9px]">
                DANH MỤC SẢN PHẨM
            </h3>
            <hr class="border-gray-300" />
            <div class="grid grid-cols-4 md:grid-cols-8 divide-x">
                <div class="flex flex-col items-center py-[14px]">
                    <img
                        src="uploads/2024/10/cate_pro_image.png"
                        alt="Grand Piano"
                        class="h-[99px] w-auto mb-2" />
                    <span class="text-sm font-base text-center">GRAND</span>
                </div>
                <div class="flex flex-col items-center py-[14px]">
                    <img
                        src="uploads/2024/10/cate_pro_image.png"
                        alt="Grand Piano"
                        class="h-[99px] w-auto mb-2" />
                    <span class="text-sm text-center">GRAND</span>
                </div>
                <div class="flex flex-col items-center py-[14px]">
                    <img
                        src="uploads/2024/10/cate_pro_image.png"
                        alt="Grand Piano"
                        class="h-[99px] w-auto mb-2" />
                    <span class="text-sm text-center">GRAND</span>
                </div>
                <div class="flex flex-col items-center py-[14px]">
                    <img
                        src="uploads/2024/10/cate_pro_image.png"
                        alt="Grand Piano"
                        class="h-[99px] w-auto mb-2" />
                    <span class="text-sm text-center">GRAND</span>
                </div>
                <div class="flex flex-col items-center py-[14px]">
                    <img
                        src="uploads/2024/10/cate_pro_image.png"
                        alt="Grand Piano"
                        class="h-[99px] w-auto mb-2" />
                    <span class="text-sm text-center">GRAND</span>
                </div>
                <div class="flex flex-col items-center py-[14px]">
                    <img
                        src="uploads/2024/10/cate_pro_image.png"
                        alt="Grand Piano"
                        class="h-[99px] w-auto mb-2" />
                    <span class="text-sm text-center">GRAND</span>
                </div>
                <div class="flex flex-col items-center py-[14px]">
                    <img
                        src="uploads/2024/10/cate_pro_image.png"
                        alt="Grand Piano"
                        class="h-[99px] w-auto mb-2" />
                    <span class="text-sm text-center">GRAND</span>
                </div>
                <div class="flex flex-col items-center py-[14px]">
                    <img
                        src="uploads/2024/10/cate_pro_image.png"
                        alt="Grand Piano"
                        class="h-[99px] w-auto mb-2" />
                    <span class="text-sm text-center">GRAND</span>
                </div>
            </div>
        </div>
    </div>
    <!-- box blog 2 -->
    <div class="container mx-auto">
        <div class="flex space-x-2">
            <div class="item-blog relative flex-1 h-[208px]">
                <img
                    src="uploads/2024/10/img_blog.png"
                    alt="Trải nghiệm Piano Kawai"
                    class="absolute inset-0 w-full h-full object-cover" />
                <div
                    class="absolute bottom-0 left-5 right-5 bg-black bg-opacity-50 text-white py-[8px] px-[16px] mb-[10px]">
                    <h3 class="title mb-1">Trải nghiệm Piano Kawai</h3>
                    <p class="subtitle">
                        Sự lựa chọn hàng đầu của các trường âm nhạc, hướng dẫn con đường
                        âm nhạc chuyên nghiệp.
                    </p>
                </div>
            </div>
            <div class="item-blog relative flex-1 h-[208px]">
                <img
                    src="uploads/2024/10/img_blog.png"
                    alt="Trải nghiệm Piano Kawai"
                    class="absolute inset-0 w-full h-full object-cover" />
                <div
                    class="absolute bottom-0 left-5 right-5 bg-black bg-opacity-50 text-white py-[8px] px-[16px] mb-[10px]">
                    <h3 class="title mb-1">Trải nghiệm Piano Kawai</h3>
                    <p class="subtitle">
                        Sự lựa chọn hàng đầu của các trường âm nhạc, hướng dẫn con đường
                        âm nhạc chuyên nghiệp.
                    </p>
                </div>
            </div>
            <div class="item-blog relative flex-1 h-[208px]">
                <img
                    src="uploads/2024/10/img_blog.png"
                    alt="Trải nghiệm Piano Kawai"
                    class="absolute inset-0 w-full h-full object-cover" />
                <div
                    class="absolute bottom-0 left-5 right-5 bg-black bg-opacity-50 text-white py-[8px] px-[16px] mb-[10px]">
                    <h3 class="title mb-1">Trải nghiệm Piano Kawai</h3>
                    <p class="subtitle">
                        Sự lựa chọn hàng đầu của các trường âm nhạc, hướng dẫn con đường
                        âm nhạc chuyên nghiệp.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto">
        <div
            class="tab-section bg-white backdrop-filter backdrop-blur-lg bg-opacity-40 border-indigo-200">
            <div class="grid grid-cols-9 gap-1 bg-white">
                <div class="col-span-6 flex flex-row">
                    <button
                        class="p-4 text-gray-700 font-bold hover:text-primary flex-grow w-full border-b-4 border-transparent uppercase"
                        data-tab-target="#tab1">
                        Sản phẩm nổi bật
                    </button>
                    <button
                        class="p-4 text-gray-700 font-bold hover:text-primary flex-grow w-full border-b-4 border-transparent uppercase"
                        data-tab-target="#tab2">
                        New Piano - Best Selling
                    </button>
                    <button
                        class="p-4 text-gray-700 font-bold hover:text-primary flex-grow w-full border-b-4 border-transparent uppercase"
                        data-tab-target="#tab3">
                        Usef Piano - Best Selling
                    </button>
                </div>

                <div
                    class="col-span-3 items-center flex flex-row justify-end gap-[20px] pr-[25px]">
                    <div class="flex flex-row gap-3 max-h-[40px]">
                        <img
                            src="uploads/2024/10/brand.png"
                            alt="Casio"
                            class="h-[40px]" />
                        <img
                            src="uploads/2024/10/brand.png"
                            alt="Roland"
                            class="h-[40px]" />
                        <img
                            src="uploads/2024/10/brand.png"
                            alt="Apollo"
                            class="h-[40px]" />
                    </div>
                    <a href="#" class="text-base font-semibold">Xem tất cả</a>
                </div>
            </div>
            <hr class="border-gray-300" />
            <div class="p-5 bg-white">
                <div id="tab1" class="tab-content text-gray-700">
                    <div class="grid grid-rows-3 gap-[20px]">
                        <div class="grid grid-cols-3 md:grid-cols-5 gap-[57px]">
                            <!-- Product 1 -->
                            <div class="relative bg-white p-[15px] pt-[7px]">
                                <span
                                    class="absolute top-2 left-2 bg-red-500 text-white text-sm font-semibold px-2 py-1">- 20%</span>
                                <div class="image-product mb-[5px]">
                                    <img
                                        width="183"
                                        height="182"
                                        src="uploads/2024/10/piano_img.png"
                                        alt="YAMAHA CLP 675"
                                        class="w-full object-contain" />
                                </div>
                                <div class="flex flex-col gap-[10px]">
                                    <h3 class="product-title text-center">YAMAHA CLP 675</h3>
                                    <div class="flex mb-2 justify-center">
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </div>
                                    <div
                                        class="flex justify-center flex-wrap xl:justify-between">
                                        <span class="product-price">24.000.000đ</span>
                                        <del class="product-price-del">28.370.000đ</del>
                                    </div>
                                </div>
                            </div>
                            <!-- Product 1 -->
                            <div class="relative bg-white p-[15px] pt-[7px]">
                                <span
                                    class="absolute top-2 left-2 bg-red-500 text-white text-sm font-semibold px-2 py-1">- 20%</span>
                                <div class="image-product mb-[5px]">
                                    <img
                                        width="183"
                                        height="182"
                                        src="uploads/2024/10/piano_img.png"
                                        alt="YAMAHA CLP 675"
                                        class="w-full object-contain" />
                                </div>
                                <div class="flex flex-col gap-[10px]">
                                    <h3 class="product-title text-center">YAMAHA CLP 675</h3>
                                    <div class="flex mb-2 justify-center">
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </div>
                                    <div
                                        class="flex justify-center flex-wrap xl:justify-between">
                                        <span class="product-price">24.000.000đ</span>
                                        <del class="product-price-del">28.370.000đ</del>
                                    </div>
                                </div>
                            </div>
                            <!-- Product 1 -->
                            <div class="relative bg-white p-[15px] pt-[7px]">
                                <span
                                    class="absolute top-2 left-2 bg-red-500 text-white text-sm font-semibold px-2 py-1">- 20%</span>
                                <div class="image-product mb-[5px]">
                                    <img
                                        width="183"
                                        height="182"
                                        src="uploads/2024/10/piano_img.png"
                                        alt="YAMAHA CLP 675"
                                        class="w-full object-contain" />
                                </div>
                                <div class="flex flex-col gap-[10px]">
                                    <h3 class="product-title text-center">YAMAHA CLP 675</h3>
                                    <div class="flex mb-2 justify-center">
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </div>
                                    <div
                                        class="flex justify-center flex-wrap xl:justify-between">
                                        <span class="product-price">24.000.000đ</span>
                                        <del class="product-price-del">28.370.000đ</del>
                                    </div>
                                </div>
                            </div>
                            <!-- Product 1 -->
                            <div class="relative bg-white p-[15px] pt-[7px]">
                                <span
                                    class="absolute top-2 left-2 bg-red-500 text-white text-sm font-semibold px-2 py-1">- 20%</span>
                                <div class="image-product mb-[5px]">
                                    <img
                                        width="183"
                                        height="182"
                                        src="uploads/2024/10/piano_img.png"
                                        alt="YAMAHA CLP 675"
                                        class="w-full object-contain" />
                                </div>
                                <div class="flex flex-col gap-[10px]">
                                    <h3 class="product-title text-center">YAMAHA CLP 675</h3>
                                    <div class="flex mb-2 justify-center">
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </div>
                                    <div
                                        class="flex justify-center flex-wrap xl:justify-between">
                                        <span class="product-price">24.000.000đ</span>
                                        <del class="product-price-del">28.370.000đ</del>
                                    </div>
                                </div>
                            </div>
                            <!-- Product 1 -->
                            <div class="relative bg-white p-[15px] pt-[7px]">
                                <span
                                    class="absolute top-2 left-2 bg-red-500 text-white text-sm font-semibold px-2 py-1">- 20%</span>
                                <div class="image-product mb-[5px]">
                                    <img
                                        width="183"
                                        height="182"
                                        src="uploads/2024/10/piano_img.png"
                                        alt="YAMAHA CLP 675"
                                        class="w-full object-contain" />
                                </div>
                                <div class="flex flex-col gap-[10px]">
                                    <h3 class="product-title text-center">YAMAHA CLP 675</h3>
                                    <div class="flex mb-2 justify-center">
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </div>
                                    <div
                                        class="flex justify-center flex-wrap xl:justify-between">
                                        <span class="product-price">24.000.000đ</span>
                                        <del class="product-price-del">28.370.000đ</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-3 md:grid-cols-5 gap-[57px]">
                            <!-- Product 1 -->
                            <div class="relative bg-white p-[15px] pt-[7px]">
                                <span
                                    class="absolute top-2 left-2 bg-red-500 text-white text-sm font-semibold px-2 py-1">- 20%</span>
                                <div class="image-product mb-[5px]">
                                    <img
                                        width="183"
                                        height="182"
                                        src="uploads/2024/10/piano_img.png"
                                        alt="YAMAHA CLP 675"
                                        class="w-full object-contain" />
                                </div>
                                <div class="flex flex-col gap-[10px]">
                                    <h3 class="product-title text-center">YAMAHA CLP 675</h3>
                                    <div class="flex mb-2 justify-center">
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </div>
                                    <div
                                        class="flex justify-center flex-wrap xl:justify-between">
                                        <span class="product-price">24.000.000đ</span>
                                        <del class="product-price-del">28.370.000đ</del>
                                    </div>
                                </div>
                            </div>
                            <!-- Product 1 -->
                            <div class="relative bg-white p-[15px] pt-[7px]">
                                <span
                                    class="absolute top-2 left-2 bg-red-500 text-white text-sm font-semibold px-2 py-1">- 20%</span>
                                <div class="image-product mb-[5px]">
                                    <img
                                        width="183"
                                        height="182"
                                        src="uploads/2024/10/piano_img.png"
                                        alt="YAMAHA CLP 675"
                                        class="w-full object-contain" />
                                </div>
                                <div class="flex flex-col gap-[10px]">
                                    <h3 class="product-title text-center">YAMAHA CLP 675</h3>
                                    <div class="flex mb-2 justify-center">
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </div>
                                    <div
                                        class="flex justify-center flex-wrap xl:justify-between">
                                        <span class="product-price">24.000.000đ</span>
                                        <del class="product-price-del">28.370.000đ</del>
                                    </div>
                                </div>
                            </div>
                            <!-- Product 1 -->
                            <div class="relative bg-white p-[15px] pt-[7px]">
                                <span
                                    class="absolute top-2 left-2 bg-red-500 text-white text-sm font-semibold px-2 py-1">- 20%</span>
                                <div class="image-product mb-[5px]">
                                    <img
                                        width="183"
                                        height="182"
                                        src="uploads/2024/10/piano_img.png"
                                        alt="YAMAHA CLP 675"
                                        class="w-full object-contain" />
                                </div>
                                <div class="flex flex-col gap-[10px]">
                                    <h3 class="product-title text-center">YAMAHA CLP 675</h3>
                                    <div class="flex mb-2 justify-center">
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </div>
                                    <div
                                        class="flex justify-center flex-wrap xl:justify-between">
                                        <span class="product-price">24.000.000đ</span>
                                        <del class="product-price-del">28.370.000đ</del>
                                    </div>
                                </div>
                            </div>
                            <!-- Product 1 -->
                            <div class="relative bg-white p-[15px] pt-[7px]">
                                <span
                                    class="absolute top-2 left-2 bg-red-500 text-white text-sm font-semibold px-2 py-1">- 20%</span>
                                <div class="image-product mb-[5px]">
                                    <img
                                        width="183"
                                        height="182"
                                        src="uploads/2024/10/piano_img.png"
                                        alt="YAMAHA CLP 675"
                                        class="w-full object-contain" />
                                </div>
                                <div class="flex flex-col gap-[10px]">
                                    <h3 class="product-title text-center">YAMAHA CLP 675</h3>
                                    <div class="flex mb-2 justify-center">
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </div>
                                    <div
                                        class="flex justify-center flex-wrap xl:justify-between">
                                        <span class="product-price">24.000.000đ</span>
                                        <del class="product-price-del">28.370.000đ</del>
                                    </div>
                                </div>
                            </div>
                            <!-- Product 1 -->
                            <div class="relative bg-white p-[15px] pt-[7px]">
                                <span
                                    class="absolute top-2 left-2 bg-red-500 text-white text-sm font-semibold px-2 py-1">- 20%</span>
                                <div class="image-product mb-[5px]">
                                    <img
                                        width="183"
                                        height="182"
                                        src="uploads/2024/10/piano_img.png"
                                        alt="YAMAHA CLP 675"
                                        class="w-full object-contain" />
                                </div>
                                <div class="flex flex-col gap-[10px]">
                                    <h3 class="product-title text-center">YAMAHA CLP 675</h3>
                                    <div class="flex mb-2 justify-center">
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </div>
                                    <div
                                        class="flex justify-center flex-wrap xl:justify-between">
                                        <span class="product-price">24.000.000đ</span>
                                        <del class="product-price-del">28.370.000đ</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-3 md:grid-cols-5 gap-[57px]">
                            <!-- Product 1 -->
                            <div class="relative bg-white p-[15px] pt-[7px]">
                                <span
                                    class="absolute top-2 left-2 bg-red-500 text-white text-sm font-semibold px-2 py-1">- 20%</span>
                                <div class="image-product mb-[5px]">
                                    <img
                                        width="183"
                                        height="182"
                                        src="uploads/2024/10/piano_img.png"
                                        alt="YAMAHA CLP 675"
                                        class="w-full object-contain" />
                                </div>
                                <div class="flex flex-col gap-[10px]">
                                    <h3 class="product-title text-center">YAMAHA CLP 675</h3>
                                    <div class="flex mb-2 justify-center">
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </div>
                                    <div
                                        class="flex justify-center flex-wrap xl:justify-between">
                                        <span class="product-price">24.000.000đ</span>
                                        <del class="product-price-del">28.370.000đ</del>
                                    </div>
                                </div>
                            </div>
                            <!-- Product 1 -->
                            <div class="relative bg-white p-[15px] pt-[7px]">
                                <span
                                    class="absolute top-2 left-2 bg-red-500 text-white text-sm font-semibold px-2 py-1">- 20%</span>
                                <div class="image-product mb-[5px]">
                                    <img
                                        width="183"
                                        height="182"
                                        src="uploads/2024/10/piano_img.png"
                                        alt="YAMAHA CLP 675"
                                        class="w-full object-contain" />
                                </div>
                                <div class="flex flex-col gap-[10px]">
                                    <h3 class="product-title text-center">YAMAHA CLP 675</h3>
                                    <div class="flex mb-2 justify-center">
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </div>
                                    <div
                                        class="flex justify-center flex-wrap xl:justify-between">
                                        <span class="product-price">24.000.000đ</span>
                                        <del class="product-price-del">28.370.000đ</del>
                                    </div>
                                </div>
                            </div>
                            <!-- Product 1 -->
                            <div class="relative bg-white p-[15px] pt-[7px]">
                                <span
                                    class="absolute top-2 left-2 bg-red-500 text-white text-sm font-semibold px-2 py-1">- 20%</span>
                                <div class="image-product mb-[5px]">
                                    <img
                                        width="183"
                                        height="182"
                                        src="uploads/2024/10/piano_img.png"
                                        alt="YAMAHA CLP 675"
                                        class="w-full object-contain" />
                                </div>
                                <div class="flex flex-col gap-[10px]">
                                    <h3 class="product-title text-center">YAMAHA CLP 675</h3>
                                    <div class="flex mb-2 justify-center">
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </div>
                                    <div
                                        class="flex justify-center flex-wrap xl:justify-between">
                                        <span class="product-price">24.000.000đ</span>
                                        <del class="product-price-del">28.370.000đ</del>
                                    </div>
                                </div>
                            </div>
                            <!-- Product 1 -->
                            <div class="relative bg-white p-[15px] pt-[7px]">
                                <span
                                    class="absolute top-2 left-2 bg-red-500 text-white text-sm font-semibold px-2 py-1">- 20%</span>
                                <div class="image-product mb-[5px]">
                                    <img
                                        width="183"
                                        height="182"
                                        src="uploads/2024/10/piano_img.png"
                                        alt="YAMAHA CLP 675"
                                        class="w-full object-contain" />
                                </div>
                                <div class="flex flex-col gap-[10px]">
                                    <h3 class="product-title text-center">YAMAHA CLP 675</h3>
                                    <div class="flex mb-2 justify-center">
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </div>
                                    <div
                                        class="flex justify-center flex-wrap xl:justify-between">
                                        <span class="product-price">24.000.000đ</span>
                                        <del class="product-price-del">28.370.000đ</del>
                                    </div>
                                </div>
                            </div>
                            <!-- Product 1 -->
                            <div class="relative bg-white p-[15px] pt-[7px]">
                                <span
                                    class="absolute top-2 left-2 bg-red-500 text-white text-sm font-semibold px-2 py-1">- 20%</span>
                                <div class="image-product mb-[5px]">
                                    <img
                                        width="183"
                                        height="182"
                                        src="uploads/2024/10/piano_img.png"
                                        alt="YAMAHA CLP 675"
                                        class="w-full object-contain" />
                                </div>
                                <div class="flex flex-col gap-[10px]">
                                    <h3 class="product-title text-center">YAMAHA CLP 675</h3>
                                    <div class="flex mb-2 justify-center">
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg
                                            class="w-5 h-5 text-third fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </div>
                                    <div
                                        class="flex justify-center flex-wrap xl:justify-between">
                                        <span class="product-price">24.000.000đ</span>
                                        <del class="product-price-del">28.370.000đ</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab2" class="hidden tab-content text-gray-700">
                    <h4 class="font-bold mt-9 mb-4 text-2xl">Settings Info</h4>
                    <p class="text-xl">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Molestias aspernatur rem itaque doloribus culpa similique rerum
                        provident id quos sed.
                    </p>
                </div>
                <div id="tab3" class="hidden tab-content text-gray-700">
                    <h4 class="font-bold mt-9 mb-4 text-2xl">Contact Info</h4>
                    <p class="text-xl">
                        Phone no : 0987654321 <br />Address : Netherland
                    </p>
                </div>
            </div>
        </div>

        <script>
            const tabs = document.querySelectorAll("[data-tab-target]");
            const activeClasses = [
                "border-b-4",
                "border-primary",
                "text-primary",
            ]; // Tách riêng các class

            // Kích hoạt tab đầu tiên mặc định
            tabs[0].classList.add(...activeClasses);
            document.querySelector("#tab1").classList.remove("hidden");

            tabs.forEach((tab) => {
                tab.addEventListener("click", () => {
                    const targetContent = document.querySelector(
                        tab.dataset.tabTarget
                    );

                    // Ẩn tất cả các tab content
                    document
                        .querySelectorAll(".tab-content")
                        .forEach((content) => content.classList.add("hidden"));

                    // Hiển thị tab content được chọn
                    targetContent.classList.remove("hidden");

                    // Xóa class active khỏi tất cả các tab
                    tabs.forEach((activeTab) =>
                        activeTab.classList.remove(...activeClasses)
                    );

                    // Thêm class active cho tab hiện tại
                    tab.classList.add(...activeClasses);
                });
            });
        </script>
    </div>

    <div class="container mx-auto">
        <div class="w-full h-[186px] overflow-hidden relative">
            <img
                src="uploads/2024/10/banner-3.png"
                alt="Piano hands banner"
                class="w-full h-full object-cover" />
            <div
                class="absolute inset-0 bg-opacity-50 flex items-center justify-center">
                <div class="flex flex-col items-start max-w-[410px] text-cusgray">
                    <h2 class="text-xl font-bold mb-[8px]">
                        Khám phá âm thanh tinh tế của piano
                    </h2>
                    <p class="text-xs mb-[18px]">
                        Âm thanh của mỗi phím đàn piano không chỉ là âm nhạc mà còn là
                        cảm xúc tinh tế được khơi gợi từ từng nốt nhạc
                    </p>
                    <button
                        class="p-4 text-cusgray font-semibold border border-gray-300 bg-none">
                        Khám phá ngay
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Piano Luxury -->
    <div class="container mx-auto">
        <!-- Product Categories -->
        <div class="bg-white h-[455px]">
            <div class="grid grid-cols-12 gap-[20px] px-[25px] mb-[9px]">
                <div
                    class="col-span-9 title-heading pt-4 uppercase flex flex-row gap-4">
                    <img
                        class="w-[29px] h-[25px]"
                        src="uploads/2024/10/icon_heading_pianon.png"
                        alt="" />
                    <h3 class="">Piano Luxury</h3>
                </div>
                <h3 class="col-span-3 title-heading pt-4 uppercase">Thương hiệu</h3>
            </div>
            <hr class="border-gray-300" />
            <div class="grid grid-cols-12">
                <div class="col-span-9">
                    <div class="grid grid-cols-2 px-[25px] h-[385px]">
                        <div class="item-piano gap-4 relative">
                            <img
                                class="absolute h-[369px] w-[369px] object-cover -right-[40px] z-0"
                                src="uploads/2024/10/luxury_piano.png"
                                alt="Product Image" />
                            <div
                                class="absolute content gap-1 bottom-[46px] z-10 text-center">
                                <p class="product-title text-center font-normal">
                                    Đàn Piano Boston GP215
                                </p>
                                <div class="price text-[14px] font-semibold">
                                    1.115.000.000đ
                                </div>
                                <button
                                    class="text-orange-500 text-[14px] font-semibold py-2 px-4 inline-flex items-center gap-[10px]">
                                    <span>Mua Ngay</span>
                                    <svg
                                        width="7"
                                        height="13"
                                        viewBox="0 0 7 13"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1 1.25561L5.93494 6.75562L1 12.2556"
                                            stroke="#F8941E"
                                            stroke-width="1.5"
                                            stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="item-piano gap-4 relative">
                            <img
                                class="absolute h-[369px] w-[369px] object-cover left-[25px] z-0"
                                src="uploads/2024/10/luxury_2.png"
                                alt="Product Image" />
                            <div
                                class="absolute content gap-1 -right-4 bottom-[46px] z-10 text-center">
                                <p class="product-title text-center font-normal">
                                    Đàn Piano Boston GP215
                                </p>
                                <div class="price text-[14px] font-semibold">
                                    1.115.000.000đ
                                </div>
                                <button
                                    class="text-orange-500 text-[14px] font-semibold py-2 px-4 inline-flex items-center gap-[10px]">
                                    <span>Mua Ngay</span>
                                    <svg
                                        width="7"
                                        height="13"
                                        viewBox="0 0 7 13"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1 1.25561L5.93494 6.75562L1 12.2556"
                                            stroke="#F8941E"
                                            stroke-width="1.5"
                                            stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-3">
                    <div
                        class="grid grid-cols-3 justify-between items-center gap-4 mt-[16px] pr-[18px]">
                        <div class="w-full max-w-[115px] h-[70px]">
                            <img
                                class="w-full h-full object-contain"
                                src="uploads/2024/10/brand_apolo.png"
                                alt="Brand 1" />
                        </div>
                        <div class="w-full max-w-[115px] h-[70px]">
                            <img
                                class="w-full h-full object-contain"
                                src="uploads/2024/10/brand.png"
                                alt="Brand 2" />
                        </div>
                        <div class="w-full max-w-[115px] h-[70px]">
                            <img
                                class="w-full h-full object-contain"
                                src="uploads/2024/10/brand.png"
                                alt="Brand 3" />
                        </div>
                        <div class="w-full max-w-[115px] h-[70px]">
                            <img
                                class="w-full h-full object-contain"
                                src="uploads/2024/10/brand_apolo.png"
                                alt="Brand 1" />
                        </div>
                        <div class="w-full max-w-[115px] h-[70px]">
                            <img
                                class="w-full h-full object-contain"
                                src="uploads/2024/10/brand.png"
                                alt="Brand 2" />
                        </div>
                        <div class="w-full max-w-[115px] h-[70px]">
                            <img
                                class="w-full h-full object-contain"
                                src="uploads/2024/10/brand.png"
                                alt="Brand 3" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Keyboard -->
    <div class="container mx-auto">
        <!-- Product Categories -->
        <div class="bg-white">
            <div class="grid grid-cols-12 gap-[20px] px-[25px] mb-[9px]">
                <div
                    class="col-span-9 title-heading pt-4 uppercase flex flex-row gap-4">
                    <img
                        class="w-[29px] h-[25px]"
                        src="uploads/2024/10/icon_heading_pianon.png"
                        alt="" />
                    <h3 class="">Keyboard Chuyên Nghiệp</h3>
                </div>
                <h3 class="col-span-3 title-heading pt-4 uppercase">Thương hiệu</h3>
            </div>
            <hr class="border-gray-300" />
            <div class="grid grid-cols-12">
                <div class="col-span-9">
                    <div class="grid grid-cols-2 px-[25px] py-14 gap-16">
                        <div class="item-piano flex flex-col gap-4">
                            <img
                                class="h-[194px] w-[400px] object-cover"
                                src="uploads/2024/10/piano_dien.png"
                                alt="Product Image" />
                            <div class="content flex flex-col gap-1 items-center">
                                <p class="product-title text-center font-normal">
                                    Đàn Keyboard YAMAHA PSR-600
                                </p>
                                <div class="price text-[14px] font-semibold">
                                    1.115.000.000đ
                                </div>
                                <button
                                    class="text-orange-500 text-[14px] font-semibold py-2 px-4 inline-flex items-center gap-[10px]">
                                    <span>Mua Ngay</span>
                                    <svg
                                        width="7"
                                        height="13"
                                        viewBox="0 0 7 13"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1 1.25561L5.93494 6.75562L1 12.2556"
                                            stroke="#F8941E"
                                            stroke-width="1.5"
                                            stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="item-piano flex flex-col gap-4">
                            <img
                                class="h-[194px] w-[400px] object-cover"
                                src="uploads/2024/10/piano_cate.png"
                                alt="Product Image" />
                            <div class="content flex flex-col gap-1 items-center">
                                <p class="product-title text-center font-normal">
                                    Đàn Keyboard YAMAHA PSR-600
                                </p>
                                <div class="price text-[14px] font-semibold">
                                    1.115.000.000đ
                                </div>
                                <button
                                    class="text-orange-500 text-[14px] font-semibold py-2 px-4 inline-flex items-center gap-[10px]">
                                    <span>Mua Ngay</span>
                                    <svg
                                        width="7"
                                        height="13"
                                        viewBox="0 0 7 13"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1 1.25561L5.93494 6.75562L1 12.2556"
                                            stroke="#F8941E"
                                            stroke-width="1.5"
                                            stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-3">
                    <div
                        class="grid grid-cols-3 justify-between items-center gap-4 mt-[16px] pr-[18px]">
                        <div class="w-full max-w-[115px] h-[70px]">
                            <img
                                class="w-full h-full object-contain"
                                src="uploads/2024/10/brand_apolo.png"
                                alt="Brand 1" />
                        </div>
                        <div class="w-full max-w-[115px] h-[70px]">
                            <img
                                class="w-full h-full object-contain"
                                src="uploads/2024/10/brand.png"
                                alt="Brand 2" />
                        </div>
                        <div class="w-full max-w-[115px] h-[70px]">
                            <img
                                class="w-full h-full object-contain"
                                src="uploads/2024/10/brand.png"
                                alt="Brand 3" />
                        </div>
                        <div class="w-full max-w-[115px] h-[70px]">
                            <img
                                class="w-full h-full object-contain"
                                src="uploads/2024/10/brand_apolo.png"
                                alt="Brand 1" />
                        </div>
                        <div class="w-full max-w-[115px] h-[70px]">
                            <img
                                class="w-full h-full object-contain"
                                src="uploads/2024/10/brand.png"
                                alt="Brand 2" />
                        </div>
                        <div class="w-full max-w-[115px] h-[70px]">
                            <img
                                class="w-full h-full object-contain"
                                src="uploads/2024/10/brand.png"
                                alt="Brand 3" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cảm nhận khách hàng -->

    <div class="container mx-auto">
        <!-- Product Categories -->
        <div
            class="relative bg-[url('uploads/2024/10/bg_feedback.png')] bg-cover bg-center pb-[48px]">
            <div class="absolute inset-0 bg-black bg-opacity-60"></div>
            <!-- Lớp phủ -->

            <div class="relative z-10">
                <div class="gap-[20px] px-[25px] py-[30px]">
                    <div class="title-heading uppercase flex flex-row gap-4">
                        <h3 class="text-white">Cảm nhận của khách hàng</h3>
                    </div>
                </div>
                <div
                    class="flex flex-col md:flex-row space-x-2 justify-center px-[25px]">
                    <div class="bg-white p-7 flex flex-col gap-2">
                        <div class="flex flex-row gap-3 items-center">
                            <img
                                src="https://via.placeholder.com/60"
                                alt="Customer Image"
                                class="w-[48px] h-[48px] rounded-full" />
                            <div class="content text-[14px] font-[400] leading-[21px]">
                                <h3 class="font-semibold text-h7">Nguyễn Ngọc An</h3>
                                <p class="text-sm text-gray-500">12 tháng 10 2024</p>
                                <div class="flex">
                                    <!-- Star Ratings -->
                                    <span class="text-yellow-500">&#9733;</span>
                                    <span class="text-yellow-500">&#9733;</span>
                                    <span class="text-yellow-500">&#9733;</span>
                                    <span class="text-yellow-500">&#9733;</span>
                                    <span class="text-yellow-500">&#9734;</span>
                                </div>
                            </div>
                        </div>
                        <p class="text-gray-700">
                            Lorem Ipsum chỉ đơn giản là văn bản giả của ngành in ấn và sắp
                            chữ. Lorem Ipsum đã trở thành văn bản giả chuẩn của ngành kể
                            từ những năm 1500.
                        </p>
                    </div>
                    <div class="bg-white p-7 flex flex-col gap-2">
                        <div class="flex flex-row gap-3 items-center">
                            <img
                                src="https://via.placeholder.com/60"
                                alt="Customer Image"
                                class="w-[48px] h-[48px] rounded-full" />
                            <div class="content text-[14px] font-[400] leading-[21px]">
                                <h3 class="font-semibold text-h7">Nguyễn Ngọc An</h3>
                                <p class="text-sm text-gray-500">12 tháng 10 2024</p>
                                <div class="flex">
                                    <!-- Star Ratings -->
                                    <span class="text-yellow-500">&#9733;</span>
                                    <span class="text-yellow-500">&#9733;</span>
                                    <span class="text-yellow-500">&#9733;</span>
                                    <span class="text-yellow-500">&#9733;</span>
                                    <span class="text-yellow-500">&#9734;</span>
                                </div>
                            </div>
                        </div>
                        <p class="text-gray-700">
                            Lorem Ipsum chỉ đơn giản là văn bản giả của ngành in ấn và sắp
                            chữ. Lorem Ipsum đã trở thành văn bản giả chuẩn của ngành kể
                            từ những năm 1500.
                        </p>
                    </div>
                    <div class="bg-white p-7 flex flex-col gap-2">
                        <div class="flex flex-row gap-3 items-center">
                            <img
                                src="https://via.placeholder.com/60"
                                alt="Customer Image"
                                class="w-[48px] h-[48px] rounded-full" />
                            <div class="content text-[14px] font-[400] leading-[21px]">
                                <h3 class="font-semibold text-h7">Nguyễn Ngọc An</h3>
                                <p class="text-sm text-gray-500">12 tháng 10 2024</p>
                                <div class="flex">
                                    <!-- Star Ratings -->
                                    <span class="text-yellow-500">&#9733;</span>
                                    <span class="text-yellow-500">&#9733;</span>
                                    <span class="text-yellow-500">&#9733;</span>
                                    <span class="text-yellow-500">&#9733;</span>
                                    <span class="text-yellow-500">&#9734;</span>
                                </div>
                            </div>
                        </div>
                        <p class="text-gray-700">
                            Lorem Ipsum chỉ đơn giản là văn bản giả của ngành in ấn và sắp
                            chữ. Lorem Ipsum đã trở thành văn bản giả chuẩn của ngành kể
                            từ những năm 1500.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-6 gap-4">
        <!-- Latest News Section -->
        <div class="bg-white p-7 shadow-md col-span-2">
            <h3 class="text-red-500 font-bold mb-4 uppercase">
                <span class="text-cusgray">Tin tức</span> mới nhất
            </h3>
            <ul class="space-y-4">
                <li class="flex text-[15px] font-semibold leading-[22.5px]">
                    <img
                        src="uploads/2024/10/image_blog.png"
                        alt="News Image"
                        class="w-[135px] h-[90px] mr-4" />
                    <p class="text-sm">
                        Cách thay dây đàn guitar tại nhà đúng cách nhanh chóng, siêu đơn
                        giản
                    </p>
                </li>
                <li class="flex text-[15px] font-semibold leading-[22.5px]">
                    <img
                        src="uploads/2024/10/image_blog.png"
                        alt="News Image"
                        class="w-[135px] h-[90px] mr-4" />
                    <p class="text-sm">
                        Cách thay dây đàn guitar tại nhà đúng cách nhanh chóng, siêu đơn
                        giản
                    </p>
                </li>
                <li class="flex text-[15px] font-semibold leading-[22.5px]">
                    <img
                        src="uploads/2024/10/image_blog.png"
                        alt="News Image"
                        class="w-[135px] h-[90px] mr-4" />
                    <p class="text-sm">
                        Cách thay dây đàn guitar tại nhà đúng cách nhanh chóng, siêu đơn
                        giản
                    </p>
                </li>
                <li class="flex text-[15px] font-semibold leading-[22.5px]">
                    <img
                        src="uploads/2024/10/image_blog.png"
                        alt="News Image"
                        class="w-[135px] h-[90px] mr-4" />
                    <p class="text-sm">
                        Cách thay dây đàn guitar tại nhà đúng cách nhanh chóng, siêu đơn
                        giản
                    </p>
                </li>
                <li class="flex text-[15px] font-semibold leading-[22.5px]">
                    <img
                        src="uploads/2024/10/image_blog.png"
                        alt="News Image"
                        class="w-[135px] h-[90px] mr-4" />
                    <p class="text-sm">
                        Cách thay dây đàn guitar tại nhà đúng cách nhanh chóng, siêu đơn
                        giản
                    </p>
                </li>
            </ul>
        </div>
        <!-- Main Video Section -->
        <div class="bg-white p-4 col-span-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div class="col-span-3 aspect-w-16 aspect-h-9">
                    <iframe
                        class="w-[646px] h-[567px]"
                        src="https://youtu.be/BwzCctq1eME?si=0QzD2Vc4SFfTWUbA"
                        title="Video"
                        allowfullscreen></iframe>
                </div>
                <!-- YouTube Channel Section -->
                <div class="bg-white">
                    <h3 class="text-gray-800 font-bold mb-4">YouTube Channel</h3>
                    <ul class="space-y-3">
                        <li>
                            <img
                                src="uploads/2024/10/sub_ytb.png"
                                alt="YouTube Thumbnail"
                                class="w-[220px] h-[115px] object-cover " />
                        </li>
                        <li>
                            <img
                                src="uploads/2024/10/sub_ytb.png"
                                alt="YouTube Thumbnail"
                                class="w-[220px] h-[115px] object-cover " />
                        </li>
                        <li>
                            <img
                                src="uploads/2024/10/sub_ytb.png"
                                alt="YouTube Thumbnail"
                                class="w-[220px] h-[115px] object-cover " />
                        </li>
                        <li>
                            <img
                                src="uploads/2024/10/sub_ytb.png"
                                alt="YouTube Thumbnail"
                                class="w-[220px] h-[115px] object-cover" />
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
get_footer();
