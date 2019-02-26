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
		<link rel="stylesheet" href="/templates/vinass/css/skins/skin-corporate-7.css"> 

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="/templates/vinass/css/custom.css">

		<!-- Head Libs -->
		<script src="/templates/vinass/vendor/modernizr/modernizr.min.js"></script>

	</head>
	<body>

		<div class="body">
			<header id="header" class="header-transparent header-transparent-dark-bottom-border header-transparent-dark-bottom-border-1 header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
				<div class="header-body border-top-0 bg-dark box-shadow-none">
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
				<div class="slider-container rev_slider_wrapper" style="height: 100vh;">
					<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'sliderLayout': 'fullscreen', 'delay': 9000, 'gridwidth': 1170, 'gridheight': 700, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500], 'parallax': { 'type': 'scroll', 'origo': 'enterpoint', 'speed': 1000, 'levels': [2,3,4,5,6,7,8,9,12,50], 'disable_onmobile': 'on' }}">
						<ul>
							<li class="slide-overlay" data-transition="fade">
								<img src="/templates/vinass/img/slides/slide-corporate-7-1.jpg"  
									alt=""
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									class="rev-slidebg">
								
								<div class="tp-caption"
									data-x="center" data-hoffset="['-165','-165','-165','-215']"
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
									data-transform_in="y:[-50%];opacity:0;s:500;">WE ROCK AND WE MAKE</div>

								<div class="tp-caption"
									data-x="center" data-hoffset="['165','165','165','215']"
									data-y="center" data-voffset="['-110','-110','-110','-135']"
									data-start="1000"
									data-transform_in="x:[300%];opacity:0;s:500;"
									data-transform_idle="opacity:0.2;s:500;"><img src="/templates/vinass/img/slides/slide-title-border.png" alt=""></div>

								<h1 class="tp-caption font-weight-extra-bold text-color-light negative-ls-2"
									data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="center"
									data-y="center" data-voffset="['-60','-60','-60','-85']"
									data-fontsize="['50','50','50','90']"
									data-lineheight="['55','55','55','95']">AWESOME DESIGNS</h1>

								<div class="tp-caption font-weight-light text-center"
									data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
									data-x="center"
									data-y="center" data-voffset="['-10','-10','-10','-25']"
									data-fontsize="['18','18','18','50']"
									data-lineheight="['29','29','29','40']"
									style="color: #b5b5b5;">VINASOFT is a huge success in the of one of the world’s largest MarketPlace.</div>

								<a class="tp-caption btn btn-light font-weight-bold text-color-primary"
									href="#"
									data-frames='[{"delay":3000,"speed":2000,"frame":"0","from":"y:50%;opacity:0;","to":"y:0;o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="center" data-hoffset="['-120','-120','-120','-195']"
									data-y="center" data-voffset="['65','65','65','210']"
									data-paddingtop="['15','15','15','30']"
									data-paddingbottom="['15','15','15','30']"
									data-paddingleft="['33','33','33','50']"
									data-paddingright="['33','33','33','50']"
									data-fontsize="['13','13','13','25']"
									data-lineheight="['20','20','20','25']">LEARN MORE</a>

								<a class="tp-caption btn btn-primary font-weight-bold"
									href="#"
									data-frames='[{"delay":3000,"speed":2000,"frame":"0","from":"y:50%;opacity:0;","to":"y:0;o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="center" data-hoffset="['90','90','90','165']"
									data-y="center" data-voffset="['65','65','65','210']"
									data-paddingtop="['15','15','15','30']"
									data-paddingbottom="['15','15','15','30']"
									data-paddingleft="['33','33','33','50']"
									data-paddingright="['33','33','33','50']"
									data-fontsize="['13','13','13','25']"
									data-lineheight="['20','20','20','25']">GET STARTED NOW <i class="fas fa-arrow-right ml-1"></i></a>
								
							</li>
							<li class="slide-overlay" data-transition="fade">
								<img src="/templates/vinass/img/slides/slide-corporate-7-2.jpg"  
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

								<div class="tp-caption font-weight-extra-bold text-color-light negative-ls-2"
									data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="center"
									data-y="center" data-voffset="['-60','-60','-60','-85']"
									data-fontsize="['50','50','50','90']"
									data-lineheight="['55','55','55','95']">VINASOFT HTML TEMPLATE</div>

								<div class="tp-caption font-weight-light text-center"
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

				<div class="container py-4">
					<div class="row pt-4 mt-5">
						<div class="col">
							<div class="row pt-2 clearfix">
								<div class="col-lg-6">
									<div class="feature-box feature-box-style-2 reverse appear-animation" data-appear-animation="fadeInRightShorter">
										<div class="feature-box-icon">
											<i class="icon-user-following icons text-color-primary"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="mb-2">Customer Support</h4>
											<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet.</p>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInLeftShorter">
										<div class="feature-box-icon">
											<i class="icon-layers icons text-color-primary"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="mb-2">Sliders</h4>
											<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="feature-box feature-box-style-2 reverse appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
										<div class="feature-box-icon">
											<i class="icon-calculator icons text-color-primary"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="mb-2">HTML5</h4>
											<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
										<div class="feature-box-icon">
											<i class="icon-star icons text-color-primary"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="mb-2">Icons</h4>
											<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="feature-box feature-box-style-2 reverse appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
										<div class="feature-box-icon">
											<i class="icon-drop icons text-color-primary"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="mb-2">Colors</h4>
											<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">
										<div class="feature-box-icon">
											<i class="icon-mouse icons text-color-primary"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="mb-2">Buttons</h4>
											<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row pb-5 mb-5 mt-3">
						<div class="col text-center">
							<a href="#" class="btn btn-primary btn-px-5 py-3 font-weight-semibold text-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">LEARN MORE</a>
						</div>
					</div>
				</div>

				<section class="section section-secondary border-0 py-0 m-0 appear-animation" data-appear-animation="fadeIn">
					<div class="container">
						<div class="row align-items-center justify-content-center justify-content-lg-between pb-5 pb-lg-0">
							<div class="col-lg-5 order-2 order-lg-1 pt-4 pt-lg-0 pb-5 pb-lg-0 mt-5 mt-lg-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
								<h2 class="font-weight-bold text-color-light text-7 mb-2">Who We Are</h2>
								<p class="lead font-weight-light text-color-light text-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit massa enim. Nullam id varius nunc.</p>
								<p class="font-weight-light text-color-light text-2 mb-4 opacity-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc. Vivamus bibendun magna ex, et faucibus lacus venenatis eget</p>
								<a href="#" class="btn btn-dark-scale-2 btn-px-5 btn-py-2 text-2">LEARN MORE</a>
							</div>
							<div class="col-9 offset-lg-1 col-lg-5 order-1 order-lg-2 scale-2">
								<img class="img-fluid box-shadow-3 my-2 border-radius" src="/templates/vinass/img/gallery/gallery-1.jpg" alt="">
							</div>
						</div>
					</div>
				</section>

				<section class="section section-height-4 bg-color-grey-scale-1 border-0 m-0 pb-5">
					<div class="container">
						<div class="row justify-content-center my-4">
							<div class="col appear-animation" data-appear-animation="fadeInUpShorter">
								<div class="owl-carousel owl-theme nav-bottom rounded-nav" data-plugin-options="{'items': 1, 'loop': true, 'autoHeight': true}">
									<div>
										<div class="col">
											<div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-dark mb-0">
												<div class="testimonial-author">
													<img src="/templates/vinass/img/clients/client-1.jpg" class="img-fluid rounded-circle" alt="">
												</div>
												<blockquote>
													<p class="text-color-dark text-5 line-height-5">Your time is limited, so don’t waste it living someone else’s life. Don’t be trapped by dogma - which is living with the results of other people’s thinking. Don’t let the noise of others’ opinions drown out your own inner voice.</p>
												</blockquote>
												<div class="testimonial-author">
													<p class="opacity-10"><strong class="font-weight-extra-bold text-2">- John Smith. Okler</strong></p>
												</div>
											</div>
										</div>
									</div>
									<div>
										<div class="col">
											<div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-dark mb-0">
												<div class="testimonial-author">
													<img src="/templates/vinass/img/clients/client-1.jpg" class="img-fluid rounded-circle" alt="">
												</div>
												<blockquote>
													<p class="text-color-dark text-5 line-height-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce ante tellus, convallis non consectetur sed, pharetra nec ex.</p>
												</blockquote>
												<div class="testimonial-author">
													<p class="opacity-10"><strong class="font-weight-extra-bold text-2">- John Smith. Okler</strong></p>
												</div>
											</div>
										</div>
									</div>
									<div>
										<div class="col">
											<div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-dark mb-0">
												<div class="testimonial-author">
													<img src="/templates/vinass/img/clients/client-1.jpg" class="img-fluid rounded-circle" alt="">
												</div>
												<blockquote>
													<p class="text-color-dark text-5 line-height-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
												</blockquote>
												<div class="testimonial-author">
													<p class="opacity-10"><strong class="font-weight-extra-bold text-2">- John Smith. Okler</strong></p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<div class="container">
					<div class="row py-5 my-5">
						<div class="col">
					
							<div class="owl-carousel owl-theme mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 1}, '768': {'items': 5}, '992': {'items': 7}, '1200': {'items': 7}}, 'autoplay': true, 'autoplayTimeout': 3000, 'dots': false}">
								<div>
									<img class="img-fluid opacity-2" src="/templates/vinass/img/logos/logo-1.png" alt="">
								</div>
								<div>
									<img class="img-fluid opacity-2" src="/templates/vinass/img/logos/logo-2.png" alt="">
								</div>
								<div>
									<img class="img-fluid opacity-2" src="/templates/vinass/img/logos/logo-3.png" alt="">
								</div>
								<div>
									<img class="img-fluid opacity-2" src="/templates/vinass/img/logos/logo-4.png" alt="">
								</div>
								<div>
									<img class="img-fluid opacity-2" src="/templates/vinass/img/logos/logo-5.png" alt="">
								</div>
								<div>
									<img class="img-fluid opacity-2" src="/templates/vinass/img/logos/logo-6.png" alt="">
								</div>
								<div>
									<img class="img-fluid opacity-2" src="/templates/vinass/img/logos/logo-4.png" alt="">
								</div>
								<div>
									<img class="img-fluid opacity-2" src="/templates/vinass/img/logos/logo-2.png" alt="">
								</div>
							</div>
							
						</div>
					</div>
				</div>

			</div>

			<footer id="footer" class="mt-0">
				<div class="container my-4">
					<div class="row py-5">
						<div class="col-md-5 col-lg-3 mb-5 mb-lg-0">
							<h5 class="text-6 text-transform-none font-weight-semibold text-color-light mb-4">Contact Details</h5>
							<p class="text-4 mb-1">VINASOFT Template 123</p>
							<p class="text-4 mb-4 pb-1">VINASOFT Blvd, Suite</p>

							<p class="text-5 mb-1 pt-2">Call: 123-456-7890</p>
							<p class="text-5 mb-0">Email: <a href="mailto:info@porto.com">info@porto.com</a></p>
						</div>
						<div class="col-md-7 col-lg-5 mb-5 mb-lg-0">
							<h5 class="text-6 text-transform-none font-weight-semibold text-color-light mb-4">Pages</h5>
							<div class="row">
								<div class="col-6">
									<p class="mb-1"><a href="elements-call-to-action.html" class="text-4 link-hover-style-1">Call to Action</a></p>
									<p class="mb-1"><a href="elements-pricing-tables.html" class="text-4 link-hover-style-1">Pricing Tables</a></p>
									<p class="mb-1"><a href="elements-word-rotator.html" class="text-4 link-hover-style-1">Word Rotator</a></p>
									<p class="mb-1"><a href="elements-tooltips-popovers.html" class="text-4 link-hover-style-1">Tooltips & Popovers</a></p>
									<p class="mb-1"><a href="elements-sticky-elements.html" class="text-4 link-hover-style-1">Sticky Elements</a></p>
								</div>
								<div class="col-6">
									<p class="mb-1"><a href="elements-progressbars.html" class="text-4 link-hover-style-1">Progress Bars</a></p>
									<p class="mb-1"><a href="elements-sections-parallax.html" class="text-4 link-hover-style-1">Sections & Parallax</a></p>
									<p class="mb-1"><a href="elements-lists.html" class="text-4 link-hover-style-1">Lists</a></p>
									<p class="mb-1"><a href="elements-image-frames.html" class="text-4 link-hover-style-1">Image Frames</a></p>
									<p class="mb-1"><a href="elements-testimonials.html" class="text-4 link-hover-style-1">Testimonials</a></p>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<h5 class="text-6 text-transform-none font-weight-semibold text-color-light mb-4">Newsletter</h5>
							<p class="text-4 mb-1">Get all the latest informationon Sales and Offers.</p>
							<p class="text-4">Sign up for newsletter today.</p>
							<div class="alert alert-success d-none" id="newsletterSuccess">
								<strong>Success!</strong> You've been added to our email list.
							</div>
							<div class="alert alert-danger d-none" id="newsletterError"></div>
							<form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST" class="mw-100">
								<div class="input-group input-group-rounded">
									<input class="form-control form-control-sm bg-light px-4 text-3" placeholder="Email Address..." name="newsletterEmail" id="newsletterEmail" type="text">
									<span class="input-group-append">
										<button class="btn btn-primary text-color-light text-2 py-3 px-4" type="submit"><strong>SUBSCRIBE!</strong></button>
									</span>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="footer-copyright footer-copyright-style-2">
					<div class="container py-2">
						<div class="row py-4">
							<div class="col d-flex align-items-center justify-content-center mb-4 mb-lg-0">
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
