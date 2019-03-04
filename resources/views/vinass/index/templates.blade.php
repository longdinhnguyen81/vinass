@extends('templates.vinass.master')
@section('content')
			<div role="main" class="main">
				<div class="slider-container rev_slider_wrapper" style="height: 550px;">
					<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 550, 'responsiveLevels': [4096,1200,992,500]}">
						<ul>
							<li class="slide-overlay slide-overlay-dark slide-overlay-level-6" data-transition="fade">
								<img src="/templates/vinass/img/bg-1.jpg"  
									alt="Vinasoft Solution Templates"
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									class="rev-slidebg">

								<div class="tp-caption"
									data-x="center" data-hoffset="['-150','-150','-150','-240']"
									data-y="center" data-voffset="['-50','-50','-50','-75']"
									data-start="1000"
									data-transform_in="x:[-300%];opacity:0;s:500;"
									data-transform_idle="opacity:0.2;s:500;"><img src="/templates/vinass/img/slides/slide-title-border.png" alt="Vinasoft Solution Templates"></div>

								<div class="tp-caption text-color-light font-weight-normal"
									data-x="center"
									data-y="center" data-voffset="['-50','-50','-50','-75']"
									data-start="700"
									data-fontsize="['22','22','22','40']"
									data-lineheight="['25','25','25','45']"
									data-transform_in="y:[-50%];opacity:0;s:500;">BẠN MUỐN TÌM MỘT</div>

								<div class="tp-caption d-none d-md-block"
									data-frames='[{"delay":2200,"speed":500,"frame":"0","from":"opacity:0;x:10%;","to":"opacity:1;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="center" data-hoffset="['80','80','80','135']"
									data-y="center" data-voffset="['-33','-33','-33','-55']"><img src="/templates/vinass/img/slides/slide-white-line.png" alt="Vinasoft Solution Templates"></div>

								<div class="tp-caption"
									data-x="center" data-hoffset="['150','150','150','240']"
									data-y="center" data-voffset="['-50','-50','-50','-75']"
									data-start="1000"
									data-transform_in="x:[300%];opacity:0;s:500;"
									data-transform_idle="opacity:0.2;s:500;"><img src="/templates/vinass/img/slides/slide-title-border.png" alt="Vinasoft Solution Templates"></div>

								<h1 class="tp-caption font-weight-extra-bold text-color-light negative-ls-2"
									data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="center"
									data-y="center"
									data-fontsize="['50','50','50','90']"
									data-lineheight="['55','55','55','95']">WEB DESIGNER?</h1>

								<div class="tp-caption text-light font-weight-light"
									data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
									data-x="center"
									data-y="center" data-voffset="['40','40','40','80']"
									data-fontsize="['18','18','18','50']"
									data-lineheight="['20','20','20','55']">Chúng tôi sẽ giúp bạn thiết kế WebSite</div>
								
							</li>
						</ul>
					</div>
				</div>
				<section class="section pt-0 my-0 pb-0 min-height-screen border-0 bg-color-light-scale-3" id="demos">
					<div class="container-fluid">
						<div class="row justify-content-center py-4 py-sm-0 btn-primary">
							<div class="col-auto col-sm-12 col-md-auto">
								<ul class="nav nav-light nav-active-style-1 sort-source justify-content-center flex-column flex-sm-row" data-sort-id="portfolio-" data-option-key="filter">
									<li class="nav-item" data-option-value="*"><a class="nav-link font-weight-semibold text-2 active" href="/giao-dien">XEM TẤT CẢ</a></li>
									<li class="nav-item" data-option-value=".gioi-thieu"><a class="nav-link font-weight-semibold text-2" href="#">GIỚI THIỆU</a></li>
									<li class="nav-item" data-option-value=".ban-hang"><a class="nav-link font-weight-semibold text-2" href="#">SHOP BÁN HÀNG</a></li>
									<li class="nav-item" data-option-value=".tuy-chon"><a class="nav-link font-weight-semibold text-2" href="#">TÙY CHỌN</a></li>
								</ul>
							</div>
						</div>
						<div class="row min-height-screen">
							<div class="col min-height-screen">
								<div class="sort-destination-loader min-height-screen mt-5 pt-2 px-4">
									<div class="row portfolio--list sort-destination overflow-visible" data-sort-id="portfolio-">										
										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item gioi-thieu px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="400">
												<div class="portfolio--item hover-effect-1">
													<a href="/giao-dien/index-classic-light">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/templates/45.jpg" class="img-fluid border-radius-0" alt="Vinasoft Solution Templates reponsive">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="/giao-dien/index-classic-light" class="text-color-dark text-decoration-none text-2 text-uppercase">Web Giới Thiệu Công ty 1</a></h2>
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item gioi-thieu px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="">
												<div class="portfolio--item hover-effect-1">
													<a href="/giao-dien/index-corporate-2">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/templates/4.jpg" class="img-fluid border-radius-0" alt="Vinasoft Solution Templates reponsive">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="/giao-dien/index-corporate-2" class="text-color-dark text-decoration-none text-2 text-uppercase">Web Giới Thiệu Công ty 2</a></h2>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item gioi-thieu px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="200">
												<div class="portfolio--item hover-effect-1">
													<a href="/giao-dien/index-corporate-3">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/templates/5.jpg" class="img-fluid border-radius-0" alt="Vinasoft Solution Templates reponsive">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="/giao-dien/index-corporate-3" class="text-color-dark text-decoration-none text-2 text-uppercase">Web Giới Thiệu Công ty 3</a></h2>
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item gioi-thieu px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="200">
												<div class="portfolio--item hover-effect-1">
													<a href="/giao-dien/index-corporate-8">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/templates/10.jpg" class="img-fluid border-radius-0" alt="Vinasoft Solution Templates reponsive">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="/giao-dien/index-corporate-8" class="text-color-dark text-decoration-none text-2 text-uppercase">Web Giới Thiệu Công ty 4</a></h2>
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item ban-hang creative px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="600">
												<div class="portfolio--item hover-effect-1">
													<a href="/giao-dien/shop-1">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/shop/2.jpg" class="img-fluid border-radius-0" alt="Vinasoft Solution Templates">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="/giao-dien/shop-1" class="text-color-dark text-decoration-none text-2 text-uppercase">Shop thời trang</a></h2>
												</div>
											</div>
										</div>
										
										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item ban-hang creative px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="600">
												<div class="portfolio--item hover-effect-1">
													<a href="/giao-dien/shop-2">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/shop/4.jpg" class="img-fluid border-radius-0" alt="Vinasoft Solution Templates">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="/giao-dien/shop-2" class="text-color-dark text-decoration-none text-2 text-uppercase">Shop phụ kiện</a></h2>
												</div>
											</div>
										</div>
										
										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item ban-hang creative px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="600">
												<div class="portfolio--item hover-effect-1">
													<a href="/giao-dien/shop-3">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/shop/5.jpg" class="img-fluid border-radius-0" alt="Vinasoft Solution Templates">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="/giao-dien/shop-3" class="text-color-dark text-decoration-none text-2 text-uppercase">Shop phụ kiện 2</a></h2>
												</div>
											</div>
										</div>
										
										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item ban-hang creative px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="600">
												<div class="portfolio--item hover-effect-1">
													<a href="/giao-dien/shop-4">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/shop/8.jpg" class="img-fluid border-radius-0" alt="Vinasoft Solution Templates">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="/giao-dien/shop-4" class="text-color-dark text-decoration-none text-2 text-uppercase">Shop đồ điện tử 1</a></h2>
												</div>
											</div>
										</div>
										
										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item ban-hang creative px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="600">
												<div class="portfolio--item hover-effect-1">
													<a href="/giao-dien/shop-5">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/shop/9.jpg" class="img-fluid border-radius-0" alt="Vinasoft Solution Templates">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="/giao-dien/shop-5" class="text-color-dark text-decoration-none text-2 text-uppercase">Shop đồ điện tử 2</a></h2>
												</div>
											</div>
										</div>
										
										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item ban-hang creative px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="600">
												<div class="portfolio--item hover-effect-1">
													<a href="/giao-dien/shop-6">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/shop/10.jpg" class="img-fluid border-radius-0" alt="Vinasoft Solution Templates">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="/giao-dien/shop-6" class="text-color-dark text-decoration-none text-2 text-uppercase">Shop thời trang</a></h2>
												</div>
											</div>
										</div>
										
										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item ban-hang creative px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="600">
												<div class="portfolio--item hover-effect-1">
													<a href="/giao-dien/shop-7">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/shop/11.jpg" class="img-fluid border-radius-0" alt="Vinasoft Solution Templates">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="/giao-dien/shop-7" class="text-color-dark text-decoration-none text-2 text-uppercase">Shop nội thất</a></h2>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item ban-hang creative px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="600">
												<div class="portfolio--item hover-effect-1">
													<a href="/giao-dien/shop-8">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/shop/12.jpg" class="img-fluid border-radius-0" alt="Vinasoft Solution Templates">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="/giao-dien/shop-8" class="text-color-dark text-decoration-none text-2 text-uppercase">Shop đồ nữ</a></h2>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item ban-hang creative px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="600">
												<div class="portfolio--item hover-effect-1">
													<a href="/giao-dien/shop-9">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/shop/17.jpg" class="img-fluid border-radius-0" alt="Vinasoft Solution Templates">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 ban-hang text-center"><a href="/giao-dien/shop-9" class="text-color-dark text-decoration-none text-2 text-uppercase">Shop mỹ phẩm</a></h2>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item ban-hang creative px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="600">
												<div class="portfolio--item hover-effect-1">
													<a href="/giao-dien/shop-10">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/shop/18.jpg" class="img-fluid border-radius-0" alt="Vinasoft Solution Templates">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="/giao-dien/shop-10" class="text-color-dark text-decoration-none text-2 text-uppercase">Shop đồ nữ</a></h2>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item tuy-chon px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="200">
												<div class="portfolio--item hover-effect-1">
													<a href="/giao-dien/homestay">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/img/preview-8.jpg" class="img-fluid border-radius-0" alt="Vinasoft Solution Templates">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="/giao-dien/homestay" class="text-color-dark text-decoration-none text-2 text-uppercase">Website bất động sản</a></h2>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item tuy-chon px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="600">
												<div class="portfolio--item hover-effect-1">
													<a href="/giao-dien/education">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/img/preview-5.jpg" class="img-fluid border-radius-0" alt="Vinasoft Solution Templates">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="/giao-dien/education" class="text-color-dark text-decoration-none text-2 text-uppercase">Website giáo dục</a></h2>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</section>
			</div>
@stop

@section('meta')
		<title>VinaSofts | Thiết kế web tại Đà Nẵng, làm Web đẹp, chuẩn SEO</title>
		<meta name="keywords" content="thiet ke web da nang, thiết kế web đà nẵng, seo top google, thiết kế web đẹp, thiết kế web bán hàng">
		<meta name="news_keywords" content="thiet ke web da nang, thiết kế web đà nẵng, seo top google, thiết kế web đẹp, thiết kế web bán hàng">
		<meta name="description" content="Vinasofts thiết kế web đẹp, chất lượng độc đáo tại đà nẵng. Thiết kế ứng dụng, web thương mại điện tử chuyên nghiệp">
		<meta property="og:title" itemprop="name" content="VinaSofts | Thiết kế web tại Đà Nẵng, làm Web đẹp, chuẩn SEO">    
		<meta property="og:url" itemprop="url" content="https://www.vinasofts.vn">
		<meta property="og:description" content="Vinasofts thiết kế web đẹp, chất lượng độc đáo tại đà nẵng. Thiết kế ứng dung, web thương mại điện tử chuyên nghiệp">
		<meta content="https://vinasofts.vn/templates/vinass/img/bg-1.jpg" property="og:image" itemprop="thumbnailUrl" />
@stop