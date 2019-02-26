@include('templates.vinass.header')
	@yield('content')
@include('templates.vinass.footer')
@section('header')
	<div class="header-top header-top-default border-bottom-0" style="background-color: #add9ff; height: 52px;">
		<div class="container">
			<div class="header-row py-2">
				<div class="header-column justify-content-start">
					<div class="header-row">
						<nav class="header-nav-top">
							<ul class="nav nav-pills text-uppercase text-2">
								<li class="nav-item nav-item-anim-icon d-none d-md-block">
									<a class="nav-link pl-0" href="/gioi-thieu"><i class="fas fa-angle-right"></i>Trang chủ</a>
								</li>
								<li class="nav-item nav-item-anim-icon d-none d-md-block">
									<a class="nav-link" href="/lien-he"><i class="fas fa-angle-right"></i>Demo</a>
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
@stop