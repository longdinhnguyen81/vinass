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
									<li><a href="">Home</a></li>
									<li><a href="/blog">Blog</a></li>
									<li><a href="{{ route('vinass.news.parent', str_slug($pcat->name)) }}">{{ $pcat->name }}</a></li>
									<li><a href="{{ route('vinass.news.cat', ['slug' => str_slug($news->cats->name), 'id' => $news->cats->id]) }}">{{ $news->cats->name }}</a></li>
									<li class="active">{{ $news->title }}</li>
								</ul>
							</div>
						</div>
					</div>
				</section>
				<div class="container py-4">

					<div class="row">
						
@include('templates.vinass.leftbar')
						<div class="col-lg-9 order-1">
							<div class="blog-posts single-post">
							
								<article class="post post-large blog-single-post border-0 m-0 p-0">
									<div class="post-image ml-0">
											<img src="/upload/{{ $news->picture }}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="{{ $news->title }}" />
									</div>
										<div class="ml-0">
										<div class="fb-like" data-href="https://vinasoft.vn" data-layout="standard" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>
									</div>
									<div class="post-date ml-0">
										<span class="day">{{ date_format($news->updated_at,'d') }}</span>
										<span class="month">{{ date_format($news->updated_at,'M') }}</span>
									</div>
							
									<div class="post-content ml-0">
							
										<h2 class="font-weight-bold"><a href="blog-post.html">{{ $news->title }}</a></h2>
							
										<div class="post-meta">
											<span><i class="far fa-user"></i> By <a href="#">{{ $news->users->fullname }}</a> </span>
											<span><i class="far fa-folder"></i> <a href="#">{{ $pcat->name }}</a>, <a href="#">{{ $news->cats->name }}</a> </span>
										</div>

										<p>{{ $news->description }}</p>
										<p>{!!  $news->detail !!} </p>							
									</div>
								</article>
								
							</div>
						</div>
					</div>
					<div class="fb-comments" data-href="https://vinasofts.vn" data-numposts="5"></div>
						<h2 class="mt-2">Tin liên quan</h2>
					<div class="row recent-posts pb-5 mb-4">
						@foreach($newss as $new)
						<div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
							<article>
								<div class="row">
									<div class="col">
										<a href="{{ route('vinass.news.detail', ['slug' => str_slug($new->title), 'id' => $new->id]) }}" class="text-decoration-none">
											<img src="/upload/{{ $new->image }}" class="img-fluid hover-effect-2 mb-3" alt="{{ $new->title }}" />
										</a>
									</div>
								</div>
								<div class="row">
									<div class="col-auto pr-0">
										<div class="date">
											<span class="day text-color-dark font-weight-extra-bold">{{ date_format($new->updated_at, 'd') }}</span>
											<span class="month text-1">{{ date_format($new->updated_at, 'M') }}</span>
										</div>
									</div>
									<div class="col pl-1">
										<h4 class="line-height-3 text-4"><a href="{{ route('vinass.news.detail', ['slug' => str_slug($new->title), 'id' => $new->id]) }}" class="text-dark">{{ $new->title }}</p>
										<a href="{{ route('vinass.news.detail', ['slug' => str_slug($new->title), 'id' => $new->id]) }}" class="read-more text-color-dark font-weight-bold text-2">Xem chi tiết <i class="fas fa-chevron-right text-1 ml-1"></i></a>
									</div>
								</div>
							</article>
						</div>
						@endforeach
					</div>
				</div>

			</div>
@stop

@section('meta')
		<meta property="og:title" itemprop="name" content="{{ $news->name }}" />    
		<meta property="og:url" itemprop="url" content="{{ route('vinass.news.detail', ['slug' => str_slug($new->title), 'id' => $new->id]) }}" />
		<meta property="og:description" content="{{ $news->description }}" />
		<meta name="keywords" itemprop="keywords" content="thiet ke web da nang, thiết kế web đà nẵng, seo top google, lập trình web đà nẵng, lap trinh web da nang , {{ $news->name }}" />
		<meta content="https://vinasofts.vn/upload/{{ $new->image }}" property="og:image" itemprop="thumbnailUrl" />
@stop