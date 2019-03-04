@extends('templates.vinass.master')
@section('content')
			<div role="main" class="main">
				<div class="slider-container rev_slider_wrapper" style="height: 550px;">
					<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 550, 'responsiveLevels': [4096,1200,992,500]}">
						<ul>
							<li class="slide-overlay slide-overlay-dark slide-overlay-level-6" data-transition="fade">
								<img src="/templates/vinass/img/bg-3.jpg"  
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
									data-transform_in="y:[-50%];opacity:0;s:500;">BẠN MUỐN THIẾT KẾ</div>

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

								<p class="tp-caption font-weight-extra-bold text-color-light negative-ls-2"
									data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="center"
									data-y="center"
									data-fontsize="['50','50','50','90']"
									data-lineheight="['55','55','55','95']">APPLICATION?</p>

								<div class="tp-caption text-light font-weight-light"
									data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
									data-x="center"
									data-y="center" data-voffset="['40','40','40','80']"
									data-fontsize="['18','18','18','50']"
									data-lineheight="['20','20','20','55']">Chúng tôi sẽ giúp bạn thực hiện </div>				
							</li>
						</ul>
					</div>
				</div>

				<!-- Start Intro-->
				<div class="home-intro home-intro-quaternary" id="home-intro" style="margin-bottom:0px; background-color:#0088cc;">
					<div class="container">

						<div class="row text-center">
							<div class="col">
								<h1 class="mb-0" style="color:#fff;display: inline-block;font-size: 1.8em; font-weight: 500;line-height: 1.5;">
									Vinasofts thiết kế phần mềm quản lý, ứng dụng điện thoại android và IOS
									<span style="display: block;font-size: 0.8em;font-weight: 300;opacity: 0.7">Thiết kế các trang web, phầm mềm quản lý tốc độ nhanh, đẹp và ưu tiên trải nghiệm người dùng</span>
								</h1>
							</div>
						</div>
					</div>
				</div>
				<!-- End Intro-->


				<section >
					<div class="container py-4 my-5">
						<div class="row justify-content-center mb-4">
							<div class="col-md-12 col-lg-10">

								<div class="tabs tabs-bottom tabs-center tabs-simple custom-tabs-style-1 mt-2 mb-3">
									<ul class="nav nav-tabs mb-3">
										<li class="nav-item active">
											<a class="nav-link" href="#tabsNavigationSimpleIcons1" data-toggle="tab">
												<span class="featured-boxes featured-boxes-style-6 p-0 m-0">
													<span class="featured-box featured-box-primary featured-box-effect-6 p-0 m-0">
														<span class="box-content p-0 m-0">
															<i class="icon-featured far fa-clone icons"></i>
														</span>
													</span>
												</span>									
												<p class="text-color-dark font-weight-bold mb-0 pt-2 text-2 pb-0">Đa nền tảng</p>
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#tabsNavigationSimpleIcons2" data-toggle="tab">
												<span class="featured-boxes featured-boxes-style-6 p-0 m-0">
													<span class="featured-box featured-box-primary featured-box-effect-6 p-0 m-0">
														<span class="box-content p-0 m-0">
															<i class="icon-featured fas fa-code icons"></i>
														</span>
													</span>
												</span>									
												<p class="text-color-dark font-weight-bold mb-0 pt-2 text-2 pb-0">Hỗ trợ mọi tính năng</p>
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#tabsNavigationSimpleIcons3" data-toggle="tab">
												<span class="featured-boxes featured-boxes-style-6 p-0 m-0">
													<span class="featured-box featured-box-primary featured-box-effect-6 p-0 m-0">
														<span class="box-content p-0 m-0">
															<i class="icon-featured fas fa-mobile-alt icons"></i>
														</span>
													</span>
												</span>									
												<p class="text-color-dark font-weight-bold mb-0 pt-2 text-2 pb-0">Lập trình Android/IOS</p>
											</a>
										</li>
									</ul>
									<div class="tab-content">
										<div class="tab-pane active" id="tabsNavigationSimpleIcons1">
											<div class="text-center">
												<p>Thiết kế các ứng dụng chạy được đa nền tảng, trên máy tính, lap top, máy tỉnh bảng và điện thoại. Các ứng dụng chạy đảm bảo được hiệu năng, tốc độ, giao diện đẹp, dễ sử dụng cho khách hàng. Mọi ứng dụng điều được bảo hành trọn đời vào miễn phí.</p>
												<p>Các ứng dụng được thiết kế bởi chúng tôi, luôn nhằm mục đích giúp đỡ khách hàng trong việc quản lý kinh doanh của mình, tăng doanh thu, và tiết kiệm thời gian trong việc quản lý.</p>
											</div>
										</div>
										<div class="tab-pane" id="tabsNavigationSimpleIcons2">
											<div class="text-center">
												<p>Chúng tôi luôn lắng nghe các yêu cầu từ khách hàng, và đưa ra các giải pháp, tính năng trên phần mềm, để giúp các bạn có thể dễ dàng giải quyết các vấn đề, nhu cầu của mình.</p>
												<p>Trong quá trình sử dụng phần mềm, chúng tôi sẵn sàng hỗ trợ các bạn thêm các tính năng có thể giúp các bạn quản lý dễ dàng doanh nghiệp của mình. Phần mềm của các bạn sẽ được bảo hành trọn đời.</p>
											</div>
										</div>
										<div class="tab-pane" id="tabsNavigationSimpleIcons3">
											<div class="text-center">
												<p>Mọi phần mềm được thiết kế ở VINASS điều được thiết kế chuyên nghiệp và ngôn ngữ native Android và IOS để đảm bảo hiệu năng của phần mềm các bạn. Mọi phần mềm điều sẽ được tùy biến, chỉnh sửa lại để tạo ra những ứng dụng trên di động, để khách hàng có thể dễ dàng sử dụng ứng dụng.</p>
											</div>
										</div>
									</div>
								</div>				
							</div>
						</div>
					</div>
				</section>
				<center><hr style="width:80%;"></center>


				<section>
					<div class="container pt-2">
						<div class="row my-5 pb-5">
							<div class="col-lg-6 pr-5 appear-animation" data-appear-animation="fadeInLeft">
								<center><h2 class="word-rotator slide font-weight-normal text-7 mb-2 pb-1">
									<span>Thiết kế các phần mềm quản lý </span>
									<span class="word-rotator-words bg-primary">
										<b class="is-visible">doanh nghiệp</b>
										<b>chuỗi bán lẻ</b>
										<b>quán cà phê</b>
										<b>trường học</b>
										<b>công ty taxi</b>
									</span>
								</h2></center>
								<p class="lead">VietNam Software Solutions (VINASS) là công ty dịch vụ chuyên thiết kế các phần mềm quản lý, để giúp khách hàng dễ dàng quản lý doanh nghiệp và nhân viên của mình</p>
								<p class="lead">Các phần mềm quản lý được thiết kế theo yêu cầu, dễ sử dụng, giao diện đẹp, và được update liên tục để tăng trải nghiệm của khách hàng</p>
								<p class="lead">Phần mềm quản lý doanh nghiệp vừa và nhỏ, quản lý trường học, quản lý bệnh viện, quản lý công ty taxi, quản lý chuỗi cửa hàng bán lẻ, cà phê.</p>
							</div>
							<div class="col-lg-6 appear-animation" data-appear-animation="fadeInRight">
								<img alt="" class="img-fluid" src="/templates/vinass/img/admin_demo.png">
							</div>
						</div>
					</div>
					<center><div class="call-to-action-btn">
						<a href="lien-he" target="_blank" class="btn btn-primary btn-lg text-3 font-weight-semibold px-4 py-3">Liên hệ ngay</a>
					</div></center>
				<section>

				<!-- Tiện ích -->
				<section class="section section-no-border m-0" id="dich-vu">
					<div class="container">
						<div class="row">
							<div class="col-lg-12 text-center">
								<h2 class="heading-dark mt-4 mb-0">Các tiện ích đi kèm khi <strong>thiết kế phần mềm</strong></h2>
								<p class="mb-5">Chúng tôi luôn đảm bảo các phần mềm được thực hiện ở VINASS luôn đẹp, đảm bảo hiệu năng, tiết kiệm dung lượng, và luôn giúp đỡ các bạn dễ dàng quản lý công việc của mình</p>
							</div>
						</div>
						<div class="row mt-4">
							<div class="col-lg-4">
								<div class="feature-box feature-box-tertiary feature-box-style-5">
									<div class="feature-box-icon">
										<i class="fas fa-mobile-alt icons"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="mb-2">Thiết kế đa nền tảng</h4>
										<p class="mb-4">Các ứng dụng được thiết kế để sử dụng đa nền tảng. Trên điện thoại, máy tính bảng, lap top và máy tính bàn</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="feature-box feature-box-tertiary feature-box-style-5">
									<div class="feature-box-icon">
										<i class="far fa-clock icons"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="mb-2">Tốc độ nhanh, hiệu năng</h4>
										<p class="mb-4">Mọi phần mềm điều được đảm bảo hiệu năng nhanh, mượt mà , tăng trải nghiệm của người dùng</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="feature-box feature-box-tertiary feature-box-style-5">
									<div class="feature-box-icon">
										<i class="fas fa-database icons"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="mb-2">Lưu trữ dữ liệu</h4>
										<p class="mb-4">Hệ thống lưu trữ dữ liệu nhanh, bền và bảo mật.</p>
									</div>
								</div>
							</div>
						</div>

						<div class="row mt-lg-3 mb-4">
							<div class="col-lg-4">
								<div class="feature-box feature-box-tertiary feature-box-style-5 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0">
									<div class="feature-box-icon">
										<i class="far fa-envelope icons"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="mb-2">Miễn phí gửi email marketing</h4>
										<p class="mb-4">Miễn phí gửi email marketing cho các khách hàng nhằm tăng doanh thu và tăng lượt tiếp cận với khách hàng. Miễn phí 5000Email/Ngày</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="feature-box feature-box-tertiary feature-box-style-5 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
									<div class="feature-box-icon">
										<i class="fas fa-user-lock icons"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="mb-2">Bảo mật</h4>
										<p class="mb-4">Các dự án của khách hàng điều được đảm bảo giữ bí mật</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="feature-box feature-box-tertiary feature-box-style-5 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="600">
									<div class="feature-box-icon">
										<i class="fas fa-phone icons"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="mb-2">Hỗ trợ trọn đời</h4>
										<p class="mb-4">Các ứng dụng được thực hiện ở VINASS được hỗ trợ và bảo hành trọn đời sản phẩm.</p>
									</div>
								</div>
							</div>
						</div>

					</div>
				</section>

				<!--- Khách hàng -->

				<section class="section section-no-background section-no-border mt-0 mb-0" id="khach-hang">
					<div class="container">
						<div class="row">
							<div class="col-lg-12 text-center">
								<h2 class="heading-dark mb-0">Sự hài lòng của <strong>khách hàng</strong></h2>
								<p>100% khách hàng hài lòng với chúng tôi.</p>
							</div>
						</div>
						<div class="row mt-4">
							@foreach($feedbacks as $feedback)
							@php
								$name = $feedback->name;
								$description = $feedback->description;
								$avatar = $feedback->avatar;
								$job = $feedback->job;
							@endphp
							<div class="col-lg-6">
								<div class="testimonial testimonial-style-4 pb-4 appear-animation" data-appear-animation="fadeInLeft" data-appear-animation-delay="0">
									<blockquote>
										<p>{{$description}}</p>
									</blockquote>
									<div class="testimonial-arrow-down"></div>
									<div class="testimonial-author">
										<div class="testimonial-author-thumbnail">
											<img src="/upload/{{$avatar}}" class="img-fluid rounded-circle" alt="">
										</div>
										<p><strong>{{$name}}</strong><span>{{$job}}</span></p>
									</div>
								</div>
							</div>
							@endforeach
						</div>
						<div class="row text-center mt-5">
							<div class="owl-carousel owl-theme" data-plugin-options="{'items': 6, 'autoplay': true, 'autoplayTimeout': 3000}">
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
				</section>
				<section class="call-to-action call-to-action-default with-button-arrow content-align-center call-to-action-in-footer call-to-action-in-footer-margin-top">
					<div class="container">
						<div class="row">
							<div class="col-md-9 col-lg-9">
								<div class="call-to-action-content">
									<h2 class="font-weight-normal text-6 mb-0">Sử dụng <strong class="font-weight-extra-bold">Ứng dụng</strong> là cách tốt nhất để các quản lý <strong class="font-weight-extra-bold">công việc</strong></h2>
									<p class="mb-0">Liên hệ ngay với chúng tôi để có ngay những <strong class="font-weight-extra-bold">phần mềm</strong> tốt nhất</p>
								</div>
							</div>
							<div class="col-md-3 col-lg-3">
								<div class="call-to-action-btn">
									<a href="lien-he" target="_blank" class="btn btn-primary btn-lg text-3 font-weight-semibold px-4 py-3">Liên hệ</a><span class="arrow hlb d-none d-md-block" data-appear-animation="rotateInUpLeft" style="top: -40px; left: 70%;"></span>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
