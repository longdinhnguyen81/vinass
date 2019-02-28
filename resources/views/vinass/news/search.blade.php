@extends('templates.vinass.master')
@section('content')
<div role="main" class="main">

				<section class="page-header page-header-modern bg-color-light-scale-1 page-header-md" style="background-image: linear-gradient(90deg, rgba(2,0,36,0.8) 0%, rgba(67,67,115,0.8) 100%, rgba(0,212,255,0.8) 100%), url(/templates/vinass/img/bg-1.jpg); background-size: cover; background-position: center;">
					<div class="container">
						<div class="row">

							<div class="col-md-12 align-self-center p-static order-2 text-center">

								<h1 class="text-light font-weight-bold text-8">Trang Blog, chia sẻ kiến thức về công nghệ</h1>
								<span class="sub-title text-light">Cập nhật và update các tin tức mới nhất!</span>
							</div>

							<div class="col-md-12 align-self-center order-1">

								<ul class="breadcrumb d-block text-center">
									<li><a href="index.html">Home</a></li>
									<li class="active">Blog</li>
								</ul>
							</div>
						</div>
					</div>
				</section>

				<div class="container py-4">

					<div class="row">
@include('templates.vinass.leftbar')
						<div class="col-lg-9 order-1">
							<div class="blog-posts">
								@foreach($news as $new)
					@php
						$id = $new->id;
						$title = $new->title;
						$description = $new->description;
						$detail = $new->detail;
						$picture = '/upload/'.$new->picture;
						$detail = $new->detail;
						$cat = $new->cats->name;
						$cid = $new->cats->id;
						$date = $new->updated_at;
						$fullname = $new->users->fullname;
						$urlcat = route('vinass.news.cat', ['slug' => str_slug($cat), 'cid' => $cid]);
						$urldetail = route('vinass.news.detail', ['slug' => str_slug($title), 'id' => $id]);
					@endphp
								<article class="post post-medium">
									<div class="row mb-3">
										<div class="col-lg-5">
											<div class="post-image">
												<a href="{{$urldetail}}">
													<img src="{{$picture}}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="{{$title}}" />
												</a>
											</div>
										</div>
										<div class="col-lg-7">
											<div class="post-content">
												<h2 class="font-weight-semibold text-5 line-height-4 mb-2"><a href="{{$urldetail}}">{{$title}}</a></h2>
												<p class="mb-0">{{$description}}</p>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col">
											<div class="post-meta">
												<span><i class="far fa-calendar-alt"></i> {{date_format($date,'MMM Do YY')}} </span>
												<span><i class="far fa-user"></i> By <a href="">{{ $fullname }}</a> </span>
												<span><i class="far fa-folder"></i><a href="{{$urlcat}}">{{$cat}}</a> </span>
												<span class="d-block d-sm-inline-block float-sm-right mt-3 mt-sm-0"><a href="{{$urldetail}}" class="btn btn-xs btn-light text-1 text-uppercase">Chi tiết</a></span>
											</div>
										</div>
									</div>
								</article>
				@endforeach

								<ul class="pagination float-right">
									{{ $news->links() }}
								</ul>

							</div>
						</div>
					</div>

				</div>

			</div>
@stop

@section('meta')
		<title>VinaSofts | Thiết kế web tại Đà Nẵng, làm Web đẹp</title>
		<meta name="keywords" content="thiet ke web da nang, thiết kế web đà nẵng, seo top google, thiết kế web đẹp, thiết kế web bán hàng">
		<meta name="news_keywords" content="thiet ke web da nang, thiết kế web đà nẵng, seo top google, thiết kế web đẹp, thiết kế web bán hàng">
		<meta name="description" content="Vinasofts thiết kế web đẹp, chất lượng độc đáo tại đà nẵng. Thiết kế ứng dụng, web thương mại điện tử chuyên nghiệp">
		<meta property="og:title" itemprop="name" content="VinaSofts | Thiết kế web tại Đà Nẵng, làm Web đẹp, chuẩn SEO">    
		<meta property="og:url" itemprop="url" content="https://www.vinasofts.vn/search">
		<meta property="og:description" content="Vinasofts thiết kế web đẹp, chất lượng độc đáo tại đà nẵng. Thiết kế ứng dung, web thương mại điện tử chuyên nghiệp">
		<meta content="https://vinasofts.vn/templates/vinass/img/bg-1.jpg" property="og:image" itemprop="thumbnailUrl" />
@stop