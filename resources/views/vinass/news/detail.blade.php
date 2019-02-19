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
										<a href="blog-post.html">
											<img src="/upload/{{ $news->picture }}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
										</a>
									</div>
							
									<div class="post-date ml-0">
										<span class="day">{{ date_format($news->updated_at,'d') }}</span>
										<span class="month">{{ date_format($news->updated_at,'M') }}</span>
									</div>
							
									<div class="post-content ml-0">
							
										<h2 class="font-weight-bold"><a href="blog-post.html">{{ $news->title }}</a></h2>
							
										<div class="post-meta">
											<span><i class="far fa-user"></i> By <a href="#">John Doe</a> </span>
											<span><i class="far fa-folder"></i> <a href="#">{{ $pcat->name }}</a>, <a href="#">{{ $news->cats->name }}</a> </span>
										</div>

										<p>{{ $news->description }}</p>
										<p>{{ $news->detail}} </p>							
									</div>
								</article>
							
							</div>
						</div>
					</div>

				</div>

			</div>
@stop