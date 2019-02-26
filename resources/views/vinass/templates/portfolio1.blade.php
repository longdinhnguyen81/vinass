<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>VINASOFT - Responsive HTML5 Template 7.2.0</title>	

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="VINASOFT - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="/templates/vinass/img/logo.png" type="image/x-icon" />
		<link rel="apple-touch-icon" href="/templates/vinass/img/logo.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="/templates/vinass/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="/templates/vinass/vendor/fontawesome-free/css/all.min.css">
		<link rel="stylesheet" href="/templates/vinass/vendor/animate/animate.min.css">
		<link rel="stylesheet" href="/templates/vinass/vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="/templates/vinass/vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="/templates/vinass/vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="/templates/vinass/vendor/magnific-popup/magnific-popup.min.css">



		<!-- Theme CSS -->
		<link rel="stylesheet" href="/templates/vinass/css/theme.css">
		<link rel="stylesheet" href="/templates/vinass/css/theme-elements.css">
		<link rel="stylesheet" href="/templates/vinass/css/theme-blog.css">
		<link rel="stylesheet" href="/templates/vinass/css/theme-shop.css">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="/templates/vinass/vendor/rs-plugin/css/settings.css">
		<link rel="stylesheet" href="/templates/vinass/vendor/rs-plugin/css/layers.css">
		<link rel="stylesheet" href="/templates/vinass/vendor/rs-plugin/css/navigation.css">
		
		<!-- Demo CSS -->


		<!-- Skin CSS -->
		<link rel="stylesheet" href="/templates/vinass/css/skins/default.css"> 

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="/templates/vinass/css/custom.css">

		<!-- Head Libs -->
		<script src="/templates/vinass/vendor/modernizr/modernizr.min.js"></script>

	</head>
	<body class="loading-overlay-showing" data-loading-overlay data-plugin-options="{'hideDelay': 500}">
		<div class="loading-overlay">
			<div class="bounce-loader">
				<div class="bounce1"></div>
				<div class="bounce2"></div>
				<div class="bounce3"></div>
			</div>
		</div>

		<div class="body">
			<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
				<div class="header-body border-top-0">
					@include('templates.vinass.superheader')
					<div class="header-container container container-lg">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo">
										<a href="/">
											<img alt="Porto" width="82" height="40" src="/templates/vinass/img/logo.png">
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<div class="header-nav header-nav-links">
										<div class="header-nav-main header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-dropdown-arrow header-nav-main-effect-3 header-nav-main-sub-effect-1">
											<nav class="collapse">
												<ul class="nav nav-pills flex-column flex-lg-row" id="mainNav">
													<li class="dropdown ml-0">
														<a class="dropdown-item dropdown-toggle active" href="/">
															Home
														</a>
														<ul class="dropdown-menu">
															<li>
																<a class="dropdown-item" href="/">
																	Landing Page
																</a>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">Classic</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" data-thumb-preview="/templates/vinass/img/previews/preview-classic.jpg">Classic - Original</a></li>
																	<li><a class="dropdown-item" data-thumb-preview="/templates/vinass/img/previews/preview-classic-color.jpg">Classic - Color</a></li>
																	<li><a class="dropdown-item" data-thumb-preview="/templates/vinass/img/previews/preview-classic-light.jpg">Classic - Light</a></li>
																	<li><a class="dropdown-item" data-thumb-preview="/templates/vinass/img/previews/preview-classic-video.jpg">Classic - Video</a></li>
																	<li><a class="dropdown-item" data-thumb-preview="/templates/vinass/img/previews/preview-classic-video-light.jpg">Classic - Video - Light</a></li>
																</ul>
															</li>
														</ul>
													</li>
													<li class="dropdown">
														<a class="dropdown-item">
															Contact
														</a>
													</li>
													<li class="dropdown">
														<a class="dropdown-item">
															About us
														</a>
													</li>
													<li class="dropdown">
														<a class="dropdown-item">
															Blog
														</a>
													</li>
													<li class="dropdown">
														<a class="dropdown-item">
															Shop
														</a>
													</li>
												</ul>
											</nav>
										</div>
										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
											<i class="fas fa-bars"></i>
										</button>
									</div>
									<div class="header-nav-features header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
										<div class="header-nav-feature header-nav-features-search d-inline-flex">
											<a href="#" class="header-nav-features-toggle" data-focus="headerSearch"><i class="fas fa-search header-nav-top-icon"></i></a>
											<div class="header-nav-features-dropdown" id="headerTopSearchDropdown">
												<form role="search" action="page-search-results.html" method="get">
													<div class="simple-search input-group">
														<input class="form-control text-1" id="headerSearch" name="q" type="search" value="" placeholder="Search...">
														<span class="input-group-append">
															<button class="btn" type="submit">
																<i class="fa fa-search header-nav-top-icon"></i>
															</button>
														</span>
													</div>
												</form>
											</div>
										</div>
										<div class="header-nav-feature header-nav-features-cart d-inline-flex ml-2">
											<a href="#" class="header-nav-features-toggle">
												<img src="/templates/vinass/img/icons/icon-cart.svg" width="14" alt="" class="header-nav-top-icon-img">
												<span class="cart-info">
													<span class="cart-qty">1</span>
												</span>
											</a>
											<div class="header-nav-features-dropdown" id="headerTopCartDropdown">
												<ol class="mini-products-list">
													<li class="item">
														<a href="#" title="Camera X1000" class="product-image"><img src="/templates/vinass/img/products/product-1.jpg" alt="Camera X1000"></a>
														<div class="product-details">
															<p class="product-name">
																<a href="#">Camera X1000 </a>
															</p>
															<p class="qty-price">
																 1X <span class="price">$890</span>
															</p>
															<a href="#" title="Remove This Item" class="btn-remove"><i class="fas fa-times"></i></a>
														</div>
													</li>
												</ol>
												<div class="totals">
													<span class="label">Total:</span>
													<span class="price-total"><span class="price">$890</span></span>
												</div>
												<div class="actions">
													<a class="btn btn-dark" href="#">View Cart</a>
													<a class="btn btn-primary" href="#">Checkout</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div role="main" class="main">
				<div class="container container-lg">
					<div class="row">
						<div class="col-lg-6 pt-5">
							<h2 class="font-weight-bold text-10 line-height-2 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500"><span class="text-5">Hello, I’m John Doe. I’m a Digital Designer From New York City.</span></h2>
							<h4 class="text-6 line-height-6 font-weight-normal appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="800"><span class="opacity-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit phasellus blandit massa enim adipiscing elit phasellus.</span></h4>
							<a class="btn btn-primary btn-with-arrow mb-2 ml-0 pl-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1100" href="#">Contact Us <span><i class="fas fa-chevron-right"></i></span></a>
						</div>
					</div>
				</div>

				<hr class="my-5">

				<div class="container container-lg">
					<div class="row">
						<div class="col">

							<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="500">

								<ul class="nav nav-pills sort-source sort-source-style-3" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'packery', 'filter': '*'}">
									<li class="nav-item active" data-option-value="*"><a class="nav-link text-1 text-uppercase active" href="#">Show All</a></li>
									<li class="nav-item" data-option-value=".websites"><a class="nav-link text-1 text-uppercase" href="#">Websites</a></li>
									<li class="nav-item" data-option-value=".logos"><a class="nav-link text-1 text-uppercase" href="#">Logos</a></li>
									<li class="nav-item" data-option-value=".brands"><a class="nav-link text-1 text-uppercase" href="#">Brands</a></li>
									<li class="nav-item" data-option-value=".medias"><a class="nav-link text-1 text-uppercase" href="#">Medias</a></li>
								</ul>

								<div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2">
									<div class="row portfolio-list sort-destination" data-sort-id="portfolio">
										
										<div class="col-sm-6 col-lg-6 isotope-item websites">
											<div class="portfolio-item">
												<a href="portfolio-single-wide-slider.html">
													<span class="thumb-info thumb-info-no-borders thumb-info-lighten thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom border-radius-0">
														<span class="thumb-info-wrapper">
															<img src="/templates/vinass/img/projects/project-portfolio-1-1.jpg" class="img-fluid" alt="">
															<span class="thumb-info-title bg-transparent p-4">
																<span class="thumb-info-inner line-height-1 text-4 font-weight-bold">The Desk</span>
																<span class="thumb-info-type opacity-6">Websites</span>
															</span>
														</span>
													</span>
												</a>
											</div>
										</div>

										<div class="col-sm-6 col-lg-6 isotope-item medias">
											<div class="portfolio-item">
												<a href="portfolio-single-wide-slider.html">
													<span class="thumb-info thumb-info-no-borders thumb-info-lighten thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom border-radius-0">
														<span class="thumb-info-wrapper">
															<img src="/templates/vinass/img/projects/project-portfolio-1-2.jpg" class="img-fluid" alt="">
															<span class="thumb-info-title bg-transparent p-4">
																<span class="thumb-info-inner line-height-1 text-4 font-weight-bold text-dark">VINASOFT Watch</span>
																<span class="thumb-info-type opacity-6 text-dark">Medias</span>
															</span>
														</span>
													</span>
												</a>
											</div>
										</div>

										<div class="col-sm-6 col-lg-3 isotope-item brands">
											<div class="portfolio-item">
												<a href="portfolio-single-wide-slider.html">
													<span class="thumb-info thumb-info-no-borders thumb-info-lighten thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom border-radius-0">
														<span class="thumb-info-wrapper">
															<img src="/templates/vinass/img/projects/project-portfolio-1-3.jpg" class="img-fluid" alt="">
															<span class="thumb-info-title bg-transparent p-4">
																<span class="thumb-info-inner line-height-1 text-4 font-weight-bold">Black Keyboard</span>
																<span class="thumb-info-type opacity-6">Brands</span>
															</span>
														</span>
													</span>
												</a>
											</div>
										</div>

										<div class="col-sm-6 col-lg-3 isotope-item logos">
											<div class="portfolio-item">
												<a href="portfolio-single-wide-slider.html">
													<span class="thumb-info thumb-info-no-borders thumb-info-lighten thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom border-radius-0">
														<span class="thumb-info-wrapper">
															<img src="/templates/vinass/img/projects/project-portfolio-1-4.jpg" class="img-fluid" alt="">
															<span class="thumb-info-title bg-transparent p-4">
																<span class="thumb-info-inner line-height-1 text-4 font-weight-bold text-dark">Blue Tag</span>
																<span class="thumb-info-type opacity-6 text-dark">Project Type</span>
															</span>
														</span>
													</span>
												</a>
											</div>
										</div>									

										<div class="col-sm-6 col-lg-3 isotope-item brands">
											<div class="portfolio-item">
												<a href="portfolio-single-wide-slider.html">
													<span class="thumb-info thumb-info-no-borders thumb-info-lighten thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom border-radius-0">
														<span class="thumb-info-wrapper">
															<img src="/templates/vinass/img/projects/project-portfolio-1-5.jpg" class="img-fluid" alt="">
															<span class="thumb-info-title bg-transparent p-4">
																<span class="thumb-info-inner line-height-1 text-4 font-weight-bold text-dark">White Car</span>
																<span class="thumb-info-type opacity-6 text-dark">Brands</span>
															</span>
														</span>
													</span>
												</a>
											</div>
										</div>

										<div class="col-sm-6 col-lg-6 isotope-item logos">
											<div class="portfolio-item">
												<a href="portfolio-single-wide-slider.html">
													<span class="thumb-info thumb-info-no-borders thumb-info-lighten thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom border-radius-0">
														<span class="thumb-info-wrapper">
															<img src="/templates/vinass/img/projects/project-portfolio-1-6.jpg" class="img-fluid" alt="">
															<span class="thumb-info-title bg-transparent p-4">
																<span class="thumb-info-inner line-height-1 text-4 font-weight-bold text-dark">VINASOFT Card</span>
																<span class="thumb-info-type opacity-6 text-dark">Logos</span>
															</span>
														</span>
													</span>
												</a>
											</div>
										</div>

										<div class="col-sm-6 col-lg-3 isotope-item brands">
											<div class="portfolio-item">
												<a href="portfolio-single-wide-slider.html">
													<span class="thumb-info thumb-info-no-borders thumb-info-lighten thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom border-radius-0">
														<span class="thumb-info-wrapper">
															<img src="/templates/vinass/img/projects/project-portfolio-1-7.jpg" class="img-fluid" alt="">
															<span class="thumb-info-title bg-transparent p-4">
																<span class="thumb-info-inner line-height-1 text-4 font-weight-bold">Bicycle Trends</span>
																<span class="thumb-info-type opacity-6">Brands</span>
															</span>
														</span>
													</span>
												</a>
											</div>
										</div>

										<div class="col-sm-6 col-lg-6 isotope-item medias">
											<div class="portfolio-item">
												<a href="portfolio-single-wide-slider.html">
													<span class="thumb-info thumb-info-no-borders thumb-info-lighten thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom border-radius-0">
														<span class="thumb-info-wrapper">
															<img src="/templates/vinass/img/projects/project-portfolio-1-8.jpg" class="img-fluid" alt="">
															<span class="thumb-info-title bg-transparent p-4">
																<span class="thumb-info-inner line-height-1 text-4 font-weight-bold text-dark">Clean Way</span>
																<span class="thumb-info-type opacity-6 text-dark">Medias</span>
															</span>
														</span>
													</span>
												</a>
											</div>
										</div>

										<div class="col-sm-6 col-lg-6 isotope-item websites">
											<div class="portfolio-item">
												<a href="portfolio-single-wide-slider.html">
													<span class="thumb-info thumb-info-no-borders thumb-info-lighten thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom border-radius-0">
														<span class="thumb-info-wrapper">
															<img src="/templates/vinass/img/projects/project-portfolio-1-9.jpg" class="img-fluid" alt="">
															<span class="thumb-info-title bg-transparent p-4">
																<span class="thumb-info-inner line-height-1 text-4 font-weight-bold text-dark">Corporate Designs</span>
																<span class="thumb-info-type opacity-6 text-dark">Websites</span>
															</span>
														</span>
													</span>
												</a>
											</div>
										</div>

										<div class="col-sm-6 col-lg-6 isotope-item websites">
											<div class="portfolio-item">
												<a href="portfolio-single-wide-slider.html">
													<span class="thumb-info thumb-info-no-borders thumb-info-lighten thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom border-radius-0">
														<span class="thumb-info-wrapper">
															<img src="/templates/vinass/img/projects/project-portfolio-1-10.jpg" class="img-fluid" alt="">
															<span class="thumb-info-title bg-transparent p-4">
																<span class="thumb-info-inner line-height-1 text-4 font-weight-bold text-dark">Mobile eCommerce</span>
																<span class="thumb-info-type opacity-6 text-dark">Websites</span>
															</span>
														</span>
													</span>
												</a>
											</div>
										</div>

									</div>
								</div>
							</div>

						</div>
					</div>
				</div>

			</div>

			<footer id="footer">
				<div class="container container-lg">
					<div class="row py-5">
						<div class="col text-center">
							<ul class="footer-social-icons social-icons social-icons-clean social-icons-big social-icons-opacity-light social-icons-icon-light mt-1">
								<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
								<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
								<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="footer-copyright footer-copyright-style-2">
					<div class="container container-lg py-2">
						<div class="row py-4">
							<div class="col-lg-8 text-center text-lg-left mb-2 mb-lg-0">
								<p>
									<span class="pr-0 pr-md-3 d-block d-md-inline-block"><i class="far fa-dot-circle text-color-primary top-1 p-relative"></i><span class="text-color-light opacity-7 pl-1">1234 Street Name, City Name</span></span>
									<span class="pr-0 pr-md-3 d-block d-md-inline-block"><i class="fab fa-whatsapp text-color-primary top-1 p-relative"></i><a href="tel:1234567890" class="text-color-light opacity-7 pl-1">(800) 123-4567</a></span>
									<span class="pr-0 pr-md-3 d-block d-md-inline-block"><i class="far fa-envelope text-color-primary top-1 p-relative"></i><a href="mailto:mail@example.com" class="text-color-light opacity-7 pl-1">mail@example.com</a></span>
								</p>
							</div>
							<div class="col-lg-4 d-flex align-items-center justify-content-center justify-content-lg-end mb-4 mb-lg-0 pt-4 pt-lg-0">
								<p>© Copyright 2019. All Rights Reserved.</p>
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
		<script src="/templates/vinass/vendor/bootstrap/js/bootstrap.min.js"></script>
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
