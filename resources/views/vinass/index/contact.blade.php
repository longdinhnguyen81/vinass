@extends('templates.vinass.master')
@section('content')
		<div role="main" class="main">
				
			<section class="page-header page-header-modern bg-color-primary page-header-md">
				<div class="container">
					<div class="row">
						<div class="col-md-8 order-2 order-md-1 align-self-center p-static">
							<h1>Chúng tôi đi đầu <span>trong việc thiết kế Web</span></h1>
						</div>
						<div class="col-md-4 order-1 order-md-2 align-self-center">
							<ul class="breadcrumb d-block text-md-right breadcrumb-light">
								<li><a href="demo-medical.html">Trang chủ</a></li>
								<li class="active">Liên hệ</li>
							</ul>
						</div>
					</div>
				</div>
			</section>

			<div class="container">
				<div class="row py-4">
					<div class="col-lg-6">

						<div class="overflow-hidden mb-1">
							<h2 class="font-weight-normal text-7 mt-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200"><strong class="font-weight-extra-bold">Liên hệ</strong> với chúng tôi</h2>
						</div>
						<div class="overflow-hidden mb-4 pb-3">
							<p class="mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400">Gửi câu hỏi cho chúng tôi!</p>
						</div>

						<form id="contactForm" class="contact-form appear-animation" action="{{route('vinass.index.contact')}}" method="POST" data-appear-animation="fadeIn" data-appear-animation-delay="600">
							{{ csrf_field() }}

@if(Session::has('msg'))
							<div class="contact-form-success alert alert-success mt-4" id="contactSuccess">
								<strong>Success!</strong> {{ Session::get('msg')}}
							</div>
@endif

@if ($errors->any())
	<div class="contact-form-error alert alert-danger mt-4" id="contactError">
        @foreach ($errors->all() as $error)
			<strong>Error!</strong> {{ $error }}.
			<span class="mail-error-message text-1 d-block" id="mailErrorMessage"></span>
        @endforeach
    </div>
@endif
							
							<div class="form-row">
								<div class="form-group col-lg-6">
									<label class="required font-weight-bold text-dark">Họ và tên:</label>
									<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="fullname" id="name">
								</div>
								<div class="form-group col-lg-6">
									<label class="required font-weight-bold text-dark">Địa chỉ email:</label>
									<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col">
									<label class="required font-weight-bold text-dark">Tiêu đề:</label>
									<input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col">
									<label class="required font-weight-bold text-dark">Nội dung:</label>
									<textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control" name="message" id="message"></textarea>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col">
									<input type="submit" value="Gửi" class="btn btn-primary btn-modern" data-loading-text="Loading...">
								</div>
							</div>
						</form>
					</div>
					<div class="col-lg-6">

						<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800">
							<h4 class="mt-2 mb-1">Văn phòng của <strong>chúng tôi</strong></h4>
							<ul class="list list-icons list-icons-style-2 mt-2">
								<li><i class="fas fa-map-marker-alt top-6"></i> <strong class="text-dark">Địa chỉ:</strong> Tầng 2, 121 Cù Chính Lan, phường Thanh Khê - TP Đà Nẵng</li>
								<li><i class="fas fa-phone top-6"></i> <strong class="text-dark">Phone:</strong> 0978.175506</li>
								<li><i class="fas fa-envelope top-6"></i> <strong class="text-dark">Email:</strong> taiembkdn@gmail.com</li>
							</ul>
						</div>

						<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="950">
							<h4 class="pt-5">Giờ <strong>làm việc</strong></h4>
							<ul class="list list-icons list-dark mt-2">
								<li><i class="far fa-clock top-6"></i> Monday - Saturday - 8am to 5:30pm</li>
							</ul>
						</div>

						<h4 class="pt-5">Vina Software <strong>Solutions</strong></h4>
						<p class="lead mb-0 text-4">VietNam Software Solutions (VINASS) là công ty dịch vụ chuyên cung cấp các sản phẩm, dịch vụ công nghệ, đặc biệt đưa ra những định hướng và giải pháp tối ưu công nghệ, đưa công nghệ mới cho các đối tác.</p>

					</div>

				</div>

			</div>

			<section class="call-to-action call-to-action-default with-button-arrow content-align-center call-to-action-in-footer call-to-action-in-footer-margin-top">
					<div class="container">\
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

@section('meta')
		<meta property="og:title" itemprop="name" content="Vinasoft Solution - Công ty giải pháp công nghệ hàng đầu Việt Nam" />    
		<meta property="og:url" itemprop="url" content="https://www.vinasofts.vn/lien-he" />
		<meta property="og:description" content="Thiết kế web chuẩn responsive. Seo top google. Xây dựng ứng dụng đa nền tảng." />
		<meta name="keywords" itemprop="keywords" content="thiet ke web da nang, thiết kế web đà nẵng, seo top google, lập trình web đà nẵng, lap trinh web da nang" />
		<meta content="https://vinasofts.vn/templates/vinass/img/bg-1.jpg" property="og:image" itemprop="thumbnailUrl" />
@stop