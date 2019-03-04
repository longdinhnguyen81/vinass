						<div class="col-lg-3 order-2">
							<aside class="sidebar sticky-top">
								<form action="{{ route('vinass.news.search') }}" method="get">
									<div class="input-group mb-3 pb-1">
										<input class="form-control text-1" placeholder="Search..." name="name" id="s" type="text">
										<span class="input-group-append">
											<button type="submit" class="btn btn-dark text-1 p-2"><i class="fas fa-search m-2"></i></button>
										</span>
									</div>
								</form>
								<div class="tabs tabs-primary mb-4 pb-2">
									<ul class="nav nav-tabs">
										<li class="nav-item active"><a class="nav-link show active text-1 font-weight-bold text-uppercase" href="#popularPosts" data-toggle="tab">Ngẫu nhiên</a></li>
										<li class="nav-item"><a class="nav-link text-1 font-weight-bold text-uppercase" href="#recentPosts" data-toggle="tab">Tin tức mới</a></li>
									</ul>
									<div class="tab-content">
										<div class="tab-pane active" id="popularPosts">
											<ul class="simple-post-list">
												@foreach($randoms as $random)	
													<li>
														<div class="post-image">
															<div class="img-thumbnail img-thumbnail-no-borders d-block">
																<a href="{{ route('vinass.news.detail', ['slug' => str_slug($random->title), 'id' => $random->id]) }}">
																	<img src="/upload/{{ $random->image }}" width="50" height="50" alt="{{ $random->title }}">
																</a>
															</div>
														</div>
														<div class="post-info">
															<a href="{{ route('vinass.news.detail', ['slug' => str_slug($random->title), 'id' => $random->id]) }}">{{ $random->title }}</a>
															<div class="post-meta">
																 {{ date_format($random->updated_at, 'd m Y') }}
															</div>
														</div>
													</li>
												@endforeach
											</ul>
										</div>
										<div class="tab-pane" id="recentPosts">
											<ul class="simple-post-list">
												@foreach($fiveNews as $fiveNew)	
													<li>
														<div class="post-image">
															<div class="img-thumbnail img-thumbnail-no-borders d-block">
																<a href="{{{ route('vinass.news.detail', ['slug' => str_slug($fiveNew->title), 'id' => $fiveNew->id]) }}}">
																	<img src="/upload/{{ $fiveNew->image }}" width="50" height="50" alt="{{ $fiveNew->title }}">
																</a>
															</div>
														</div>
														<div class="post-info">
															<a href="{{ route('vinass.news.detail', ['slug' => str_slug($random->title), 'id' => $random->id]) }}">{{ $fiveNew->title }}</a>
															<div class="post-meta">
																 {{ date_format($fiveNew->updated_at, 'd m Y') }}
															</div>
														</div>
													</li>
												@endforeach
											</ul>
										</div>
									</div>
								</div>
								<h5 class="font-weight-bold pt-4">Về chúng tôi</h5>
								<p>VietNam Software Solutions (VINASS) là công ty dịch vụ chuyên cung cấp các sản phẩm, dịch vụ công nghệ, đặc biệt đưa ra những định hướng và giải pháp tối ưu công nghệ, đưa công nghệ mới cho các đối tác.</p>
								<div class="fb-page" data-href="https://www.facebook.com/VinaSofts" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
    								<blockquote cite="https://www.facebook.com/VinaSofts" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/VinaSofts">Vina Software Solution</a></blockquote>
    							</div>
							</aside>
						</div>