<?php

/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section, opens the <body> tag and adds the site's header.
 *
 * @package HelloElementor
 */

if (! defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

$viewport_content = apply_filters('hello_elementor_viewport_content', 'width=device-width, initial-scale=1');
$enable_skip_link = apply_filters('hello_elementor_enable_skip_link', true);
$skip_link_url = apply_filters('hello_elementor_skip_link_url', '#content');
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="<?php echo esc_attr($viewport_content); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
	</style>

	<?php wp_head(); ?>
</head>

<body class="font-sans" <?php body_class(); ?>>

	<?php wp_body_open(); ?>
	<header class="bg-white shadow-custom-2 max-h-[111px]">
		<div class="container mx-auto px-4 py-6">
			<div class="flex flex-wrap items-start justify-between">
				<!-- Logo -->
				<div class="flex items-center space-x-4 w-full sm:w-auto justify-between">
					<img src="http://vpart-demoweb.local/wp-content/uploads/2024/10/logo_vpart.svg" alt="VP ART HOUSE Logo" class="h-[79px]">
					<button class="sm:hidden text-gray-600 hover:text-gray-800">
						<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
						</svg>
					</button>
				</div>

				<!-- Search and Icons - Hidden on mobile, visible on tablet and desktop -->
				<div class="hidden sm:flex flex-grow items-start justify-center space-x-9 mt-4 sm:mt-0">
					<!-- Category Dropdown -->
					<div class="flex items-start space-x-1">
						<svg class="w-11 h-11 text-cusgray" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 6h16M4 12h16m-7 6h7"></path>
						</svg>
						<div class="flex flex-col pt-[5px]">
							<span class="text-xs font-normal uppercase">Danh mục</span>
							<div class="flex flex-row gap-1 items-center">
								<span class="text-sm font-bold leading-6 text-cusgray uppercase">
									Sản Phẩm </span>

								<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M10.0965 4.35649C10.0681 4.28797 10.02 4.2294 9.95834 4.1882C9.89667 4.14699 9.82417 4.125 9.75 4.125H2.25C2.17583 4.125 2.10333 4.14699 2.04166 4.1882C1.97999 4.22941 1.93193 4.28797 1.90354 4.3565C1.87516 4.42502 1.86774 4.50042 1.88221 4.57317C1.89668 4.64591 1.9324 4.71273 1.98484 4.76517L5.73484 8.51516C5.76966 8.54998 5.811 8.57761 5.8565 8.59645C5.90199 8.6153 5.95076 8.625 6 8.625C6.04925 8.625 6.09801 8.6153 6.14351 8.59645C6.189 8.57761 6.23034 8.54998 6.26516 8.51516L10.0152 4.76517C10.0676 4.71273 10.1033 4.64591 10.1178 4.57316C10.1323 4.50042 10.1248 4.42502 10.0965 4.35649Z" fill="#4D4D4D" />
								</svg>

							</div>

						</div>
					</div>

					<!-- Search Bar -->
					<div class="flex-grow max-w-lg ">

						<form>
							<div class="relative">
								<input type="search" id="default-search" class="input-search block p-4 pl-5 w-full text-sm text-gray-900 bg-white rounded-lg border border-white" placeholder="Bạn cần tìm sản phẩm gì?" required>
								<button type="submit" class="button-search text-white absolute right-[3px] bottom-[3px] bg-primary hover:bg-orange-600 font-medium text-sm px-5 py-[10px] ">
									<svg class="w-6 h-[22px]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
									</svg>
								</button>
							</div>
						</form>
						<div class="mt-2">
							<ul class="flex flex-row space-x-6 list-none text-neu-5 text-xs font-normal">
								<li>ATLAS A1</li>
								<li>ATLAS A1</li>
								<li>ATLAS A1</li>
								<li>ATLAS A1</li>
								<li>ATLAS A1</li>
							</ul>
						</div>
					</div>

				</div>

				<div class="flex gap-9">
					<!-- Hotline -->
					<div class="flex items-center space-x-3">
						<div class="p-[10px] rounded-full shadow-custom-1">
							<svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
								<g clip-path="url(#clip0_489_3663)">
									<path d="M6.45833 5.16797H11.625L14.2083 11.6263L10.9792 13.5638C12.3625 16.3687 14.6326 18.6388 17.4375 20.0221L19.375 16.793L25.8333 19.3763V24.543C25.8333 25.2281 25.5612 25.8852 25.0767 26.3697C24.5922 26.8541 23.9351 27.1263 23.25 27.1263C18.2115 26.8201 13.4594 24.6805 9.89007 21.1112C6.32078 17.5419 4.18119 12.7898 3.875 7.7513C3.875 7.06616 4.14717 6.40908 4.63164 5.92461C5.11611 5.44014 5.77319 5.16797 6.45833 5.16797" stroke="#F8941E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M19.375 9.04297C20.0601 9.04297 20.7172 9.31514 21.2017 9.79961C21.6862 10.2841 21.9583 10.9412 21.9583 11.6263" stroke="#F8941E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M19.375 3.875C21.4304 3.875 23.4017 4.69152 24.8551 6.14492C26.3085 7.59833 27.125 9.56957 27.125 11.625" stroke="#F8941E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
								</g>
								<defs>
									<clipPath id="clip0_489_3663">
										<rect width="31" height="31" fill="white" />
									</clipPath>
								</defs>
							</svg>

						</div>
						<div class="flex flex-col">
							<span class="text-sm font-medium text-cusgray">HOTLINE</span>
							<span class="text-base font-bold leading-6 text-cusgray">0835.385.858</span>
						</div>
					</div>

					<!-- Shopping Cart -->
					<div class="flex items-center space-x-5">
						<div class="iconcart relative">
							<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M8.48925 7.385C8.53621 6.50328 8.52632 5.68733 8.63506 4.88842C8.97117 2.4089 11.0965 0.362935 13.6025 0.0536034C16.625 -0.321491 19.2694 1.2958 20.1245 4.15772C20.379 5.01264 20.3197 5.95769 20.3988 6.86376C20.4136 7.01964 20.3988 7.17553 20.3988 7.385C20.599 7.385 20.7571 7.385 20.9128 7.385C22.282 7.385 23.6486 7.385 25.0178 7.385C25.7394 7.385 25.8902 7.50434 26.0211 8.19608C26.7625 12.1078 27.4965 16.0219 28.2379 19.9336C28.8138 22.9782 29.3921 26.0228 29.9704 29.065C30.0915 29.7007 29.8443 29.9954 29.1721 29.9978C26.7873 30.0027 24.4049 29.9978 22.02 29.9978C15.0161 29.9978 8.01228 29.9978 1.00842 29.9978C0.076718 29.9978 -0.106163 29.7786 0.0495329 28.8677C0.790943 24.5443 1.52988 20.2186 2.26882 15.8928C2.7112 13.311 3.15604 10.7267 3.60089 8.14493C3.70716 7.53114 3.88015 7.385 4.50788 7.38256C5.66942 7.37769 6.83344 7.38256 7.99498 7.38256C8.15315 7.38256 8.31379 7.38256 8.48184 7.38256L8.48925 7.385ZM1.28275 28.6801H28.71C27.3656 21.9966 26.0285 15.3472 24.6965 8.71488H20.4012C20.4012 9.5357 20.3864 10.3176 20.4111 11.097C20.4161 11.2894 20.505 11.511 20.6261 11.6669C21.0339 12.1906 21.0141 12.8531 20.5396 13.2745C20.0824 13.6837 19.3781 13.6739 18.9382 13.255C18.4835 12.8214 18.4711 12.1516 18.8987 11.6474C18.9802 11.5524 19.0889 11.4355 19.0889 11.3284C19.1038 10.4613 19.0988 9.59416 19.0988 8.71244H9.83615C9.83615 9.58928 9.82873 10.4296 9.84356 11.2675C9.84356 11.3917 9.93995 11.5305 10.0264 11.6353C10.454 12.1467 10.449 12.8117 9.99926 13.2452C9.547 13.6837 8.82042 13.6837 8.36569 13.2477C7.9159 12.8141 7.90601 12.1419 8.33603 11.6353C8.41511 11.5403 8.52385 11.4234 8.52632 11.3162C8.54115 10.4515 8.53374 9.58441 8.53374 8.69539H4.92307C3.7121 15.3448 2.50113 21.9942 1.28275 28.6753V28.6801ZM9.87569 7.35333H19.0791C19.0791 6.71275 19.1211 6.10383 19.0716 5.49978C18.9283 3.75583 18.0485 2.46005 16.4495 1.71717C14.8357 0.969419 13.2392 1.10582 11.7762 2.12149C9.91523 3.41484 9.68292 5.30493 9.87569 7.35333Z" fill="#4D4D4D" />
							</svg>
							<span class="bg-primary w-5 h-5 text-center text-white absolute -top-[8px] -right-[8px] rounded-full text-sm">1</span>
						</div>
						<div class="flex flex-col">
							<span class="text-xs font-normal text-cusgray leading-[18px]">1 Sản phẩm</span>
							<span class="text-sm font-bold text-cusgray leading-[18px]">28.800.000đ</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</header>

	<?php if ($enable_skip_link) { ?>
		<a class="skip-link screen-reader-text" href="<?php echo esc_url($skip_link_url); ?>"><?php echo esc_html__('Skip to content', 'hello-elementor'); ?></a>
	<?php } ?>

	<?php
	if (! function_exists('elementor_theme_do_location') || ! elementor_theme_do_location('header')) {
		if (hello_elementor_display_header_footer()) {
			if (did_action('elementor/loaded') && hello_header_footer_experiment_active()) {
				get_template_part('template-parts/dynamic-header');
			} else {
				get_template_part('template-parts/header');
			}
		}
	}
