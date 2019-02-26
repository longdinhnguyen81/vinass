<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>Vinasofts - Responsive HTML5 Template 7.2.0</title>	

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Vinasofts - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="/templates/vinass/img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="/templates/vinass/img/apple-touch-icon.png">

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
		<link rel="stylesheet" href="/templates/vinass/css/skins/skin-corporate-6.css"> 

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="/templates/vinass/css/custom.css">

		<!-- Head Libs -->
		<script src="/templates/vinass/vendor/modernizr/modernizr.min.js"></script>

	</head>
	<body>

		<div class="body">
			<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}">
				<div class="header-body">
					@include('templates.vinass.superheader')
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo">
										<a href="/">
											<img alt="Vinasofts" width="100" height="48" data-sticky-width="82" data-sticky-height="40" src="/templates/vinass/img/logo.png">
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<div class="header-nav header-nav-links order-2 order-lg-1">
										<div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
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
				<div class="slider-container rev_slider_wrapper" style="height: 650px;">
					<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 650, 'responsiveLevels': [4096,1200,992,500], 'navigation' : {'arrows': { 'enable': false }, 'bullets': {'enable': true, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 70, 'h_offset': 0}}}">
						<ul>
							<li data-transition="fade" class="slide-overlay slide-overlay-level-8">
								<img src="/templates/vinass/img/slides/slide-corporate-6-1.jpg"  
									alt=""
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									class="rev-slidebg">
				
								<h1 class="tp-caption font-weight-extra-bold text-color-light negative-ls-2"
									data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="center"
									data-y="center" data-voffset="['-55','-55','-55','-55']"
									data-fontsize="['50','50','50','90']"
									data-lineheight="['55','55','55','95']"
									data-letterspacing="-1">Vinasofts TEMPLATE</h1>

								<div class="tp-caption font-weight-light text-center"
									data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
									data-x="center"
									data-y="center" data-voffset="['-5','-5','-5','15']"
									data-fontsize="['18','18','18','50']"
									data-lineheight="['29','29','29','40']"
									style="color: #b5b5b5;">Trusted by over <strong>30,000</strong> satisfied users.</div>

								<a class="tp-caption btn btn-light-2 btn-outline font-weight-semibold"
									data-frames='[{"delay":2500,"speed":2000,"frame":"0","from":"opacity:0;y:50%;","to":"o:1;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-hash
									data-hash-offset="85"
									href="#main"
									data-x="center" data-hoffset="0"
									data-y="center" data-voffset="['65','65','65','105']"
									data-whitespace="nowrap"	
									data-fontsize="['15','15','15','33']"	
									data-paddingtop="['15','15','15','40']"
									data-paddingright="['45','45','45','110']"
									data-paddingbottom="['15','15','15','40']"				 
									data-paddingleft="['45','45','45','110']">GET STARTED NOW!</a>
								
							</li>
							<li class="slide-overlay slide-overlay-level-7" data-transition="fade">
								<img src="/templates/vinass/img/slides/slide-corporate-2-1.jpg"  
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
									data-lineheight="['55','55','55','95']">Vinasofts HTML TEMPLATE</div>

								<div class="tp-caption font-weight-light text-center"
									data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
									data-x="center"
									data-y="center" data-voffset="['-10','-10','-10','-25']"
									data-fontsize="['18','18','18','50']"
									data-lineheight="['29','29','29','40']"
									style="color: #b5b5b5;">Trusted by over <strong>30,000</strong> satisfied users.</div>
				
								<a class="tp-caption btn btn-light-2 btn-outline font-weight-semibold"
									data-frames='[{"delay":2500,"speed":2000,"frame":"0","from":"opacity:0;y:50%;","to":"o:1;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-hash
									data-hash-offset="85"
									href="#main"
									data-x="center" data-hoffset="0"
									data-y="center" data-voffset="['70','70','70','45']"
									data-whitespace="nowrap"	
									data-fontsize="['15','15','15','33']"	
									data-paddingtop="['15','15','15','40']"
									data-paddingright="['45','45','45','110']"
									data-paddingbottom="['15','15','15','40']"				 
									data-paddingleft="['45','45','45','110']">GET STARTED NOW!</a>
								
							</li>
						</ul>
					</div>
				</div>
				<section class="section section-primary section-no-border section-height-4 my-0 appear-animation" data-appear-animation="fadeIn">
					<div class="container">
						<div class="row">
							<div class="col-lg-5 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
								<span class="lead text-color-light opacity-6 text-2 mb-0">LOREM IPSUM DOLOR SIT</span>
								<h2 class="font-weight-bold line-height-1 text-7 negative-ls-1 mb-3">The Best HTML Template Ever</h2>
								<p class="text-color-light opacity-8 text-4 mb-4">Lorem ipsum dolor sit amet, consectetur adipscing elit massa enim. ullam id varius nunc.</p>
								<p class="text-color-light opacity-8 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc. Vivamus bibendum magna ex, et faucibus lacus venenatis eget</p>
								<a href="#" class="btn btn-dark font-weight-semibold btn-px-5 btn-py-2 text-2 rounded-0">LEARN MORE</a>
							</div>
							<div class="col-lg-7 mt-5 mt-lg-0">
								<div class="row">
									<div class="col-lg-6 mb-4 mb-lg-5 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
										<div class="feature-box feature-box-style-2">
											<div class="feature-box-icon">
												<i class="icon-user-following icons text-color-light"></i>
											</div>
											<div class="feature-box-info">
												<h4 class="font-weight-bold text-color-light mb-2">Customer Support</h4>
												<p class="text-color-light opacity-8 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet.</p>
											</div>
										</div>
									</div>
									<div class="col-lg-6 mb-4 mb-lg-5 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
										<div class="feature-box feature-box-style-2">
											<div class="feature-box-icon">
												<i class="icon-layers icons text-color-light"></i>
											</div>
											<div class="feature-box-info">
												<h4 class="font-weight-bold text-color-light mb-2">Sliders</h4>
												<p class="text-color-light opacity-8 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-lg-6 mb-4 mb-lg-0">
										<div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="800">
											<div class="feature-box-icon">
												<i class="icon-star icons text-color-light"></i>
											</div>
											<div class="feature-box-info">
												<h4 class="font-weight-bold text-color-light mb-2">Icons</h4>
												<p class="text-color-light opacity-8 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet.</p>
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="600">
											<div class="feature-box-icon">
												<i class="icon-drop icons text-color-light"></i>
											</div>
											<div class="feature-box-info">
												<h4 class="font-weight-bold text-color-light mb-2">Colors</h4>
												<p class="text-color-light opacity-8 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="section section-height-3 bg-color-grey-scale-1 section-no-border m-0">
					<div class="container my-2">
						<div class="row">
							<div class="col-lg-12 text-center appear-animation" data-appear-animation="fadeInUpShorter">
								<h2 class="font-weight-normal text-6 mb-5">Our <strong class="font-weight-extra-bold">Clients</strong></h2>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
								<div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-remove-right-quote testimonial-quotes-dark mb-0">
									<div class="testimonial-author">
										<img src="/templates/vinass/img/clients/client-1.jpg" class="img-fluid rounded-circle mb-0" alt="">
									</div>
									<blockquote>
										<p class="text-color-dark mb-0">Your time is limited, so don’t waste it living someone else’s life. Don’t be trapped by dogma - which is living with the results of other people’s thinking.</p>
									</blockquote>
									<div class="testimonial-author">
										<p><strong class="font-weight-extra-bold text-color-dark text-4">John Doe</strong></p>
										<p>Okler</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500">
								<div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-remove-right-quote testimonial-quotes-dark mb-0">
									<div class="testimonial-author">
										<img src="/templates/vinass/img/clients/client-1.jpg" class="img-fluid rounded-circle mb-0" alt="">
									</div>
									<blockquote>
										<p class="text-color-dark mb-0">Your time is limited, so don’t waste it living someone else’s life. Don’t be trapped by dogma - which is living with the results of other people’s thinking.</p>
									</blockquote>
									<div class="testimonial-author">
										<p><strong class="font-weight-extra-bold text-color-dark text-4">John Doe</strong></p>
										<p>Okler</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<div class="container">
					<div class="row pt-4 mt-5">
						<div class="col text-center appear-animation" data-appear-animation="fadeInUpShorter">
							<h2 class="font-weight-normal text-6">Our <strong class="font-weight-extra-bold">Portfolio</strong></h2>
						</div>
					</div>
					<div class="row pb-4 mb-5">
						<div class="col appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
							<div class="owl-carousel owl-theme mb-0" data-plugin-options="{'items': 4, 'margin': 0, 'loop': false}">
								<div>
									<a href="portfolio-single.html">
										<img src="/templates/vinass/img/projects/project-35.jpg" class="img-fluid" alt="">
									</a>
								</div>
								<div>
									<a href="portfolio-single.html">
										<img src="/templates/vinass/img/projects/project-36.jpg" class="img-fluid" alt="">
									</a>
								</div>
								<div>
									<a href="portfolio-single.html">
										<img src="/templates/vinass/img/projects/project-37.jpg" class="img-fluid" alt="">
									</a>
								</div>
								<div>
									<a href="portfolio-single.html">
										<img src="/templates/vinass/img/projects/project-38.jpg" class="img-fluid" alt="">
									</a>
								</div>
								<div>
									<a href="portfolio-single.html">
										<img src="/templates/vinass/img/projects/project-36.jpg" class="img-fluid" alt="">
									</a>
								</div>
								<div>
									<a href="portfolio-single.html">
										<img src="/templates/vinass/img/projects/project-37.jpg" class="img-fluid" alt="">
									</a>
								</div>
								<div>
									<a href="portfolio-single.html">
										<img src="/templates/vinass/img/projects/project-38.jpg" class="img-fluid" alt="">
									</a>
								</div>
							</div>

						</div>
					</div>
				</div>
				<section class="section section-height-3 bg-color-grey-scale-1 section-no-border m-0">
					<div class="container">
						<div class="row">
							<div class="col-lg-12 text-center">
								<h2 class="font-weight-normal text-6 mb-5">Our <strong class="font-weight-extra-bold">Blog</strong></h2>
							</div>
						</div>
						<div class="row recent-posts pb-4 mb-5">
							<div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
								<article>
									<div class="row">
										<div class="col-auto pr-0">
											<div class="date">
												<span class="day text-color-dark font-weight-extra-bold">15</span>
												<span class="month bg-color-light font-weight-semibold text-color-primary text-1">JAN</span>
											</div>
										</div>
										<div class="col pl-1">
											<h4 class="line-height-3 text-4"><a href="blog-post.html" class="text-dark">Lorem ipsum dolor sit amet, consectetur</a></h4>
											<p class="line-height-5 pr-3 mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta.</p>
											<a href="/" class="read-more text-color-dark font-weight-bold text-2">read more <i class="fas fa-chevron-right text-1 ml-1"></i></a>
										</div>
									</div>
								</article>
							</div>
							<div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
								<article>
									<div class="row">
										<div class="col-auto pr-0">
											<div class="date">
												<span class="day text-color-dark font-weight-extra-bold">14</span>
												<span class="month bg-color-light font-weight-semibold text-color-primary text-1">JAN</span>
											</div>
										</div>
										<div class="col pl-1">
											<h4 class="line-height-3 text-4"><a href="blog-post.html" class="text-dark">Lorem ipsum dolor sit amet, consectetur</a></h4>
											<p class="line-height-5 pr-3 mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta.</p>
											<a href="/" class="read-more text-color-dark font-weight-bold text-2">read more <i class="fas fa-chevron-right text-1 ml-1"></i></a>
										</div>
									</div>
								</article>
							</div>
							<div class="col-md-6 col-lg-3 mb-4 mb-md-0">
								<article>
									<div class="row">
										<div class="col-auto pr-0">
											<div class="date">
												<span class="day text-color-dark font-weight-extra-bold">13</span>
												<span class="month bg-color-light font-weight-semibold text-color-primary text-1">JAN</span>
											</div>
										</div>
										<div class="col pl-1">
											<h4 class="line-height-3 text-4"><a href="blog-post.html" class="text-dark">Lorem ipsum dolor sit amet, consectetur</a></h4>
											<p class="line-height-5 pr-3 mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta.</p>
											<a href="/" class="read-more text-color-dark font-weight-bold text-2">read more <i class="fas fa-chevron-right text-1 ml-1"></i></a>
										</div>
									</div>
								</article>
							</div>
							<div class="col-md-6 col-lg-3">
								<article>
									<div class="row">
										<div class="col-auto pr-0">
											<div class="date">
												<span class="day text-color-dark font-weight-extra-bold">12</span>
												<span class="month bg-color-light font-weight-semibold text-color-primary text-1">JAN</span>
											</div>
										</div>
										<div class="col pl-1">
											<h4 class="line-height-3 text-4"><a href="blog-post.html" class="text-dark">Lorem ipsum dolor sit amet, consectetur</a></h4>
											<p class="line-height-5 pr-3 mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta.</p>
											<a href="/" class="read-more text-color-dark font-weight-bold text-2">read more <i class="fas fa-chevron-right text-1 ml-1"></i></a>
										</div>
									</div>
								</article>
							</div>
						</div>
						<div class="row mb-5">
							<div class="col-lg-12 text-center">
								<a href="#" class="btn btn-dark btn-px-5 btn-py-2 font-weight-bold text-color-light rounded-0 text-2">VIEW BLOG</a>
							</div>
						</div>
					</div>
				</section>
			</div>
 
			<footer id="footer" class="mt-0">
				<div class="container">
					<div class="footer-ribbon">
						<span>Get in Touch</span>
					</div>
					<div class="row py-5 my-4">
						<div class="col-md-7 col-lg-4 mb-5 mb-lg-0 pt-3">
							<h5 class="text-3 mb-3">ABOUT US</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna semper scelerisque.</p>
							<p class="mb-0">Praesent venenatis turpis vitae purus semper, eget sagittis velit venenatis ptent taciti sociosqu ad litora...</p>
							<p class="mb-0"><a href="#" class="btn-flat btn-xs text-color-light p-relative top-5"><strong class="text-2">VIEW MORE</strong><i class="fas fa-angle-right p-relative top-1 pl-2"></i></a></p>
						</div>
						<div class="col-md-5 col-lg-3 mb-5 mb-lg-0 pt-3">
							<h5 class="text-3 mb-3 pb-1">CONTACT US</h5>
							<p class="text-8 text-color-light font-weight-bold">(800) 123-4567</p>
							<p class="mb-2">International: (333) 456-6670</p>
							<p class="mb-2">Fax: (222) 531-8999</p>
							<ul class="list list-icons list-icons-lg">
								<li class="mb-1"><i class="far fa-dot-circle text-color-primary"></i><p class="m-0">234 Street Name, City Name</p></li>
								<li class="mb-1"><i class="far fa-envelope text-color-primary"></i><p class="m-0"><a href="mailto:mail@example.com">mail@example.com</a></p></li>
							</ul>
							<ul class="social-icons mt-4">
								<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
								<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
								<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
							</ul>
						</div>
						<div class="col-lg-5 pt-3">
							<h5 class="text-3 mb-3 pb-1">SEND US A MESSAGE</h5>
							<form id="contactForm" class="contact-form" action="php/contact-form.php" method="POST">
								<input type="hidden" value="Contact Form" name="subject" id="subject">
								<div class="contact-form-success alert alert-success d-none" id="contactSuccess">
									Message has been sent to us.
								</div>

								<div class="contact-form-error alert alert-danger d-none" id="contactError">
									Error sending your message.
									<span class="mail-error-message text-1 d-block" id="mailErrorMessage"></span>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control py-2" placeholder="Your Name..." name="name" id="name" required>
									</div>
								</div>
								<div class="form-group">
									<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control py-2" placeholder="Your Email Address..." name="email" id="email" required>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<textarea maxlength="5000" data-msg-required="Please enter your message." rows="4" class="form-control" placeholder="Your Message..." name="message" id="message" required></textarea>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<input type="submit" value="SUBMIT" class="btn btn-xl btn-outline btn-primary text-1 font-weight-bold text-uppercase" data-loading-text="Loading...">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="footer-copyright">
					<div class="container py-2">
						<div class="row py-4">
							<div class="col-lg-1 d-flex align-items-center justify-content-center justify-content-lg-start mb-2 mb-lg-0">
								<a href="/" class="logo pr-0 pr-lg-3">
									<img alt="Vinasofts Website Template" src="/templates/vinass/img/logo-footer.png" class="opacity-5" height="33">
								</a>
							</div>
							<div class="col-lg-7 d-flex align-items-center justify-content-center justify-content-lg-start mb-4 mb-lg-0">
								<p>© Copyright 2019. All Rights Reserved.</p>
							</div>
							<div class="col-lg-4 d-flex align-items-center justify-content-center justify-content-lg-end">
								<nav id="sub-menu">
									<ul>
										<li><i class="fas fa-angle-right"></i><a href="page-faq.html" class="ml-1 text-decoration-none"> FAQ's</a></li>
										<li><i class="fas fa-angle-right"></i><a href="sitemap.html" class="ml-1 text-decoration-none"> Sitemap</a></li>
										<li><i class="fas fa-angle-right"></i><a href="contact-us.html" class="ml-1 text-decoration-none"> Contact Us</a></li>
									</ul>
								</nav>
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
		<script src="/templates/vinass/vendor/circle-flip-slideshow/js/jquery.flipshow.min.js"></script>
		<script src="/templates/vinass/js/views/view.home.js"></script>

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