@stop

@section('meta')
		<title>VinaSofts | Thiết kế phần mềm, ứng dụng Đà Nẵng</title>
		<meta name="keywords" content="thiet ke web da nang, thiết kế web đà nẵng, thiết kế ứng dụng, phần mềm, android, ios tại đà nẵng">
		<meta name="news_keywords" content="thiet ke web da nang, thiết kế web đà nẵng, thiết kế ứng dụng, phần mềm, android, ios tại đà nẵng">
		<meta name="description" content="Vinasofts thiết kế phần mềm, chất lượng và hiệu năng tại đà nẵng. phần mềm quản lý công ty, quản lý đơn hàng">
		<meta property="og:title" itemprop="name" content="VinaSofts | Thiết kế phần mềm, ứng dụng Đà Nẵng">    
		<meta property="og:url" itemprop="url" content="https://www.vinasofts.vn/ung-dung">
		<meta property="og:description" content="Vinasofts thiết kế phần mềm, chất lượng và hiệu năng tại đà nẵng. phần mềm quản lý công ty, quản lý đơn hàng">
		<meta content="https://vinasofts.vn/templates/vinass/img/bg-3.jpg" property="og:image" itemprop="thumbnailUrl" />
		<meta rel="canonical" href="https://www.vinasofts.vn" />
@stop