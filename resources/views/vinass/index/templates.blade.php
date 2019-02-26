@extends('templates.vinass.master')
@section('content')
			<div role="main" class="main">
				<div class="slider-container rev_slider_wrapper" style="height: 550px;">
					<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 550, 'responsiveLevels': [4096,1200,992,500]}">
						<ul>
							<li class="slide-overlay slide-overlay-dark slide-overlay-level-6" data-transition="fade">
								<img src="/templates/vinass/img/bg-1.jpg"  
									alt=""
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									class="rev-slidebg">

								<div class="tp-caption"
									data-x="center" data-hoffset="['-150','-150','-150','-240']"
									data-y="center" data-voffset="['-50','-50','-50','-75']"
									data-start="1000"
									data-transform_in="x:[-300%];opacity:0;s:500;"
									data-transform_idle="opacity:0.2;s:500;"><img src="/templates/vinass/img/slides/slide-title-border.png" alt=""></div>

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
									data-y="center" data-voffset="['-33','-33','-33','-55']"><img src="/templates/vinass/img/slides/slide-white-line.png" alt=""></div>

								<div class="tp-caption"
									data-x="center" data-hoffset="['150','150','150','240']"
									data-y="center" data-voffset="['-50','-50','-50','-75']"
									data-start="1000"
									data-transform_in="x:[300%];opacity:0;s:500;"
									data-transform_idle="opacity:0.2;s:500;"><img src="/templates/vinass/img/slides/slide-title-border.png" alt=""></div>

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
								<ul class="nav nav-light nav-active-style-1 sort-source justify-content-center flex-column flex-sm-row" data-sort-id="portfolio" data-option-key="filter">
									<li class="nav-item" data-option-value="*"><a class="nav-link font-weight-semibold text-2 active" href="/giao-dien">SHOW ALL</a></li>
									<li class="nav-item" data-option-value=".creative"><a class="nav-link font-weight-semibold text-2" href="#">CREATIVE</a></li>
									<li class="nav-item" data-option-value=".onepage"><a class="nav-link font-weight-semibold text-2" href="#">ONE PAGE</a></li>
									<li class="nav-item" data-option-value=".business"><a class="nav-link font-weight-semibold text-2" href="#">BUSINESS</a></li>
									<li class="nav-item" data-option-value=".portfolio"><a class="nav-link font-weight-semibold text-2" href="#">PORTFOLIO</a></li>
									<li class="nav-item" data-option-value=".blog"><a class="nav-link font-weight-semibold text-2" href="#">BLOG</a></li>
									<li class="nav-item" data-option-value=".classic"><a class="nav-link font-weight-semibold text-2" href="#">CLASSIC</a></li>
								</ul>
							</div>
						</div>
						<div class="row min-height-screen">
							<div class="col min-height-screen">
								<div class="sort-destination-loader min-height-screen mt-5 pt-2 px-4">
									<div class="row portfolio-list sort-destination overflow-visible" data-sort-id="portfolio">

										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item onepage px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="">
												<div class="portfolio-item hover-effect-1">
													<a href="/templates/index-one-page">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/templates/2.jpg" class="img-fluid border-radius-0" alt="Vinasofts templates">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="/templates/index-one-page" class="text-color-dark text-decoration-none text-1 text-uppercase">Index One Page</a></h2>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item classic px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="">
												<div class="portfolio-item hover-effect-1">
													<a href="/templates/index-classic">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/templates/43.jpg" class="img-fluid border-radius-0" alt="Vinasofts templates">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="/templates/index-classic" class="text-color-dark text-decoration-none text-1 text-uppercase">Classic</a></h2>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item classic px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="200">
												<div class="portfolio-item hover-effect-1">
													<a href="/templates/index-classic-color">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/templates/3.jpg" class="img-fluid border-radius-0" alt="Vinasofts templates">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="/templates/index-classic-color" class="text-color-dark text-decoration-none text-1 text-uppercase">Classic color</a></h2>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item classic px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="400">
												<div class="portfolio-item hover-effect-1">
													<a href="/templates/index-classic-light">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/templates/19.jpg" class="img-fluid border-radius-0" alt="Vinasofts templates reponsive">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="/templates/index-classic-light" class="text-color-dark text-decoration-none text-1 text-uppercase">Classic light</a></h2>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item business px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="600">
												<div class="portfolio-item hover-effect-1">
													<a href="/templates/index-corporate">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/templates/3.jpg" class="img-fluid border-radius-0" alt="Vinasofts templates reponsive">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="/templates/index-corporate" class="text-color-dark text-decoration-none text-1 text-uppercase">Corporate 1</a></h2>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item business px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="">
												<div class="portfolio-item hover-effect-1">
													<a href="/templates/index-corporate-2">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/templates/4.jpg" class="img-fluid border-radius-0" alt="Vinasofts templates reponsive">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="/templates/index-corporate-2" class="text-color-dark text-decoration-none text-1 text-uppercase">Corporate 2</a></h2>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item business px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="200">
												<div class="portfolio-item hover-effect-1">
													<a href="/templates/index-corporate-3">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/templates/5.jpg" class="img-fluid border-radius-0" alt="Vinasofts templates reponsive">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="/templates/index-corporate-3" class="text-color-dark text-decoration-none text-1 text-uppercase">Corporate 3</a></h2>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item business px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="400">
												<div class="portfolio-item hover-effect-1">
													<a href="/templates/index-corporate-4">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/templates/6.jpg" class="img-fluid border-radius-0" alt="Vinasofts templates reponsive">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="/templates/index-corporate-4" class="text-color-dark text-decoration-none text-1 text-uppercase">Corporate 4</a></h2>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item business px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="600">
												<div class="portfolio-item hover-effect-1">
													<a href="/templates/index-corporate-5">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/templates/7.jpg" class="img-fluid border-radius-0" alt="Vinasofts templates reponsive">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="/templates/index-corporate-5" class="text-color-dark text-decoration-none text-1 text-uppercase">Corporate 5</a></h2>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item business px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="">
												<div class="portfolio-item hover-effect-1">
													<a href="/templates/index-corporate-6">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/templates/8.jpg" class="img-fluid border-radius-0" alt="Vinasofts templates reponsive">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="/templates/index-corporate-6" class="text-color-dark text-decoration-none text-1 text-uppercase">Corporate 6</a></h2>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item business px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="200">
												<div class="portfolio-item hover-effect-1">
													<a href="/templates/index-corporate-7">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/templates/9.jpg" class="img-fluid border-radius-0" alt="Vinasofts templates reponsive">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="/templates/index-corporate-7" class="text-color-dark text-decoration-none text-1 text-uppercase">Corporate 7</a></h2>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item business px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="200">
												<div class="portfolio-item hover-effect-1">
													<a href="/templates/index-corporate-8">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/templates/10.jpg" class="img-fluid border-radius-0" alt="Vinasofts templates reponsive">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="/templates/index-corporate-8" class="text-color-dark text-decoration-none text-1 text-uppercase">Corporate 8</a></h2>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item business px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="200">
												<div class="portfolio-item hover-effect-1">
													<a href="/templates/index-corporate-9">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/templates/11.jpg" class="img-fluid border-radius-0" alt="Vinasofts templates reponsive">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="/templates/index-corporate-9" class="text-color-dark text-decoration-none text-1 text-uppercase">Corporate 9</a></h2>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item business px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="200">
												<div class="portfolio-item hover-effect-1">
													<a href="/templates/index-corporate-10">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/templates/12.jpg" class="img-fluid border-radius-0" alt="Vinasofts templates reponsive">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="/templates/index-corporate-10" class="text-color-dark text-decoration-none text-1 text-uppercase">Corporate 10</a></h2>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item business px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="200">
												<div class="portfolio-item hover-effect-1">
													<a href="/templates/index-corporate-11">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/templates/13.jpg" class="img-fluid border-radius-0" alt="Vinasofts templates reponsive">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="/templates/index-corporate-11" class="text-color-dark text-decoration-none text-1 text-uppercase">Corporate 11</a></h2>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item business px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="200">
												<div class="portfolio-item hover-effect-1">
													<a href="/templates/index-corporate-12">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/templates/14.jpg" class="img-fluid border-radius-0" alt="">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="/templates/index-corporate-12" class="text-color-dark text-decoration-none text-1 text-uppercase">Corporate 12</a></h2>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item business px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="200">
												<div class="portfolio-item hover-effect-1">
													<a href="/templates/index-corporate-13">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/templates/15.jpg" class="img-fluid border-radius-0" alt="">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="/templates/index-corporate-13" class="text-color-dark text-decoration-none text-1 text-uppercase">Corporate 13</a></h2>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item business px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="200">
												<div class="portfolio-item hover-effect-1">
													<a href="/templates/index-corporate-14">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/templates/16.jpg" class="img-fluid border-radius-0" alt="">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="/templates/index-corporate-14" class="text-color-dark text-decoration-none text-1 text-uppercase">Corporate 14</a></h2>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item business px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="200">
												<div class="portfolio-item hover-effect-1">
													<a href="/templates/index-corporate-15">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/templates/17.jpg" class="img-fluid border-radius-0" alt="">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="/templates/index-corporate-8" class="text-color-dark text-decoration-none text-1 text-uppercase">Corporate 15</a></h2>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item business px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="200">
												<div class="portfolio-item hover-effect-1">
													<a href="/templates/index-corporate-16">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/templates/18.jpg" class="img-fluid border-radius-0" alt="">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="/templates/index-corporate-9" class="text-color-dark text-decoration-none text-1 text-uppercase">Corporate 16</a></h2>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item business px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="200">
												<div class="portfolio-item hover-effect-1">
													<a href="/templates/index-corporate-17">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/templates/19.jpg" class="img-fluid border-radius-0" alt="">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="/templates/index-corporate-10" class="text-color-dark text-decoration-none text-1 text-uppercase">Corporate 17</a></h2>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item business px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="200">
												<div class="portfolio-item hover-effect-1">
													<a href="/templates/index-corporate-18">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/templates/20.jpg" class="img-fluid border-radius-0" alt="">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="/templates/index-corporate-18" class="text-color-dark text-decoration-none text-1 text-uppercase">Corporate 18</a></h2>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item business px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="200">
												<div class="portfolio-item hover-effect-1">
													<a href="/templates/index-corporate-19">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/templates/21.jpg" class="/templates/index-corporate-19" alt="">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="/templates/index-corporate-19" class="text-color-dark text-decoration-none text-1 text-uppercase">Corporate 19</a></h2>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item business px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="200">
												<div class="portfolio-item hover-effect-1">
													<a href="/templates/index-corporate-20">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/templates/22.jpg" class="img-fluid border-radius-0" alt="">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="/templates/index-corporate-20" class="text-color-dark text-decoration-none text-1 text-uppercase">Corporate 20</a></h2>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item portfolio px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="200">
												<div class="portfolio-item hover-effect-1">
													<a href="/templates/portfolio1">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/templates/p1.jpg" class="img-fluid border-radius-0" alt="">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="/templates/portfolio1" class="text-color-dark text-decoration-none text-1 text-uppercase">Portfolio 1</a></h2>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item portfolio px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="200">
												<div class="portfolio-item hover-effect-1">
													<a href="/templates/portfolio2">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/templates/p2.jpg" class="img-fluid border-radius-0" alt="">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="/templates/portfolio2" class="text-color-dark text-decoration-none text-1 text-uppercase">Portfolio 2</a></h2>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item portfolio px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="200">
												<div class="portfolio-item hover-effect-1">
													<a href="/templates/portfolio3">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/templates/p3.jpg" class="img-fluid border-radius-0" alt="">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="/templates/portfolio3" class="text-color-dark text-decoration-none text-1 text-uppercase">Portfolio 3</a></h2>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item portfolio px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="200">
												<div class="portfolio-item hover-effect-1">
													<a href="/templates/portfolio4">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/templates/p4.jpg" class="img-fluid border-radius-0" alt="">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="/templates/portfolio4" class="text-color-dark text-decoration-none text-1 text-uppercase">Portfolio 4</a></h2>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item blog px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="200">
												<div class="portfolio-item hover-effect-1">
													<a href="index-blog">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/img/previews/preview-blog.jpg" class="img-fluid border-radius-0" alt="">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="index-blog" class="text-color-dark text-decoration-none text-1 text-uppercase">Blog 1</a></h2>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item blog px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="200">
												<div class="portfolio-item hover-effect-1">
													<a href="index-blog-2">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/img/previews/preview-blog-2.jpg" class="img-fluid border-radius-0" alt="">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="index-blog-2" class="text-color-dark text-decoration-none text-1 text-uppercase">Blog 2</a></h2>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item blog px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="200">
												<div class="portfolio-item hover-effect-1">
													<a href="index-blog-3">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/img/previews/preview-blog-3.jpg" class="img-fluid border-radius-0" alt="">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="index-blog-3" class="text-color-dark text-decoration-none text-1 text-uppercase">Blog 3</a></h2>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item blog px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="200">
												<div class="portfolio-item hover-effect-1">
													<a href="index-blog-4">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/img/previews/preview-blog-4.jpg" class="img-fluid border-radius-0" alt="">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="index-blog-4" class="text-color-dark text-decoration-none text-1 text-uppercase">Blog 4</a></h2>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item blog px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="200">
												<div class="portfolio-item hover-effect-1">
													<a href="index-blog-5">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/img/previews/preview-blog-5.jpg" class="img-fluid border-radius-0" alt="">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="index-blog-5" class="text-color-dark text-decoration-none text-1 text-uppercase">Blog 5</a></h2>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item business px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="400">
												<div class="portfolio-item hover-effect-1">
													<a href="index-corporate-hosting">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/templates/hosting.jpg" class="img-fluid border-radius-0" alt="">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="index-corporate-hosting" class="text-color-dark text-decoration-none text-1 text-uppercase">Hosting</a></h2>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item business px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="600">
												<div class="portfolio-item hover-effect-1">
													<a href="demo-construction">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/img/previews/preview-construction.jpg" class="img-fluid border-radius-0" alt="">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="demo-construction" class="text-color-dark text-decoration-none text-1 text-uppercase">Construction</a></h2>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item business px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="">
												<div class="portfolio-item hover-effect-1">
													<a href="demo-business-consulting">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/img/previews/preview-business-consulting.jpg" class="img-fluid border-radius-0" alt="">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="demo-business-consulting" class="text-color-dark text-decoration-none text-1 text-uppercase">Business Consulting</a></h2>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item business px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="200">
												<div class="portfolio-item hover-effect-1">
													<a href="demo-medical">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/img/previews/preview-medical.jpg" class="img-fluid border-radius-0" alt="">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="demo-medical" class="text-color-dark text-decoration-none text-1 text-uppercase">Medical</a></h2>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item business px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="400">
												<div class="portfolio-item hover-effect-1">
													<a href="demo-finance">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/img/previews/preview-finance.jpg" class="img-fluid border-radius-0" alt="">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="demo-finance" class="text-color-dark text-decoration-none text-1 text-uppercase">Finance</a></h2>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item business px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="600">
												<div class="portfolio-item hover-effect-1">
													<a href="demo-insurance">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/img/previews/preview-insurance.jpg" class="img-fluid border-radius-0" alt="">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="demo-insurance" class="text-color-dark text-decoration-none text-1 text-uppercase">Insurance</a></h2>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item business px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="600">
												<div class="portfolio-item hover-effect-1">
													<a href="demo-coffee">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/img/previews/preview-insurance.jpg" class="img-fluid border-radius-0" alt="">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="demo-coffee" class="text-color-dark text-decoration-none text-1 text-uppercase">Coffee Shop</a></h2>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item business px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="600">
												<div class="portfolio-item hover-effect-1">
													<a href="demo-architecture-interior">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/img/previews/preview-insurance.jpg" class="img-fluid border-radius-0" alt="">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="demo-architecture-interior" class="text-color-dark text-decoration-none text-1 text-uppercase">Architecture &amp; Interior Design</a></h2>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item business px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="600">
												<div class="portfolio-item hover-effect-1">
													<a href="demo-barber">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/img/previews/preview-insurance.jpg" class="img-fluid border-radius-0" alt="">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="demo-barber" class="text-color-dark text-decoration-none text-1 text-uppercase">Barber Shop</a></h2>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item business px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="">
												<div class="portfolio-item hover-effect-1">
													<a href="demo-education">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/img/previews/preview-education.jpg" class="img-fluid border-radius-0" alt="">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="demo-education" class="text-color-dark text-decoration-none text-1 text-uppercase">Education</a></h2>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item business px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="200">
												<div class="portfolio-item hover-effect-1">
													<a href="demo-digital-agency">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/img/previews/preview-digital-agency.jpg" class="img-fluid border-radius-0" alt="">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="demo-digital-agency" class="text-color-dark text-decoration-none text-1 text-uppercase">Digital Agency</a></h2>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item business px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="400">
												<div class="portfolio-item hover-effect-1">
													<a href="demo-law-firm">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/img/previews/preview-law-firm.jpg" class="img-fluid border-radius-0" alt="">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="demo-law-firm" class="text-color-dark text-decoration-none text-1 text-uppercase">Law Firm</a></h2>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item creative px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="600">
												<div class="portfolio-item hover-effect-1">
													<a href="demo-app-landing">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/img/previews/preview-app-landing.jpg" class="img-fluid border-radius-0" alt="">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="demo-app-landing" class="text-color-dark text-decoration-none text-1 text-uppercase">App Landing</a></h2>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item portfolio creative px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="">
												<div class="portfolio-item hover-effect-1">
													<a href="demo-resume">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/img/previews/preview-resume.jpg" class="img-fluid border-radius-0" alt="">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="demo-resume" class="text-color-dark text-decoration-none text-1 text-uppercase">CV - Portfolio - Resume</a></h2>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item business px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="200">
												<div class="portfolio-item hover-effect-1">
													<a href="demo-hotel">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/img/previews/preview-hotel.jpg" class="img-fluid border-radius-0" alt="">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="demo-hotel" class="text-color-dark text-decoration-none text-1 text-uppercase">Hotel</a></h2>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item business px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="400">
												<div class="portfolio-item hover-effect-1">
													<a href="demo-real-estate">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/img/previews/preview-real-estate.jpg" class="img-fluid border-radius-0" alt="">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="demo-real-estate" class="text-color-dark text-decoration-none text-1 text-uppercase">Real Estate</a></h2>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item creative business px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="600">
												<div class="portfolio-item hover-effect-1">
													<a href="demo-event">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/img/previews/preview-event.jpg" class="img-fluid border-radius-0" alt="">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="demo-event" class="text-color-dark text-decoration-none text-1 text-uppercase">Event</a></h2>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item business px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="">
												<div class="portfolio-item hover-effect-1">
													<a href="demo-restaurant">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/img/previews/preview-restaurant.jpg" class="img-fluid border-radius-0" alt="">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="demo-restaurant" class="text-color-dark text-decoration-none text-1 text-uppercase">Restaurant</a></h2>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item business px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="200">
												<div class="portfolio-item hover-effect-1">
													<a href="demo-gym">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/img/previews/preview-gym.jpg" class="img-fluid border-radius-0" alt="">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="demo-gym" class="text-color-dark text-decoration-none text-1 text-uppercase">Gym</a></h2>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item onepage creative px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="400">
												<div class="portfolio-item hover-effect-1">
													<a href="demo-one-page-agency">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/img/previews/preview-one-page-agency.jpg" class="img-fluid border-radius-0" alt="">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="demo-one-page-agency" class="text-color-dark text-decoration-none text-1 text-uppercase">One Page Agency</a></h2>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item portfolio px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="600">
												<div class="portfolio-item hover-effect-1">
													<a href="demo-photography">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/img/previews/preview-photography.jpg" class="img-fluid border-radius-0" alt="">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="demo-photography" class="text-color-dark text-decoration-none text-1 text-uppercase">Photography</a></h2>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item portfolio px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="">
												<div class="portfolio-item hover-effect-1">
													<a href="demo-photography-2">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/img/previews/preview-photography-2.jpg" class="img-fluid border-radius-0" alt="">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="demo-photography-2" class="text-color-dark text-decoration-none text-1 text-uppercase">Photography 2</a></h2>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item portfolio px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="200">
												<div class="portfolio-item hover-effect-1">
													<a href="demo-photography-3">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/img/previews/preview-photography-3.jpg" class="img-fluid border-radius-0" alt="">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="demo-photography-3" class="text-color-dark text-decoration-none text-1 text-uppercase">Photography 3</a></h2>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item business px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="400">
												<div class="portfolio-item hover-effect-1">
													<a href="demo-church">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/img/previews/preview-church.jpg" class="img-fluid border-radius-0" alt="">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="demo-church" class="text-color-dark text-decoration-none text-1 text-uppercase">Church</a></h2>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item creative px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="600">
												<div class="portfolio-item hover-effect-1">
													<a href="demo-wedding">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/img/previews/preview-wedding.jpg" class="img-fluid border-radius-0" alt="">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="demo-wedding" class="text-color-dark text-decoration-none text-1 text-uppercase">Wedding</a></h2>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item classic px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="">
												<div class="portfolio-item hover-effect-1">
													<a href="feature-layout-boxed">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/img/previews/preview-boxed.jpg" class="img-fluid border-radius-0" alt="">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="feature-layout-boxed" class="text-color-dark text-decoration-none text-1 text-uppercase">Boxed</a></h2>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item classic px-4">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="200">
												<div class="portfolio-item hover-effect-1">
													<a href="feature-layout-rtl">
														<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg border-0 border-radius-0">
															<span class="thumb-info-wrapper thumb-info-wrapper-demos m-0 border-radius-0">
																<img src="/templates/vinass/img/previews/preview-rtl.jpg" class="img-fluid border-radius-0" alt="">
															</span>
														</span>
													</a>
													<h2 class="font-weight-semibold text-3 text-center"><a href="feature-layout-rtl" class="text-color-dark text-decoration-none text-1 text-uppercase">RTL</a></h2>
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