<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>Vinass - Giải pháp công nghệ hàng đầu Việt Nam</title>	

		<meta property="og:type" content="Website" />
		<meta property="og:locale" content="vi_VN" />
		@yield('meta')
		<!-- Favicon -->
		<link rel="shortcut icon" href="/templates/vinass/img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="/templates/vinass/img/apple-touch-icon.png">

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
		<style>
			#header .header-nav-main nav > ul > li > a {
				font-size:14px;
				font-weight: 600;
			}
			.thumb-info.thumb-info-bottom-info .thumb-info-title {
				background-color: #0088cc;
			}

			.image-border{
				border: 1px solid #0088cc;
			}

			.text-custom-1{
				font-size:25px;
				font-weight: 600;
				color:#222;
			}
			.text-custom-2{
				font-size:18px;
				font-weight: 600;
				color:#333
			}

			.feature-box-tertiary.feature-box-style-5 .feature-box-icon [class*="fa-"], html .feature-box-tertiary.feature-box-style-5 .feature-box-icon .icons {
			    color: #0088cc;
			}
			.active-footer{
				left: 3px !important;
				color: #FFF !important;
			}
		</style>

<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v3.2'
    });
  };

  (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
  attribution=setup_tool
  page_id="292741454733749"
  theme_color="#0084ff">
</div>
	</head>
	<body data-spy="scroll" data-target="#navSecondary" data-offset="170">

		<div class="body">
			<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}">
				<div class="header-body border-color-primary header-body-bottom-border">
					<div class="header-top header-top-default border-bottom-0" style="background-color: #ccccff;">
						<div class="container">
							<div class="header-row py-2">
								<div class="header-column justify-content-start">
									<div class="header-row">
										<nav class="header-nav-top">
											<ul class="nav nav-pills text-uppercase text-2">
												<li class="nav-item nav-item-anim-icon d-none d-md-block">
													<a class="nav-link pl-0" href="/gioi-thieu"><i class="fas fa-angle-right"></i>Giới thiệu</a>
												</li>
												<li class="nav-item nav-item-anim-icon d-none d-md-block">
													<a class="nav-link" href="/lien-he"><i class="fas fa-angle-right"></i>Liên hệ</a>
												</li>
											</ul>
										</nav>
									</div>
								</div>
								<div class="header-column justify-content-end">
									<div class="header-row">
										<nav class="header-nav-top">
											<ul class="nav nav-pills">
												<li class="nav-item">
													<a href="mailto:taiembkdn@gmail.com"><i class="far fa-envelope text-4 text-color-primary" style="top: 1px;"></i>taiembkdn@gmail.com</a>
												</li>
												<li class="nav-item">
													<a href="tel:0978175506"><i class="fab fa-whatsapp text-4 text-color-primary" style="top: 0;"></i>0978.175506</a>
												</li>
											</ul>
										</nav>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column flex-grow-0">
								<div class="header-row pr-4">
									<div class="header-logo">
										<a href="/">
											<img alt="Porto" width="150" height="50" src="/templates/vinass/img/logo.png">
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<div class="header-nav header-nav-links header-nav-bottom-line justify-content-center order-2 order-lg-1">
										<div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
											<nav class="collapse">
												<ul class="nav nav-pills" id="mainNav">
													<li class="dropdown">
														<a class="dropdown-item {{ request()->is('/') ? 'active' : '' }}" href="/">
															Trang Chủ
														</a>
													</li>
													<li class="dropdown">
														<a class="dropdown-item {{ request()->is('gioi-thieu') ? 'active' : '' }}" href="/gioi-thieu">
															Giới thiệu
														</a>
													</li>
													<li class="dropdown">
														<a class="dropdown-item {{ request()->is('thiet-ke-web') ? 'active' : '' }}" href="/thiet-ke-web">
															Thiết kế web
														</a>
													</li>
													<li class="dropdown">
														<a class="dropdown-item {{request()->is('giao-dien') ? 'active' : '' }}" href="/giao-dien">
																	Kho giao diện
																</a>
													</li>
													<li class="dropdown">
														<a class="dropdown-item {{ request()->is('ung-dung') ? 'active' : '' }}" href="/ung-dung">
															Ứng dụng
														</a>
													</li>
													<li class="dropdown">
														<a class="dropdown-item {{ request()->is('lien-he') ? 'active' : '' }}" href="/lien-he">
															Liên hệ
														</a>
													</li>
													<li class="dropdown">
														<a class="dropdown-item {{ request()->is('blog*') ? 'active' : '' }}" href="/blog">
															Blog
														</a>
														<ul class="dropdown-menu">
											@foreach($categorys as $category)
												@php
													$id = $category->id;
													$name = $category->name;
													$url = route('vinass.news.parent', str_slug($name));
												@endphp
															<li class="dropdown-submenu">
																<a class="dropdown-item {{ request()->is('blog*') ? 'active' : '' }}" href="{{$url}}">
																	{{$name}}
																</a>				
																	<ul class="dropdown-menu">
												@foreach($parent_cats as $parent_cat)
													@php
														$pname = $parent_cat->name;
														$purl = route('vinass.news.cat',['slug' => str_slug($pname), 'id' => $parent_cat->id]);
													@endphp
																@if($parent_cat->parent_id == $id)
																		<li><a class="dropdown-item" href="{{$purl}}">{{$pname}}</a></li>
																@endif
												@endforeach
																	</ul>
															</li>
											@endforeach
														</ul>
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
											<ul class="header-social-icons social-icons d-none d-sm-block">
												<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
												<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
												<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>