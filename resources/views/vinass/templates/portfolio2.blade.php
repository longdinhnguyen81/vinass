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
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light%7COswald" rel="stylesheet" type="text/css">

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
					<div class="header-container container">
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
										<div class="header-nav-main header-nav-main-square header-nav-main-font-alternative header-nav-main-effect-2 header-nav-main-sub-effect-1">
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

			<hr class="mt-0 mb-5">

			<div role="main" class="main">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-7 text-center text-lg-left">
							<h2 class="font-weight-bold text-8 line-height-2 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500"><span class="text-5">Hello, we are a <span class="text-color-primary alternative-font-2">Digital Agency</span> From New York City.</span></h2>
						</div>
						<div class="col-lg-3 text-center text-lg-right">
							<h4 class="text-4 line-height-6 font-weight-normal appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="800"><span class="opacity-6">Lorem ipsum dolor sit amet, conur adipiscing elit phasellus blandit massa enim adipiscing elit.</span></h4>
						</div>
						<div class="col-lg-2 text-center text-lg-right">
							<a class="btn btn-outline btn-rounded btn-primary btn-with-arrow mb-5 mb-lg-2 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1100" href="#">Contact Us <span><i class="fas fa-chevron-right"></i></span></a>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="500">
								<div class="owl-carousel owl-theme nav-inside nav-style-1 nav-light mt-2" data-plugin-options="{'items': 1, 'margin': 10, 'nav': true, 'dots': false, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 6000, 'loop': true}">
									<div>
										<div class="img-thumbnail border-0 p-0 d-block">
											<img class="img-fluid border-radius-0" src="/templates/vinass/img/projects/project-portfolio-2-3.jpg" alt="">
										</div>
									</div>
									<div>
										<div class="img-thumbnail border-0 p-0 d-block">
											<img class="img-fluid border-radius-0" src="/templates/vinass/img/projects/project-portfolio-2-1.jpg" alt="">
										</div>
									</div>
									<div>
										<div class="img-thumbnail border-0 p-0 d-block">
											<img class="img-fluid border-radius-0" src="/templates/vinass/img/projects/project-portfolio-2-2.jpg" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="500">
					<hr class="my-5">
				</div>

				<div class="container">
					<div class="row">
						<div class="col">
							<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="500">
								<ul class="nav nav-pills sort-source sort-source-style-3" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'masonry', 'filter': '*'}">
									<li class="nav-item active" data-option-value="*"><a class="nav-link text-1 text-uppercase active" href="#">Show All</a></li>
									<li class="nav-item" data-option-value=".websites"><a class="nav-link text-1 text-uppercase" href="#">Websites</a></li>
									<li class="nav-item" data-option-value=".logos"><a class="nav-link text-1 text-uppercase" href="#">Logos</a></li>
									<li class="nav-item" data-option-value=".brands"><a class="nav-link text-1 text-uppercase" href="#">Brands</a></li>
									<li class="nav-item" data-option-value=".medias"><a class="nav-link text-1 text-uppercase" href="#">Medias</a></li>
								</ul>

								<div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2">
									<div class="row portfolio-list sort-destination" data-sort-id="portfolio">
										

										<div class="col-sm-6 col-lg-3 isotope-item brands">
											<div class="portfolio-item">
												<a href="portfolio-single-wide-slider.html">
													<span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0">
														<span class="thumb-info-wrapper border-radius-0">
															<img src="/templates/vinass/img/projects/project-masonry.jpg" class="img-fluid border-radius-0" alt="">
															<span class="thumb-info-title">
																<span class="thumb-info-inner">Presentation</span>
																<span class="thumb-info-type">Brand</span>
															</span>
														</span>
													</span>
												</a>
											</div>
										</div>

										<div class="col-sm-6 col-lg-3 isotope-item medias">
											<div class="portfolio-item">
												<a href="portfolio-single-wide-slider.html">
													<span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0">
														<span class="thumb-info-wrapper border-radius-0">
															<span class="owl-carousel owl-theme dots-inside m-0" data-plugin-options="{'items': 1, 'margin': 20, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 3000}"><span><img src="/templates/vinass/img/projects/project-masonry-1.jpg" class="img-fluid border-radius-0" alt=""></span><span><img src="/templates/vinass/img/projects/project-masonry-1-2.jpg" class="img-fluid border-radius-0" alt=""></span></span>
															<span class="thumb-info-title">
																<span class="thumb-info-inner">VINASOFT Watch</span>
																<span class="thumb-info-type">Media</span>
															</span>
														</span>
													</span>
												</a>
											</div>
										</div>

										<div class="col-sm-6 col-lg-3 isotope-item logos">
											<div class="portfolio-item">
												<a href="portfolio-single-wide-slider.html">
													<span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0">
														<span class="thumb-info-wrapper border-radius-0">
															<img src="/templates/vinass/img/projects/project-masonry-2.jpg" class="img-fluid border-radius-0" alt="">
															<span class="thumb-info-title">
																<span class="thumb-info-inner">Identity</span>
																<span class="thumb-info-type">Logo</span>
															</span>
														</span>
													</span>
												</a>
											</div>
										</div>

										<div class="col-sm-6 col-lg-3 isotope-item websites">
											<div class="portfolio-item">
												<a href="portfolio-single-wide-slider.html">
													<span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0">
														<span class="thumb-info-wrapper border-radius-0">
															<img src="/templates/vinass/img/projects/project-masonry-29.jpg" class="img-fluid border-radius-0" alt="">
															<span class="thumb-info-title">
																<span class="thumb-info-inner">VINASOFT Screens</span>
																<span class="thumb-info-type">Website</span>
															</span>
														</span>
													</span>
												</a>
											</div>
										</div>

										<div class="col-sm-6 col-lg-3 isotope-item logos">
											<div class="portfolio-item">
												<a href="portfolio-single-wide-slider.html">
													<span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0">
														<span class="thumb-info-wrapper border-radius-0">
															<img src="/templates/vinass/img/projects/project-masonry-5.jpg" class="img-fluid border-radius-0" alt="">
															<span class="thumb-info-title">
																<span class="thumb-info-inner">Three Bottles</span>
																<span class="thumb-info-type">Logo</span>
															</span>
														</span>
													</span>
												</a>
											</div>
										</div>

										<div class="col-sm-6 col-lg-3 isotope-item brands">
											<div class="portfolio-item">
												<a href="portfolio-single-wide-slider.html">
													<span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0">
														<span class="thumb-info-wrapper border-radius-0">
															<img src="/templates/vinass/img/projects/project-masonry-6.jpg" class="img-fluid border-radius-0" alt="">
															<span class="thumb-info-title">
																<span class="thumb-info-inner">Company T-Shirt</span>
																<span class="thumb-info-type">Brand</span>
															</span>
														</span>
													</span>
												</a>
											</div>
										</div>

										<div class="col-sm-6 col-lg-3 isotope-item websites">
											<div class="portfolio-item">
												<a href="portfolio-single-wide-slider.html">
													<span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0">
														<span class="thumb-info-wrapper border-radius-0">
															<img src="/templates/vinass/img/projects/project-masonry-7.jpg" class="img-fluid border-radius-0" alt="">
															<span class="thumb-info-title">
																<span class="thumb-info-inner">Mobile Mockup</span>
																<span class="thumb-info-type">Website</span>
															</span>
														</span>
													</span>
												</a>
											</div>
										</div>

										<div class="col-sm-6 col-lg-3 isotope-item medias">
											<div class="portfolio-item">
												<a href="portfolio-single-wide-slider.html">
													<span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0">
														<span class="thumb-info-wrapper border-radius-0">
															<img src="/templates/vinass/img/projects/project-masonry-24.jpg" class="img-fluid border-radius-0" alt="">
															<span class="thumb-info-title">
																<span class="thumb-info-inner">VINASOFT Label</span>
																<span class="thumb-info-type">Media</span>
															</span>
														</span>
													</span>
												</a>
											</div>
										</div>

										<div class="col-sm-6 col-lg-3 isotope-item logos">
											<div class="portfolio-item">
												<a href="portfolio-single-wide-slider.html">
													<span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0">
														<span class="thumb-info-wrapper border-radius-0">
															<img src="/templates/vinass/img/projects/project-masonry-25.jpg" class="img-fluid border-radius-0" alt="">
															<span class="thumb-info-title">
																<span class="thumb-info-inner">Business Folders</span>
																<span class="thumb-info-type">Logo</span>
															</span>
														</span>
													</span>
												</a>
											</div>
										</div>

										<div class="col-sm-6 col-lg-3 isotope-item websites">
											<div class="portfolio-item">
												<a href="portfolio-single-wide-slider.html">
													<span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0">
														<span class="thumb-info-wrapper border-radius-0">
															<img src="/templates/vinass/img/projects/project-masonry-26.jpg" class="img-fluid border-radius-0" alt="">
															<span class="thumb-info-title">
																<span class="thumb-info-inner">Tablet Screen</span>
																<span class="thumb-info-type">Website</span>
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

				<section class="section section-no-border section-height-4 mt-5 mb-0">
					<div class="container">
						<div class="row justify-content-center text-center">
							<div class="col-md-4 appear-animation" data-appear-animation="fadeInLeftBig">
								<h4 class="alternative-font-2 font-weight-bold mb-2 mt-4 mt-md-0 text-6 mb-3">Mobile Apps</h4>
								<p class="px-lg-4 mb-0">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius.
								</p>
							</div>
							<div class="col-md-4 mb-2 appear-animation" data-appear-animation="fadeIn">
								<h4 class="alternative-font-2 font-weight-bold mb-2 mt-4 mt-md-0 text-6 mb-3">Creative Websites</h4>
								<p class="px-lg-4 mb-0">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius.
								</p>
							</div>
							<div class="col-md-4 appear-animation" data-appear-animation="fadeInRightBig">
								<h4 class="alternative-font-2 font-weight-bold mb-2 mt-4 mt-md-0 text-6 mb-3">SEO Optimization</h4>
								<p class="px-lg-4 mb-0">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius.
								</p>
							</div>
						</div>
					</div>
				</section>

				<section class="call-to-action call-to-action-primary m-0">
					<div class="container">
						<div class="row py-3 py-lg-5">
							<div class="col-sm-12 col-lg-9 justify-content-center justify-content-lg-start mb-md-4">
								<div class="call-to-action-content">
									<h3 class="alternative-font-2 text-8 line-height-1">VINASOFT is everything you need to create a website!</h3>
									<p class="mb-0 opacity-7">The Best HTML Site Template on ThemeForest</p>
								</div>
							</div>
							<div class="col-sm-12 col-lg-3 justify-content-center justify-content-lg-end">
								<div class="call-to-action-btn">
									<a href="http://themeforest.net/item/porto-responsive-html5-template/4106987" target="_blank" class="btn btn-outline btn-rounded btn-light-2 px-5 btn-py-2 font-weight-bold text-uppercase text-1 mb-2">Buy Now</a>
								</div>
							</div>
						</div>
					</div>
				</section>

			</div>

			<footer id="footer" class="mt-0">
				<div class="container">
					<div class="row py-5">
						<div class="col-md-4 d-flex justify-content-center justify-content-md-start mb-4 mb-lg-0">
							<a href="/" class="logo pr-0 pr-lg-3 pl-3 pl-md-0">
								<img alt="VINASOFT Website Template" src="/templates/vinass/img/logo.png" height="33">
							</a>
						</div>
						<div class="col-md-8 d-flex justify-content-center justify-content-md-end mb-4 mb-lg-0">
							<div class="row">
								<div class="col-md-6 mb-3 mb-md-0">
									<div class="ml-3 text-center text-md-right">
										<h5 class="text-3 mb-0 text-color-light">NEW YORK</h5>
										<p class="text-3 mb-0"><i class="fab fa-whatsapp text-color-primary top-1 p-relative"></i><span class="pl-1">(123) 465-7890</span></p>            
									</div>
								</div>
								<div class="col-md-6">
									<div class="ml-3 text-center text-md-right">
										<h5 class="text-3 mb-0 text-color-light">LOS ANGELES</h5>
										<p class="text-3 mb-0"><i class="fab fa-whatsapp text-color-primary top-1 p-relative"></i><span class="pl-1">(123) 465-7890</span></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-copyright footer-copyright-style-2">
					<div class="container py-2">
						<div class="row py-4">
							<div class="col-md-4 d-flex align-items-center justify-content-center justify-content-md-start mb-2 mb-lg-0">
								<p>© Copyright 2019. All Rights Reserved.</p>
							</div>
							<div class="col-md-8 d-flex align-items-center justify-content-center justify-content-md-end mb-4 mb-lg-0">
								<p><i class="far fa-envelope text-color-primary top-1 p-relative"></i><a href="mailto:mail@example.com" class="opacity-7 pl-1">mail@example.com</a></p>
								<ul class="footer-social-icons social-icons social-icons-clean social-icons-icon-light ml-3">
									<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
									<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
									<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
								</ul>
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
