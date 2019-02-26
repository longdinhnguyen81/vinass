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

				<aside class="nav-secondary" id="navSecondary" data-plugin-sticky data-plugin-options="{'minWidth': 991, 'padding': {'top': 72}}">
					<div class="container">
						<div class="row">
							<div class="col">
								<ul class="nav nav-pills nav-pills-tertiary justify-content-center">
									<li class="nav-item"><a class="nav-link" data-hash data-hash-offset="165" href="#dich-vu">Tiện ích</a></li>
									<li class="nav-item"><a class="nav-link" data-hash data-hash-offset="165" href="#bang-gia">Gói dịch vụ</a></li>
									<li class="nav-item"><a class="nav-link" data-hash data-hash-offset="165" href="#khach-hang">Khách Hàng</a></li>
									<li class="nav-item"><a class="nav-link" data-hash data-hash-offset="165" href="/giao-dien">Kho giao diện</a></li>
								</ul>
							</div>
						</div>
					</div>
				</aside>

				<section class="section section-no-background section-no-border m-0" id="dich-vu">
					<div class="container">
						<div class="row">
							<div class="col-lg-12 text-center">
								<h2 class="heading-dark mt-4 mb-0">Các tiện ích đi kèm khi <strong>thiết kế Web</strong></h2>
								<p class="mb-5">Chúng tôi luôn đảm bảo các trang web được thực hiện ở VINASS luôn đẹp, sử dụng trên mọi thiết bị, giúp tăng doanh thu cho khách hàng, và luôn luôn ở trên top tìm kiếm</p>
							</div>
						</div>
						<div class="row mt-4">
							<div class="col-lg-4">
								<div class="feature-box feature-box-tertiary feature-box-style-5">
									<div class="feature-box-icon">
										<i class="icon-trophy icons"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="mb-2">Thiết kế Web responsive</h4>
										<p class="mb-4">Thiết kế web responsive, sử dụng được trên tất cả các hệ điều hành. Máy tính để bàn, laptop, điện thoại di động và ipad</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="feature-box feature-box-tertiary feature-box-style-5">
									<div class="feature-box-icon">
										<i class="icon-speedometer icons"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="mb-2">Giao diện đẹp, thông minh</h4>
										<p class="mb-4">Giao diện đẹp, tùy chỉnh được, tự code 100% đảm bảo về hiệu năng, và tốc độ khi load web, và chuẩn SEO</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="feature-box feature-box-tertiary feature-box-style-5">
									<div class="feature-box-icon">
										<i class="icon-cloud-upload icons"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="mb-2">Web bán hàng online</h4>
										<p class="mb-4">Thiết kế web bán hàng online, hệ thống quản lý đơn hàng thông minh tiện lợi. Và cho phép thanh toán online</p>
									</div>
								</div>
							</div>
						</div>

						<div class="row mt-lg-3 mb-4">
							<div class="col-lg-4">
								<div class="feature-box feature-box-tertiary feature-box-style-5 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0">
									<div class="feature-box-icon">
										<i class="icon-envelope icons"></i>
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
										<i class="icon-lock icons"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="mb-2">Quảng cáo Ads/Youtube/Facebook</h4>
										<p class="mb-4">Hỗ trợ chạy quảng cáo trên Google, Youtube, Instagram, Facebook nhằm tăng doanh thu và tiếp cận với khách hàng</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="feature-box feature-box-tertiary feature-box-style-5 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="600">
									<div class="feature-box-icon">
										<i class="icon-layers icons"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="mb-2">SEO lên top google</h4>
										<p class="mb-4">Mọi trang web điều được tích hợp SEO, và chúng tôi hỗ trợ các bạn SEO trang web lên top tìm kiếm của Google</p>
									</div>
								</div>
							</div>
						</div>

					</div>
				</section>
				<section class="section section-no-border mt-0" id="bang-gia">
					<div class="container">
						<div class="row">
							<div class="col-lg-12 text-center">
								<h2 class="heading-dark mt-4 mb-0">Các gói <strong>dịch vụ</strong> làm Website</h2>
								<p class="mb-5">Hãy chọn ngay 1 gói dịch vụ bạn cảm thấy hài lòng, hoặc nhắn tin cho chúng tôi để được tư vấn</p>
							</div>
						</div>

						<div class="pricing-table pricing-table-no-gap pb-3 mb-5 mt-3">
							<div class="col-md-6 col-lg-3">
								<div class="plan">
									<div class="plan-header bg-primary py-5">
										<h3>Thiết kế WEB</h3>
										<h3 style="font-size:20px;font-weight: 400;padding-top:10px;">Thương mại điện tử</h3>
									</div>
									<div class="plan-features">
										<ul>
											<li>Website bán hàng chuyên nghiệp</li>
											<li>Web chuẩn SEO</li>
											<li>Hỗ trợ SEO lên top google</li>
											<li>Giao diện responsive</li>
											<li>Giao diện admin quản lý web</li>
											<li>Giao diện quản lý đơn hàng</li>
											<li>Bàn giao source code</li>
											<li>Email marketing miễn phí</li>
											<li>Hỗ trợ miễn phí, trọn đời</li>
										</ul>
									</div>
									<div class="plan-footer">
										<a href="#" class="btn btn-primary btn-modern btn-outline rounded-0 py-2 px-4">Lựa chọn</a>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-3">
								<div class="plan">
									<div class="plan-header bg-secondary py-5">
										<h3>Thiết kế WEB</h3>
										<h3 style="font-size:20px;font-weight: 400;padding-top:10px;">Bất động sản</h3>
									</div>
									<div class="plan-features">
										<ul>
											<li>Website giao diện chuyên nghiệp</li>
											<li>Web chuẩn SEO</li>
											<li>Hỗ trợ SEO lên top google</li>
											<li>Giao diện responsive</li>
											<li>Giao diện admin quản lý web</li>
											<li>Giao diện quản lý thành viên</li>
											<li>Bàn giao source code</li>
											<li>Email marketing miễn phí</li>
											<li>Hỗ trợ miễn phí, trọn đời</li>
										</ul>
									</div>
									<div class="plan-footer">
										<a href="#" class="btn btn-secondary btn-modern btn-outline rounded-0 py-2 px-4">Lựa chọn</a>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-3">
								<div class="plan plan-features">
									<div class="plan-header bg-success py-5">
										<h3>Thiết kế WEB</h3>
										<h3 style="font-size:20px;font-weight: 400;padding-top:10px;">Giới thiệu công ty</h3>
									</div>
									<div class="plan-features">
										<ul>
											<li>Website giới thiệu chuyên nghiệp</li>
											<li>Web chuẩn SEO</li>
											<li>Hỗ trợ SEO lên top google</li>
											<li>Giao diện responsive</li>
											<li>Giao diện admin quản lý web</li>
											<li>Giao diện quản lý tin tức</li>
											<li>Bàn giao source code</li>
											<li>Email marketing miễn phí</li>
											<li>Hỗ trợ miễn phí, trọn đời</li>
										</ul>
									</div>
									<div class="plan-footer">
										<a href="#" class="btn btn-success btn-modern btn-outline rounded-0 py-2 px-4">Lựa chọn</a>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-3">
								<div class="plan plan-features">
									<div class="plan-header bg-warning py-5">
										<h3>Thiết kế WEB</h3>
										<h3 style="font-size:20px;font-weight: 400;padding-top:10px;">Ứng dụng kết nối</h3>
									</div>
									<div class="plan-features">
										<ul>
											<li>Website, ứng dụng dễ sử dụng</li>
											<li>Website chuẩn SEO</li>
											<li>Hỗ trợ SEO lên top google</li>
											<li>Giao diện responsive</li>
											<li>Giao diện admin quản lý web</li>
											<li>Giao diện quản lý thành viên</li>
											<li>Bàn giao source code</li>
											<li>Email marketing miễn phí</li>
											<li>Hỗ trợ miễn phí, trọn đời</li>
										</ul>
									</div>
									<div class="plan-footer">
										<a href="#" class="btn btn-warning btn-modern btn-outline rounded-0 py-2 px-4">Lựa chọn</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
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
				</section>
				<section class="call-to-action call-to-action-default with-button-arrow content-align-center call-to-action-in-footer call-to-action-in-footer-margin-top">
					<div class="container">
						<div class="row">
							<div class="col-md-9 col-lg-9">
								<div class="call-to-action-content">
									<h2 class="font-weight-normal text-6 mb-0">Cải thiện <strong class="font-weight-extra-bold">Website</strong> là cách tiếp cận nhanh nhất với <strong class="font-weight-extra-bold">khách hàng</strong></h2>
									<p class="mb-0">Liên hệ ngay với chúng tôi để có ngay những <strong class="font-weight-extra-bold">Website</strong> đẹp nhất</p>
								</div>
							</div>
							<div class="col-md-3 col-lg-3">
								<div class="call-to-action-btn">
									<a href="lien-he.html" target="_blank" class="btn btn-primary btn-lg text-3 font-weight-semibold px-4 py-3">Liên hệ</a><span class="arrow hlb d-none d-md-block" data-appear-animation="rotateInUpLeft" style="top: -40px; left: 70%;"></span>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
@stop