			<footer id="footer" class="mt-0">
				<div class="container">
					<div class="footer-ribbon">
						<span>VinaSofts</span>
					</div>
					<div class="row py-5 my-4">
						<div class="col-lg-4 mb-5 mb-lg-0 text-center text-lg-left pt-3">
							<h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4">Vina Software Solutions</h5>
							<p class="text-4 mb-3">VietNam Software Solutions (VINASS) là công ty dịch vụ chuyên cung cấp các sản phẩm, dịch vụ công nghệ, đặc biệt đưa ra những định hướng và giải pháp tối ưu công nghệ, đưa công nghệ mới cho các đối tác.</p>
						</div>
						<div class="col-lg-3 mb-4 mb-md-0 text-center text-lg-left pt-3">
							<h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4">Pages</h5>
							<ul class="list list-icons list-icons-sm d-inline-flex flex-column">
								<li class="text-4 mb-2"><i class="fas fa-angle-right"></i><a href="/" class="link-hover-style-1 ml-1 {{ request()->is('/') ? 'active-footer' : '' }}">Trang chủ</a></li>
								<li class="text-4 mb-2"><i class="fas fa-angle-right"></i><a href="/gioi-thieu" class="link-hover-style-1 ml-1 {{ request()->is('gioi-thieu') ? 'active-footer' : '' }}">Giới thiệu</a></li>
								<li class="text-4 mb-2"><i class="fas fa-angle-right"></i><a href="/thiet-ke-web" class="link-hover-style-1 ml-1 {{ request()->is('thiet-ke-web') ? 'active-footer' : '' }}">Thiết kế web</a></li>
								<li class="text-4 mb-2"><i class="fas fa-angle-right"></i><a href="ung-dung" class="link-hover-style-1 ml-1 {{ request()->is('/ung-dung') ? 'active-footer' : '' }}">Ứng dụng</a></li>
								<li class="text-4 mb-2"><i class="fas fa-angle-right"></i><a href="lien-he" class="link-hover-style-1 ml-1 {{ request()->is('/lien-he') ? 'active-footer' : '' }}">Liên hệ</a></li>
								<li class="text-4 mb-2"><i class="fas fa-angle-right"></i><a href="contact-us.html" class="link-hover-style-1 ml-1">Blog</a></li>
							</ul>
						</div>
						<div class="col-lg-5 mb-4 mb-lg-0 text-center text-lg-left pt-3">
							<h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4">Địa chỉ liên hệ:</h5>
							<p class="text-4 mb-2"><span class="text-color-light">Address:</span> Tầng 2, 121 Cù Chính Lan, phường Thanh Khê - TP Đà Nẵng</p>
							<p class="text-4 mb-2"><span class="text-color-light">Phone:</span> 0978.175506</p>
							<p class="text-4 mb-2"><span class="text-color-light">Email:</span> <a href="mailto:mail@example.com">taiembkdn@gmail.com</a></p>
						</div>
					</div>
					<div class="container container-lg">
						<div class="footer-copyright footer-copyright-style-2">
							<div class="py-2">
								<div class="row py-4">
									<div class="col d-flex align-items-center justify-content-center mb-4 mb-lg-0">
										<p>Vinass © Copyright 2018. All Rights Reserved.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>

		<!-- Vendor -->
		<script src="/templates/vinass/vendor/jquery/jquery.min.js"></script>
		<script src="/templates/vinass/vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="/templates/vinass/vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="/templates/vinass/vendor/jquery.cookie/jquery.cookie.min.js"></script>
		<script src="/templates/vinass/vendor/popper/umd/popper.min.js"></script>
		<script src="/templates/vinass/vendor/bootstrap//templates/vinass/js/bootstrap.min.js"></script>
		<script src="/templates/vinass/vendor/common/common.min.js"></script>
		<script src="/templates/vinass/vendor/jquery.validation/jquery.validate.min.js"></script>
		<script src="/templates/vinass/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
		<script src="/templates/vinass/vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="/templates/vinass/vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
		<script src="/templates/vinass/vendor/isotope/jquery.isotope.min.js"></script>
		<script src="/templates/vinass/vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="/templates/vinass/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="/templates/vinass/vendor/vide/jquery.vide.min.js"></script>
		<script src="/templates/vinass/vendor/vivus/vivus.min.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="/templates/vinass/js/theme.js"></script>
		
		<!-- Current Page Vendor and Views -->
		<script src="/templates/vinass/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script src="/templates/vinass/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
		
		<!-- Theme Custom -->
		<script src="/templates/vinass/js/custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="/templates/vinass/js/theme.init.js"></script>

		<!-- Demo -->

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
		 -->

	</body>
</html>
