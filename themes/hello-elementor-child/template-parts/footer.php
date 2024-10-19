<?php

/**
 * The template for displaying footer.
 *
 * @package HelloElementor
 */

if (! defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

$footer_nav_menu = wp_nav_menu([
	'theme_location' => 'menu-2',
	'fallback_cb' => false,
	'container' => false,
	'echo' => false,
]);
?>
<div class="sec-tienich border border-solid border-gray-300">
	<div class="container mx-auto px-0 py-6">
		<div class="flex justify-between items-stretch gap-y-2 flex-wrap">
			<div class="w-1/2 md:w-1/4  box-tienich">
				<div class="flex xl:gap-3.5 gap-2.5 px-2 md:px-0 lg:px-0 md:pr-4 lg:pr-8 h-full justify-left">
					<div class="">
						<svg width="45" height="46" viewBox="0 0 45 46" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M42.1875 21.5992H30.9375V14.5679H38.4229C38.704 14.5679 38.9786 14.6521 39.2113 14.8097C39.444 14.9673 39.6242 15.191 39.7286 15.4519L42.1875 21.5992Z" stroke="#F8941E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
							<path d="M2.8125 25.8179H30.9375" stroke="#F8941E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
							<path d="M33.0469 38.4742C35.3768 38.4742 37.2656 36.5854 37.2656 34.2554C37.2656 31.9255 35.3768 30.0367 33.0469 30.0367C30.7169 30.0367 28.8281 31.9255 28.8281 34.2554C28.8281 36.5854 30.7169 38.4742 33.0469 38.4742Z" stroke="#F8941E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
							<path d="M11.9531 38.4742C14.2831 38.4742 16.1719 36.5854 16.1719 34.2554C16.1719 31.9255 14.2831 30.0367 11.9531 30.0367C9.62317 30.0367 7.73438 31.9255 7.73438 34.2554C7.73438 36.5854 9.62317 38.4742 11.9531 38.4742Z" stroke="#F8941E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
							<path d="M28.8281 34.2554H16.1719" stroke="#F8941E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
							<path d="M7.73438 34.2554H4.21875C3.84579 34.2554 3.4881 34.1073 3.22438 33.8436C2.96066 33.5798 2.8125 33.2221 2.8125 32.8492V13.1617C2.8125 12.7887 2.96066 12.431 3.22438 12.1673C3.4881 11.9036 3.84579 11.7554 4.21875 11.7554H30.9375V30.6018" stroke="#F8941E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
							<path d="M30.9375 30.6018V21.5992H42.1875V32.8492C42.1875 33.2221 42.0393 33.5798 41.7756 33.8436C41.5119 34.1073 41.1542 34.2554 40.7812 34.2554H37.2656" stroke="#F8941E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
					</div>
					<div class="box-content">
						<p class="text-cusgray xl:text-base font-bold text-sm">Giao hàng toàn quốc</p>
						<p class="text-xs text-cusgray">Miễn phí giao hàng với đơn hàng trên 5.000.000đ</p>
					</div>
				</div>
			</div>
			<div class="w-1/2 md:w-1/4 md:border-l border-solid  box-tienich">
				<div class="flex xl:gap-3.5 gap-2.5 px-2 md:px-4 lg:px-8 justify-center ">
					<div class="">
						<svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M7.3645 19.2554V8.94287C7.3645 8.56991 7.51266 8.21223 7.77638 7.9485C8.04011 7.68478 8.39779 7.53662 8.77075 7.53662H36.8958C37.2687 7.53662 37.6264 7.68478 37.8901 7.9485C38.1538 8.21223 38.302 8.56991 38.302 8.94287V19.2554C38.302 34.0237 25.7677 38.9165 23.265 39.7463C22.9852 39.8426 22.6813 39.8426 22.4015 39.7463C19.8988 38.9165 7.3645 34.0237 7.3645 19.2554Z" stroke="#F8941E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
							<path d="M30.5676 17.3804L20.2551 27.2241L15.0989 22.3022" stroke="#F8941E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
						</svg>

					</div>
					<div class="box-content">
						<p class="text-cusgray xl:text-base font-bold text-sm">Cam kết chính hãng</p>
						<p class="text-xs text-cusgray">Sản phẩm có cam kết và được bảo hành lên tới 15 năm
						</p>
					</div>
				</div>
			</div>
			<div class="w-1/2 md:w-1/4 md:border-l border-solid  box-tienich">
				<div class="flex gap-3.5 sm:px-2 px-4 lg:px-8  justify-center">
					<div class="">
						<svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M28.0105 7.91162L8.323 27.5991" stroke="#F8941E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
							<path d="M11.0574 14.4741C13.1716 14.4741 14.8855 12.7602 14.8855 10.646C14.8855 8.53178 13.1716 6.81787 11.0574 6.81787C8.94316 6.81787 7.22925 8.53178 7.22925 10.646C7.22925 12.7602 8.94316 14.4741 11.0574 14.4741Z" stroke="#F8941E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
							<path d="M25.2761 28.6929C27.3903 28.6929 29.1042 26.979 29.1042 24.8647C29.1042 22.7505 27.3903 21.0366 25.2761 21.0366C23.1619 21.0366 21.448 22.7505 21.448 24.8647C21.448 26.979 23.1619 28.6929 25.2761 28.6929Z" stroke="#F8941E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
					</div>
					<div class="box-content">
						<p class="text-cusgray xl:text-base font-bold text-sm">Hỗ trợ trả góp</p>
						<p class="text-xs text-cusgray">Luôn có hỗ trợ trả góp lãi xuất 0% dành cho khách hàng</p>
					</div>
				</div>
			</div>
			<div class="w-1/2 md:w-1/4 md:border-l md:border-solid  box-tienich">
				<div class="flex xl:gap-3.5  gap-2.5 px-2 md:px-0 lg:px-0 md:pl-4 lg:pl-8  justify-end ">
					<div class="">
						<svg width="40" height="41" viewBox="0 0 40 41" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M12.4739 16.336H4.97388V8.836" stroke="#F8941E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
							<path d="M10.2774 30.4781C12.2004 32.4011 14.6504 33.7106 17.3176 34.2412C19.9849 34.7717 22.7496 34.4994 25.262 33.4587C27.7745 32.418 29.922 30.6556 31.4328 28.3945C32.9437 26.1333 33.7501 23.4749 33.7501 20.7554C33.7501 18.0359 32.9437 15.3775 31.4328 13.1163C29.922 10.8551 27.7745 9.09274 25.262 8.05203C22.7496 7.01133 19.9849 6.73903 17.3176 7.26958C14.6504 7.80013 12.2004 9.10969 10.2774 11.0327L4.97412 16.336" stroke="#F8941E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
					</div>
					<div class="box-content">
						<p class="text-cusgray xl:text-base font-bold text-sm">Chính sách đổi trả</p>
						<p class="text-xs text-cusgray">Có nhiều phương thức để quý khách lựa chọn</p>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
<footer id="site-footer">
	<div class="bg-primary">
		<div class="container mx-auto md:px-4 lg:px-0 py-12 ">
			<div class="flex justify-between mb-8 flex-wrap md:flex-nowrap gap-x-5 items-center">
				<div class="w-full md:w-1/2 flex justify-center flex-wrap ">
					<div class="footer-box-number flex w-full justify-center ">
						<div class="number">
							02
						</div>
						<div class="content -ml-2">
							<p class="md:font-base text-sm  text-white">HỆ THỐNG</p>
							<p class="text-white text-brand font-bold">VP ART HOUSE</p>
							<a href="#" class="text-white text-sm md:text-base hover:text-white">
								CỬA HÀNG NHẠC CỤ TẠI TP.HCM
								<span class="inline-block align-middle	ml-2">
									<svg width="41" height="26" viewBox="0 0 41 26" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M2.99805 12.655H36.408" stroke="white" stroke-linecap="square" stroke-linejoin="round" />
										<path d="M30.9375 5.80078L37.4062 12.9306L30.9375 20.0604" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
									</svg>
								</span>
							</a>
						</div>
					</div>
					<div class="flex items-center gap-3 lg:gap-5 lg:flex-nowrap flex-wrap">
						<a href="#" class="text-white text-xs lg:text-sm hover:text-white border border-solid border-white px-4 py-1.5 md:px-4 md:py-2 lg:px-6 lg:py-3 xl:px-6 xl:py-3 ">
							KIỂM TRA ĐƠN HÀNG
							<span class="inline-block align-middle">
								<svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M8.35938 2.64771L14 8.28828L8.35938 13.9289" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
								</svg>
							</span>
						</a>
						<a href="#" class="text-white text-xs lg:text-sm hover:text-white border border-solid border-white px-4 py-1.5 md:px-4 md:py-2 lg:px-8 lg:py-3.5 xl:px-6 xl:py-3 ">
							THÔNG TIN BẢO HÀNH
							<span class="inline-block align-middle">
								<svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M8.35938 2.64771L14 8.28828L8.35938 13.9289" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
								</svg>
							</span>
						</a>
					</div>
				</div>
				<div class="w-full md:w-1/2 md:mt-0 mt-4">
					<p class="text-white text-sm md:text-base font-medium ">ĐẶT HÀNG ONLINE</p>
					<h3 class="text-lg md:text-2xl color-white font-bold text-white mb-5">GIAO HÀNG TẬN NƠI</h3>
					<div class="flex items-center gap-3.5 mb-5">
						<div class="w-7 h-7 flex-0-0-auto  rounded-full border border-white border-solid text-sm text-white leading-7 text-center ">1</div>
						<div class="text-sm text-white">

							Đổi mới trong vòng 15 ngày nếu sản phẩm bị lỗi do nhà sản xuất
						</div>
					</div>
					<div class="flex items-center gap-3.5 mb-5">
						<div class="w-7 h-7 flex-0-0-auto rounded-full border border-white border-solid text-sm text-white leading-7 text-center ">2</div>
						<div class="text-sm text-white mb-1.5 ">
							Chấp nhận thanh toán trực tiếp, chuyển khoản hoặc online bằng
							<div class="images flex items-center gap-3.5 flex-wrap">
								<img src="http://localhost:10003/wp-content/uploads/2024/10/ApplePay.svg" alt="">
								<img src="http://localhost:10003/wp-content/uploads/2024/10/MasterCard.svg" alt="">
								<img src="http://localhost:10003/wp-content/uploads/2024/10/MasterCard-1.svg" alt="">
								<img src="http://localhost:10003/wp-content/uploads/2024/10/Visa.svg" alt="">
								<img src="http://localhost:10003/wp-content/uploads/2024/10/JCB.svg" alt="">
							</div>
						</div>
					</div>
					<div class="flex items-center gap-3.5 mb-5">
						<div class="w-7 h-7 flex-0-0-auto  rounded-full border border-white border-solid text-sm text-white leading-7 text-center ">3</div>
						<div class="text-sm text-white">
							Gọi ngay - ĐT: 08.3538.5868 (Hotline) - 03 8888 0588 (Viber, Zalo) để được tư vấn và giao hàng tận nơi trên toàn quốc.
						</div>
					</div>
				</div>
			</div>
			<div class="flex flex-wrap">
				<div class="w-full md:w-1/2 lg:w-4/12 pr-2">
					<h3 class="text-base text-white font-bold mb-3">GỌI MUA HÀNG</h3>
					<div class="block text-sm  text-white mb-3">
						Hotline:
						<span><a href="#" class="hover:text-white">08.3538.5868</a></span>
					</div>
					<div class="block text-sm  text-white mb-3">
						Đặt hàng:
						<span><a href="#" class="hover:text-white">03.8888.0588</a></span>
					</div>
					<div class="block text-sm  text-white mb-3">
						Bảo hành:
						<span><a href="#" class="hover:text-white">028.9999.0588</a></span>
					</div>
					<div class="block text-sm  text-white mb-3 ">
						Các sản phẩm của VP Art House được nhập khẩu chính<br> ngạch từ Nhật Bản, Mỹ, Đức - <b>đảm bảo chính hãng 100%.</b>
					</div>
				</div>
				<div class="w-full md:w-1/2 lg:w-3/12">
					<h3 class="text-base text-white font-bold mb-3">THÔNG TIN</h3>
					<ul class="menu-footer p-0 m-0">
						<li class="text-white text-sm mb-3">
							<a href="#" class="hover:text-white">Giới thiệu</a>
						</li>
						<li class="text-white text-sm mb-3">
							<a href="#" class="hover:text-white">Dịch vụ</a>
						</li>
						<li class="text-white text-sm mb-3">
							<a href="#" class="hover:text-white">Cửa hàng</a>
						</li>
						<li class="text-white text-sm mb-3">
							<a href="#" class="hover:text-white">Tuyển dụng</a>

						</li>
						<li class="text-white text-sm mb-3">
							<a href="#" class="hover:text-white">Liên hệ</a>
						</li>
						<li class="text-white text-sm mb-3">
							<a href="#" class="hover:text-white">Bảo mật</a>
						</li>
					</ul>
				</div>
				<div class="w-full md:w-1/2 lg:w-3/12">
					<h3 class="text-base text-white font-bold mb-3">CHÍNH SÁCH</h3>
					<ul class="menu-footer p-0 m-0">
						<li class="text-white text-sm mb-3">
							<a href="#" class="hover:text-white">Hướng dẫn mua hàng</a>
						</li>
						<li class="text-white text-sm mb-3">
							<a href="#" class="hover:text-white">Vận chuyển</a>
						</li>
						<li class="text-white text-sm mb-3">
							<a href="#" class="hover:text-white">Bảo hành - Bảo trì</a>
						</li>
						<li class="text-white text-sm mb-3">
							<a href="#" class="hover:text-white">Thanh toán - Trả góp</a>

						</li>
						<li class="text-white text-sm mb-3">
							<a href="#" class="hover:text-white">Thu hồi - Đổi trả</a>
						</li>

					</ul>

				</div>
				<div class="w-full md:w-1/2 lg:w-2/12">
					<h3 class="text-base text-white font-bold  mb-3">KẾT NỐI VỚI CHÚNG TÔI</h3>
					<div class="form mb-3">
						<?php echo do_shortcode('[contact-form-7 id="dd33dfc" title="Form nhan thong tin"]') ?>
					</div>
					<div class="flex gap-x-3 flex-wrap">
						<div class="w-7 h-7 leading-7  bg-white flex items-center justify-center">
							<a href="#">
								<img src="http://localhost:10003/wp-content/uploads/2024/10/Capa-2.svg" class="" alt="">
							</a>
						</div>
						<div class="w-7 h-7 leading-7  bg-white flex items-center justify-center">
							<a href="#">
								<img src="http://localhost:10003/wp-content/uploads/2024/10/Vector.svg" class="" alt="">
							</a>
						</div>
					</div>
					<div class="flex gap-x-2 items-center">
						<div class="max-w-10/12">
							<a href="#">
								<img src="http://localhost:10003/wp-content/uploads/2024/10/image-3.png" alt="">
							</a>
						</div>
						<div class="max-w-10/12">
							<a href="#">
								<img src="http://localhost:10003/wp-content/uploads/2024/10/image-17.png" alt="">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="bg-cusgray ">
		<div class="container mx-auto  md:px-4 lg:px-0z py-12 ">
			<div class="flex flex-wrap justify-between">
				<div class="w-full md:w-1/4 mb-2 pr-3">
					<a href="#">
						<img src="http://localhost:10003/wp-content/uploads/2024/10/logo.svg" alt="">
					</a>
				</div>
				<div class="w-full md:w-3/4 ">

					<p class="text-white text-sm">
						© 2024 - Bản quyền thuộc Công ty TNHH VP Art House - vparthouse.vn<br>
						Địa chỉ: Khu đô Thị Vạn Phúc, 35 Đinh Thị Thi, HBP, TP TĐ. Email: vparthouse1212@gmail.com. Chịu trách nhiệm nội dung: Nguyễn Vũ Minh Thịnh Số giấy chứng nhận đăng ký kinh doanh: 0316326311, đăng ký ngày 21/5/2024 tại Sở Kế Hoạch và Đầu Tư thành phố Hồ Chí Minh.
					</p>
				</div>
			</div>
		</div>
</footer>