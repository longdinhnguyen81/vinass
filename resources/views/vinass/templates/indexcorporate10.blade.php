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
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400" rel="stylesheet" type="text/css">

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
		<link rel="stylesheet" href="/templates/vinass/css/skins/skin-corporate-10.css"> 

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="/templates/vinass/css/custom.css">

		<!-- Head Libs -->
		<script src="/templates/vinass/vendor/modernizr/modernizr.min.js"></script>

	</head>
	<body>

		<div class="body">
			<header id="header" class="header-transparent header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
				<div class="header-body border-top-0 bg-dark box-shadow-none">
					@include('templates.vinass.superheader')
					<div class="header-container container container-xl">
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
									<div class="header-nav header-nav-links header-nav-dropdowns-dark header-nav-light-text order-2 order-lg-1">
										<div class="header-nav-main header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
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
									<div class="header-nav-features header-nav-features-light header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
										<div class="header-nav-feature header-nav-features-search d-inline-flex">
											<a href="#" class="header-nav-features-toggle" data-focus="headerSearch"><i class="fas fa-search header-nav-top-icon"></i></a>
											<div class="header-nav-features-dropdown header-nav-features-dropdown-mobile-fixed" id="headerTopSearchDropdown">
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
												<img src="/templates/vinass/img/icons/icon-cart-light.svg" width="14" alt="" class="header-nav-top-icon-img">
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

				<div class="slider-container rev_slider_wrapper curved-border" style="height: 100vh;">
					<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'sliderLayout': 'fullscreen', 'delay': 9000, 'gridwidth': 1170, 'gridheight': 700, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500], 'parallax': { 'type': 'scroll', 'origo': 'enterpoint', 'speed': 1000, 'levels': [2,3,4,5,6,7,8,9,12,50], 'disable_onmobile': 'on' }, 'navigation' : {'arrows': { 'enable': true, 'style': 'arrows-style-1 arrows-primary' }, 'bullets': {'enable': true, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 70, 'h_offset': 0}}}">
						<ul>
							<li class="slide-overlay slide-overlay-level-8" data-transition="fade">
								<img src="/templates/vinass/img/slides/slide-corporate-10-1.jpg"  
									alt=""
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									class="rev-slidebg">

								<div class="tp-caption"
									data-x="center" data-hoffset="['-145','-145','-145','-320']"
									data-y="center" data-voffset="['-80','-80','-80','-130']"
									data-start="1000"
									data-transform_in="x:[-300%];opacity:0;s:500;"
									data-transform_idle="opacity:0.2;s:500;"><img src="/templates/vinass/img/slides/slide-title-border.png" alt=""></div>

								<div class="tp-caption text-color-light font-weight-normal"
									data-x="center"
									data-y="center" data-voffset="['-80','-80','-80','-130']"
									data-start="700"
									data-fontsize="['16','16','16','40']"
									data-lineheight="['25','25','25','45']"
									data-transform_in="y:[-50%];opacity:0;s:500;">WE CREATE DESIGNS, WE ARE</div>

								<div class="tp-caption"
									data-x="center" data-hoffset="['145','145','145','320']"
									data-y="center" data-voffset="['-80','-80','-80','-130']"
									data-start="1000"
									data-transform_in="x:[300%];opacity:0;s:500;"
									data-transform_idle="opacity:0.2;s:500;"><img src="/templates/vinass/img/slides/slide-title-border.png" alt=""></div>

								<div class="tp-caption font-weight-extra-bold text-color-light"
									data-frames='[{"delay":1300,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="center" data-hoffset="['-155','-155','-155','-255']"
									data-y="center"
									data-fontsize="['145','145','145','250']"
									data-lineheight="['150','150','150','260']">P</div>

								<div class="tp-caption font-weight-extra-bold text-color-light"
									data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="center" data-hoffset="['-80','-80','-80','-130']"
									data-y="center"
									data-fontsize="['145','145','145','250']"
									data-lineheight="['150','150','150','260']">O</div>

								<div class="tp-caption font-weight-extra-bold text-color-light"
									data-frames='[{"delay":1700,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="center"
									data-y="center"
									data-fontsize="['145','145','145','250']"
									data-lineheight="['150','150','150','260']">R</div>

								<div class="tp-caption font-weight-extra-bold text-color-light"
									data-frames='[{"delay":1900,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="center" data-hoffset="['65','65','65','115']"
									data-y="center"
									data-fontsize="['145','145','145','250']"
									data-lineheight="['150','150','150','260']">T</div>

								<div class="tp-caption font-weight-extra-bold text-color-light"
									data-frames='[{"delay":2100,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="center" data-hoffset="['139','139','139','240']"
									data-y="center"
									data-fontsize="['145','145','145','250']"
									data-lineheight="['150','150','150','260']">O</div>

								<div class="tp-caption font-weight-light text-color-light"
									data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2300,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
									data-x="center"
									data-y="center" data-voffset="['85','85','85','140']"
									data-fontsize="['18','18','18','40']"
									data-lineheight="['26','26','26','45']">The best choice for your new website</div>

								<a class="tp-caption btn btn-primary font-weight-semibold"
									data-frames='[{"delay":2500,"speed":2000,"frame":"0","from":"opacity:0;y:50%;","to":"o:1;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									href="#"
									data-x="center" data-hoffset="0"
									data-y="center" data-voffset="['160','160','160','285']"
									data-whitespace="nowrap"	
									data-fontsize="['15','15','15','33']"	
									data-paddingtop="['17','17','17','40']"
									data-paddingright="['35','35','35','80']"
									data-paddingbottom="['17','17','17','40']"				 
									data-paddingleft="['35','35','35','80']">GET STARTED NOW!</a>
								
							</li>
							<li data-transition="fade" class="slide-overlay slide-overlay-level-8">
								<img src="/templates/vinass/img/slides/slide-corporate-10-2.jpg"  
									alt=""
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									class="rev-slidebg">
				
								<div class="tp-caption"
									data-x="center" data-hoffset="['-115','-115','-115','-185']"
									data-y="center" data-voffset="['-110','-110','-110','-135']"
									data-start="1000"
									data-transform_in="x:[-300%];opacity:0;s:500;"
									data-transform_idle="opacity:0.2;s:500;"><img src="/templates/vinass/img/slides/slide-title-border.png" alt=""></div>

								<div class="tp-caption text-color-light font-weight-normal"
									data-x="center"
									data-y="center" data-voffset="['-110','-110','-110','-135']"
									data-start="700"
									data-fontsize="['22','22','22','40']"
									data-lineheight="['25','25','25','45']"
									data-transform_in="y:[-50%];opacity:0;s:500;">HELLO, THIS IS</div>

								<div class="tp-caption"
									data-x="center" data-hoffset="['115','115','115','185']"
									data-y="center" data-voffset="['-110','-110','-110','-135']"
									data-start="1000"
									data-transform_in="x:[300%];opacity:0;s:500;"
									data-transform_idle="opacity:0.2;s:500;"><img src="/templates/vinass/img/slides/slide-title-border.png" alt=""></div>

								<h1 class="tp-caption font-weight-extra-bold text-color-light negative-ls-2"
									data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="center"
									data-y="center" data-voffset="['-60','-60','-60','-85']"
									data-fontsize="['50','50','50','90']"
									data-lineheight="['55','55','55','95']">VINASOFT HTML TEMPLATE</h1>

								<div class="tp-caption font-weight-light text-color-light"
									data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
									data-x="center"
									data-y="center" data-voffset="['-10','-10','-10','-25']"
									data-fontsize="['18','18','18','50']"
									data-lineheight="['29','29','29','40']"
									style="color: #b5b5b5;">Trusted by over <strong>30,000</strong> satisfied users.</div>

								<a class="tp-caption btn btn-primary font-weight-bold"
									href="#"
									data-frames='[{"delay":3000,"speed":2000,"frame":"0","from":"y:50%;opacity:0;","to":"y:0;o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="center"
									data-y="center" data-voffset="['65','65','65','210']"
									data-paddingtop="['15','15','15','30']"
									data-paddingbottom="['15','15','15','30']"
									data-paddingleft="['33','33','33','50']"
									data-paddingright="['33','33','33','50']"
									data-fontsize="['13','13','13','25']"
									data-lineheight="['20','20','20','25']">GET STARTED NOW <i class="fas fa-arrow-right ml-1"></i></a>
								
							</li>
						</ul>
					</div>
				</div>

				<div class="container container-xl py-4">
					<div class="row py-lg-5 my-5">
						<div class="col-lg-7 pr-lg-5 mb-5 mb-lg-0">
							<h2 class="font-weight-bold mb-4">Hello, we are Porto</h2>
							<p class="text-color-dark text-6 line-height-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit phasellus blandit massa enim.</p>
							<p class="line-height-9 text-4 pr-lg-5 mr-lg-5 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc. Vivamus bibendum magna ex. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim.</p>
							<a href="#" class="learn-more text-primary font-weight-semibold text-2">VIEW MORE <i class="fas fa-chevron-right text-3 ml-2"></i></a>
						</div>
						<div class="col-md-10 col-lg-5">
							<div class="row">
								<div class="col-6 mb-4">
									<div class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="200">
										<span class="d-inline-block font-weight-extra-bold text-color-primary font-italic line-height-1 text-14 ls-0 mb-2">01</span>
										<h4 class="font-weight-bold text-5 pl-1 mb-2">Strategy</h4>
										<p class="pl-1">Lorem ipsum dolor sit amet, coctetur adipiscing elit.</p>
									</div>
								</div>
								<div class="col-6 mb-4">
									<div class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="600">
										<span class="d-inline-block font-weight-extra-bold text-color-primary font-italic line-height-1 text-14 ls-0 mb-2">02</span>
										<h4 class="font-weight-bold text-5 pl-1 mb-2">Plan</h4>
										<p class="pl-1">Lorem ipsum dolor sit amet, coctetur adipiscing elit.</p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-6 mb-4 mb-sm-0">
									<div class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="1000">
										<span class="d-inline-block font-weight-extra-bold text-color-primary font-italic line-height-1 text-14 ls-0 mb-2">03</span>
										<h4 class="font-weight-bold text-5 pl-1 mb-2">Work</h4>
										<p class="pl-1">Lorem ipsum dolor sit amet, coctetur adipiscing elit.</p>
									</div>
								</div>
								<div class="col-6">
									<div class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="1400">
										<span class="d-inline-block font-weight-extra-bold text-color-primary font-italic line-height-1 text-14 ls-0 mb-2">04</span>
										<h4 class="font-weight-bold text-5 pl-1 mb-2">Quality</h4>
										<p class="pl-1">Lorem ipsum dolor sit amet, coctetur adipiscing elit.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<section class="section bg-color-grey-scale-1 section-height-3 border-0 m-0">
					<div class="container container-xl py-3">
						<div class="row">
							<div class="col text-center">
								<h2 class="font-weight-normal mb-5">Our <strong class="font-weight-extra-bold">Portfolio</strong></h2>
							</div>
						</div>
						<div class="row mb-5">
							<div class="col">
								
								<div class="owl-carousel owl-theme nav-style-1 stage-margin mb-0" data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 2}, '992': {'items': 3}, '1200': {'items': 4}}, 'margin': 3, 'loop': true, 'nav': true, 'dots': false, 'stagePadding': 40}">
									<div class="m-3">
										<div class="hover-effect-3d">
											<div class="thumb-info thumb-info-hide-wrapper-bg thumb-info-no-zoom rounded-0">
												<div class="thumb-info-wrapper">
													<img src="/templates/vinass/img/gallery/gallery-2.jpg" class="img-fluid rounded-0 hover-effect-2" alt="">
												</div>
											</div>
										</div>
									</div>
									<div class="m-3">
										<div class="hover-effect-3d">
											<div class="thumb-info thumb-info-hide-wrapper-bg thumb-info-no-zoom rounded-0">
												<div class="thumb-info-wrapper">
													<img src="/templates/vinass/img/gallery/gallery-3.jpg" class="img-fluid rounded-0 hover-effect-2" alt="">
												</div>
											</div>
										</div>
									</div>
									<div class="m-3">
										<div class="hover-effect-3d">
											<div class="thumb-info thumb-info-hide-wrapper-bg thumb-info-no-zoom rounded-0">
												<div class="thumb-info-wrapper">
													<img src="/templates/vinass/img/gallery/gallery-4.jpg" class="img-fluid rounded-0 hover-effect-2" alt="">
												</div>
											</div>
										</div>
									</div>
									<div class="m-3">
										<div class="hover-effect-3d">
											<div class="thumb-info thumb-info-hide-wrapper-bg thumb-info-no-zoom rounded-0">
												<div class="thumb-info-wrapper">
													<img src="/templates/vinass/img/gallery/gallery-5.jpg" class="img-fluid rounded-0 hover-effect-2" alt="">
												</div>
											</div>
										</div>
									</div>
									<div class="m-3">
										<div class="hover-effect-3d">
											<div class="thumb-info thumb-info-hide-wrapper-bg thumb-info-no-zoom rounded-0">
												<div class="thumb-info-wrapper">
													<img src="/templates/vinass/img/gallery/gallery-2.jpg" class="img-fluid rounded-0 hover-effect-2" alt="">
												</div>
											</div>
										</div>
									</div>
									<div class="m-3">
										<div class="hover-effect-3d">
											<div class="thumb-info thumb-info-hide-wrapper-bg thumb-info-no-zoom rounded-0">
												<div class="thumb-info-wrapper">
													<img src="/templates/vinass/img/gallery/gallery-3.jpg" class="img-fluid rounded-0 hover-effect-2" alt="">
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
						<div class="row">
							<div class="col text-center">
								<a href="#" class="btn btn-primary font-weight-semibold text-3 px-5 btn-py-2">VIEW MORE</a>
							</div>
						</div>
					</div>
				</section>

				<div class="container container-xl">
					<div class="row text-center py-4 my-5">
						<div class="owl-carousel owl-theme carousel-center-active-item mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 1}, '768': {'items': 5}, '992': {'items': 7}, '1200': {'items': 7}}, 'margin': 50, 'autoplay': true, 'autoplayTimeout': 3000, 'dots': false}">
							<div>
								<img class="img-fluid" src="/templates/vinass/img/logos/logo-1.png" alt="">
							</div>
							<div>
								<img class="img-fluid" src="/templates/vinass/img/logos/logo-2.png" alt="">
							</div>
							<div>
								<img class="img-fluid" src="/templates/vinass/img/logos/logo-3.png" alt="">
							</div>
							<div>
								<img class="img-fluid" src="/templates/vinass/img/logos/logo-4.png" alt="">
							</div>
							<div>
								<img class="img-fluid" src="/templates/vinass/img/logos/logo-5.png" alt="">
							</div>
							<div>
								<img class="img-fluid" src="/templates/vinass/img/logos/logo-6.png" alt="">
							</div>
							<div>
								<img class="img-fluid" src="/templates/vinass/img/logos/logo-4.png" alt="">
							</div>
							<div>
								<img class="img-fluid" src="/templates/vinass/img/logos/logo-2.png" alt="">
							</div>
						</div>
					</div>
				</div>

				<hr>

				<div class="container container-xl">
					<div class="row justify-content-center featured-boxes featured-boxes-style-4 pb-3 mb-4">
						<div class="col-md-4">
							<div class="featured-box featured-box-primary">
								<div class="box-content appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="200">
									<i class="icon-featured icons icon-location-pin mb-3"></i>
									<span class="d-block opacity-7 line-height-1">VINASOFT ADDRESS</span>
									<h2 class="font-weight-bold text-color-dark text-5 mb-0">123 Street Name, City, USA</h2>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="featured-box featured-box-primary mx-5">
								<div class="box-content appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="600">
									<i class="icon-featured icons icon-clock mb-3"></i>
									<span class="d-block opacity-7 line-height-1">BUSINESS HOURS</span>
									<h2 class="font-weight-bold text-color-dark text-5 mb-0">Mon - Sun / 9:00AM - 8:00PM</h2>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="featured-box featured-box-primary">
								<div class="box-content appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="1000">
									<i class="icon-featured icons icon-call-in mb-3"></i>
									<span class="d-block opacity-7 line-height-1">CALL US NOW</span>
									<h2 class="font-weight-bold text-color-dark text-5 mb-0">(123) 456-7890</h2>
								</div>
							</div>
						</div>
					</div>
				</div>

				<hr>

			</div>

			<footer id="footer" class="bg-color-light border-0 pt-5 mt-0">
				<div class="container pb-5 mb-5">
					<div class="row justify-content-center">
						<div class="col-md-9 col-lg-6">
							<h2 class="font-weight-normal text-color-dark text-center text-8 mb-4"><strong class="font-weight-extra-bold">Contact</strong> Us</h2>
							<p class="text-4 opacity-8 text-center mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc. Vivamus bibendum</p>
							<form id="contactForm" class="contact-form form-style-3" action="php/contact-form.php" method="POST">
								<div class="contact-form-success alert alert-success d-none" id="contactSuccess">
									Message has been sent to us.
								</div>

								<div class="contact-form-error alert alert-danger d-none" id="contactError">
									Error sending your message.
									<span class="mail-error-message text-1 d-block" id="mailErrorMessage"></span>
								</div>
								
								<input type="hidden" value="Contact Form" name="subject" id="subject">
								<div class="form-row">
									<div class="form-group col-md-6 pr-md-2">
										<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" placeholder="Your Name..." name="name" id="name" required>
									</div>
									<div class="form-group col-md-6 pl-md-2">
										<input type="text" value="" data-msg-required="Please enter your phone." maxlength="100" class="form-control" placeholder="Your Phone..." name="phone" id="phone" required>
									</div>
								</div>
								<div class="form-group">
									<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" placeholder="Your Email Address..." name="email" id="email" required>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<textarea maxlength="5000" data-msg-required="Please enter your message." rows="4" class="form-control" placeholder="Your Message..." name="message" id="message" required></textarea>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col text-center">
										<input type="submit" value="SUBMIT" class="btn btn-primary font-weight-semibold text-3 px-5 btn-py-2" data-loading-text="Loading...">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="footer-copyright curved-border curved-border-top d-flex align-items-center">
					<div class="container py-2">
						<div class="row py-4">
							<div class="col text-center">
								<p class="text-3">2018 © <strong class="font-weight-normal text-color-light opacity-7">VINASOFT Template</strong> - Copyright. All Rights Reserved.</p>
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

		<!-- Current Page Vendor and Views -->
		<script src="/templates/vinass/js/views/view.contact.js"></script>
		
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